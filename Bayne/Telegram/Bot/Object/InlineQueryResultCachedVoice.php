<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultCachedVoice extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * Type of the result, must be voice
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * A valid file identifier for the voice message
    *
    * @var string
    */
   protected $voiceFileId;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * Voice message title
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * Optional. Caption, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
    *
    * Optional. Content of the message to be sent instead of the voice message
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultCachedVoice
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
    * @return InlineQueryResultCachedVoice
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
    * @param string $voiceFileId
    * @return InlineQueryResultCachedVoice
    */
   public function setVoiceFileId($voiceFileId)
   {
       $this->voiceFileId = $voiceFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getVoiceFileId()
   {
       return $this->voiceFileId;
   }

   /**
    * @param string $title
    * @return InlineQueryResultCachedVoice
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
    * @return InlineQueryResultCachedVoice
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
    * @return InlineQueryResultCachedVoice
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
    * @return InlineQueryResultCachedVoice
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