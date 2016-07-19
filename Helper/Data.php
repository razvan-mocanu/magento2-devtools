<?php

namespace Razvan\DevTools\Helper;

/**
 * Class Data
 * @package Razvan\DevTools\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    
    const XML_PATH_DEV_DEVTOOLS_ENABLED = 'dev/Razvan_DevTools/enabled';

    /**
     * @param null $storeId
     * @return bool
     */
    public function isEnabled($storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DEV_DEVTOOLS_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
