<?php

/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 5:06 AM
 */
class ApiBalanceUpdater extends CApplicationComponent
{
    public $mainUser;
    public $mainPassword;
    public $subUser;
    public $subPassword;
    public $amount;

    /**
     * @return mixed
     */
    public function getMainPassword()
    {
        return $this->mainPassword;
    }

    /**
     * @param mixed $mainPassword
     */
    public function setMainPassword($mainPassword)
    {
        $this->mainPassword = $mainPassword;
    }

    /**
     * @return mixed
     */
    public function getMainUser()
    {
        return $this->mainUser;
    }

    /**
     * @param mixed $mainUser
     */
    public function setMainUser($mainUser)
    {
        $this->mainUser = $mainUser;
    }

    /**
     * @return mixed
     */
    public function getSubPassword()
    {
        return $this->subPassword;
    }

    /**
     * @param mixed $subPassword
     */
    public function setSubPassword($subPassword)
    {
        $this->subPassword = $subPassword;
    }

    /**
     * @return mixed
     */
    public function getSubUser()
    {
        return $this->subUser;
    }

    /**
     * @param mixed $subUser
     */
    public function setSubUser($subUser)
    {
        $this->subUser = $subUser;
    }

    public function retrieve()
    {
        throw new Exception("Retrieve balance not yet implemented");
    }

    /**
     * @TODO  - update the balance
     */
    public function updateBalance(){
        //tops up the main first account first

        //tops up the sup account

        //@TODO retrieve the current balance from api for sub account

        //@TODO update the current model

        //@TODO - return message

    }


}
