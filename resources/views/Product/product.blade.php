
<!DOCTYPE HTML>
<html>
<head>
<title>products</title>
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
<!-- the jScrollPane script -->
<script type="text/javascript" src="{{asset('smart/js/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
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
<!--product start here-->
<div class="product">
	<div class="container">
		<div class="product-main">
			  <div class=" product-menu-bar">
			    	<div class="col-md-3 prdt-right">
					<div class="w_sidebar">
						@foreach($cat as $cate)
						<section  class="sky-form">
							<h1>{{$cate->name}}</h1>
							<div class="row1 scroll-pane">
								
								<div class="col col-4">								
									@foreach($sub as $subc)
								@if($subc->category_id==$cate->id)
									
									<label class="checkbox"><a href="{{route('subcategory.product',$subc->id)}}"><i></i>{{$subc->name}}
</a>
									</label>
									
									@endif	@endforeach		
								</div>
							</div>
						</section>
						@endforeach
						
						
					</div>
				</div>
			  </div>	
			  <div class="col-md-9 product-block">
			     @foreach($product as $pro)
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="{{route('single.product',$pro->id)}}"><img src="{{asset("public/".$pro->image)}}" alt="" class="img-responsive zoom-img" height="280px"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="">{{$pro->name}}</a></h3>
								<p>Explore Now</p>						
						</div>
						<div class="srch">
							<span>{{$pro->price}}</span>
						</div>
					</div>
				 </div>
			    @endforeach
			      <div class="clearfix"> </div>
			  </div>
		</div>
	</div>
</div>
<!--product end here-->
<!--footer strat here-->
@include('Partials.footer')
<!--footer end here-->
</body>
</html>