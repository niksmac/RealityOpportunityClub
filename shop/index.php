<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shopping | Reality Opportunity Club</title>
        <style>
            *{
                margin:0;
                padding:0;
                background:#f9f9f9;
            }
            .title{
	width:703px;
	height:144px;
	position:absolute;
	top:29px;
	left:436px;
	background:transparent url(images/title.png) no-repeat top left;
            }
            a.back{
                background:transparent url(images/back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
        </style>
        <link rel="shortcut icon" href="../images/favicon.ico" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
        <div> 
            <a class="back" href="../index.php"></a> 
            <div class="title"></div> 
        </div> 
<div class="menu">
<div class="item" style="width: 63px; overflow-x: hidden; overflow-y: hidden; ">
                <a class="link icon_help" style="-webkit-transform: matrix(0.7660444431190657, -0.6427876096866117, 0.6427876096866117, 0.7660444431190657, 0, 0) rotate(40deg); "></a>
                <div class="item_content" style="display: none; ">
                    <h2>ROC Shop</h2>
                    <p style="display: none; ">
                        <a href="../rocshop/index.php">login</a>                  </p>
                </div>
            </div>
            <div class="item" style="width: 63px; overflow-x: hidden; overflow-y: hidden; ">
                <a class="link icon_find" style="-webkit-transform: matrix(0.7660444431190931, -0.6427876096866401, 0.6427876096866401, 0.7660444431190931, 0, 0) rotate(40deg); "></a>
                <div class="item_content" style="display: none; ">
                    <h2>On-Line Retailer</h2>
                    <p style="display: none; ">
                        <a href="../olshop/index.php">login</a>                 </p>
                </div>
            </div>
            <div class="item" style="width: 63px; overflow-x: hidden; overflow-y: hidden; ">
                <a class="link icon_photos" style="-webkit-transform: matrix(0.7660444431190719, -0.6427876096866181, 0.6427876096866181, 0.7660444431190719, 0, 0) rotate(40deg); "></a>
                <div class="item_content" style="display: none; ">
                    <h2>On-Line Supplier</h2>
                    <p style="display: none; ">
                        <a href="../olsupplier/index.php">login</a>                 </p>
                </div>
            </div>
            <div class="item" style="width: 63px; overflow-x: hidden; overflow-y: hidden; ">
                <a class="link icon_home" style="-webkit-transform: matrix(0.7660444431190546, -0.6427876096866024, 0.6427876096866024, 0.7660444431190546, 0, 0) rotate(40deg); "></a>
                <div class="item_content" style="display: none; ">
                    <h2>Back to Home</h2>
                    <p style="display: none; ">
                        <a href="../roc-onlineproducts.php">Online Products</a>
                        <a href="../contact-roc.php">Contact Us</a>                    </p>
                </div>
            </div>
        </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery-css-transform.js" type="text/javascript"></script>
<script src="js/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>

<script>
            $('.item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'58px'}, 1000)
                .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>
    
</body></html>