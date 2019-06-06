<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class EncryptedCredentials extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#encryptedcredentials
    *
    * Base64-encoded encrypted JSON-serialized data with unique user&#039;s payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
    *
    * @var string
    */
   protected $data;

   /**
    * https://core.telegram.org/bots/api#encryptedcredentials
    *
    * Base64-encoded data hash for data authentication
    *
    * @var string
    */
   protected $hash;

   /**
    * https://core.telegram.org/bots/api#encryptedcredentials
    *
    * Base64-encoded secret, encrypted with the bot&#039;s public RSA key, required for data decryption
    *
    * @var string
    */
   protected $secret;


   /**
    * @param string $data
    * @return EncryptedCredentials
    */
   public function setData($data)
   {
       $this->data = $data;
       return $this;
   }

   /**
    * @return string
    */
   public function getData()
   {
       return $this->data;
   }

   /**
    * @param string $hash
    * @return EncryptedCredentials
    */
   public function setHash($hash)
   {
       $this->hash = $hash;
       return $this;
   }

   /**
    * @return string
    */
   public function getHash()
   {
       return $this->hash;
   }

   /**
    * @param string $secret
    * @return EncryptedCredentials
    */
   public function setSecret($secret)
   {
       $this->secret = $secret;
       return $this;
   }

   /**
    * @return string
    */
   public function getSecret()
   {
       return $this->secret;
   }

}