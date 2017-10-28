<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultVideo extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Type of the result, must be video
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * A valid URL for the embedded video player or video file
    *
    * @var string
    */
   protected $videoUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Mime type of the content of video url, “text/html” or “video/mp4”
    *
    * @var string
    */
   protected $mimeType;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * URL of the thumbnail (jpeg only) for the video
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Caption of the video to be sent, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Video width
    *
    * @var int
    */
   protected $videoWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Video height
    *
    * @var int
    */
   protected $videoHeight;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Video duration in seconds
    *
    * @var int
    */
   protected $videoDuration;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Short description of the result
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvideo
    *
    * Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultVideo
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
    * @return InlineQueryResultVideo
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
    * @param string $videoUrl
    * @return InlineQueryResultVideo
    */
   public function setVideoUrl($videoUrl)
   {
       $this->videoUrl = $videoUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getVideoUrl()
   {
       return $this->videoUrl;
   }

   /**
    * @param string $mimeType
    * @return InlineQueryResultVideo
    */
   public function setMimeType($mimeType)
   {
       $this->mimeType = $mimeType;
       return $this;
   }

   /**
    * @return string
    */
   public function getMimeType()
   {
       return $this->mimeType;
   }

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultVideo
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
    * @return InlineQueryResultVideo
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
    * @return InlineQueryResultVideo
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
    * @param int $videoWidth
    * @return InlineQueryResultVideo
    */
   public function setVideoWidth($videoWidth)
   {
       $this->videoWidth = $videoWidth;
       return $this;
   }

   /**
    * @return int
    */
   public function getVideoWidth()
   {
       return $this->videoWidth;
   }

   /**
    * @param int $videoHeight
    * @return InlineQueryResultVideo
    */
   public function setVideoHeight($videoHeight)
   {
       $this->videoHeight = $videoHeight;
       return $this;
   }

   /**
    * @return int
    */
   public function getVideoHeight()
   {
       return $this->videoHeight;
   }

   /**
    * @param int $videoDuration
    * @return InlineQueryResultVideo
    */
   public function setVideoDuration($videoDuration)
   {
       $this->videoDuration = $videoDuration;
       return $this;
   }

   /**
    * @return int
    */
   public function getVideoDuration()
   {
       return $this->videoDuration;
   }

   /**
    * @param string $description
    * @return InlineQueryResultVideo
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
    * @param Object\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultVideo
    */
   public function setReplyMarkup(Object\InlineKeyboardMarkup $replyMarkup)
   {
       $this->replyMarkup = $replyMarkup;
       return $this;
   }

   /**
    * @return Object\InlineKeyboardMarkup
    */
   public function getReplyMarkup()
   {
       return $this->replyMarkup;
   }

   /**
    * @param Object\AbstractInputMessageContent $inputMessageContent
    * @return InlineQueryResultVideo
    */
   public function setInputMessageContent(Object\AbstractInputMessageContent $inputMessageContent)
   {
       $this->inputMessageContent = $inputMessageContent;
       return $this;
   }

   /**
    * @return Object\AbstractInputMessageContent
    */
   public function getInputMessageContent()
   {
       return $this->inputMessageContent;
   }

}