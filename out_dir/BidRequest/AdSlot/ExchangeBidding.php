<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters related to exchange bidding (third party exchanges doing
 * real-time bidding on DFP). This is never populated in calls to AdX
 * real-time bidders.
 *
 * Generated from protobuf message <code>BidRequest.AdSlot.ExchangeBidding</code>
 */
class ExchangeBidding extends \Google\Protobuf\Internal\Message
{
    /**
     * Repeated KeyValue pairs to be sent from the publisher to the
     * exchange bidder.
     *
     * Generated from protobuf field <code>repeated .BidRequest.KeyValue key_value = 3;</code>
     */
    private $key_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BidRequest\KeyValue>|\Google\Protobuf\Internal\RepeatedField $key_value
     *           Repeated KeyValue pairs to be sent from the publisher to the
     *           exchange bidder.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Repeated KeyValue pairs to be sent from the publisher to the
     * exchange bidder.
     *
     * Generated from protobuf field <code>repeated .BidRequest.KeyValue key_value = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyValue()
    {
        return $this->key_value;
    }

    /**
     * Repeated KeyValue pairs to be sent from the publisher to the
     * exchange bidder.
     *
     * Generated from protobuf field <code>repeated .BidRequest.KeyValue key_value = 3;</code>
     * @param array<\BidRequest\KeyValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BidRequest\KeyValue::class);
        $this->key_value = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExchangeBidding::class, \BidRequest_AdSlot_ExchangeBidding::class);

