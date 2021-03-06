<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse\Risk;

use Jms\Serializer\Annotation;

/**
 * The container for the screening information.
 *
 * @Annotation\AccessType("public_method")
 */
class ActionResponse
{
    /**
     * The container for the bank result.
     *
     * @var BankResultResponse
     *
     * @Annotation\SerializedName("bankresult_response")
     * @Annotation\Type(
     *     "SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse\Risk\BankResultResponse"
     * )
     */
    private $bankResultResponse;

    /**
     * The container for the screening response.
     *
     * @var ScreeningResponse
     *
     * @Annotation\SerializedName("screening_response")
     * @Annotation\Type(
     *     "SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse\Risk\ScreeningResponse"
     * )
     */
    private $screeningResponse;

    /**
     * ActionResponse constructor.
     *
     * @param BankResultResponse $bankResultResponse
     * @param ScreeningResponse  $screeningResponse
     */
    public function __construct(BankResultResponse $bankResultResponse, ScreeningResponse $screeningResponse)
    {
        $this->bankResultResponse = $bankResultResponse;
        $this->screeningResponse = $screeningResponse;
    }

    /**
     * BankResultResponse getter.
     *
     * @return BankResultResponse
     */
    public function getBankResultResponse()
    {
        return $this->bankResultResponse;
    }

    /**
     * BankResultResponse setter.
     *
     * @param BankResultResponse $bankResultResponse
     */
    public function setBankResultResponse($bankResultResponse)
    {
        $this->bankResultResponse = $bankResultResponse;
    }

    /**
     * ScreeningResponse getter.
     *
     * @return ScreeningResponse
     */
    public function getScreeningResponse()
    {
        return $this->screeningResponse;
    }

    /**
     * ScreeningResponse setter.
     *
     * @param ScreeningResponse $screeningResponse
     */
    public function setScreeningResponse($screeningResponse)
    {
        $this->screeningResponse = $screeningResponse;
    }
}
