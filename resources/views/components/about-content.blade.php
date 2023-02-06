<style type="text/css">
	.social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container {
  max-width: 960px;
}

/*
 * Custom translucent site header
 */

.site-header {
  background-color: rgba(0, 0, 0, .85);
  -webkit-backdrop-filter: saturate(180%) blur(20px);
  backdrop-filter: saturate(180%) blur(20px);
}
.site-header a {
  color: #999;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}

/*
 * Dummy devices (replace them with your own or something else entirely!)
 */

.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}


/*
 * Extra utilities
 */

.flex-equal > * {
  -ms-flex: 1;
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    -ms-flex: 1;
    flex: 1;
  }
}

.overflow-hidden { overflow: hidden; }
#team {
        background: #eee !important;
    }
    
    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    }
    
    .btn-primary {
        color: #fff;
        background-color: #007b5e;
        border-color: #007b5e;
    }
    
    section {
        padding: 60px 0;
    }
    
    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    
    #team .card {
        border: none;
        background: #ffffff;
    }
    
    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }
    
    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }
    
    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }
    
    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }
    
    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }
    
    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }
    
    .frontside .card,
    .backside .card {
        min-height: 312px;
    }
    
    .backside .card a {
        font-size: 18px;
        color: #007b5e !important;
    }
    
    .frontside .card .card-title,
    .backside .card .card-title {
        color: #007b5e !important;
    }
    
    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
</style>
<div class="jumbotron text-center " style="background-color: #fff;">
  	<div class="row"> 
  	<div class="col-lg-2"></div> 
  	<div class="col-lg-8">
  	<span class="display-10  welcome-note-head"  data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1500">About Us!</span>
<!-- class = "lead" -->
  <p class=" welcome-note" data-aos="zoom-in-left" data-aos-duration="1800">Expedition Asia is a pioneer Travel and Tour Company based in Skardu Gilgit-Baltistan (GB). Our team consists of highly experienced, knowledgeable and foreign qualified professionals. The ultimate goal of our company is to promote tourism in Gilgit Baltistan, assist voyagers, alpinists, explorers, researchers and cragsmen to achieve their aspirations. If you want to witness an eternal and indelible experience, Expedition Asia is the best platform for your travel fantasies come to fruition. We are supercilious to host clients from UK, USA, Europe and all around the globe. Apart from the above services we conduct summer camps, helicopter safaris, bike tours and much more. E-ticketing is another service rendered by Expedition Asia. We ensure reliable security, sheer comfort, best prices and memorable local encounters. We believe in providing exceptional services up to international UN standards. Our team has a hawk’s eye on changing travel patterns and we are expert in making customised plans which are in accordance with the international routes.</p>
  <hr class="my-4">
  <span class="display-10  welcome-note-head"  data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Our Vision & Mission</span>
  <p class=" welcome-note" data-aos="zoom-in-right" data-aos-duration="1800">Our vision is to represent Pakistan as a hospitable, peaceful and jovial nation on International levels.  Our main focus is to boost tourism in Gilgit Baltistan and generate revenue, creating more opportunities for the locals to earn a better living. Providing best suited opportunities for trekkers, alpinists and tourists to explore nature’s bestowed beauty in the most convenient way is our passion.</p>
</div>
</div>
<div class="col-lg-2"></div>
</div>
<!-- our team 
<div class="bg-light py-5 text-center">
  <div class="container py-5">
    <div class="row mb-4 "  >
      <div class="col-lg-5 ">
        <h2 class="display-4 font-weight-light text-center">Our team</h2>
        <p class="font-italic text-muted">Team of Expedition Asia Trek & Tours</p>
      </div>
    </div>

    <div class="row text-center">
     
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src=" {{ asset('img/shams.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
         
          <h5 class="mb-0">Shamshad Hussain</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            				<li class="list-inline-item">
                      <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google"></i></a></li>
                            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                           
          </ul>
        </div>
      </div>
      -->
      <!-- End-->
 

    </div>
  </div>
</div>
<!-- old -->


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Our Team</h1>
    <p class="lead font-weight-normal">Here at Expedition Asia Trek & Tours we have higly experienced and professional team of managers, climbers, guides and porters.</p>
    <!-- <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
  </div>
  <div class="d-none d-md-block"></div>
  <div class="d-none d-md-block"></div>
</div>
<!--
<div class="container">

        <div class="row">
          <div class="col-lg-8 text-center">
            <img class="" src="{{ asset('img/shams.jpg') }} " alt="Generic placeholder image" width="140" height="140">
            <h2>Shamshad Hussain</h2>
            <p>Founder & CEO</p>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item">
              <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>    
          </ul>
        -->






<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('img/shams.jpg') }}" alt="card image"></p>
                                    <h4 class="card-title">Shamshad Hussain</h4>
                                    <p class="card-text">Founder and Owner   </p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Shamshad</h4>
                                    <p class="card-text">Shamshad Hussain is professional and experienced Tour Operator and Educator and owner of leading tourism company.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
              <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('img/shams.jpg') }}" alt="card image"></p>
                                    <h4 class="card-title">Iqbal Hussain</h4>
                                    <p class="card-text">Co-Founder and Transport Manager.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Iqbal</h4>
                                    <p class="card-text">Iqbal is professional and experienced transport manager.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
              <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://avatars.githubusercontent.com/u/24860770?s=400&u=3bf1b7ec564c4f2a3476fe557dc557e90d189b83&v=4" alt="card image"></p>
                                    <h4 class="card-title">Zuhair</h4>
                                    <p class="card-text">CTO.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Zuhair</h4>
                                    <p class="card-text">Zuhair is Technology expert and software developer who is developing sites and apps</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
              <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google"></i></a></li>
            <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
           
            

        </div>
    </div>
</section>
<!-- Team -->
