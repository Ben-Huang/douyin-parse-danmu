<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.GiftIMPriority</code>
 */
class GiftIMPriority extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 queueSizesList = 1;</code>
     */
    private $queueSizesList;
    /**
     * Generated from protobuf field <code>uint64 selfQueuePriority = 2;</code>
     */
    protected $selfQueuePriority = 0;
    /**
     * Generated from protobuf field <code>uint64 priority = 3;</code>
     */
    protected $priority = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $queueSizesList
     *     @type int|string $selfQueuePriority
     *     @type int|string $priority
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint64 queueSizesList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueueSizesList()
    {
        return $this->queueSizesList;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 queueSizesList = 1;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueueSizesList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->queueSizesList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 selfQueuePriority = 2;</code>
     * @return int|string
     */
    public function getSelfQueuePriority()
    {
        return $this->selfQueuePriority;
    }

    /**
     * Generated from protobuf field <code>uint64 selfQueuePriority = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSelfQueuePriority($var)
    {
        GPBUtil::checkUint64($var);
        $this->selfQueuePriority = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 priority = 3;</code>
     * @return int|string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Generated from protobuf field <code>uint64 priority = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint64($var);
        $this->priority = $var;

        return $this;
    }

}
