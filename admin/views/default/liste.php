<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form=ActiveForm::begin()?>
<?php

echo \yii\widgets\ListView::widget([
'dataProvider'=> $provider,
'summary'=> false,
'itemView'=> function($model)
{
	return '<div class ="list-group">
	<a href="#" class="list-group-item active">
	<h4 class "list-group-item-heading">'.$model->id.'</h4>
	<p class="list-group-item-text">'.$model->soru.'
	<div class="form-group">
        <div style="right:10px; float:left;&emsp" >'.Html::submitButton('Evet',[array('onclick' => Yii::$app->db->createCommand()->insert('cevap',['cevap'=>'Evet'])->execute())],['class'=>'btn btn-default']).'</div> 
		<div style="right:10px;&emsp" >'.Html::submitButton('Hayır',[array('onclick' => Yii::$app->db->createCommand()->insert('cevap',['cevap'=>'Hayır'])->execute())],['class'=>'btn btn-default']).'</div>
    </div>
	</p>
	</a>
	</div>';
	 }
	]);

?>




