<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQuery extends Object\AbstractObject
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
    * @var Object\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#inlinequery
    *
    * Optional. Sender location, only for bots that request user location
    *
    * @var Object\Location
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
    * @param Object\User $from
    * @return InlineQuery
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
    * @param Object\Location $location
    * @return InlineQuery
    */
   public function setLocation(Object\Location $location)
   {
       $this->location = $location;
       return $this;
   }

   /**
    * @return Object\Location
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