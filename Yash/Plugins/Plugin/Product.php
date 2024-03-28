<?php
 
namespace Yash\Plugins\Plugin;

use Magento\Checkout\Model\Cart;
class Product
{
    /**
     * Add extra information to product before adding to cart.
     *
     * @param  Cart $subject
     * @param  \Closure $proceed
     * @param  mixed                        $productInfo
     * @param  mixed                        $requestInfo
     * @return array
     */


    //  *before plugin*

    // public function beforeAddProduct(
    //     Cart $subject,
    //     $productInfo,
    //     $requestInfo = null
    // ) {
    //     $productInfo['price'] -= 15;
    //     $requestInfo['qty'] = 5;
    //     return [$productInfo, $requestInfo];
    // }


    // *around plugin*

    



    // *after plugin*

    // public function aroundAddProduct(
    //     Cart $subject,
    //     \Closure $proceed,
    //     $productInfo,
    //     $requestInfo = null
    // ) {
    //     $productInfo['price'] -= 29;
    //     $requestInfo['qty'] = 15;
    //     $result = $proceed($productInfo, $requestInfo);
    //     return $result;
    // }
}
