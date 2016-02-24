<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 2:33 AM
 */

class TopUpColumnButton extends CButtonColumn{

    public function getDataCellContent($row)
    {
        $data=$this->grid->dataProvider->data[$row];
        $buttonCellContent = CHtml::button("Top-up",array("onclick"=>"topupVicidialAccount('$data->carrier_name' , '$data->api_mainpass' , '$data->api_username' , '$data->api_password',this )"));
        return $buttonCellContent;
    }
}