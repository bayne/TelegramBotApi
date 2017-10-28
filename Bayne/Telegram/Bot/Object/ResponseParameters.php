<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ResponseParameters extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#responseparameters
    *
    * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
    *
    * @var int
    */
   protected $migrateToChatId;

   /**
    * https://core.telegram.org/bots/api#responseparameters
    *
    * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
    *
    * @var int
    */
   protected $retryAfter;


   /**
    * @param int $migrateToChatId
    * @return ResponseParameters
    */
   public function setMigrateToChatId($migrateToChatId)
   {
       $this->migrateToChatId = $migrateToChatId;
       return $this;
   }

   /**
    * @return int
    */
   public function getMigrateToChatId()
   {
       return $this->migrateToChatId;
   }

   /**
    * @param int $retryAfter
    * @return ResponseParameters
    */
   public function setRetryAfter($retryAfter)
   {
       $this->retryAfter = $retryAfter;
       return $this;
   }

   /**
    * @return int
    */
   public function getRetryAfter()
   {
       return $this->retryAfter;
   }

}