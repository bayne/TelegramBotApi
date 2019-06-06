<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorSelfie extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrorselfie
    *
    * Error source, must be selfie
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorselfie
    *
    * The section of the user&#039;s Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorselfie
    *
    * Base64-encoded hash of the file with the selfie
    *
    * @var string
    */
   protected $fileHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorselfie
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorSelfie
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
    * @return PassportElementErrorSelfie
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
    * @return PassportElementErrorSelfie
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
    * @return PassportElementErrorSelfie
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