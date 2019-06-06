<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PreCheckoutQuery extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * Unique query identifier
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * User who sent the query
    *
    * @var Type\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * Three-letter ISO 4217 currency code
    *
    * @var string
    */
   protected $currency;

   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
    *
    * @var int
    */
   protected $totalAmount;

   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * Bot specified invoice payload
    *
    * @var string
    */
   protected $invoicePayload;

   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * Optional. Identifier of the shipping option chosen by the user
    *
    * @var string
    */
   protected $shippingOptionId;

   /**
    * https://core.telegram.org/bots/api#precheckoutquery
    *
    * Optional. Order info provided by the user
    *
    * @var Type\OrderInfo
    */
   protected $orderInfo;


   /**
    * @param string $id
    * @return PreCheckoutQuery
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
    * @param Type\User $from
    * @return PreCheckoutQuery
    */
   public function setFrom(Type\User $from)
   {
       $this->from = $from;
       return $this;
   }

   /**
    * @return Type\User
    */
   public function getFrom()
   {
       return $this->from;
   }

   /**
    * @param string $currency
    * @return PreCheckoutQuery
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
    * @return PreCheckoutQuery
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

   /**
    * @param string $invoicePayload
    * @return PreCheckoutQuery
    */
   public function setInvoicePayload($invoicePayload)
   {
       $this->invoicePayload = $invoicePayload;
       return $this;
   }

   /**
    * @return string
    */
   public function getInvoicePayload()
   {
       return $this->invoicePayload;
   }

   /**
    * @param string $shippingOptionId
    * @return PreCheckoutQuery
    */
   public function setShippingOptionId($shippingOptionId)
   {
       $this->shippingOptionId = $shippingOptionId;
       return $this;
   }

   /**
    * @return string
    */
   public function getShippingOptionId()
   {
       return $this->shippingOptionId;
   }

   /**
    * @param Type\OrderInfo $orderInfo
    * @return PreCheckoutQuery
    */
   public function setOrderInfo(Type\OrderInfo $orderInfo)
   {
       $this->orderInfo = $orderInfo;
       return $this;
   }

   /**
    * @return Type\OrderInfo
    */
   public function getOrderInfo()
   {
       return $this->orderInfo;
   }

}