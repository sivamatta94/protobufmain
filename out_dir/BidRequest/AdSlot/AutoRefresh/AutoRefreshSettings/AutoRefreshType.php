<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot\AutoRefresh\AutoRefreshSettings;

use UnexpectedValueException;

/**
 * Protobuf type <code>BidRequest.AdSlot.AutoRefresh.AutoRefreshSettings.AutoRefreshType</code>
 */
class AutoRefreshType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_AUTO_REFRESH_TYPE = 0;</code>
     */
    const UNKNOWN_AUTO_REFRESH_TYPE = 0;
    /**
     * Refresh triggered by user-initiated action such
     * as scrolling.
     *
     * Generated from protobuf enum <code>USER_ACTION = 1;</code>
     */
    const USER_ACTION = 1;
    /**
     * Event-driven content change. For example, ads refresh
     * when the football game score changes on the page.
     *
     * Generated from protobuf enum <code>EVENT = 2;</code>
     */
    const EVENT = 2;
    /**
     * Time-based refresh. Ads refresh on a predefined time
     * interval even without user activity.
     *
     * Generated from protobuf enum <code>TIME = 3;</code>
     */
    const TIME = 3;

    private static $valueToName = [
        self::UNKNOWN_AUTO_REFRESH_TYPE => 'UNKNOWN_AUTO_REFRESH_TYPE',
        self::USER_ACTION => 'USER_ACTION',
        self::EVENT => 'EVENT',
        self::TIME => 'TIME',
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
class_alias(AutoRefreshType::class, \BidRequest_AdSlot_AutoRefresh_AutoRefreshSettings_AutoRefreshType::class);
