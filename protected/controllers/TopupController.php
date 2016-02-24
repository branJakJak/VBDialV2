<?php

/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 3:41 AM
 */
class TopupController extends RestrictedController
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
     * Topup account and refresh
     * @param $carrier_name
     * @param $api_mainpass
     * @param $api_username
     * @param $api_password
     * @param $amount
     * @throws CHttpException
     */
    public function actionViciUser($carrier_name,$api_mainpass ,$api_username ,$api_password ,$amount)
    {
        /**
         * @var VicidialRemoteAgents $model
         */
        $model = VicidialRemoteAgents::model()->findByAttributes(array("user_start" => $identification));
        if ($model) {
            // get the component that tops up an account
            // return teh returned message
            //redirect back to /site/index
        } else {
            throw new CHttpException(404, "We cant find $identification");
        }
    }

} 