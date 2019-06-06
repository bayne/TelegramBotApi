<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultVenue extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Type of the result, must be venue
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Unique identifier for this result, 1-64 Bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Latitude of the venue location in degrees
    *
    * @var float
    */
   protected $latitude;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Longitude of the venue location in degrees
    *
    * @var float
    */
   protected $longitude;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Title of the venue
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Address of the venue
    *
    * @var string
    */
   protected $address;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Foursquare identifier of the venue if known
    *
    * @var string
    */
   protected $foursquareId;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
    *
    * @var string
    */
   protected $foursquareType;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Content of the message to be sent instead of the venue
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Url of the thumbnail for the result
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Thumbnail width
    *
    * @var int
    */
   protected $thumbWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvenue
    *
    * Optional. Thumbnail height
    *
    * @var int
    */
   protected $thumbHeight;


   /**
    * @param string $type
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @param string $address
    * @return InlineQueryResultVenue
    */
   public function setAddress($address)
   {
       $this->address = $address;
       return $this;
   }

   /**
    * @return string
    */
   public function getAddress()
   {
       return $this->address;
   }

   /**
    * @param string $foursquareId
    * @return InlineQueryResultVenue
    */
   public function setFoursquareId($foursquareId)
   {
       $this->foursquareId = $foursquareId;
       return $this;
   }

   /**
    * @return string
    */
   public function getFoursquareId()
   {
       return $this->foursquareId;
   }

   /**
    * @param string $foursquareType
    * @return InlineQueryResultVenue
    */
   public function setFoursquareType($foursquareType)
   {
       $this->foursquareType = $foursquareType;
       return $this;
   }

   /**
    * @return string
    */
   public function getFoursquareType()
   {
       return $this->foursquareType;
   }

   /**
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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
    * @return InlineQueryResultVenue
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