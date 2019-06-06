<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorFiles extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrorfiles
    *
    * Error source, must be files
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfiles
    *
    * The section of the user&#039;s Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfiles
    *
    * List of base64-encoded file hashes
    *
    * @var string[]|array
    */
   protected $fileHashes;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorfiles
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorFiles
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
    * @return PassportElementErrorFiles
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
    * @param string[]|array $fileHashes
    * @return PassportElementErrorFiles
    */
   public function setFileHashes($fileHashes)
   {
       $this->fileHashes = $fileHashes;
       return $this;
   }

   /**
    * @return string[]|array
    */
   public function getFileHashes()
   {
       return $this->fileHashes;
   }

   /**
    * @param string $message
    * @return PassportElementErrorFiles
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