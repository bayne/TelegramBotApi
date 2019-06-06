<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Message extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#message
    *
    * Unique message identifier inside this chat
    *
    * @var int
    */
   protected $messageId;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Sender, empty for messages sent to channels
    *
    * @var Type\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Date the message was sent in Unix time
    *
    * @var int
    */
   protected $date;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Conversation the message belongs to
    *
    * @var Type\Chat
    */
   protected $chat;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For forwarded messages, sender of the original message
    *
    * @var Type\User
    */
   protected $forwardFrom;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For messages forwarded from channels, information about the original channel
    *
    * @var Type\Chat
    */
   protected $forwardFromChat;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For messages forwarded from channels, identifier of the original message in the channel
    *
    * @var int
    */
   protected $forwardFromMessageId;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For messages forwarded from channels, signature of the post author if present
    *
    * @var string
    */
   protected $forwardSignature;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Sender&#039;s name for messages forwarded from users who disallow adding a link to their account in forwarded messages
    *
    * @var string
    */
   protected $forwardSenderName;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For forwarded messages, date the original message was sent in Unix time
    *
    * @var int
    */
   protected $forwardDate;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
    *
    * @var Type\Message
    */
   protected $replyToMessage;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Date the message was last edited in Unix time
    *
    * @var int
    */
   protected $editDate;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. The unique identifier of a media message group this message belongs to
    *
    * @var string
    */
   protected $mediaGroupId;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Signature of the post author for messages in channels
    *
    * @var string
    */
   protected $authorSignature;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
    *
    * @var string
    */
   protected $text;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
    *
    * @var Type\MessageEntity[]|array
    */
   protected $entities;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
    *
    * @var Type\MessageEntity[]|array
    */
   protected $captionEntities;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is an audio file, information about the file
    *
    * @var Type\Audio
    */
   protected $audio;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a general file, information about the file
    *
    * @var Type\Document
    */
   protected $document;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
    *
    * @var Type\Animation
    */
   protected $animation;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a game, information about the game. More about games »
    *
    * @var Type\Game
    */
   protected $game;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a photo, available sizes of the photo
    *
    * @var Type\PhotoSize[]|array
    */
   protected $photo;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a sticker, information about the sticker
    *
    * @var Type\Sticker
    */
   protected $sticker;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a video, information about the video
    *
    * @var Type\Video
    */
   protected $video;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a voice message, information about the file
    *
    * @var Type\Voice
    */
   protected $voice;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a video note, information about the video message
    *
    * @var Type\VideoNote
    */
   protected $videoNote;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a shared contact, information about the contact
    *
    * @var Type\Contact
    */
   protected $contact;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a shared location, information about the location
    *
    * @var Type\Location
    */
   protected $location;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a venue, information about the venue
    *
    * @var Type\Venue
    */
   protected $venue;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a native poll, information about the poll
    *
    * @var Type\Poll
    */
   protected $poll;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
    *
    * @var Type\User[]|array
    */
   protected $newChatMembers;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. A member was removed from the group, information about them (this member may be the bot itself)
    *
    * @var Type\User
    */
   protected $leftChatMember;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. A chat title was changed to this value
    *
    * @var string
    */
   protected $newChatTitle;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. A chat photo was change to this value
    *
    * @var Type\PhotoSize[]|array
    */
   protected $newChatPhoto;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Service message: the chat photo was deleted
    *
    * @var bool
    */
   protected $deleteChatPhoto;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Service message: the group has been created
    *
    * @var bool
    */
   protected $groupChatCreated;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
    *
    * @var bool
    */
   protected $supergroupChatCreated;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
    *
    * @var bool
    */
   protected $channelChatCreated;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
    *
    * @var int
    */
   protected $migrateToChatId;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
    *
    * @var int
    */
   protected $migrateFromChatId;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
    *
    * @var Type\Message
    */
   protected $pinnedMessage;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
    *
    * @var Type\Invoice
    */
   protected $invoice;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a service message about a successful payment, information about the payment. More about payments »
    *
    * @var Type\SuccessfulPayment
    */
   protected $successfulPayment;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
    *
    * @var string
    */
   protected $connectedWebsite;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Telegram Passport data
    *
    * @var Type\PassportData
    */
   protected $passportData;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;


   /**
    * @param int $messageId
    * @return Message
    */
   public function setMessageId($messageId)
   {
       $this->messageId = $messageId;
       return $this;
   }

   /**
    * @return int
    */
   public function getMessageId()
   {
       return $this->messageId;
   }

   /**
    * @param Type\User $from
    * @return Message
    */
   public function setFrom(Type\User $from)
   {
       $this->from = $from;
       return $this;
   }

   /**
    * @return Type\User
    */
   public function getFrom()
   {
       return $this->from;
   }

   /**
    * @param int $date
    * @return Message
    */
   public function setDate($date)
   {
       $this->date = $date;
       return $this;
   }

   /**
    * @return int
    */
   public function getDate()
   {
       return $this->date;
   }

   /**
    * @param Type\Chat $chat
    * @return Message
    */
   public function setChat(Type\Chat $chat)
   {
       $this->chat = $chat;
       return $this;
   }

   /**
    * @return Type\Chat
    */
   public function getChat()
   {
       return $this->chat;
   }

   /**
    * @param Type\User $forwardFrom
    * @return Message
    */
   public function setForwardFrom(Type\User $forwardFrom)
   {
       $this->forwardFrom = $forwardFrom;
       return $this;
   }

   /**
    * @return Type\User
    */
   public function getForwardFrom()
   {
       return $this->forwardFrom;
   }

   /**
    * @param Type\Chat $forwardFromChat
    * @return Message
    */
   public function setForwardFromChat(Type\Chat $forwardFromChat)
   {
       $this->forwardFromChat = $forwardFromChat;
       return $this;
   }

   /**
    * @return Type\Chat
    */
   public function getForwardFromChat()
   {
       return $this->forwardFromChat;
   }

   /**
    * @param int $forwardFromMessageId
    * @return Message
    */
   public function setForwardFromMessageId($forwardFromMessageId)
   {
       $this->forwardFromMessageId = $forwardFromMessageId;
       return $this;
   }

   /**
    * @return int
    */
   public function getForwardFromMessageId()
   {
       return $this->forwardFromMessageId;
   }

   /**
    * @param string $forwardSignature
    * @return Message
    */
   public function setForwardSignature($forwardSignature)
   {
       $this->forwardSignature = $forwardSignature;
       return $this;
   }

   /**
    * @return string
    */
   public function getForwardSignature()
   {
       return $this->forwardSignature;
   }

   /**
    * @param string $forwardSenderName
    * @return Message
    */
   public function setForwardSenderName($forwardSenderName)
   {
       $this->forwardSenderName = $forwardSenderName;
       return $this;
   }

   /**
    * @return string
    */
   public function getForwardSenderName()
   {
       return $this->forwardSenderName;
   }

   /**
    * @param int $forwardDate
    * @return Message
    */
   public function setForwardDate($forwardDate)
   {
       $this->forwardDate = $forwardDate;
       return $this;
   }

   /**
    * @return int
    */
   public function getForwardDate()
   {
       return $this->forwardDate;
   }

   /**
    * @param Type\Message $replyToMessage
    * @return Message
    */
   public function setReplyToMessage(Type\Message $replyToMessage)
   {
       $this->replyToMessage = $replyToMessage;
       return $this;
   }

   /**
    * @return Type\Message
    */
   public function getReplyToMessage()
   {
       return $this->replyToMessage;
   }

   /**
    * @param int $editDate
    * @return Message
    */
   public function setEditDate($editDate)
   {
       $this->editDate = $editDate;
       return $this;
   }

   /**
    * @return int
    */
   public function getEditDate()
   {
       return $this->editDate;
   }

   /**
    * @param string $mediaGroupId
    * @return Message
    */
   public function setMediaGroupId($mediaGroupId)
   {
       $this->mediaGroupId = $mediaGroupId;
       return $this;
   }

   /**
    * @return string
    */
   public function getMediaGroupId()
   {
       return $this->mediaGroupId;
   }

   /**
    * @param string $authorSignature
    * @return Message
    */
   public function setAuthorSignature($authorSignature)
   {
       $this->authorSignature = $authorSignature;
       return $this;
   }

   /**
    * @return string
    */
   public function getAuthorSignature()
   {
       return $this->authorSignature;
   }

   /**
    * @param string $text
    * @return Message
    */
   public function setText($text)
   {
       $this->text = $text;
       return $this;
   }

   /**
    * @return string
    */
   public function getText()
   {
       return $this->text;
   }

   /**
    * @param Type\MessageEntity[]|array $entities
    * @return Message
    */
   public function setEntities($entities)
   {
       $this->entities = $entities;
       return $this;
   }

   /**
    * @return Type\MessageEntity[]|array
    */
   public function getEntities()
   {
       return $this->entities;
   }

   /**
    * @param Type\MessageEntity[]|array $captionEntities
    * @return Message
    */
   public function setCaptionEntities($captionEntities)
   {
       $this->captionEntities = $captionEntities;
       return $this;
   }

   /**
    * @return Type\MessageEntity[]|array
    */
   public function getCaptionEntities()
   {
       return $this->captionEntities;
   }

   /**
    * @param Type\Audio $audio
    * @return Message
    */
   public function setAudio(Type\Audio $audio)
   {
       $this->audio = $audio;
       return $this;
   }

   /**
    * @return Type\Audio
    */
   public function getAudio()
   {
       return $this->audio;
   }

   /**
    * @param Type\Document $document
    * @return Message
    */
   public function setDocument(Type\Document $document)
   {
       $this->document = $document;
       return $this;
   }

   /**
    * @return Type\Document
    */
   public function getDocument()
   {
       return $this->document;
   }

   /**
    * @param Type\Animation $animation
    * @return Message
    */
   public function setAnimation(Type\Animation $animation)
   {
       $this->animation = $animation;
       return $this;
   }

   /**
    * @return Type\Animation
    */
   public function getAnimation()
   {
       return $this->animation;
   }

   /**
    * @param Type\Game $game
    * @return Message
    */
   public function setGame(Type\Game $game)
   {
       $this->game = $game;
       return $this;
   }

   /**
    * @return Type\Game
    */
   public function getGame()
   {
       return $this->game;
   }

   /**
    * @param Type\PhotoSize[]|array $photo
    * @return Message
    */
   public function setPhoto($photo)
   {
       $this->photo = $photo;
       return $this;
   }

   /**
    * @return Type\PhotoSize[]|array
    */
   public function getPhoto()
   {
       return $this->photo;
   }

   /**
    * @param Type\Sticker $sticker
    * @return Message
    */
   public function setSticker(Type\Sticker $sticker)
   {
       $this->sticker = $sticker;
       return $this;
   }

   /**
    * @return Type\Sticker
    */
   public function getSticker()
   {
       return $this->sticker;
   }

   /**
    * @param Type\Video $video
    * @return Message
    */
   public function setVideo(Type\Video $video)
   {
       $this->video = $video;
       return $this;
   }

   /**
    * @return Type\Video
    */
   public function getVideo()
   {
       return $this->video;
   }

   /**
    * @param Type\Voice $voice
    * @return Message
    */
   public function setVoice(Type\Voice $voice)
   {
       $this->voice = $voice;
       return $this;
   }

   /**
    * @return Type\Voice
    */
   public function getVoice()
   {
       return $this->voice;
   }

   /**
    * @param Type\VideoNote $videoNote
    * @return Message
    */
   public function setVideoNote(Type\VideoNote $videoNote)
   {
       $this->videoNote = $videoNote;
       return $this;
   }

   /**
    * @return Type\VideoNote
    */
   public function getVideoNote()
   {
       return $this->videoNote;
   }

   /**
    * @param string $caption
    * @return Message
    */
   public function setCaption($caption)
   {
       $this->caption = $caption;
       return $this;
   }

   /**
    * @return string
    */
   public function getCaption()
   {
       return $this->caption;
   }

   /**
    * @param Type\Contact $contact
    * @return Message
    */
   public function setContact(Type\Contact $contact)
   {
       $this->contact = $contact;
       return $this;
   }

   /**
    * @return Type\Contact
    */
   public function getContact()
   {
       return $this->contact;
   }

   /**
    * @param Type\Location $location
    * @return Message
    */
   public function setLocation(Type\Location $location)
   {
       $this->location = $location;
       return $this;
   }

   /**
    * @return Type\Location
    */
   public function getLocation()
   {
       return $this->location;
   }

   /**
    * @param Type\Venue $venue
    * @return Message
    */
   public function setVenue(Type\Venue $venue)
   {
       $this->venue = $venue;
       return $this;
   }

   /**
    * @return Type\Venue
    */
   public function getVenue()
   {
       return $this->venue;
   }

   /**
    * @param Type\Poll $poll
    * @return Message
    */
   public function setPoll(Type\Poll $poll)
   {
       $this->poll = $poll;
       return $this;
   }

   /**
    * @return Type\Poll
    */
   public function getPoll()
   {
       return $this->poll;
   }

   /**
    * @param Type\User[]|array $newChatMembers
    * @return Message
    */
   public function setNewChatMembers($newChatMembers)
   {
       $this->newChatMembers = $newChatMembers;
       return $this;
   }

   /**
    * @return Type\User[]|array
    */
   public function getNewChatMembers()
   {
       return $this->newChatMembers;
   }

   /**
    * @param Type\User $leftChatMember
    * @return Message
    */
   public function setLeftChatMember(Type\User $leftChatMember)
   {
       $this->leftChatMember = $leftChatMember;
       return $this;
   }

   /**
    * @return Type\User
    */
   public function getLeftChatMember()
   {
       return $this->leftChatMember;
   }

   /**
    * @param string $newChatTitle
    * @return Message
    */
   public function setNewChatTitle($newChatTitle)
   {
       $this->newChatTitle = $newChatTitle;
       return $this;
   }

   /**
    * @return string
    */
   public function getNewChatTitle()
   {
       return $this->newChatTitle;
   }

   /**
    * @param Type\PhotoSize[]|array $newChatPhoto
    * @return Message
    */
   public function setNewChatPhoto($newChatPhoto)
   {
       $this->newChatPhoto = $newChatPhoto;
       return $this;
   }

   /**
    * @return Type\PhotoSize[]|array
    */
   public function getNewChatPhoto()
   {
       return $this->newChatPhoto;
   }

   /**
    * @param bool $deleteChatPhoto
    * @return Message
    */
   public function setDeleteChatPhoto($deleteChatPhoto)
   {
       $this->deleteChatPhoto = $deleteChatPhoto;
       return $this;
   }

   /**
    * @return bool
    */
   public function getDeleteChatPhoto()
   {
       return $this->deleteChatPhoto;
   }

   /**
    * @param bool $groupChatCreated
    * @return Message
    */
   public function setGroupChatCreated($groupChatCreated)
   {
       $this->groupChatCreated = $groupChatCreated;
       return $this;
   }

   /**
    * @return bool
    */
   public function getGroupChatCreated()
   {
       return $this->groupChatCreated;
   }

   /**
    * @param bool $supergroupChatCreated
    * @return Message
    */
   public function setSupergroupChatCreated($supergroupChatCreated)
   {
       $this->supergroupChatCreated = $supergroupChatCreated;
       return $this;
   }

   /**
    * @return bool
    */
   public function getSupergroupChatCreated()
   {
       return $this->supergroupChatCreated;
   }

   /**
    * @param bool $channelChatCreated
    * @return Message
    */
   public function setChannelChatCreated($channelChatCreated)
   {
       $this->channelChatCreated = $channelChatCreated;
       return $this;
   }

   /**
    * @return bool
    */
   public function getChannelChatCreated()
   {
       return $this->channelChatCreated;
   }

   /**
    * @param int $migrateToChatId
    * @return Message
    */
   public function setMigrateToChatId($migrateToChatId)
   {
       $this->migrateToChatId = $migrateToChatId;
       return $this;
   }

   /**
    * @return int
    */
   public function getMigrateToChatId()
   {
       return $this->migrateToChatId;
   }

   /**
    * @param int $migrateFromChatId
    * @return Message
    */
   public function setMigrateFromChatId($migrateFromChatId)
   {
       $this->migrateFromChatId = $migrateFromChatId;
       return $this;
   }

   /**
    * @return int
    */
   public function getMigrateFromChatId()
   {
       return $this->migrateFromChatId;
   }

   /**
    * @param Type\Message $pinnedMessage
    * @return Message
    */
   public function setPinnedMessage(Type\Message $pinnedMessage)
   {
       $this->pinnedMessage = $pinnedMessage;
       return $this;
   }

   /**
    * @return Type\Message
    */
   public function getPinnedMessage()
   {
       return $this->pinnedMessage;
   }

   /**
    * @param Type\Invoice $invoice
    * @return Message
    */
   public function setInvoice(Type\Invoice $invoice)
   {
       $this->invoice = $invoice;
       return $this;
   }

   /**
    * @return Type\Invoice
    */
   public function getInvoice()
   {
       return $this->invoice;
   }

   /**
    * @param Type\SuccessfulPayment $successfulPayment
    * @return Message
    */
   public function setSuccessfulPayment(Type\SuccessfulPayment $successfulPayment)
   {
       $this->successfulPayment = $successfulPayment;
       return $this;
   }

   /**
    * @return Type\SuccessfulPayment
    */
   public function getSuccessfulPayment()
   {
       return $this->successfulPayment;
   }

   /**
    * @param string $connectedWebsite
    * @return Message
    */
   public function setConnectedWebsite($connectedWebsite)
   {
       $this->connectedWebsite = $connectedWebsite;
       return $this;
   }

   /**
    * @return string
    */
   public function getConnectedWebsite()
   {
       return $this->connectedWebsite;
   }

   /**
    * @param Type\PassportData $passportData
    * @return Message
    */
   public function setPassportData(Type\PassportData $passportData)
   {
       $this->passportData = $passportData;
       return $this;
   }

   /**
    * @return Type\PassportData
    */
   public function getPassportData()
   {
       return $this->passportData;
   }

   /**
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return Message
    */
   public function setReplyMarkup(Type\InlineKeyboardMarkup $replyMarkup)
   {
       $this->replyMarkup = $replyMarkup;
       return $this;
   }

   /**
    * @return Type\InlineKeyboardMarkup
    */
   public function getReplyMarkup()
   {
       return $this->replyMarkup;
   }

}