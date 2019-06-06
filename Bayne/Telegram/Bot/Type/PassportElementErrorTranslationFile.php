<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorTranslationFile extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrortranslationfile
    *
    * Error source, must be translation_file
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrortranslationfile
    *
    * Type of element of the user&#039;s Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrortranslationfile
    *
    * Base64-encoded file hash
    *
    * @var string
    */
   protected $fileHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrortranslationfile
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorTranslationFile
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
    * @return PassportElementErrorTranslationFile
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
    * @return PassportElementErrorTranslationFile
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
    * @return PassportElementErrorTranslationFile
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