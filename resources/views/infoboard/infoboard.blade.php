@extends('infoboard.layouts.app')

@section('content')

<!--welcome-css links-->
<link href="{{ URL::asset('/css/welcome.css') }}" rel="stylesheet">

<!--Bottom-Slider-css links-->
<link rel="stylesheet" href="{{ URL::asset('/css/jquery.flipster.min.css') }}">


<style>

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: 1px auto;
  display: block;
  width: 80%;
  max-width: 450px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
    
  }
}
</style>








           
<main >

<div class="home-video">
  <div class="vid-div">
        <div class="video">
            <video src="video/video1.mp4" controls autoplay> </video>
            
        </div>
  </div>
  <div class="qr-div">
      <div class="div1-top">
            <h3>Stay Connected with our CMDI Community!</h3>
      </div>

      <div class="div2-bottom">
            <p>You can now interact with your friends, colleagues and teachers with our social media community.</p>
            <p>Just register your account using your CMDI e-mail account. You may click this: <a href="{{ route('register') }}" target="_blank">Register</a></p>
      </div>
  </div>
</div>


<div class="top-stories-div">

        <h3 class="heading">Top stories</h3>

        <div class="phar-imag-div">
            <div class="pharagraph-div">
                <h3 class="title">Victorious ICT WEEK 2022 Celebration</h3>
                <p>
                    The ICT WEEK 2022 commenced its grandios celebration on November 21-23, 2022 at the CARD-MRI Development Institute Inc. Through the initiatives of CMDI Department of Information and Communications Technology and ICT Club with the guidance of the DICT Dean, Engr. Reagan B. Ricafort,
                    BSIS Program Head, Ms. Maria Ana M. Toledo and support of the Club Adviser, spearheaded by Ms. Pilar M. Fandiño, Mr. Lloyd Christopher Dacles and Mr. James Gañas, the event was completed successfully.
                </p>
                <p>
                    It was participated by all the courses and programs under the DICT including BS in Information Systems, BS in Accounting Information Systems, Senior High School Grade 11 and 12 ICT. All students show enthusiasm, excitement and active participation in every activities throughout the 3-day long event. 
                </p>
                <p>
                    Grade 11 Stewardship was hailed as the OVERALL CHAMPION of the ICT WEEK 2022. 
                </p>


            </div>
            <div class="image-div">
                <img id="myImg" class="insidephoto" src="{{ asset('images/ICT.jpg') }}" style="width:100%;max-width:400px; ">
            </div>

            

            







        </div>
    </div>



<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</div> 

</main>


@endsection