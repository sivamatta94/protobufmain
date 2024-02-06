<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Video;

use UnexpectedValueException;

/**
 * Does the publisher allow/require/block skippable video ads?
 *
 * Protobuf type <code>BidRequest.Video.SkippableBidRequestType</code>
 */
class SkippableBidRequestType
{
    /**
     * Generated from protobuf enum <code>ALLOW_SKIPPABLE = 0;</code>
     */
    const ALLOW_SKIPPABLE = 0;
    /**
     * Generated from protobuf enum <code>REQUIRE_SKIPPABLE = 1;</code>
     */
    const REQUIRE_SKIPPABLE = 1;
    /**
     * Generated from protobuf enum <code>BLOCK_SKIPPABLE = 2;</code>
     */
    const BLOCK_SKIPPABLE = 2;

    private static $valueToName = [
        self::ALLOW_SKIPPABLE => 'ALLOW_SKIPPABLE',
        self::REQUIRE_SKIPPABLE => 'REQUIRE_SKIPPABLE',
        self::BLOCK_SKIPPABLE => 'BLOCK_SKIPPABLE',
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
class_alias(SkippableBidRequestType::class, \BidRequest_Video_SkippableBidRequestType::class);

