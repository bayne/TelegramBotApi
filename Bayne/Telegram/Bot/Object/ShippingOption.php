<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ShippingOption extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#shippingoption
    *
    * Shipping option identifier
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#shippingoption
    *
    * Option title
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#shippingoption
    *
    * List of price portions
    *
    * @var Object\LabeledPrice[]|array
    */
   protected $prices;


   /**
    * @param string $id
    * @return ShippingOption
    */
   public function setId($id)
   {
       $this->id = $id;
       return $this;
   }

   /**
    * @return string
    */
   public function getId()
   {
       return $this->id;
   }

   /**
    * @param string $title
    * @return ShippingOption
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
    * @param Object\LabeledPrice[]|array $prices
    * @return ShippingOption
    */
   public function setPrices($prices)
   {
       $this->prices = $prices;
       return $this;
   }

   /**
    * @return Object\LabeledPrice[]|array
    */
   public function getPrices()
   {
       return $this->prices;
   }

}