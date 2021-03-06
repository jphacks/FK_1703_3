<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v1/trace.proto

namespace Google\Devtools\Cloudtrace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the `ListTraces` method. All fields are required
 * unless specified.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v1.ListTracesRequest</code>
 */
class ListTracesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Type of data returned for traces in the list. Optional. Default is
     * `MINIMAL`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v1.ListTracesRequest.ViewType view = 2;</code>
     */
    private $view = 0;
    /**
     * Maximum number of traces to return. If not specified or <= 0, the
     * implementation selects a reasonable value.  The implementation may
     * return fewer traces than the requested page size. Optional.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Token identifying the page of results to return. If provided, use the
     * value of the `next_page_token` field from a previous request. Optional.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * End of the time interval (inclusive) during which the trace data was
     * collected from the application.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    private $start_time = null;
    /**
     * Start of the time interval (inclusive) during which the trace data was
     * collected from the application.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    private $end_time = null;
    /**
     * An optional filter for the request.
     *
     * Generated from protobuf field <code>string filter = 7;</code>
     */
    private $filter = '';
    /**
     * Field used to sort the returned traces. Optional.
     * Can be one of the following:
     * *   `trace_id`
     * *   `name` (`name` field of root span in the trace)
     * *   `duration` (difference between `end_time` and `start_time` fields of
     *      the root span)
     * *   `start` (`start_time` field of the root span)
     * Descending order can be specified by appending `desc` to the sort field
     * (for example, `name desc`).
     * Only one sort field is permitted.
     *
     * Generated from protobuf field <code>string order_by = 8;</code>
     */
    private $order_by = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudtrace\V1\Trace::initOnce();
        parent::__construct();
    }

    /**
     * ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * Type of data returned for traces in the list. Optional. Default is
     * `MINIMAL`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v1.ListTracesRequest.ViewType view = 2;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Type of data returned for traces in the list. Optional. Default is
     * `MINIMAL`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v1.ListTracesRequest.ViewType view = 2;</code>
     * @param int $var
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Cloudtrace\V1\ListTracesRequest_ViewType::class);
        $this->view = $var;
    }

    /**
     * Maximum number of traces to return. If not specified or <= 0, the
     * implementation selects a reasonable value.  The implementation may
     * return fewer traces than the requested page size. Optional.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of traces to return. If not specified or <= 0, the
     * implementation selects a reasonable value.  The implementation may
     * return fewer traces than the requested page size. Optional.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * Token identifying the page of results to return. If provided, use the
     * value of the `next_page_token` field from a previous request. Optional.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token identifying the page of results to return. If provided, use the
     * value of the `next_page_token` field from a previous request. Optional.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    /**
     * End of the time interval (inclusive) during which the trace data was
     * collected from the application.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * End of the time interval (inclusive) during which the trace data was
     * collected from the application.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

    /**
     * Start of the time interval (inclusive) during which the trace data was
     * collected from the application.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Start of the time interval (inclusive) during which the trace data was
     * collected from the application.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
    }

    /**
     * An optional filter for the request.
     *
     * Generated from protobuf field <code>string filter = 7;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An optional filter for the request.
     *
     * Generated from protobuf field <code>string filter = 7;</code>
     * @param string $var
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;
    }

    /**
     * Field used to sort the returned traces. Optional.
     * Can be one of the following:
     * *   `trace_id`
     * *   `name` (`name` field of root span in the trace)
     * *   `duration` (difference between `end_time` and `start_time` fields of
     *      the root span)
     * *   `start` (`start_time` field of the root span)
     * Descending order can be specified by appending `desc` to the sort field
     * (for example, `name desc`).
     * Only one sort field is permitted.
     *
     * Generated from protobuf field <code>string order_by = 8;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Field used to sort the returned traces. Optional.
     * Can be one of the following:
     * *   `trace_id`
     * *   `name` (`name` field of root span in the trace)
     * *   `duration` (difference between `end_time` and `start_time` fields of
     *      the root span)
     * *   `start` (`start_time` field of the root span)
     * Descending order can be specified by appending `desc` to the sort field
     * (for example, `name desc`).
     * Only one sort field is permitted.
     *
     * Generated from protobuf field <code>string order_by = 8;</code>
     * @param string $var
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;
    }

}

