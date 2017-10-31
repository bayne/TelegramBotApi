<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Message extends Object\AbstractObject
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
    * @var Object\User
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
    * @var Object\Chat
    */
   protected $chat;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For forwarded messages, sender of the original message
    *
    * @var Object\User
    */
   protected $forwardFrom;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For messages forwarded from channels, information about the original channel
    *
    * @var Object\Chat
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
    * @var Object\Message
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
    * @var Object\MessageEntity[]|array
    */
   protected $entities;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
    *
    * @var Object\MessageEntity[]|array
    */
   protected $captionEntities;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is an audio file, information about the file
    *
    * @var Object\Audio
    */
   protected $audio;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a general file, information about the file
    *
    * @var Object\Document
    */
   protected $document;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a game, information about the game. More about games »
    *
    * @var Object\Game
    */
   protected $game;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a photo, available sizes of the photo
    *
    * @var Object\PhotoSize[]|array
    */
   protected $photo;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a sticker, information about the sticker
    *
    * @var Object\Sticker
    */
   protected $sticker;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a video, information about the video
    *
    * @var Object\Video
    */
   protected $video;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a voice message, information about the file
    *
    * @var Object\Voice
    */
   protected $voice;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a video note, information about the video message
    *
    * @var Object\VideoNote
    */
   protected $videoNote;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Caption for the audio, document, photo, video or voice, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a shared contact, information about the contact
    *
    * @var Object\Contact
    */
   protected $contact;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a shared location, information about the location
    *
    * @var Object\Location
    */
   protected $location;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a venue, information about the venue
    *
    * @var Object\Venue
    */
   protected $venue;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
    *
    * @var Object\User[]|array
    */
   protected $newChatMembers;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. A member was removed from the group, information about them (this member may be the bot itself)
    *
    * @var Object\User
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
    * @var Object\PhotoSize[]|array
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
    * @var Object\Message
    */
   protected $pinnedMessage;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
    *
    * @var Object\Invoice
    */
   protected $invoice;

   /**
    * https://core.telegram.org/bots/api#message
    *
    * Optional. Message is a service message about a successful payment, information about the payment. More about payments »
    *
    * @var Object\SuccessfulPayment
    */
   protected $successfulPayment;


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
    * @param Object\User $from
    * @return Message
    */
   public function setFrom(Object\User $from)
   {
       $this->from = $from;
       return $this;
   }

   /**
    * @return Object\User
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
    * @param Object\Chat $chat
    * @return Message
    */
   public function setChat(Object\Chat $chat)
   {
       $this->chat = $chat;
       return $this;
   }

   /**
    * @return Object\Chat
    */
   public function getChat()
   {
       return $this->chat;
   }

   /**
    * @param Object\User $forwardFrom
    * @return Message
    */
   public function setForwardFrom(Object\User $forwardFrom)
   {
       $this->forwardFrom = $forwardFrom;
       return $this;
   }

   /**
    * @return Object\User
    */
   public function getForwardFrom()
   {
       return $this->forwardFrom;
   }

   /**
    * @param Object\Chat $forwardFromChat
    * @return Message
    */
   public function setForwardFromChat(Object\Chat $forwardFromChat)
   {
       $this->forwardFromChat = $forwardFromChat;
       return $this;
   }

   /**
    * @return Object\Chat
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
    * @param Object\Message $replyToMessage
    * @return Message
    */
   public function setReplyToMessage(Object\Message $replyToMessage)
   {
       $this->replyToMessage = $replyToMessage;
       return $this;
   }

   /**
    * @return Object\Message
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
    * @param Object\MessageEntity[]|array $entities
    * @return Message
    */
   public function setEntities($entities)
   {
       $this->entities = $entities;
       return $this;
   }

   /**
    * @return Object\MessageEntity[]|array
    */
   public function getEntities()
   {
       return $this->entities;
   }

   /**
    * @param Object\MessageEntity[]|array $captionEntities
    * @return Message
    */
   public function setCaptionEntities($captionEntities)
   {
       $this->captionEntities = $captionEntities;
       return $this;
   }

   /**
    * @return Object\MessageEntity[]|array
    */
   public function getCaptionEntities()
   {
       return $this->captionEntities;
   }

   /**
    * @param Object\Audio $audio
    * @return Message
    */
   public function setAudio(Object\Audio $audio)
   {
       $this->audio = $audio;
       return $this;
   }

   /**
    * @return Object\Audio
    */
   public function getAudio()
   {
       return $this->audio;
   }

   /**
    * @param Object\Document $document
    * @return Message
    */
   public function setDocument(Object\Document $document)
   {
       $this->document = $document;
       return $this;
   }

   /**
    * @return Object\Document
    */
   public function getDocument()
   {
       return $this->document;
   }

   /**
    * @param Object\Game $game
    * @return Message
    */
   public function setGame(Object\Game $game)
   {
       $this->game = $game;
       return $this;
   }

   /**
    * @return Object\Game
    */
   public function getGame()
   {
       return $this->game;
   }

   /**
    * @param Object\PhotoSize[]|array $photo
    * @return Message
    */
   public function setPhoto($photo)
   {
       $this->photo = $photo;
       return $this;
   }

   /**
    * @return Object\PhotoSize[]|array
    */
   public function getPhoto()
   {
       return $this->photo;
   }

   /**
    * @param Object\Sticker $sticker
    * @return Message
    */
   public function setSticker(Object\Sticker $sticker)
   {
       $this->sticker = $sticker;
       return $this;
   }

   /**
    * @return Object\Sticker
    */
   public function getSticker()
   {
       return $this->sticker;
   }

   /**
    * @param Object\Video $video
    * @return Message
    */
   public function setVideo(Object\Video $video)
   {
       $this->video = $video;
       return $this;
   }

   /**
    * @return Object\Video
    */
   public function getVideo()
   {
       return $this->video;
   }

   /**
    * @param Object\Voice $voice
    * @return Message
    */
   public function setVoice(Object\Voice $voice)
   {
       $this->voice = $voice;
       return $this;
   }

   /**
    * @return Object\Voice
    */
   public function getVoice()
   {
       return $this->voice;
   }

   /**
    * @param Object\VideoNote $videoNote
    * @return Message
    */
   public function setVideoNote(Object\VideoNote $videoNote)
   {
       $this->videoNote = $videoNote;
       return $this;
   }

   /**
    * @return Object\VideoNote
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
    * @param Object\Contact $contact
    * @return Message
    */
   public function setContact(Object\Contact $contact)
   {
       $this->contact = $contact;
       return $this;
   }

   /**
    * @return Object\Contact
    */
   public function getContact()
   {
       return $this->contact;
   }

   /**
    * @param Object\Location $location
    * @return Message
    */
   public function setLocation(Object\Location $location)
   {
       $this->location = $location;
       return $this;
   }

   /**
    * @return Object\Location
    */
   public function getLocation()
   {
       return $this->location;
   }

   /**
    * @param Object\Venue $venue
    * @return Message
    */
   public function setVenue(Object\Venue $venue)
   {
       $this->venue = $venue;
       return $this;
   }

   /**
    * @return Object\Venue
    */
   public function getVenue()
   {
       return $this->venue;
   }

   /**
    * @param Object\User[]|array $newChatMembers
    * @return Message
    */
   public function setNewChatMembers($newChatMembers)
   {
       $this->newChatMembers = $newChatMembers;
       return $this;
   }

   /**
    * @return Object\User[]|array
    */
   public function getNewChatMembers()
   {
       return $this->newChatMembers;
   }

   /**
    * @param Object\User $leftChatMember
    * @return Message
    */
   public function setLeftChatMember(Object\User $leftChatMember)
   {
       $this->leftChatMember = $leftChatMember;
       return $this;
   }

   /**
    * @return Object\User
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
    * @param Object\PhotoSize[]|array $newChatPhoto
    * @return Message
    */
   public function setNewChatPhoto($newChatPhoto)
   {
       $this->newChatPhoto = $newChatPhoto;
       return $this;
   }

   /**
    * @return Object\PhotoSize[]|array
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
    * @param Object\Message $pinnedMessage
    * @return Message
    */
   public function setPinnedMessage(Object\Message $pinnedMessage)
   {
       $this->pinnedMessage = $pinnedMessage;
       return $this;
   }

   /**
    * @return Object\Message
    */
   public function getPinnedMessage()
   {
       return $this->pinnedMessage;
   }

   /**
    * @param Object\Invoice $invoice
    * @return Message
    */
   public function setInvoice(Object\Invoice $invoice)
   {
       $this->invoice = $invoice;
       return $this;
   }

   /**
    * @return Object\Invoice
    */
   public function getInvoice()
   {
       return $this->invoice;
   }

   /**
    * @param Object\SuccessfulPayment $successfulPayment
    * @return Message
    */
   public function setSuccessfulPayment(Object\SuccessfulPayment $successfulPayment)
   {
       $this->successfulPayment = $successfulPayment;
       return $this;
   }

   /**
    * @return Object\SuccessfulPayment
    */
   public function getSuccessfulPayment()
   {
       return $this->successfulPayment;
   }

}