<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultCachedAudio extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
    *
    * Type of the result, must be audio
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
    *
    * A valid file identifier for the audio file
    *
    * @var string
    */
   protected $audioFileId;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
    *
    * Optional. Caption, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
    *
    * Optional. Content of the message to be sent instead of the audio
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultCachedAudio
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
    * @return InlineQueryResultCachedAudio
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
    * @param string $audioFileId
    * @return InlineQueryResultCachedAudio
    */
   public function setAudioFileId($audioFileId)
   {
       $this->audioFileId = $audioFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getAudioFileId()
   {
       return $this->audioFileId;
   }

   /**
    * @param string $caption
    * @return InlineQueryResultCachedAudio
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
    * @return InlineQueryResultCachedAudio
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
    * @return InlineQueryResultCachedAudio
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