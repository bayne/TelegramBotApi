<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorFrontSide extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrorfrontside
    *
    * Error source, must be front_side
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfrontside
    *
    * The section of the user&#039;s Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfrontside
    *
    * Base64-encoded hash of the file with the front side of the document
    *
    * @var string
    */
   protected $fileHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfrontside
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorFrontSide
    */
   public function setSource($source)
   {
       $this->source = $source;
       return $this;
   }

   /**
    * @return string
    */
   public function getSource()
   {
       return $this->source;
   }

   /**
    * @param string $type
    * @return PassportElementErrorFrontSide
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
    * @param string $fileHash
    * @return PassportElementErrorFrontSide
    */
   public function setFileHash($fileHash)
   {
       $this->fileHash = $fileHash;
       return $this;
   }

   /**
    * @return string
    */
   public function getFileHash()
   {
       return $this->fileHash;
   }

   /**
    * @param string $message
    * @return PassportElementErrorFrontSide
    */
   public function setMessage($message)
   {
       $this->message = $message;
       return $this;
   }

   /**
    * @return string
    */
   public function getMessage()
   {
       return $this->message;
   }

}