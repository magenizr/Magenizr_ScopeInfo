<?php
/**
 * Magenizr ScopeInfo
 *
 * @category    Magenizr
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace Magenizr\ScopeInfo\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const SCOPE_PATH = 'system/magenizr_scopeinfo';

    /**
     * Check if module is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfigFlag('enabled');
    }

    /**
     * Get module flags from core_config_data
     *
     * @param $path
     * @return mixed
     */
    public function getConfigFlag($path)
    {
        return $this->scopeConfig->isSetFlag(self::SCOPE_PATH.'/'.$path, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get module configuration values from core_config_data
     *
     * @param $path
     * @return mixed
     */
    public function getConfig($path)
    {
        return $this->scopeConfig->getValue(self::SCOPE_PATH.'/'.$path, ScopeInterface::SCOPE_STORE);
    }
}
