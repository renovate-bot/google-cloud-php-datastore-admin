<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/datastore_admin.proto

namespace Google\Cloud\Datastore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [google.datastore.admin.v1.DatastoreAdmin.GetIndex][google.datastore.admin.v1.DatastoreAdmin.GetIndex].
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.GetIndexRequest</code>
 */
class GetIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    protected $project_id = '';
    /**
     * The resource ID of the index to get.
     *
     * Generated from protobuf field <code>string index_id = 3;</code>
     */
    protected $index_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Project ID against which to make the request.
     *     @type string $index_id
     *           The resource ID of the index to get.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\DatastoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project ID against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The resource ID of the index to get.
     *
     * Generated from protobuf field <code>string index_id = 3;</code>
     * @return string
     */
    public function getIndexId()
    {
        return $this->index_id;
    }

    /**
     * The resource ID of the index to get.
     *
     * Generated from protobuf field <code>string index_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexId($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_id = $var;

        return $this;
    }

}

