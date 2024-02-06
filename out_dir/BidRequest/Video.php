<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the video if this is an in-video ad request.
 *
 * Generated from protobuf message <code>BidRequest.Video</code>
 */
class Video extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. This will be removed in January 2025 per the IAB here:
     * https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#list--placement-subtypes---video-
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.Placement placement = 16;</code>
     */
    protected $placement = null;
    /**
     * Video placement type for the impression.
     * Equivalent to the Video.plcmt field introduced in OpenRTB 2.6 to reflect
     * updated industry definitions around different types of video ad
     * placements. This field supersedes the Video.placement field.
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.Plcmt plcmt = 23;</code>
     */
    protected $plcmt = null;
    /**
     * The URL of the page that the publisher gives Google to describe the video
     * content, with parameters removed.
     *
     * Generated from protobuf field <code>optional string description_url = 10;</code>
     */
    protected $description_url = null;
    /**
     * If true, the video is embedded on a page outside the publisher's domain.
     * When this is set, description_url points to a description of the video
     * (as it always does), and the url field in BidRequest is the page in which
     * the video is embedded. For example, a request for an in-stream ad in a
     * Vimeo video shared on Facebook has is_embedded_offsite set. The url field
     * is for a Facebook page and the description_url points to the video on
     * Vimeo.
     *
     * Generated from protobuf field <code>optional bool is_embedded_offsite = 11;</code>
     */
    protected $is_embedded_offsite = null;
    /**
     *[default = METHOD_UNKNOWN];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.VideoPlaybackMethod playback_method = 14;</code>
     */
    protected $playback_method = null;
    /**
     * Whether the inventory allows clicking on the video ad to take the user to
     * an advertiser site. Some platforms, notably connected TVs, do not
     * support clicking on video ads, in which case this field is set to false.
     *
     * Generated from protobuf field <code>optional bool is_clickable = 15;</code>
     */
    protected $is_clickable = null;
    /**
     * The time in milliseconds from the start of the video when the ad will be
     * displayed. 0 means pre-roll and -1 means post-roll. The value is valid
     * only if this param is set. When not set, the display position is unknown.
     *
     * Generated from protobuf field <code>optional int32 videoad_start_delay = 1;</code>
     */
    protected $videoad_start_delay = null;
    /**
     * The maximum duration in milliseconds of the ad that you should return.
     * If this is not set or has value <= 0, any duration is allowed.
     *
     * Generated from protobuf field <code>optional int32 max_ad_duration = 2;</code>
     */
    protected $max_ad_duration = null;
    /**
     * The minimum duration in milliseconds of the ad that you should return.
     * If this is not set or has value <= 0, there is no minimum duration.
     *
     * Generated from protobuf field <code>optional int32 min_ad_duration = 8;</code>
     */
    protected $min_ad_duration = null;
    /**
     * The maximum number of ads in an Adx video pod. A non-zero value indicates
     * that the current ad slot is a video pod that can show multiple video
     * ads. Actual number of video ads shown can be less than or equal to this
     * value but cannot exceed it.
     *
     * Generated from protobuf field <code>optional int32 max_ads_in_pod = 12;</code>
     */
    protected $max_ads_in_pod = null;
    /**
     * The maximum duration of a pod in seconds.
     *
     * Generated from protobuf field <code>optional int32 max_pod_duration_seconds = 20;</code>
     */
    protected $max_pod_duration_seconds = null;
    /**
     *[default =ALLOW_SKIPPABLE];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.SkippableBidRequestType video_ad_skippable = 4;</code>
     */
    protected $video_ad_skippable = null;
    /**
     * The maximum duration in milliseconds for the ad you should return, if
     * this ad is skippable (this generally differs from the maximum duration
     * allowed for non-skippable ads). If this is not set or has value <= 0, any
     * duration is allowed.
     *
     * Generated from protobuf field <code>optional int32 skippable_max_ad_duration = 5;</code>
     */
    protected $skippable_max_ad_duration = null;
    /**
     * Array of supported video bid response protocols.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Video.VideoProtocol protocols = 17 [packed = true];</code>
     */
    private $protocols;
    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.VideoFormat allowed_video_formats = 6;</code>
     */
    private $allowed_video_formats;
    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.CompanionSlot companion_slot = 7;</code>
     */
    private $companion_slot;
    /**
     * [default = END_CAP_NOT_ENABLED];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.EndCapSupport end_cap_support = 13;</code>
     */
    protected $end_cap_support = null;
    /**
     * Generated from protobuf field <code>optional .BidRequest.Video.ContentAttributes content_attributes = 9;</code>
     */
    protected $content_attributes = null;
    /**
     * Identify whether or not the ad request is being served from a live video
     * stream (0 = is not live, 1 = is live).
     *
     * Generated from protobuf field <code>optional bool is_livestream = 18;</code>
     */
    protected $is_livestream = null;
    /**
     * [default =PLAYBACK_CESSATION_MODE_UNKNOWN];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.PlaybackCessationMode playback_cessation_mode = 19;</code>
     */
    protected $playback_cessation_mode = null;
    /**
     * Type of audio content feed where an audio ad can be played.
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.FeedType feed_type = 21;</code>
     */
    protected $feed_type = null;
    /**
     * Supported delivery methods for the video or audio content where an ad can
     * be shown.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Video.ContentDeliveryMethod delivery_method = 22 [packed = true];</code>
     */
    private $delivery_method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $placement
     *           Deprecated. This will be removed in January 2025 per the IAB here:
     *           https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#list--placement-subtypes---video-
     *     @type int $plcmt
     *           Video placement type for the impression.
     *           Equivalent to the Video.plcmt field introduced in OpenRTB 2.6 to reflect
     *           updated industry definitions around different types of video ad
     *           placements. This field supersedes the Video.placement field.
     *     @type string $description_url
     *           The URL of the page that the publisher gives Google to describe the video
     *           content, with parameters removed.
     *     @type bool $is_embedded_offsite
     *           If true, the video is embedded on a page outside the publisher's domain.
     *           When this is set, description_url points to a description of the video
     *           (as it always does), and the url field in BidRequest is the page in which
     *           the video is embedded. For example, a request for an in-stream ad in a
     *           Vimeo video shared on Facebook has is_embedded_offsite set. The url field
     *           is for a Facebook page and the description_url points to the video on
     *           Vimeo.
     *     @type int $playback_method
     *          [default = METHOD_UNKNOWN];
     *     @type bool $is_clickable
     *           Whether the inventory allows clicking on the video ad to take the user to
     *           an advertiser site. Some platforms, notably connected TVs, do not
     *           support clicking on video ads, in which case this field is set to false.
     *     @type int $videoad_start_delay
     *           The time in milliseconds from the start of the video when the ad will be
     *           displayed. 0 means pre-roll and -1 means post-roll. The value is valid
     *           only if this param is set. When not set, the display position is unknown.
     *     @type int $max_ad_duration
     *           The maximum duration in milliseconds of the ad that you should return.
     *           If this is not set or has value <= 0, any duration is allowed.
     *     @type int $min_ad_duration
     *           The minimum duration in milliseconds of the ad that you should return.
     *           If this is not set or has value <= 0, there is no minimum duration.
     *     @type int $max_ads_in_pod
     *           The maximum number of ads in an Adx video pod. A non-zero value indicates
     *           that the current ad slot is a video pod that can show multiple video
     *           ads. Actual number of video ads shown can be less than or equal to this
     *           value but cannot exceed it.
     *     @type int $max_pod_duration_seconds
     *           The maximum duration of a pod in seconds.
     *     @type int $video_ad_skippable
     *          [default =ALLOW_SKIPPABLE];
     *     @type int $skippable_max_ad_duration
     *           The maximum duration in milliseconds for the ad you should return, if
     *           this ad is skippable (this generally differs from the maximum duration
     *           allowed for non-skippable ads). If this is not set or has value <= 0, any
     *           duration is allowed.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $protocols
     *           Array of supported video bid response protocols.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowed_video_formats
     *     @type array<\BidRequest\Video\CompanionSlot>|\Google\Protobuf\Internal\RepeatedField $companion_slot
     *     @type int $end_cap_support
     *           [default = END_CAP_NOT_ENABLED];
     *     @type \BidRequest\Video\ContentAttributes $content_attributes
     *     @type bool $is_livestream
     *           Identify whether or not the ad request is being served from a live video
     *           stream (0 = is not live, 1 = is live).
     *     @type int $playback_cessation_mode
     *           [default =PLAYBACK_CESSATION_MODE_UNKNOWN];
     *     @type int $feed_type
     *           Type of audio content feed where an audio ad can be played.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $delivery_method
     *           Supported delivery methods for the video or audio content where an ad can
     *           be shown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RealtimeBidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. This will be removed in January 2025 per the IAB here:
     * https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#list--placement-subtypes---video-
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.Placement placement = 16;</code>
     * @return int
     */
    public function getPlacement()
    {
        return isset($this->placement) ? $this->placement : 0;
    }

    public function hasPlacement()
    {
        return isset($this->placement);
    }

    public function clearPlacement()
    {
        unset($this->placement);
    }

    /**
     * Deprecated. This will be removed in January 2025 per the IAB here:
     * https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/main/AdCOM%20v1.0%20FINAL.md#list--placement-subtypes---video-
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.Placement placement = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\Placement::class);
        $this->placement = $var;

        return $this;
    }

    /**
     * Video placement type for the impression.
     * Equivalent to the Video.plcmt field introduced in OpenRTB 2.6 to reflect
     * updated industry definitions around different types of video ad
     * placements. This field supersedes the Video.placement field.
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.Plcmt plcmt = 23;</code>
     * @return int
     */
    public function getPlcmt()
    {
        return isset($this->plcmt) ? $this->plcmt : 0;
    }

    public function hasPlcmt()
    {
        return isset($this->plcmt);
    }

    public function clearPlcmt()
    {
        unset($this->plcmt);
    }

    /**
     * Video placement type for the impression.
     * Equivalent to the Video.plcmt field introduced in OpenRTB 2.6 to reflect
     * updated industry definitions around different types of video ad
     * placements. This field supersedes the Video.placement field.
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.Plcmt plcmt = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setPlcmt($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\Plcmt::class);
        $this->plcmt = $var;

        return $this;
    }

    /**
     * The URL of the page that the publisher gives Google to describe the video
     * content, with parameters removed.
     *
     * Generated from protobuf field <code>optional string description_url = 10;</code>
     * @return string
     */
    public function getDescriptionUrl()
    {
        return isset($this->description_url) ? $this->description_url : '';
    }

    public function hasDescriptionUrl()
    {
        return isset($this->description_url);
    }

    public function clearDescriptionUrl()
    {
        unset($this->description_url);
    }

    /**
     * The URL of the page that the publisher gives Google to describe the video
     * content, with parameters removed.
     *
     * Generated from protobuf field <code>optional string description_url = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->description_url = $var;

        return $this;
    }

    /**
     * If true, the video is embedded on a page outside the publisher's domain.
     * When this is set, description_url points to a description of the video
     * (as it always does), and the url field in BidRequest is the page in which
     * the video is embedded. For example, a request for an in-stream ad in a
     * Vimeo video shared on Facebook has is_embedded_offsite set. The url field
     * is for a Facebook page and the description_url points to the video on
     * Vimeo.
     *
     * Generated from protobuf field <code>optional bool is_embedded_offsite = 11;</code>
     * @return bool
     */
    public function getIsEmbeddedOffsite()
    {
        return isset($this->is_embedded_offsite) ? $this->is_embedded_offsite : false;
    }

    public function hasIsEmbeddedOffsite()
    {
        return isset($this->is_embedded_offsite);
    }

    public function clearIsEmbeddedOffsite()
    {
        unset($this->is_embedded_offsite);
    }

    /**
     * If true, the video is embedded on a page outside the publisher's domain.
     * When this is set, description_url points to a description of the video
     * (as it always does), and the url field in BidRequest is the page in which
     * the video is embedded. For example, a request for an in-stream ad in a
     * Vimeo video shared on Facebook has is_embedded_offsite set. The url field
     * is for a Facebook page and the description_url points to the video on
     * Vimeo.
     *
     * Generated from protobuf field <code>optional bool is_embedded_offsite = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEmbeddedOffsite($var)
    {
        GPBUtil::checkBool($var);
        $this->is_embedded_offsite = $var;

        return $this;
    }

    /**
     *[default = METHOD_UNKNOWN];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.VideoPlaybackMethod playback_method = 14;</code>
     * @return int
     */
    public function getPlaybackMethod()
    {
        return isset($this->playback_method) ? $this->playback_method : 0;
    }

    public function hasPlaybackMethod()
    {
        return isset($this->playback_method);
    }

    public function clearPlaybackMethod()
    {
        unset($this->playback_method);
    }

    /**
     *[default = METHOD_UNKNOWN];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.VideoPlaybackMethod playback_method = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaybackMethod($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\VideoPlaybackMethod::class);
        $this->playback_method = $var;

        return $this;
    }

    /**
     * Whether the inventory allows clicking on the video ad to take the user to
     * an advertiser site. Some platforms, notably connected TVs, do not
     * support clicking on video ads, in which case this field is set to false.
     *
     * Generated from protobuf field <code>optional bool is_clickable = 15;</code>
     * @return bool
     */
    public function getIsClickable()
    {
        return isset($this->is_clickable) ? $this->is_clickable : false;
    }

    public function hasIsClickable()
    {
        return isset($this->is_clickable);
    }

    public function clearIsClickable()
    {
        unset($this->is_clickable);
    }

    /**
     * Whether the inventory allows clicking on the video ad to take the user to
     * an advertiser site. Some platforms, notably connected TVs, do not
     * support clicking on video ads, in which case this field is set to false.
     *
     * Generated from protobuf field <code>optional bool is_clickable = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsClickable($var)
    {
        GPBUtil::checkBool($var);
        $this->is_clickable = $var;

        return $this;
    }

    /**
     * The time in milliseconds from the start of the video when the ad will be
     * displayed. 0 means pre-roll and -1 means post-roll. The value is valid
     * only if this param is set. When not set, the display position is unknown.
     *
     * Generated from protobuf field <code>optional int32 videoad_start_delay = 1;</code>
     * @return int
     */
    public function getVideoadStartDelay()
    {
        return isset($this->videoad_start_delay) ? $this->videoad_start_delay : 0;
    }

    public function hasVideoadStartDelay()
    {
        return isset($this->videoad_start_delay);
    }

    public function clearVideoadStartDelay()
    {
        unset($this->videoad_start_delay);
    }

    /**
     * The time in milliseconds from the start of the video when the ad will be
     * displayed. 0 means pre-roll and -1 means post-roll. The value is valid
     * only if this param is set. When not set, the display position is unknown.
     *
     * Generated from protobuf field <code>optional int32 videoad_start_delay = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVideoadStartDelay($var)
    {
        GPBUtil::checkInt32($var);
        $this->videoad_start_delay = $var;

        return $this;
    }

    /**
     * The maximum duration in milliseconds of the ad that you should return.
     * If this is not set or has value <= 0, any duration is allowed.
     *
     * Generated from protobuf field <code>optional int32 max_ad_duration = 2;</code>
     * @return int
     */
    public function getMaxAdDuration()
    {
        return isset($this->max_ad_duration) ? $this->max_ad_duration : 0;
    }

    public function hasMaxAdDuration()
    {
        return isset($this->max_ad_duration);
    }

    public function clearMaxAdDuration()
    {
        unset($this->max_ad_duration);
    }

    /**
     * The maximum duration in milliseconds of the ad that you should return.
     * If this is not set or has value <= 0, any duration is allowed.
     *
     * Generated from protobuf field <code>optional int32 max_ad_duration = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxAdDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_ad_duration = $var;

        return $this;
    }

    /**
     * The minimum duration in milliseconds of the ad that you should return.
     * If this is not set or has value <= 0, there is no minimum duration.
     *
     * Generated from protobuf field <code>optional int32 min_ad_duration = 8;</code>
     * @return int
     */
    public function getMinAdDuration()
    {
        return isset($this->min_ad_duration) ? $this->min_ad_duration : 0;
    }

    public function hasMinAdDuration()
    {
        return isset($this->min_ad_duration);
    }

    public function clearMinAdDuration()
    {
        unset($this->min_ad_duration);
    }

    /**
     * The minimum duration in milliseconds of the ad that you should return.
     * If this is not set or has value <= 0, there is no minimum duration.
     *
     * Generated from protobuf field <code>optional int32 min_ad_duration = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMinAdDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_ad_duration = $var;

        return $this;
    }

    /**
     * The maximum number of ads in an Adx video pod. A non-zero value indicates
     * that the current ad slot is a video pod that can show multiple video
     * ads. Actual number of video ads shown can be less than or equal to this
     * value but cannot exceed it.
     *
     * Generated from protobuf field <code>optional int32 max_ads_in_pod = 12;</code>
     * @return int
     */
    public function getMaxAdsInPod()
    {
        return isset($this->max_ads_in_pod) ? $this->max_ads_in_pod : 0;
    }

    public function hasMaxAdsInPod()
    {
        return isset($this->max_ads_in_pod);
    }

    public function clearMaxAdsInPod()
    {
        unset($this->max_ads_in_pod);
    }

    /**
     * The maximum number of ads in an Adx video pod. A non-zero value indicates
     * that the current ad slot is a video pod that can show multiple video
     * ads. Actual number of video ads shown can be less than or equal to this
     * value but cannot exceed it.
     *
     * Generated from protobuf field <code>optional int32 max_ads_in_pod = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxAdsInPod($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_ads_in_pod = $var;

        return $this;
    }

    /**
     * The maximum duration of a pod in seconds.
     *
     * Generated from protobuf field <code>optional int32 max_pod_duration_seconds = 20;</code>
     * @return int
     */
    public function getMaxPodDurationSeconds()
    {
        return isset($this->max_pod_duration_seconds) ? $this->max_pod_duration_seconds : 0;
    }

    public function hasMaxPodDurationSeconds()
    {
        return isset($this->max_pod_duration_seconds);
    }

    public function clearMaxPodDurationSeconds()
    {
        unset($this->max_pod_duration_seconds);
    }

    /**
     * The maximum duration of a pod in seconds.
     *
     * Generated from protobuf field <code>optional int32 max_pod_duration_seconds = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPodDurationSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_pod_duration_seconds = $var;

        return $this;
    }

    /**
     *[default =ALLOW_SKIPPABLE];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.SkippableBidRequestType video_ad_skippable = 4;</code>
     * @return int
     */
    public function getVideoAdSkippable()
    {
        return isset($this->video_ad_skippable) ? $this->video_ad_skippable : 0;
    }

    public function hasVideoAdSkippable()
    {
        return isset($this->video_ad_skippable);
    }

    public function clearVideoAdSkippable()
    {
        unset($this->video_ad_skippable);
    }

    /**
     *[default =ALLOW_SKIPPABLE];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.SkippableBidRequestType video_ad_skippable = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setVideoAdSkippable($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\SkippableBidRequestType::class);
        $this->video_ad_skippable = $var;

        return $this;
    }

    /**
     * The maximum duration in milliseconds for the ad you should return, if
     * this ad is skippable (this generally differs from the maximum duration
     * allowed for non-skippable ads). If this is not set or has value <= 0, any
     * duration is allowed.
     *
     * Generated from protobuf field <code>optional int32 skippable_max_ad_duration = 5;</code>
     * @return int
     */
    public function getSkippableMaxAdDuration()
    {
        return isset($this->skippable_max_ad_duration) ? $this->skippable_max_ad_duration : 0;
    }

    public function hasSkippableMaxAdDuration()
    {
        return isset($this->skippable_max_ad_duration);
    }

    public function clearSkippableMaxAdDuration()
    {
        unset($this->skippable_max_ad_duration);
    }

    /**
     * The maximum duration in milliseconds for the ad you should return, if
     * this ad is skippable (this generally differs from the maximum duration
     * allowed for non-skippable ads). If this is not set or has value <= 0, any
     * duration is allowed.
     *
     * Generated from protobuf field <code>optional int32 skippable_max_ad_duration = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSkippableMaxAdDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->skippable_max_ad_duration = $var;

        return $this;
    }

    /**
     * Array of supported video bid response protocols.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Video.VideoProtocol protocols = 17 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * Array of supported video bid response protocols.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Video.VideoProtocol protocols = 17 [packed = true];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProtocols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \BidRequest\Video\VideoProtocol::class);
        $this->protocols = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.VideoFormat allowed_video_formats = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedVideoFormats()
    {
        return $this->allowed_video_formats;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.VideoFormat allowed_video_formats = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedVideoFormats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \BidRequest\Video\VideoFormat::class);
        $this->allowed_video_formats = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.CompanionSlot companion_slot = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompanionSlot()
    {
        return $this->companion_slot;
    }

    /**
     * Generated from protobuf field <code>repeated .BidRequest.Video.CompanionSlot companion_slot = 7;</code>
     * @param array<\BidRequest\Video\CompanionSlot>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompanionSlot($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BidRequest\Video\CompanionSlot::class);
        $this->companion_slot = $arr;

        return $this;
    }

    /**
     * [default = END_CAP_NOT_ENABLED];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.EndCapSupport end_cap_support = 13;</code>
     * @return int
     */
    public function getEndCapSupport()
    {
        return isset($this->end_cap_support) ? $this->end_cap_support : 0;
    }

    public function hasEndCapSupport()
    {
        return isset($this->end_cap_support);
    }

    public function clearEndCapSupport()
    {
        unset($this->end_cap_support);
    }

    /**
     * [default = END_CAP_NOT_ENABLED];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.EndCapSupport end_cap_support = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setEndCapSupport($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\EndCapSupport::class);
        $this->end_cap_support = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .BidRequest.Video.ContentAttributes content_attributes = 9;</code>
     * @return \BidRequest\Video\ContentAttributes|null
     */
    public function getContentAttributes()
    {
        return $this->content_attributes;
    }

    public function hasContentAttributes()
    {
        return isset($this->content_attributes);
    }

    public function clearContentAttributes()
    {
        unset($this->content_attributes);
    }

    /**
     * Generated from protobuf field <code>optional .BidRequest.Video.ContentAttributes content_attributes = 9;</code>
     * @param \BidRequest\Video\ContentAttributes $var
     * @return $this
     */
    public function setContentAttributes($var)
    {
        GPBUtil::checkMessage($var, \BidRequest\Video\ContentAttributes::class);
        $this->content_attributes = $var;

        return $this;
    }

    /**
     * Identify whether or not the ad request is being served from a live video
     * stream (0 = is not live, 1 = is live).
     *
     * Generated from protobuf field <code>optional bool is_livestream = 18;</code>
     * @return bool
     */
    public function getIsLivestream()
    {
        return isset($this->is_livestream) ? $this->is_livestream : false;
    }

    public function hasIsLivestream()
    {
        return isset($this->is_livestream);
    }

    public function clearIsLivestream()
    {
        unset($this->is_livestream);
    }

    /**
     * Identify whether or not the ad request is being served from a live video
     * stream (0 = is not live, 1 = is live).
     *
     * Generated from protobuf field <code>optional bool is_livestream = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLivestream($var)
    {
        GPBUtil::checkBool($var);
        $this->is_livestream = $var;

        return $this;
    }

    /**
     * [default =PLAYBACK_CESSATION_MODE_UNKNOWN];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.PlaybackCessationMode playback_cessation_mode = 19;</code>
     * @return int
     */
    public function getPlaybackCessationMode()
    {
        return isset($this->playback_cessation_mode) ? $this->playback_cessation_mode : 0;
    }

    public function hasPlaybackCessationMode()
    {
        return isset($this->playback_cessation_mode);
    }

    public function clearPlaybackCessationMode()
    {
        unset($this->playback_cessation_mode);
    }

    /**
     * [default =PLAYBACK_CESSATION_MODE_UNKNOWN];
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.PlaybackCessationMode playback_cessation_mode = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaybackCessationMode($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\PlaybackCessationMode::class);
        $this->playback_cessation_mode = $var;

        return $this;
    }

    /**
     * Type of audio content feed where an audio ad can be played.
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.FeedType feed_type = 21;</code>
     * @return int
     */
    public function getFeedType()
    {
        return isset($this->feed_type) ? $this->feed_type : 0;
    }

    public function hasFeedType()
    {
        return isset($this->feed_type);
    }

    public function clearFeedType()
    {
        unset($this->feed_type);
    }

    /**
     * Type of audio content feed where an audio ad can be played.
     *
     * Generated from protobuf field <code>optional .BidRequest.Video.FeedType feed_type = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setFeedType($var)
    {
        GPBUtil::checkEnum($var, \BidRequest\Video\FeedType::class);
        $this->feed_type = $var;

        return $this;
    }

    /**
     * Supported delivery methods for the video or audio content where an ad can
     * be shown.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Video.ContentDeliveryMethod delivery_method = 22 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeliveryMethod()
    {
        return $this->delivery_method;
    }

    /**
     * Supported delivery methods for the video or audio content where an ad can
     * be shown.
     *
     * Generated from protobuf field <code>repeated .BidRequest.Video.ContentDeliveryMethod delivery_method = 22 [packed = true];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeliveryMethod($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \BidRequest\Video\ContentDeliveryMethod::class);
        $this->delivery_method = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Video::class, \BidRequest_Video::class);
