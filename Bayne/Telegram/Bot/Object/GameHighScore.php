<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class GameHighScore extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#gamehighscore
    *
    * Position in high score table for the game
    *
    * @var int
    */
   protected $position;

   /**
    * https://core.telegram.org/bots/api#gamehighscore
    *
    * User
    *
    * @var Object\User
    */
   protected $user;

   /**
    * https://core.telegram.org/bots/api#gamehighscore
    *
    * Score
    *
    * @var int
    */
   protected $score;


   /**
    * @param int $position
    * @return GameHighScore
    */
   public function setPosition($position)
   {
       $this->position = $position;
       return $this;
   }

   /**
    * @return int
    */
   public function getPosition()
   {
       return $this->position;
   }

   /**
    * @param Object\User $user
    * @return GameHighScore
    */
   public function setUser(Object\User $user)
   {
       $this->user = $user;
       return $this;
   }

   /**
    * @return Object\User
    */
   public function getUser()
   {
       return $this->user;
   }

   /**
    * @param int $score
    * @return GameHighScore
    */
   public function setScore($score)
   {
       $this->score = $score;
       return $this;
   }

   /**
    * @return int
    */
   public function getScore()
   {
       return $this->score;
   }

}