<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\HPSQueryResponse;

use JMS\Serializer\Annotation;
use SwedbankPaymentPortal\SharedEntity\Type\ResponseStatus;

/**
 * Provides details of the payment attempt.
 *
 * @Annotation\AccessType("public_method")
 */
class AuthAttempt
{
    /**
     * The payment provider’s reference for the authorisation attempt.
     * This field is only present is the payment attempt was successful.
     *
     * @var string
     *
     * @Annotation\SerializedName("datacash_reference")
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $dataCashReference;

    /**
     * The status code for the result of the attempt.
     *
     * @var ResponseStatus
     *
     * @Annotation\SerializedName("dc_response")
     * @Annotation\Type("SwedbankPaymentPortal\SharedEntity\Type\ResponseStatus")
     * @Annotation\XmlElement(cdata=false)
     */
    private $dcResponse;

    /**
     * The reason for the attempt.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $reason;

    /**
     * AuthAttempt constructor.
     *
     * @param string $dcResponse
     * @param string $reason
     * @param string $dataCashReference
     */
    public function __construct($dcResponse, $reason, $dataCashReference = '')
    {
        $this->dataCashReference = $dataCashReference;
        $this->dcResponse = $dcResponse;
        $this->reason = $reason;
    }

    /**
     * DataCashReference getter.
     *
     * @return string
     */
    public function getDataCashReference()
    {
        return $this->dataCashReference;
    }

    /**
     * DataCashReference setter.
     *
     * @param string $dataCashReference
     */
    public function setDataCashReference($dataCashReference)
    {
        $this->dataCashReference = $dataCashReference;
    }

    /**
     * DcResponse getter.
     *
     * @return ResponseStatus
     */
    public function getDcResponse()
    {
        return $this->dcResponse;
    }

    /**
     * DcResponse setter.
     *
     * @param ResponseStatus $dcResponse
     */
    public function setDcResponse($dcResponse)
    {
        $this->dcResponse = $dcResponse;
    }

    /**
     * Reason getter.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason setter.
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
}
