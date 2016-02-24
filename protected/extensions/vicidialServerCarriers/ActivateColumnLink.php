<?php


class ActivateColumnLink extends CLinkColumn{

    public function init()
    {
        $this->urlExpression = 'Yii::app()->createUrl("/activate/account","vici_user"=>$data->getViciUser())';
        $this->labelExpression = '$data->getStatus()';
    }

} 