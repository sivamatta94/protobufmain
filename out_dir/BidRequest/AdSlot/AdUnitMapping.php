<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AdUnitMapping is used to identify publisher inventory units in the
 * bidder's namespace. The mappings are only populated when
 * the bidder works directly with a publisher, and provides the mapping
 * from Google's ad unit namespace to the bidder's inventory namespace.
 * The ad unit mapping is only applicable for requests that use a custom
 * SDK. https://support.google.com/admanager/answer/9601810.
 *
 * Generated from protobuf message <code>BidRequest.AdSlot.AdUnitMapping</code>
 */
class AdUnitMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Multiple key-value pairs can be specified in order to support
     * bidders whose inventory unit space is hierarchical and has multiple
     * identifiers. The key-value pairs for the chosen AdUnitMapping should be
     * sent back in the bid response as
     * BidResponse.ad.sdk_rendered_ad.sdk_params. This is passed to the
     * bidder's SDK.
     *
     * Generated from protobuf field <code>repeated .BidRequest.AdSlot.AdUnitMapping.Keyval keyvals = 1;</code>
     */
    private $keyvals;
    /**
     * The mappings are targeted through a format, which is expressed in the
     * Google-defined taxonomy. Format is populated in the bid request since
     * Google supports targeting multiple formats with a single ad
     * unit, and Google's definition of the format may not match the bidder's
     * definition. In order for the bidder to differentiate which format
     * matched, it is sent in the bid request.
     *
     * Generated from protobuf field <code>optional .BidRequest.AdSlot.AdUnitMapping.FormatType format = 2;</code>
     */
    protected $format = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BidRequest\AdSlot\AdUnitMapping\Keyval>|\Google\Protobuf\Internal\RepeatedField $keyvals
     *           Multiple key-value pairs can be specified in order to support
     *           bidders whose inventory unit space is hierarchical and has multiple
     *           identifiers. The key-value pairs for the chosen AdUnitMapping should be
     *           sent back in the bid response as
     *           BidResponse.ad.sdk_rendered_ad.sdk_params. This is passed to the
     *           bidder's SDK.
     *     @type int $format
     *           The mappings are targeted through a format, which is expressed in the
     *           Google-defined taxonomy. Format is populated in the bid request since
     *           Google supports targeting multiple formats with a single ad
     *           unit, and Google's definition of the format may not match the bidder's
     *           definition. In order for the bidder to differentiate which format
     *           matched, it is sent in the bid request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Multiple key-value pairs can be specified in order to support
     * bidders whose inventory unit space is hierarchical and has multiple
     * identifiers. The key-value pairs for the chosen AdUnitMapping should be
     * sent back in the bid response as
     * BidResponse.ad.sdk_rendered_ad.sdk_params. This is passed to the
     * bidder's SDK.
     *
     * Generated from protobuf field <code>repeated .BidRequest.AdSlot.AdUnitMapping.Keyval keyvals = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyvals()
    {
        return $this->keyvals;
    }

    /**
     * Multiple key-value pairs can be specified in order to support
     * bidders whose inventory unit space is hierarchical and has multiple
     * identifiers. The key-value pairs for the chosen AdUnitMapping should be
     * sent back in the bid response as
     * BidResponse.ad.sdk_rendered_ad.sdk_params. This is passed to the
     * bidder's SDK.
     *
     * Generated from protobuf field <code>repeated .BidRequest.AdSlot.AdUnitMapping.Keyval keyvals = 1;</code>
     * @param array<\BidRequest\AdSlot\AdUnitMapping\Keyval>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyvals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BidRequest\AdSlot\AdUnitMapping\Keyval::class);
        $this->keyvals = $arr;

        return $this;
    }

    /**
     * The mappings are targeted through a format, which is expressed in the
     * Google-defined taxonomy. Format is populated in the bid request since
     * Google supports targeting multiple formats with a single ad
     * unit, and Google's definition of the format may not match the bidder's
     * definition. In order for the bidder to differentiate which format
     * matched, it is sent in the bid request.
     *
     * Generated from protobuf field <code>optional .BidRequest.AdSlot.AdUnitMapping.FormatType format = 2;</code>
     * @return int
     */
    public function getFormat()
    {
        return isset($this->format) ? $this->format : 0;
    }

    public function hasFormat()
    {
        return isset($this->format);
    }

    public function clearFormat()
    {
        unset($this->format);
    }

    /**
     * The mappings are targeted through a format, which is expressed in the
     * Google-defined taxonomy. Format is populated in the bid request since
     * Google supports targeting multiple formats with a single ad
     * unit, and Google's definition of the format may not match the bidder's
     * definition. In order for the bidder to differentiate which format
     * matched, it is sent in the bid request.
     *
     * Generated from protobuf field <code>optional .BidRequest.AdSlot.AdUnitMapping.FormatType format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\AdSlot\AdUnitMapping\FormatType::class);
        $this->format = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdUnitMapping::class, \BidRequest_AdSlot_AdUnitMapping::class);

