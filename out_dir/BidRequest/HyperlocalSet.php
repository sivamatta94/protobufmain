<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BidRequest.HyperlocalSet</code>
 */
class HyperlocalSet extends \Google\Protobuf\Internal\Message
{
    /**
     * This field currently contains at most one hyperlocal polygon.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Hyperlocal hyperlocal = 1;</code>
     */
    private $hyperlocal;
    /**
     * The approximate geometric center of a geofence area. It is calculated
     * exclusively based on the geometric shape of the geofence area and in no
     * way indicates the mobile device's actual location within the geofence
     * area. If multiple hyperlocal polygons are specified above then
     * center_point is the geometric center of all hyperlocal polygons.
     *
     * Generated from protobuf field <code>optional .BidRequest.Hyperlocal.Point center_point = 2;</code>
     */
    protected $center_point = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BidRequest\Hyperlocal>|\Google\Protobuf\Internal\RepeatedField $hyperlocal
     *           This field currently contains at most one hyperlocal polygon.
     *     @type \BidRequest\Hyperlocal\Point $center_point
     *           The approximate geometric center of a geofence area. It is calculated
     *           exclusively based on the geometric shape of the geofence area and in no
     *           way indicates the mobile device's actual location within the geofence
     *           area. If multiple hyperlocal polygons are specified above then
     *           center_point is the geometric center of all hyperlocal polygons.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * This field currently contains at most one hyperlocal polygon.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Hyperlocal hyperlocal = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHyperlocal()
    {
        return $this->hyperlocal;
    }

    /**
     * This field currently contains at most one hyperlocal polygon.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Hyperlocal hyperlocal = 1;</code>
     * @param array<\BidRequest\Hyperlocal>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHyperlocal($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BidRequest\Hyperlocal::class);
        $this->hyperlocal = $arr;

        return $this;
    }

    /**
     * The approximate geometric center of a geofence area. It is calculated
     * exclusively based on the geometric shape of the geofence area and in no
     * way indicates the mobile device's actual location within the geofence
     * area. If multiple hyperlocal polygons are specified above then
     * center_point is the geometric center of all hyperlocal polygons.
     *
     * Generated from protobuf field <code>optional .BidRequest.Hyperlocal.Point center_point = 2;</code>
     * @return \BidRequest\Hyperlocal\Point|null
     */
    public function getCenterPoint()
    {
        return $this->center_point;
    }

    public function hasCenterPoint()
    {
        return isset($this->center_point);
    }

    public function clearCenterPoint()
    {
        unset($this->center_point);
    }

    /**
     * The approximate geometric center of a geofence area. It is calculated
     * exclusively based on the geometric shape of the geofence area and in no
     * way indicates the mobile device's actual location within the geofence
     * area. If multiple hyperlocal polygons are specified above then
     * center_point is the geometric center of all hyperlocal polygons.
     *
     * Generated from protobuf field <code>optional .BidRequest.Hyperlocal.Point center_point = 2;</code>
     * @param \BidRequest\Hyperlocal\Point $var
     * @return $this
     */
    public function setCenterPoint($var)
    {
        GPBUtil::checkMessage($var, \BidRequest\Hyperlocal\Point::class);
        $this->center_point = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HyperlocalSet::class, \BidRequest_HyperlocalSet::class);

