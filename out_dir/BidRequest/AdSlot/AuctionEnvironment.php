<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot;

use UnexpectedValueException;

/**
 * Describes the environment where the ad auction is run.
 *
 * Protobuf type <code>BidRequest.AdSlot.AuctionEnvironment</code>
 */
class AuctionEnvironment
{
    /**
     * The auction determining the winning ad is held server-side.
     *
     * Generated from protobuf enum <code>SERVER_SIDE_AUCTION = 0;</code>
     */
    const SERVER_SIDE_AUCTION = 0;
    /**
     * The contextual auction that determines a winning contextual bid is held
     * server-side, and bidding functions are run on the device to determine
     * interest group bids. Both the winning contextual bid and interest
     * group bids are entered into a final auction held on the device to
     * select the winning ad. For more information regarding the Protected
     * Audience API, see:
     * https://github.com/WICG/turtledove and
     * https://github.com/WICG/turtledove/blob/main/FLEDGE.md
     *
     * Generated from protobuf enum <code>ON_DEVICE_INTEREST_GROUP_AUCTION = 1;</code>
     */
    const ON_DEVICE_INTEREST_GROUP_AUCTION = 1;

    private static $valueToName = [
        self::SERVER_SIDE_AUCTION => 'SERVER_SIDE_AUCTION',
        self::ON_DEVICE_INTEREST_GROUP_AUCTION => 'ON_DEVICE_INTEREST_GROUP_AUCTION',
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
class_alias(AuctionEnvironment::class, \BidRequest_AdSlot_AuctionEnvironment::class);

