<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>product</title>
<link href="{{asset('smart/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('smart/js/jquery-1.11.0.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('smart/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoplist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('smart/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('smart/js/easing.js')}}"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!--flex slider-->
<script defer src="{{asset('smart/js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{asset('smart/css/flexslider.css')}}" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="{{asset('smart/js/imagezoom.js')}}"></script>
<script src="{{asset('smart/js/simpleCart.min.js')}}"> </script>
<script src="{{asset('smart/js/bootstrap.min.js')}}"></script>
</head>
<body>
<!--header strat here-->
<div class="header">
	<div class="container">
		@include('Partials.navbar')
	</div>
</div>
<!--header end here-->
<!--single start here-->
<div class="single">
   <div class="container">
   	 <div class="single-main">
   	 	<div class="single-top-main">
	   		<div class="col-md-5 single-top">	
			   <div class="flexslider">
				  <ul class="slides">
				    <li data-thumb="{{asset($product->image)}}">
				        <div class="thumb-image"> <img src="{{asset("public/".$product->image)}}" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    @foreach($mor as $mo)
				    <li data-thumb="{{asset("public/".$mo->image)}}">
				       <div class="thumb-image"> <img src="{{asset("public/".$mo->image)}}" data-imagezoom="true" class="img-responsive"> </div>
				    </li> 
				    @endforeach
				  </ul>
			</div>
			</div>
			<div class="col-md-7 single-top-left simpleCart_shelfItem">
				<h2>{{$product->name}}</h2>
			
				<h4>Code:{{$product->code}}</h4>
				<h3 class="item_price">
				@if($product->price !=0)
					{{$product->price}}$
					@endif
				</h3>			
				<p>{{$product->description}}</p>
				<h4>Size Charts</h4>
				<ul class="bann-btns">
					<li><select class="bann-size">
						<option value="select your location">Size</option>
						<option value="saab">Small</option>
						<option value="fiat">Medium</option>
						<option value="audi">Large</option>
					</select>
					</li>
					<li><a href="{{route('Cart.edit',$product->id)}}" class="item_add">Add To Cart</a></li>					
	            </ul>
			</div>
		   <div class="clearfix"> </div>
	   </div>

	   <div class="singlepage-product">
	    <h3>Relative Products</h3>
	    <br>
		   	@foreach($rel as $relpr)
		   	 <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="{{route('single.product',$relpr->id)}}"><img src="{{asset("public/".$relpr->image)}}" alt="" class="img-responsive zoom-img" height="280px"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="#">{{$relpr->name}}</a></h3>
								<p>Explore Now</p>						
						</div>
						<div class="srch">
							<span>{{$relpr->price}}</span>
						</div>
					</div>
				 </div>
			    @endforeach
		  <div class="clearfix"> </div>
	   </div>
   	 </div>
   </div>
</div>
<!--single end here-->
<!--footer strat here-->
@include('Partials.footer')
<!--footer end here-->
</body>
</html>


