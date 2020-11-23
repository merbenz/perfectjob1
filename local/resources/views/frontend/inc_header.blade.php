<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robot" content="index, follow" />
<meta name="generator" content="Brackets">
<meta name='copyright' content='Orange Technology Solution co.,ltd.'>
<meta name='designer' content='Sudarat Tu.'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link type="image/ico" rel="shortcut icon" href="../../images/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Gothic+A1|Trirong|Sarabun&display=swap" rel="stylesheet">

<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<link type="text/css" rel="stylesheet" href="{{asset('assets/fontawesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/flexslider/flexslider.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/Owlcarousel/dist/assets/owl.carousel.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/Owlcarousel/dist/assets/owl.theme.default.min.css')}}" />


<link rel="stylesheet" type="text/css" href="{{asset('assets/fancybox-master/dist/jquery.fancybox.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/master/css/libs/animate.css')}}">



<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script defer src="{{asset('assets/flexslider/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/flexslider/js/shCore.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/flexslider/js/shBrushJScript.js')}}"></script>
<script src="{{asset('assets/flexslider/js/modernizr.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/tether.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/master/dist/wow.js')}}"></script>
<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
</script>
<?php
    if(empty($_title))    $_title ='Perfact Job';
?>
<title>
    <?php echo $_title;?>
</title>
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "60%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>