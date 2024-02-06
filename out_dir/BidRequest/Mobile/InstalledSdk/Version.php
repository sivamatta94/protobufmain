<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Mobile\InstalledSdk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Semantic version of the installed SDK and the adapter that communicates
 * between the installed SDK and Google's SDK.
 *
 * Generated from protobuf message <code>BidRequest.Mobile.InstalledSdk.Version</code>
 */
class Version extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional int32 major = 1;</code>
     */
    protected $major = null;
    /**
     *[default = -1];
     *
     * Generated from protobuf field <code>optional int32 minor = 2;</code>
     */
    protected $minor = null;
    /**
     * [default = -1];
     *
     * Generated from protobuf field <code>optional int32 micro = 3;</code>
     */
    protected $micro = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $major
     *     @type int $minor
     *          [default = -1];
     *     @type int $micro
     *           [default = -1];
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional int32 major = 1;</code>
     * @return int
     */
    public function getMajor()
    {
        return isset($this->major) ? $this->major : 0;
    }

    public function hasMajor()
    {
        return isset($this->major);
    }

    public function clearMajor()
    {
        unset($this->major);
    }

    /**
     * Generated from protobuf field <code>optional int32 major = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMajor($var)
    {
        GPBUtil::checkInt32($var);
        $this->major = $var;

        return $this;
    }

    /**
     *[default = -1];
     *
     * Generated from protobuf field <code>optional int32 minor = 2;</code>
     * @return int
     */
    public function getMinor()
    {
        return isset($this->minor) ? $this->minor : 0;
    }

    public function hasMinor()
    {
        return isset($this->minor);
    }

    public function clearMinor()
    {
        unset($this->minor);
    }

    /**
     *[default = -1];
     *
     * Generated from protobuf field <code>optional int32 minor = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinor($var)
    {
        GPBUtil::checkInt32($var);
        $this->minor = $var;

        return $this;
    }

    /**
     * [default = -1];
     *
     * Generated from protobuf field <code>optional int32 micro = 3;</code>
     * @return int
     */
    public function getMicro()
    {
        return isset($this->micro) ? $this->micro : 0;
    }

    public function hasMicro()
    {
        return isset($this->micro);
    }

    public function clearMicro()
    {
        unset($this->micro);
    }

    /**
     * [default = -1];
     *
     * Generated from protobuf field <code>optional int32 micro = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMicro($var)
    {
        GPBUtil::checkInt32($var);
        $this->micro = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Version::class, \BidRequest_Mobile_InstalledSdk_Version::class);

