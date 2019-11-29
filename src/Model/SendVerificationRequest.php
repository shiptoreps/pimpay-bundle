<?php

namespace PimpayBundle\Model;

/**
 * Class sendVerificationRequest
 * @package PimpayBundle\Model
 */
class SendVerificationRequest
{
    /**
     * @var string
     */
    private $tin;

    /**
     * @var string
     */
    private $id;

    /**
     * @var PaymentOrder
     */
    private $paymentOrder;

    /**
     * @var VerificationRow[]
     */
    private $rows;

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getTin(): string
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     * @return SendVerificationRequest
     */
    public function setTin(string $tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return SendVerificationRequest
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return PaymentOrder
     */
    public function getPaymentOrder()
    {
        return $this->paymentOrder;
    }

    /**
     * @param PaymentOrder $paymentOrder
     * @return SendVerificationRequest
     */
    public function setPaymentOrder(PaymentOrder $paymentOrder)
    {
        $this->paymentOrder = $paymentOrder;

        return $this;
    }

    /**
     * @return VerificationRow[]
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * @param VerificationRow[] $rows
     * @return SendVerificationRequest
     */
    public function setRows(array $rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * @param VerificationRow $row
     */
    public function addRow(VerificationRow $row)
    {
        $this->rows[] = $row;
    }
}
