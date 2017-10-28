<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class OrderInfo extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#orderinfo
    *
    * Optional. User name
    *
    * @var string
    */
   protected $name;

   /**
    * https://core.telegram.org/bots/api#orderinfo
    *
    * Optional. User&#039;s phone number
    *
    * @var string
    */
   protected $phoneNumber;

   /**
    * https://core.telegram.org/bots/api#orderinfo
    *
    * Optional. User email
    *
    * @var string
    */
   protected $email;

   /**
    * https://core.telegram.org/bots/api#orderinfo
    *
    * Optional. User shipping address
    *
    * @var Object\ShippingAddress
    */
   protected $shippingAddress;


   /**
    * @param string $name
    * @return OrderInfo
    */
   public function setName($name)
   {
       $this->name = $name;
       return $this;
   }

   /**
    * @return string
    */
   public function getName()
   {
       return $this->name;
   }

   /**
    * @param string $phoneNumber
    * @return OrderInfo
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
    * @param string $email
    * @return OrderInfo
    */
   public function setEmail($email)
   {
       $this->email = $email;
       return $this;
   }

   /**
    * @return string
    */
   public function getEmail()
   {
       return $this->email;
   }

   /**
    * @param Object\ShippingAddress $shippingAddress
    * @return OrderInfo
    */
   public function setShippingAddress(Object\ShippingAddress $shippingAddress)
   {
       $this->shippingAddress = $shippingAddress;
       return $this;
   }

   /**
    * @return Object\ShippingAddress
    */
   public function getShippingAddress()
   {
       return $this->shippingAddress;
   }

}