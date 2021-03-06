<?php
?>
<!-- 登录主体部分start -->
<div class="login w990 bc mt10">
    <div class="login_hd">
        <h2>用户登录</h2>
        <b></b>
    </div>
    <div class="login_bd">
        <div class="login_form fl">
            <?php
            $form = \yii\widgets\ActiveForm::begin();
            $a = '<input type="button" onclick="bindPhoneNum(this)" id="get_captcha" value="获取验证码" style="height: 25px;padding:3px 8px">';

            echo '<ul>';
            echo $form->field($model,'username',
                [
                    'options' => ['tag'=>'li'],
                    'errorOptions' => ['tag'=>'p'],
                    'template' => "{label}\n{input}\n{hint}\n{error}"
                ]
            )->textInput(['class'=>'txt']);

            echo $form->field($model,'password',
                [
                    'options' => ['tag'=>'li'],
                    'errorOptions' => ['tag'=>'p'],
                    'template' => "{label}\n{input}\n{hint}\n{error}"
                ])->passwordInput(['class'=>'txt']);

            echo $form->field($model,'yanzheng',
                [
                    'options' => ['tag'=>'li'],
                    'errorOptions' => ['tag'=>'p'],
                    'template' => "{label}\n{input}\n{hint}\n{error}"
                ])->textInput(['class'=>'txt']);

            echo '<li><label for="">&nbsp;</label>'.\yii\helpers\Html::submitButton('',['class'=>'login_btn']).'</li>';

            echo '</ul>';

            \yii\widgets\ActiveForm::end();
            ?>


            <div class="coagent mt15">
                <dl>
                    <dt>使用合作网站登录商城：</dt>
                    <dd class="qq"><a href=""><span></span>QQ</a></dd>
                    <dd class="weibo"><a href=""><span></span>新浪微博</a></dd>
                    <dd class="yi"><a href=""><span></span>网易</a></dd>
                    <dd class="renren"><a href=""><span></span>人人</a></dd>
                    <dd class="qihu"><a href=""><span></span>奇虎360</a></dd>
                    <dd class=""><a href=""><span></span>百度</a></dd>
                    <dd class="douban"><a href=""><span></span>豆瓣</a></dd>
                </dl>
            </div>
        </div>

        <div class="guide fl">
            <h3>还不是商城用户</h3>
            <p>现在免费注册成为商城用户，便能立刻享受便宜又放心的购物乐趣，心动不如行动，赶紧加入吧!</p>

            <a href="register" class="reg_btn">免费注册 >></a>
        </div>

    </div>
</div>
<!-- 登录主体部分end -->
