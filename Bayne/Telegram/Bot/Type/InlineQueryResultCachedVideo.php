<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultCachedVideo extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Type of the result, must be video
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * A valid file identifier for the video file
    *
    * @var string
    */
   protected $videoFileId;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Optional. Short description of the result
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Optional. Caption of the video to be sent, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
    *
    * Optional. Content of the message to be sent instead of the video
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultCachedVideo
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
    * @return InlineQueryResultCachedVideo
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
    * @param string $videoFileId
    * @return InlineQueryResultCachedVideo
    */
   public function setVideoFileId($videoFileId)
   {
       $this->videoFileId = $videoFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getVideoFileId()
   {
       return $this->videoFileId;
   }

   /**
    * @param string $title
    * @return InlineQueryResultCachedVideo
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
    * @param string $description
    * @return InlineQueryResultCachedVideo
    */
   public function setDescription($description)
   {
       $this->description = $description;
       return $this;
   }

   /**
    * @return string
    */
   public function getDescription()
   {
       return $this->description;
   }

   /**
    * @param string $caption
    * @return InlineQueryResultCachedVideo
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
    * @return InlineQueryResultCachedVideo
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
    * @return InlineQueryResultCachedVideo
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
    * @return InlineQueryResultCachedVideo
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