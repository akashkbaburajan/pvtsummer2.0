<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InternsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Interns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interns-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Interns', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'intern_id',
            [
                'attribute'=>'company_id',
                'value'=>'company.company_name',
            ],
            'type',
            'job_description:ntext',
            'field',
             'stipend',
             'location',
             'start_date',
             'duration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
