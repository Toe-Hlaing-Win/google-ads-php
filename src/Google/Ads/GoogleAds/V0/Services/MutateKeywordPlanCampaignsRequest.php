<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/keyword_plan_campaign_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeywordPlanCampaignService.MutateKeywordPlanCampaigns][google.ads.googleads.v0.services.KeywordPlanCampaignService.MutateKeywordPlanCampaigns].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.MutateKeywordPlanCampaignsRequest</code>
 */
class MutateKeywordPlanCampaignsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer whose Keyword Plan campaigns are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    private $customer_id = '';
    /**
     * The list of operations to perform on individual Keyword Plan campaigns.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.KeywordPlanCampaignOperation operations = 2;</code>
     */
    private $operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer whose Keyword Plan campaigns are being modified.
     *     @type \Google\Ads\GoogleAds\V0\Services\KeywordPlanCampaignOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           The list of operations to perform on individual Keyword Plan campaigns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\KeywordPlanCampaignService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer whose Keyword Plan campaigns are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer whose Keyword Plan campaigns are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The list of operations to perform on individual Keyword Plan campaigns.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.KeywordPlanCampaignOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * The list of operations to perform on individual Keyword Plan campaigns.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.KeywordPlanCampaignOperation operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\KeywordPlanCampaignOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\KeywordPlanCampaignOperation::class);
        $this->operations = $arr;

        return $this;
    }

}
