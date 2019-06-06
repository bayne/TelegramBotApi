<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Contact extends Type\AbstractType
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
    * https://core.telegram.org/bots/api#contact
    *
    * Optional. Additional data about the contact in the form of a vCard
    *
    * @var string
    */
   protected $vcard;


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

   /**
    * @param string $vcard
    * @return Contact
    */
   public function setVcard($vcard)
   {
       $this->vcard = $vcard;
       return $this;
   }

   /**
    * @return string
    */
   public function getVcard()
   {
       return $this->vcard;
   }

}