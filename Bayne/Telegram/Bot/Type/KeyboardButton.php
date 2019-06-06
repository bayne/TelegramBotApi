<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class KeyboardButton extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#keyboardbutton
    *
    * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
    *
    * @var string
    */
   protected $text;

   /**
    * https://core.telegram.org/bots/api#keyboardbutton
    *
    * Optional. If True, the user&#039;s phone number will be sent as a contact when the button is pressed. Available in private chats only
    *
    * @var bool
    */
   protected $requestContact;

   /**
    * https://core.telegram.org/bots/api#keyboardbutton
    *
    * Optional. If True, the user&#039;s current location will be sent when the button is pressed. Available in private chats only
    *
    * @var bool
    */
   protected $requestLocation;


   /**
    * @param string $text
    * @return KeyboardButton
    */
   public function setText($text)
   {
       $this->text = $text;
       return $this;
   }

   /**
    * @return string
    */
   public function getText()
   {
       return $this->text;
   }

   /**
    * @param bool $requestContact
    * @return KeyboardButton
    */
   public function setRequestContact($requestContact)
   {
       $this->requestContact = $requestContact;
       return $this;
   }

   /**
    * @return bool
    */
   public function getRequestContact()
   {
       return $this->requestContact;
   }

   /**
    * @param bool $requestLocation
    * @return KeyboardButton
    */
   public function setRequestLocation($requestLocation)
   {
       $this->requestLocation = $requestLocation;
       return $this;
   }

   /**
    * @return bool
    */
   public function getRequestLocation()
   {
       return $this->requestLocation;
   }

}