<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Game extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#game
    *
    * Title of the game
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#game
    *
    * Description of the game
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#game
    *
    * Photo that will be displayed in the game message in chats.
    *
    * @var Object\PhotoSize[]
    */
   protected $photo;

   /**
    * https://core.telegram.org/bots/api#game
    *
    * Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
    *
    * @var string
    */
   protected $text;

   /**
    * https://core.telegram.org/bots/api#game
    *
    * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
    *
    * @var Object\MessageEntity[]
    */
   protected $textEntities;

   /**
    * https://core.telegram.org/bots/api#game
    *
    * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
    *
    * @var Object\Animation
    */
   protected $animation;


   /**
    * @param string $title
    * @return Game
    */
   public function setTitle($title)
   {
       $this->title = $title;
       return $this;
   }

   /**
    * @return string
    */
   public function getTitle()
   {
       return $this->title;
   }

   /**
    * @param string $description
    * @return Game
    */
   public function setDescription($description)
   {
       $this->description = $description;
       return $this;
   }

   /**
    * @return string
    */
   public function getDescription()
   {
       return $this->description;
   }

   /**
    * @param Object\PhotoSize[] $photo
    * @return Game
    */
   public function setPhoto($photo)
   {
       $this->photo = $photo;
       return $this;
   }

   /**
    * @return Object\PhotoSize[]
    */
   public function getPhoto()
   {
       return $this->photo;
   }

   /**
    * @param string $text
    * @return Game
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
    * @param Object\MessageEntity[] $textEntities
    * @return Game
    */
   public function setTextEntities($textEntities)
   {
       $this->textEntities = $textEntities;
       return $this;
   }

   /**
    * @return Object\MessageEntity[]
    */
   public function getTextEntities()
   {
       return $this->textEntities;
   }

   /**
    * @param Object\Animation $animation
    * @return Game
    */
   public function setAnimation(Object\Animation $animation)
   {
       $this->animation = $animation;
       return $this;
   }

   /**
    * @return Object\Animation
    */
   public function getAnimation()
   {
       return $this->animation;
   }

}