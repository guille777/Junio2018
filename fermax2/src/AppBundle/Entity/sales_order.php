<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sales_order
 *
 * @ORM\Table(name="sales_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sales_orderRepository")
 */
class sales_order
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="DocumentID", type="integer")
     */
    private $documentID;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerID", type="string", length=255)
     */
    private $customerID;

    /**
     * @var string
     *
     * @ORM\Column(name="Division", type="string", length=255)
     */
    private $division;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OrderDate", type="datetime")
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="DeliveryDate", type="string", length=255)
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="Vat_Type_Code", type="string", length=255)
     */
    private $vatTypeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Payment_code", type="string", length=255)
     */
    private $paymentCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set documentID
     *
     * @param integer $documentID
     *
     * @return sales_order
     */
    public function setDocumentID($documentID)
    {
        $this->documentID = $documentID;

        return $this;
    }

    /**
     * Get documentID
     *
     * @return int
     */
    public function getDocumentID()
    {
        return $this->documentID;
    }

    /**
     * Set customerID
     *
     * @param string $customerID
     *
     * @return sales_order
     */
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }

    /**
     * Get customerID
     *
     * @return string
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Set division
     *
     * @param string $division
     *
     * @return sales_order
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return sales_order
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set deliveryDate
     *
     * @param string $deliveryDate
     *
     * @return sales_order
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return sales_order
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set vatTypeCode
     *
     * @param string $vatTypeCode
     *
     * @return sales_order
     */
    public function setVatTypeCode($vatTypeCode)
    {
        $this->vatTypeCode = $vatTypeCode;

        return $this;
    }

    /**
     * Get vatTypeCode
     *
     * @return string
     */
    public function getVatTypeCode()
    {
        return $this->vatTypeCode;
    }

    /**
     * Set paymentCode
     *
     * @param string $paymentCode
     *
     * @return sales_order
     */
    public function setPaymentCode($paymentCode)
    {
        $this->paymentCode = $paymentCode;

        return $this;
    }

    /**
     * Get paymentCode
     *
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->paymentCode;
    }
}

