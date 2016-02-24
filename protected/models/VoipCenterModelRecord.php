<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 5:17 AM
 */
class VoipCenterModelRecord {
    public $customer;
    public $balance;
    public $specific_balance;
    public $blocked;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param mixed $blocked
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getSpecificBalance()
    {
        return $this->specific_balance;
    }

    /**
     * @param mixed $specific_balance
     */
    public function setSpecificBalance($specific_balance)
    {
        $this->specific_balance = $specific_balance;
    }




}