<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Update extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#update
    *
    * The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
    *
    * @var int
    */
   protected $updateId;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming message of any kind — text, photo, sticker, etc.
    *
    * @var Type\Message
    */
   protected $message;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New version of a message that is known to the bot and was edited
    *
    * @var Type\Message
    */
   protected $editedMessage;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
    *
    * @var Type\Message
    */
   protected $channelPost;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New version of a channel post that is known to the bot and was edited
    *
    * @var Type\Message
    */
   protected $editedChannelPost;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming inline query
    *
    * @var Type\InlineQuery
    */
   protected $inlineQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
    *
    * @var Type\ChosenInlineResult
    */
   protected $chosenInlineResult;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming callback query
    *
    * @var Type\CallbackQuery
    */
   protected $callbackQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming shipping query. Only for invoices with flexible price
    *
    * @var Type\ShippingQuery
    */
   protected $shippingQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming pre-checkout query. Contains full information about checkout
    *
    * @var Type\PreCheckoutQuery
    */
   protected $preCheckoutQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
    *
    * @var Type\Poll
    */
   protected $poll;


   /**
    * @param int $updateId
    * @return Update
    */
   public function setUpdateId($updateId)
   {
       $this->updateId = $updateId;
       return $this;
   }

   /**
    * @return int
    */
   public function getUpdateId()
   {
       return $this->updateId;
   }

   /**
    * @param Type\Message $message
    * @return Update
    */
   public function setMessage(Type\Message $message)
   {
       $this->message = $message;
       return $this;
   }

   /**
    * @return Type\Message
    */
   public function getMessage()
   {
       return $this->message;
   }

   /**
    * @param Type\Message $editedMessage
    * @return Update
    */
   public function setEditedMessage(Type\Message $editedMessage)
   {
       $this->editedMessage = $editedMessage;
       return $this;
   }

   /**
    * @return Type\Message
    */
   public function getEditedMessage()
   {
       return $this->editedMessage;
   }

   /**
    * @param Type\Message $channelPost
    * @return Update
    */
   public function setChannelPost(Type\Message $channelPost)
   {
       $this->channelPost = $channelPost;
       return $this;
   }

   /**
    * @return Type\Message
    */
   public function getChannelPost()
   {
       return $this->channelPost;
   }

   /**
    * @param Type\Message $editedChannelPost
    * @return Update
    */
   public function setEditedChannelPost(Type\Message $editedChannelPost)
   {
       $this->editedChannelPost = $editedChannelPost;
       return $this;
   }

   /**
    * @return Type\Message
    */
   public function getEditedChannelPost()
   {
       return $this->editedChannelPost;
   }

   /**
    * @param Type\InlineQuery $inlineQuery
    * @return Update
    */
   public function setInlineQuery(Type\InlineQuery $inlineQuery)
   {
       $this->inlineQuery = $inlineQuery;
       return $this;
   }

   /**
    * @return Type\InlineQuery
    */
   public function getInlineQuery()
   {
       return $this->inlineQuery;
   }

   /**
    * @param Type\ChosenInlineResult $chosenInlineResult
    * @return Update
    */
   public function setChosenInlineResult(Type\ChosenInlineResult $chosenInlineResult)
   {
       $this->chosenInlineResult = $chosenInlineResult;
       return $this;
   }

   /**
    * @return Type\ChosenInlineResult
    */
   public function getChosenInlineResult()
   {
       return $this->chosenInlineResult;
   }

   /**
    * @param Type\CallbackQuery $callbackQuery
    * @return Update
    */
   public function setCallbackQuery(Type\CallbackQuery $callbackQuery)
   {
       $this->callbackQuery = $callbackQuery;
       return $this;
   }

   /**
    * @return Type\CallbackQuery
    */
   public function getCallbackQuery()
   {
       return $this->callbackQuery;
   }

   /**
    * @param Type\ShippingQuery $shippingQuery
    * @return Update
    */
   public function setShippingQuery(Type\ShippingQuery $shippingQuery)
   {
       $this->shippingQuery = $shippingQuery;
       return $this;
   }

   /**
    * @return Type\ShippingQuery
    */
   public function getShippingQuery()
   {
       return $this->shippingQuery;
   }

   /**
    * @param Type\PreCheckoutQuery $preCheckoutQuery
    * @return Update
    */
   public function setPreCheckoutQuery(Type\PreCheckoutQuery $preCheckoutQuery)
   {
       $this->preCheckoutQuery = $preCheckoutQuery;
       return $this;
   }

   /**
    * @return Type\PreCheckoutQuery
    */
   public function getPreCheckoutQuery()
   {
       return $this->preCheckoutQuery;
   }

   /**
    * @param Type\Poll $poll
    * @return Update
    */
   public function setPoll(Type\Poll $poll)
   {
       $this->poll = $poll;
       return $this;
   }

   /**
    * @return Type\Poll
    */
   public function getPoll()
   {
       return $this->poll;
   }

}