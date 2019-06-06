<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportData extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportdata
    *
    * Array with information about documents and other Telegram Passport elements that was shared with the bot
    *
    * @var Type\EncryptedPassportElement[]|array
    */
   protected $data;

   /**
    * https://core.telegram.org/bots/api#passportdata
    *
    * Encrypted credentials required to decrypt the data
    *
    * @var Type\EncryptedCredentials
    */
   protected $credentials;


   /**
    * @param Type\EncryptedPassportElement[]|array $data
    * @return PassportData
    */
   public function setData($data)
   {
       $this->data = $data;
       return $this;
   }

   /**
    * @return Type\EncryptedPassportElement[]|array
    */
   public function getData()
   {
       return $this->data;
   }

   /**
    * @param Type\EncryptedCredentials $credentials
    * @return PassportData
    */
   public function setCredentials(Type\EncryptedCredentials $credentials)
   {
       $this->credentials = $credentials;
       return $this;
   }

   /**
    * @return Type\EncryptedCredentials
    */
   public function getCredentials()
   {
       return $this->credentials;
   }

}