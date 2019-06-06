<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportElementErrorUnspecified extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportelementerrorunspecified
    *
    * Error source, must be unspecified
    *
    * @var string
    */
   protected $source;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorunspecified
    *
    * Type of element of the user&#039;s Telegram Passport which has the issue
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorunspecified
    *
    * Base64-encoded element hash
    *
    * @var string
    */
   protected $elementHash;

   /**
    * https://core.telegram.org/bots/api#passportelementerrorunspecified
    *
    * Error message
    *
    * @var string
    */
   protected $message;


   /**
    * @param string $source
    * @return PassportElementErrorUnspecified
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
    * @return PassportElementErrorUnspecified
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
    * @param string $elementHash
    * @return PassportElementErrorUnspecified
    */
   public function setElementHash($elementHash)
   {
       $this->elementHash = $elementHash;
       return $this;
   }

   /**
    * @return string
    */
   public function getElementHash()
   {
       return $this->elementHash;
   }

   /**
    * @param string $message
    * @return PassportElementErrorUnspecified
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