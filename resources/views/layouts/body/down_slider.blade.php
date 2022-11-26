<div class= "home-slider">

   <div class="hero">
        <div class="carousel" >
            <ul>
                <li><img src="{{ asset('images/s1.jpg') }}" ></li>
                <li><img src="{{ asset('images/s2.jpg') }}"  ></li>
                <li><img src="{{ asset('images/s3.jpg') }}"  ></li>
                <li><img src="{{ asset('images/s4.jpg') }}" ></li>
                <li><img src="{{ asset('images/s5.jpg') }}" ></li>
                <li><img src="{{ asset('images/s6.jpg') }}" ></li>
                
            </ul>
        </div>
    </div>

  

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="{{ asset('frontend/assets/js/jquery.flipster.min.js') }}"></script>

    <script>
        $('.carousel').flipster({
            style: 'carousel',
            spacing: -0.3,

        });
    </script>