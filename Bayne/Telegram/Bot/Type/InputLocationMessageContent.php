<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InputLocationMessageContent extends Type\AbstractInputMessageContent
{
   /**
    * https://core.telegram.org/bots/api#inputlocationmessagecontent
    *
    * Latitude of the location in degrees
    *
    * @var float
    */
   protected $latitude;

   /**
    * https://core.telegram.org/bots/api#inputlocationmessagecontent
    *
    * Longitude of the location in degrees
    *
    * @var float
    */
   protected $longitude;

   /**
    * https://core.telegram.org/bots/api#inputlocationmessagecontent
    *
    * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
    *
    * @var int
    */
   protected $livePeriod;


   /**
    * @param float $latitude
    * @return InputLocationMessageContent
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
    * @return InputLocationMessageContent
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
    * @param int $livePeriod
    * @return InputLocationMessageContent
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

}