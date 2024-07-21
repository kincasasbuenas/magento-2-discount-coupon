<?php
/**
 * Copyright (c) 2024 - Kevin casasbuenas (https://kincasasbuenas.dev/)
 * @author      Kevin Casasbuenas <kincasasbuenas@outlook.com>
 * @category    Kinuz
 * @module      Kinuz/DiscountCoupon
 */ 

declare(strict_types=1);

namespace Kinuz\DiscountCoupon\Plugin;

use Magento\Checkout\Block\Checkout\LayoutProcessor;
use Kinuz\DiscountCoupon\Helper\Data;

/**
 * Class Sidebar
 */
class Sidebar {

    /**
     * Constructor
     * 
     * @param Data $data
     */
    public function __construct(
        private Data $data,
    ) { }

    /**
     * @param LayoutProcessor $processor
     * @param array $jsLayout
     *
     * @return array
     */
    public function afterProcess(
        LayoutProcessor $processor,
        array $jsLayout
    ){
        $enable = $this->data->isActive();

        if(!$enable){
            $jsLayout['components']['checkout']['children']['sidebar']['children']['summary']['children']['itemsAfter']['children']['discount']['config']['componentDisabled'] = true;

            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['afterMethods']['children']['discount']['config']['componentDisabled'] = false;
        } else {
            $jsLayout['components']['checkout']['children']['sidebar']['children']['summary']['children']['itemsAfter']['children']['discount']['config']['componentDisabled'] = false;
        }

        return $jsLayout;
    }
}