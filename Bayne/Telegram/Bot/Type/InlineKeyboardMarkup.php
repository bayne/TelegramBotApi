<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineKeyboardMarkup extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#inlinekeyboardmarkup
    *
    * Array of button rows, each represented by an Array of InlineKeyboardButton objects
    *
    * @var array[]|array
    */
   protected $inlineKeyboard;


   /**
    * @param array[]|array $inlineKeyboard
    * @return InlineKeyboardMarkup
    */
   public function setInlineKeyboard($inlineKeyboard)
   {
       $this->inlineKeyboard = $inlineKeyboard;
       return $this;
   }

   /**
    * @return array[]|array
    */
   public function getInlineKeyboard()
   {
       return $this->inlineKeyboard;
   }

}