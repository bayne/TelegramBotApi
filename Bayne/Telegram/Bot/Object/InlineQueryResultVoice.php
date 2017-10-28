<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultVoice extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Type of the result, must be voice
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * A valid URL for the voice recording
    *
    * @var string
    */
   protected $voiceUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Recording title
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Optional. Caption, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Optional. Recording duration in seconds
    *
    * @var int
    */
   protected $voiceDuration;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultvoice
    *
    * Optional. Content of the message to be sent instead of the voice recording
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultVoice
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
    * @return InlineQueryResultVoice
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
    * @param string $voiceUrl
    * @return InlineQueryResultVoice
    */
   public function setVoiceUrl($voiceUrl)
   {
       $this->voiceUrl = $voiceUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getVoiceUrl()
   {
       return $this->voiceUrl;
   }

   /**
    * @param string $title
    * @return InlineQueryResultVoice
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
    * @return InlineQueryResultVoice
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
    * @param int $voiceDuration
    * @return InlineQueryResultVoice
    */
   public function setVoiceDuration($voiceDuration)
   {
       $this->voiceDuration = $voiceDuration;
       return $this;
   }

   /**
    * @return int
    */
   public function getVoiceDuration()
   {
       return $this->voiceDuration;
   }

   /**
    * @param Object\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultVoice
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
    * @return InlineQueryResultVoice
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