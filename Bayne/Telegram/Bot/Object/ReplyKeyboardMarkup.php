<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ReplyKeyboardMarkup extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#replykeyboardmarkup
    *
    * Array of button rows, each represented by an Array of KeyboardButton objects
    *
    * @var array[]
    */
   protected $keyboard;

   /**
    * https://core.telegram.org/bots/api#replykeyboardmarkup
    *
    * Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app&#039;s standard keyboard.
    *
    * @var bool
    */
   protected $resizeKeyboard;

   /**
    * https://core.telegram.org/bots/api#replykeyboardmarkup
    *
    * Optional. Requests clients to hide the keyboard as soon as it&#039;s been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
    *
    * @var bool
    */
   protected $oneTimeKeyboard;

   /**
    * https://core.telegram.org/bots/api#replykeyboardmarkup
    *
    * Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot&#039;s message is a reply (has reply_to_message_id), sender of the original message.Example: A user requests to change the bot‘s language, bot replies to the request with a keyboard to select the new language. Other users in the group don’t see the keyboard.
    *
    * @var bool
    */
   protected $selective;


   /**
    * @param array[] $keyboard
    * @return ReplyKeyboardMarkup
    */
   public function setKeyboard($keyboard)
   {
       $this->keyboard = $keyboard;
       return $this;
   }

   /**
    * @return array[]
    */
   public function getKeyboard()
   {
       return $this->keyboard;
   }

   /**
    * @param bool $resizeKeyboard
    * @return ReplyKeyboardMarkup
    */
   public function setResizeKeyboard($resizeKeyboard)
   {
       $this->resizeKeyboard = $resizeKeyboard;
       return $this;
   }

   /**
    * @return bool
    */
   public function getResizeKeyboard()
   {
       return $this->resizeKeyboard;
   }

   /**
    * @param bool $oneTimeKeyboard
    * @return ReplyKeyboardMarkup
    */
   public function setOneTimeKeyboard($oneTimeKeyboard)
   {
       $this->oneTimeKeyboard = $oneTimeKeyboard;
       return $this;
   }

   /**
    * @return bool
    */
   public function getOneTimeKeyboard()
   {
       return $this->oneTimeKeyboard;
   }

   /**
    * @param bool $selective
    * @return ReplyKeyboardMarkup
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