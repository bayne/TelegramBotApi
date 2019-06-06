<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorFile extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrorfile
    *
    * Error source, must be file
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfile
    *
    * The section of the user&#039;s Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfile
    *
    * Base64-encoded file hash
    *
    * @var string
    */
   protected $fileHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfile
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorFile
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
    * @return PassportElementErrorFile
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
    * @return PassportElementErrorFile
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
    * @return PassportElementErrorFile
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