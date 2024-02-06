<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot;

use UnexpectedValueException;

/**
 * Whether the ad request has been determined to come directly from the
 * publisher.
 *
 * Protobuf type <code>BidRequest.AdSlot.MediationStatus</code>
 */
class MediationStatus
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>DIRECT_REQUEST = 1;</code>
     */
    const DIRECT_REQUEST = 1;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::DIRECT_REQUEST => 'DIRECT_REQUEST',
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
class_alias(MediationStatus::class, \BidRequest_AdSlot_MediationStatus::class);

