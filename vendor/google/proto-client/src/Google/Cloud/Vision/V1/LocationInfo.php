<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detected entity location information.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.LocationInfo</code>
 */
class LocationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * lat/long location coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     */
    private $lat_lng = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * lat/long location coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     * @return \Google\Type\LatLng
     */
    public function getLatLng()
    {
        return $this->lat_lng;
    }

    /**
     * lat/long location coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     * @param \Google\Type\LatLng $var
     */
    public function setLatLng(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->lat_lng = $var;
    }

}
