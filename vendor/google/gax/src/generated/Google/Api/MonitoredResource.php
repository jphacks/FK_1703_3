<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitored_resource.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An object representing a resource that can be used for monitoring, logging,
 * billing, or other purposes. Examples include virtual machine instances,
 * databases, and storage devices such as disks. The `type` field identifies a
 * [MonitoredResourceDescriptor][google.api.MonitoredResourceDescriptor] object that describes the resource's
 * schema. Information in the `labels` field identifies the actual resource and
 * its attributes according to the schema. For example, a particular Compute
 * Engine VM instance could be represented by the following object, because the
 * [MonitoredResourceDescriptor][google.api.MonitoredResourceDescriptor] for `"gce_instance"` has labels
 * `"instance_id"` and `"zone"`:
 *     { "type": "gce_instance",
 *       "labels": { "instance_id": "12345678901234",
 *                   "zone": "us-central1-a" }}
 *
 * Protobuf type <code>Google\Api\MonitoredResource</code>
 */
class MonitoredResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The monitored resource type. This field must match
     * the `type` field of a [MonitoredResourceDescriptor][google.api.MonitoredResourceDescriptor] object. For
     * example, the type of a Cloud SQL database is `"cloudsql_database"`.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * Required. Values for all of the labels listed in the associated monitored
     * resource descriptor. For example, Cloud SQL databases use the labels
     * `"database_id"` and `"zone"`.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        parent::__construct();
    }

    /**
     * Required. The monitored resource type. This field must match
     * the `type` field of a [MonitoredResourceDescriptor][google.api.MonitoredResourceDescriptor] object. For
     * example, the type of a Cloud SQL database is `"cloudsql_database"`.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The monitored resource type. This field must match
     * the `type` field of a [MonitoredResourceDescriptor][google.api.MonitoredResourceDescriptor] object. For
     * example, the type of a Cloud SQL database is `"cloudsql_database"`.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    /**
     * Required. Values for all of the labels listed in the associated monitored
     * resource descriptor. For example, Cloud SQL databases use the labels
     * `"database_id"` and `"zone"`.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Required. Values for all of the labels listed in the associated monitored
     * resource descriptor. For example, Cloud SQL databases use the labels
     * `"database_id"` and `"zone"`.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setLabels(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;
    }

}

