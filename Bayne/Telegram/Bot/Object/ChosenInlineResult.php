<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ChosenInlineResult extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#choseninlineresult
    *
    * The unique identifier for the result that was chosen
    *
    * @var string
    */
   protected $resultId;

   /**
    * https://core.telegram.org/bots/api#choseninlineresult
    *
    * The user that chose the result
    *
    * @var Object\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#choseninlineresult
    *
    * Optional. Sender location, only for bots that require user location
    *
    * @var Object\Location
    */
   protected $location;

   /**
    * https://core.telegram.org/bots/api#choseninlineresult
    *
    * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
    *
    * @var string
    */
   protected $inlineMessageId;

   /**
    * https://core.telegram.org/bots/api#choseninlineresult
    *
    * The query that was used to obtain the result
    *
    * @var string
    */
   protected $query;


   /**
    * @param string $resultId
    * @return ChosenInlineResult
    */
   public function setResultId($resultId)
   {
       $this->resultId = $resultId;
       return $this;
   }

   /**
    * @return string
    */
   public function getResultId()
   {
       return $this->resultId;
   }

   /**
    * @param Object\User $from
    * @return ChosenInlineResult
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
    * @return ChosenInlineResult
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
    * @param string $inlineMessageId
    * @return ChosenInlineResult
    */
   public function setInlineMessageId($inlineMessageId)
   {
       $this->inlineMessageId = $inlineMessageId;
       return $this;
   }

   /**
    * @return string
    */
   public function getInlineMessageId()
   {
       return $this->inlineMessageId;
   }

   /**
    * @param string $query
    * @return ChosenInlineResult
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

}