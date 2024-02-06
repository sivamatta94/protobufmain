<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidResponse\Ad;

use UnexpectedValueException;

/**
 * Possible types of app promotion.
 *
 * Protobuf type <code>BidResponse.Ad.AppPromotionType</code>
 */
class AppPromotionType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_APP_PROMOTION_TYPE = 0;</code>
     */
    const UNKNOWN_APP_PROMOTION_TYPE = 0;
    /**
     * For encouraging new users to download and install the advertised app.
     * Clicking this ad will show the app store listing as an overlay (for
     * supported formats), without leaving the publisher app.
     * Click through URL for this ad points to the app store listing.
     *
     * Generated from protobuf enum <code>INSTALLS = 1;</code>
     */
    const INSTALLS = 1;
    /**
     * Other types of app promotion that do not fall into the categories
     * above. No features specific to app promotion types will apply.
     *
     * Generated from protobuf enum <code>OTHER = 3;</code>
     */
    const OTHER = 3;

    private static $valueToName = [
        self::UNKNOWN_APP_PROMOTION_TYPE => 'UNKNOWN_APP_PROMOTION_TYPE',
        self::INSTALLS => 'INSTALLS',
        self::OTHER => 'OTHER',
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
class_alias(AppPromotionType::class, \BidResponse_Ad_AppPromotionType::class);
