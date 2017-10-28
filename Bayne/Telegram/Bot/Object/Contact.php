<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Contact extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#contact
    *
    * Contact&#039;s phone number
    *
    * @var string
    */
   protected $phoneNumber;

   /**
    * https://core.telegram.org/bots/api#contact
    *
    * Contact&#039;s first name
    *
    * @var string
    */
   protected $firstName;

   /**
    * https://core.telegram.org/bots/api#contact
    *
    * Optional. Contact&#039;s last name
    *
    * @var string
    */
   protected $lastName;

   /**
    * https://core.telegram.org/bots/api#contact
    *
    * Optional. Contact&#039;s user identifier in Telegram
    *
    * @var int
    */
   protected $userId;


   /**
    * @param string $phoneNumber
    * @return Contact
    */
   public function setPhoneNumber($phoneNumber)
   {
       $this->phoneNumber = $phoneNumber;
       return $this;
   }

   /**
    * @return string
    */
   public function getPhoneNumber()
   {
       return $this->phoneNumber;
   }

   /**
    * @param string $firstName
    * @return Contact
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
    * @return Contact
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
    * @param int $userId
    * @return Contact
    */
   public function setUserId($userId)
   {
       $this->userId = $userId;
       return $this;
   }

   /**
    * @return int
    */
   public function getUserId()
   {
       return $this->userId;
   }

}