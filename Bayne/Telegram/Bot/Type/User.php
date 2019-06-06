<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class User extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#user
    *
    * Unique identifier for this user or bot
    *
    * @var int
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#user
    *
    * True, if this user is a bot
    *
    * @var bool
    */
   protected $isBot;

   /**
    * https://core.telegram.org/bots/api#user
    *
    * User‘s or bot’s first name
    *
    * @var string
    */
   protected $firstName;

   /**
    * https://core.telegram.org/bots/api#user
    *
    * Optional. User‘s or bot’s last name
    *
    * @var string
    */
   protected $lastName;

   /**
    * https://core.telegram.org/bots/api#user
    *
    * Optional. User‘s or bot’s username
    *
    * @var string
    */
   protected $username;

   /**
    * https://core.telegram.org/bots/api#user
    *
    * Optional. IETF language tag of the user&#039;s language
    *
    * @var string
    */
   protected $languageCode;


   /**
    * @param int $id
    * @return User
    */
   public function setId($id)
   {
       $this->id = $id;
       return $this;
   }

   /**
    * @return int
    */
   public function getId()
   {
       return $this->id;
   }

   /**
    * @param bool $isBot
    * @return User
    */
   public function setIsBot($isBot)
   {
       $this->isBot = $isBot;
       return $this;
   }

   /**
    * @return bool
    */
   public function getIsBot()
   {
       return $this->isBot;
   }

   /**
    * @param string $firstName
    * @return User
    */
   public function setFirstName($firstName)
   {
       $this->firstName = $firstName;
       return $this;
   }

   /**
    * @return string
    */
   public function getFirstName()
   {
       return $this->firstName;
   }

   /**
    * @param string $lastName
    * @return User
    */
   public function setLastName($lastName)
   {
       $this->lastName = $lastName;
       return $this;
   }

   /**
    * @return string
    */
   public function getLastName()
   {
       return $this->lastName;
   }

   /**
    * @param string $username
    * @return User
    */
   public function setUsername($username)
   {
       $this->username = $username;
       return $this;
   }

   /**
    * @return string
    */
   public function getUsername()
   {
       return $this->username;
   }

   /**
    * @param string $languageCode
    * @return User
    */
   public function setLanguageCode($languageCode)
   {
       $this->languageCode = $languageCode;
       return $this;
   }

   /**
    * @return string
    */
   public function getLanguageCode()
   {
       return $this->languageCode;
   }

}