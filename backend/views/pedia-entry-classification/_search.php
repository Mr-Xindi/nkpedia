<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the table of bankend web.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PediaEntryClassificationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedia-entry-classification-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'eid') ?>

    <?= $form->field($model, 'cid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
