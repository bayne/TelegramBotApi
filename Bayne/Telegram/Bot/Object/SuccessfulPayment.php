<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class SuccessfulPayment extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Three-letter ISO 4217 currency code
    *
    * @var string
    */
   protected $currency;

   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
    *
    * @var int
    */
   protected $totalAmount;

   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Bot specified invoice payload
    *
    * @var string
    */
   protected $invoicePayload;

   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Optional. Identifier of the shipping option chosen by the user
    *
    * @var string
    */
   protected $shippingOptionId;

   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Optional. Order info provided by the user
    *
    * @var Object\OrderInfo
    */
   protected $orderInfo;

   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Telegram payment identifier
    *
    * @var string
    */
   protected $telegramPaymentChargeId;

   /**
    * https://core.telegram.org/bots/api#successfulpayment
    *
    * Provider payment identifier
    *
    * @var string
    */
   protected $providerPaymentChargeId;


   /**
    * @param string $currency
    * @return SuccessfulPayment
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
    * @return SuccessfulPayment
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
    * @return SuccessfulPayment
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
    * @return SuccessfulPayment
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
    * @param Object\OrderInfo $orderInfo
    * @return SuccessfulPayment
    */
   public function setOrderInfo(Object\OrderInfo $orderInfo)
   {
       $this->orderInfo = $orderInfo;
       return $this;
   }

   /**
    * @return Object\OrderInfo
    */
   public function getOrderInfo()
   {
       return $this->orderInfo;
   }

   /**
    * @param string $telegramPaymentChargeId
    * @return SuccessfulPayment
    */
   public function setTelegramPaymentChargeId($telegramPaymentChargeId)
   {
       $this->telegramPaymentChargeId = $telegramPaymentChargeId;
       return $this;
   }

   /**
    * @return string
    */
   public function getTelegramPaymentChargeId()
   {
       return $this->telegramPaymentChargeId;
   }

   /**
    * @param string $providerPaymentChargeId
    * @return SuccessfulPayment
    */
   public function setProviderPaymentChargeId($providerPaymentChargeId)
   {
       $this->providerPaymentChargeId = $providerPaymentChargeId;
       return $this;
   }

   /**
    * @return string
    */
   public function getProviderPaymentChargeId()
   {
       return $this->providerPaymentChargeId;
   }

}