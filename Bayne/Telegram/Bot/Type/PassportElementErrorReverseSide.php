<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorReverseSide extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrorreverseside
    *
    * Error source, must be reverse_side
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorreverseside
    *
    * The section of the user&#039;s Telegram Passport which has the issue, one of “driver_license”, “identity_card”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorreverseside
    *
    * Base64-encoded hash of the file with the reverse side of the document
    *
    * @var string
    */
   protected $fileHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorreverseside
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorReverseSide
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
    * @return PassportElementErrorReverseSide
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
    * @return PassportElementErrorReverseSide
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
    * @return PassportElementErrorReverseSide
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