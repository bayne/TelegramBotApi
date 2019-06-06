<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class ShippingAddress extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#shippingaddress
    *
    * ISO 3166-1 alpha-2 country code
    *
    * @var string
    */
   protected $countryCode;

   /**
    * https://core.telegram.org/bots/api#shippingaddress
    *
    * State, if applicable
    *
    * @var string
    */
   protected $state;

   /**
    * https://core.telegram.org/bots/api#shippingaddress
    *
    * City
    *
    * @var string
    */
   protected $city;

   /**
    * https://core.telegram.org/bots/api#shippingaddress
    *
    * First line for the address
    *
    * @var string
    */
   protected $streetLine1;

   /**
    * https://core.telegram.org/bots/api#shippingaddress
    *
    * Second line for the address
    *
    * @var string
    */
   protected $streetLine2;

   /**
    * https://core.telegram.org/bots/api#shippingaddress
    *
    * Address post code
    *
    * @var string
    */
   protected $postCode;


   /**
    * @param string $countryCode
    * @return ShippingAddress
    */
   public function setCountryCode($countryCode)
   {
       $this->countryCode = $countryCode;
       return $this;
   }

   /**
    * @return string
    */
   public function getCountryCode()
   {
       return $this->countryCode;
   }

   /**
    * @param string $state
    * @return ShippingAddress
    */
   public function setState($state)
   {
       $this->state = $state;
       return $this;
   }

   /**
    * @return string
    */
   public function getState()
   {
       return $this->state;
   }

   /**
    * @param string $city
    * @return ShippingAddress
    */
   public function setCity($city)
   {
       $this->city = $city;
       return $this;
   }

   /**
    * @return string
    */
   public function getCity()
   {
       return $this->city;
   }

   /**
    * @param string $streetLine1
    * @return ShippingAddress
    */
   public function setStreetLine1($streetLine1)
   {
       $this->streetLine1 = $streetLine1;
       return $this;
   }

   /**
    * @return string
    */
   public function getStreetLine1()
   {
       return $this->streetLine1;
   }

   /**
    * @param string $streetLine2
    * @return ShippingAddress
    */
   public function setStreetLine2($streetLine2)
   {
       $this->streetLine2 = $streetLine2;
       return $this;
   }

   /**
    * @return string
    */
   public function getStreetLine2()
   {
       return $this->streetLine2;
   }

   /**
    * @param string $postCode
    * @return ShippingAddress
    */
   public function setPostCode($postCode)
   {
       $this->postCode = $postCode;
       return $this;
   }

   /**
    * @return string
    */
   public function getPostCode()
   {
       return $this->postCode;
   }

}