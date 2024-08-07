<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/migration.proto

namespace Google\Cloud\Datastore\Admin\V1\MigrationProgressEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details for the `PREPARE` step.
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.MigrationProgressEvent.PrepareStepDetails</code>
 */
class PrepareStepDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The concurrency mode this database will use when it reaches the
     * `REDIRECT_WRITES` step.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationProgressEvent.ConcurrencyMode concurrency_mode = 1;</code>
     */
    protected $concurrency_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $concurrency_mode
     *           The concurrency mode this database will use when it reaches the
     *           `REDIRECT_WRITES` step.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\Migration::initOnce();
        parent::__construct($data);
    }

    /**
     * The concurrency mode this database will use when it reaches the
     * `REDIRECT_WRITES` step.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationProgressEvent.ConcurrencyMode concurrency_mode = 1;</code>
     * @return int
     */
    public function getConcurrencyMode()
    {
        return $this->concurrency_mode;
    }

    /**
     * The concurrency mode this database will use when it reaches the
     * `REDIRECT_WRITES` step.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationProgressEvent.ConcurrencyMode concurrency_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConcurrencyMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\MigrationProgressEvent\ConcurrencyMode::class);
        $this->concurrency_mode = $var;

        return $this;
    }

}


