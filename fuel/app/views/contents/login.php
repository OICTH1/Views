<?php echo Asset::css('contents/login.css')?>

<div class="loginformheading">
    ログイン
</div>
<div class="loginform">
    <div class="form">
       <form action="" method="">
        <p>
            ご登録のメールアドレス　<input type="text" name="mail" size="40" id="form-mail">
        </p>
        <p>
            　　　　　　　　パスワード　<input type="password" name="pass" size="40">
        </p>
        </form>
    </div>
    <div class="login">
        <a class="biglink">ログイン</a>
    </div>
</div>
<div class="newmember">
    <a class="biglink">新規会員登録はこちら</a>
</div>
<div class="top">
    <a class="biglink">トップページへ戻る</a>
</div>

<?php echo Asset::js('contents/jquery/jquery.js');?>
<?php echo Asset::js('contents/login.js')?>
