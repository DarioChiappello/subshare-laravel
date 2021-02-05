<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <link href="./css/main.css" rel="stylesheet" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Font Awesome icons (free version)-->
        <!--<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <!-- Google fonts
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />-->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
           /* .row{
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }*/


            @media (min-width: 900px) {
                #img-screen{
                    margin-left: -1.5rem; 
                    /*margin-left:0px;
                    align-items:center;*/
                    /*width:100%;*/
                    
                }

                #img-screen2{
                    /*margin-left: -1.5rem; */
                    /*margin-left:0px;
                    align-items:center;*/
                    margin-left: 1.5rem;
                    
                }

                
            }

            @media (max-width: 1200px) {
                #head{
                    margin-top:16%;
                }
                
                /*#button{
                    padding-top:10%;
                }*/
            
            
        }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg   fixed-top" style="height:10%;" id="mainNav">
            
            <div class="container">
            
            
              
            {{--<img class="v350_2" style="align-items: flex-start;">--}}
                <button class="navbar-toggler navbar-toggler-left text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                
                <img src="{{url('/assets/img/portfolio/logo.png')}}"  class="img-fluid ">
                <b><a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}" style="margin-left: 2%; color: #2C4064;font-family: Montserrat;
                font-style: normal;
                font-weight: bold;
                
                line-height: 29px;
                text-align: center; ">Subshare</a></b>
                <div class="collapse navbar-collapse bg-white" id="navbarResponsive"  style="align-items: center;">
                
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-item mx-0 mx-lg-1 nav-item nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" font-weight: lighter;font-size:14px;color: #2C4064;font-family: Montserrat;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;">
                            How it works
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;font-family: Montserrat;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;" href="{{ url('/about') }}">About</a>
                            {{--<a class="dropdown-item" style="font-size:14px;color: #2C4064;font-family: Montserrat;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;" href="#">OP: Our Technology</a>--}}
                            
                            </div>
                        </li>




                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/features') }}" style="font-weight: lighter;font-size:14px;color: #2C4064;font-family: Montserrat;
                        font-style: normal;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;">Features</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact" style=" font-weight: lighter;font-size:14px;color: #2C4064;font-family: Montserrat;
                        font-style: normal;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;">Pricing</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-item mx-0 mx-lg-1 nav-item nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #2C4064; font-weight: lighter;font-size:14px;font-family: Montserrat;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;">
                            Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;font-family: Montserrat;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            line-height: 20px;" href="{{ url('/ripple') }}">Ripple</a>
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;font-family: Montserrat;
                                font-style: normal;
                                font-weight: 500;
                                font-size: 16px;
                                line-height: 20px;" href="{{ url('/neptune') }}">Neptune</a>
                            
                            </div>
                        </li>


                        
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/about') }}" style="font-weight: lighter;font-size:14px;color: #2C4064;font-family: Montserrat;
                        font-style: normal;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;">Company</a></li>
                        
                        
                    </ul>
                    
                </div>
                <div class="collapse navbar-collapse bg-white" id="navbarResponsive"  style="align-items: center;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"  ><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" style="font-weight: lighter;font-size:14px;color: #2C4064;font-family: Montserrat;
                        font-style: normal;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 20px;">Login</a></li>
                        
                       <!--<li class="nav-item mx-0 mx-lg-1 " style="align-items: flex-end ;"></li><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"  style="font-weight: lighter;margin-top: 12%;"><img src="assets/img/portfolio/s-up.png"   alt=""></a></li>-->
                         <li class="nav-item mx-0 mx-lg-1" style="margin-top: 2%;">
                         <button type="button" class="btn text-white" style="border-radius:25px; width: 150px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;font-size:14px;
                            ">Sign Up</button>
                         </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        

        <section class="page-section  text-white" id="head" style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%); padding-top: 12%; align-items: center; padding-bottom:15%; height:480px;">
            
                <div class="container">
                    <h6 class="page-section-heading text-center" style="font-weight: bold;
                    font-size: 64px;
                    line-height: 78px;
                    text-align: center;
                    letter-spacing: 0.01em;" >“Freedom. Fairness. Unity. Music.”</h6>
                
                <p class="text-center" style="margin-top:2%;font-family: Montserrat;
                font-style: normal;
                font-weight: normal;
                font-size: 24px;
                line-height: 36px;">We
                    believe in <b style="font-weight: 800;">Freedom, Fair Ownership</b>, and the power of <b style="font-weight: 800;">Unity & Music.</b>
                    </p>
                  <p class="text-center" style="margin-top:-1%;font-family: Montserrat;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 24px;
                    line-height: 36px;">We want to make it happen.</p>  
                </div>
 
        </section>
        
       <section>
           <div class="row">
                <div class="col-md-3">
                    
                            
                        <img class="img-fluid" id="img-screen" src="{{url('/assets/img/portfolio/images-1.png')}}" style="" alt="" />
                        
                    
                    
                            
                        
                </div>
                <div class="col-md-6">
                    <h3 id="title-s" class="page-section-heading text-center" style="color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%); padding-top: 18%;font-weight: bold;font-size: 40px;
                    line-height: 49px;" >Join the movement</h3>

                    <p class="text-center" style="color: #69768D;font-size: 16px;
                    line-height: 24px;
                    text-align: center;
                    letter-spacing: 0.01em;
                    font-family: 'Montserrat';
                    ;">Do you
                        love creating music? Do you enjoy creating content?
                        Do you want to keep doing it, and still keep your freedom?Do you want to be free? </p>
                        <p class="text-center" style="color: #69768D;font-family: 'Montserrat';">Free from the stifling demands of record
                            labels in a dated industry that prizes conformity.
                            Free from old social barriers and artificially inflated production costs.
                            Free to enjoy the fruits of your labour. Without having a multitude of middlemen take them
                            away.</p>
                </div>
                <div class="col-md-3">
                    
                            
                        <img class="img-fluid" id="img-screen2" src="{{url('/assets/img/portfolio/images-2.png')}}" style="" alt="" />
                        
                        
                    
                    
                            
                        
                </div>
           </div>
       </section>

        
        <!-- About Section-->
        <section class="page-section  mb-0" id="about" style="background: #F0F4F8;">
            <div class="container">
                
                    <h6 id="title-s" class="page-section-heading text-center about-title col-md-10" style="color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%)
                    font-weight: bold;font-size: 40px;
                    line-height: 49px;
                    text-align: center;
                    letter-spacing: 0.01em;padding-left:10%;">Allow us to further explain our beliefs Maybe you share some of them</h6>
                
                <!-- About Section Heading-->
                
                <div class="divider-custom divider-light">
                    
                </div>

                
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-md-5 ml-auto text-white" style="margin-bottom:2%;" >
                        {{--<img  style="width: 110%; margin-top: 6%; " src="assets/img/portfolio/about-1.png" alt="" />--}}
                        <div style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%); border-radius: 10px; height:100%;padding:4%;">
                        <div style="padding:5%;">
                        <h6 style="font-weight: bold;
                        font-size: 24px;
                        line-height: 29px;
                        letter-spacing: 0.01em; margin-bottom:6%;">Creative Freedom</h6>
                            <p>Content creators should be free to create what they want, when they want, with who they want, and wherever they want.</p>
                            <p>To fund the development of their talents and interests through their work, while remaining free.</p>
                        </div>
                            
                        </div>
                    </div>
                    <div class="col-md-5 mr-auto text-white" style="margin-bottom:2%;">
                        {{--<img  style="width: 120%; height: 106%; "  src="assets/img/portfolio/about-2.png" alt="" />--}}
                        <div style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%); border-radius: 10px; height:100%; padding:4%;">
                        <div style="padding:5%;">
                        <h6 style="font-weight: bold;
                        font-size: 24px;
                        line-height: 29px;
                        letter-spacing: 0.01em;margin-bottom:6%;">Financial Freedom</h6>
                            <p>Musicians, artists, and other content creators should be the ones most rewarded for their work.</p>
                            <p>Musicians, artists, and other content creators should be the ones most rewarded for their work.</p>
                            <p>They should be the ones to determine how royalties are distributed. It should not cost them a lot to promote, distribute and sell their works.</p>
                        </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-md-6" style="background: #2C4064;">
                    <img class="img-fluid" src="{{url('/assets/img/portfolio/br-about.png')}}"  style="padding: 10%;" alt="" />
                </div>
                <div class="col">
                    {{--<img class="img-fluid" src="{{url('/assets/img/portfolio/about-text.png')}}"  style="width: 100%;"  alt="" />--}}
                    <div class="row" style="margin-top:10%;margin-left:8%;padding-top:6%;">
                        <div class="col-md-2">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/icon2.png')}}"  style="width: 100%;margin-top:8%;margin-bottom:8%;"  alt="" />
                        </div>
                        <div class="col-md-8" >
                            <h2 style="color:#2C4064;">Fair Ownership</h2>
                            <p style="color:grey;">Content creators should be the ones owning their creations, Or the portion of a work that’s theirs. Their ownership should be protected and be legally sound.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%;margin-left:8%;padding-bottom:10%;">
                        <div class="col-md-2">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/icon.png')}}"  style="width: 100%;margin-top:8%;margin-bottom:8%;"  alt="" />
                        </div>
                        <div class="col-md-8">
                            <h2 style="color:#2C4064;" >Power of Music</h2>
                            <p style="color:grey;">Throughout history, music has proven to be a powerful force. It can bring peace, love and harmony into so many lives. It can break down societal barriers. To help solve or remove many issues. It can heal the world. </p>
                            <p style="color:grey;">We want to create a global community of musicians and content creators to do that.</p>
                        </div>
                    </div>
                </div>
            </div>
                
            

        </section>
        <section class="page-section  text-white" style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);  align-items: center;">
            
            <div class="row">
                <div class="col-md-5">
                    <h6 class="page-section-heading text-center"  >Unity in Community</h6>
                </div>

                <div class="col-md-3">

                    <h5 style="font-size: 24px;
                        line-height: 29px;
                        letter-spacing: 0.01em;">It’s hard
                        to go alone</h5>
                    <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;">We
                        It’s hard to get help. It’s a tougher world, and a tougher
                industry. Many needed connections are difficult, almost impossible to make. 
                        </p>

                        
                </div>

                <div class="col-md-4">
                    <h5 style="font-size: 24px;
                        line-height: 29px;
                        letter-spacing: 0.01em;">Overcome social barriers</h5>
                    <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;" >We
                        In a digital world, it should be easier to reach out, connect, and collaborate. Safely,
                and fairly. We want to make it so. 
                        </p>

                        
                </div>


                
            
            
            </div>
            <div class="row">
                <div class="col-md-5" >

                </div>
                <div class="col-md-3" >
                    <h5 style="font-size: 24px;
                        line-height: 29px;
                        letter-spacing: 0.01em;">Combine
                        Our Creativity, Pool Our Skills</h5>
                        <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;">There are millions of samples and
                            partially completed tunes in the world. But they’re usually collecting dust. 
                            </p>
                            <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;" >There are countless people with excellent skills. But they’re not aware of it. They
                                remain unknown, undiscovered. 
                                </p>
                                <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;" >All these could be combined into something
                                    wonderful.
                                    </p>
                                    <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;" >Why not use technology to piece that puzzle together. And make
                                        that process easier. 
                                        </p>
                </div>
                <div class="col-md-4" >
                    <h5 style="font-size: 24px;
                        line-height: 29px;
                        letter-spacing: 0.01em;">Connect. Work Together. Be
                        amazing</h5>
                        <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;">By connecting with other like-minded people, we could
                            create something great.
                            </p>
                            <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;">We could amplify our voices, reach further than we
                                ever dreamed possible. 
                                </p>
                                <p style="font-weight: normal;
                    font-size: 16px;
                    line-height: 24px;">We could be a global force for positive
                                    change. 
                                    </p>
                </div>
            </div>

        </section>
        <section class="text-center " style="margin:4%;background: #F0F4F8;margin:0px;padding:8%;">
            <div class="container">
                 <h4 id="title-s" style="color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);font-family: Montserrat;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 40px;
                    line-height: 49px;
                    text-align: center;
                    letter-spacing: 0.01em;">Some may call us dreamers. Idealists. But we’ve already created this digital platform that could realise that dream. All it needs is for you to</h4>   
                <!-- Footer Location-->
                {{--<h4 id="title-s" style="text-color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%) !important;
                font-weight:bold;">Some may call us dreamers. Idealists. But we’ve already created this digital
                    platform that could realise that dream. All it needs is for you tot</h4>--}}
                {{--<img src="{{url('/assets/img/portfolio/join.png')}}" >--}}
                <br>
                <button type="button" id="button" class="btn text-white" style="border-radius:25px; width: 240px; height:40px; padding-right:1%; padding-left:1%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:2%;
                            "><h6 style="font-weight:bold;font-weight: 600;
                        font-size: 18px;
                        line-height: 22px;">Join The Movement</h6></button>
            
            </div>
        </section>
        <footer class="footer">
            <div class="container ">
                <div class="row ">
                    <!-- Footer Location-->
                    <div class="col-md-2 ">
                    <a class="text-white" href="{{ url('/') }}"><p>Home</p></a>
                        
                    </div>
                    <div class="col-md-2 ">
                    <a class="text-white" href="{{ url('/features') }}"><p>Subshare</p></a>
                        
                    </div>
                    <div class="col-md-2 ">
                    <a class="text-white" href="{{ url('/neptune') }}"><p>Neptune</p></a>
                        
                    </div>
                    <div class="col-md-2 ">
                        <p>Pricing</p>
                        
                    </div>
                    <div class="col-md-2 ">
                        <p>Privacy Policy</p>
                        
                    </div>
                </div>
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-md-2 ">
                        
                        <a class="text-white" href="{{ url('/about') }}"><p >About</p></a>
                    </div>
                    <div class="col-md-2 ">
                        
                    <a class="text-white" href="{{ url('/ripple') }}"><p>Ripple</p></a>
                    </div>
                    <div  class="col-md-2 ">
                        
                        <p>Blog</p>
                    </div>
                    <div class="col-md-2 ">
                        
                    <a class="text-white" href="#"><p>Contact us</p></a>
                    </div>
                    <div class="col-md-2 ">
                        <p>Terms of Service</p>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <a class=" btn-social mx-1 " href="#!"><i class="fab fa-facebook-f" style="color:white;"></i></a>
                        
                        <a class=" btn-social mx-1" href="#!"><i class="fab  fa-instagram" style="color:white;"></i></a>

                        <a class=" btn-social mx-1" href="#!"><i class="fab fa-youtube" style="color:white;"></i></a>
                    </div>
                    
                    <div class="col-md-9" style="align-items:flex-end;">
                        <div class="row">
                                <div class="col-md-2">
                                
                                </div>
                                <div class="col-md-7 " >
                                <div class="row">
                                    <input type="text" placeholder="Email" class="form-control " style="border-radius:25px;" >
                                    {{--<i class="far fa-envelope"></i>--}}
                                </div>
                                    
                                    
                                </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </footer>
      
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
