<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 2:53 AM
 */

class DeactivateController extends Controller{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', 
		);
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('viciUser'),
				'users'=>array('@'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
    public function actionViciUser($identification)
    {
        /**
         * @var VicidialRemoteAgents $model
         */
        $model = VicidialRemoteAgents::model()->findByAttributes(array("user_start" => $identification));
        if($model){
            //update the status
            $model->status = VicidialRemoteAgents::INACTIVE_STATUS;
            if($model->save()){
                Yii::app()->user->setFlash("success", "Viciuser $identification is now deactivated");
            }else{
                Yii::app()->user->setFlash("error", "We cant deactivate $identification.");
            }
            $this->redirect(Yii::app()->request->getUrlReferrer());
            //redirect to returnUrl
        }else{
            throw new CHttpException(404, "We cant find $identification");
        }
    }
}