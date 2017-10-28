<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class Update extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#update
    *
    * The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order.
    *
    * @var int
    */
   protected $updateId;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming message of any kind — text, photo, sticker, etc.
    *
    * @var Object\Message
    */
   protected $message;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New version of a message that is known to the bot and was edited
    *
    * @var Object\Message
    */
   protected $editedMessage;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
    *
    * @var Object\Message
    */
   protected $channelPost;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New version of a channel post that is known to the bot and was edited
    *
    * @var Object\Message
    */
   protected $editedChannelPost;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming inline query
    *
    * @var Object\InlineQuery
    */
   protected $inlineQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
    *
    * @var Object\ChosenInlineResult
    */
   protected $chosenInlineResult;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming callback query
    *
    * @var Object\CallbackQuery
    */
   protected $callbackQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming shipping query. Only for invoices with flexible price
    *
    * @var Object\ShippingQuery
    */
   protected $shippingQuery;

   /**
    * https://core.telegram.org/bots/api#update
    *
    * Optional. New incoming pre-checkout query. Contains full information about checkout
    *
    * @var Object\PreCheckoutQuery
    */
   protected $preCheckoutQuery;


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
    * @param Object\Message $message
    * @return Update
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
    * @param Object\Message $editedMessage
    * @return Update
    */
   public function setEditedMessage(Object\Message $editedMessage)
   {
       $this->editedMessage = $editedMessage;
       return $this;
   }

   /**
    * @return Object\Message
    */
   public function getEditedMessage()
   {
       return $this->editedMessage;
   }

   /**
    * @param Object\Message $channelPost
    * @return Update
    */
   public function setChannelPost(Object\Message $channelPost)
   {
       $this->channelPost = $channelPost;
       return $this;
   }

   /**
    * @return Object\Message
    */
   public function getChannelPost()
   {
       return $this->channelPost;
   }

   /**
    * @param Object\Message $editedChannelPost
    * @return Update
    */
   public function setEditedChannelPost(Object\Message $editedChannelPost)
   {
       $this->editedChannelPost = $editedChannelPost;
       return $this;
   }

   /**
    * @return Object\Message
    */
   public function getEditedChannelPost()
   {
       return $this->editedChannelPost;
   }

   /**
    * @param Object\InlineQuery $inlineQuery
    * @return Update
    */
   public function setInlineQuery(Object\InlineQuery $inlineQuery)
   {
       $this->inlineQuery = $inlineQuery;
       return $this;
   }

   /**
    * @return Object\InlineQuery
    */
   public function getInlineQuery()
   {
       return $this->inlineQuery;
   }

   /**
    * @param Object\ChosenInlineResult $chosenInlineResult
    * @return Update
    */
   public function setChosenInlineResult(Object\ChosenInlineResult $chosenInlineResult)
   {
       $this->chosenInlineResult = $chosenInlineResult;
       return $this;
   }

   /**
    * @return Object\ChosenInlineResult
    */
   public function getChosenInlineResult()
   {
       return $this->chosenInlineResult;
   }

   /**
    * @param Object\CallbackQuery $callbackQuery
    * @return Update
    */
   public function setCallbackQuery(Object\CallbackQuery $callbackQuery)
   {
       $this->callbackQuery = $callbackQuery;
       return $this;
   }

   /**
    * @return Object\CallbackQuery
    */
   public function getCallbackQuery()
   {
       return $this->callbackQuery;
   }

   /**
    * @param Object\ShippingQuery $shippingQuery
    * @return Update
    */
   public function setShippingQuery(Object\ShippingQuery $shippingQuery)
   {
       $this->shippingQuery = $shippingQuery;
       return $this;
   }

   /**
    * @return Object\ShippingQuery
    */
   public function getShippingQuery()
   {
       return $this->shippingQuery;
   }

   /**
    * @param Object\PreCheckoutQuery $preCheckoutQuery
    * @return Update
    */
   public function setPreCheckoutQuery(Object\PreCheckoutQuery $preCheckoutQuery)
   {
       $this->preCheckoutQuery = $preCheckoutQuery;
       return $this;
   }

   /**
    * @return Object\PreCheckoutQuery
    */
   public function getPreCheckoutQuery()
   {
       return $this->preCheckoutQuery;
   }

}