<?php
/**
 * ManualJournalUpdateParamsDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"start_guide\">スタートガイド</h2>  <p>freee API開発がはじめての方は<a href=\"https://developer.freee.co.jp/getting-started\">freee API スタートガイド</a>を参照してください。</p>  <hr /> <h2 id=\"specification\">仕様</h2>  <pre><code>【重要】会計freee APIの新バージョンについて 2020年12月まで、2つのバージョンが利用できる状態です。古いものは2020年12月に利用不可となります。<br> 新しいAPIを利用するにはリクエストヘッダーに以下を指定します。 X-Api-Version: 2020-06-15<br> 指定がない場合は2020年12月に廃止予定のAPIを利用することとなります。<br> 【重要】APIのバージョン指定をせずに利用し続ける場合 2020年12月に新しいバージョンのAPIに自動的に切り替わります。 詳細は、<a href=\"https://developer.freee.co.jp/release-note/2948\" target=\"_blank\">リリースノート</a>をご覧ください。<br> 旧バージョンのAPIリファレンスを確認したい場合は、<a href=\"https://freee.github.io/freee-api-schema/\" target=\"_blank\">旧バージョンのAPIリファレンスページ</a>をご覧ください。 </code></pre>  <h3 id=\"api_endpoint\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"about_authorize\">認証について</h3> <p>OAuth2.0を利用します。詳細は<a href=\"https://developer.freee.co.jp/docs\" target=\"_blank\">ドキュメントの認証</a>パートを参照してください。</p>  <h3 id=\"data_format\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポートしていますが、詳細は、API毎の説明欄（application/jsonなど）を確認してください。</p>  <h3 id=\"compatibility\">後方互換性ありの変更</h3>  <p>freeeでは、APIを改善していくために以下のような変更は後方互換性ありとして通知なく変更を入れることがあります。アプリケーション実装者は以下を踏まえて開発を行ってください。</p>  <ul> <li>新しいAPIリソース・エンドポイントの追加</li> <li>既存のAPIに対して必須ではない新しいリクエストパラメータの追加</li> <li>既存のAPIレスポンスに対する新しいプロパティの追加</li> <li>既存のAPIレスポンスに対するプロパティの順番の入れ変え</li> <li>keyとなっているidやcodeの長さの変更（長くする）</li> </ul>  <h3 id=\"common_response_header\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"common_error_response\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li> <li> <p>一部のエラーレスポンスにはエラーコードが含まれます。<br>詳細は、<a href=\"https://developer.freee.co.jp/tips/faq/40x-checkpoint\">HTTPステータスコード400台エラー時のチェックポイント</a>を参照してください</p> </li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre>  </br>  <h3 id=\"api_rate_limit\">API使用制限</h3>    <p>freeeは一定期間に過度のアクセスを検知した場合、APIアクセスをコントロールする場合があります。</p>   <p>その際のhttp status codeは403となります。制限がかかってから10分程度が過ぎると再度使用することができるようになります。</p>  <h4 id=\"reports_api_endpoint\">/reportsエンドポイント</h4>  <p>freeeは/reportsエンドポイントに対して1秒間に10以上のアクセスを検知した場合、APIアクセスをコントロールする場合があります。その際のhttp status codeは429（too many requests）となります。</p>  <p>レスポンスボディのmetaプロパティに以下を含めます。</p>  <ul>   <li>設定されている上限値</li>   <li>上限に達するまでの使用可能回数</li>   <li>（上限値に達した場合）使用回数がリセットされる時刻</li> </ul>  <h3 id=\"plan_api_rate_limit\">プラン別のAPI Rate Limit</h3>   <table border=\"1\">     <tbody>       <tr>         <th style=\"padding: 10px\"><strong>会計freeeプラン名</strong></th>         <th style=\"padding: 10px\"><strong>事業所とアプリケーション毎に1日でのAPIコール数</strong></th>       </tr>       <tr>         <td style=\"padding: 10px\">エンタープライズ</td>         <td style=\"padding: 10px\">10,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">プロフェッショナル</td>         <td style=\"padding: 10px\">5,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">ベーシック</td>         <td style=\"padding: 10px\">3,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">ミニマム</td>         <td style=\"padding: 10px\">3,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">上記以外</td>         <td style=\"padding: 10px\">3,000</td>       </tr>     </tbody>   </table>  <h3 id=\"webhook\">Webhookについて</h3>  <p>詳細は<a href=\"https://developer.freee.co.jp/docs/accounting/webhook\" target=\"_blank\">会計Webhook概要</a>を参照してください。</p>  <hr /> <h2 id=\"contact\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
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
 * ManualJournalUpdateParamsDetails Class Doc Comment
 *
 * @category Class
 * @description 貸借行一覧（配列）: 貸借合わせて100行まで登録できます。
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ManualJournalUpdateParamsDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'manualJournalUpdateParams_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_id' => 'int',
        'amount' => 'int',
        'description' => 'string',
        'entry_side' => 'string',
        'id' => 'int',
        'item_id' => 'int',
        'partner_code' => 'string',
        'partner_id' => 'int',
        'section_id' => 'int',
        'segment_1_tag_id' => 'int',
        'segment_2_tag_id' => 'int',
        'segment_3_tag_id' => 'int',
        'tag_ids' => 'int[]',
        'tax_code' => 'int',
        'vat' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_item_id' => null,
        'amount' => null,
        'description' => null,
        'entry_side' => null,
        'id' => null,
        'item_id' => null,
        'partner_code' => null,
        'partner_id' => null,
        'section_id' => null,
        'segment_1_tag_id' => null,
        'segment_2_tag_id' => null,
        'segment_3_tag_id' => null,
        'tag_ids' => null,
        'tax_code' => null,
        'vat' => null
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
        'account_item_id' => 'account_item_id',
        'amount' => 'amount',
        'description' => 'description',
        'entry_side' => 'entry_side',
        'id' => 'id',
        'item_id' => 'item_id',
        'partner_code' => 'partner_code',
        'partner_id' => 'partner_id',
        'section_id' => 'section_id',
        'segment_1_tag_id' => 'segment_1_tag_id',
        'segment_2_tag_id' => 'segment_2_tag_id',
        'segment_3_tag_id' => 'segment_3_tag_id',
        'tag_ids' => 'tag_ids',
        'tax_code' => 'tax_code',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_item_id' => 'setAccountItemId',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'entry_side' => 'setEntrySide',
        'id' => 'setId',
        'item_id' => 'setItemId',
        'partner_code' => 'setPartnerCode',
        'partner_id' => 'setPartnerId',
        'section_id' => 'setSectionId',
        'segment_1_tag_id' => 'setSegment1TagId',
        'segment_2_tag_id' => 'setSegment2TagId',
        'segment_3_tag_id' => 'setSegment3TagId',
        'tag_ids' => 'setTagIds',
        'tax_code' => 'setTaxCode',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_item_id' => 'getAccountItemId',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'entry_side' => 'getEntrySide',
        'id' => 'getId',
        'item_id' => 'getItemId',
        'partner_code' => 'getPartnerCode',
        'partner_id' => 'getPartnerId',
        'section_id' => 'getSectionId',
        'segment_1_tag_id' => 'getSegment1TagId',
        'segment_2_tag_id' => 'getSegment2TagId',
        'segment_3_tag_id' => 'getSegment3TagId',
        'tag_ids' => 'getTagIds',
        'tax_code' => 'getTaxCode',
        'vat' => 'getVat'
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

    const ENTRY_SIDE_DEBIT = 'debit';
    const ENTRY_SIDE_CREDIT = 'credit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntrySideAllowableValues()
    {
        return [
            self::ENTRY_SIDE_DEBIT,
            self::ENTRY_SIDE_CREDIT,
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
        $this->container['account_item_id'] = $data['account_item_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['entry_side'] = $data['entry_side'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['partner_code'] = $data['partner_code'] ?? null;
        $this->container['partner_id'] = $data['partner_id'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['segment_1_tag_id'] = $data['segment_1_tag_id'] ?? null;
        $this->container['segment_2_tag_id'] = $data['segment_2_tag_id'] ?? null;
        $this->container['segment_3_tag_id'] = $data['segment_3_tag_id'] ?? null;
        $this->container['tag_ids'] = $data['tag_ids'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['vat'] = $data['vat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_item_id'] === null) {
            $invalidProperties[] = "'account_item_id' can't be null";
        }
        if (($this->container['account_item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'account_item_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['account_item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_item_id', must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        if ($this->container['entry_side'] === null) {
            $invalidProperties[] = "'entry_side' can't be null";
        }
        $allowedValues = $this->getEntrySideAllowableValues();
        if (!is_null($this->container['entry_side']) && !in_array($this->container['entry_side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entry_side', must be one of '%s'",
                $this->container['entry_side'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['item_id']) && ($this->container['item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'item_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['item_id']) && ($this->container['item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'item_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'section_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'section_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be bigger than or equal to 1.";
        }

        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if (($this->container['tax_code'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['tax_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be bigger than or equal to 0.";
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
     * Gets account_item_id
     *
     * @return int
     */
    public function getAccountItemId()
    {
        return $this->container['account_item_id'];
    }

    /**
     * Sets account_item_id
     *
     * @param int $account_item_id 勘定科目ID
     *
     * @return self
     */
    public function setAccountItemId($account_item_id)
    {

        if (($account_item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 2147483647.');
        }
        if (($account_item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['account_item_id'] = $account_item_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount 取引金額（税込で指定してください）
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 9223372036854775807.');
        }
        if (($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 備考
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets entry_side
     *
     * @return string
     */
    public function getEntrySide()
    {
        return $this->container['entry_side'];
    }

    /**
     * Sets entry_side
     *
     * @param string $entry_side 貸借（貸方: credit, 借方: debit）
     *
     * @return self
     */
    public function setEntrySide($entry_side)
    {
        $allowedValues = $this->getEntrySideAllowableValues();
        if (!in_array($entry_side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entry_side', must be one of '%s'",
                    $entry_side,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entry_side'] = $entry_side;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 貸借行ID: 既存貸借行を更新または削除する場合に指定します。IDを指定しない貸借行は、新規行として扱われ追加されます。
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($id) && ($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id 品目ID
     *
     * @return self
     */
    public function setItemId($item_id)
    {

        if (!is_null($item_id) && ($item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($item_id) && ($item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets partner_code
     *
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->container['partner_code'];
    }

    /**
     * Sets partner_code
     *
     * @param string|null $partner_code 取引先コード
     *
     * @return self
     */
    public function setPartnerCode($partner_code)
    {
        $this->container['partner_code'] = $partner_code;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id 取引先ID
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {

        if (!is_null($partner_id) && ($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($partner_id) && ($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets section_id
     *
     * @return int|null
     */
    public function getSectionId()
    {
        return $this->container['section_id'];
    }

    /**
     * Sets section_id
     *
     * @param int|null $section_id 部門ID
     *
     * @return self
     */
    public function setSectionId($section_id)
    {

        if (!is_null($section_id) && ($section_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($section_id) && ($section_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_id
     *
     * @return int|null
     */
    public function getSegment1TagId()
    {
        return $this->container['segment_1_tag_id'];
    }

    /**
     * Sets segment_1_tag_id
     *
     * @param int|null $segment_1_tag_id セグメント１ID
     *
     * @return self
     */
    public function setSegment1TagId($segment_1_tag_id)
    {

        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_id
     *
     * @return int|null
     */
    public function getSegment2TagId()
    {
        return $this->container['segment_2_tag_id'];
    }

    /**
     * Sets segment_2_tag_id
     *
     * @param int|null $segment_2_tag_id セグメント２ID
     *
     * @return self
     */
    public function setSegment2TagId($segment_2_tag_id)
    {

        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_id
     *
     * @return int|null
     */
    public function getSegment3TagId()
    {
        return $this->container['segment_3_tag_id'];
    }

    /**
     * Sets segment_3_tag_id
     *
     * @param int|null $segment_3_tag_id セグメント３ID
     *
     * @return self
     */
    public function setSegment3TagId($segment_3_tag_id)
    {

        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 1.');
        }

        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return int[]|null
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[]|null $tag_ids メモタグID
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return int
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param int $tax_code 税区分コード
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {

        if (($tax_code > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling ManualJournalUpdateParamsDetails., must be smaller than or equal to 2147483647.');
        }
        if (($tax_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling ManualJournalUpdateParamsDetails., must be bigger than or equal to 0.');
        }

        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return int|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param int|null $vat 消費税額（指定しない場合は自動で計算されます）
     *
     * @return self
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


