<?php

namespace Yash\NewPlugin\Plugin;

class Name 
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
        return $result." -1$ Discount.";
    }
}