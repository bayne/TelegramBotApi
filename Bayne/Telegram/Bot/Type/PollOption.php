<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PollOption extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#polloption
    *
    * Option text, 1-100 characters
    *
    * @var string
    */
   protected $text;

   /**
    * https://core.telegram.org/bots/api#polloption
    *
    * Number of users that voted for this option
    *
    * @var int
    */
   protected $voterCount;


   /**
    * @param string $text
    * @return PollOption
    */
   public function setText($text)
   {
       $this->text = $text;
       return $this;
   }

   /**
    * @return string
    */
   public function getText()
   {
       return $this->text;
   }

   /**
    * @param int $voterCount
    * @return PollOption
    */
   public function setVoterCount($voterCount)
   {
       $this->voterCount = $voterCount;
       return $this;
   }

   /**
    * @return int
    */
   public function getVoterCount()
   {
       return $this->voterCount;
   }

}