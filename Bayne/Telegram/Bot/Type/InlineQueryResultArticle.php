<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultArticle extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Type of the result, must be article
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Unique identifier for this result, 1-64 Bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Title of the result
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Content of the message to be sent
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. URL of the result
    *
    * @var string
    */
   protected $url;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. Pass True, if you don&#039;t want the URL to be shown in the message
    *
    * @var bool
    */
   protected $hideUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. Short description of the result
    *
    * @var string
    */
   protected $description;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. Url of the thumbnail for the result
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. Thumbnail width
    *
    * @var int
    */
   protected $thumbWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultarticle
    *
    * Optional. Thumbnail height
    *
    * @var int
    */
   protected $thumbHeight;


   /**
    * @param string $type
    * @return InlineQueryResultArticle
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
    * @return InlineQueryResultArticle
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
    * @return InlineQueryResultArticle
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
    * @param Type\AbstractInputMessageContent $inputMessageContent
    * @return InlineQueryResultArticle
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
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultArticle
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
    * @param string $url
    * @return InlineQueryResultArticle
    */
   public function setUrl($url)
   {
       $this->url = $url;
       return $this;
   }

   /**
    * @return string
    */
   public function getUrl()
   {
       return $this->url;
   }

   /**
    * @param bool $hideUrl
    * @return InlineQueryResultArticle
    */
   public function setHideUrl($hideUrl)
   {
       $this->hideUrl = $hideUrl;
       return $this;
   }

   /**
    * @return bool
    */
   public function getHideUrl()
   {
       return $this->hideUrl;
   }

   /**
    * @param string $description
    * @return InlineQueryResultArticle
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
    * @param string $thumbUrl
    * @return InlineQueryResultArticle
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
    * @return InlineQueryResultArticle
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
    * @return InlineQueryResultArticle
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