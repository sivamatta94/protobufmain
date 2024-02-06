<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Video;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Attributes of the video that the user is viewing, not the video ad.
 * These fields are based on the availability of the video metadata from the
 * video publisher and may not always be populated.
 *
 * Generated from protobuf message <code>BidRequest.Video.ContentAttributes</code>
 */
class ContentAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The duration of the video, in seconds.
     *
     * Generated from protobuf field <code>optional int32 duration_seconds = 2;</code>
     */
    protected $duration_seconds = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $duration_seconds
     *           The duration of the video, in seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The duration of the video, in seconds.
     *
     * Generated from protobuf field <code>optional int32 duration_seconds = 2;</code>
     * @return int
     */
    public function getDurationSeconds()
    {
        return isset($this->duration_seconds) ? $this->duration_seconds : 0;
    }

    public function hasDurationSeconds()
    {
        return isset($this->duration_seconds);
    }

    public function clearDurationSeconds()
    {
        unset($this->duration_seconds);
    }

    /**
     * The duration of the video, in seconds.
     *
     * Generated from protobuf field <code>optional int32 duration_seconds = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDurationSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->duration_seconds = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContentAttributes::class, \BidRequest_Video_ContentAttributes::class);

