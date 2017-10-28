<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Venue extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#venue
    *
    * Venue location
    *
    * @var Object\Location
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
    * @param Object\Location $location
    * @return Venue
    */
   public function setLocation(Object\Location $location)
   {
       $this->location = $location;
       return $this;
   }

   /**
    * @return Object\Location
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

}