<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ForceReply extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#forcereply
    *
    * Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply&#039;
    *
    * @var bool
    */
   protected $forceReply;

   /**
    * https://core.telegram.org/bots/api#forcereply
    *
    * Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot&#039;s message is a reply (has reply_to_message_id), sender of the original message.
    *
    * @var bool
    */
   protected $selective;


   /**
    * @param bool $forceReply
    * @return ForceReply
    */
   public function setForceReply($forceReply)
   {
       $this->forceReply = $forceReply;
       return $this;
   }

   /**
    * @return bool
    */
   public function getForceReply()
   {
       return $this->forceReply;
   }

   /**
    * @param bool $selective
    * @return ForceReply
    */
   public function setSelective($selective)
   {
       $this->selective = $selective;
       return $this;
   }

   /**
    * @return bool
    */
   public function getSelective()
   {
       return $this->selective;
   }

}