<?php
namespace Webdev\Helloworld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index extends Template
{
  protected $scopeConfig;
  
  public function __construct(
    Context $context,
    ScopeConfigInterface $scopeConfig,
    array $data = []
    )
  {
      $this->scopeConfig = $scopeConfig;
      parent::__construct($context, $data);
  }

  public function getFormAction()
  {
      return $this->getUrl('helloworld/index/submit', ['_secure' => true]);
  }
}