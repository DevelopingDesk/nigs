<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://rceativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>index</title>
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
<!--start-ckeckout-->
	<div class="container" style="text-align: center;">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			
				
			
				
			<div class="in-check" >
				
			
				<div class="container">
 
        <div class="row"><column id="column-left" class="col-sm-3 hidden-xs">
    
  </column>
                <div id="content" class="col-sm-9">
      
      
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr style="color: blue">
                <td class="text-center">Image</td>
                
                <td class="text-left">Size</td>
                <td class="text-left">Quantity</td>
                <td class="text-right">Unit Price</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>
                       <?php foreach(Cart::content() as $row) :?>
                        
                            <tr>
                          
                          <form action="{{route('Cart.update',$row->rowId)}}" method="post"  >
                          {{csrf_field()}}
                <td class="text-center">                 
                 <img src="<?php echo $row->name?>" alt="Barber Scissors" title="Barber Scissors" width="80px"  />
                  </td>

   <td class="text-left">  <?php echo ($row->options->has('size') ? $row->options->size : ''); ?></td>
                 <td>
                <form method="post" action="{{route('Cart.update',$row->rowId)}}">
                   {{csrf_field()}}
                   <div class="col-md-3 col-sm-12 col-xs-12 col-xs-offset-0 {{ $errors->has('qty') ? ' has-error' : '' }}" style="margin-left: -15px">  
                      <input type="number" min="1" name="qty" value="<?php echo $row->qty; ?>" class="form-control" required>

                                 @if ($errors->has('qty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qty') }}</strong>
                                    </span>
                                @endif
 
                   </div>
                   <div class="col-md-2 col-xs-12 col-sm-12 col-xs-offset-0;" style="padding: 5px;margin-right: 10px"><button  class="btn btn-danger "><i class="fa fa-refresh">Update</i></button>
                   </div>
                </form>
                <form method="post" action="{{route('Cart.remove',$row->rowId)}}">
                {{csrf_field()}}
                 <div class="col-md-1" style="padding: 5px">
                <button  class=" btn btn-danger "><i class="fa fa-times-circle"></i>Remove</button>
                </div>
                </form>     
              </td>
                <td class="text-right"><?php echo Cart::subtotal(); ?></td>
                <td class="text-right"><?php echo Cart::total(); ?></td>
              </tr>
                   <?php endforeach;?>

                                        </tbody>
          </table>
        </div>
     
      
    
            <br />
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
                        <tr>
              <td class="text-right"><strong style="color: blue">Sub-Total:</strong></td>
              <td class="text-right"><?php echo Cart::subtotal(); ?></td>
            </tr>
                        <tr>
              <td class="text-right"><strong style="color: blue">Total:</strong></td>
              <td class="text-right"><?php echo Cart::total();?></td>
            </tr>
                      </table>
        </div>
      </div>
      <div class="buttons">
        
        <div class="pull-right"><a href="{{route('check.out')}}" class="btn btn-danger" style="color: white">Checkout</a></div>
      </div>
      </div>
    </div>
</div>

				
				
			</div>
			</div>  
		 </div>
		</div>
<!--end-ckeckout-->
<!--footer strat here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="ftr-grids-block">
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="product.html">Accessories</a></li>
						<li><a href="product.html">Hand bags</a></li>
						<li><a href="product.html">Clothing</a></li>
						<li><a href="product.html">Brands</a></li>
						<li><a href="product.html">Watches</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="login.html">Your Account</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="product.html">Store Locator</a></li>
						<li><a href="pressroom.html">Press Room</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="terms.html">Website Terms</a></li>
						<li><select class="country">
										<option value="select your location">Select Country</option>
										<option value="saab">Australia</option>
										<option value="fiat">Singapore</option>
										<option value="audi">London</option>
									</select>
							
						</li>
						<li><a href="shortcodes.html">Short Codes</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid-icon">
					<ul>
						<li><a href="#"><span class="u-tub"> </span></a></li>
						<li><a href="#"><span class="instro"> </span></a></li>
						<li><a href="#"><span class="twitter"> </span></a></li>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="print"> </span></a></li>
					</ul>
					<form>
					<input class="email-ftr" type="text" value="Newsletter" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Newsletter';}">
					<input type="submit" value="Submit"> 
					</form>
				</div>
		    <div class="clearfix"> </div>
		  </div>
		  <div class="copy-rights">
		     <p>© 2016 Shoplist. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		   </div>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</html>