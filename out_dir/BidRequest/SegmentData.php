<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * First party data segments that describe the content or audience. Each
 * SegmentData object represents a different data source.
 *
 * Generated from protobuf message <code>BidRequest.SegmentData</code>
 */
class SegmentData extends \Google\Protobuf\Internal\Message
{
    /**
     * Exchange-specific name for the signal provider.
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = null;
    /**
     * Generated from protobuf field <code>repeated .BidRequest.SegmentData.Segment segment = 2;</code>
     */
    private $segment;
    /**
     * The taxonomy in use for segment IDs.
     *
     * Generated from protobuf field <code>optional .BidRequest.SegmentData.TaxonomyType type = 3;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Exchange-specific name for the signal provider.
     *     @type array<\BidRequest\SegmentData\Segment>|\Google\Protobuf\Internal\RepeatedField $segment
     *     @type int $type
     *           The taxonomy in use for segment IDs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Exchange-specific name for the signal provider.
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Exchange-specific name for the signal provider.
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.SegmentData.Segment segment = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.SegmentData.Segment segment = 2;</code>
     * @param array<\BidRequest\SegmentData\Segment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegment($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BidRequest\SegmentData\Segment::class);
        $this->segment = $arr;

        return $this;
    }

    /**
     * The taxonomy in use for segment IDs.
     *
     * Generated from protobuf field <code>optional .BidRequest.SegmentData.TaxonomyType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The taxonomy in use for segment IDs.
     *
     * Generated from protobuf field <code>optional .BidRequest.SegmentData.TaxonomyType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\SegmentData\TaxonomyType::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SegmentData::class, \BidRequest_SegmentData::class);

