<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class LabeledPrice extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#labeledprice
    *
    * Portion label
    *
    * @var string
    */
   protected $label;

   /**
    * https://core.telegram.org/bots/api#labeledprice
    *
    * Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
    *
    * @var int
    */
   protected $amount;


   /**
    * @param string $label
    * @return LabeledPrice
    */
   public function setLabel($label)
   {
       $this->label = $label;
       return $this;
   }

   /**
    * @return string
    */
   public function getLabel()
   {
       return $this->label;
   }

   /**
    * @param int $amount
    * @return LabeledPrice
    */
   public function setAmount($amount)
   {
       $this->amount = $amount;
       return $this;
   }

   /**
    * @return int
    */
   public function getAmount()
   {
       return $this->amount;
   }

}