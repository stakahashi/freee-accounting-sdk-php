<?php
/**
 * CompaniesShowResponseCompany
 *
 * PHP version 5
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"\">はじめに</h2>  <ol> <li><a href=\"https://secure.freee.co.jp/\">freee</a>にサインアップします。</li>  <li><a href=\"https://accounts.secure.freee.co.jp/public_api/applications\">アプリケーション一覧</a>から「新しいアプリケーションを登録」します。</li>  <li>アプリケーションの登録が完了すると、Client IDとSecretが取得できます。</li>  <li>ローカルの開発環境でテストする際は、認証用URLを直接リクエストしてAuthorization Codeを取得できます。</li> </ol>  <p>アプリケーションの登録方法や認証方法、またはAPIの活用方法でご不明な点がある場合は<a href=\"https://support.freee.co.jp/hc/ja/sections/115000030743\">ヘルプセンター</a>もご確認ください</p> <hr /> <h2 id=\"_2\">仕様</h2>  <h3 id=\"api\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"_3\">認証方式</h3>  <p><a href=\"http://tools.ietf.org/html/rfc6749\">OAuth2</a>に対応</p>  <ul> <li>Authorization Code Flow (Webアプリ向け)</li>  <li>Implicit Flow (Mobileアプリ向け)</li> </ul>  <h3 id=\"_4\">認証エンドポイント</h3>  <p>https://accounts.secure.freee.co.jp/</p>  <ul> <li>authorize : https://accounts.secure.freee.co.jp/public_api/authorize</li>  <li>token : https://accounts.secure.freee.co.jp/public_api/token</li> </ul>  <h3 id=\"_5\">アクセストークンのリフレッシュ</h3>  <p>認証時に得たrefresh_token を使ってtoken の期限をリフレッシュして新規に発行することが出来ます。</p>  <p>grant_type=refresh_token で https://accounts.secure.freee.co.jp/public_api/token にアクセスすればリフレッシュされます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/token</p>  <p>params: grant_type=refresh_token&amp;client_id=UID&amp;client_secret=SECRET&amp;refresh_token=REFRESH_TOKEN</p>  <p>詳細は<a href=\"https://github.com/applicake/doorkeeper/wiki/Enable-Refresh-Token-Credentials#flow\">refresh_token</a>を参照下さい。</p>  <h3 id=\"_6\">アクセストークンの破棄</h3>  <p>認証時に得たaccess_tokenまたはrefresh_tokenを使って、tokenを破棄することができます。 token=access_tokenまたはtoken=refresh_tokenでhttps://accounts.secure.freee.co.jp/public_api/revokeにアクセスすると破棄されます。token_type_hintでaccess_tokenまたはrefresh_tokenを陽に指定できます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/revoke</p>  <p>params: token=ACCESS_TOKEN</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN</p>  <p>または</p>  <p>params: token=ACCESS_TOKEN&amp;token_type_hint=access_token</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN&amp;token_type_hint=refresh_token</p>  <p>詳細は <a href=\"https://tools.ietf.org/html/rfc7009\">OAuth 2.0 Token revocation</a> をご参照ください。</p>  <h3 id=\"_7\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポート</p>  <h3 id=\"_8\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"_9\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li>  <li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre> <hr /> <h2 id=\"_10\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * CompaniesShowResponseCompany Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompaniesShowResponseCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'companiesShowResponse_company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'workflow_setting' => 'string',
        'role' => 'string',
        'prefecture_code' => 'int',
        'txn_number_format' => 'string',
        'use_partner_code' => 'bool',
        'industry_code' => 'string',
        'invoice_style' => 'int',
        'tax_at_source_calc_type' => 'int',
        'display_name' => 'string',
        'street_name1' => 'string',
        'default_wallet_account_id' => 'int',
        'phone1' => 'string',
        'street_name2' => 'string',
        'zipcode' => 'string',
        'invoice_layout' => 'int',
        'corporate_number' => 'string',
        'private_settlement' => 'bool',
        'amount_fraction' => 'int',
        'id' => 'int',
        'minus_format' => 'int',
        'industry_class' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'workflow_setting' => null,
        'role' => null,
        'prefecture_code' => null,
        'txn_number_format' => null,
        'use_partner_code' => null,
        'industry_code' => null,
        'invoice_style' => null,
        'tax_at_source_calc_type' => null,
        'display_name' => null,
        'street_name1' => null,
        'default_wallet_account_id' => null,
        'phone1' => null,
        'street_name2' => null,
        'zipcode' => null,
        'invoice_layout' => null,
        'corporate_number' => null,
        'private_settlement' => null,
        'amount_fraction' => null,
        'id' => null,
        'minus_format' => null,
        'industry_class' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'workflow_setting' => 'workflow_setting',
        'role' => 'role',
        'prefecture_code' => 'prefecture_code',
        'txn_number_format' => 'txn_number_format',
        'use_partner_code' => 'use_partner_code',
        'industry_code' => 'industry_code',
        'invoice_style' => 'invoice_style',
        'tax_at_source_calc_type' => 'tax_at_source_calc_type',
        'display_name' => 'display_name',
        'street_name1' => 'street_name1',
        'default_wallet_account_id' => 'default_wallet_account_id',
        'phone1' => 'phone1',
        'street_name2' => 'street_name2',
        'zipcode' => 'zipcode',
        'invoice_layout' => 'invoice_layout',
        'corporate_number' => 'corporate_number',
        'private_settlement' => 'private_settlement',
        'amount_fraction' => 'amount_fraction',
        'id' => 'id',
        'minus_format' => 'minus_format',
        'industry_class' => 'industry_class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'workflow_setting' => 'setWorkflowSetting',
        'role' => 'setRole',
        'prefecture_code' => 'setPrefectureCode',
        'txn_number_format' => 'setTxnNumberFormat',
        'use_partner_code' => 'setUsePartnerCode',
        'industry_code' => 'setIndustryCode',
        'invoice_style' => 'setInvoiceStyle',
        'tax_at_source_calc_type' => 'setTaxAtSourceCalcType',
        'display_name' => 'setDisplayName',
        'street_name1' => 'setStreetName1',
        'default_wallet_account_id' => 'setDefaultWalletAccountId',
        'phone1' => 'setPhone1',
        'street_name2' => 'setStreetName2',
        'zipcode' => 'setZipcode',
        'invoice_layout' => 'setInvoiceLayout',
        'corporate_number' => 'setCorporateNumber',
        'private_settlement' => 'setPrivateSettlement',
        'amount_fraction' => 'setAmountFraction',
        'id' => 'setId',
        'minus_format' => 'setMinusFormat',
        'industry_class' => 'setIndustryClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'workflow_setting' => 'getWorkflowSetting',
        'role' => 'getRole',
        'prefecture_code' => 'getPrefectureCode',
        'txn_number_format' => 'getTxnNumberFormat',
        'use_partner_code' => 'getUsePartnerCode',
        'industry_code' => 'getIndustryCode',
        'invoice_style' => 'getInvoiceStyle',
        'tax_at_source_calc_type' => 'getTaxAtSourceCalcType',
        'display_name' => 'getDisplayName',
        'street_name1' => 'getStreetName1',
        'default_wallet_account_id' => 'getDefaultWalletAccountId',
        'phone1' => 'getPhone1',
        'street_name2' => 'getStreetName2',
        'zipcode' => 'getZipcode',
        'invoice_layout' => 'getInvoiceLayout',
        'corporate_number' => 'getCorporateNumber',
        'private_settlement' => 'getPrivateSettlement',
        'amount_fraction' => 'getAmountFraction',
        'id' => 'getId',
        'minus_format' => 'getMinusFormat',
        'industry_class' => 'getIndustryClass'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const WORKFLOW_SETTING_ENABLE = 'enable';
    const WORKFLOW_SETTING_DISABLE = 'disable';
    const ROLE_ADMIN = 'admin';
    const ROLE_SIMPLE_ACCOUNTING = 'simple_accounting';
    const ROLE_SELF_ONLY = 'self_only';
    const ROLE_READ_ONLY = 'read_only';
    const TXN_NUMBER_FORMAT_NOT_USED = 'not_used';
    const TXN_NUMBER_FORMAT_DIGITS = 'digits';
    const TXN_NUMBER_FORMAT_ALNUM = 'alnum';
    const INDUSTRY_CODE_EMPTY = '';
    const INDUSTRY_CODE_TRANSPORT_DELIVERY = 'transport_delivery';
    const INDUSTRY_CODE_DELIVERY = 'delivery';
    const INDUSTRY_CODE_OTHER_TRANSPORTATION_LOGISTICS = 'other_transportation_logistics';
    const INDUSTRY_CLASS_EMPTY = '';
    const INDUSTRY_CLASS_AGRICULTURE_FORESTRY_FISHERIES_ORE = 'agriculture_forestry_fisheries_ore';
    const INDUSTRY_CLASS_CONSTRUCTION = 'construction';
    const INDUSTRY_CLASS_MANUFACTURING_PROCESSING = 'manufacturing_processing';
    const INDUSTRY_CLASS_IT = 'it';
    const INDUSTRY_CLASS_TRANSPORTATION_LOGISTICS = 'transportation_logistics';
    const INDUSTRY_CLASS_RETAIL_WHOLESALE = 'retail_wholesale';
    const INDUSTRY_CLASS_FINANCE_INSURANCE = 'finance_insurance';
    const INDUSTRY_CLASS_REAL_ESTATE_RENTAL = 'real_estate_rental';
    const INDUSTRY_CLASS_PROFESSION = 'profession';
    const INDUSTRY_CLASS_DESIGN_PRODUCTION = 'design_production';
    const INDUSTRY_CLASS_FOOD = 'food';
    const INDUSTRY_CLASS_LIFESTYLE = 'lifestyle';
    const INDUSTRY_CLASS_EDUCATION = 'education';
    const INDUSTRY_CLASS_MEDICAL_WELFARE = 'medical_welfare';
    const INDUSTRY_CLASS_OTHER_SERVICES = 'other_services';
    const INDUSTRY_CLASS_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkflowSettingAllowableValues()
    {
        return [
            self::WORKFLOW_SETTING_ENABLE,
            self::WORKFLOW_SETTING_DISABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_ADMIN,
            self::ROLE_SIMPLE_ACCOUNTING,
            self::ROLE_SELF_ONLY,
            self::ROLE_READ_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTxnNumberFormatAllowableValues()
    {
        return [
            self::TXN_NUMBER_FORMAT_NOT_USED,
            self::TXN_NUMBER_FORMAT_DIGITS,
            self::TXN_NUMBER_FORMAT_ALNUM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIndustryCodeAllowableValues()
    {
        return [
            self::INDUSTRY_CODE_EMPTY,
            self::INDUSTRY_CODE_TRANSPORT_DELIVERY,
            self::INDUSTRY_CODE_DELIVERY,
            self::INDUSTRY_CODE_OTHER_TRANSPORTATION_LOGISTICS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIndustryClassAllowableValues()
    {
        return [
            self::INDUSTRY_CLASS_EMPTY,
            self::INDUSTRY_CLASS_AGRICULTURE_FORESTRY_FISHERIES_ORE,
            self::INDUSTRY_CLASS_CONSTRUCTION,
            self::INDUSTRY_CLASS_MANUFACTURING_PROCESSING,
            self::INDUSTRY_CLASS_IT,
            self::INDUSTRY_CLASS_TRANSPORTATION_LOGISTICS,
            self::INDUSTRY_CLASS_RETAIL_WHOLESALE,
            self::INDUSTRY_CLASS_FINANCE_INSURANCE,
            self::INDUSTRY_CLASS_REAL_ESTATE_RENTAL,
            self::INDUSTRY_CLASS_PROFESSION,
            self::INDUSTRY_CLASS_DESIGN_PRODUCTION,
            self::INDUSTRY_CLASS_FOOD,
            self::INDUSTRY_CLASS_LIFESTYLE,
            self::INDUSTRY_CLASS_EDUCATION,
            self::INDUSTRY_CLASS_MEDICAL_WELFARE,
            self::INDUSTRY_CLASS_OTHER_SERVICES,
            self::INDUSTRY_CLASS_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['workflow_setting'] = isset($data['workflow_setting']) ? $data['workflow_setting'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['prefecture_code'] = isset($data['prefecture_code']) ? $data['prefecture_code'] : null;
        $this->container['txn_number_format'] = isset($data['txn_number_format']) ? $data['txn_number_format'] : null;
        $this->container['use_partner_code'] = isset($data['use_partner_code']) ? $data['use_partner_code'] : null;
        $this->container['industry_code'] = isset($data['industry_code']) ? $data['industry_code'] : null;
        $this->container['invoice_style'] = isset($data['invoice_style']) ? $data['invoice_style'] : null;
        $this->container['tax_at_source_calc_type'] = isset($data['tax_at_source_calc_type']) ? $data['tax_at_source_calc_type'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['street_name1'] = isset($data['street_name1']) ? $data['street_name1'] : null;
        $this->container['default_wallet_account_id'] = isset($data['default_wallet_account_id']) ? $data['default_wallet_account_id'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['street_name2'] = isset($data['street_name2']) ? $data['street_name2'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['invoice_layout'] = isset($data['invoice_layout']) ? $data['invoice_layout'] : null;
        $this->container['corporate_number'] = isset($data['corporate_number']) ? $data['corporate_number'] : null;
        $this->container['private_settlement'] = isset($data['private_settlement']) ? $data['private_settlement'] : null;
        $this->container['amount_fraction'] = isset($data['amount_fraction']) ? $data['amount_fraction'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['minus_format'] = isset($data['minus_format']) ? $data['minus_format'] : null;
        $this->container['industry_class'] = isset($data['industry_class']) ? $data['industry_class'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['workflow_setting'] === null) {
            $invalidProperties[] = "'workflow_setting' can't be null";
        }
        $allowedValues = $this->getWorkflowSettingAllowableValues();
        if (!is_null($this->container['workflow_setting']) && !in_array($this->container['workflow_setting'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'workflow_setting', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['prefecture_code'] === null) {
            $invalidProperties[] = "'prefecture_code' can't be null";
        }
        if ($this->container['txn_number_format'] === null) {
            $invalidProperties[] = "'txn_number_format' can't be null";
        }
        $allowedValues = $this->getTxnNumberFormatAllowableValues();
        if (!is_null($this->container['txn_number_format']) && !in_array($this->container['txn_number_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'txn_number_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['use_partner_code'] === null) {
            $invalidProperties[] = "'use_partner_code' can't be null";
        }
        if ($this->container['industry_code'] === null) {
            $invalidProperties[] = "'industry_code' can't be null";
        }
        $allowedValues = $this->getIndustryCodeAllowableValues();
        if (!is_null($this->container['industry_code']) && !in_array($this->container['industry_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['invoice_style'] === null) {
            $invalidProperties[] = "'invoice_style' can't be null";
        }
        if (($this->container['invoice_style'] > 1)) {
            $invalidProperties[] = "invalid value for 'invoice_style', must be smaller than or equal to 1.";
        }

        if (($this->container['invoice_style'] < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_style', must be bigger than or equal to 0.";
        }

        if ($this->container['tax_at_source_calc_type'] === null) {
            $invalidProperties[] = "'tax_at_source_calc_type' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['street_name1'] === null) {
            $invalidProperties[] = "'street_name1' can't be null";
        }
        if ($this->container['phone1'] === null) {
            $invalidProperties[] = "'phone1' can't be null";
        }
        if ($this->container['street_name2'] === null) {
            $invalidProperties[] = "'street_name2' can't be null";
        }
        if ($this->container['zipcode'] === null) {
            $invalidProperties[] = "'zipcode' can't be null";
        }
        if ($this->container['invoice_layout'] === null) {
            $invalidProperties[] = "'invoice_layout' can't be null";
        }
        if (($this->container['invoice_layout'] > 5)) {
            $invalidProperties[] = "invalid value for 'invoice_layout', must be smaller than or equal to 5.";
        }

        if (($this->container['invoice_layout'] < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_layout', must be bigger than or equal to 0.";
        }

        if ($this->container['corporate_number'] === null) {
            $invalidProperties[] = "'corporate_number' can't be null";
        }
        if ($this->container['private_settlement'] === null) {
            $invalidProperties[] = "'private_settlement' can't be null";
        }
        if ($this->container['amount_fraction'] === null) {
            $invalidProperties[] = "'amount_fraction' can't be null";
        }
        if (($this->container['amount_fraction'] > 2)) {
            $invalidProperties[] = "invalid value for 'amount_fraction', must be smaller than or equal to 2.";
        }

        if (($this->container['amount_fraction'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount_fraction', must be bigger than or equal to 0.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['minus_format'] === null) {
            $invalidProperties[] = "'minus_format' can't be null";
        }
        if (($this->container['minus_format'] > 1)) {
            $invalidProperties[] = "invalid value for 'minus_format', must be smaller than or equal to 1.";
        }

        if (($this->container['minus_format'] < 0)) {
            $invalidProperties[] = "invalid value for 'minus_format', must be bigger than or equal to 0.";
        }

        if ($this->container['industry_class'] === null) {
            $invalidProperties[] = "'industry_class' can't be null";
        }
        $allowedValues = $this->getIndustryClassAllowableValues();
        if (!is_null($this->container['industry_class']) && !in_array($this->container['industry_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets workflow_setting
     *
     * @return string
     */
    public function getWorkflowSetting()
    {
        return $this->container['workflow_setting'];
    }

    /**
     * Sets workflow_setting
     *
     * @param string $workflow_setting 仕訳承認フロー（enable: 有効、 disable: 無効）
     *
     * @return $this
     */
    public function setWorkflowSetting($workflow_setting)
    {
        $allowedValues = $this->getWorkflowSettingAllowableValues();
        if (!in_array($workflow_setting, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'workflow_setting', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['workflow_setting'] = $workflow_setting;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role ユーザーの権限
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets prefecture_code
     *
     * @return int
     */
    public function getPrefectureCode()
    {
        return $this->container['prefecture_code'];
    }

    /**
     * Sets prefecture_code
     *
     * @param int $prefecture_code 都道府県コード（0: 北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄
     *
     * @return $this
     */
    public function setPrefectureCode($prefecture_code)
    {
        $this->container['prefecture_code'] = $prefecture_code;

        return $this;
    }

    /**
     * Gets txn_number_format
     *
     * @return string
     */
    public function getTxnNumberFormat()
    {
        return $this->container['txn_number_format'];
    }

    /**
     * Sets txn_number_format
     *
     * @param string $txn_number_format 仕訳番号形式（not_used: 使用しない、digits: 数字（例：5091824）、alnum: 英数字（例：59J0P））
     *
     * @return $this
     */
    public function setTxnNumberFormat($txn_number_format)
    {
        $allowedValues = $this->getTxnNumberFormatAllowableValues();
        if (!in_array($txn_number_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'txn_number_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['txn_number_format'] = $txn_number_format;

        return $this;
    }

    /**
     * Gets use_partner_code
     *
     * @return bool
     */
    public function getUsePartnerCode()
    {
        return $this->container['use_partner_code'];
    }

    /**
     * Sets use_partner_code
     *
     * @param bool $use_partner_code 取引先コードの利用設定（true: 有効、 false: 無効）
     *
     * @return $this
     */
    public function setUsePartnerCode($use_partner_code)
    {
        $this->container['use_partner_code'] = $use_partner_code;

        return $this;
    }

    /**
     * Gets industry_code
     *
     * @return string
     */
    public function getIndustryCode()
    {
        return $this->container['industry_code'];
    }

    /**
     * Sets industry_code
     *
     * @param string $industry_code コード（transport_delivery: 輸送業/配送業、delivery: バイク便等の配達業、other_transportation_logistics: その他の運輸業、物流業）
     *
     * @return $this
     */
    public function setIndustryCode($industry_code)
    {
        $allowedValues = $this->getIndustryCodeAllowableValues();
        if (!in_array($industry_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_code'] = $industry_code;

        return $this;
    }

    /**
     * Gets invoice_style
     *
     * @return int
     */
    public function getInvoiceStyle()
    {
        return $this->container['invoice_style'];
    }

    /**
     * Sets invoice_style
     *
     * @param int $invoice_style スタイル(0: クラシック, 1: モダン)
     *
     * @return $this
     */
    public function setInvoiceStyle($invoice_style)
    {

        if (($invoice_style > 1)) {
            throw new \InvalidArgumentException('invalid value for $invoice_style when calling CompaniesShowResponseCompany., must be smaller than or equal to 1.');
        }
        if (($invoice_style < 0)) {
            throw new \InvalidArgumentException('invalid value for $invoice_style when calling CompaniesShowResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['invoice_style'] = $invoice_style;

        return $this;
    }

    /**
     * Gets tax_at_source_calc_type
     *
     * @return int
     */
    public function getTaxAtSourceCalcType()
    {
        return $this->container['tax_at_source_calc_type'];
    }

    /**
     * Sets tax_at_source_calc_type
     *
     * @param int $tax_at_source_calc_type 源泉徴収税計算（0: 消費税を含める、1: 消費税を含めない）
     *
     * @return $this
     */
    public function setTaxAtSourceCalcType($tax_at_source_calc_type)
    {
        $this->container['tax_at_source_calc_type'] = $tax_at_source_calc_type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name 事業所名
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets street_name1
     *
     * @return string
     */
    public function getStreetName1()
    {
        return $this->container['street_name1'];
    }

    /**
     * Sets street_name1
     *
     * @param string $street_name1 市区町村・番地
     *
     * @return $this
     */
    public function setStreetName1($street_name1)
    {
        $this->container['street_name1'] = $street_name1;

        return $this;
    }

    /**
     * Gets default_wallet_account_id
     *
     * @return int|null
     */
    public function getDefaultWalletAccountId()
    {
        return $this->container['default_wallet_account_id'];
    }

    /**
     * Sets default_wallet_account_id
     *
     * @param int|null $default_wallet_account_id 決済口座のデフォルト
     *
     * @return $this
     */
    public function setDefaultWalletAccountId($default_wallet_account_id)
    {
        $this->container['default_wallet_account_id'] = $default_wallet_account_id;

        return $this;
    }

    /**
     * Gets phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     *
     * @param string $phone1 電話番号１
     *
     * @return $this
     */
    public function setPhone1($phone1)
    {
        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets street_name2
     *
     * @return string
     */
    public function getStreetName2()
    {
        return $this->container['street_name2'];
    }

    /**
     * Sets street_name2
     *
     * @param string $street_name2 建物名・部屋番号など
     *
     * @return $this
     */
    public function setStreetName2($street_name2)
    {
        $this->container['street_name2'] = $street_name2;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode 郵便番号
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets invoice_layout
     *
     * @return int
     */
    public function getInvoiceLayout()
    {
        return $this->container['invoice_layout'];
    }

    /**
     * Sets invoice_layout
     *
     * @param int $invoice_layout レイアウト(0: レイアウト1, 1:レイアウト2, 3:封筒1, 4:レイアウト3(繰越金額欄あり), 5: 封筒2(繰越金額欄あり))
     *
     * @return $this
     */
    public function setInvoiceLayout($invoice_layout)
    {

        if (($invoice_layout > 5)) {
            throw new \InvalidArgumentException('invalid value for $invoice_layout when calling CompaniesShowResponseCompany., must be smaller than or equal to 5.');
        }
        if (($invoice_layout < 0)) {
            throw new \InvalidArgumentException('invalid value for $invoice_layout when calling CompaniesShowResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['invoice_layout'] = $invoice_layout;

        return $this;
    }

    /**
     * Gets corporate_number
     *
     * @return string
     */
    public function getCorporateNumber()
    {
        return $this->container['corporate_number'];
    }

    /**
     * Sets corporate_number
     *
     * @param string $corporate_number 法人番号 (半角数字13桁、法人のみ)
     *
     * @return $this
     */
    public function setCorporateNumber($corporate_number)
    {
        $this->container['corporate_number'] = $corporate_number;

        return $this;
    }

    /**
     * Gets private_settlement
     *
     * @return bool
     */
    public function getPrivateSettlement()
    {
        return $this->container['private_settlement'];
    }

    /**
     * Sets private_settlement
     *
     * @param bool $private_settlement プライベート資金/役員資金（false: 使用しない、true: 使用する）
     *
     * @return $this
     */
    public function setPrivateSettlement($private_settlement)
    {
        $this->container['private_settlement'] = $private_settlement;

        return $this;
    }

    /**
     * Gets amount_fraction
     *
     * @return int
     */
    public function getAmountFraction()
    {
        return $this->container['amount_fraction'];
    }

    /**
     * Sets amount_fraction
     *
     * @param int $amount_fraction 金額端数処理方法（0: 切り捨て、1: 切り上げ、2: 四捨五入）
     *
     * @return $this
     */
    public function setAmountFraction($amount_fraction)
    {

        if (($amount_fraction > 2)) {
            throw new \InvalidArgumentException('invalid value for $amount_fraction when calling CompaniesShowResponseCompany., must be smaller than or equal to 2.');
        }
        if (($amount_fraction < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount_fraction when calling CompaniesShowResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['amount_fraction'] = $amount_fraction;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 事業所ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets minus_format
     *
     * @return int
     */
    public function getMinusFormat()
    {
        return $this->container['minus_format'];
    }

    /**
     * Sets minus_format
     *
     * @param int $minus_format マイナスの表示方法（0: -、 1: △）
     *
     * @return $this
     */
    public function setMinusFormat($minus_format)
    {

        if (($minus_format > 1)) {
            throw new \InvalidArgumentException('invalid value for $minus_format when calling CompaniesShowResponseCompany., must be smaller than or equal to 1.');
        }
        if (($minus_format < 0)) {
            throw new \InvalidArgumentException('invalid value for $minus_format when calling CompaniesShowResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['minus_format'] = $minus_format;

        return $this;
    }

    /**
     * Gets industry_class
     *
     * @return string
     */
    public function getIndustryClass()
    {
        return $this->container['industry_class'];
    }

    /**
     * Sets industry_class
     *
     * @param string $industry_class 種別（agriculture_forestry_fisheries_ore: 農林水産業/鉱業、construction: 建設、manufacturing_processing: 製造/加工、it: IT、transportation_logistics: 運輸/物流、retail_wholesale: 小売/卸売、finance_insurance: 金融/保険、real_estate_rental: 不動産/レンタル、profession: 士業/学術/専門技術サービス、design_production: デザイン/制作、food: 飲食、leisure_entertainment: レジャー/娯楽、lifestyle: 生活関連サービス、education: 教育/学習支援、medical_welfare: 医療/福祉、other_services: その他サービス、other: その他）
     *
     * @return $this
     */
    public function setIndustryClass($industry_class)
    {
        $allowedValues = $this->getIndustryClassAllowableValues();
        if (!in_array($industry_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_class'] = $industry_class;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


