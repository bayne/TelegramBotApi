<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class InlineQueryResultPhoto extends Object\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Type of the result, must be photo
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Unique identifier for this result, 1-64 bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB
    *
    * @var string
    */
   protected $photoUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * URL of the thumbnail for the photo
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Width of the photo
    *
    * @var int
    */
   protected $photoWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Height of the photo
    *
    * @var int
    */
   protected $photoHeight;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Title for the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Short description of the result
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Caption of the photo to be sent, 0-200 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Object\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultphoto
    *
    * Optional. Content of the message to be sent instead of the photo
    *
    * @var Object\AbstractInputMessageContent
    */
   protected $inputMessageContent;


   /**
    * @param string $type
    * @return InlineQueryResultPhoto
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
    * @return InlineQueryResultPhoto
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
    * @param string $photoUrl
    * @return InlineQueryResultPhoto
    */
   public function setPhotoUrl($photoUrl)
   {
       $this->photoUrl = $photoUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getPhotoUrl()
   {
       return $this->photoUrl;
   }

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultPhoto
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
    * @param int $photoWidth
    * @return InlineQueryResultPhoto
    */
   public function setPhotoWidth($photoWidth)
   {
       $this->photoWidth = $photoWidth;
       return $this;
   }

   /**
    * @return int
    */
   public function getPhotoWidth()
   {
       return $this->photoWidth;
   }

   /**
    * @param int $photoHeight
    * @return InlineQueryResultPhoto
    */
   public function setPhotoHeight($photoHeight)
   {
       $this->photoHeight = $photoHeight;
       return $this;
   }

   /**
    * @return int
    */
   public function getPhotoHeight()
   {
       return $this->photoHeight;
   }

   /**
    * @param string $title
    * @return InlineQueryResultPhoto
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
    * @param string $description
    * @return InlineQueryResultPhoto
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
    * @return InlineQueryResultPhoto
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
    * @return InlineQueryResultPhoto
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
    * @return InlineQueryResultPhoto
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