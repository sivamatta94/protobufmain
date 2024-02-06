<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: realtime-bidding.proto

namespace BidRequest\AdSlot\MatchingAdData\DirectDeal;

use UnexpectedValueException;

/**
 * The type of the deal. Note that Authorized Buyers policy overrides
 * apply to all Programmatic Guaranteed and Preferred Deal bids, and do
 * not apply to bids for other deal types.
 *
 * Protobuf type <code>BidRequest.AdSlot.MatchingAdData.DirectDeal.DealType</code>
 */
class DealType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_DEAL_TYPE = 0;</code>
     */
    const UNKNOWN_DEAL_TYPE = 0;
    /**
     * Bids are fixed-price and evaluated before the Open Auction. Bidders
     * are not required to bid with Preferred Deals when they are present
     * on the bid request. See
     * https://support.google.com/authorizedbuyers/answer/2604595 for more
     * information.
     *
     * Generated from protobuf enum <code>PREFERRED_DEAL = 1;</code>
     */
    const PREFERRED_DEAL = 1;
    /**
     * Bids participate in a Private Auction against a select list of
     * buyers with specific floors. See
     * https://support.google.com/authorizedbuyers/answer/2839853 for more
     * information.
     *
     * Generated from protobuf enum <code>PRIVATE_AUCTION = 2;</code>
     */
    const PRIVATE_AUCTION = 2;
    /**
     * Bids are fixed-price and evaluated before the Open Auction. Bidders
     * are expected to bid with Programmatic Guaranteed deals whenever
     * they are present on a bid request in order to ensure that the
     * number of impressions agreed upon for a given deal are served. See
     * https://support.google.com/authorizedbuyers/answer/7174589 for more
     * information.
     *
     * Generated from protobuf enum <code>PROGRAMMATIC_GUARANTEED = 3;</code>
     */
    const PROGRAMMATIC_GUARANTEED = 3;
    /**
     * The deal ID is an identifier for a collection of Open Auction
     * inventory matching a given set of targeting criteria. See
     * https://support.google.com/authorizedbuyers/answer/7516884 for more
     * information.
     *
     * Generated from protobuf enum <code>AUCTION_PACKAGE = 4;</code>
     */
    const AUCTION_PACKAGE = 4;
    /**
     * Package of inventory that a publisher makes available to either all
     * buyers or selected bidders. Bids participate in auction in the same
     * way as private auction candidates. See
     * https://support.google.com/authorizedbuyers/answer/12817370 for
     * more information.
     *
     * Generated from protobuf enum <code>MARKETPLACE_PACKAGE = 5;</code>
     */
    const MARKETPLACE_PACKAGE = 5;

    private static $valueToName = [
        self::UNKNOWN_DEAL_TYPE => 'UNKNOWN_DEAL_TYPE',
        self::PREFERRED_DEAL => 'PREFERRED_DEAL',
        self::PRIVATE_AUCTION => 'PRIVATE_AUCTION',
        self::PROGRAMMATIC_GUARANTEED => 'PROGRAMMATIC_GUARANTEED',
        self::AUCTION_PACKAGE => 'AUCTION_PACKAGE',
        self::MARKETPLACE_PACKAGE => 'MARKETPLACE_PACKAGE',
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
class_alias(DealType::class, \BidRequest_AdSlot_MatchingAdData_DirectDeal_DealType::class);

