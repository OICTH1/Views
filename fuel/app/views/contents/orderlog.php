 	<?php echo Asset::css('contents/orderlog.css');?>
	<?php echo Asset::js('jquery/jquery.js');?>
        <script>
            $(function(){
            $('.log-list-item').click(function() {
                var $datail = $(this).children('.datail');
                var $title = $(this).children('.title');
                if($datail.hasClass('open')) {
                    $datail.removeClass('open');
                    $datail.slideUp('slow');
                    var $a = $title.find('.titleright');
                    $a.removeClass('closeicon');
                    $a.addClass('openicon');
                } else {
                    $datail.addClass('open');
                    $datail.slideDown('slow');
                    var $a = $title.find('.titleright');
                    $a.removeClass('openicon');
                    $a.addClass('closeicon');
                }
            });
            });
        </script>
        <div class="contents">
            <div class="logheading">
                注文履歴一覧
            </div>
            <div class="log">
                <ul class="log-list" style="list-style:none">
                    <li class="log-list-item">
                        <div class="title"><span class="titleleft">ソーセージナラベターノ(L):ソーセージナラベターノ(L):ソーセージナラベターノあ</span><span class="titleright openicon"></span></div>
                        <div class="datail">
                            <div class="cart">
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="summoney">
                                    合計金額
                                    <div class="sum">
                                        <span>15,000</span>円
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="log-list-item">
                        <div class="title"><span class="titleleft">ソーセージナラベターノ(L):ソーセージナラベターノ(L):ソーセージナラベターノあ</span><span class="titleright openicon"></span></div>
                        <div class="datail">
                            <div class="cart">
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="summoney">
                                    合計金額
                                    <div class="sum">
                                        <span>15,000</span>円
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="log-list-item">
                        <div class="title"><span class="titleleft">ソーセージナラベターノ(L):ソーセージナラベターノ(L):ソーセージナラベターノあ</span><span class="titleright openicon"></span></div>
                        <div class="datail">
                            <div class="cart">
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="summoney">
                                    合計金額
                                    <div class="sum">
                                        <span>15,000</span>円
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="log-list-item">
                        <div class="title"><span class="titleleft">ソーセージナラベターノ(L):ソーセージナラベターノ(L):ソーセージナラベターノあ</span><span class="titleright openicon"></span></div>
                        <div class="datail">
                            <div class="cart">
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="cartin">
                                    <div class="name">
                                        <span>ソーセージナラベターノ</span><span>(L)</span>
                                    </div>
                                    <div class="num">
                                        数量<span>1</span>
                                    </div>
                                    <div class="money">
                                        金額￥<span>5000</span>
                                    </div>
                                </div>
                                <div class="summoney">
                                    合計金額
                                    <div class="sum">
                                        <span>15,000</span>円
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                    
                </div>
            <div class="back">
                <a class="biglink">戻る</a>
            </div>
        </div>

