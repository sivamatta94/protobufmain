<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One or more detected verticals for the page as determined by Google.
 *
 * Generated from protobuf message <code>BidRequest.Vertical</code>
 */
class Vertical extends \Google\Protobuf\Internal\Message
{
    /**
     * The vertical id. See the publisher-verticals.txt file in the technical
     * documentation for a list of ids.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Weight for this vertical, in the (0.0, 1.0] range. More relevant
     * verticals have higher weights.
     *
     * Generated from protobuf field <code>float weight = 2;</code>
     */
    protected $weight = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *           The vertical id. See the publisher-verticals.txt file in the technical
     *           documentation for a list of ids.
     *     @type float $weight
     *           Weight for this vertical, in the (0.0, 1.0] range. More relevant
     *           verticals have higher weights.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The vertical id. See the publisher-verticals.txt file in the technical
     * documentation for a list of ids.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The vertical id. See the publisher-verticals.txt file in the technical
     * documentation for a list of ids.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Weight for this vertical, in the (0.0, 1.0] range. More relevant
     * verticals have higher weights.
     *
     * Generated from protobuf field <code>float weight = 2;</code>
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Weight for this vertical, in the (0.0, 1.0] range. More relevant
     * verticals have higher weights.
     *
     * Generated from protobuf field <code>float weight = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Vertical::class, \BidRequest_Vertical::class);

