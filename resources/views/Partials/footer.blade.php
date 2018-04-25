<div class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="ftr-grids-block">
                <div class="col-md-3 footer-grid">
                    <ul>
                        <h2 style="color:lightblue">Categories</h2>
                       @foreach($cat as $cat)
                        <li><a href="/">{{$cat->name}}</a></li>
                       @endforeach
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <ul>
                        <li><a href="#">Website Terms</a></li>
                        <li><select class="country">
                                        <option value="select your location">Select Country</option>
                                       
                                    </select>
                            
                        </li>
                        <li><a href="#">Select Location</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid-icon">
                    <ul>
                        
                        <li><a href="https://www.facebook.com/Nighat-Corporation-177507546192299/"><img src="{{asset('fb.png')}}" height="30px"></a></li>
                         <li><a href=""><img src="{{asset('link.jpg')}}" height="30px"></a></li>
                       
                         <li><a href="https://www.instagram.com/nighat_corporation/?hl=en"><img src="{{asset('insta.jpg')}}" height="30px"></a></li>
                      
                    </ul>
                   
                </div>
            <div class="clearfix"> </div>
          </div>
          <div class="copy-rights">
             <p>© 2018  All Rights Reserved | Design by  <a href="http://netroxtech.com/" target="_blank">Netrox</a> </p>
           </div>
        </div>
    </div>
</div>