<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultMpeg4Gif extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Type of the result, must be mpeg4_gif
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * A valid URL for the MP4 file. File size must not exceed 1MB
    *
    * @var string
    */
   protected $mpeg4Url;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Video width
    *
    * @var int
    */
   protected $mpeg4Width;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Video height
    *
    * @var int
    */
   protected $mpeg4Height;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Video duration
    *
    * @var int
    */
   protected $mpeg4Duration;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * URL of the static thumbnail (jpeg or gif) for the result
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
    *
    * Optional. Content of the message to be sent instead of the video animation
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultMpeg4Gif
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
    * @return InlineQueryResultMpeg4Gif
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
    * @param string $mpeg4Url
    * @return InlineQueryResultMpeg4Gif
    */
   public function setMpeg4Url($mpeg4Url)
   {
       $this->mpeg4Url = $mpeg4Url;
       return $this;
   }

   /**
    * @return string
    */
   public function getMpeg4Url()
   {
       return $this->mpeg4Url;
   }

   /**
    * @param int $mpeg4Width
    * @return InlineQueryResultMpeg4Gif
    */
   public function setMpeg4Width($mpeg4Width)
   {
       $this->mpeg4Width = $mpeg4Width;
       return $this;
   }

   /**
    * @return int
    */
   public function getMpeg4Width()
   {
       return $this->mpeg4Width;
   }

   /**
    * @param int $mpeg4Height
    * @return InlineQueryResultMpeg4Gif
    */
   public function setMpeg4Height($mpeg4Height)
   {
       $this->mpeg4Height = $mpeg4Height;
       return $this;
   }

   /**
    * @return int
    */
   public function getMpeg4Height()
   {
       return $this->mpeg4Height;
   }

   /**
    * @param int $mpeg4Duration
    * @return InlineQueryResultMpeg4Gif
    */
   public function setMpeg4Duration($mpeg4Duration)
   {
       $this->mpeg4Duration = $mpeg4Duration;
       return $this;
   }

   /**
    * @return int
    */
   public function getMpeg4Duration()
   {
       return $this->mpeg4Duration;
   }

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultMpeg4Gif
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
    * @return InlineQueryResultMpeg4Gif
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
    * @return InlineQueryResultMpeg4Gif
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
    * @return InlineQueryResultMpeg4Gif
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
    * @return InlineQueryResultMpeg4Gif
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
    * @return InlineQueryResultMpeg4Gif
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