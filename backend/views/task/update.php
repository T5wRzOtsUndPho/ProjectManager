<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TaskModel */

$this->title = 'Update Task Model: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Task Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
