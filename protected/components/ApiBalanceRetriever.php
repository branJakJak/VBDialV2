<?php

/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 5:05 AM
 */
class ApiBalanceRetriever extends CApplicationComponent implements IBalanceRetrieve
{
    public $mainUser;
    public $mainPassword;
    public $subUser;
    public $subPassword;


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

    /**
     *
     * @return double
     */
    public function retrieve()
    {
        $curlURL = "https://77.72.173.130/API/Request.ashx?";
        $httparams = array(
            'command'=>'getuserinfo',
            'username'=>$this->getMainUser(),
            'password'=>$this->getMainPassword(),
            'customer'=>$this->getSubUser(),
            'customerpassword'=>$this->getSubPassword()
        );
        $curlURL .= http_build_query($httparams);
        $curlres = curl_init($curlURL);
        curl_setopt($curlres, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlres, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curlres, CURLOPT_SSL_VERIFYPEER, false);
        $curlResRaw = curl_exec($curlres);
        /* @TODO  - check if there is an error , */
        $voipModelRecord = VoipCenterAPIXmlConverter::convertToObject($curlResRaw);
        return $voipModelRecord->getBalance();
    }


}
