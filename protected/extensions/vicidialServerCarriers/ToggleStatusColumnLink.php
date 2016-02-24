<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 2:47 AM
 */

class ToggleStatusColumnLink extends CLinkColumn{

    public function getDataCellContent($row)
    {
        $url = "";
        $label = "";
        $data=$this->grid->dataProvider->data[$row];
        if($data->getStatus() == 'INACTIVE'){
            //set url expression
            $url = Yii::app()->createUrl("/activate/viciUser",array('identification'=>$data->getViciUser()));
            //set label expression
            $label = "ACTIVE";
        }else{
            //set url expression
            $url = Yii::app()->createUrl("/deactivate/viciUser",array('identification'=>$data->getViciUser()));
            //set label expression
            $label = "INACTIVE";
        }
        return CHtml::link($label, $url);
    }


} 