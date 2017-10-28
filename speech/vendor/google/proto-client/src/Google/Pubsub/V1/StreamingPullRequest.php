<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `StreamingPull` streaming RPC method. This request is used to
 * establish the initial stream as well as to stream acknowledgements and ack
 * deadline modifications from the client to the server.
 *
 * Generated from protobuf message <code>google.pubsub.v1.StreamingPullRequest</code>
 */
class StreamingPullRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The subscription for which to initialize the new stream. This must be
     * provided in the first request on the stream, and must not be set in
     * subsequent requests from client to server.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * List of acknowledgement IDs for acknowledging previously received messages
     * (received on this stream or a different stream). If an ack ID has expired,
     * the corresponding message may be redelivered later. Acknowledging a message
     * more than once will not result in an error. If the acknowledgement ID is
     * malformed, the stream will be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2;</code>
     */
    private $ack_ids;
    /**
     * The list of new ack deadlines for the IDs listed in
     * `modify_deadline_ack_ids`. The size of this list must be the same as the
     * size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     * with `INVALID_ARGUMENT`. Each element in this list is applied to the
     * element in the same position in `modify_deadline_ack_ids`. The new ack
     * deadline is with respect to the time this request was sent to the Pub/Sub
     * system. Must be >= 0. For example, if the value is 10, the new ack deadline
     * will expire 10 seconds after this request is received. If the value is 0,
     * the message is immediately made available for another streaming or
     * non-streaming pull request. If the value is < 0 (an error), the stream will
     * be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated int32 modify_deadline_seconds = 3;</code>
     */
    private $modify_deadline_seconds;
    /**
     * List of acknowledgement IDs whose deadline will be modified based on the
     * corresponding element in `modify_deadline_seconds`. This field can be used
     * to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted.
     *
     * Generated from protobuf field <code>repeated string modify_deadline_ack_ids = 4;</code>
     */
    private $modify_deadline_ack_ids;
    /**
     * The ack deadline to use for the stream. This must be provided in the
     * first request on the stream, but it can also be updated on subsequent
     * requests from client to server. The minimum deadline you can specify is 10
     * seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 stream_ack_deadline_seconds = 5;</code>
     */
    private $stream_ack_deadline_seconds = 0;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The subscription for which to initialize the new stream. This must be
     * provided in the first request on the stream, and must not be set in
     * subsequent requests from client to server.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The subscription for which to initialize the new stream. This must be
     * provided in the first request on the stream, and must not be set in
     * subsequent requests from client to server.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;
    }

    /**
     * List of acknowledgement IDs for acknowledging previously received messages
     * (received on this stream or a different stream). If an ack ID has expired,
     * the corresponding message may be redelivered later. Acknowledging a message
     * more than once will not result in an error. If the acknowledgement ID is
     * malformed, the stream will be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * List of acknowledgement IDs for acknowledging previously received messages
     * (received on this stream or a different stream). If an ack ID has expired,
     * the corresponding message may be redelivered later. Acknowledging a message
     * more than once will not result in an error. If the acknowledgement ID is
     * malformed, the stream will be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setAckIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;
    }

    /**
     * The list of new ack deadlines for the IDs listed in
     * `modify_deadline_ack_ids`. The size of this list must be the same as the
     * size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     * with `INVALID_ARGUMENT`. Each element in this list is applied to the
     * element in the same position in `modify_deadline_ack_ids`. The new ack
     * deadline is with respect to the time this request was sent to the Pub/Sub
     * system. Must be >= 0. For example, if the value is 10, the new ack deadline
     * will expire 10 seconds after this request is received. If the value is 0,
     * the message is immediately made available for another streaming or
     * non-streaming pull request. If the value is < 0 (an error), the stream will
     * be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated int32 modify_deadline_seconds = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModifyDeadlineSeconds()
    {
        return $this->modify_deadline_seconds;
    }

    /**
     * The list of new ack deadlines for the IDs listed in
     * `modify_deadline_ack_ids`. The size of this list must be the same as the
     * size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     * with `INVALID_ARGUMENT`. Each element in this list is applied to the
     * element in the same position in `modify_deadline_ack_ids`. The new ack
     * deadline is with respect to the time this request was sent to the Pub/Sub
     * system. Must be >= 0. For example, if the value is 10, the new ack deadline
     * will expire 10 seconds after this request is received. If the value is 0,
     * the message is immediately made available for another streaming or
     * non-streaming pull request. If the value is < 0 (an error), the stream will
     * be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated int32 modify_deadline_seconds = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setModifyDeadlineSeconds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->modify_deadline_seconds = $arr;
    }

    /**
     * List of acknowledgement IDs whose deadline will be modified based on the
     * corresponding element in `modify_deadline_seconds`. This field can be used
     * to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted.
     *
     * Generated from protobuf field <code>repeated string modify_deadline_ack_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModifyDeadlineAckIds()
    {
        return $this->modify_deadline_ack_ids;
    }

    /**
     * List of acknowledgement IDs whose deadline will be modified based on the
     * corresponding element in `modify_deadline_seconds`. This field can be used
     * to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted.
     *
     * Generated from protobuf field <code>repeated string modify_deadline_ack_ids = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setModifyDeadlineAckIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->modify_deadline_ack_ids = $arr;
    }

    /**
     * The ack deadline to use for the stream. This must be provided in the
     * first request on the stream, but it can also be updated on subsequent
     * requests from client to server. The minimum deadline you can specify is 10
     * seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 stream_ack_deadline_seconds = 5;</code>
     * @return int
     */
    public function getStreamAckDeadlineSeconds()
    {
        return $this->stream_ack_deadline_seconds;
    }

    /**
     * The ack deadline to use for the stream. This must be provided in the
     * first request on the stream, but it can also be updated on subsequent
     * requests from client to server. The minimum deadline you can specify is 10
     * seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 stream_ack_deadline_seconds = 5;</code>
     * @param int $var
     */
    public function setStreamAckDeadlineSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->stream_ack_deadline_seconds = $var;
    }

}

