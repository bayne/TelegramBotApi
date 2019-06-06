<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InputContactMessageContent extends Type\AbstractInputMessageContent
{
   /**
    * https://core.telegram.org/bots/api#inputcontactmessagecontent
    *
    * Contact&#039;s phone number
    *
    * @var string
    */
   protected $phoneNumber;

   /**
    * https://core.telegram.org/bots/api#inputcontactmessagecontent
    *
    * Contact&#039;s first name
    *
    * @var string
    */
   protected $firstName;

   /**
    * https://core.telegram.org/bots/api#inputcontactmessagecontent
    *
    * Optional. Contact&#039;s last name
    *
    * @var string
    */
   protected $lastName;

   /**
    * https://core.telegram.org/bots/api#inputcontactmessagecontent
    *
    * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
    *
    * @var string
    */
   protected $vcard;


   /**
    * @param string $phoneNumber
    * @return InputContactMessageContent
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
    * @return InputContactMessageContent
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
    * @return InputContactMessageContent
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
    * @param string $vcard
    * @return InputContactMessageContent
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