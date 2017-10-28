<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class MaskPosition extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#maskposition
    *
    * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
    *
    * @var string
    */
   protected $point;

   /**
    * https://core.telegram.org/bots/api#maskposition
    *
    * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
    *
    * @var float
    */
   protected $xShift;

   /**
    * https://core.telegram.org/bots/api#maskposition
    *
    * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
    *
    * @var float
    */
   protected $yShift;

   /**
    * https://core.telegram.org/bots/api#maskposition
    *
    * Mask scaling coefficient. For example, 2.0 means double size.
    *
    * @var float
    */
   protected $scale;


   /**
    * @param string $point
    * @return MaskPosition
    */
   public function setPoint($point)
   {
       $this->point = $point;
       return $this;
   }

   /**
    * @return string
    */
   public function getPoint()
   {
       return $this->point;
   }

   /**
    * @param float $xShift
    * @return MaskPosition
    */
   public function setXShift($xShift)
   {
       $this->xShift = $xShift;
       return $this;
   }

   /**
    * @return float
    */
   public function getXShift()
   {
       return $this->xShift;
   }

   /**
    * @param float $yShift
    * @return MaskPosition
    */
   public function setYShift($yShift)
   {
       $this->yShift = $yShift;
       return $this;
   }

   /**
    * @return float
    */
   public function getYShift()
   {
       return $this->yShift;
   }

   /**
    * @param float $scale
    * @return MaskPosition
    */
   public function setScale($scale)
   {
       $this->scale = $scale;
       return $this;
   }

   /**
    * @return float
    */
   public function getScale()
   {
       return $this->scale;
   }

}