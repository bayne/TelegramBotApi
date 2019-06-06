<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InputTextMessageContent extends Type\AbstractInputMessageContent
{
   /**
    * https://core.telegram.org/bots/api#inputtextmessagecontent
    *
    * Text of the message to be sent, 1-4096 characters
    *
    * @var string
    */
   protected $messageText;

   /**
    * https://core.telegram.org/bots/api#inputtextmessagecontent
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot&#039;s message.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inputtextmessagecontent
    *
    * Optional. Disables link previews for links in the sent message
    *
    * @var bool
    */
   protected $disableWebPagePreview;


   /**
    * @param string $messageText
    * @return InputTextMessageContent
    */
   public function setMessageText($messageText)
   {
       $this->messageText = $messageText;
       return $this;
   }

   /**
    * @return string
    */
   public function getMessageText()
   {
       return $this->messageText;
   }

   /**
    * @param string $parseMode
    * @return InputTextMessageContent
    */
   public function setParseMode($parseMode)
   {
       $this->parseMode = $parseMode;
       return $this;
   }

   /**
    * @return string
    */
   public function getParseMode()
   {
       return $this->parseMode;
   }

   /**
    * @param bool $disableWebPagePreview
    * @return InputTextMessageContent
    */
   public function setDisableWebPagePreview($disableWebPagePreview)
   {
       $this->disableWebPagePreview = $disableWebPagePreview;
       return $this;
   }

   /**
    * @return bool
    */
   public function getDisableWebPagePreview()
   {
       return $this->disableWebPagePreview;
   }

}