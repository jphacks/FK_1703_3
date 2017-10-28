<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Datastore partition ID.
 * A partition ID identifies a grouping of entities. The grouping is always
 * by project and namespace, however the namespace ID may be empty.
 * A partition ID contains several dimensions:
 * project ID and namespace ID.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.PartitionId</code>
 */
class PartitionId extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the project to which the entities belong.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * If not empty, the ID of the namespace to which the entities belong.
     *
     * Generated from protobuf field <code>string namespace_id = 4;</code>
     */
    private $namespace_id = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * The ID of the project to which the entities belong.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The ID of the project to which the entities belong.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * If not empty, the ID of the namespace to which the entities belong.
     *
     * Generated from protobuf field <code>string namespace_id = 4;</code>
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->namespace_id;
    }

    /**
     * If not empty, the ID of the namespace to which the entities belong.
     *
     * Generated from protobuf field <code>string namespace_id = 4;</code>
     * @param string $var
     */
    public function setNamespaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_id = $var;
    }

}

