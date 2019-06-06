<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Poll extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#poll
    *
    * Unique poll identifier
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#poll
    *
    * Poll question, 1-255 characters
    *
    * @var string
    */
   protected $question;

   /**
    * https://core.telegram.org/bots/api#poll
    *
    * List of poll options
    *
    * @var Type\PollOption[]|array
    */
   protected $options;

   /**
    * https://core.telegram.org/bots/api#poll
    *
    * True, if the poll is closed
    *
    * @var bool
    */
   protected $isClosed;


   /**
    * @param string $id
    * @return Poll
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
    * @param string $question
    * @return Poll
    */
   public function setQuestion($question)
   {
       $this->question = $question;
       return $this;
   }

   /**
    * @return string
    */
   public function getQuestion()
   {
       return $this->question;
   }

   /**
    * @param Type\PollOption[]|array $options
    * @return Poll
    */
   public function setOptions($options)
   {
       $this->options = $options;
       return $this;
   }

   /**
    * @return Type\PollOption[]|array
    */
   public function getOptions()
   {
       return $this->options;
   }

   /**
    * @param bool $isClosed
    * @return Poll
    */
   public function setIsClosed($isClosed)
   {
       $this->isClosed = $isClosed;
       return $this;
   }

   /**
    * @return bool
    */
   public function getIsClosed()
   {
       return $this->isClosed;
   }

}