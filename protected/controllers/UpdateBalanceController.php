<?php

/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 3:38 AM
 */
class UpdateBalanceController extends RestrictedController
{
    public function accessRules()
    {
        return array_merge(
            parent::accessRules(),
            array(
                array(
                    'allow',
                    'actions' => array('viciUser'),
                    'users' => array('@'),
                ),
            )
        );
    }

    /**
     * @param $carrier_name
     * @param $api_mainpass
     * @param $api_username
     * @param $api_password
     * @throws CHttpException
     */
    public function actionViciUser($carrier_name , $api_mainpass,$api_username , $api_password)
    {
        /**
         * @var VicidialServerCarriers $model
         * @var ApiBalanceRetriever $balanceRetriever
         */
        $criteria = new CDbCriteria;
        $criteria->compare("carrier_name",$carrier_name);
        $criteria->compare("api_mainpass",$api_mainpass);
        $criteria->compare("api_username",$api_username);
        $criteria->compare("api_password",$api_password);
        $model = VicidialRemoteAgents::model()->find($criteria);
        if ($model) {
            //retrieve the balance from the api
            $balanceRetriever = Yii::app()->apiBalanceRetriever;
            $freshBalance = $balanceRetriever->retrieve();
            $model->api_balance = $freshBalance;
            //update the current balance
            $model->update();
            //return message status
            $message = array(
                "status"=>"ok",
                "message"=>"status updated",
                "balance"=>$freshBalance,
            );
            header("Content-Type: application/json");
            echo json_encode($message);
        } else {
            throw new CHttpException(404, "We cant find $carrier_name | $api_mainpass | $api_username | $api_password");
        }
    }
}