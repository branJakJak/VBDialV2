<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 2/13/2016
 * Time: 2:33 AM
 */

class RefreshBalanceColumnButton extends CButtonColumn{
    public function getDataCellContent($row)
    {
        $data=$this->grid->dataProvider->data[$row];
        $refreshColumnButton = CHtml::button("Refresh Balance",array("onclick"=>"refreshVicidialAccountBalance('$data->carrier_name' , '$data->api_mainpass' , '$data->api_username' , '$data->api_password',this )"));
        return $refreshColumnButton;
    }
} 