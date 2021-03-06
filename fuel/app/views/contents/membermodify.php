<?php echo Asset::css('contents/membermodify.css') ?>
<?php echo Asset::css('contents/validationEngine.jquery.css') ?>

<div class="formheading">
    会員情報編集
</div>
<div class="form">
    <div class="formleft">
        <div class="formleftin">名前<br></div>
        <div class="formleftin">フリガナ<br></div>
        <div class="formleftin">生年月日</div>
        <div class="formleftin">性別</div>
        <div class="formleftin">郵便番号</div>
        <div class="formleftin">住所</div>
        <div class="formleftin">番地</div><span class="description"></span>
        <div class="formleftin">号以降</div><span class="description"></span>
        <div class="formleftin">建物名</div>
        <div class="formleftin">会社名</div>
        <div class="formleftin">電話番号</div>
        <div class="formleftin">新しいメールアドレス</div>
        <div class="formleftin">現在のメールアドレス</div>
        <div class="formleftin">パスワード</div>
        <div class="formleftin">確認のためもう一度</div>
    </div>
    <div class="formright">
        <form action="" method="" id="formin">
          <div class="formrightin"><span class="description">性　：</span><input type="text" name="name">　<span class="description">名　：</span><input type="text" name="name"></div>
          <div class="formrightin"><span class="description">セイ：</span><input type="text" name="kana">　<span class="description">メイ：</span><input type="text" name="kana"></div>
          <div class="formrightin">西暦　<span class="years">1900</span>　年　<span class="month">10</span>　月　<span class="days">10</span>　日　　<span class="description">（変更できません）</span></div>
          <div class="formrightin"><span class="sex">男性</span>　　　　<span class="description">（変更できません）</span></div>
          <div class="formrightin"><input type="text" name="Postal"  size="7">　　　<input type="button" name="search" value="検索" id="search">　　<span class="description">（-は含まない）</span></div>
          <div class="formrightin"><input type="text" name="address" size="40"></div>
          <div class="formrightin"><input type="text" name="banti" size="4"></div><span class="description">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”2” を入力してください。</span>
          <div class="formrightin"><input type="text" name="gouikou" size="5"></div><span class="description">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”2” を入力してください。</span>
          <div class="formrightin"><input type="text" name="tatemono" size="40"><span class="description">部屋番号・フロア番号も含む</span>
          </div>
          <div class="formrightin"><input type="text" name="kaisya" size="40"></div>
          <div class="formrightin"><input type="text" name="phone"><span class="description">（-を含めず続けて書く）</span></div>
          <div class="formrightin"><input type="text" name="mail1" size="60" class="validate[custom[email]]"></div>
          <div class="formrightin"><input type="text" name="mail2" size="60" class="validate[custom[email]"></div>
          <div class="formrightin"><input type="password" id="pass1" name="pass1" size="50" class="validate[minSize[1]"><span class="description">（8文字以上）</span></div>
          <div class="formrightin"><input type="password" name="pass2" size="50" class="validate[equals[pass1]]"></div>
        </div>
      </div>
<div class="modify">
    <input type="submit" value="編集完了" class="biglink">
</div>
    </form>
<div class="back">
    <a class="biglink">編集せず戻る</a>
</div>
<?php echo Asset::js('contents/jquery/jquery.js') ?>
<?php echo Asset::js('contents/jquery/jquery.validationEngine.js') ?>
<?php echo Asset::js('contents/jquery/jquery.validationEngine-ja.js') ?>
<?php echo Asset::js('contents/newmember.js') ?>
