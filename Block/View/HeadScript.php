<?php

namespace Analytics\FullStory\Block\View;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class HeadScript
 * @package Analytics\FullStory\Block\View
 */
class HeadScript extends DataObject implements ArgumentInterface
{

    /**
     * @var \Analytics\FullStory\Helper\Data
     */
    protected $moduleHelper;

    public function __construct(
        \Analytics\FullStory\Helper\Data $moduleHelper,
        array $data = []
    ) {
        parent::__construct($data);

        $this->moduleHelper = $moduleHelper;
    }

    /**
     * @return \Analytics\FullStory\Helper\Data
     */
    public function getHelper() {

        return $this->moduleHelper;
    }
}