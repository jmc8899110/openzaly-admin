<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_user_update.proto

namespace Library\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiUserUpdateRequest</code>
 */
class HaiUserUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *需要更新的用户信息
     *
     * Generated from protobuf field <code>.core.UserProfile user_profile = 1;</code>
     */
    private $user_profile = null;

    public function __construct()
    {
        \GPBMetadata\Plugin\HaiUserUpdate::initOnce();
        parent::__construct();
    }

    /**
     *需要更新的用户信息
     *
     * Generated from protobuf field <code>.core.UserProfile user_profile = 1;</code>
     * @return \Library\Plugin\UserProfile
     */
    public function getUserProfile()
    {
        return $this->user_profile;
    }

    /**
     *需要更新的用户信息
     *
     * Generated from protobuf field <code>.core.UserProfile user_profile = 1;</code>
     * @param \Library\Plugin\UserProfile $var
     * @return $this
     */
    public function setUserProfile($var)
    {
        GPBUtil::checkMessage($var, \Library\Plugin\UserProfile::class);
        $this->user_profile = $var;

        return $this;
    }
}