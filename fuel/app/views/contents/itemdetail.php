<?php echo Asset::css('contents/itemdetail.css')?>

<div class="menu">
  <div class="menuheading">
    メニュー
  </div>
  <div class="menuin">
          <div class="menuname">ソーセージナラベターノ</div>
    <div class="menuleft">
      <?php echo Asset::img('contents/pizza1.jpg'); ?>
    </div>
    <div class="menuright">
              <div class="pricelist"><div class="price">￥<span>2000</span></div><div class="price-sml">S￥<span>2000</span> M￥<span>3000</span> L￥<span>5000</span></div></div>
              <div class="zei">(税込)</div>
      <div class="description">ソーセージをふんだんに並べましたソーセージをふんだんに並べましたソーセージをふんだんに並べましたソーセージをふんだんに並べましたソーセージをふんだんに並べました</div>
    </div>
  </div>
</div>

<div class="size">
  <div class="sizeheading">
    サイズ
  </div>
  <div class="sizein">
          <label><div class="s">					Sサイズ<br><input type="radio" name="size" value="s">
    </div></label>
          <label><div class="m">					Mサイズ<br><input type="radio" name="size" value="m">
    </div></label>
          <label><div class="l">					Lサイズ<br><input type="radio" name="size" value="l">
    </div></label>
  </div>
</div>
<div class="select">
  <div class="selectleft">
    個数<select name="quantity" >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="selectcenter">
          ご注文金額　<span>5000</span>円
  </div>
  <div class="selectright">
    <span>カートへ入れる</span>
  </div>
</div>
<div class="list">
  <a href="" title="" class="biglink">一覧へ戻る</a>
</div>
