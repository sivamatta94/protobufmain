<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Video;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the companion ad slots that can be shown with the
 * video. While this is a repeated field there will only be one value in
 * most cases. If there are no companion ads available this field will not
 * be set.
 *
 * Generated from protobuf message <code>BidRequest.Video.CompanionSlot</code>
 */
class CompanionSlot extends \Google\Protobuf\Internal\Message
{
    /**
     * These fields represent the available heights and widths in this slot.
     * There will always be the same number heights and widths fields.
     *
     * Generated from protobuf field <code>repeated int32 height = 1 [packed = true];</code>
     */
    private $height;
    /**
     * Generated from protobuf field <code>repeated int32 width = 2 [packed = true];</code>
     */
    private $width;
    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.CompanionSlot.CreativeFormat creative_format = 3;</code>
     */
    private $creative_format;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $height
     *           These fields represent the available heights and widths in this slot.
     *           There will always be the same number heights and widths fields.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $width
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $creative_format
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * These fields represent the available heights and widths in this slot.
     * There will always be the same number heights and widths fields.
     *
     * Generated from protobuf field <code>repeated int32 height = 1 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * These fields represent the available heights and widths in this slot.
     * There will always be the same number heights and widths fields.
     *
     * Generated from protobuf field <code>repeated int32 height = 1 [packed = true];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeight($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->height = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 width = 2 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Generated from protobuf field <code>repeated int32 width = 2 [packed = true];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWidth($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->width = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.CompanionSlot.CreativeFormat creative_format = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreativeFormat()
    {
        return $this->creative_format;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.CompanionSlot.CreativeFormat creative_format = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreativeFormat($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \BidRequest\Video\CompanionSlot\CreativeFormat::class);
        $this->creative_format = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompanionSlot::class, \BidRequest_Video_CompanionSlot::class);

