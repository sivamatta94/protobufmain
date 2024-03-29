<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot;

use UnexpectedValueException;

/**
 * Visibility information for the slot.
 *
 * Protobuf type <code>BidRequest.AdSlot.SlotVisibility</code>
 */
class SlotVisibility
{
    /**
     * Generated from protobuf enum <code>NO_DETECTION = 0;</code>
     */
    const NO_DETECTION = 0;
    /**
     * Generated from protobuf enum <code>ABOVE_THE_FOLD = 1;</code>
     */
    const ABOVE_THE_FOLD = 1;
    /**
     * Generated from protobuf enum <code>BELOW_THE_FOLD = 2;</code>
     */
    const BELOW_THE_FOLD = 2;

    private static $valueToName = [
        self::NO_DETECTION => 'NO_DETECTION',
        self::ABOVE_THE_FOLD => 'ABOVE_THE_FOLD',
        self::BELOW_THE_FOLD => 'BELOW_THE_FOLD',
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
class_alias(SlotVisibility::class, \BidRequest_AdSlot_SlotVisibility::class);

