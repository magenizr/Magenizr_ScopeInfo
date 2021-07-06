<?php
/**
 * Magenizr ScopeInfo
 *
 * @category    Magenizr
 * @package     Magenizr_ScopeInfo
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace Magenizr\ScopeInfo\Block\System\Config;

use Magento\Config\Model\Config\Structure\Element\Field as Subject;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\LayoutFactory;
use Magento\Store\Api\StoreRepositoryInterface;
use Magento\Store\Api\WebsiteRepositoryInterface;
use Magenizr\ScopeInfo\Helper\Data as DataHelper;

class Info extends \Magento\Backend\Block\Template
{
    const SCOPE_TYPE_WEBSITES = 'websites';
    const SCOPE_TYPE_STORES = 'stores';

    /**
     * Info constructor.
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        WebsiteRepositoryInterface $websiteRepository,
        StoreRepositoryInterface $storeRepository,
        RequestInterface $request,
        LayoutFactory $layoutFactory,
        DataHelper $dataHelper,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->websiteRepository = $websiteRepository;
        $this->storeRepository = $storeRepository;
        $this->request = $request;
        $this->dataHelper = $dataHelper;

        parent::__construct($context, $data);
    }

    public function getLines(Subject $subject)
    {
        $lines = [];

        foreach ($this->websiteRepository->getList() as $website) {
            if (!$this->isWebsiteSelected($website)) {
                if ($scopeLine = $this->getScopeInfo($this->getPath($subject), self::SCOPE_TYPE_WEBSITES, $website)) {
                    $lines[] = $scopeLine;
                }
            }
        }
        foreach ($this->storeRepository->getList() as $store) {
            if (!$this->isStoreSelected($store)) {
                if ($scopeLine = $this->getScopeInfo($this->getPath($subject), self::SCOPE_TYPE_STORES, $store)) {
                    $lines[] = $scopeLine;
                }
            }
        }

        return $lines;
    }

    /**
     * @param Subject $subject
     * @return string
     */
    private function getPath(Subject $subject)
    {
        return $path = $subject->getConfigPath() ?: $subject->getPath();
    }

    /**
     * @param WebsiteInterface $website
     * @return bool
     */
    private function isWebsiteSelected($website)
    {
        return $website->getId() == $this->request->getParam('website');
    }

    /**
     * @param StoreInterface $store
     * @return bool
     */
    private function isStoreSelected($store)
    {
        return $store->getId() == $this->request->getParam('store');
    }

    /**
     * @param string $path
     * @param string $scopeType
     * @param WebsiteInterface|StoreInterface $scope
     * @return string
     */
    private function getScopeInfo($path, $scopeType, $scope)
    {
        $section = substr($path, 0, strpos($path, '/'));

        $scopeLine = [];
        $currentValue = $this->scopeConfig->getValue($path);
        $scopeValue = $this->scopeConfig->getValue($path, $scopeType, $scope->getId());
        if ($scopeValue != $currentValue) {

            $scopeLine[$scopeType] = [
                'scope_id' => $scope->getId(),
                'section' => $section,
                'code' => $scope->getCode(),
                'value' => $scopeValue,
            ];
        }

        return $scopeLine;
    }

    public function getConfigFlag($path)
    {
        return $this->dataHelper->getConfigFlag($path);
    }
}
