<?php

namespace Bayne\Telegram\Bot;

use Bayne\Serializer\Normalizer\GetSetExcludeNormalizer;
use Bayne\Telegram\Bot\Type\AbstractInlineQueryResult;
use Bayne\Telegram\Bot\Type\AbstractInputMessageContent;
use Bayne\Telegram\Bot\Type\AbstractType;
use Bayne\Telegram\Bot\Type\InputFileInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Client implements ClientInterface
{
    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $client;
    /**
     * @var
     */
    private $token;
    /**
     * @var string
     */
    private $baseUrl;
    /**
     * @var CamelCaseToSnakeCaseNameConverter
     */
    private $converter;
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * Client constructor.
     * @param \GuzzleHttp\ClientInterface $client
     * @param $token
     * @param CamelCaseToSnakeCaseNameConverter $converter
     * @param string $baseUrl
     */
    public function __construct(
        \GuzzleHttp\ClientInterface $client,
        $token,
        CamelCaseToSnakeCaseNameConverter $converter,
        $baseUrl = 'https://api.telegram.org'
    ) {
        $this->client = $client;
        $this->token = $token;
        $this->baseUrl = $baseUrl;
        $this->converter = $converter;
        $this->serializer = new Serializer(
            [
                new GetSetExcludeNormalizer(
                    null,
                    new CamelCaseToSnakeCaseNameConverter()
                )
            ],
            [
                new JsonEncoder()
            ]
        );
    }

    protected function getParameters($methodName, $parameters)
    {
        $reflection = new \ReflectionMethod(self::class, $methodName);
        $reflectionParameters = $reflection->getParameters();
        $formParameters = [];
        foreach ($reflectionParameters as $reflectionParameter) {
            if (isset($parameters[$reflectionParameter->getPosition()])) {
                $formParameters[$this->converter->normalize($reflectionParameter->getName())] = $parameters[$reflectionParameter->getPosition()];
            }
        }

        $updatedParameters = [];
        foreach ($formParameters as $name => $value) {
            if ($value instanceof InputFileInterface) {
                throw new \InvalidArgumentException();
            } elseif ($value instanceof AbstractInlineQueryResult) {
                $updatedParameters[$name] = $this->serializer->serialize($value, 'json');
            } elseif ($value instanceof AbstractInputMessageContent) {
                $updatedParameters[$name] = $this->serializer->serialize($value, 'json');
            } elseif ($value instanceof AbstractType) {
                $updatedParameters[$name] = $this->serializer->serialize($value, 'json');
            } else {
                $updatedParameters[$name] = $value;
            }
        }

        return $updatedParameters;
    }


    /**
     * @param string $methodName
     * @param array $parameters
     *
     * @return ResponseInterface
     */
    protected function callMethod($methodName, $parameters)
    {
        return $this->client->request(
            'post',
            $this->baseUrl.'/bot'.$this->token.'/'.$methodName,
            [
                'form_params' => $this->getParameters($methodName, $parameters)
            ]
        );
    }

    /**
     * https://core.telegram.org/bots/api#getupdates
     *
     * Use this method to receive incoming updates using long polling (wiki). An Array of Update objects is returned.
     *
     * @param int $offset
     *        Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of
     * previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update
     * is considered confirmed as soon as getUpdates is called with an offset higher than its update_id. The negative
     * offset can be specified to retrieve updates starting from -offset update from the end of the updates queue. All
     * previous updates will forgotten.
     *
     * @param int $limit
     *        Limits the number of updates to be retrieved. Values between 1—100 are accepted. Defaults to 100.
     *
     * @param int $timeout
     *        Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling
     * should be used for testing purposes only.
     *
     * @param string[]|array $allowedUpdates
     *        List the types of updates you want your bot to receive. For example, specify [“message”,
     * “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available
     * update types. Specify an empty list to receive all updates regardless of type (default). If not specified, the
     * previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the
     * getUpdates, so unwanted updates may be received for a short period of time.
     *
     * @return ResponseInterface
     */
    public function getUpdates(
        $offset = null,
        $limit = null,
        $timeout = null,
        array $allowedUpdates = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setwebhook
     *
     * If you'd like to make sure that the Webhook request comes from Telegram, we recommend using a secret path in the URL,
     * e.g. https://www.example.com/&lt;token&gt;. Since nobody else knows your bot‘s token, you can be
     * pretty sure it’s us. Use this method to specify a url and receive incoming updates via an outgoing webhook. Whenever there
     * is an update for the bot, we will send an HTTPS POST request to the specified url, containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns True on
     * success.
     *
     * @param string $url
     *        HTTPS url to send updates to. Use an empty string to remove webhook integration
     *
     * @param Type\InputFileInterface $certificate
     *        Upload your public key certificate so that the root certificate in use can be checked. See our self-signed guide
     * for details.
     *
     * @param int $maxConnections
     *        Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults
     * to 40. Use lower values to limit the load on your bot‘s server, and higher values to increase your bot’s
     * throughput.
     *
     * @param string[]|array $allowedUpdates
     *        List the types of updates you want your bot to receive. For example, specify [“message”,
     * “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available
     * update types. Specify an empty list to receive all updates regardless of type (default). If not specified, the
     * previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the
     * setWebhook, so unwanted updates may be received for a short period of time.
     *
     * @return ResponseInterface
     */
    public function setWebhook(
        $url,
        Type\InputFileInterface $certificate = null,
        $maxConnections = null,
        array $allowedUpdates = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendmessage
     *
     * Use this method to send text messages. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param string $text
     *        Text of the message to be sent
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your
     * bot's message.
     *
     * @param bool $disableWebPagePreview
     *        Disables link previews for links in this message
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendMessage(
        $chatId,
        $text,
        $parseMode = null,
        $disableWebPagePreview = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#forwardmessage
     *
     * Use this method to forward messages of any kind. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int|string $fromChatId
     *        Unique identifier for the chat where the original message was sent (or channel username in the format
     * @channelusername)
     *
     * @param int $messageId
     *        Message identifier in the chat specified in from_chat_id
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @return ResponseInterface
     */
    public function forwardMessage(
        $chatId,
        $fromChatId,
        $messageId,
        $disableNotification = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendphoto
     *
     * Use this method to send photos. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $photo
     *        Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended), pass an
     * HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data.
     * More info on Sending Files »
     *
     * @param string $caption
     *        Photo caption (may also be used when resending photos by file_id), 0-1024 characters
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendPhoto(
        $chatId,
        $photo,
        $caption = null,
        $parseMode = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendaudio
     *
     * For sending voice messages, use the sendVoice method instead. Use this method to send
     * audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .mp3 format. On
     * success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this
     * limit may be changed in the future.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $audio
     *        Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers
     * (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     *
     * @param string $caption
     *        Audio caption, 0-1024 characters
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param int $duration
     *        Duration of the audio in seconds
     *
     * @param string $performer
     *        Performer
     *
     * @param string $title
     *        Track name
     *
     * @param Type\InputFileInterface|string $thumb
     *        Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as
     * a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendAudio(
        $chatId,
        $audio,
        $caption = null,
        $parseMode = null,
        $duration = null,
        $performer = null,
        $title = null,
        $thumb = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#senddocument
     *
     * Use this method to send general files. On success, the sent Message is returned. Bots can
     * currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $document
     *        File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an
     * HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More
     * info on Sending Files »
     *
     * @param Type\InputFileInterface|string $thumb
     *        Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as
     * a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @param string $caption
     *        Document caption (may also be used when resending documents by file_id), 0-1024 characters
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendDocument(
        $chatId,
        $document,
        $thumb = null,
        $caption = null,
        $parseMode = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendvideo
     *
     * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB
     * in size, this limit may be changed in the future.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $video
     *        Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an
     * HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data.
     * More info on Sending Files »
     *
     * @param int $duration
     *        Duration of sent video in seconds
     *
     * @param int $width
     *        Video width
     *
     * @param int $height
     *        Video height
     *
     * @param Type\InputFileInterface|string $thumb
     *        Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as
     * a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @param string $caption
     *        Video caption (may also be used when resending videos by file_id), 0-1024 characters
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param bool $supportsStreaming
     *        Pass True, if the uploaded video is suitable for streaming
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendVideo(
        $chatId,
        $video,
        $duration = null,
        $width = null,
        $height = null,
        $thumb = null,
        $caption = null,
        $parseMode = null,
        $supportsStreaming = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendanimation
     *
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $animation
     *        Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers
     * (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using
     * multipart/form-data. More info on Sending Files »
     *
     * @param int $duration
     *        Duration of sent animation in seconds
     *
     * @param int $width
     *        Animation width
     *
     * @param int $height
     *        Animation height
     *
     * @param Type\InputFileInterface|string $thumb
     *        Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as
     * a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @param string $caption
     *        Animation caption (may also be used when resending animation by file_id), 0-1024 characters
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendAnimation(
        $chatId,
        $animation,
        $duration = null,
        $width = null,
        $height = null,
        $thumb = null,
        $caption = null,
        $parseMode = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendvoice
     *
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For
     * this to work, your audio must be in an .ogg file encoded with OPUS (other formats may be sent as Audio
     * or Document). On success, the sent Message is returned. Bots can
     * currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $voice
     *        Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     *
     * @param string $caption
     *        Voice message caption, 0-1024 characters
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param int $duration
     *        Duration of the voice message in seconds
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendVoice(
        $chatId,
        $voice,
        $caption = null,
        $parseMode = null,
        $duration = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendvideonote
     *
     * As of v.4.0, Telegram clients
     * support rounded square mp4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $videoNote
     *        Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers
     * (recommended) or upload a new video using multipart/form-data. More info on Sending Files ». Sending video notes by a URL is
     * currently unsupported
     *
     * @param int $duration
     *        Duration of sent video in seconds
     *
     * @param int $length
     *        Video width and height, i.e. diameter of the video message
     *
     * @param Type\InputFileInterface|string $thumb
     *        Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as
     * a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendVideoNote(
        $chatId,
        $videoNote,
        $duration = null,
        $length = null,
        $thumb = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendmediagroup
     *
     * Use this method to send a group of photos or videos as an album. On success, an array of the sent Messages is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputMediaPhoto and InputMediaVideo[]|array $media
     *        A JSON-serialized array describing photos and videos to be sent, must include 2–10 items
     *
     * @param bool $disableNotification
     *        Sends the messages silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the messages are a reply, ID of the original message
     *
     * @return ResponseInterface
     */
    public function sendMediaGroup(
        $chatId,
        array $media,
        $disableNotification = null,
        $replyToMessageId = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendlocation
     *
     * Use this method to send point on the map. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param float $latitude
     *        Latitude of the location
     *
     * @param float $longitude
     *        Longitude of the location
     *
     * @param int $livePeriod
     *        Period in seconds for which the location will be updated (see Live Locations, should be between 60 and 86400.
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendLocation(
        $chatId,
        $latitude,
        $longitude,
        $livePeriod = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#editmessagelivelocation
     *
     * Use this method to edit live location messages. A location can be edited until its live_period expires or
     * editing is explicitly disabled by a call to stopMessageLiveLocation. On
     * success, if the edited message was sent by the bot, the edited Message is returned, otherwise
     * True is returned.
     *
     * @param int|string $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat or username of the
     * target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param float $latitude
     *        Latitude of new location
     *
     * @param float $longitude
     *        Longitude of new location
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for a new inline keyboard.
     *
     * @return ResponseInterface
     */
    public function editMessageLiveLocation(
        $chatId,
        $messageId,
        $inlineMessageId,
        $latitude,
        $longitude,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#stopmessagelivelocation
     *
     * Use this method to stop updating a live location message before live_period expires. On success, if the
     * message was sent by the bot, the sent Message is returned, otherwise True is returned.
     *
     * @param int|string $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat or username of the
     * target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the message with live location to stop
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for a new inline keyboard.
     *
     * @return ResponseInterface
     */
    public function stopMessageLiveLocation(
        $chatId,
        $messageId,
        $inlineMessageId,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendvenue
     *
     * Use this method to send information about a venue. On success, the sent Message is
     * returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param float $latitude
     *        Latitude of the venue
     *
     * @param float $longitude
     *        Longitude of the venue
     *
     * @param string $title
     *        Name of the venue
     *
     * @param string $address
     *        Address of the venue
     *
     * @param string $foursquareId
     *        Foursquare identifier of the venue
     *
     * @param string $foursquareType
     *        Foursquare type of the venue, if known. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendVenue(
        $chatId,
        $latitude,
        $longitude,
        $title,
        $address,
        $foursquareId = null,
        $foursquareType = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendcontact
     *
     * Use this method to send phone contacts. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param string $phoneNumber
     *        Contact's phone number
     *
     * @param string $firstName
     *        Contact's first name
     *
     * @param string $lastName
     *        Contact's last name
     *
     * @param string $vcard
     *        Additional data about the contact in the form of a vCard, 0-2048 bytes
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendContact(
        $chatId,
        $phoneNumber,
        $firstName,
        $lastName = null,
        $vcard = null,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendpoll
     *
     * Use this method to send a native poll. A native poll can't be sent to a private chat. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername). A
     * native poll can't be sent to a private chat.
     *
     * @param string $question
     *        Poll question, 1-255 characters
     *
     * @param string[]|array $options
     *        List of answer options, 2-10 strings 1-100 characters each
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendPoll(
        $chatId,
        $question,
        array $options,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendchataction
     *
     * We only recommend using this method when a response from the bot will take a noticeable amount of
     * time to arrive.  Example: The ImageBot needs some time to process a request
     * and upload the image. Instead of sending a text message along the lines of “Retrieving image, please wait…”, the
     * bot may use sendChatAction with action = upload_photo. The user
     * will see a “sending photo” status for the bot.  Use this method when you need to tell the user that something is
     * happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear
     * its typing status). Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param string $action
     *        Type of action to broadcast. Choose one, depending on what the user is about to receive: typing for text
     * messages, upload_photo for photos, record_video or upload_video for videos, record_audio or upload_audio for audio
     * files, upload_document for general files, find_location for location data, record_video_note or
     * upload_video_note for video notes.
     *
     * @return ResponseInterface
     */
    public function sendChatAction(
        $chatId,
        $action
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getuserprofilephotos
     *
     * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
     *
     * @param int $userId
     *        Unique identifier of the target user
     *
     * @param int $offset
     *        Sequential number of the first photo to be returned. By default, all photos are returned.
     *
     * @param int $limit
     *        Limits the number of photos to be retrieved. Values between 1—100 are accepted. Defaults to 100.
     *
     * @return ResponseInterface
     */
    public function getUserProfilePhotos(
        $userId,
        $offset = null,
        $limit = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getfile
     *
     * Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download files
     * of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the
     * link https://api.telegram.org/file/bot&lt;token&gt;/&lt;file_path&gt;, where
     * &lt;file_path&gt; is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new
     * one can be requested by calling getFile again.
     *
     * @param string $fileId
     *        File identifier to get info about
     *
     * @return ResponseInterface
     */
    public function getFile(
        $fileId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#kickchatmember
     *
     *  Note: In regular groups (non-supergroups), this method will only work if the ‘All Members Are Admins’
     * setting is off in the target group. Otherwise members may only be removed by the group's creator or by the member that added
     * them.  Use this method to kick a user from a group, a supergroup or a channel. In the case of supergroups and channels, the user
     * will not be able to return to the group on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target group or username of the target supergroup or channel (in the format
     * @channelusername)
     *
     * @param int $userId
     *        Unique identifier of the target user
     *
     * @param int $untilDate
     *        Date when the user will be unbanned, unix time. If user is banned for more than 366 days or less than 30 seconds from
     * the current time they are considered to be banned forever
     *
     * @return ResponseInterface
     */
    public function kickChatMember(
        $chatId,
        $userId,
        $untilDate = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#unbanchatmember
     *
     * Use this method to unban a previously kicked user in a supergroup or channel. The user will not
     * return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this
     * to work. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target group or username of the target supergroup or channel (in the format
     * @username)
     *
     * @param int $userId
     *        Unique identifier of the target user
     *
     * @return ResponseInterface
     */
    public function unbanChatMember(
        $chatId,
        $userId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#restrictchatmember
     *
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work
     * and must have the appropriate admin rights. Pass True for all boolean parameters to lift restrictions from a
     * user. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup (in the format
     * @supergroupusername)
     *
     * @param int $userId
     *        Unique identifier of the target user
     *
     * @param int $untilDate
     *        Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less
     * than 30 seconds from the current time, they are considered to be restricted forever
     *
     * @param bool $canSendMessages
     *        Pass True, if the user can send text messages, contacts, locations and venues
     *
     * @param bool $canSendMediaMessages
     *        Pass True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies
     * can_send_messages
     *
     * @param bool $canSendOtherMessages
     *        Pass True, if the user can send animations, games, stickers and use inline bots, implies
     * can_send_media_messages
     *
     * @param bool $canAddWebPagePreviews
     *        Pass True, if the user may add web page previews to their messages, implies can_send_media_messages
     *
     * @return ResponseInterface
     */
    public function restrictChatMember(
        $chatId,
        $userId,
        $untilDate = null,
        $canSendMessages = null,
        $canSendMediaMessages = null,
        $canSendOtherMessages = null,
        $canAddWebPagePreviews = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#promotechatmember
     *
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for
     * this to work and must have the appropriate admin rights. Pass False for all boolean parameters to demote a user.
     * Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $userId
     *        Unique identifier of the target user
     *
     * @param bool $canChangeInfo
     *        Pass True, if the administrator can change chat title, photo and other settings
     *
     * @param bool $canPostMessages
     *        Pass True, if the administrator can create channel posts, channels only
     *
     * @param bool $canEditMessages
     *        Pass True, if the administrator can edit messages of other users and can pin messages, channels only
     *
     * @param bool $canDeleteMessages
     *        Pass True, if the administrator can delete messages of other users
     *
     * @param bool $canInviteUsers
     *        Pass True, if the administrator can invite new users to the chat
     *
     * @param bool $canRestrictMembers
     *        Pass True, if the administrator can restrict, ban or unban chat members
     *
     * @param bool $canPinMessages
     *        Pass True, if the administrator can pin messages, supergroups only
     *
     * @param bool $canPromoteMembers
     *        Pass True, if the administrator can add new administrators with a subset of his own privileges or demote
     * administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
     *
     * @return ResponseInterface
     */
    public function promoteChatMember(
        $chatId,
        $userId,
        $canChangeInfo = null,
        $canPostMessages = null,
        $canEditMessages = null,
        $canDeleteMessages = null,
        $canInviteUsers = null,
        $canRestrictMembers = null,
        $canPinMessages = null,
        $canPromoteMembers = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#exportchatinvitelink
     *
     * Use this method to generate a new invite link for a chat; any previously generated link is revoked. The bot must be an
     * administrator in the chat for this to work and must have the appropriate admin rights. Returns the new invite link as
     * String on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @return ResponseInterface
     */
    public function exportChatInviteLink(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setchatphoto
     *
     *  Note: In regular groups (non-supergroups), this method will only work if the ‘All Members Are Admins’
     * setting is off in the target group.  Use this method to set a new profile photo for the chat. Photos can't be changed for
     * private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface $photo
     *        New chat photo, uploaded using multipart/form-data
     *
     * @return ResponseInterface
     */
    public function setChatPhoto(
        $chatId,
        Type\InputFileInterface $photo
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#deletechatphoto
     *
     *  Note: In regular groups (non-supergroups), this method will only work if the ‘All Members Are Admins’
     * setting is off in the target group.  Use this method to delete a chat photo. Photos can't be changed for private chats. The
     * bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns
     * True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @return ResponseInterface
     */
    public function deleteChatPhoto(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setchattitle
     *
     *  Note: In regular groups (non-supergroups), this method will only work if the ‘All Members Are Admins’
     * setting is off in the target group.  Use this method to change the title of a chat. Titles can't be changed for private
     * chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns
     * True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param string $title
     *        New chat title, 1-255 characters
     *
     * @return ResponseInterface
     */
    public function setChatTitle(
        $chatId,
        $title
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setchatdescription
     *
     * Use this method to change the description of a supergroup or a channel. The bot must be an administrator in the chat for
     * this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param string $description
     *        New chat description, 0-255 characters
     *
     * @return ResponseInterface
     */
    public function setChatDescription(
        $chatId,
        $description = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#pinchatmessage
     *
     * Use this method to pin a message in a group, a supergroup, or a channel. The bot must be an administrator in the chat for
     * this to work and must have the ‘can_pin_messages’ admin right in the supergroup or ‘can_edit_messages’ admin
     * right in the channel. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Identifier of a message to pin
     *
     * @param bool $disableNotification
     *        Pass True, if it is not necessary to send a notification to all chat members about the new pinned message.
     * Notifications are always disabled in channels.
     *
     * @return ResponseInterface
     */
    public function pinChatMessage(
        $chatId,
        $messageId,
        $disableNotification = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#unpinchatmessage
     *
     * Use this method to unpin a message in a group, a supergroup, or a channel. The bot must be an administrator in the chat
     * for this to work and must have the ‘can_pin_messages’ admin right in the supergroup or ‘can_edit_messages’
     * admin right in the channel. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @return ResponseInterface
     */
    public function unpinChatMessage(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#leavechat
     *
     * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup or channel (in the format
     * @channelusername)
     *
     * @return ResponseInterface
     */
    public function leaveChat(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getchat
     *
     * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations,
     * current username of a user, group or channel, etc.). Returns a Chat object on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup or channel (in the format
     * @channelusername)
     *
     * @return ResponseInterface
     */
    public function getChat(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getchatadministrators
     *
     * Use this method to get a list of administrators in a chat. On success, returns an Array of ChatMember objects that contains information about all chat administrators except other bots. If the chat is a group or a
     * supergroup and no administrators were appointed, only the creator will be returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup or channel (in the format
     * @channelusername)
     *
     * @return ResponseInterface
     */
    public function getChatAdministrators(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getchatmemberscount
     *
     * Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup or channel (in the format
     * @channelusername)
     *
     * @return ResponseInterface
     */
    public function getChatMembersCount(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getchatmember
     *
     * Use this method to get information about a member of a chat. Returns a ChatMember object
     * on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup or channel (in the format
     * @channelusername)
     *
     * @param int $userId
     *        Unique identifier of the target user
     *
     * @return ResponseInterface
     */
    public function getChatMember(
        $chatId,
        $userId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setchatstickerset
     *
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to
     * work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup (in the format
     * @supergroupusername)
     *
     * @param string $stickerSetName
     *        Name of the sticker set to be set as the group sticker set
     *
     * @return ResponseInterface
     */
    public function setChatStickerSet(
        $chatId,
        $stickerSetName
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#deletechatstickerset
     *
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to
     * work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target supergroup (in the format
     * @supergroupusername)
     *
     * @return ResponseInterface
     */
    public function deleteChatStickerSet(
        $chatId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#answercallbackquery
     *
     *  Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first
     * create a game for your bot via @Botfather and accept the terms. Otherwise, you may
     * use links like t.me/your_bot?start=XXXX that open your bot with a parameter.  Use this method to
     * send answers to callback queries sent from inline
     * keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success,
     * True is returned.
     *
     * @param string $callbackQueryId
     *        Unique identifier for the query to be answered
     *
     * @param string $text
     *        Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     *
     * @param bool $showAlert
     *        If true, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to
     * false.
     *
     * @param string $url
     *        URL that will be opened by the user's client. If you have created a Game and accepted the conditions via
     * @Botfather, specify the URL that opens your game – note that this will only work if the query comes from a callback_game
     * button.Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
     *
     * @param int $cacheTime
     *        The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram
     * apps will support caching starting in version 3.14. Defaults to 0.
     *
     * @return ResponseInterface
     */
    public function answerCallbackQuery(
        $callbackQueryId,
        $text = null,
        $showAlert = null,
        $url = null,
        $cacheTime = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#editmessagetext
     *
     * Use this method to edit text and game messages. On success, if edited message is sent by the
     * bot, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat or username of the
     * target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param string $text
     *        New text of the message
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your
     * bot's message.
     *
     * @param bool $disableWebPagePreview
     *        Disables link previews for links in this message
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for an inline keyboard.
     *
     * @return ResponseInterface
     */
    public function editMessageText(
        $chatId,
        $messageId,
        $inlineMessageId,
        $text,
        $parseMode = null,
        $disableWebPagePreview = null,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#editmessagecaption
     *
     * Use this method to edit captions of messages. On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat or username of the
     * target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param string $caption
     *        New caption of the message
     *
     * @param string $parseMode
     *        Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the
     * media caption.
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for an inline keyboard.
     *
     * @return ResponseInterface
     */
    public function editMessageCaption(
        $chatId,
        $messageId,
        $inlineMessageId,
        $caption = null,
        $parseMode = null,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#editmessagemedia
     *
     * Use this method to edit animation, audio, document, photo, or video messages. If a message is a part of a message
     * album, then it can be edited only to a photo or a video. Otherwise, message type can be changed arbitrarily. When inline
     * message is edited, new file can't be uploaded. Use previously uploaded file via its file_id or specify a URL. On success, if
     * the edited message was sent by the bot, the edited Message is returned, otherwise
     * True is returned.
     *
     * @param int|string $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat or username of the
     * target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param Type\InputMedia $media
     *        A JSON-serialized object for a new media content of the message
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for a new inline keyboard.
     *
     * @return ResponseInterface
     */
    public function editMessageMedia(
        $chatId,
        $messageId,
        $inlineMessageId,
        Type\InputMedia $media,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#editmessagereplymarkup
     *
     * Use this method to edit only the reply markup of messages. On success, if edited message is sent by the bot, the edited
     * Message is returned, otherwise True is returned.
     *
     * @param int|string $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat or username of the
     * target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for an inline keyboard.
     *
     * @return ResponseInterface
     */
    public function editMessageReplyMarkup(
        $chatId,
        $messageId,
        $inlineMessageId,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#stoppoll
     *
     * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll with the
     * final results is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Identifier of the original message with the poll
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for a new message inline keyboard.
     *
     * @return ResponseInterface
     */
    public function stopPoll(
        $chatId,
        $messageId,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#deletemessage
     *
     * Use this method to delete a message, including service messages, with the following limitations:- A message
     * can only be deleted if it was sent less than 48 hours ago.- Bots can delete outgoing messages in private chats,
     * groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted
     * can_post_messages permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete
     * any message there.- If the bot has can_delete_messages permission in a supergroup or a channel, it can
     * delete any message there.Returns True on success.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param int $messageId
     *        Identifier of the message to delete
     *
     * @return ResponseInterface
     */
    public function deleteMessage(
        $chatId,
        $messageId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendsticker
     *
     * Use this method to send .webp stickers. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     *        Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @param Type\InputFileInterface|string $sticker
     *        Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass
     * an HTTP URL as a String for Telegram to get a .webp file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup|Type\ReplyKeyboardMarkup|Type\ReplyKeyboardRemove|Type\ForceReply $replyMarkup
     *        Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return ResponseInterface
     */
    public function sendSticker(
        $chatId,
        $sticker,
        $disableNotification = null,
        $replyToMessageId = null,
        $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getstickerset
     *
     * Use this method to get a sticker set. On success, a StickerSet object is returned.
     *
     * @param string $name
     *        Name of the sticker set
     *
     * @return ResponseInterface
     */
    public function getStickerSet(
        $name
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#uploadstickerfile
     *
     * Use this method to upload a .png file with a sticker for later use in createNewStickerSet and
     * addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
     *
     * @param int $userId
     *        User identifier of sticker file owner
     *
     * @param Type\InputFileInterface $pngSticker
     *        Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either
     * width or height must be exactly 512px. More info on Sending Files »
     *
     * @return ResponseInterface
     */
    public function uploadStickerFile(
        $userId,
        Type\InputFileInterface $pngSticker
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#createnewstickerset
     *
     * Use this method to create new sticker set owned by a user. The bot will be able to edit the created sticker set. Returns
     * True on success.
     *
     * @param int $userId
     *        User identifier of created sticker set owner
     *
     * @param string $name
     *        Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only english
     * letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in
     * “_by_<bot username>”. <bot_username> is case insensitive. 1-64 characters.
     *
     * @param string $title
     *        Sticker set title, 1-64 characters
     *
     * @param Type\InputFileInterface|string $pngSticker
     *        Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either
     * width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram
     * servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     *
     * @param string $emojis
     *        One or more emoji corresponding to the sticker
     *
     * @param bool $containsMasks
     *        Pass True, if a set of mask stickers should be created
     *
     * @param Type\MaskPosition $maskPosition
     *        A JSON-serialized object for position where the mask should be placed on faces
     *
     * @return ResponseInterface
     */
    public function createNewStickerSet(
        $userId,
        $name,
        $title,
        $pngSticker,
        $emojis,
        $containsMasks = null,
        Type\MaskPosition $maskPosition = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#addstickertoset
     *
     * Use this method to add a new sticker to a set created by the bot. Returns True on success.
     *
     * @param int $userId
     *        User identifier of sticker set owner
     *
     * @param string $name
     *        Sticker set name
     *
     * @param Type\InputFileInterface|string $pngSticker
     *        Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either
     * width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram
     * servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     *
     * @param string $emojis
     *        One or more emoji corresponding to the sticker
     *
     * @param Type\MaskPosition $maskPosition
     *        A JSON-serialized object for position where the mask should be placed on faces
     *
     * @return ResponseInterface
     */
    public function addStickerToSet(
        $userId,
        $name,
        $pngSticker,
        $emojis,
        Type\MaskPosition $maskPosition = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setstickerpositioninset
     *
     * Use this method to move a sticker in a set created by the bot to a specific position . Returns True on success.
     *
     * @param string $sticker
     *        File identifier of the sticker
     *
     * @param int $position
     *        New sticker position in the set, zero-based
     *
     * @return ResponseInterface
     */
    public function setStickerPositionInSet(
        $sticker,
        $position
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#deletestickerfromset
     *
     * Use this method to delete a sticker from a set created by the bot. Returns True on success.
     *
     * @param string $sticker
     *        File identifier of the sticker
     *
     * @return ResponseInterface
     */
    public function deleteStickerFromSet(
        $sticker
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#answerinlinequery
     *
     * Use this method to send answers to an inline query. On success, True is returned.No more than
     * 50 results per query are allowed.
     *
     * @param string $inlineQueryId
     *        Unique identifier for the answered query
     *
     * @param Type\AbstractInlineQueryResult[]|array $results
     *        A JSON-serialized array of results for the inline query
     *
     * @param int $cacheTime
     *        The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to
     * 300.
     *
     * @param bool $isPersonal
     *        Pass True, if results may be cached on the server side only for the user that sent the query. By default, results
     * may be returned to any user who sends the same query
     *
     * @param string $nextOffset
     *        Pass the offset that a client should send in the next query with the same text to receive more results. Pass an
     * empty string if there are no more results or if you don‘t support pagination. Offset length can’t exceed 64 bytes.
     *
     * @param string $switchPmText
     *        If passed, clients will display a button with specified text that switches the user to a private chat with the bot
     * and sends the bot a start message with the parameter switch_pm_parameter
     *
     * @param string $switchPmParameter
     *        Deep-linking parameter for the /start message sent to the bot when user presses the switch button. 1-64
     * characters, only A-Z, a-z, 0-9, _ and - are allowed.Example: An inline bot that sends YouTube videos can ask the user to
     * connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a ‘Connect your
     * YouTube account’ button above the results, or even before showing any. The user presses the button, switches to a
     * private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an oauth link. Once
     * done, the bot can offer a switch_inline button so that the user can easily return to the chat where they wanted to use the
     * bot's inline capabilities.
     *
     * @return ResponseInterface
     */
    public function answerInlineQuery(
        $inlineQueryId,
        array $results,
        $cacheTime = null,
        $isPersonal = null,
        $nextOffset = null,
        $switchPmText = null,
        $switchPmParameter = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendinvoice
     *
     * Use this method to send invoices. On success, the sent Message is returned.
     *
     * @param int $chatId
     *        Unique identifier for the target private chat
     *
     * @param string $description
     *        Product description, 1-255 characters
     *
     * @param string $payload
     *        Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal
     * processes.
     *
     * @param string $providerToken
     *        Payments provider token, obtained via Botfather
     *
     * @param string $startParameter
     *        Unique deep-linking parameter that can be used to generate this invoice when used as a start parameter
     *
     * @param string $currency
     *        Three-letter ISO 4217 currency code, see more on currencies
     *
     * @param Type\LabeledPrice[]|array $prices
     *        Price breakdown, a list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus,
     * etc.)
     *
     * @param string $title
     *        Product name, 1-32 characters
     *
     * @param bool $needShippingAddress
     *        Pass True, if you require the user's shipping address to complete the order
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param bool $isFlexible
     *        Pass True, if the final price depends on the shipping method
     *
     * @param bool $sendEmailToProvider
     *        Pass True, if user's email address should be sent to provider
     *
     * @param bool $sendPhoneNumberToProvider
     *        Pass True, if user's phone number should be sent to provider
     *
     * @param int $photoWidth
     *        Photo width
     *
     * @param bool $needEmail
     *        Pass True, if you require the user's email address to complete the order
     *
     * @param bool $needPhoneNumber
     *        Pass True, if you require the user's phone number to complete the order
     *
     * @param bool $needName
     *        Pass True, if you require the user's full name to complete the order
     *
     * @param int $photoHeight
     *        Photo height
     *
     * @param int $photoSize
     *        Photo size
     *
     * @param string $photoUrl
     *        URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like
     * it better when they see what they are paying for.
     *
     * @param string $providerData
     *        JSON-encoded data about the invoice, which will be shared with the payment provider. A detailed description of
     * required fields should be provided by the payment provider.
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not
     * empty, the first button must be a Pay button.
     *
     * @return ResponseInterface
     */
    public function sendInvoice(
        $chatId,
        $description,
        $payload,
        $providerToken,
        $startParameter,
        $currency,
        array $prices,
        $title,
        $needShippingAddress = null,
        $replyToMessageId = null,
        $disableNotification = null,
        $isFlexible = null,
        $sendEmailToProvider = null,
        $sendPhoneNumberToProvider = null,
        $photoWidth = null,
        $needEmail = null,
        $needPhoneNumber = null,
        $needName = null,
        $photoHeight = null,
        $photoSize = null,
        $photoUrl = null,
        $providerData = null,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#answershippingquery
     *
     * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot
     * API will send an Update with a shipping_query field to the bot. Use this method to
     * reply to shipping queries. On success, True is returned.
     *
     * @param string $shippingQueryId
     *        Unique identifier for the query to be answered
     *
     * @param bool $ok
     *        Specify True if delivery to the specified address is possible and False if there are any problems (for example,
     * if delivery to the specified address is not possible)
     *
     * @param Type\ShippingOption[]|array $shippingOptions
     *        Required if ok is True. A JSON-serialized array of available shipping options.
     *
     * @param string $errorMessage
     *        Required if ok is False. Error message in human readable form that explains why it is impossible to complete the
     * order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the
     * user.
     *
     * @return ResponseInterface
     */
    public function answerShippingQuery(
        $shippingQueryId,
        $ok,
        array $shippingOptions,
        $errorMessage
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#answerprecheckoutquery
     *
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form
     * of an Update with the field pre_checkout_query. Use this method to respond to such
     * pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer within 10 seconds
     * after the pre-checkout query was sent.
     *
     * @param string $preCheckoutQueryId
     *        Unique identifier for the query to be answered
     *
     * @param bool $ok
     *        Specify True if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order.
     * Use False if there are any problems.
     *
     * @param string $errorMessage
     *        Required if ok is False. Error message in human readable form that explains the reason for failure to proceed
     * with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy
     * filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to
     * the user.
     *
     * @return ResponseInterface
     */
    public function answerPreCheckoutQuery(
        $preCheckoutQueryId,
        $ok,
        $errorMessage
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setpassportdataerrors
     *
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For
     * example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply
     * some details in the error message to make sure the user knows how to correct the issues. Informs a user that some of the
     * Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until
     * the errors are fixed (the contents of the field for which you returned the error must change). Returns True on
     * success.
     *
     * @param int $userId
     *        User identifier
     *
     * @param Type\PassportElementError[]|array $errors
     *        A JSON-serialized array describing the errors
     *
     * @return ResponseInterface
     */
    public function setPassportDataErrors(
        $userId,
        array $errors
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#sendgame
     *
     * Use this method to send a game. On success, the sent Message is returned.
     *
     * @param int $chatId
     *        Unique identifier for the target chat
     *
     * @param string $gameShortName
     *        Short name of the game, serves as the unique identifier for the game. Set up your games via Botfather.
     *
     * @param bool $disableNotification
     *        Sends the message silently. Users will receive a notification with no sound.
     *
     * @param int $replyToMessageId
     *        If the message is a reply, ID of the original message
     *
     * @param Type\InlineKeyboardMarkup $replyMarkup
     *        A JSON-serialized object for an inline keyboard. If empty, one ‘Play game_title’ button will be shown. If
     * not empty, the first button must launch the game.
     *
     * @return ResponseInterface
     */
    public function sendGame(
        $chatId,
        $gameShortName,
        $disableNotification = null,
        $replyToMessageId = null,
        Type\InlineKeyboardMarkup $replyMarkup = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#setgamescore
     *
     * Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot, returns
     * the edited Message, otherwise returns True. Returns an error, if the new score is
     * not greater than the user's current score in the chat and force is False.
     *
     * @param int $userId
     *        User identifier
     *
     * @param int $score
     *        New score, must be non-negative
     *
     * @param int $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the sent message
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @param bool $force
     *        Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     *
     * @param bool $disableEditMessage
     *        Pass True, if the game message should not be automatically edited to include the current scoreboard
     *
     * @return ResponseInterface
     */
    public function setGameScore(
        $userId,
        $score,
        $chatId,
        $messageId,
        $inlineMessageId,
        $force = null,
        $disableEditMessage = null
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }

    /**
     * https://core.telegram.org/bots/api#getgamehighscores
     *
     *  This method will currently return scores for the target user, plus two of his closest neighbors on each side. Will
     * also return the top three users if the user and his neighbors are not among them. Please note that this behavior is subject
     * to change.  Use this method to get data for high score tables. Will return the score of the specified user and several
     * of his neighbors in a game. On success, returns an Array of GameHighScore
     * objects.
     *
     * @param int $userId
     *        Target user id
     *
     * @param int $chatId
     *        Required if inline_message_id is not specified. Unique identifier for the target chat
     *
     * @param int $messageId
     *        Required if inline_message_id is not specified. Identifier of the sent message
     *
     * @param string $inlineMessageId
     *        Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @return ResponseInterface
     */
    public function getGameHighScores(
        $userId,
        $chatId,
        $messageId,
        $inlineMessageId
    )
    {
        return $this->callMethod(__FUNCTION__, func_get_args());
    }
}