<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Publisher first-party identifier scoped to a single site, app or vendor.
 *
 * Generated from protobuf message <code>BidRequest.PublisherFirstPartyId</code>
 */
class PublisherFirstPartyId extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the ID. This specifies how it is scoped and the type of
     * requests it is used with.
     *
     * Generated from protobuf field <code>optional .BidRequest.PublisherFirstPartyId.IdType id_type = 1;</code>
     */
    protected $id_type = null;
    /**
     * The value of the ID.
     *
     * Generated from protobuf field <code>optional string id = 2;</code>
     */
    protected $id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id_type
     *           The type of the ID. This specifies how it is scoped and the type of
     *           requests it is used with.
     *     @type string $id
     *           The value of the ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the ID. This specifies how it is scoped and the type of
     * requests it is used with.
     *
     * Generated from protobuf field <code>optional .BidRequest.PublisherFirstPartyId.IdType id_type = 1;</code>
     * @return int
     */
    public function getIdType()
    {
        return isset($this->id_type) ? $this->id_type : 0;
    }

    public function hasIdType()
    {
        return isset($this->id_type);
    }

    public function clearIdType()
    {
        unset($this->id_type);
    }

    /**
     * The type of the ID. This specifies how it is scoped and the type of
     * requests it is used with.
     *
     * Generated from protobuf field <code>optional .BidRequest.PublisherFirstPartyId.IdType id_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIdType($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\PublisherFirstPartyId\IdType::class);
        $this->id_type = $var;

        return $this;
    }

    /**
     * The value of the ID.
     *
     * Generated from protobuf field <code>optional string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * The value of the ID.
     *
     * Generated from protobuf field <code>optional string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublisherFirstPartyId::class, \BidRequest_PublisherFirstPartyId::class);

