<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Company;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Interns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interns-form">
    <div class="row">
            <div class="col-lg-8">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->dropDownList(
            ArrayHelper::map(Company::find()->all(),'company_id','company_name'),
            ['prompt'=>'select company'])
            ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stipend')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'start_date')->widget(
            DatePicker::className(), [
                // inline too, not bad
                 'inline' => false,  
                 // modify template for custom rendering
                //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-m-dd'
                ]
        ]);?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
