<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Payment
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="Payment")
 */
class Payment
{
    /**
     * @var int
     *
     * @ORM\Column (name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column (name="transaction", type="string", length=100)
     */
    private $transaction;

    /**
     * @var bool
     *
     * @ORM\Column (name="verified", type="boolean")
     */
    private $verified;

    /**ç
     * @var string
     *
     * @ORM\Column (name="method", type="string", length=30)
     */
    private $method;

    /**
     * @var Order
     *
     * @ORM\OneToOne(targetEntity="Order")
     */
    private $order;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set transaction
     *
     * @param string $transaction
     *
     * @return Payment
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set verified
     *
     * @param boolean $verified
     *
     * @return Payment
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified
     *
     * @return boolean
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\Order $order
     *
     * @return Payment
     */
    public function setOrder(\AppBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
