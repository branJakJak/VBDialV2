<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 



$topUpFunctionScript = "$baseUrl/js/topupfunction.js";
Yii::app()->clientScript->registerScriptFile($topUpFunctionScript, CClientScript::POS_END);

$topUpFunctionScript = "$baseUrl/js/refreshBalanceFunction.js";
Yii::app()->clientScript->registerScriptFile($topUpFunctionScript, CClientScript::POS_END);

$dataprovider = $model->search();
$dataprovider->pagination = false;

?>



<style type="text/css">
    
    table tr td {
        text-align: center;
    }
</style>


<div class="row">
    <div style="margin-left: 34px;">
        <?php 
        Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
        Yii::app()->user->setFlash('error', '<strong>Well done!</strong> You successfully read this important alert message.');
        $this->widget('bootstrap.widgets.TbAlert', array(
            'fade'=>true, // use transitions?
            'closeText'=>'×', // close link text - if set to false, no close link is displayed
            'alerts'=>array( // configurations per alert type
                'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
                'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), 
            ),
        )); ?>
    </div>
</div>
<div class="row">
<div style="margin-left: 34px;">
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'vicidial-server-carriers-grid',
    'ajaxUpdate'=>false,
    'dataProvider'=>$dataprovider,
    'filter'=>$model,
    'columns'=>array(
        // 'carrier_id',
        array(
            'type'=>'raw',
            'header'=>'Viciuser',
            'value'=>'$data->getViciUser()'
        ),
        array(
            'type'=>'raw',
            'header'=>'Number of lines',
            'value'=>'$data->getNumberOfLines()'
        ),
        array(
            'type'=>'raw',
            'header'=>'IP',
            'value'=>'$data->getServerIp()'
        ),
        array(
            'type'=>'raw',
            'header'=>'Balance',
            'value'=>'$data->api_balance'
        ),
        // Toggle activate / deactivate
         array(
             'class'=>'application.extensions.vicidialServerCarriers.ToggleStatusColumnLink',
             'header'=>"Status",
         ),
//        array(
//            'type'=>'raw',
//            'header'=>'Status',
//            'value'=>'$data->getStatus()'
//        ),
        'carrier_name',
        'api_mainpass',
        'api_username',
        'api_password',
        array(
            'type'=>'raw',
            'header'=>'CampaignId',
            'value'=>'$data->getCampaignId()'
        ),
        //Refresh balance
        array(
            'class'=>'application.extensions.vicidialServerCarriers.RefreshBalanceColumnButton',
            'header'=>'Fetch Balance',
        ),
        //Toggle top up dialog
        array(
            'class'=>'application.extensions.vicidialServerCarriers.TopUpColumnButton',
            'header'=>'Top-up',
        ),


        //@TODO - sync account balance button , complete with waiting message and stuff
        // array(
        //     'class'=>'',
        // )

    ),
)); ?>
</div>

</div>