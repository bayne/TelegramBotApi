<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Game extends Type\AbstractType
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
    * @var Type\PhotoSize[]|array
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
    * @var Type\MessageEntity[]|array
    */
   protected $textEntities;

   /**
    * https://core.telegram.org/bots/api#game
    *
    * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
    *
    * @var Type\Animation
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
    * @param Type\PhotoSize[]|array $photo
    * @return Game
    */
   public function setPhoto($photo)
   {
       $this->photo = $photo;
       return $this;
   }

   /**
    * @return Type\PhotoSize[]|array
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
    * @param Type\MessageEntity[]|array $textEntities
    * @return Game
    */
   public function setTextEntities($textEntities)
   {
       $this->textEntities = $textEntities;
       return $this;
   }

   /**
    * @return Type\MessageEntity[]|array
    */
   public function getTextEntities()
   {
       return $this->textEntities;
   }

   /**
    * @param Type\Animation $animation
    * @return Game
    */
   public function setAnimation(Type\Animation $animation)
   {
       $this->animation = $animation;
       return $this;
   }

   /**
    * @return Type\Animation
    */
   public function getAnimation()
   {
       return $this->animation;
   }

}