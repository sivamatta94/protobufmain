<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot\MatchingAdData\DirectDeal;

use UnexpectedValueException;

/**
 * Experimental field; subject to change.
 * An enum declaring the host of the creative, which will only be
 * populated for Programmatic Guaranteed deals.
 * Currently, this field should only ever be set to
 * CREATIVE_SOURCE_ADVERTISER.
 *
 * Protobuf type <code>BidRequest.AdSlot.MatchingAdData.DirectDeal.CreativeSourceType</code>
 */
class CreativeSourceType
{
    /**
     * Generated from protobuf enum <code>CREATIVE_SOURCE_UNKNOWN = 0;</code>
     */
    const CREATIVE_SOURCE_UNKNOWN = 0;
    /**
     * The creative is hosted by the advertiser, which means the bidder
     * is required to provide a creative in the bid response.
     *
     * Generated from protobuf enum <code>CREATIVE_SOURCE_ADVERTISER = 1;</code>
     */
    const CREATIVE_SOURCE_ADVERTISER = 1;
    /**
     * The creative is hosted by the publisher, which means the bidder
     * does not need to include a creative in the bid response.
     * For more information on publisher-hosted creatives, see
     * https://support.google.com/admanager/answer/9243220.
     * This feature isn't currently supported for RTB bidders.
     *
     * Generated from protobuf enum <code>CREATIVE_SOURCE_PUBLISHER = 2;</code>
     */
    const CREATIVE_SOURCE_PUBLISHER = 2;

    private static $valueToName = [
        self::CREATIVE_SOURCE_UNKNOWN => 'CREATIVE_SOURCE_UNKNOWN',
        self::CREATIVE_SOURCE_ADVERTISER => 'CREATIVE_SOURCE_ADVERTISER',
        self::CREATIVE_SOURCE_PUBLISHER => 'CREATIVE_SOURCE_PUBLISHER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreativeSourceType::class, \BidRequest_AdSlot_MatchingAdData_DirectDeal_CreativeSourceType::class);

