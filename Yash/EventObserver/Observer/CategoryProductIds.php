<?php
 
namespace Yash\EventObserver\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
 
class CategoryProductIds implements ObserverInterface
{
    /**
     * Below is the method that willl fire whenever the event runs!
     *
     * @param Observer $observer
     */
 
     public function execute(Observer $observer)
     {
        $product = $observer->getProduct();
        $originalName = $product->getname();
        $modifiedName = $originalName . '-Modified Events';
        $product->setName($modifiedName);
     }
}