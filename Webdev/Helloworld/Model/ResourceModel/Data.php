<?php
namespace Webdev\Helloworld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('form_table', 'id');
    }
}