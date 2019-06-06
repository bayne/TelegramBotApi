<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InputVenueMessageContent extends Type\AbstractInputMessageContent
{
   /**
    * https://core.telegram.org/bots/api#inputvenuemessagecontent
    *
    * Latitude of the venue in degrees
    *
    * @var float
    */
   protected $latitude;

   /**
    * https://core.telegram.org/bots/api#inputvenuemessagecontent
    *
    * Longitude of the venue in degrees
    *
    * @var float
    */
   protected $longitude;

   /**
    * https://core.telegram.org/bots/api#inputvenuemessagecontent
    *
    * Name of the venue
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inputvenuemessagecontent
    *
    * Address of the venue
    *
    * @var string
    */
   protected $address;

   /**
    * https://core.telegram.org/bots/api#inputvenuemessagecontent
    *
    * Optional. Foursquare identifier of the venue, if known
    *
    * @var string
    */
   protected $foursquareId;

   /**
    * https://core.telegram.org/bots/api#inputvenuemessagecontent
    *
    * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
    *
    * @var string
    */
   protected $foursquareType;


   /**
    * @param float $latitude
    * @return InputVenueMessageContent
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
    * @return InputVenueMessageContent
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
    * @return InputVenueMessageContent
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
    * @return InputVenueMessageContent
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
    * @return InputVenueMessageContent
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
    * @return InputVenueMessageContent
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

}