<?php
/**
 * currencyLayer plugin for Craft CMS 3.x
 *
 * API integration with https://currencylayer.com/
 *
 * @link      http://spm-commercial.com/
 * @copyright Copyright (c) 2019 cole007
 */

namespace spmcommercial\currencylayer\models;

use spmcommercial\currencylayer\CurrencyLayer;

use Craft;
use craft\base\Model;

/**
 * @author    cole007
 * @package   CurrencyLayer
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $apiKey, $cacheDuration, $currencyPrimary, $apiCache;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apiKey','cacheDuration','currencyPrimary'], 'string'],
            [['apiCache','cacheDuration'], 'number'],
        ];
    }
}
