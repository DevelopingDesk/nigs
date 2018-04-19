
<!DOCTYPE HTML>
<html>
<head>
<title>nighatcorporation</title>
@include('Partials.customcss')
</head>
<body>
<!--header strat here-->
<div class="header">
    <div class="container">
        <div class="header-main">
        @include('Partials.navbar')   
    </div>
</div>
<br>
<!--header end here-->

   @include('Partials.slider')

<!--banner end here-->
<!--block-layer2 start here-->

<!--block-layer2 end here-->
<!--block-layer1 start here-->
<div class="blc-layer3">
    <div class="container">
        <div class="blc-layer3-main">
               <div class="col-md-4 blc-layer3-grids1">
                    <h6>Nighatcorporation</h6>
                    <h3>Product Quality</h3>
                    <p>we dont compromise over quality of products and
we give first priority to our customer requirments
                    </p>
                     <h6>Benefits</h6>
                    <ul>
                        <li><h4>Easy and advance way of payment facilities available</h4>
                            
                        </li>
                       
                    </ul>
               </div>
               @if($fe !=null)
               <div class="col-md-4 blc-layer3-grids2">
                <a href="{{route('single.product',$fe->id)}}"><img src="{{asset("public/".$fe->image)}}" alt="" ></a>
               </div>
               @endif
               @if($lat !=null)
               <div class="col-md-4 blc-layer3-grids-3 simpleCart_shelfItem">
                 <div class="box-grid">
                    <h3><a href="">

                    {{$lat->name}}
                 
                    </a></h3>
                    <p>{{$lat->description}}</p>
                  
                    <a href="{{route('single.product',$lat->id)}}"><img src="{{asset("public/".$lat->image)}}"  height="280px" alt=""></a>
                    <div class="box-grid-price">
                        <div class="box-grid-price-left">
                            <h4>{{$lat->name}}</h4>
                        </div>
                        <div class="box-grid-price-rit">
                            <h4 class="item_price">{{$lat->price}}</h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <ul class="bann-btns">
                        <li class="ys-margin"><select class="bann-size">
                            <option value="saab">Small</option>
                            <option value="fiat">Medium</option>
                            <option value="audi">Large</option>
                        </select>
                        </li>
                        <li><a href="{{route('Cart.edit',$lat->id)}}" class="item_add">Add To Cart</a></li>
                   </ul>
                 </div>
               </div>
                  @endif
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <img src="{{asset('smart/images/hood.jpg')}}" class="img-responsive">
</div>
<!--block-layer1 end here-->
<!--home-block start here-->
<div class="home-block">

    <div class="container">

        <div class="home-block-main">
            
@foreach($pro as $pr)
            <div class="col-md-3 home-grid">
                <div class="home-product-main">
                   <div class="home-product-top">
                      <a href="{{route('single.product',$pr->id)}}"><img src="{{asset("public/".$pr->image)}}" alt="" class="img-responsive zoom-img" height="280px"></a>
                   </div>
                    <div class="home-product-bottom">
                            <h3><a href="">{{$pr->name}}</a></h3>
                            <p>{{$pr->color}}</p>                      
                    </div>
                    <div class="srch">
                        <span>{{$pr->price}}</span>
                    </div>
                </div>
            </div>
           
          @endforeach
           
            <div class="clearfix"> </div>
        </div>
    </div>
</div>  
<!--home block end here-->
<!--footer strat here-->
@include('Partials.footer')
<!--footer end here-->
</body>
</html>