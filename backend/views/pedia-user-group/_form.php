<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserGroup */
/* @var $form yii\widgets\ActiveForm */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
?>

<div class="pedia-user-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
