<?php
/* @var $this yii\web\View */
?>
<h1>rbac/index</h1>

<table class="table table-hover table-bordered">
    <tr>
        <th>名称</th>
        <th>描述</th>
        <th>操作</th>
        <th><?=\yii\bootstrap\Html::a('添加',['rbac/add-role'],['class'=>'btn btn-primary btn-xs'])?></th>
    </tr>
    <?php foreach($models as $model):?>
    <tr>
        <td><?=$model->name?></td>
        <td><?=$model->description?></td>
        <td>
            <?=\yii\bootstrap\Html::a('修改',['rbac/edit-role','name'=>$model->name],['class'=>'btn btn-success btn-xs'])?>
            <?=\yii\bootstrap\Html::a('删除',['rbac/del-role','name'=>$model->name],['class'=>'btn btn-danger btn-xs'])?>
        </td>
    </tr>
    <?php endforeach;?>
</table>