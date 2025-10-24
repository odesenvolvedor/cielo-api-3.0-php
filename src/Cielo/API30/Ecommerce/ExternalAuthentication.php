<?php

namespace Cielo\API30\Ecommerce;

class ExternalAuthentication implements \JsonSerializable
{
    private $cavv;
    private $eci;
    private $referenceId;
    private $version;
    private $xid;
    private $dataOnly;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function populate(\stdClass $data)
    {
        $this->cavv = isset($data->Cavv) ? $data->Cavv : null;
        $this->eci = isset($data->Eci) ? $data->Eci : null;
        $this->referenceId = isset($data->ReferenceId) ? $data->ReferenceId : null;
        $this->version = isset($data->Version) ? $data->Version : null;
        $this->xid = isset($data->Xid) ? $data->Xid : null;
    }

    /**
     * @return string|null
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @param string|null $Cavv
     *
     * @return ExternalAuthentication
     */
    public function setCavv($Cavv)
    {
        $this->cavv = $Cavv;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string|null $Eci
     *
     * @return ExternalAuthentication
     */
    public function setEci($Eci)
    {
        $this->eci = $Eci;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string|null $ReferenceId
     *
     * @return ExternalAuthentication
     */
    public function setReferenceId($ReferenceId)
    {
        $this->referenceId = $ReferenceId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string|null $Version
     *
     * @return ExternalAuthentication
     */
    public function setVersion($Version)
    {
        $this->version = $Version;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string|null $Xid
     *
     * @return ExternalAuthentication
     */
    public function setXid($Xid)
    {
        $this->xid = $Xid;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDataOnly()
    {
        return $this->dataOnly;
    }

    /**
     * @param bool|null $DataOnly
     *
     * @return ExternalAuthentication
     */
    public function setDataOnly($DataOnly)
    {
        $this->dataOnly = $DataOnly;

        return $this;
    }
}
