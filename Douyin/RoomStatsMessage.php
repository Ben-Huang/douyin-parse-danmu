<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.RoomStatsMessage</code>
 */
class RoomStatsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     */
    protected $common = null;
    /**
     * Generated from protobuf field <code>string displayShort = 2;</code>
     */
    protected $displayShort = '';
    /**
     * Generated from protobuf field <code>string displayMiddle = 3;</code>
     */
    protected $displayMiddle = '';
    /**
     * Generated from protobuf field <code>string displayLong = 4;</code>
     */
    protected $displayLong = '';
    /**
     * Generated from protobuf field <code>int64 displayValue = 5;</code>
     */
    protected $displayValue = 0;
    /**
     * Generated from protobuf field <code>int64 displayVersion = 6;</code>
     */
    protected $displayVersion = 0;
    /**
     * Generated from protobuf field <code>bool incremental = 7;</code>
     */
    protected $incremental = false;
    /**
     * Generated from protobuf field <code>bool isHidden = 8;</code>
     */
    protected $isHidden = false;
    /**
     * Generated from protobuf field <code>int64 total = 9;</code>
     */
    protected $total = 0;
    /**
     * Generated from protobuf field <code>int64 displayType = 10;</code>
     */
    protected $displayType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Douyin\Common $common
     *     @type string $displayShort
     *     @type string $displayMiddle
     *     @type string $displayLong
     *     @type int|string $displayValue
     *     @type int|string $displayVersion
     *     @type bool $incremental
     *     @type bool $isHidden
     *     @type int|string $total
     *     @type int|string $displayType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     * @return \Douyin\Common|null
     */
    public function getCommon()
    {
        return $this->common;
    }

    public function hasCommon()
    {
        return isset($this->common);
    }

    public function clearCommon()
    {
        unset($this->common);
    }

    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     * @param \Douyin\Common $var
     * @return $this
     */
    public function setCommon($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Common::class);
        $this->common = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string displayShort = 2;</code>
     * @return string
     */
    public function getDisplayShort()
    {
        return $this->displayShort;
    }

    /**
     * Generated from protobuf field <code>string displayShort = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayShort($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayShort = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string displayMiddle = 3;</code>
     * @return string
     */
    public function getDisplayMiddle()
    {
        return $this->displayMiddle;
    }

    /**
     * Generated from protobuf field <code>string displayMiddle = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayMiddle($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayMiddle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string displayLong = 4;</code>
     * @return string
     */
    public function getDisplayLong()
    {
        return $this->displayLong;
    }

    /**
     * Generated from protobuf field <code>string displayLong = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayLong($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayLong = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 displayValue = 5;</code>
     * @return int|string
     */
    public function getDisplayValue()
    {
        return $this->displayValue;
    }

    /**
     * Generated from protobuf field <code>int64 displayValue = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDisplayValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->displayValue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 displayVersion = 6;</code>
     * @return int|string
     */
    public function getDisplayVersion()
    {
        return $this->displayVersion;
    }

    /**
     * Generated from protobuf field <code>int64 displayVersion = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDisplayVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->displayVersion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool incremental = 7;</code>
     * @return bool
     */
    public function getIncremental()
    {
        return $this->incremental;
    }

    /**
     * Generated from protobuf field <code>bool incremental = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncremental($var)
    {
        GPBUtil::checkBool($var);
        $this->incremental = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isHidden = 8;</code>
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    /**
     * Generated from protobuf field <code>bool isHidden = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->isHidden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total = 9;</code>
     * @return int|string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Generated from protobuf field <code>int64 total = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 displayType = 10;</code>
     * @return int|string
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * Generated from protobuf field <code>int64 displayType = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDisplayType($var)
    {
        GPBUtil::checkInt64($var);
        $this->displayType = $var;

        return $this;
    }

}

