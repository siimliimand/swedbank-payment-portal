<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryRequest\Transaction;

use JMS\Serializer\Annotation;

/**
 * Class HistoricTxn.
 *
 * @Annotation\AccessType("public_method")
 */
class HistoricTxn
{
    /**
     * The transaction type. The value query should be sent in this field
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\AccessType("reflection")
     * @Annotation\XmlElement(cdata=false)
     */
    private $method = 'query';

    /**
     * A 16 digit unique identifier for the transaction.
     * This reference will be used when submitting QUERY transactions to the Payment Gateway.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $reference;

    /**
     * HistoricTxn constructor.
     *
     * @param string $reference
     */
    public function __construct($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Reference getter.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Reference setter.
     *
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }
}
