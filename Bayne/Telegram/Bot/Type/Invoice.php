<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Invoice extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#invoice
    *
    * Product name
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#invoice
    *
    * Product description
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#invoice
    *
    * Unique bot deep-linking parameter that can be used to generate this invoice
    *
    * @var string
    */
   protected $startParameter;

   /**
    * https://core.telegram.org/bots/api#invoice
    *
    * Three-letter ISO 4217 currency code
    *
    * @var string
    */
   protected $currency;

   /**
    * https://core.telegram.org/bots/api#invoice
    *
    * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
    *
    * @var int
    */
   protected $totalAmount;


   /**
    * @param string $title
    * @return Invoice
    */
   public function setTitle($title)
   {
       $this->title = $title;
       return $this;
   }

   /**
    * @return string
    */
   public function getTitle()
   {
       return $this->title;
   }

   /**
    * @param string $description
    * @return Invoice
    */
   public function setDescription($description)
   {
       $this->description = $description;
       return $this;
   }

   /**
    * @return string
    */
   public function getDescription()
   {
       return $this->description;
   }

   /**
    * @param string $startParameter
    * @return Invoice
    */
   public function setStartParameter($startParameter)
   {
       $this->startParameter = $startParameter;
       return $this;
   }

   /**
    * @return string
    */
   public function getStartParameter()
   {
       return $this->startParameter;
   }

   /**
    * @param string $currency
    * @return Invoice
    */
   public function setCurrency($currency)
   {
       $this->currency = $currency;
       return $this;
   }

   /**
    * @return string
    */
   public function getCurrency()
   {
       return $this->currency;
   }

   /**
    * @param int $totalAmount
    * @return Invoice
    */
   public function setTotalAmount($totalAmount)
   {
       $this->totalAmount = $totalAmount;
       return $this;
   }

   /**
    * @return int
    */
   public function getTotalAmount()
   {
       return $this->totalAmount;
   }

}