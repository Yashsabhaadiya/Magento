<?php
namespace Webdev\Helloworld\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Webdev\Helloworld\Model\ResourceModel\Data');
    }
}