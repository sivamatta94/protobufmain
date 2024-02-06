<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the pre-targeting configs that matched.
 *
 * Generated from protobuf message <code>BidRequest.AdSlot.MatchingAdData</code>
 */
class MatchingAdData extends \Google\Protobuf\Internal\Message
{
    /**
     * The billing ids corresponding to the pretargeting configs that matched.
     *
     * Generated from protobuf field <code>repeated int64 billing_id = 2 [packed = false];</code>
     */
    private $billing_id;
    /**
     * The minimum CPM value that you can bid to not be filtered before the
     * auction. This may be a global minimum, or it may be a minimum set by
     * the publisher. The value is in micros of the bidding currency.
     * The bidding currency is determined by:
     * 1. The bidder-level currency, if configured.
     * 2. Otherwise, the currency of the buyer accounts indicated by the
     * billing IDs in the billing_id field.
     *
     * Generated from protobuf field <code>optional int64 minimum_cpm_micros = 5;</code>
     */
    protected $minimum_cpm_micros = null;
    /**
     * Generated from protobuf field <code>repeated .BidRequest.AdSlot.MatchingAdData.DirectDeal direct_deal = 6;</code>
     */
    private $direct_deal;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $billing_id
     *           The billing ids corresponding to the pretargeting configs that matched.
     *     @type int|string $minimum_cpm_micros
     *           The minimum CPM value that you can bid to not be filtered before the
     *           auction. This may be a global minimum, or it may be a minimum set by
     *           the publisher. The value is in micros of the bidding currency.
     *           The bidding currency is determined by:
     *           1. The bidder-level currency, if configured.
     *           2. Otherwise, the currency of the buyer accounts indicated by the
     *           billing IDs in the billing_id field.
     *     @type array<\BidRequest\AdSlot\MatchingAdData\DirectDeal>|\Google\Protobuf\Internal\RepeatedField $direct_deal
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The billing ids corresponding to the pretargeting configs that matched.
     *
     * Generated from protobuf field <code>repeated int64 billing_id = 2 [packed = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBillingId()
    {
        return $this->billing_id;
    }

    /**
     * The billing ids corresponding to the pretargeting configs that matched.
     *
     * Generated from protobuf field <code>repeated int64 billing_id = 2 [packed = false];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBillingId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->billing_id = $arr;

        return $this;
    }

    /**
     * The minimum CPM value that you can bid to not be filtered before the
     * auction. This may be a global minimum, or it may be a minimum set by
     * the publisher. The value is in micros of the bidding currency.
     * The bidding currency is determined by:
     * 1. The bidder-level currency, if configured.
     * 2. Otherwise, the currency of the buyer accounts indicated by the
     * billing IDs in the billing_id field.
     *
     * Generated from protobuf field <code>optional int64 minimum_cpm_micros = 5;</code>
     * @return int|string
     */
    public function getMinimumCpmMicros()
    {
        return isset($this->minimum_cpm_micros) ? $this->minimum_cpm_micros : 0;
    }

    public function hasMinimumCpmMicros()
    {
        return isset($this->minimum_cpm_micros);
    }

    public function clearMinimumCpmMicros()
    {
        unset($this->minimum_cpm_micros);
    }

    /**
     * The minimum CPM value that you can bid to not be filtered before the
     * auction. This may be a global minimum, or it may be a minimum set by
     * the publisher. The value is in micros of the bidding currency.
     * The bidding currency is determined by:
     * 1. The bidder-level currency, if configured.
     * 2. Otherwise, the currency of the buyer accounts indicated by the
     * billing IDs in the billing_id field.
     *
     * Generated from protobuf field <code>optional int64 minimum_cpm_micros = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinimumCpmMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->minimum_cpm_micros = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.AdSlot.MatchingAdData.DirectDeal direct_deal = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDirectDeal()
    {
        return $this->direct_deal;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.AdSlot.MatchingAdData.DirectDeal direct_deal = 6;</code>
     * @param array<\BidRequest\AdSlot\MatchingAdData\DirectDeal>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDirectDeal($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BidRequest\AdSlot\MatchingAdData\DirectDeal::class);
        $this->direct_deal = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MatchingAdData::class, \BidRequest_AdSlot_MatchingAdData::class);
