<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ShippingQuery extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#shippingquery
    *
    * Unique query identifier
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#shippingquery
    *
    * User who sent the query
    *
    * @var Object\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#shippingquery
    *
    * Bot specified invoice payload
    *
    * @var string
    */
   protected $invoicePayload;

   /**
    * https://core.telegram.org/bots/api#shippingquery
    *
    * User specified shipping address
    *
    * @var Object\ShippingAddress
    */
   protected $shippingAddress;


   /**
    * @param string $id
    * @return ShippingQuery
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
    * @param Object\User $from
    * @return ShippingQuery
    */
   public function setFrom(Object\User $from)
   {
       $this->from = $from;
       return $this;
   }

   /**
    * @return Object\User
    */
   public function getFrom()
   {
       return $this->from;
   }

   /**
    * @param string $invoicePayload
    * @return ShippingQuery
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
    * @param Object\ShippingAddress $shippingAddress
    * @return ShippingQuery
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