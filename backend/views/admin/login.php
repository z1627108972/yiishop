<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = '请登录';
//$this->params['breadcrumbs'][] = $this->title;
//?>
<!--<div class="site-login">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!--                --><?//= $form->field($model,'username')->textInput() ?>
<!--                --><?//= $form->field($model,'password')->passwordInput() ?>
<!--                --><?//= $form->field($model,'rememberMe')->checkbox() ?>
<!--                <div class="form-group">-->
<!--                --><?//= Html::submitButton('登陆', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php
$form = ActiveForm::begin();
echo $form->field($model,'username');
echo $form->field($model,'password')->passwordInput();
echo \yii\bootstrap\Html::submitButton('登陆',['class'=>'btn btn-xs btn-success']);
ActiveForm::end();
?>