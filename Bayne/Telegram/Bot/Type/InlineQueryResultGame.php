<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultGame extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgame
    *
    * Type of the result, must be game
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgame
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgame
    *
    * Short name of the game
    *
    * @var string
    */
   protected $gameShortName;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultgame
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;


   /**
    * @param string $type
    * @return InlineQueryResultGame
    */
   public function setType($type)
   {
       $this->type = $type;
       return $this;
   }

   /**
    * @return string
    */
   public function getType()
   {
       return $this->type;
   }

   /**
    * @param string $id
    * @return InlineQueryResultGame
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
    * @param string $gameShortName
    * @return InlineQueryResultGame
    */
   public function setGameShortName($gameShortName)
   {
       $this->gameShortName = $gameShortName;
       return $this;
   }

   /**
    * @return string
    */
   public function getGameShortName()
   {
       return $this->gameShortName;
   }

   /**
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultGame
    */
   public function setReplyMarkup(Type\InlineKeyboardMarkup $replyMarkup)
   {
       $this->replyMarkup = $replyMarkup;
       return $this;
   }

   /**
    * @return Type\InlineKeyboardMarkup
    */
   public function getReplyMarkup()
   {
       return $this->replyMarkup;
   }

}