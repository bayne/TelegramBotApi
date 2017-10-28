<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ReplyKeyboardRemove extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#replykeyboardremove
    *
    * Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use one_time_keyboard in ReplyKeyboardMarkup)
    *
    * @var bool
    */
   protected $removeKeyboard;

   /**
    * https://core.telegram.org/bots/api#replykeyboardremove
    *
    * Optional. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot&#039;s message is a reply (has reply_to_message_id), sender of the original message.Example: A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven&#039;t voted yet.
    *
    * @var bool
    */
   protected $selective;


   /**
    * @param bool $removeKeyboard
    * @return ReplyKeyboardRemove
    */
   public function setRemoveKeyboard($removeKeyboard)
   {
       $this->removeKeyboard = $removeKeyboard;
       return $this;
   }

   /**
    * @return bool
    */
   public function getRemoveKeyboard()
   {
       return $this->removeKeyboard;
   }

   /**
    * @param bool $selective
    * @return ReplyKeyboardRemove
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