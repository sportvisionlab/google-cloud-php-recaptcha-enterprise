<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\FirewallAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A substitute action transparently serves a different page than the one
 * requested.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.FirewallAction.SubstituteAction</code>
 */
class SubstituteAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The address to redirect to. The target is a relative path in the
     * current host. Example: "/blog/404.html".
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           The address to redirect to. The target is a relative path in the
     *           current host. Example: "/blog/404.html".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * The address to redirect to. The target is a relative path in the
     * current host. Example: "/blog/404.html".
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The address to redirect to. The target is a relative path in the
     * current host. Example: "/blog/404.html".
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubstituteAction::class, \Google\Cloud\RecaptchaEnterprise\V1\FirewallAction_SubstituteAction::class);

