<?php

namespace Yash\NewPlugin\Plugin;
class Product
{ 
    public function afterGetFinalPrice(
        \Magento\Catalog\Model\Product $subject,
        $result
    )    {
        $modifiedPrice = $result - 1.00; 
        return $modifiedPrice;
   }
}