<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\PrivacyTreatments;

use UnexpectedValueException;

/**
 * Reasons why on-device storage access could be restricted during the
 * delivery of a winning ad.
 *
 * Protobuf type <code>BidRequest.PrivacyTreatments.DeviceStorageRestrictionReason</code>
 */
class DeviceStorageRestrictionReason
{
    /**
     * Generated from protobuf enum <code>DEVICE_STORAGE_RESTRICTION_UNKNOWN = 0;</code>
     */
    const DEVICE_STORAGE_RESTRICTION_UNKNOWN = 0;
    /**
     * This request is subject to user consent requirements to allow for
     * device storage access for advertising use cases such as ads
     * measurement, frequency capping, or profiling, but consent was
     * insufficient or not provided.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_USER_CONSENT = 1;</code>
     */
    const INSUFFICIENT_USER_CONSENT = 1;

    private static $valueToName = [
        self::DEVICE_STORAGE_RESTRICTION_UNKNOWN => 'DEVICE_STORAGE_RESTRICTION_UNKNOWN',
        self::INSUFFICIENT_USER_CONSENT => 'INSUFFICIENT_USER_CONSENT',
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
class_alias(DeviceStorageRestrictionReason::class, \BidRequest_PrivacyTreatments_DeviceStorageRestrictionReason::class);

