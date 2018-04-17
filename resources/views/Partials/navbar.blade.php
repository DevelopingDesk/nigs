 <div class="top-nav">
                <div class="content white">
                  <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div style="margin-top: -15px">
                                <a href="/"><img src="{{asset('smart/images/logo1.png')}}" height="75px"  alt=""></a>
                            </div>
                        </div>
                        <!--/.navbar-header-->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                   <li><a href="/">Home</a></li>
@foreach($cat as $cate)
                                     <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$cate->name}}<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                        @foreach($sub as $subc)
                                        @if($cate->id==$subc->category_id)
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                  
             <li><a href="{{route('subcategory.product',$subc->id)}}">{{$subc->name}}</a></li>
                                                </ul>
                                            </div>
                                            @endif
                                            @endforeach
                                             
                                           

                                           
                                        </div>
                                    </ul>
                                </li>
                                    
                                @endforeach
                                <li><a href="{{route('contact.us')}}">Contact</a></li>
                            </ul>
                        </div>
                        <!--/.navbar-collapse-->
                    </nav>
                    <!--/.navbar-->
                </div>
            </div>
            <div class="header-right">
                <div class="search">
                   <form method="get" action="{{route('search.product')}}">
                       
                 
                       
                   
                    <div class="search-text">
                        <input class="serch" name="search" type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
                    </div>
                      </form>
                    <div class="cart box_1" style="margin-top: 14px">
                        <a href="{{route('cart.index')}}">
                        <h3>
                            <img src="{{asset('smart/images/cart.png')}}" alt=""/>
                            <div class="total">
                            <span ><?php echo Cart::count(); ?></span></div>
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty"></a></p>
                    </div>    
                    <div class="head-signin">
                        <h5><a href="{{route('login')}}"><i class="hd-dign"></i>Sign in</a></h5>
                    </div>              
                     <div class="clearfix"> </div>                  
                </div>
            </div>
         <div class="clearfix"> </div>
        </div>