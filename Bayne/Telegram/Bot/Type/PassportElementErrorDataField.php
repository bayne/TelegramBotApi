<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorDataField extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrordatafield
    *
    * Error source, must be data
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrordatafield
    *
    * The section of the user&#039;s Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrordatafield
    *
    * Name of the data field which has the error
    *
    * @var string
    */
   protected $fieldName;

   /**
    * https://core.telegram.org/bots/api#passportelementerrordatafield
    *
    * Base64-encoded data hash
    *
    * @var string
    */
   protected $dataHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrordatafield
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorDataField
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
    * @return PassportElementErrorDataField
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
    * @param string $fieldName
    * @return PassportElementErrorDataField
    */
   public function setFieldName($fieldName)
   {
       $this->fieldName = $fieldName;
       return $this;
   }

   /**
    * @return string
    */
   public function getFieldName()
   {
       return $this->fieldName;
   }

   /**
    * @param string $dataHash
    * @return PassportElementErrorDataField
    */
   public function setDataHash($dataHash)
   {
       $this->dataHash = $dataHash;
       return $this;
   }

   /**
    * @return string
    */
   public function getDataHash()
   {
       return $this->dataHash;
   }

   /**
    * @param string $message
    * @return PassportElementErrorDataField
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