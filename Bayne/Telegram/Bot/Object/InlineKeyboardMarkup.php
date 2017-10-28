<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineKeyboardMarkup extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#inlinekeyboardmarkup
    *
    * Array of button rows, each represented by an Array of InlineKeyboardButton objects
    *
    * @var array[]
    */
   protected $inlineKeyboard;


   /**
    * @param array[] $inlineKeyboard
    * @return InlineKeyboardMarkup
    */
   public function setInlineKeyboard($inlineKeyboard)
   {
       $this->inlineKeyboard = $inlineKeyboard;
       return $this;
   }

   /**
    * @return array[]
    */
   public function getInlineKeyboard()
   {
       return $this->inlineKeyboard;
   }

}