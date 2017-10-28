<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineKeyboardButton extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Label text on the button
    *
    * @var string
    */
   protected $text;

   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Optional. HTTP url to be opened when button is pressed
    *
    * @var string
    */
   protected $url;

   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
    *
    * @var string
    */
   protected $callbackData;

   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
    *
    * @var string
    */
   protected $switchInlineQuery;

   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat&#039;s input field. Can be empty, in which case only the bot’s username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
    *
    * @var string
    */
   protected $switchInlineQueryCurrentChat;

   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
    *
    * @var array
    */
   protected $callbackGame;

   /**
    * https://core.telegram.org/bots/api#inlinekeyboardbutton
    *
    * Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row.
    *
    * @var bool
    */
   protected $pay;


   /**
    * @param string $text
    * @return InlineKeyboardButton
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
    * @param string $url
    * @return InlineKeyboardButton
    */
   public function setUrl($url)
   {
       $this->url = $url;
       return $this;
   }

   /**
    * @return string
    */
   public function getUrl()
   {
       return $this->url;
   }

   /**
    * @param string $callbackData
    * @return InlineKeyboardButton
    */
   public function setCallbackData($callbackData)
   {
       $this->callbackData = $callbackData;
       return $this;
   }

   /**
    * @return string
    */
   public function getCallbackData()
   {
       return $this->callbackData;
   }

   /**
    * @param string $switchInlineQuery
    * @return InlineKeyboardButton
    */
   public function setSwitchInlineQuery($switchInlineQuery)
   {
       $this->switchInlineQuery = $switchInlineQuery;
       return $this;
   }

   /**
    * @return string
    */
   public function getSwitchInlineQuery()
   {
       return $this->switchInlineQuery;
   }

   /**
    * @param string $switchInlineQueryCurrentChat
    * @return InlineKeyboardButton
    */
   public function setSwitchInlineQueryCurrentChat($switchInlineQueryCurrentChat)
   {
       $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
       return $this;
   }

   /**
    * @return string
    */
   public function getSwitchInlineQueryCurrentChat()
   {
       return $this->switchInlineQueryCurrentChat;
   }

   /**
    * @param array $callbackGame
    * @return InlineKeyboardButton
    */
   public function setCallbackGame($callbackGame)
   {
       $this->callbackGame = $callbackGame;
       return $this;
   }

   /**
    * @return array
    */
   public function getCallbackGame()
   {
       return $this->callbackGame;
   }

   /**
    * @param bool $pay
    * @return InlineKeyboardButton
    */
   public function setPay($pay)
   {
       $this->pay = $pay;
       return $this;
   }

   /**
    * @return bool
    */
   public function getPay()
   {
       return $this->pay;
   }

}