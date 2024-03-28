<?php 
namespace Yash\CartEvent\Observer\Product;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;

class Change implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $item = $observer->getEvent()->getData('quote_item');
        $item = ($item->getParentItem() ? $item->getParentItem() : $item);
        $customPrice = 101;
        $item->setCustomPrice($customPrice);
        $item->setOrigionalCustomPrice($customPrice);
        $item->getProduct()->setIsSuperMode(true); 
    }
}