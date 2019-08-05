<?php
/**
 * AT.
 *
 * @category    AT
 * @package     AT_CustomCatalog
 * @author      Ahamed Ruzly <ahamedruzly@gmail.com>
 * @copyright   Copyright (c) 2019 @AT
 */

namespace AT\CustomCatalog\Block\Adminhtml\Product\Edit\Button;

/**
 * Class Back
 * @package AT\CustomCatalog\Block\Adminhtml\Product\Edit\Button
 */
class Back extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Button\Generic
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';", $this->getUrl('customcatalog/product/')),
            'class' => 'back',
            'sort_order' => 10
        ];
    }
}
