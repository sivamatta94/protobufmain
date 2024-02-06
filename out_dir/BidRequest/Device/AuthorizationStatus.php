<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Device;

use UnexpectedValueException;

/**
 * The possible app tracking authorization statuses that could be applicable
 * for bid requests from iOS devices. For more information about iOS's app
 * tracking authorization status, see:
 * https://developer.apple.com/documentation/apptrackingtransparency/attrackingmanager/authorizationstatus
 *
 * Protobuf type <code>BidRequest.Device.AuthorizationStatus</code>
 */
class AuthorizationStatus
{
    /**
     * User has not yet received a request to authorize access to app-related
     * data that can be used for tracking the user or the device.
     *
     * Generated from protobuf enum <code>NOT_DETERMINED = 0;</code>
     */
    const NOT_DETERMINED = 0;
    /**
     * Authorization to access app-related data that can be used for tracking
     * the user or the device is restricted.
     *
     * Generated from protobuf enum <code>RESTRICTED = 1;</code>
     */
    const RESTRICTED = 1;
    /**
     * User denies authorization to access app-related data that can be used
     * for tracking the user or the device.
     *
     * Generated from protobuf enum <code>DENIED = 2;</code>
     */
    const DENIED = 2;
    /**
     * User authorizes access to app-related data that can be used for
     * tracking the user or the device.
     *
     * Generated from protobuf enum <code>AUTHORIZED = 3;</code>
     */
    const AUTHORIZED = 3;

    private static $valueToName = [
        self::NOT_DETERMINED => 'NOT_DETERMINED',
        self::RESTRICTED => 'RESTRICTED',
        self::DENIED => 'DENIED',
        self::AUTHORIZED => 'AUTHORIZED',
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
class_alias(AuthorizationStatus::class, \BidRequest_Device_AuthorizationStatus::class);

