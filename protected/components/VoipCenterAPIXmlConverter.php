<?php

/**
 * Class VoipCenterAPIXmlConverter
 * Converts voip xml to VOIPCenterModel Record
 */

class VoipCenterAPIXmlConverter {
    /**
     * @param $rawXml
     * @return VoipCenterModelRecord
     */
    public static function convertToObject($rawXml)
    {
        $xmlObject = simplexml_load_string($rawXml);
        $voipcenterObj = new VoipCenterModelRecord();
        $voipcenterObj->setCustomer($xmlObject->Customer);
        $voipcenterObj->setBalance($xmlObject->Balance);
        $voipcenterObj->setSpecificBalance($xmlObject->SpecificBalance);
        $voipcenterObj->setBlocked($xmlObject->Blocked);
        return $voipcenterObj;
    }
} 