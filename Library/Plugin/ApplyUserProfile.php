<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/user.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.ApplyUserProfile</code>
 */
class ApplyUserProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.UserProfile applyUser = 1;</code>
     */
    private $applyUser = null;
    /**
     * Generated from protobuf field <code>string applyReason = 2;</code>
     */
    private $applyReason = '';

    public function __construct()
    {
        \GPBMetadata\Core\User::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.core.UserProfile applyUser = 1;</code>
     * @return \Library\Plugin\UserProfile
     */
    public function getApplyUser()
    {
        return $this->applyUser;
    }

    /**
     * Generated from protobuf field <code>.core.UserProfile applyUser = 1;</code>
     * @param \Library\Plugin\UserProfile $var
     * @return $this
     */
    public function setApplyUser($var)
    {
        GPBUtil::checkMessage($var, \Library\Plugin\UserProfile::class);
        $this->applyUser = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string applyReason = 2;</code>
     * @return string
     */
    public function getApplyReason()
    {
        return $this->applyReason;
    }

    /**
     * Generated from protobuf field <code>string applyReason = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApplyReason($var)
    {
        GPBUtil::checkString($var, true);
        $this->applyReason = $var;

        return $this;
    }
}
