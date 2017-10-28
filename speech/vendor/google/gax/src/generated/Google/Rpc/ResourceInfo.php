<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the resource that is being accessed.
 *
 * Protobuf type <code>Google\Rpc\ResourceInfo</code>
 */
class ResourceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A name for the type of resource being accessed, e.g. "sql table",
     * "cloud storage bucket", "file", "Google calendar"; or the type URL
     * of the resource: e.g. "type.googleapis.com/google.pubsub.v1.Topic".
     *
     * Generated from protobuf field <code>string resource_type = 1;</code>
     */
    private $resource_type = '';
    /**
     * The name of the resource being accessed.  For example, a shared calendar
     * name: "example.com_4fghdhgsrgh&#64;group.calendar.google.com", if the current
     * error is [google.rpc.Code.PERMISSION_DENIED][google.rpc.Code.PERMISSION_DENIED].
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     */
    private $resource_name = '';
    /**
     * The owner of the resource (optional).
     * For example, "user:<owner email>" or "project:<Google developer project
     * id>".
     *
     * Generated from protobuf field <code>string owner = 3;</code>
     */
    private $owner = '';
    /**
     * Describes what error is encountered when accessing this resource.
     * For example, updating a cloud project may require the `writer` permission
     * on the developer console project.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct();
    }

    /**
     * A name for the type of resource being accessed, e.g. "sql table",
     * "cloud storage bucket", "file", "Google calendar"; or the type URL
     * of the resource: e.g. "type.googleapis.com/google.pubsub.v1.Topic".
     *
     * Generated from protobuf field <code>string resource_type = 1;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * A name for the type of resource being accessed, e.g. "sql table",
     * "cloud storage bucket", "file", "Google calendar"; or the type URL
     * of the resource: e.g. "type.googleapis.com/google.pubsub.v1.Topic".
     *
     * Generated from protobuf field <code>string resource_type = 1;</code>
     * @param string $var
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;
    }

    /**
     * The name of the resource being accessed.  For example, a shared calendar
     * name: "example.com_4fghdhgsrgh&#64;group.calendar.google.com", if the current
     * error is [google.rpc.Code.PERMISSION_DENIED][google.rpc.Code.PERMISSION_DENIED].
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The name of the resource being accessed.  For example, a shared calendar
     * name: "example.com_4fghdhgsrgh&#64;group.calendar.google.com", if the current
     * error is [google.rpc.Code.PERMISSION_DENIED][google.rpc.Code.PERMISSION_DENIED].
     *
     * Generated from protobuf field <code>string resource_name = 2;</code>
     * @param string $var
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;
    }

    /**
     * The owner of the resource (optional).
     * For example, "user:<owner email>" or "project:<Google developer project
     * id>".
     *
     * Generated from protobuf field <code>string owner = 3;</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * The owner of the resource (optional).
     * For example, "user:<owner email>" or "project:<Google developer project
     * id>".
     *
     * Generated from protobuf field <code>string owner = 3;</code>
     * @param string $var
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;
    }

    /**
     * Describes what error is encountered when accessing this resource.
     * For example, updating a cloud project may require the `writer` permission
     * on the developer console project.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Describes what error is encountered when accessing this resource.
     * For example, updating a cloud project may require the `writer` permission
     * on the developer console project.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

}

