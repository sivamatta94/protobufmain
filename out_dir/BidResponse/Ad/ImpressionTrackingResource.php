<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidResponse\Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BidResponse.Ad.ImpressionTrackingResource</code>
 */
class ImpressionTrackingResource extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of a Javascript resource. The URLs should not contain script
     * tags. For example: "https://mycdn.com/tracker.js".
     *
     * Generated from protobuf field <code>optional string script_url = 1;</code>
     */
    protected $script_url = null;
    /**
     * Generated from protobuf field <code>repeated .BidResponse.Ad.ImpressionTrackingResource.Context context = 2;</code>
     */
    private $context;
    /**
     * Parameters associated with the resource that will be passed to the
     * resource when it is loaded. The format of the parameters is dependent
     * on the script vendor.
     *
     * Generated from protobuf field <code>optional string verification_parameters = 3;</code>
     */
    protected $verification_parameters = null;
    /**
     * Used to uniquely identify the verification script provider.
     *
     * Generated from protobuf field <code>optional string vendor_key = 4;</code>
     */
    protected $vendor_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $script_url
     *           The URL of a Javascript resource. The URLs should not contain script
     *           tags. For example: "https://mycdn.com/tracker.js".
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $context
     *     @type string $verification_parameters
     *           Parameters associated with the resource that will be passed to the
     *           resource when it is loaded. The format of the parameters is dependent
     *           on the script vendor.
     *     @type string $vendor_key
     *           Used to uniquely identify the verification script provider.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of a Javascript resource. The URLs should not contain script
     * tags. For example: "https://mycdn.com/tracker.js".
     *
     * Generated from protobuf field <code>optional string script_url = 1;</code>
     * @return string
     */
    public function getScriptUrl()
    {
        return isset($this->script_url) ? $this->script_url : '';
    }

    public function hasScriptUrl()
    {
        return isset($this->script_url);
    }

    public function clearScriptUrl()
    {
        unset($this->script_url);
    }

    /**
     * The URL of a Javascript resource. The URLs should not contain script
     * tags. For example: "https://mycdn.com/tracker.js".
     *
     * Generated from protobuf field <code>optional string script_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScriptUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->script_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BidResponse.Ad.ImpressionTrackingResource.Context context = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Generated from protobuf field <code>repeated .BidResponse.Ad.ImpressionTrackingResource.Context context = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContext($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \BidResponse\Ad\ImpressionTrackingResource\Context::class);
        $this->context = $arr;

        return $this;
    }

    /**
     * Parameters associated with the resource that will be passed to the
     * resource when it is loaded. The format of the parameters is dependent
     * on the script vendor.
     *
     * Generated from protobuf field <code>optional string verification_parameters = 3;</code>
     * @return string
     */
    public function getVerificationParameters()
    {
        return isset($this->verification_parameters) ? $this->verification_parameters : '';
    }

    public function hasVerificationParameters()
    {
        return isset($this->verification_parameters);
    }

    public function clearVerificationParameters()
    {
        unset($this->verification_parameters);
    }

    /**
     * Parameters associated with the resource that will be passed to the
     * resource when it is loaded. The format of the parameters is dependent
     * on the script vendor.
     *
     * Generated from protobuf field <code>optional string verification_parameters = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVerificationParameters($var)
    {
        GPBUtil::checkString($var, True);
        $this->verification_parameters = $var;

        return $this;
    }

    /**
     * Used to uniquely identify the verification script provider.
     *
     * Generated from protobuf field <code>optional string vendor_key = 4;</code>
     * @return string
     */
    public function getVendorKey()
    {
        return isset($this->vendor_key) ? $this->vendor_key : '';
    }

    public function hasVendorKey()
    {
        return isset($this->vendor_key);
    }

    public function clearVendorKey()
    {
        unset($this->vendor_key);
    }

    /**
     * Used to uniquely identify the verification script provider.
     *
     * Generated from protobuf field <code>optional string vendor_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVendorKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->vendor_key = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImpressionTrackingResource::class, \BidResponse_Ad_ImpressionTrackingResource::class);
