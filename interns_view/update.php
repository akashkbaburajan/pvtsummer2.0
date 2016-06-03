<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Interns */

$this->title = 'Update Interns: ' . $model->intern_id;
$this->params['breadcrumbs'][] = ['label' => 'Interns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->intern_id, 'url' => ['view', 'id' => $model->intern_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="interns-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
