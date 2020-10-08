<?php
/**
 * Currency Layer plugin for Craft CMS 3.x
 *
 * testplugin
 *
 * @link      spm-commercial.com
 * @copyright Copyright (c) 2019 @cole007
 */

namespace spmcommercial\currencylayer\assetbundles\currencyfield;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    @cole007
 * @package   CurrencyLayer
 * @since     1.0.0
 */
class CurrencyFieldAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@spmcommercial/currencylayer/assetbundles/currencyfield/dist";

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
