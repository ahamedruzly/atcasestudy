<?php
/**
 * AT.
 *
 * @category    AT
 * @package     AT_CustomCatalog
 * @author      Ahamed Ruzly <ahamedruzly@gmail.com>
 * @copyright   Copyright (c) 2019 @AT
 */

namespace AT\CustomCatalog\Api;

/**
 * Interface CustomCatalogInterface
 * @api
 * @package AT\CustomCatalog\Api
 */
interface CustomCatalogInterface
{
    /**
     * Get products by VPN
     *
     * @api
     * @param string $vpn
     * @return \Magento\Catalog\Api\Data\ProductSearchResultsInterface
     */
    public function getByVPN($vpn);

    /**
     * Update product
     *
     * @api
     * @param mixed $product
     * @return void
     */
    public function update($product);
}
