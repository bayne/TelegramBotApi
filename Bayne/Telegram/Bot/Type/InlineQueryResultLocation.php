<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultLocation extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Type of the result, must be location
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Unique identifier for this result, 1-64 Bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Location latitude in degrees
    *
    * @var float
    */
   protected $latitude;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Location longitude in degrees
    *
    * @var float
    */
   protected $longitude;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Location title
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
    *
    * @var int
    */
   protected $livePeriod;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Optional. Content of the message to be sent instead of the location
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Optional. Url of the thumbnail for the result
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Optional. Thumbnail width
    *
    * @var int
    */
   protected $thumbWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultlocation
    *
    * Optional. Thumbnail height
    *
    * @var int
    */
   protected $thumbHeight;


   /**
    * @param string $type
    * @return InlineQueryResultLocation
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
    * @return InlineQueryResultLocation
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
    * @param float $latitude
    * @return InlineQueryResultLocation
    */
   public function setLatitude($latitude)
   {
       $this->latitude = $latitude;
       return $this;
   }

   /**
    * @return float
    */
   public function getLatitude()
   {
       return $this->latitude;
   }

   /**
    * @param float $longitude
    * @return InlineQueryResultLocation
    */
   public function setLongitude($longitude)
   {
       $this->longitude = $longitude;
       return $this;
   }

   /**
    * @return float
    */
   public function getLongitude()
   {
       return $this->longitude;
   }

   /**
    * @param string $title
    * @return InlineQueryResultLocation
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
    * @param int $livePeriod
    * @return InlineQueryResultLocation
    */
   public function setLivePeriod($livePeriod)
   {
       $this->livePeriod = $livePeriod;
       return $this;
   }

   /**
    * @return int
    */
   public function getLivePeriod()
   {
       return $this->livePeriod;
   }

   /**
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultLocation
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
    * @return InlineQueryResultLocation
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

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultLocation
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
    * @param int $thumbWidth
    * @return InlineQueryResultLocation
    */
   public function setThumbWidth($thumbWidth)
   {
       $this->thumbWidth = $thumbWidth;
       return $this;
   }

   /**
    * @return int
    */
   public function getThumbWidth()
   {
       return $this->thumbWidth;
   }

   /**
    * @param int $thumbHeight
    * @return InlineQueryResultLocation
    */
   public function setThumbHeight($thumbHeight)
   {
       $this->thumbHeight = $thumbHeight;
       return $this;
   }

   /**
    * @return int
    */
   public function getThumbHeight()
   {
       return $this->thumbHeight;
   }

}