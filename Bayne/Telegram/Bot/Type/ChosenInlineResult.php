<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class ChosenInlineResult extends Type\AbstractType
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
    * @var Type\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#choseninlineresult
    *
    * Optional. Sender location, only for bots that require user location
    *
    * @var Type\Location
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
    * @param Type\User $from
    * @return ChosenInlineResult
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
    * @return ChosenInlineResult
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