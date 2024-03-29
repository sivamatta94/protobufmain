<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\Video;

use UnexpectedValueException;

/**
 * Possible video placement types. See:
 * https://github.com/InteractiveAdvertisingBureau/AdCOM/blob/master/AdCOM%20v1.0%20FINAL.md#list--plcmt-subtypes---video-
 *
 * Protobuf type <code>BidRequest.Video.Plcmt</code>
 */
class Plcmt
{
    /**
     * Generated from protobuf enum <code>PLCMT_UNKNOWN = 0;</code>
     */
    const PLCMT_UNKNOWN = 0;
    /**
     * Pre-roll, mid-roll, and post-roll ads that are played before, during or
     * after the streaming video content that the consumer has requested.
     * Instream video must be set to “sound on” by default at player start, or
     * have explicitly clear user intent to watch the video content. While
     * there may be other content surrounding the player, the video content
     * must be the focus of the user’s visit. It should remain the primary
     * content on the page and the only video player in-view capable of audio
     * when playing. If the player converts to floating/sticky, subsequent ad
     * calls should accurately convey the updated player size.
     *
     * Generated from protobuf enum <code>PLCMT_INSTREAM = 1;</code>
     */
    const PLCMT_INSTREAM = 1;
    /**
     * Pre-roll, mid-roll, and post-roll ads that are played before, during,
     * or after streaming video content. The video player loads and plays
     * before, between, or after paragraphs of text or graphical content, and
     * starts playing only when it enters the viewport. Accompanying content
     * should only start playback upon entering the viewport. It may convert
     * to a floating/sticky player as it scrolls off the page.
     *
     * Generated from protobuf enum <code>PLCMT_ACCOMPANYING_CONTENT = 2;</code>
     */
    const PLCMT_ACCOMPANYING_CONTENT = 2;
    /**
     * Video ads that are played without video content. During playback, it
     * must be the primary focus of the page and take up the majority of the
     * viewport and cannot be scrolled out of view. This can be in placements
     * like in-app video or slideshows.
     *
     * Generated from protobuf enum <code>PLCMT_INTERSTITIAL = 3;</code>
     */
    const PLCMT_INTERSTITIAL = 3;
    /**
     * Video ads that are played without streaming video content. This can be
     * in placements like slideshows, native feeds, in-content or
     * sticky/floating.
     *
     * Generated from protobuf enum <code>PLCMT_NO_CONTENT_STANDALONE = 4;</code>
     */
    const PLCMT_NO_CONTENT_STANDALONE = 4;

    private static $valueToName = [
        self::PLCMT_UNKNOWN => 'PLCMT_UNKNOWN',
        self::PLCMT_INSTREAM => 'PLCMT_INSTREAM',
        self::PLCMT_ACCOMPANYING_CONTENT => 'PLCMT_ACCOMPANYING_CONTENT',
        self::PLCMT_INTERSTITIAL => 'PLCMT_INTERSTITIAL',
        self::PLCMT_NO_CONTENT_STANDALONE => 'PLCMT_NO_CONTENT_STANDALONE',
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
class_alias(Plcmt::class, \BidRequest_Video_Plcmt::class);

