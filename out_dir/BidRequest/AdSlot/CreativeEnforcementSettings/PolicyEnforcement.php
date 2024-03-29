<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot\CreativeEnforcementSettings;

use UnexpectedValueException;

/**
 * Creative policy enforcement level that applies to this request.
 * Creatives that don't adhere to the specified policy will be filtered
 * before the auction. The status of the creatives with their respective
 * policies can be retrieved through Creative API.
 * https://developers.google.com/authorized-buyers/apis/guides/rtb-api/creatives
 * Bids on deals may override the policy enforcement applicable to the
 * request.
 *
 * Protobuf type <code>BidRequest.AdSlot.CreativeEnforcementSettings.PolicyEnforcement</code>
 */
class PolicyEnforcement
{
    /**
     * Generated from protobuf enum <code>POLICY_ENFORCEMENT_UNKNOWN = 0;</code>
     */
    const POLICY_ENFORCEMENT_UNKNOWN = 0;
    /**
     * Baseline policy for all ads serving through any of Google's ads
     * platform products. Learn more at:
     * https://support.google.com/platformspolicy/answer/3013851.
     *
     * Generated from protobuf enum <code>POLICY_ENFORCEMENT_PLATFORM_POLICY = 1;</code>
     */
    const POLICY_ENFORCEMENT_PLATFORM_POLICY = 1;
    /**
     * Policy for ads serving through Google's ad network. This includes the
     * baseline policy for all ads serving through any of Google's ads
     * platform products. Learn more at:
     * https://support.google.com/authorizedbuyers/answer/1325008.
     *
     * Generated from protobuf enum <code>POLICY_ENFORCEMENT_NETWORK_AND_PLATFORM_POLICY = 2;</code>
     */
    const POLICY_ENFORCEMENT_NETWORK_AND_PLATFORM_POLICY = 2;

    private static $valueToName = [
        self::POLICY_ENFORCEMENT_UNKNOWN => 'POLICY_ENFORCEMENT_UNKNOWN',
        self::POLICY_ENFORCEMENT_PLATFORM_POLICY => 'POLICY_ENFORCEMENT_PLATFORM_POLICY',
        self::POLICY_ENFORCEMENT_NETWORK_AND_PLATFORM_POLICY => 'POLICY_ENFORCEMENT_NETWORK_AND_PLATFORM_POLICY',
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
class_alias(PolicyEnforcement::class, \BidRequest_AdSlot_CreativeEnforcementSettings_PolicyEnforcement::class);

