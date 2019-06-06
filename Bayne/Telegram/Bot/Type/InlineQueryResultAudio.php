<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultAudio extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Type of the result, must be audio
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * A valid URL for the audio file
    *
    * @var string
    */
   protected $audioUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Title
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Optional. Caption, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Optional. Performer
    *
    * @var string
    */
   protected $performer;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Optional. Audio duration in seconds
    *
    * @var int
    */
   protected $audioDuration;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultaudio
    *
    * Optional. Content of the message to be sent instead of the audio
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultAudio
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
    * @return InlineQueryResultAudio
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
    * @param string $audioUrl
    * @return InlineQueryResultAudio
    */
   public function setAudioUrl($audioUrl)
   {
       $this->audioUrl = $audioUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getAudioUrl()
   {
       return $this->audioUrl;
   }

   /**
    * @param string $title
    * @return InlineQueryResultAudio
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
    * @return InlineQueryResultAudio
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
    * @param string $parseMode
    * @return InlineQueryResultAudio
    */
   public function setParseMode($parseMode)
   {
       $this->parseMode = $parseMode;
       return $this;
   }

   /**
    * @return string
    */
   public function getParseMode()
   {
       return $this->parseMode;
   }

   /**
    * @param string $performer
    * @return InlineQueryResultAudio
    */
   public function setPerformer($performer)
   {
       $this->performer = $performer;
       return $this;
   }

   /**
    * @return string
    */
   public function getPerformer()
   {
       return $this->performer;
   }

   /**
    * @param int $audioDuration
    * @return InlineQueryResultAudio
    */
   public function setAudioDuration($audioDuration)
   {
       $this->audioDuration = $audioDuration;
       return $this;
   }

   /**
    * @return int
    */
   public function getAudioDuration()
   {
       return $this->audioDuration;
   }

   /**
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultAudio
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

   /**
    * @param Type\AbstractInputMessageContent $inputMessageContent
    * @return InlineQueryResultAudio
    */
   public function setInputMessageContent(Type\AbstractInputMessageContent $inputMessageContent)
   {
       $this->inputMessageContent = $inputMessageContent;
       return $this;
   }

   /**
    * @return Type\AbstractInputMessageContent
    */
   public function getInputMessageContent()
   {
       return $this->inputMessageContent;
   }

}