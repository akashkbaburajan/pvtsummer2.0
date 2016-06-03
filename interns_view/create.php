<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Interns */

$this->title = 'Create Interns';
$this->params['breadcrumbs'][] = ['label' => 'Interns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interns-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
