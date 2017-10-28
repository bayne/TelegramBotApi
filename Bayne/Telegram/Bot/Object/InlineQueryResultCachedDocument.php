<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultCachedDocument extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Type of the result, must be document
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * A valid file identifier for the file
    *
    * @var string
    */
   protected $documentFileId;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Optional. Short description of the result
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Optional. Caption of the document to be sent, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
    *
    * Optional. Content of the message to be sent instead of the file
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultCachedDocument
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
    * @return InlineQueryResultCachedDocument
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
    * @param string $title
    * @return InlineQueryResultCachedDocument
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
    * @param string $documentFileId
    * @return InlineQueryResultCachedDocument
    */
   public function setDocumentFileId($documentFileId)
   {
       $this->documentFileId = $documentFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getDocumentFileId()
   {
       return $this->documentFileId;
   }

   /**
    * @param string $description
    * @return InlineQueryResultCachedDocument
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
    * @param string $caption
    * @return InlineQueryResultCachedDocument
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
    * @return InlineQueryResultCachedDocument
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
    * @return InlineQueryResultCachedDocument
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