<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Video;

use UnexpectedValueException;

/**
 * Describes where the video ad will play.
 *
 * Protobuf type <code>BidRequest.Video.Placement</code>
 */
class Placement
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_PLACEMENT = 0;</code>
     */
    const UNKNOWN_PLACEMENT = 0;
    /**
     * Instream means the ad plays before, during, or after other video
     * content. This is similar to a traditional TV commercial. The video
     * content the user is watching does not play while the ad is playing.
     *
     * Generated from protobuf enum <code>INSTREAM = 1;</code>
     */
    const INSTREAM = 1;
    /**
     * Interstitial means the video ad plays in front of non-video content,
     * (for example, a news article or video game). The ad covers all or
     * nearly all of the space on the screen occupied by the content and the
     * user is not able to proceed to the content until the ad has finished or
     * been skipped.
     *
     * Generated from protobuf enum <code>INTERSTITIAL = 2;</code>
     */
    const INTERSTITIAL = 2;
    /**
     * The in-feed video format is a video creative that shows within a feed
     * of content, typically a social app feed, a list of editorial content
     * items, etc, as the user is scrolling. It renders centered and not to
     * the side.
     *
     * Generated from protobuf enum <code>IN_FEED = 3;</code>
     */
    const IN_FEED = 3;
    /**
     * Audio is a request for an ad that is an audio stream. It is distinct
     * from INSTREAM above as that is exclusive to video requests.
     *
     * Generated from protobuf enum <code>AUDIO = 4;</code>
     */
    const AUDIO = 4;
    /**
     * The in-article video format is a video creative that loads and plays
     * between paragraphs of editorial content as a standalone video player.
     *
     * Generated from protobuf enum <code>IN_ARTICLE = 5;</code>
     */
    const IN_ARTICLE = 5;

    private static $valueToName = [
        self::UNKNOWN_PLACEMENT => 'UNKNOWN_PLACEMENT',
        self::INSTREAM => 'INSTREAM',
        self::INTERSTITIAL => 'INTERSTITIAL',
        self::IN_FEED => 'IN_FEED',
        self::AUDIO => 'AUDIO',
        self::IN_ARTICLE => 'IN_ARTICLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Placement::class, \BidRequest_Video_Placement::class);

