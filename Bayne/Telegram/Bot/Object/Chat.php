<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Chat extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
    *
    * @var int
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Title, for supergroups, channels and group chats
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Username, for private chats, supergroups and channels if available
    *
    * @var string
    */
   protected $username;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. First name of the other party in a private chat
    *
    * @var string
    */
   protected $firstName;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Last name of the other party in a private chat
    *
    * @var string
    */
   protected $lastName;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. True if a group has ‘All Members Are Admins’ enabled.
    *
    * @var bool
    */
   protected $allMembersAreAdministrators;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Chat photo. Returned only in getChat.
    *
    * @var Object\ChatPhoto
    */
   protected $photo;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Description, for supergroups and channel chats. Returned only in getChat.
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Chat invite link, for supergroups and channel chats. Returned only in getChat.
    *
    * @var string
    */
   protected $inviteLink;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. Pinned message, for supergroups. Returned only in getChat.
    *
    * @var Object\Message
    */
   protected $pinnedMessage;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. For supergroups, name of group sticker set. Returned only in getChat.
    *
    * @var string
    */
   protected $stickerSetName;

   /**
    * https://core.telegram.org/bots/api#chat
    *
    * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
    *
    * @var bool
    */
   protected $canSetStickerSet;


   /**
    * @param int $id
    * @return Chat
    */
   public function setId($id)
   {
       $this->id = $id;
       return $this;
   }

   /**
    * @return int
    */
   public function getId()
   {
       return $this->id;
   }

   /**
    * @param string $type
    * @return Chat
    */
   public function setType($type)
   {
       $this->type = $type;
       return $this;
   }

   /**
    * @return string
    */
   public function getType()
   {
       return $this->type;
   }

   /**
    * @param string $title
    * @return Chat
    */
   public function setTitle($title)
   {
       $this->title = $title;
       return $this;
   }

   /**
    * @return string
    */
   public function getTitle()
   {
       return $this->title;
   }

   /**
    * @param string $username
    * @return Chat
    */
   public function setUsername($username)
   {
       $this->username = $username;
       return $this;
   }

   /**
    * @return string
    */
   public function getUsername()
   {
       return $this->username;
   }

   /**
    * @param string $firstName
    * @return Chat
    */
   public function setFirstName($firstName)
   {
       $this->firstName = $firstName;
       return $this;
   }

   /**
    * @return string
    */
   public function getFirstName()
   {
       return $this->firstName;
   }

   /**
    * @param string $lastName
    * @return Chat
    */
   public function setLastName($lastName)
   {
       $this->lastName = $lastName;
       return $this;
   }

   /**
    * @return string
    */
   public function getLastName()
   {
       return $this->lastName;
   }

   /**
    * @param bool $allMembersAreAdministrators
    * @return Chat
    */
   public function setAllMembersAreAdministrators($allMembersAreAdministrators)
   {
       $this->allMembersAreAdministrators = $allMembersAreAdministrators;
       return $this;
   }

   /**
    * @return bool
    */
   public function getAllMembersAreAdministrators()
   {
       return $this->allMembersAreAdministrators;
   }

   /**
    * @param Object\ChatPhoto $photo
    * @return Chat
    */
   public function setPhoto(Object\ChatPhoto $photo)
   {
       $this->photo = $photo;
       return $this;
   }

   /**
    * @return Object\ChatPhoto
    */
   public function getPhoto()
   {
       return $this->photo;
   }

   /**
    * @param string $description
    * @return Chat
    */
   public function setDescription($description)
   {
       $this->description = $description;
       return $this;
   }

   /**
    * @return string
    */
   public function getDescription()
   {
       return $this->description;
   }

   /**
    * @param string $inviteLink
    * @return Chat
    */
   public function setInviteLink($inviteLink)
   {
       $this->inviteLink = $inviteLink;
       return $this;
   }

   /**
    * @return string
    */
   public function getInviteLink()
   {
       return $this->inviteLink;
   }

   /**
    * @param Object\Message $pinnedMessage
    * @return Chat
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
    * @param string $stickerSetName
    * @return Chat
    */
   public function setStickerSetName($stickerSetName)
   {
       $this->stickerSetName = $stickerSetName;
       return $this;
   }

   /**
    * @return string
    */
   public function getStickerSetName()
   {
       return $this->stickerSetName;
   }

   /**
    * @param bool $canSetStickerSet
    * @return Chat
    */
   public function setCanSetStickerSet($canSetStickerSet)
   {
       $this->canSetStickerSet = $canSetStickerSet;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanSetStickerSet()
   {
       return $this->canSetStickerSet;
   }

}