<?php
/**
 * this class  coded  by Vignesh in  27  Mar  2022
 */

class UnAvailableOrderDetails extends OrderDetails
{
   public function __construct ($book, $quantity, $openion = NULL, $reviewDegree = NULL)
   {
       parent::__construct($book, $quantity, $openion, $reviewDegree);
   }


}