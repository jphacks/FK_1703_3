<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/distribution.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Distribution may optionally contain a histogram of the values in the
 * population.  The histogram is given in `bucket_counts` as counts of values
 * that fall into one of a sequence of non-overlapping buckets.  The sequence
 * of buckets is described by `bucket_options`.
 * A bucket specifies an inclusive lower bound and exclusive upper bound for
 * the values that are counted for that bucket.  The upper bound of a bucket
 * is strictly greater than the lower bound.
 * The sequence of N buckets for a Distribution consists of an underflow
 * bucket (number 0), zero or more finite buckets (number 1 through N - 2) and
 * an overflow bucket (number N - 1).  The buckets are contiguous:  the lower
 * bound of bucket i (i > 0) is the same as the upper bound of bucket i - 1.
 * The buckets span the whole range of finite values: lower bound of the
 * underflow bucket is -infinity and the upper bound of the overflow bucket is
 * +infinity.  The finite buckets are so-called because both bounds are
 * finite.
 * `BucketOptions` describes bucket boundaries in one of three ways.  Two
 * describe the boundaries by giving parameters for a formula to generate
 * boundaries and one gives the bucket boundaries explicitly.
 * If `bucket_boundaries` is not given, then no `bucket_counts` may be given.
 *
 * Protobuf type <code>Google\Api\Distribution\BucketOptions</code>
 */
class Distribution_BucketOptions extends \Google\Protobuf\Internal\Message
{
    protected $options;

    public function __construct() {
        \GPBMetadata\Google\Api\Distribution::initOnce();
        parent::__construct();
    }

    /**
     * The linear bucket.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions.Linear linear_buckets = 1;</code>
     * @return \Google\Api\Distribution_BucketOptions_Linear
     */
    public function getLinearBuckets()
    {
        return $this->readOneof(1);
    }

    /**
     * The linear bucket.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions.Linear linear_buckets = 1;</code>
     * @param \Google\Api\Distribution_BucketOptions_Linear $var
     */
    public function setLinearBuckets(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Distribution_BucketOptions_Linear::class);
        $this->writeOneof(1, $var);
    }

    /**
     * The exponential buckets.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions.Exponential exponential_buckets = 2;</code>
     * @return \Google\Api\Distribution_BucketOptions_Exponential
     */
    public function getExponentialBuckets()
    {
        return $this->readOneof(2);
    }

    /**
     * The exponential buckets.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions.Exponential exponential_buckets = 2;</code>
     * @param \Google\Api\Distribution_BucketOptions_Exponential $var
     */
    public function setExponentialBuckets(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Distribution_BucketOptions_Exponential::class);
        $this->writeOneof(2, $var);
    }

    /**
     * The explicit buckets.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions.Explicit explicit_buckets = 3;</code>
     * @return \Google\Api\Distribution_BucketOptions_Explicit
     */
    public function getExplicitBuckets()
    {
        return $this->readOneof(3);
    }

    /**
     * The explicit buckets.
     *
     * Generated from protobuf field <code>.google.api.Distribution.BucketOptions.Explicit explicit_buckets = 3;</code>
     * @param \Google\Api\Distribution_BucketOptions_Explicit $var
     */
    public function setExplicitBuckets(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Distribution_BucketOptions_Explicit::class);
        $this->writeOneof(3, $var);
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->whichOneof("options");
    }

}

