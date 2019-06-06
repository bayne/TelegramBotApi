<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQuery extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#inlinequery
    *
    * Unique identifier for this query
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequery
    *
    * Sender
    *
    * @var Type\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#inlinequery
    *
    * Optional. Sender location, only for bots that request user location
    *
    * @var Type\Location
    */
   protected $location;

   /**
    * https://core.telegram.org/bots/api#inlinequery
    *
    * Text of the query (up to 512 characters)
    *
    * @var string
    */
   protected $query;

   /**
    * https://core.telegram.org/bots/api#inlinequery
    *
    * Offset of the results to be returned, can be controlled by the bot
    *
    * @var string
    */
   protected $offset;


   /**
    * @param string $id
    * @return InlineQuery
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
    * @return InlineQuery
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
    * @param Type\Location $location
    * @return InlineQuery
    */
   public function setLocation(Type\Location $location)
   {
       $this->location = $location;
       return $this;
   }

   /**
    * @return Type\Location
    */
   public function getLocation()
   {
       return $this->location;
   }

   /**
    * @param string $query
    * @return InlineQuery
    */
   public function setQuery($query)
   {
       $this->query = $query;
       return $this;
   }

   /**
    * @return string
    */
   public function getQuery()
   {
       return $this->query;
   }

   /**
    * @param string $offset
    * @return InlineQuery
    */
   public function setOffset($offset)
   {
       $this->offset = $offset;
       return $this;
   }

   /**
    * @return string
    */
   public function getOffset()
   {
       return $this->offset;
   }

}