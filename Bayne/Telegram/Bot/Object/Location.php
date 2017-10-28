<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Location extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#location
    *
    * Longitude as defined by sender
    *
    * @var float
    */
   protected $longitude;

   /**
    * https://core.telegram.org/bots/api#location
    *
    * Latitude as defined by sender
    *
    * @var float
    */
   protected $latitude;


   /**
    * @param float $longitude
    * @return Location
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
    * @param float $latitude
    * @return Location
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

}