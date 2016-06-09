<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Stdent;
use yii\helpers\ArrayHelper;
use app\models\Company;
use app\models\Interns;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

   
     <?=   $form->field($model, 'student_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Stdent::find()->all(),'student_id','name'),
        'language' => 'en',
        'options' => ['placeholder' => 'student name'],
        'pluginOptions' => [
            'allowClear' => true
            ],
         ]);
         ?>
    
    <?= $form->field($model, 'company_id')->dropDownList(
            ArrayHelper::map(Company::find()->all(),'company_id','company_name'),
            ['prompt'=>'select company'])
            ?>
    
    <?= $form->field($model, 'intern_id')->dropDownList(
            ArrayHelper::map(Interns::find()->all(),'intern_id','intern_id'),
            ['prompt'=>'select internship'])
            ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
