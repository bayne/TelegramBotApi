<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultGif extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Type of the result, must be gif
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * A valid URL for the GIF file. File size must not exceed 1MB
    *
    * @var string
    */
   protected $gifUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Width of the GIF
    *
    * @var int
    */
   protected $gifWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Height of the GIF
    *
    * @var int
    */
   protected $gifHeight;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Duration of the GIF
    *
    * @var int
    */
   protected $gifDuration;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * URL of the static thumbnail for the result (jpeg or gif)
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Caption of the GIF file to be sent, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgif
    *
    * Optional. Content of the message to be sent instead of the GIF animation
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultGif
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
    * @param string $id
    * @return InlineQueryResultGif
    */
   public function setId($id)
   {
       $this->id = $id;
       return $this;
   }

   /**
    * @return string
    */
   public function getId()
   {
       return $this->id;
   }

   /**
    * @param string $gifUrl
    * @return InlineQueryResultGif
    */
   public function setGifUrl($gifUrl)
   {
       $this->gifUrl = $gifUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getGifUrl()
   {
       return $this->gifUrl;
   }

   /**
    * @param int $gifWidth
    * @return InlineQueryResultGif
    */
   public function setGifWidth($gifWidth)
   {
       $this->gifWidth = $gifWidth;
       return $this;
   }

   /**
    * @return int
    */
   public function getGifWidth()
   {
       return $this->gifWidth;
   }

   /**
    * @param int $gifHeight
    * @return InlineQueryResultGif
    */
   public function setGifHeight($gifHeight)
   {
       $this->gifHeight = $gifHeight;
       return $this;
   }

   /**
    * @return int
    */
   public function getGifHeight()
   {
       return $this->gifHeight;
   }

   /**
    * @param int $gifDuration
    * @return InlineQueryResultGif
    */
   public function setGifDuration($gifDuration)
   {
       $this->gifDuration = $gifDuration;
       return $this;
   }

   /**
    * @return int
    */
   public function getGifDuration()
   {
       return $this->gifDuration;
   }

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultGif
    */
   public function setThumbUrl($thumbUrl)
   {
       $this->thumbUrl = $thumbUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getThumbUrl()
   {
       return $this->thumbUrl;
   }

   /**
    * @param string $title
    * @return InlineQueryResultGif
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
    * @param string $caption
    * @return InlineQueryResultGif
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
    * @param string $parseMode
    * @return InlineQueryResultGif
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
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultGif
    */
   public function setReplyMarkup(Type\InlineKeyboardMarkup $replyMarkup)
   {
       $this->replyMarkup = $replyMarkup;
       return $this;
   }

   /**
    * @return Type\InlineKeyboardMarkup
    */
   public function getReplyMarkup()
   {
       return $this->replyMarkup;
   }

   /**
    * @param Type\AbstractInputMessageContent $inputMessageContent
    * @return InlineQueryResultGif
    */
   public function setInputMessageContent(Type\AbstractInputMessageContent $inputMessageContent)
   {
       $this->inputMessageContent = $inputMessageContent;
       return $this;
   }

   /**
    * @return Type\AbstractInputMessageContent
    */
   public function getInputMessageContent()
   {
       return $this->inputMessageContent;
   }

}