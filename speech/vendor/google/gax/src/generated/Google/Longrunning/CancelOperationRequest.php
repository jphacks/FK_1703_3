<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace Google\Longrunning;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Operations.CancelOperation][google.longrunning.Operations.CancelOperation].
 *
 * Protobuf type <code>Google\Longrunning\CancelOperationRequest</code>
 */
class CancelOperationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the operation resource to be cancelled.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        parent::__construct();
    }

    /**
     * The name of the operation resource to be cancelled.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the operation resource to be cancelled.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

