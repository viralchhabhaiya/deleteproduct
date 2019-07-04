<?php

namespace Deleteproduct\MultipleCartDelete\Plugin;

class AbstractCart
{
    /**
     * @param \Magento\Checkout\Block\Cart\AbstractCart $subject
     * @param $result
     * @return mixed
     */
    public function afterGetItemRenderer(\Magento\Checkout\Block\Cart\AbstractCart $subject, $result)
    {
        $result->setTemplate('Deleteproduct_MultipleCartDelete::cart/item/default.phtml');
        return $result;
    }
}
