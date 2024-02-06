<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest;

use UnexpectedValueException;

/**
 * The set of possible web navigation types that predicate a page load. Each
 * of these types may have different performance characteristics. For example,
 * users going back and forth might experience a faster site than users
 * performing navigation for the first time or submitting forms. See
 * https://w3c.github.io/navigation-timing/#dom-performancenavigationtiming-type.
 *
 * Protobuf type <code>BidRequest.NavigationType</code>
 */
class NavigationType
{
    /**
     * Generated from protobuf enum <code>NAVIGATION_TYPE_UNKNOWN = 0;</code>
     */
    const NAVIGATION_TYPE_UNKNOWN = 0;
    /**
     * Navigation started by clicking a link, entering the URL in the browser's
     * address bar, form submission, or initializing through a script operation
     * other than reload and back_forward.
     *
     * Generated from protobuf enum <code>NAVIGATION_TYPE_NAVIGATE = 1;</code>
     */
    const NAVIGATION_TYPE_NAVIGATE = 1;
    /**
     * Navigation is through the browser's reload operation, location.reload(),
     * or a Refresh pragma directive like
     * <meta http-equiv="refresh" content="300">.
     *
     * Generated from protobuf enum <code>NAVIGATION_TYPE_RELOAD = 2;</code>
     */
    const NAVIGATION_TYPE_RELOAD = 2;
    /**
     * Navigation is through the browser's history traversal operation.
     *
     * Generated from protobuf enum <code>NAVIGATION_TYPE_BACK_FORWARD = 3;</code>
     */
    const NAVIGATION_TYPE_BACK_FORWARD = 3;
    /**
     * Navigation is initiated by a prerender hint (deprecated). See
     * https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/prerender.
     *
     * Generated from protobuf enum <code>NAVIGATION_TYPE_PRERENDER = 4;</code>
     */
    const NAVIGATION_TYPE_PRERENDER = 4;

    private static $valueToName = [
        self::NAVIGATION_TYPE_UNKNOWN => 'NAVIGATION_TYPE_UNKNOWN',
        self::NAVIGATION_TYPE_NAVIGATE => 'NAVIGATION_TYPE_NAVIGATE',
        self::NAVIGATION_TYPE_RELOAD => 'NAVIGATION_TYPE_RELOAD',
        self::NAVIGATION_TYPE_BACK_FORWARD => 'NAVIGATION_TYPE_BACK_FORWARD',
        self::NAVIGATION_TYPE_PRERENDER => 'NAVIGATION_TYPE_PRERENDER',
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
class_alias(NavigationType::class, \BidRequest_NavigationType::class);

