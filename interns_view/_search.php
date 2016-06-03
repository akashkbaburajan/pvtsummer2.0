<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InternsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interns-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'intern_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'job_description') ?>

    <?= $form->field($model, 'field') ?>

    <?php // echo $form->field($model, 'stipend') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
