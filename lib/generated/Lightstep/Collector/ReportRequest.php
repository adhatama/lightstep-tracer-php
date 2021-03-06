<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: collector.proto

namespace Lightstep\Collector;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lightstep.collector.ReportRequest</code>
 */
class ReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.lightstep.collector.Reporter reporter = 1;</code>
     */
    private $reporter = null;
    /**
     * Generated from protobuf field <code>.lightstep.collector.Auth auth = 2;</code>
     */
    private $auth = null;
    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Span spans = 3;</code>
     */
    private $spans;
    /**
     * Generated from protobuf field <code>int64 timestamp_offset_micros = 5;</code>
     */
    private $timestamp_offset_micros = 0;
    /**
     * Generated from protobuf field <code>.lightstep.collector.InternalMetrics internal_metrics = 6;</code>
     */
    private $internal_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lightstep\Collector\Reporter $reporter
     *     @type \Lightstep\Collector\Auth $auth
     *     @type \Lightstep\Collector\Span[]|\Google\Protobuf\Internal\RepeatedField $spans
     *     @type int|string $timestamp_offset_micros
     *     @type \Lightstep\Collector\InternalMetrics $internal_metrics
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Collector::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.Reporter reporter = 1;</code>
     * @return \Lightstep\Collector\Reporter
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.Reporter reporter = 1;</code>
     * @param \Lightstep\Collector\Reporter $var
     * @return $this
     */
    public function setReporter($var)
    {
        GPBUtil::checkMessage($var, \Lightstep\Collector\Reporter::class);
        $this->reporter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.Auth auth = 2;</code>
     * @return \Lightstep\Collector\Auth
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.Auth auth = 2;</code>
     * @param \Lightstep\Collector\Auth $var
     * @return $this
     */
    public function setAuth($var)
    {
        GPBUtil::checkMessage($var, \Lightstep\Collector\Auth::class);
        $this->auth = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Span spans = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpans()
    {
        return $this->spans;
    }

    /**
     * Generated from protobuf field <code>repeated .lightstep.collector.Span spans = 3;</code>
     * @param \Lightstep\Collector\Span[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpans($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lightstep\Collector\Span::class);
        $this->spans = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp_offset_micros = 5;</code>
     * @return int|string
     */
    public function getTimestampOffsetMicros()
    {
        return $this->timestamp_offset_micros;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp_offset_micros = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampOffsetMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_offset_micros = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.InternalMetrics internal_metrics = 6;</code>
     * @return \Lightstep\Collector\InternalMetrics
     */
    public function getInternalMetrics()
    {
        return $this->internal_metrics;
    }

    /**
     * Generated from protobuf field <code>.lightstep.collector.InternalMetrics internal_metrics = 6;</code>
     * @param \Lightstep\Collector\InternalMetrics $var
     * @return $this
     */
    public function setInternalMetrics($var)
    {
        GPBUtil::checkMessage($var, \Lightstep\Collector\InternalMetrics::class);
        $this->internal_metrics = $var;

        return $this;
    }

}

