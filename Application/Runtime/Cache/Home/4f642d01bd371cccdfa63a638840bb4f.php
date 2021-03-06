<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mogu</title>
	<link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">

	<link rel="stylesheet" href="/mogu/Public/home/css/header.css">
	<link rel="stylesheet" href="/mogu/Public/home/css/twzt.css">
	<link rel="stylesheet" href="/mogu/Public/home/css/tail.css">

</head>
<body>
<!--头部1-->
<div class="nav">
	<div class="nav-wap ">
		<a href="http://localhost/mogu/Home/page/index.html" class="nav-logo">蘑菇头首页</a>
		<ul class="nav-ul">
			<li class="s1"><a href="http://localhost/mogu/Home/User/login.html" target="_blank">登录</a></li>
			<li class="s1"><a href="http://localhost/mogu/Home/User/register.html" target="_blank">注册</a></li>
			<li class="s1 ullia nav-dd"><a href="http://localhost/mogu/Home/Order/Order.html" target="_blank">我的订单</a></li>
			<li class="s1 ullia nav-shopping">
				<a href="http://localhost/mogu/Home/ShoppingCart/Shopping_Cart.html" target="_blank"><span>购物车</span></a>
				<div class="sp-cart">
					购物车里没有商品！
				</div>
			</li>
			<li class="s1 ullia nav-khfw">
				<a href="">客户服务</a>
				<i class="nav-icon"></i>
				<ol class="khfw-tcc">
					<li><a href="">消费者服务</a></li>
					<li><a href="">商家服务</a></li>
					<li><a href="">规则中心</a></li>
				</ol>
			</li>
			<li class="s1 ullia nav-wdxd">
				<a href="">我的小店</a>
				<i class="nav-icon"></i>
				<ol class="khfw-tcc">
					<li><a href="">管理后台</a></li>
					<li><a href="">商家社区</a></li>
					<li><a href="">商家培训</a></li>
					<li><a href="">市场入驻</a></li>
				</ol>
			</li>
		</ul>
	</div>
</div>
<!--头部2-->
<div class="header header-bottom">
	<div class="nav-wap">
		<a href="http://localhost/mogu/Home/page/index.html" class="logo"></a>
		<div class="header-ssk">
			<div class="header-srk">
				<div class="header-ssp">
					<span class="selected" id="sl">搜商品</span>
					<ol class="ssp-ol">
						<li class="lisp"><a href="javascript:;">商品</a></li>
						<li class="lidp"><a href="javascript:;">店铺</a></li>
					</ol>
				</div>
				<div class="header-text">
					<input type="text" placeholder="套装新版韩装" class="input-text">
					<div class="header-lsjl"><span style="padding: 10px">历史记录</span></div>
					<input type="submit" value="搜索" class="input-btn">
				</div>
			</div>
			<div class="header-tj">
				<a href="">春季套装</a>
				<a href="">卫衣</a>
				<a href="">牛仔裤</a>
				<a href="">打底衫</a>
				<a href="">单鞋</a>
				<a href="">斜挎包</a>
				<a href="">男士外套</a>
				<a href="">棒球服</a>
				<a href="">连衣裙</a>
			</div>
		</div>
		<div class="header-ewm">
			<img src="/mogu/Public/home/images/ewm1.png" alt="">
		</div>
	</div>
</div>

    <link href="/mogu/Public./home/css/Commodity_details.css" rel="stylesheet">
    <link href="/mogu/Public./home/css/share.css" rel="stylesheet">

<!----------------------身体部分--------------------->
<!--身体部分头部-->
<div class="commodity_details_body_header">
    <div class="commodity_details_mod_cont">
        <a class="commodity_details_shop_bg_img"></a>
    </div>
</div>
<!--身体部分的导航条-->
<div class="commodity_details_body_header_nav">
    <div class="commodity_details_body__nav_box">
        <div class="commodity_details_body_mod_item">
            <div class="commodity_details_body_mod_item_1200">
                <ul class="commodity_details_body_mod_item_ul">
                    <li><a href="javascript:;">首页</a></li>
                    <li class="commodity_details_body_mod_all">
                        <a href="javascript:;">全部商品
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        </a>
                        <!--二级菜单-->
                        <div class="commodity_details_body_ul_none">
                            <ul>
                                <li class="commodity_details_li_cur"><a href="javascript:;">连衣裙</a></li>
                                <li class="commodity_details_li_cur"><a href="javascript:;">牛仔裤</a></li>
                                <li class="commodity_details_li_cur"><a href="javascript:;">牛仔外套</a></li>
                                <li class="commodity_details_li_cur"><a href="javascript:;">雪纺衫/蕾丝衫</a></li>
                                <li class="commodity_details_li_cur"><a href="javascript:;">T恤</a></li>
                                <li class="commodity_details_li_cur"><a href="javascript:;">衬衫</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="z-nav-list"><a href="javascript:;">连衣裙</a></li>
                    <li class="z-nav-list"><a href="javascript:;">牛仔裤</a></li>
                    <li class="z-nav-list"><a href="javascript:;"> 牛仔外套</a></li>
                    <li class="z-nav-list"><a href="javascript:;">雪纺衫/蕾丝衫</a></li>
                    <li class="z-nav-list"><a href="javascript:;">衬衫</a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!----身体正部--->
<div class="commodity_details_body_wrap">
    <div class="commodity_details_body_wrap1200">
        <div class="commodity_details_body_wrap_primary">
            <div class="commodity_details_body_wrap_primary_goods">
                <div class="fl goods_topimg">
                    <div class="big_img">
                        <img src="/mogu/Public/home/images/commodity_datelis_big_img1_640x960.jpg_468x468.jpg" id="big_images">
                    </div>
                    <div class="four_small_img">
                        <div class="four_s_i_center">
                            <div class="list">
                                <ul class="four_s_i_center_ul">
                                    <li><img id="btn1" src="/mogu/Public/home/images/four_s_i_center1_100x100.jpg"><i class="four_ul_line"></i></li>
                                    <li><img id="btn2" src="/mogu/Public/home/images/four_s_i_center4_100x100.jpg"><i class="four_ul_line"></i></li>
                                    <li><img id="btn3" src="/mogu/Public/home/images/four_s_i_center5_100x100.jpg"><i class="four_ul_line"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fl commodity_details_body_wrap_goods_info">
                    <div class="info_box">
                        <h1 class="goods_title">
                            <span itemprop="name">2017夏装新款百搭圆领七分袖T恤女宽松休闲镂空袖T恤</span>
                        </h1>
                        <div class="goods_prowrap">
                            <div class="goods_prowrap_box">
                                <span class="goods_prowrap_price">价格：</span>
                                <div class="property_cont">
                                    <span>¥70.00</span>
                                </div>
                            </div>
                            <div class="goods_prowrap_box">
                                <span class="property_type_now">促销价：</span>
                                <div class="property_cont_now fl">
                                    <span id="J_NowPrice" class="property_cont_now_price">¥49.00</span>
                                </div>
                                <div class="property_extra fr">
                                    <span class="mr10">评价：<span class="num">301</span></span>
                                    <span>累计销量：<span class="num J_SaleNum">3218</span></span>
                                </div>
                            </div>

                        </div>
                        <div class="goods_prowrap_lianxi">
                            <dl class="goods_prowrap_lianxi_clearfix">
                                <dt>客服：</dt>
                                <dd><div class="mogutalk_widget_btn" ></div></dd>
                            </dl>
                        </div>
                        <div class="goods_sku_xz">
                            <div class="goods_sku_xz_content">
                                <dl class="goods_sku_xz_content_ys">
                                    <dt>颜色：</dt>
                                    <dd>
                                        <ol class="goods_sku_xz_style_list">
                                            <li class="goods_sku_xz_style_list_img">
                                                <span class="span">红色</span>
                                            </li>
                                            <li class="goods_sku_xz_style_list_img">
                                                <span class="span">白色</span>
                                            </li>
                                            <li class="goods_sku_xz_style_list_img">
                                                <span class="span">黑色</span>
                                            </li>
                                        </ol>
                                    </dd>
                                </dl>
                                <dl class="goods_sku_xz_size">
                                    <dt>尺码：</dt>
                                    <dd>
                                        <ol class="goods_sku_xz_sizeList goods_sku_xz_style_list">
                                            <li class="goods_sku_mashu" data-id="100" title="M">M</li>
                                            <li class="goods_sku_mashu" data-id="101" title="S">S</li>
                                            <li class="goods_sku_mashu" data-id="102" title="L">L</li>
                                            <li class="goods_sku_mashu" data-id="103" title="XL">XL</li>
                                        </ol>
                                    </dd>
                                </dl>
                                <dl style="height: 42px;">
                                    <dt>数量：</dt>
                                    <dd class="num">
                                        <div class="goods_sku_goods_num fl">
                                            <span class="goods_sku_num_reduce"></span>
                                            <input class="goods_sku_num_input" type="text" value="1">
                                            <span class="goods_sku_num_add "></span>
                                        </div>
                                        <div class="goods_sku_stock fl">库存25563件</div>
                                    </dd>
                                </dl>
                            </div>
                            <div class="commodity_details_goods_buy">
                                <a href="http://localhost/mogu/Home/ConfirmOrder/Confirm_Order.html" target="_blank" class="fl mr10 buy_btn_now">立刻购买</a>
                                <a href="javascript:;" class="fl mr10 buy_cart buy_btn_now">加入购物车</a>
                            </div>
                        </div>
                        <div class="goods_social">
                            <div class="goods_social_item">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span class="fav_num">12691</span>
                            </div>
                            <div class="goods_social_share">
                                <b></b>
                                分享
                                <div class="goods_social_share-ww">
                                    <a href="javascript:;" target="_blank" class="forqzone" title="关注qq空间"></a>
                                    <a href="javascript:;" target="_blank" class="forrenren" title="关注人人"></a>
                                    <a href="javascript:;" target="_blank" class="forsina" title="关注sina"></a>
                                    <a href="javascript:;" target="_blank" class="forweixin" title="关注微信"></a>
                                </div>
                            </div>
                            <div class="goods_social_report"><a>举报</a></div>
                        </div>
                        <div class="goods_extra_box">
                            <div class="goods_extra_services">
                                <div class="fl goods_extra_services_label">服务承诺：</div>
                                <ul class="goods_extra_services_ul">
                                    <li class="goods_services_li">
                                        <span class="goods_services_link"><img src="/mogu/Public/home/images/tui_40x40.png">退货补运费</span>
                                    </li>
                                    <li class="goods_services_li">
                                        <span class="goods_services_link"><img src="/mogu/Public/home/images/qi_40x40.png">七天无理由退货</span>
                                    </li>
                                    <li class="goods_services_li">
                                        <span class="goods_services_link"><img src="/mogu/Public/home/images/baoyou_40x40.png">全国包邮</span>
                                    </li>
                                    <li class="goods_services_li">
                                        <span class="goods_services_link"><img src="/mogu/Public/home/images/fahuo_40x40.png">72小时发货</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="goods_extra_pay">
                                <div class="fl goods_extra_pay_label">支付方式：</div>
                                <div class="fl goods_extra_pay_nomaibei"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 热卖推荐 -->
                <div class="primary_slide_right">
                    <div class="goods_recommend_right">
                        <p class="title"><s></s><span>热卖推荐</span></p>
                        <div class="goods_recommend_right_pic_box">
                            <ul>
                                <li>
                                    <a href="javascript:;"><img src="/mogu/Public/home/images/remai1_640x960.jpg_220x330.jpg"></a>
                                    <span>￥39.90</span>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="/mogu/Public/home/images/remai2_640x960.jpg_220x330.jpg"></a>
                                    <span>￥49.90</span>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="/mogu/Public/home/images/remai3_640x960.jpg_220x330.jpg"></a>
                                    <span>￥36.90</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--套餐-->
        <div class="commodity_details_Package">
            <!-- 顶部 -->
            <div class="col_top">
                <div class="col_top_dapei_container">
                    <div class="col_top_dapei_taocan_one">
                        <span class="dapei_tab_item">套餐一</span>
                    </div>
                    <div class="dapei_body">
                        <ul class="dapei_body_items_ul">
                            <li class="dapei_body_items_li">
                                <a class="dapei_body_items_li_a"><img src="/mogu/Public/home/images/taocan1_160x160.jpg"></a>
                                <span class="dapei_body_items_item_price">
                                    <span class="dapei_checkbox">
                                        <input type="checkbox" checked="checked" disabled="">
                                    </span>
                                    <span class="dapei_item_price">￥49</span>
                                </span>
                                <div class="dapei_sku_select">
                                    <span>XL,红色,1件</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <i class="drop-down"></i>
                                </div>
                                <!--弹出框-->
                                <div class="dapei_sku_body_tck">
                                    <div class="content">
                                        <div class="pannel_title">
                                            <span class="pannel_title_text">选择商品信息</span>
                                            <b class="pannel_close">╳</b>
                                        </div>
                                        <div class="pannel_xz_box">
                                            <div class="sku_list">
                                                <dl class="goods_sku_xz_size">
                                                    <dt>尺码：</dt>
                                                    <dd>
                                                        <ol class="goods_sku_xz_sizeList goods_sku_xz_style_list">
                                                            <li class="goods_sku_mashu" data-id="100" title="M">M</li>
                                                            <li class="goods_sku_mashu" data-id="101" title="S">S</li>
                                                            <li class="goods_sku_mashu" data-id="102" title="L">L</li>
                                                            <li class="goods_sku_mashu" data-id="103" title="XL">XL</li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl class="goods_sku_xz_content_ys" style="padding-left: 0;">
                                                    <dt>款式：</dt>
                                                    <dd>
                                                        <ol class="goods_sku_xz_style_list">
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center1_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center3_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center5_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl style="height: 42px;">
                                                    <dt>数量：</dt>
                                                    <dd class="num">
                                                        <div class="goods_sku_goods_num fl">
                                                            <span class="goods_sku_num_reduce"></span>
                                                            <input class="goods_sku_num_input" type="text" value="1">
                                                            <span class="goods_sku_num_add "></span>
                                                        </div>
                                                        <div class="goods_sku_stock fl">库存25563件</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="dapei_sku_body_tck_sure">
                                            <span class="dapei_sku_tck_sure_btn">确定</span>
                                        </div>
                                    </div>
                                </div>

                                <span class="dapei_plus">+</span>
                            </li>
                            <li class="dapei_body_items_li" style="margin-right: 30px;">
                                <a class="dapei_body_items_li_a">
                                    <img src="/mogu/Public/home/images/taocan2_160x160.jpg">
                                </a>
                                <span class="dapei_body_items_item_price">
                                    <span class="dapei_checkbox">
                                        <input type="checkbox" checked="checked" disabled="">
                                    </span>
                                    <span class="dapei_item_price">￥39</span>
                                </span>
                                <div class="dapei_sku_select">
                                    <span>均码,白色,1件</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <i class="drop-down"></i>
                                </div>
                                <!--弹出框-->
                                <div class="dapei_sku_body_tck">
                                    <div class="content">
                                        <div class="pannel_title">
                                            <span class="pannel_title_text">选择商品信息</span>
                                            <b class="pannel_close">╳</b>
                                        </div>
                                        <div class="pannel_xz_box">
                                            <div class="sku_list">
                                                <dl class="goods_sku_xz_size">
                                                    <dt>尺码：</dt>
                                                    <dd>
                                                        <ol class="goods_sku_xz_sizeList goods_sku_xz_style_list">
                                                            <li class="goods_sku_mashu" data-id="100" title="M">M</li>
                                                            <li class="goods_sku_mashu" data-id="101" title="S">S</li>
                                                            <li class="goods_sku_mashu" data-id="102" title="L">L</li>
                                                            <li class="goods_sku_mashu" data-id="103" title="XL">XL</li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl class="goods_sku_xz_content_ys" style="padding-left: 0;">
                                                    <dt>款式：</dt>
                                                    <dd>
                                                        <ol class="goods_sku_xz_style_list">
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center6_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center7_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl style="height: 42px;">
                                                    <dt>数量：</dt>
                                                    <dd class="num">
                                                        <div class="goods_sku_goods_num fl">
                                                            <span class="goods_sku_num_reduce"></span>
                                                            <input class="goods_sku_num_input" type="text" value="1">
                                                            <span class="goods_sku_num_add "></span>
                                                        </div>
                                                        <div class="goods_sku_stock fl">库存25563件</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="dapei_sku_body_tck_sure">
                                            <span class="dapei_sku_tck_sure_btn">确定</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dapei_body_items_li" style="margin-right: 30px;">
                                <a class="dapei_body_items_li_a"><img src="/mogu/Public/home/images/taocan3_160x160.jpg"></a>
                                <span class="dapei_body_items_item_price">
                                    <span class="dapei_checkbox">
                                        <input type="checkbox">
                                    </span>
                                    <span class="dapei_item_price">￥32.16</span>
                                </span>
                                <div class="dapei_sku_select">
                                    <span>选着颜色规格</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <i class="drop-down"></i>
                                </div>
                                <!--弹出框-->
                                <div class="dapei_sku_body_tck">
                                    <div class="content">
                                        <div class="pannel_title">
                                            <span class="pannel_title_text">选择商品信息</span>
                                            <b class="pannel_close">╳</b>
                                        </div>
                                        <div class="pannel_xz_box">
                                            <div class="sku_list">
                                                <dl class="goods_sku_xz_size">
                                                    <dt>尺码：</dt>
                                                    <dd>
                                                        <ol class="goods_sku_xz_sizeList goods_sku_xz_style_list">
                                                            <li class="goods_sku_mashu" data-id="100" title="M">M</li>
                                                            <li class="goods_sku_mashu" data-id="101" title="S">S</li>
                                                            <li class="goods_sku_mashu" data-id="102" title="L">L</li>
                                                            <li class="goods_sku_mashu" data-id="103" title="XL">XL</li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl class="goods_sku_xz_content_ys" style="padding-left: 0;">
                                                    <dt>款式：</dt>
                                                    <dd>
                                                        <ol class="goods_sku_xz_style_list">
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center8_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                            <li class="goods_sku_xz_style_list_img">
                                                                <img class="goods_sku_xz_small_pic" src="/mogu/Public/home/images/four_s_i_center9_100x100.jpg">
                                                                <b></b>
                                                            </li>
                                                        </ol>
                                                    </dd>
                                                </dl>
                                                <dl style="height: 42px;">
                                                    <dt>数量：</dt>
                                                    <dd class="num">
                                                        <div class="goods_sku_goods_num fl">
                                                            <span class="goods_sku_num_reduce"></span>
                                                            <input class="goods_sku_num_input" type="text" value="1">
                                                            <span class="goods_sku_num_add "></span>
                                                        </div>
                                                        <div class="goods_sku_stock fl">库存25563件</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="dapei_sku_body_tck_sure">
                                            <span class="dapei_sku_tck_sure_btn">确定</span>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                        <div class="dapei_buy_total">
                            <div class="dapei_buy_price">
                                <span class="dapei_buy_price_text">优惠搭配价格：</span>
                                <span class="dapei_buy_price_price">¥78</span>
                            </div>
                            <div class="dapei_buy_save">
                                <span class="dapei_buy_save_text">为您节省¥</span>
                                <span class="dapei_buy_save_price">34</span>
                            </div>
                            <div class="dapei_buy_now">
                                <span class="dapei_buy_now_btn">立即购买</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--主体部分-->
            <div class="col_main">
                <!-- 侧边栏 (左边)-->
                <div class="col_sidebar_left">
                    <!-- 店铺模块 -->
                    <div class="ui_box_left">
                        <h3 class="ui_hd_left">韩范里儿<span></span></h3>
                        <div class="ui_bd_left">
                            <div class="shop_evaluate_left">
                                <ul>
                                    <li>
                                        <p class="text">描述</p>
                                        <p class="num_def">4.39</p>
                                    </li>
                                    <li>
                                        <p class="text">价格</p>
                                        <p class="num_def">4.35</p>
                                    </li>
                                    <li>
                                        <p class="text">质量</p>
                                        <p class="num_def">4.34</p>
                                    </li>
                                    <li>
                                        <p class="text">服务</p>
                                        <p class="num_def">4.44</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop_btns">
                                <a class="shop_follow_btn_fav " href="javascript:;">
                                    收藏店铺 </a>
                                <a class="btn_goto" href="javascript:;">进入店铺</a>
                            </div>
                            <div class="shop_search">
                                <i class="line"></i>
                                <form action="" method="get">
                                    <input class="inptxt" type="text" name="q">
                                    <input class="inpbtn" type="submit" value="店内搜索">
                                </form>
                            </div>
                            <div class="shop_provide">
                                <i class="line"></i>
                                <i class="arrow"></i>
                                <a class="pic" href="javascript:;">
                                    <img class="img_lazyload" width="150" height="26"
                                         src="/mogu/Public/home/images/xiaodian_150x26.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 分类模块 -->
                    <div class="module_classify">
                        <div class="module_classify_box">
                            <h3 class="ui_hd">本店分类</h3>
                            <div class="ui_bd">
                                <ul class="classify_list">
                                    <li><a href="javascript:;">全部商品</a></li>
                                    <li><a href="javascript:;">时尚套装SUIT</a></li>
                                    <li><a href="javascript:;">连衣裙DRESS</a></li>
                                    <li><a href="javascript:;">上衣JACKET</a></li>
                                    <li><a href="javascript:;">裤子PANTS</a></li>
                                    <li><a href="javascript:;">半身裙</a></li>
                                    <li><a href="javascript:;">卫衣</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 看了又看模块 -->
                    <div class="module_repeat">
                        <div class="repeat_info">
                            <h3 class="ui_hd">看了又看</h3>
                            <div class="repeat_info_box">
                                <ul class="repeat_list">
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin1_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">39.90</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">1727</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin2_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">32.90</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">56</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin3_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">33.10</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">678</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin4_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">40.00</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">286</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 模块标签页 --></div>
            <div class="col_main">
                <div class="col_main_center">
                    <!-- 选项栏 -->
                    <div class="tabbar_box">
                        <ul class="tabbar_list_ul">
                            <li class="ul_li tab_graphic_ul_li selected">
                                <a href="#module_panel" role="tab" data-toggle="tab">商品详情</a>
                            </li>
                            <li class="ul_li"><a href="#cumulative_evaluation" role="tab"
                                                 data-toggle="tab">累计评价<em>252</em></a></li>
                            <li class="ul_li"><a href="#module_recommend" role="tab" data-toggle="tab">本店同类商品</a></li>

                        </ul>
                    </div>

                    <!-- 选项页 -->
                    <div class="panel_box carousel-inner" style="overflow: visible">
                        <!--商品详情-->
                        <div class="module_panel tab-pane active item" id="module_panel">
                            <!-- 商品描述 -->
                            <div class="module_panel_desc">
                                <div class="panel_title" id="panel_title1">
                                    <h1>商品描述</h1>
                                </div>
                                <div class="graphic_text">很好看的一款T恤，夏天里，就需要搭配一件美美哒的衣服。</div>
                            </div>
                            <!-- 产品参数 -->
                            <div class="module_panel_Product_parameters">
                                <div class="panel_title" id="panel_title2"><h1>产品参数</h1></div>
                                <div class="graphic_block">
                                    <!-- 表格 -->
                                    <table class="parameters_table">
                                        <tbody>
                                        <tr class="">
                                            <td>袖型: 其他袖型</td>
                                            <td>风格: 街头潮人,百搭</td>
                                            <td>尺码: S,L,M,XL</td>
                                        </tr>
                                        <tr class="">
                                            <td>上衣厚度: 适中</td>
                                            <td>版型: 宽松</td>
                                            <td>材质: 棉</td>
                                        </tr>
                                        <tr class="">
                                            <td>颜色: 红色,白色,黑色</td>
                                            <td>元素: 3D印花,镂空</td>
                                            <td>下摆: 敞口</td>
                                        </tr>
                                        <tr class="">
                                            <td>衣长: 常规款（51-65cm）</td>
                                            <td>领型: 圆领</td>
                                            <td>图案: 字母/文字/数字</td>
                                        </tr>
                                        <tr class="">
                                            <td>季节: 春夏</td>
                                            <td>袖长: 七分袖</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- 穿着效果 -->
                            <div class="wearing_effect">
                                <div class="panel_title" id="panel_title3"><h1>穿着效果</h1></div>
                                <!-- 描述 -->
                                <div class="wearing_effect_pic">
                                    <div class="pic_say_box">
                                        <img src="/mogu/Public/home/images/jiagesuoming_1125x285.jpg_750x999.jpg">
                                    </div>
                                </div>
                                <div class="wearing_effect_pic" style="padding-bottom:135.77215189873417%;">
                                    <div class="pic_say_box">
                                        <img src="/mogu/Public/home/images/xiaoguotu1_790x1278.jpg_750x999.jpg">
                                    </div>
                                </div>
                                <div class="wearing_effect_pic" style="padding-bottom:100.77215189873417%;">
                                    <div class="pic_say_box">
                                        <img src="/mogu/Public/home/images/xiaoguotu2_790x1318.jpg_750x999.jpg">
                                    </div>
                                </div>
                                <div class="wearing_effect_pic" style="padding-bottom:100.873417721519%;">
                                    <div class="pic_say_box">
                                        <img src="/mogu/Public/home/images/xiaoguotu3_790x1318.jpg_750x999.jpg">
                                    </div>
                                </div>
                            </div>
                            <!--细节做工-->
                            <div class="">
                                <div class="panel_title" id="panel_title4"><h1>细节做工</h1></div>
                                <div class="wearing_effect_pic">
                                    <div class="pic_say_box" style="width:100%;">
                                        <img style="width:100%;"
                                             src="/mogu/Public/home/images/xiaoguotu4_790x1318.jpg_750x999.jpg">
                                    </div>
                                </div>
                            </div>
                            <!-- 尺码说明 -->
                            <div class="size_specification">
                                <div class="panel_title" id="panel_title5"><h1>尺码说明</h1></div>
                                <div class="graphic_block">
                                    <table class="size_table">
                                        <thead>
                                        <tr>
                                            <td>尺码</td>
                                            <td>肩宽</td>
                                            <td>衣长</td>
                                            <td>胸围</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>M</td>
                                            <td>51</td>
                                            <td>60</td>
                                            <td>101</td>
                                        </tr>
                                        <tr>
                                            <td>S</td>
                                            <td>50</td>
                                            <td>59</td>
                                            <td>97</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>52</td>
                                            <td>61</td>
                                            <td>105</td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td>53</td>
                                            <td>62</td>
                                            <td>109</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!--提醒-->
                                    <div class="size-text">※ 以上尺寸为实物人工测量，因测量当时不同会有1-2cm误差，相关数据仅作参考，以收到实物为准。</div>
                                </div>
                            </div>
                            <!-- 本店同类商品 -->
                            <div class="module_recommend" style="padding-left: 0;padding-right: 0">
                                <div>
                                    <div class="panel_title recommend-title" id="panel_title6"><h1>本店同类商品</h1></div>
                                </div>
                                <div class="recommend_list">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" class="pic">
                                                <img src="/mogu/Public/home/images/tongleishangpin1_220x330.jpg">
                                            </a>
                                            <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                            <div class="info">
                                                <div class="price">
                                                    <em class="price_u">¥</em>
                                                    <span class="price_n">39.90</span>
                                                </div>
                                                <div class="fav">
                                                    <em class="fav_i"></em>
                                                    <span class="fav_n">1727</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="pic">
                                                <img src="/mogu/Public/home/images/tongleishangpin2_220x330.jpg">
                                            </a>
                                            <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                            <div class="info">
                                                <div class="price">
                                                    <em class="price_u">¥</em>
                                                    <span class="price_n">32.90</span>
                                                </div>
                                                <div class="fav">
                                                    <em class="fav_i"></em>
                                                    <span class="fav_n">56</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="pic">
                                                <img src="/mogu/Public/home/images/tongleishangpin3_220x330.jpg">
                                            </a>
                                            <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                            <div class="info">
                                                <div class="price">
                                                    <em class="price_u">¥</em>
                                                    <span class="price_n">33.10</span>
                                                </div>
                                                <div class="fav">
                                                    <em class="fav_i"></em>
                                                    <span class="fav_n">678</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="margin-right: 0;">
                                            <a href="javascript:;" class="pic">
                                                <img src="/mogu/Public/home/images/tongleishangpin4_220x330.jpg">
                                            </a>
                                            <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                            <div class="info">
                                                <div class="price">
                                                    <em class="price_u">¥</em>
                                                    <span class="price_n">40.00</span>
                                                </div>
                                                <div class="fav">
                                                    <em class="fav_i"></em>
                                                    <span class="fav_n">286</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 累计评价 -->
                        <div class="cumulative_evaluation tab-pane item" id="cumulative_evaluation">
                            <!-- 买家评价 -->
                            <div class="RatesBuyer">
                                <div class="panel_title">
                                    <h1>买家评价</h1>
                                </div>
                                <div class="rates_buyer">
                                    <div class="comment_info">
                                        <ul class="comment_info_list">
                                            <li class="score">
                                                <span class="comment_star">
                                                    <b style="width: 77px;"></b>
                                                </span>
                                                <span class="numbox">
                                                    <b class="num_v">4.35</b>
                                                    <span class="num_s">分</span>
                                                </span>
                                            </li>
                                            <li>
                                                <div class="title">价格合理</div>
                                                <div class="cont">
                                                    <span class="comment_star">
                                                        <b style="width: 77px;"></b>
                                                    </span>
                                                    <span class="num_v">4.33</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">商品质量</div>
                                                <div class="cont">
                                                    <span class="comment_star">
                                                        <b style="width: 77px;"></b>
                                                    </span>
                                                    <span class="num_v">4.62</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">描述相符</div>
                                                <div class="cont">
                                                    <span class="comment_star">
                                                        <b style="width: 77px;"></b>
                                                    </span>
                                                    <span class="num_v">4.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="comment_content">
                                        <div class="tags">
                                            <div class="list ">
                                                <a href="javascript:;" class="best">质量很好 (66)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">款式好 (46)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">料子很不错 (34)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">颜色正 (27)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">性价比高 (20)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">尺寸无偏差 (18)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">物流快 (15)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">卖家服务很好 (12)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">发货速度快 (8)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">做工不错 (7)</a>
                                                <b>|</b>
                                                <a href="javascript:;" class="best">和描述的一样 (5)</a>
                                                <b>|</b>
                                                <a href="javascript:;">质量一般 (10)</a>
                                                <b>|</b>
                                                <a href="javascript:;">物流有点慢 (5)</a>
                                                <b>|</b>
                                                <a href="javascript:;">有一点褪色 (4)</a>
                                                <b>|</b>
                                                <a href="javascript:;">材质一般 (3)</a>
                                                <b>|</b>
                                            </div>
                                        </div>
                                    </div>
                                    <!--评价导航-->
                                    <div class="navs">
                                        <a href="javascript:;" class="c">全部评价（354）</a>
                                        <a href="javascript:;" class="img">晒图（113）</a>
                                        <div class="comment_sort">
                                            <input type="radio" checked="">
                                            <label> 默认排序</label>
                                            <input type="radio" style="margin-left: 15px">
                                            <label> 时间排序</label>
                                        </div>
                                    </div>
                                    <!--列表-->
                                    <div class="comments_list">
                                        <div class="comments_list_pingjia">
                                            <div class="info_l">
                                                <!-- 评价用户、时间 -->
                                                <div class="info_t">
                                                    <span class="name">范***帆</span>
                                                    <span class="date">2017年04月26日</span>
                                                </div>
                                                <div class="info_m">手感不错，很舒服</div>
                                                <div class="info_b">
                                                    <p>
                                                    <span class="chose_size">尺码:L</span>
                                                    <span class="chose_color">颜色:红色</span>
                                                    <p/>
                                                    <p>
                                                        <span class="chose_tz">体重:55 kg</span>
                                                        <span class="chose_sg">身高:163 cm</span>
                                                        <span class="chose_hs">是否合身:合身</span>
                                                    </p>
                                                </div>
                                                <!-- 商家回复 -->
                                                <div class="info_reply">
                                                    <span class="fl">商家回复：</span>
                                                    <div class="content">
                                                        在这里，我们要感谢菇娘们一路的支持，感谢你们选择了韩范里儿，选择韩范家要说明你们眼光好，我们店铺一直坚持卖性比价高的衣服，同样的衣服，我们质量比别人好，价格比别人优惠，所以亲们可以放心购物。同时，授人玫瑰手有余香，您的好评是对我们最大的支持与鼓励，也将是我们不断前进的动力！期待菇娘们的每一次购物哦。
                                                    </div>
                                                    <span class="date fr">2017年04月27日</span>
                                                </div>
                                            </div>
                                            <div class="face">
                                                <img src="/mogu/Public/home/images/face164x64.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments_list">
                                        <div class="comments_list_pingjia">
                                            <div class="info_l">
                                                <!-- 评价用户、时间 -->
                                                <div class="info_t">
                                                    <span class="name">Lms</span>
                                                    <span class="date">2017年04月23日</span>
                                                </div>
                                                <div class="info_m">手感不错，很舒服</div>
                                                <div class="info_b">
                                                    <p>
                                                    <span class="chose_size">尺码:M</span>
                                                    <span class="chose_color">颜色:红色</span>
                                                    <p/>
                                                    <p>
                                                        <span class="chose_tz">体重:48 kg</span>
                                                        <span class="chose_sg">身高:160 cm</span>
                                                        <span class="chose_hs">是否合身:合身</span>
                                                    </p>
                                                </div>
                                                <!-- 商家回复 -->
                                                <div class="info_reply">
                                                    <span class="fl">商家回复：</span>
                                                    <div class="content">
                                                        感谢你们选择了韩范里儿,我们店铺一直坚持卖性比价高的衣服，同样的衣服，我们质量比别人好，价格比别人优惠，所以亲们可以放心购物。同时，授人玫瑰手有余香，您的好评是对我们最大的支持与鼓励，也将是我们不断前进的动力！期待菇娘们的每一次购物哦。
                                                    </div>
                                                    <span class="date fr">2017年04月27日</span>
                                                </div>
                                            </div>
                                            <div class="face">
                                                <img src="/mogu/Public/home/images/face2_64x64.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments_list">
                                        <div class="comments_list_pingjia">
                                            <div class="info_l">
                                                <!-- 评价用户、时间 -->
                                                <div class="info_t">
                                                    <span class="name">笑笑</span>
                                                    <span class="date">2017年04月29日</span>
                                                </div>
                                                <div class="info_m">手感不错，很舒服</div>
                                                <div class="info_b">
                                                    <p>
                                                    <span class="chose_size">尺码:L</span>
                                                    <span class="chose_color">颜色:红色</span>
                                                    <p/>
                                                    <p>
                                                        <span class="chose_tz">体重:55 kg</span>
                                                        <span class="chose_sg">身高:163 cm</span>
                                                        <span class="chose_hs">是否合身:合身</span>
                                                    </p>
                                                </div>
                                                <!-- 商家回复 -->
                                                <div class="info_reply">
                                                    <span class="fl">商家回复：</span>
                                                    <div class="content">
                                                        我们店铺一直坚持卖性比价高的衣服，同样的衣服，我们质量比别人好，价格比别人优惠，所以亲们可以放心购物。同时，授人玫瑰手有余香，您的好评是对我们最大的支持与鼓励，也将是我们不断前进的动力！期待菇娘们的每一次购物哦。
                                                    </div>
                                                    <span class="date fr">2017年04月29日</span>
                                                </div>
                                            </div>
                                            <div class="face">
                                                <img src="/mogu/Public/home/images/face164x64.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 本店同类商品 -->
                        <div class="module_recommend  tab-pane item" id="module_recommend">
                            <div>
                                <div class="panel_title recommend-title"><h1>本店同类商品</h1></div>
                            </div>
                            <div class="recommend_list">
                                <ul>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin1_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">39.90</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">1727</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin2_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">32.90</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">56</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin3_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">33.10</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">678</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="margin-right: 0;">
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin4_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">40.00</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">286</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin5_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">42.90</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">46</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin6_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">36.64</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">575</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin7_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">41.60</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">256</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="margin-right: 0;">
                                        <a href="javascript:;" class="pic">
                                            <img src="/mogu/Public/home/images/tongleishangpin8_220x330.jpg">
                                        </a>
                                        <a class="title" href="javascript:;">2017夏季情侣装韩版宽松简约字母背后钻石印花情侣短袖T恤</a>
                                        <div class="info">
                                            <div class="price">
                                                <em class="price_u">¥</em>
                                                <span class="price_n">42.00</span>
                                            </div>
                                            <div class="fav">
                                                <em class="fav_i"></em>
                                                <span class="fav_n">12</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- 扩展栏 -->
                <div class="col_extra">
                    <div class="qrcode">
                        <div class="qrcode_togger">手机扫码下单</div>
                        <div class="qrcode_pic">
                            <img src="/mogu/Public/home/images/erweima_200x200.png">
                        </div>
                        <i class="qrcode_mini"></i>
                        <i class="qrcode_arrow"></i>
                    </div>
                    <!-- 右侧子导航模块 -->
                    <div class="module_extranav">
                        <div class="extranav_bd">
                            <ul class="extranav_list">
                                <li class="extranav_list_li cur"><a href="#panel_title1" class="aa li_a">商品描述</a></li>
                                <li class="extranav_list_li"><a href="#panel_title2" class="aa">产品参数</a></li>
                                <li class="extranav_list_li"><a href="#panel_title3" class="aa">穿着效果</a></li>
                                <li class="extranav_list_li"><a href="#panel_title4" class="aa">细节做工</a></li>
                                <li class="extranav_list_li"><a href="#panel_title5" class="aa">尺码说明</a></li>
                                <li class="extranav_list_li"><a href="#panel_title6" class="aa">本店同类商品</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!----------------------底部------------------------->

<div class="tail">
	<div class="tail-nav">
		<div class="tail-one">
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 新手帮助 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li"><a href="">常见问题</a></li>
					<li class="tail-oblock-li"><a href="">自助服务</a></li>
					<li class="tail-oblock-li"><a href="">联系客服</a></li>
					<li class="tail-oblock-li"><a href="">意见反馈</a></li>
				</ul>
			</div>
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 权益保障 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li"><a href="">全国包邮</a></li>
					<li class="tail-oblock-li"><a href="">7天无理由退货</a></li>
					<li class="tail-oblock-li"><a href="">退货运费补贴</a></li>
					<li class="tail-oblock-li"><a href="">限时发货</a></li>
				</ul>
			</div>
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 支付方式 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li"><a href="">-微信支付</a></li>
					<li class="tail-oblock-li"><a href="">支付宝</a></li>
					<li class="tail-oblock-li"><a href="">白付美支付</a></li>
				</ul>
			</div>
			<div class="tail-oblock">
				<div class="tail-title">
					<h4 class="tail-h4">- 移动客户端下载 -</h4>
				</div>
				<ul>
					<li class="tail-oblock-li tail-oblock-ewm">
						<div class="tail-ewm">
							蘑菇街
						</div>
						<img src="/mogu/Public/home/images/tewm1.png" alt="" class="tail-ewm-img">
					</li>
					<li class="tail-oblock-li tail-oblock-ewm">
						<div class="tail-ewm">
							美丽说
						</div>
						<img src="/mogu/Public/home/images/ewm2.png" alt="" class="tail-ewm-img">
					</li>
					<li class="tail-oblock-li tail-oblock-ewm">
						<div class="tail-ewm">
							uni引力
						</div>
						<img src="/mogu/Public/home/images/ewm3.png" alt="" class="tail-ewm-img">
					</li>
				</ul>
			</div>
		</div>
		<div class="tail-two">
             <span class="tail-ts">
                 <a href="" class="tail-ta">美丽说</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">蘑菇街游戏</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">淘粉吧</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">穿衣搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">秋季女装新款</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">秋季连衣裙长袖</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">秋季孕妇装</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">QQ钱包</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">时尚品牌网</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">装修</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">背带裤搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">衣联网</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">美丽说</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">播视网视频</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">慧聪网</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">衬衫搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">冬装时尚搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">针织衫搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">牛仔衣搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">风衣搭配</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">补水面膜排行榜</a>
                 <b class="tail-tb">|</b>
                 <a href="" class="tail-ta">爱蘑菇街</a>
                 <b class="tail-tb">|</b>
             </span>
		</div>
		<div class="tail-three">
			<ul>
				<li class="tail-oblock-li"><a href="">关于我们</a></li>
				<li class="tail-oblock-li"><a href="">招聘信息</a></li>
				<li class="tail-oblock-li"><a href="">联系我们</a></li>
				<li class="tail-oblock-li"><a href="">商家后台</a></li>
				<li class="tail-oblock-li"><a href="">蘑菇商学院</a></li>
				<li class="tail-oblock-li"><a href="">商家社区</a></li>
			</ul>
			<p class="tail-tp">©2017 Mogujie.com 杭州卷瓜网络有限公司</p>
		</div>
		<div class="tail-four">
			<p class="tail-tp">
				<span class="tail-ts">营业执照注册号：</span>
				<a href="">330106000129004</a>
				<b class="tail-tb">|</b>
				<span  class="tail-ts">网络文化经营许可证：</span>
				<a href="">浙网文（2016）0349-219号</a>
				<b class="tail-tb">|</b>
				<span  class="tail-ts">增值电信业务经营许可证：</span>
				<a href="">浙B2-20110349</a>
				<b class="tail-tb">|</b>
				<a href="">安全责任书</a>
				<b class="tail-tb">|</b>
				<a href="">浙公网安备 33010602002329号</a>
				<b class="tail-tb">|</b>
			</p>
		</div>
	</div>
</div>

	<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<script src="/mogu/Public/home/js/header.js"></script>
<script src="/mogu/Public/home/js/Commodity_detalis.js"></script>