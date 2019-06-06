<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Venue extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#venue
    *
    * Venue location
    *
    * @var Type\Location
    */
   protected $location;

   /**
    * https://core.telegram.org/bots/api#venue
    *
    * Name of the venue
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#venue
    *
    * Address of the venue
    *
    * @var string
    */
   protected $address;

   /**
    * https://core.telegram.org/bots/api#venue
    *
    * Optional. Foursquare identifier of the venue
    *
    * @var string
    */
   protected $foursquareId;

   /**
    * https://core.telegram.org/bots/api#venue
    *
    * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
    *
    * @var string
    */
   protected $foursquareType;


   /**
    * @param Type\Location $location
    * @return Venue
    */
   public function setLocation(Type\Location $location)
   {
       $this->location = $location;
       return $this;
   }

   /**
    * @return Type\Location
    */
   public function getLocation()
   {
       return $this->location;
   }

   /**
    * @param string $title
    * @return Venue
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
    * @return Venue
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
    * @return Venue
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
    * @return Venue
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