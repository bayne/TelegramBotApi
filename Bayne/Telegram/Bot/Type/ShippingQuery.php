<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class ShippingQuery extends Type\AbstractType
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
    * @var Type\User
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
    * @var Type\ShippingAddress
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
    * @param Type\User $from
    * @return ShippingQuery
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
    * @param Type\ShippingAddress $shippingAddress
    * @return ShippingQuery
    */
   public function setShippingAddress(Type\ShippingAddress $shippingAddress)
   {
       $this->shippingAddress = $shippingAddress;
       return $this;
   }

   /**
    * @return Type\ShippingAddress
    */
   public function getShippingAddress()
   {
       return $this->shippingAddress;
   }

}