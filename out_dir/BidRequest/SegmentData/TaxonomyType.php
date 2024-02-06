<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\SegmentData;

use UnexpectedValueException;

/**
 * Taxonomy types that are registered centrally. Used to define the
 * namespace and semantic meaning of the segment IDs. For more information
 * about these taxonomies, see:
 * https://github.com/InteractiveAdvertisingBureau/openrtb/blob/master/extensions/community_extensions/segtax.md#enumeration-of-taxonomies
 *
 * Protobuf type <code>BidRequest.SegmentData.TaxonomyType</code>
 */
class TaxonomyType
{
    /**
     * Generated from protobuf enum <code>TAXONOMY_TYPE_UNKNOWN = 0;</code>
     */
    const TAXONOMY_TYPE_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>IAB_AUDIENCE_1_1 = 4;</code>
     */
    const IAB_AUDIENCE_1_1 = 4;
    /**
     * Generated from protobuf enum <code>IAB_CONTENT_2_2 = 6;</code>
     */
    const IAB_CONTENT_2_2 = 6;
    /**
     * Generated from protobuf enum <code>IAB_CONTENT_3_0 = 7;</code>
     */
    const IAB_CONTENT_3_0 = 7;

    private static $valueToName = [
        self::TAXONOMY_TYPE_UNKNOWN => 'TAXONOMY_TYPE_UNKNOWN',
        self::IAB_AUDIENCE_1_1 => 'IAB_AUDIENCE_1_1',
        self::IAB_CONTENT_2_2 => 'IAB_CONTENT_2_2',
        self::IAB_CONTENT_3_0 => 'IAB_CONTENT_3_0',
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
class_alias(TaxonomyType::class, \BidRequest_SegmentData_TaxonomyType::class);

