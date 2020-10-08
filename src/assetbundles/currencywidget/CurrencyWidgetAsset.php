<?php
/**
 * currencyLayer plugin for Craft CMS 3.x
 *
 * API integration with https://currencylayer.com/
 *
 * @link      http://spm-commercial.com/
 * @copyright Copyright (c) 2019 cole007
 */

namespace spmcommercial\currencylayer\assetbundles\currencywidget;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    cole007
 * @package   CurrencyLayer
 * @since     1.0.0
 */
class CurrencyWidgetAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@spmcommercial/currencylayer/assetbundles/currencywidget/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Currency.js',
        ];

        $this->css = [
            'css/Currency.css',
        ];

        parent::init();
    }
}
