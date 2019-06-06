<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class ChatMember extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Information about the user
    *
    * @var Type\User
    */
   protected $user;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * The member&#039;s status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
    *
    * @var string
    */
   protected $status;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Restricted and kicked only. Date when restrictions will be lifted for this user, unix time
    *
    * @var int
    */
   protected $untilDate;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
    *
    * @var bool
    */
   protected $canBeEdited;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can change the chat title, photo and other settings
    *
    * @var bool
    */
   protected $canChangeInfo;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can post in the channel, channels only
    *
    * @var bool
    */
   protected $canPostMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages, channels only
    *
    * @var bool
    */
   protected $canEditMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can delete messages of other users
    *
    * @var bool
    */
   protected $canDeleteMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can invite new users to the chat
    *
    * @var bool
    */
   protected $canInviteUsers;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
    *
    * @var bool
    */
   protected $canRestrictMembers;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can pin messages, groups and supergroups only
    *
    * @var bool
    */
   protected $canPinMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
    *
    * @var bool
    */
   protected $canPromoteMembers;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
    *
    * @var bool
    */
   protected $isMember;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Restricted only. True, if the user can send text messages, contacts, locations and venues
    *
    * @var bool
    */
   protected $canSendMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
    *
    * @var bool
    */
   protected $canSendMediaMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
    *
    * @var bool
    */
   protected $canSendOtherMessages;

   /**
    * https://core.telegram.org/bots/api#chatmember
    *
    * Optional. Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
    *
    * @var bool
    */
   protected $canAddWebPagePreviews;


   /**
    * @param Type\User $user
    * @return ChatMember
    */
   public function setUser(Type\User $user)
   {
       $this->user = $user;
       return $this;
   }

   /**
    * @return Type\User
    */
   public function getUser()
   {
       return $this->user;
   }

   /**
    * @param string $status
    * @return ChatMember
    */
   public function setStatus($status)
   {
       $this->status = $status;
       return $this;
   }

   /**
    * @return string
    */
   public function getStatus()
   {
       return $this->status;
   }

   /**
    * @param int $untilDate
    * @return ChatMember
    */
   public function setUntilDate($untilDate)
   {
       $this->untilDate = $untilDate;
       return $this;
   }

   /**
    * @return int
    */
   public function getUntilDate()
   {
       return $this->untilDate;
   }

   /**
    * @param bool $canBeEdited
    * @return ChatMember
    */
   public function setCanBeEdited($canBeEdited)
   {
       $this->canBeEdited = $canBeEdited;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanBeEdited()
   {
       return $this->canBeEdited;
   }

   /**
    * @param bool $canChangeInfo
    * @return ChatMember
    */
   public function setCanChangeInfo($canChangeInfo)
   {
       $this->canChangeInfo = $canChangeInfo;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanChangeInfo()
   {
       return $this->canChangeInfo;
   }

   /**
    * @param bool $canPostMessages
    * @return ChatMember
    */
   public function setCanPostMessages($canPostMessages)
   {
       $this->canPostMessages = $canPostMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanPostMessages()
   {
       return $this->canPostMessages;
   }

   /**
    * @param bool $canEditMessages
    * @return ChatMember
    */
   public function setCanEditMessages($canEditMessages)
   {
       $this->canEditMessages = $canEditMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanEditMessages()
   {
       return $this->canEditMessages;
   }

   /**
    * @param bool $canDeleteMessages
    * @return ChatMember
    */
   public function setCanDeleteMessages($canDeleteMessages)
   {
       $this->canDeleteMessages = $canDeleteMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanDeleteMessages()
   {
       return $this->canDeleteMessages;
   }

   /**
    * @param bool $canInviteUsers
    * @return ChatMember
    */
   public function setCanInviteUsers($canInviteUsers)
   {
       $this->canInviteUsers = $canInviteUsers;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanInviteUsers()
   {
       return $this->canInviteUsers;
   }

   /**
    * @param bool $canRestrictMembers
    * @return ChatMember
    */
   public function setCanRestrictMembers($canRestrictMembers)
   {
       $this->canRestrictMembers = $canRestrictMembers;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanRestrictMembers()
   {
       return $this->canRestrictMembers;
   }

   /**
    * @param bool $canPinMessages
    * @return ChatMember
    */
   public function setCanPinMessages($canPinMessages)
   {
       $this->canPinMessages = $canPinMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanPinMessages()
   {
       return $this->canPinMessages;
   }

   /**
    * @param bool $canPromoteMembers
    * @return ChatMember
    */
   public function setCanPromoteMembers($canPromoteMembers)
   {
       $this->canPromoteMembers = $canPromoteMembers;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanPromoteMembers()
   {
       return $this->canPromoteMembers;
   }

   /**
    * @param bool $isMember
    * @return ChatMember
    */
   public function setIsMember($isMember)
   {
       $this->isMember = $isMember;
       return $this;
   }

   /**
    * @return bool
    */
   public function getIsMember()
   {
       return $this->isMember;
   }

   /**
    * @param bool $canSendMessages
    * @return ChatMember
    */
   public function setCanSendMessages($canSendMessages)
   {
       $this->canSendMessages = $canSendMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanSendMessages()
   {
       return $this->canSendMessages;
   }

   /**
    * @param bool $canSendMediaMessages
    * @return ChatMember
    */
   public function setCanSendMediaMessages($canSendMediaMessages)
   {
       $this->canSendMediaMessages = $canSendMediaMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanSendMediaMessages()
   {
       return $this->canSendMediaMessages;
   }

   /**
    * @param bool $canSendOtherMessages
    * @return ChatMember
    */
   public function setCanSendOtherMessages($canSendOtherMessages)
   {
       $this->canSendOtherMessages = $canSendOtherMessages;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanSendOtherMessages()
   {
       return $this->canSendOtherMessages;
   }

   /**
    * @param bool $canAddWebPagePreviews
    * @return ChatMember
    */
   public function setCanAddWebPagePreviews($canAddWebPagePreviews)
   {
       $this->canAddWebPagePreviews = $canAddWebPagePreviews;
       return $this;
   }

   /**
    * @return bool
    */
   public function getCanAddWebPagePreviews()
   {
       return $this->canAddWebPagePreviews;
   }

}