<?php
/**
 * Magenizr ScopeInfo
 *
 * @category    Magenizr
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace Magenizr\ScopeInfo\Plugin\Framework\Data\Form\Element;

use Magento\Config\Model\Config\Structure\Element\Field as Subject;
use Magento\Framework\View\LayoutFactory;
use Magenizr\ScopeInfo\Helper\Data as DataHelper;

class Field
{
    /**
     * @var \Magento\Framework\View\LayoutFactory
     */
    protected $layoutFactory;

    /**
     * @var \Magenizr\ScopeInfo\Helper\Data
     */
    protected $dataHelper;

    /**
     * Field constructor.
     *
     * @param \Magenizr\ScopeInfo\Helper\Data $dataHelper
     * @param \Magento\Framework\View\LayoutFactory $layoutFactory
     */
    public function __construct(
        DataHelper $dataHelper,
        LayoutFactory $layoutFactory
    ) {
        $this->dataHelper = $dataHelper;
        $this->layoutFactory = $layoutFactory;
    }

    /**
     * @param Subject $subject
     * @param string $result
     * @return string
     */
    public function afterGetComment(Subject $subject, $result)
    {
        if (!$this->dataHelper->isEnabled()) {
            return $result;
        }

        $block = $this->layoutFactory->create()
            ->createBlock(\Magenizr\ScopeInfo\Block\System\Config\Info::class)
            ->setTemplate('Magenizr_ScopeInfo::info.phtml')
            ->setBlockId('magenizr_scopeinfo_system_config_info')
            ->setData('subject', $subject)
            ->setData('result', $result)
            ->toHtml();

        return $block;
    }
}
