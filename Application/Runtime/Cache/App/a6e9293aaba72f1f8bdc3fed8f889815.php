<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>shopping_cart</title>

    <link href="/mogu/Public/Apphome/css/shopping_cart.css" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="header-top">
        <div class="header-black"><a><img src="/mogu/Public/Apphome/images/shopping_header_black"></a></div>
        <div class="shopping-num">购物车（<span id="topNum">0</span>）</div>
        <div class="shopping-header-right">
            <span class="bianji">编辑</span>
            <a class="shopping-lianxi"></a>
        </div>
    </div>
</header>

<section class="shopping-section">
    <div class="shopping-section-list-box">
        <div class="shopping-section-box">
      <!--  <h3 class="shopping-section-head">
            <input type="checkbox" class="shop-checkbox ">
            <a href="javascript:;">蓝天百芸</a>
        </h3>-->
        <div class="shopping-section-goods">
            <div class="cartgood">
                <input type="checkbox" class="shop-checkbox " style="margin-top: 50px;">
                <div class="shopping-cartgoods">
                    <div class="shopping-cartgoods-left">
                        <a class="goods-pic">
                            <img src="/mogu/Public/Apphome/images/shopping-goods1_220x330.jpg">
                        </a>
                    </div>
                    <div class="cartgoods-title-box">
                        <a><span class="cartgoods-title">新品衬衫女长袖BF性感宽松白衬衫居家服</span></a>
                        <p class="cgood-desc-ts-sku">颜色：白色；尺码：L；</p>
                        <div class="price-box">
                            <span class="cgood-pc-price-now">￥49.00</span>
                            <span class="cgood-pc-price-origin">￥70.00</span>
                            <span class="cgood-pc-count">x1</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="shopping-section-box">
      <!--  <h3 class="shopping-section-head">
            <input type="checkbox" class="shop-checkbox ">
            <a href="javascript:;">小丫头</a>
        </h3>-->
        <div class="shopping-section-goods">
            <div class="cartgood">
                <input type="checkbox" class="shop-checkbox " style="margin-top: 50px;">
                <div class="shopping-cartgoods">
                    <div class="shopping-cartgoods-left">
                        <a class="goods-pic">
                            <img src="/mogu/Public/Apphome/images/shopping-goods2_220x330.jpg">
                        </a>
                    </div>
                    <div class="cartgoods-title-box">
                        <a><span class="cartgoods-title">2017春夏新款韩版蝴蝶结五分袖V领条纹衬衣女装学生气质上衣</span></a>
                        <p class="cgood-desc-ts-sku">颜色：灰蓝色条纹；尺码：M；</p>
                        <div class="price-box">
                            <span class="cgood-pc-price-now">￥49.00</span>
                            <span class="cgood-pc-price-origin">￥70.00</span>
                            <span class="cgood-pc-count">x1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="shopping-section-box">
        <!--<h3 class="shopping-section-head">
            <input type="checkbox" class="shop-checkbox ">
            <a href="javascript:;">小资家潮鞋</a>
        </h3>-->
        <div class="shopping-section-goods">
            <div class="cartgood">
                <input type="checkbox" class="shop-checkbox " style="margin-top: 50px;">
                <div class="shopping-cartgoods">
                    <div class="shopping-cartgoods-left">
                        <a class="goods-pic">
                            <img src="/mogu/Public/Apphome/images/shopping-goods3_220x330.jpg">
                        </a>
                    </div>
                    <div class="cartgoods-title-box">
                        <a><span class="cartgoods-title">新款松糕厚底单鞋一字扣小白鞋女一脚蹬懒人鞋乐福鞋</span></a>
                        <p class="cgood-desc-ts-sku">颜色：灰色；尺码：38；</p>
                        <div class="price-box">
                            <span class="cgood-pc-price-now">￥49.00</span>
                            <span class="cgood-pc-price-origin">￥70.00</span>
                            <span class="cgood-pc-count">x1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="shopping-section-box">
        <!--<h3 class="shopping-section-head">
            <input type="checkbox" class="shop-checkbox ">
            <a href="javascript:;">誉福园旗舰店</a>
        </h3>-->
        <div class="shopping-section-goods">
            <div class="cartgood">
                <input type="checkbox" class="shop-checkbox " style="margin-top: 50px;">
                <div class="shopping-cartgoods">
                    <div class="shopping-cartgoods-left">
                        <a class="goods-pic">
                            <img src="/mogu/Public/Apphome/images/shopping-goods4_220x330.jpg">
                        </a>
                    </div>
                    <div class="cartgoods-title-box">
                        <a><span class="cartgoods-title">【誉福园】新鲜水果越南进口青芒果玉芒5斤 包邮</span></a>
                        <p class="cgood-desc-ts-sku">规格：5斤；</p>
                        <div class="price-box">
                            <span class="cgood-pc-price-now">￥28.00</span>
                            <span class="cgood-pc-price-origin">￥40.00</span>
                            <span class="cgood-pc-count">x1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="shopping-section-total-box">
        <div class="shopping-section-total">
        <div class="checkout-checkbox">
            <input type="checkbox" id="shop-checkboxs" class="shop-checkbox " style="margin-top: 8px">
            <label class="quanxuan">全选（<span class="allnum">0</span>）</label>
        </div>
        <div class="total-price"><p>￥<span class="all-total" id="all-total">0:00</span></p></div>
        <div class="meili-all-vue-base-button">去结算</div>
    </div>
    </div>
</section>
<script src="/mogu/Public/Apphome/js/Shopping_Cart.js"></script>
</body>
</html>