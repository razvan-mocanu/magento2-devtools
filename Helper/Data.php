<?php

namespace Razvan\DevTools\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * Dev allow ips config path
     */
    const XML_PATH_DEV_DEVTOOLS_ENABLED = 'dev/Razvan_DevTools/enabled';


    public function isEnabled($storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DEV_DEVTOOLS_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
