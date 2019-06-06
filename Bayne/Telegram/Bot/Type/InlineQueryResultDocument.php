<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultDocument extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Type of the result, must be document
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Caption of the document to be sent, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * A valid URL for the file
    *
    * @var string
    */
   protected $documentUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Mime type of the content of the file, either “application/pdf” or “application/zip”
    *
    * @var string
    */
   protected $mimeType;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Short description of the result
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Content of the message to be sent instead of the file
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. URL of the thumbnail (jpeg only) for the file
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Thumbnail width
    *
    * @var int
    */
   protected $thumbWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultdocument
    *
    * Optional. Thumbnail height
    *
    * @var int
    */
   protected $thumbHeight;


   /**
    * @param string $type
    * @return InlineQueryResultDocument
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
    * @return InlineQueryResultDocument
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
    * @return InlineQueryResultDocument
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
    * @return InlineQueryResultDocument
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
    * @return InlineQueryResultDocument
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
    * @param string $documentUrl
    * @return InlineQueryResultDocument
    */
   public function setDocumentUrl($documentUrl)
   {
       $this->documentUrl = $documentUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getDocumentUrl()
   {
       return $this->documentUrl;
   }

   /**
    * @param string $mimeType
    * @return InlineQueryResultDocument
    */
   public function setMimeType($mimeType)
   {
       $this->mimeType = $mimeType;
       return $this;
   }

   /**
    * @return string
    */
   public function getMimeType()
   {
       return $this->mimeType;
   }

   /**
    * @param string $description
    * @return InlineQueryResultDocument
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
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultDocument
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
    * @return InlineQueryResultDocument
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

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultDocument
    */
   public function setThumbUrl($thumbUrl)
   {
       $this->thumbUrl = $thumbUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getThumbUrl()
   {
       return $this->thumbUrl;
   }

   /**
    * @param int $thumbWidth
    * @return InlineQueryResultDocument
    */
   public function setThumbWidth($thumbWidth)
   {
       $this->thumbWidth = $thumbWidth;
       return $this;
   }

   /**
    * @return int
    */
   public function getThumbWidth()
   {
       return $this->thumbWidth;
   }

   /**
    * @param int $thumbHeight
    * @return InlineQueryResultDocument
    */
   public function setThumbHeight($thumbHeight)
   {
       $this->thumbHeight = $thumbHeight;
       return $this;
   }

   /**
    * @return int
    */
   public function getThumbHeight()
   {
       return $this->thumbHeight;
   }

}