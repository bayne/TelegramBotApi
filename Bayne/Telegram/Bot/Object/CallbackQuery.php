<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class CallbackQuery extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Unique identifier for this query
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Sender
    *
    * @var Object\User
    */
   protected $from;

   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
    *
    * @var Object\Message
    */
   protected $message;

   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
    *
    * @var string
    */
   protected $inlineMessageId;

   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
    *
    * @var string
    */
   protected $chatInstance;

   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Optional. Data associated with the callback button. Be aware that a bad guzzleClient can send arbitrary data in this field.
    *
    * @var string
    */
   protected $data;

   /**
    * https://core.telegram.org/bots/api#callbackquery
    *
    * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
    *
    * @var string
    */
   protected $gameShortName;


   /**
    * @param string $id
    * @return CallbackQuery
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
    * @return CallbackQuery
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
    * @param Object\Message $message
    * @return CallbackQuery
    */
   public function setMessage(Object\Message $message)
   {
       $this->message = $message;
       return $this;
   }

   /**
    * @return Object\Message
    */
   public function getMessage()
   {
       return $this->message;
   }

   /**
    * @param string $inlineMessageId
    * @return CallbackQuery
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
    * @param string $chatInstance
    * @return CallbackQuery
    */
   public function setChatInstance($chatInstance)
   {
       $this->chatInstance = $chatInstance;
       return $this;
   }

   /**
    * @return string
    */
   public function getChatInstance()
   {
       return $this->chatInstance;
   }

   /**
    * @param string $data
    * @return CallbackQuery
    */
   public function setData($data)
   {
       $this->data = $data;
       return $this;
   }

   /**
    * @return string
    */
   public function getData()
   {
       return $this->data;
   }

   /**
    * @param string $gameShortName
    * @return CallbackQuery
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

}