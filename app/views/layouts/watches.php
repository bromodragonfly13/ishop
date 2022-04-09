<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <?=$this->getMeta();?>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="megamenu/css/ionicons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="megamenu/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select id="currency" tabindex="4" class="dropdown drop">
                            <?php new \app\widgets\currency\Currency(); ?>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
			<a href="cart/show" onclick="getCart(); return false;">
				<div class="total">
					<img src="images/cart-1.png" alt="" />
					<?php if (!empty($_SESSION['cart'])): ?>
						<span class="simpleCart_total"><?=$_SESSION['cart.currency']['symbol_left'] .$_SESSION['cart.sum'] .$_SESSION['cart.currency']['symbol_right']?></span>
					<?php else: ?>
						<span class="simpleCart_total">Empty Cart</span>
					<?php endif; ?>
				</div>
			</a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="<?=PATH;?>"><h1>Luxury Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="menu-container">
                    <div class="menu">
                        <?php new \app\widgets\menu\Menu([
                            'tpl' => WWW . '/menu/menu.php',
                        ]); ?>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
			<form action="search" method="get" autocomplete="off">
				<input type="text" class="typeahead" id="typeahead" name="s">
				<input type="submit">
			</form>
<!--                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">-->
<!--                    <input type="submit" value="">-->
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->

<div class="content">
    <?=$content;?>
</div>

<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>New Products</p></a></li>
                    <li><a href="#"><p>Our Stores</p></a></li>
                    <li><a href="contact.html"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>My Credit slips</p></a></li>
                    <li><a href="#"><p>My Merchandise returns</p></a></li>
                    <li><a href="#"><p>My Personal info</p></a></li>
                    <li><a href="#"><p>My Addresses</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<script>
	var path = '<?=PATH;?>',
		course = <?=$curr['value'];?>,
		symboleLeft = '<?=$curr['symbol_left'];?>',
		symboleRight = '<?=$curr['symbol_right'];?>';
</script>
<!--footer-end-->


<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Корзина</h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
				<a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
				<button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
			</div>
		</div>
	</div>
</div>

<style>
	.quantity{
		margin-top: 3em;
		margin-right: 10px;
		float: left;
	}

	#cart table img{
		height: 50px;
	}

	.del-item{
		cursor: pointer;
	}
	span.twitter-typeahead .tt-menu,
	span.twitter-typeahead .tt-dropdown-menu {
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 1000;
		display: none;
		float: left;
		min-width: 160px;
		padding: 5px 0;
		margin: 2px 0 0;
		list-style: none;
		font-size: 14px;
		text-align: left;
		background-color: #ffffff;
		border: 1px solid #cccccc;
		border: 1px solid rgba(0, 0, 0, 0.15);
		border-radius: 4px;
		-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		background-clip: padding-box;
	}
	span.twitter-typeahead .tt-suggestion {
		display: block;
		padding: 3px 20px;
		clear: both;
		font-weight: normal;
		line-height: 1.42857143;
		color: #333333;
		white-space: nowrap;
		cursor: pointer;
	}
	span.twitter-typeahead .tt-suggestion.tt-cursor,
	span.twitter-typeahead .tt-suggestion:hover,
	span.twitter-typeahead .tt-suggestion:focus {
		color: #ffffff;
		text-decoration: none;
		outline: 0;
		background-color: #337ab7;
	}
	.input-group.input-group-lg span.twitter-typeahead .form-control {
		height: 46px;
		padding: 10px 16px;
		font-size: 18px;
		line-height: 1.3333333;
		border-radius: 6px;
	}
	.input-group.input-group-sm span.twitter-typeahead .form-control {
		height: 30px;
		padding: 5px 10px;
		font-size: 12px;
		line-height: 1.5;
		border-radius: 3px;
	}
	span.twitter-typeahead {
		width: 100%;
	}
	.input-group span.twitter-typeahead {
		display: block !important;
		height: 34px;
	}
	.input-group span.twitter-typeahead .tt-menu,
	.input-group span.twitter-typeahead .tt-dropdown-menu {
		top: 32px !important;
	}
	.input-group span.twitter-typeahead:not(:first-child):not(:last-child) .form-control {
		border-radius: 0;
	}
	.input-group span.twitter-typeahead:first-child .form-control {
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
	}
	.input-group span.twitter-typeahead:last-child .form-control {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	.input-group.input-group-sm span.twitter-typeahead {
		height: 30px;
	}
	.input-group.input-group-sm span.twitter-typeahead .tt-menu,
	.input-group.input-group-sm span.twitter-typeahead .tt-dropdown-menu {
		top: 30px !important;
	}
	.input-group.input-group-lg span.twitter-typeahead {
		height: 46px;
	}
	.input-group.input-group-lg span.twitter-typeahead .tt-menu,
	.input-group.input-group-lg span.twitter-typeahead .tt-dropdown-menu {
		top: 46px !important;
	}
</style>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/typeahead.bundle.js"></script>
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>
<!--Slider-Starts-Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script src="megamenu/js/megamenu.js"></script>
<script src="js/imagezoom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
    $(function() {

        var menu_ul = $('.menu_drop > li > ul'),
            menu_a  = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<script src="js/main.js"></script>
<!--End-slider-script-->

<?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug( $logs->grep( 'SELECT' ) );
?>
</body>
</html>
