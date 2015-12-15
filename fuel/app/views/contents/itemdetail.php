<?php echo Asset::css('contents/itemdetail.css')?>

<div class="menu">
  <div class="menuheading">
    メニュー
  </div>
  <div class="menuin">
          <div class="menuname">ソーセージナラベターノ</div>
    <div class="menuleft">
      <img src="../img/pizza.jpg" alt="pizza">
    </div>
    <div class="menuright">
              <div class="pricezei">S￥<span>2000</span> M￥<span>3000</span> L￥<span>5000</span></div>
              <div class="price">S￥<span>2000</span> M￥<span>3000</span> L￥<span>5000</div>
      <div class="description">ソーセージをふんだんに並べました</div>
    </div>
  </div>
</div>

<div class="size">
  <div class="sizeheading">
    サイズ
  </div>
  <div class="sizein">
          <div class="s"><label>					<input type="radio" name="size" value="s">Sサイズ <br>
              <img src="../img/s.png" height="200" width="200" alt=""></label>

    </div>
          <div class="m"><label>					<input type="radio" name="size" value="m">Mサイズ <br>
              <img src="../img/m.png" height="200" width="200" alt=""></label>

    </div>
          <div class="l"><label>					<input type="radio" name="size" value="l">Lサイズ <br>
              <img src="../img/l.png" height="200" width="200" alt=""></label>
    </div>
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
