<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `DeleteTopic` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.DeleteTopicRequest</code>
 */
class DeleteTopicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the topic to delete.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    private $topic = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * Name of the topic to delete.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Name of the topic to delete.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;
    }

}

