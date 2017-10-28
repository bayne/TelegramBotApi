<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultCachedGif extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * Type of the result, must be gif
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * A valid file identifier for the GIF file
    *
    * @var string
    */
   protected $gifFileId;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * Optional. Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * Optional. Caption of the GIF file to be sent, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedgif
    *
    * Optional. Content of the message to be sent instead of the GIF animation
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultCachedGif
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
    * @return InlineQueryResultCachedGif
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
    * @param string $gifFileId
    * @return InlineQueryResultCachedGif
    */
   public function setGifFileId($gifFileId)
   {
       $this->gifFileId = $gifFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getGifFileId()
   {
       return $this->gifFileId;
   }

   /**
    * @param string $title
    * @return InlineQueryResultCachedGif
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
    * @param string $caption
    * @return InlineQueryResultCachedGif
    */
   public function setCaption($caption)
   {
       $this->caption = $caption;
       return $this;
   }

   /**
    * @return string
    */
   public function getCaption()
   {
       return $this->caption;
   }

   /**
    * @param Object\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultCachedGif
    */
   public function setReplyMarkup(Object\InlineKeyboardMarkup $replyMarkup)
   {
       $this->replyMarkup = $replyMarkup;
       return $this;
   }

   /**
    * @return Object\InlineKeyboardMarkup
    */
   public function getReplyMarkup()
   {
       return $this->replyMarkup;
   }

   /**
    * @param Object\AbstractInputMessageContent $inputMessageContent
    * @return InlineQueryResultCachedGif
    */
   public function setInputMessageContent(Object\AbstractInputMessageContent $inputMessageContent)
   {
       $this->inputMessageContent = $inputMessageContent;
       return $this;
   }

   /**
    * @return Object\AbstractInputMessageContent
    */
   public function getInputMessageContent()
   {
       return $this->inputMessageContent;
   }

}