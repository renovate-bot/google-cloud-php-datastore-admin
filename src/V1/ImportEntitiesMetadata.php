<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/datastore_admin.proto

namespace Google\Cloud\Datastore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for ImportEntities operations.
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.ImportEntitiesMetadata</code>
 */
class ImportEntitiesMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata common to all Datastore Admin operations.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.CommonMetadata common = 1;</code>
     */
    protected $common = null;
    /**
     * An estimate of the number of entities processed.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Progress progress_entities = 2;</code>
     */
    protected $progress_entities = null;
    /**
     * An estimate of the number of bytes processed.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Progress progress_bytes = 3;</code>
     */
    protected $progress_bytes = null;
    /**
     * Description of which entities are being imported.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.EntityFilter entity_filter = 4;</code>
     */
    protected $entity_filter = null;
    /**
     * The location of the import metadata file. This will be the same value as
     * the
     * [google.datastore.admin.v1.ExportEntitiesResponse.output_url][google.datastore.admin.v1.ExportEntitiesResponse.output_url]
     * field.
     *
     * Generated from protobuf field <code>string input_url = 5;</code>
     */
    protected $input_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\Admin\V1\CommonMetadata $common
     *           Metadata common to all Datastore Admin operations.
     *     @type \Google\Cloud\Datastore\Admin\V1\Progress $progress_entities
     *           An estimate of the number of entities processed.
     *     @type \Google\Cloud\Datastore\Admin\V1\Progress $progress_bytes
     *           An estimate of the number of bytes processed.
     *     @type \Google\Cloud\Datastore\Admin\V1\EntityFilter $entity_filter
     *           Description of which entities are being imported.
     *     @type string $input_url
     *           The location of the import metadata file. This will be the same value as
     *           the
     *           [google.datastore.admin.v1.ExportEntitiesResponse.output_url][google.datastore.admin.v1.ExportEntitiesResponse.output_url]
     *           field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\DatastoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata common to all Datastore Admin operations.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.CommonMetadata common = 1;</code>
     * @return \Google\Cloud\Datastore\Admin\V1\CommonMetadata|null
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
     * Metadata common to all Datastore Admin operations.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.CommonMetadata common = 1;</code>
     * @param \Google\Cloud\Datastore\Admin\V1\CommonMetadata $var
     * @return $this
     */
    public function setCommon($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\Admin\V1\CommonMetadata::class);
        $this->common = $var;

        return $this;
    }

    /**
     * An estimate of the number of entities processed.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Progress progress_entities = 2;</code>
     * @return \Google\Cloud\Datastore\Admin\V1\Progress|null
     */
    public function getProgressEntities()
    {
        return $this->progress_entities;
    }

    public function hasProgressEntities()
    {
        return isset($this->progress_entities);
    }

    public function clearProgressEntities()
    {
        unset($this->progress_entities);
    }

    /**
     * An estimate of the number of entities processed.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Progress progress_entities = 2;</code>
     * @param \Google\Cloud\Datastore\Admin\V1\Progress $var
     * @return $this
     */
    public function setProgressEntities($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\Admin\V1\Progress::class);
        $this->progress_entities = $var;

        return $this;
    }

    /**
     * An estimate of the number of bytes processed.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Progress progress_bytes = 3;</code>
     * @return \Google\Cloud\Datastore\Admin\V1\Progress|null
     */
    public function getProgressBytes()
    {
        return $this->progress_bytes;
    }

    public function hasProgressBytes()
    {
        return isset($this->progress_bytes);
    }

    public function clearProgressBytes()
    {
        unset($this->progress_bytes);
    }

    /**
     * An estimate of the number of bytes processed.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Progress progress_bytes = 3;</code>
     * @param \Google\Cloud\Datastore\Admin\V1\Progress $var
     * @return $this
     */
    public function setProgressBytes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\Admin\V1\Progress::class);
        $this->progress_bytes = $var;

        return $this;
    }

    /**
     * Description of which entities are being imported.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.EntityFilter entity_filter = 4;</code>
     * @return \Google\Cloud\Datastore\Admin\V1\EntityFilter|null
     */
    public function getEntityFilter()
    {
        return $this->entity_filter;
    }

    public function hasEntityFilter()
    {
        return isset($this->entity_filter);
    }

    public function clearEntityFilter()
    {
        unset($this->entity_filter);
    }

    /**
     * Description of which entities are being imported.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.EntityFilter entity_filter = 4;</code>
     * @param \Google\Cloud\Datastore\Admin\V1\EntityFilter $var
     * @return $this
     */
    public function setEntityFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\Admin\V1\EntityFilter::class);
        $this->entity_filter = $var;

        return $this;
    }

    /**
     * The location of the import metadata file. This will be the same value as
     * the
     * [google.datastore.admin.v1.ExportEntitiesResponse.output_url][google.datastore.admin.v1.ExportEntitiesResponse.output_url]
     * field.
     *
     * Generated from protobuf field <code>string input_url = 5;</code>
     * @return string
     */
    public function getInputUrl()
    {
        return $this->input_url;
    }

    /**
     * The location of the import metadata file. This will be the same value as
     * the
     * [google.datastore.admin.v1.ExportEntitiesResponse.output_url][google.datastore.admin.v1.ExportEntitiesResponse.output_url]
     * field.
     *
     * Generated from protobuf field <code>string input_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_url = $var;

        return $this;
    }

}

