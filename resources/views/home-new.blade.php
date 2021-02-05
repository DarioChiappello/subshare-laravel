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
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <!-- Google fonts
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />-->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
        <style>
            .nav-tabs .nav-link,
            .nav-tabs .show > .nav-link {
            /*color: #fff;
            background-color: #1abc9c;*/
            color:white ;
            /*background-color:#fff;*/
            background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);
            border: 0px white;
            border-radius:0;
            }

            .nav-link.active{
                color: #2C4064; !important;
                background:white;
                
            }
            .nav-link.active a{
                color:black;
                
                
            }

            #p-white{
                font-family: Montserrat;
                font-style: normal;
                font-weight: bold;
                font-size: 32px;
                line-height: 39px;
                text-align: center;
                letter-spacing: 0.01em;
                color: #F0F4F8;
            }

         
            
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" style="height:10%;" id="mainNav">
            
            <div class="container">
            
            
              
            {{--<img class="v350_2" style="align-items: flex-start;">--}}
                <button class="navbar-toggler navbar-toggler-left text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                
                <img src="{{url('/assets/img/portfolio/logo.png')}}"  class="img-fluid ">
                <b><a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}" style="margin-left: 2%; color: #2C4064; ">Subshare</a></b>
                <div class="collapse navbar-collapse bg-white" id="navbarResponsive"  style="align-items: center;">
                
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-item mx-0 mx-lg-1 nav-item nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" font-weight: lighter;font-size:14px;color: #2C4064;">
                            How it works
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;" href="#">Dropdown list</a>
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;" href="#">OP: Our Technology</a>
                            
                            </div>
                        </li>




                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/features') }}" style="font-weight: lighter;font-size:14px;color: #2C4064;">Features</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact" style=" font-weight: lighter;font-size:14px;color: #2C4064;">Pricing</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-item mx-0 mx-lg-1 nav-item nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #2C4064; font-weight: lighter;font-size:14px;">
                            Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;" href="{{ url('/ripple') }}">Ripple</a>
                            <a class="dropdown-item" style="font-size:14px;color: #2C4064;" href="{{ url('/neptune') }}">Neptune</a>
                            
                            </div>
                        </li>


                        
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/about') }}" style="font-weight: lighter;font-size:14px;color: #2C4064;">Company</a></li>
                        
                        
                    </ul>
                    
                </div>
                <div class="collapse navbar-collapse bg-white" id="navbarResponsive"  style="align-items: center;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"  ><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio" style="font-weight: lighter;font-size:14px;color: #2C4064;">Login</a></li>
                        
                       <!--<li class="nav-item mx-0 mx-lg-1 " style="align-items: flex-end ;"></li><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"  style="font-weight: lighter;margin-top: 12%;"><img src="assets/img/portfolio/s-up.png"   alt=""></a></li>-->
                         <li class="nav-item mx-0 mx-lg-1" style="margin-top: 2%;">
                         <button type="button" class="btn text-white" style="border-radius:25px; width: 150px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;font-size:14px;
                            ">Sign Up</button>
                         </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header>
            
        <div class=" masthead container d-flex align-items-center flex-column">
                
                <div class="header text-white text-center">
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading" style="font-weight: bold;font-size: 64px;font-family: Montserrat;color: #FFFFFF;">Bringing Freedom to music artists</h1>
                    <span class="v349_26"style=" font-size:16px;">We
                        believe in Freedom, Fair Ownership, and the power of Unity & Music.
                        We want to make it happen.
                    </span>
                    <br>
                    {{--<img src="{{url('/assets/img/portfolio/s-up-free.png')}}"  class="img-fluid " alt="">--}}
                    <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:38px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold; margin-top:4%;
                            "><h6 style="font-weight:bold;">Sign up Free</h6></button>

                            <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:38px; padding-right:2%; padding-left:2%;background: #2C4064;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2);
                            font-weight:bold;margin-top:4%;margin-left:2%;
                            "><h6 style="font-weight:bold;">Learn more</h6></button>
                    {{--<img src="{{url('/assets/img/portfolio/learn-more.png')}}"  class="img-fluid " alt="">--}}
                </div>
                
                
              
            </div>

        </header >

        <!-- Masthead-->
        {{--<header class="masthead  text-white text-center" >
            <div class="container d-flex align-items-center flex-column">
                
                <div class="header">
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading  mb-0">Bringing Freedom to music artists</h1>
                    <span class="v349_26" > We
                        believe in Freedom, Fair Ownership, and the power of Unity & Music.
                        We want to make it happen.
                    </span>
                    <br>
                    
                    <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:50px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold; margin-top:4%;
                            "><h6 style="font-weight:bold;">Sign up Free</h6></button>

                            <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:50px; padding-right:2%; padding-left:2%;background: #2C4064;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2);
                            font-weight:bold;margin-top:4%;margin-left:2%;
                            "><h6 style="font-weight:bold;">Learn more</h6></button>
                    
                </div>
                
                
              
            </div>
        </header>--}}

        <div >

        <div class="row">
            <div class="col-md-6">
            <img class="img-fluid" src="{{url('/assets/img/portfolio/screen.png')}}"  style="width: 100%;margin-left: -1.5rem;"  alt="" />
            </div>
        
            <div class="col-md-6">
                    {{--<img class="img-fluid" src="{{url('/assets/img/portfolio/about-text.png')}}"  style="width: 100%;"  alt="" />--}}
                    <h2 id="title-s" style="margin-top:20%;margin-left:8%;//styleName: Heading 1;
                        font-family: Montserrat;
                        font-size: 40px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: 49px;
                        letter-spacing: 0.01em;
                        text-align: left;
                    ">What does Subshare provide?</h2>
                    <div class="row" style="margin-top:6%;margin-left:8%;">
                        <div class="col-md-2">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/v1.png')}}"  style="width: 100%;"  alt="" />
                        </div>
                        <div class="col-md-8">
                            <h3 style="color:#2C4064;">Power</h3>
                            <p style="color:grey;">• Complete creative control.</p>
                            <p style="color:grey;">• Access to people with key skills.</p>
                            <p style="color:grey;">• Collaborate with others.</p>
                            <p style="color:grey;">• Get the exposure and resources you need to succeed.</p>
                            <p style="color:grey;">• Complete your music.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4%;margin-left:8%;">
                        <div class="col-md-2">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/v2.png')}}"  style="width: 100%;"  alt="" />
                        </div>
                        <div class="col-md-8">
                            <h3 style="color:#2C4064;" >Proprietorship</h3>
                            <p style="color:grey;">• Your music. Your IP. You own it. </p>
                            <p style="color:grey;">• We protect your IP with our next-gen tech.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4%;margin-left:8%;padding-bottom:10%;">
                        <div class="col-md-2">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/v3.png')}}"  style="width: 100%;"  alt="" />
                        </div>
                        <div class="col-md-8">
                            <h3 style="color:#2C4064;" >Profit</h3>
                            <p style="color:grey;">• Get paid on your terms when you sell your music. </p>
                            <p style="color:grey;">• Get rewarded for your service or contribution to a track.</p>
                        </div>
                    </div>
                </div>
        
        </div>
            
        
           
            <!--<div class="col-md-6">
                <div class="v348_89"></div><span class="v348_90">What does Subshare provide?</span>
                <div class="v348_91">
                    <div class="v348_92"></div><span class="v348_93">Power</span><span class="v348_94">• Complete
                        creative control. </span><span class="v348_95">• Access to people with key skills. </span><span
                        class="v348_96">• Collaborate with others.</span><span class="v348_97">• Get the exposure and
                        resources you need to succeed.</span><span class="v348_98">• Complete your music.</span>
                </div>
                <div class="v348_99">
                    <div class="v348_100"></div><span class="v348_101">Proprietorship</span><span class="v348_102">•
                        Your music. Your IP. You own it.</span><span class="v348_103">• We protect your IP with our
                        next-gen tech. </span>
                </div>
                <div class="v348_104">
                    <div class="v348_105"></div><span class="v348_106">Profit</span><span class="v348_107">• Get paid on
                        your terms when you sell your music.</span><span class="v348_108">• Get rewarded for your
                        service or contribution to a track.</span>
                </div>
            </div>-->

        <section class="footer text-center text-dark bg-light">
            <div class="container">
              
                <!-- Footer Location-->
                <h2 id="t1"  ><b>Freedom and Independence.</b></h2>
                <p class="text-center" style="color: rgba(105, 118, 141, 1);
                ">Subshare
                    provides a fair environment. We put content creators at the forefront of the industry, instead of
                    the middlemen.</p>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7 ">
                        <div class="bg-white" >

                        <ul class="nav nav-tabs mb-3 bg-white nav-justified" id="pills-tab" role="tablist" style="margin-left:0px;">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="border-radius: 10px 0 0 0;" >COLLABORATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" >CREATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" style="border-radius: 0 10px 0 0;" >MONETIZATION</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-md-6" >
                                <img class="img-fluid " src="{{url('/assets/img/portfolio/f3.png')}}" >
                                </div>
                                <div class="col-md-5" >
                                    
                                    
                                    <h6>Collab With Who You Want</h6>
                                    <p style="color:grey;">● Be discovered, discover others.</p>
                                    <p style="color:grey;"> <b>● Link up with influencers</b>  and personalities on <b>TikTok, Instagram, or YouTube</b> </p>
                                    <p style="color:grey;"> <b>Exchange royalties</b>  with them or pay them directly to include <b>your music in their videos.</b>  </p>
                                    
                                    
                                   
                                </div>

                            </div>
                                                        
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                                <div class="col-md-6" >
                                <img class="img-fluid " src="{{url('/assets/img/portfolio/f3.png')}}" >
                                </div>
                                <div class="col-md-5" >
                                    
                                    
                                    <h6>Make What You Want</h6>
                                    <p style="color:grey;">Royalty Management System: Removes the risk of depending on others to give you <b>your share of the money. </b> </p>
                                    
                                    
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                                <div class="col-md-6" >
                                <img class="img-fluid " src="{{url('/assets/img/portfolio/f3.png')}}" >
                                </div>
                                <div class="col-md-5" >
                                    
                                    
                                    <h6>Get Paid What You Deserve</h6>
                                    <p style="color:grey;">Smart Contract System: Allows you to <b>negotiate contracts on your own merit.</b></p>
                                    
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                        </div>
                       
                    <div class="col-md-4"></div>
                    </div>
                    
                    
                {{--<img src="assets/img/portfolio/tabs.png">--}}
            
            </div>
        </section>
        <section class="page-section bg-primary text-white mb-0" id="about" style="background: linear-gradient(rgba(36,199,144,1), rgba(28,62,123,1));">
            <div class="row">
                <div class="col align-self-start">
                    <h6 class="page-section-heading" style="margin-right: 6%; margin-left: 6%; margin-top: 6%;font-family: Montserrat;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 40px;">What Subshare Helps You Do</h6><br>
                <div class="row" style="margin-left:4%;">
                    <div class="col-md-5">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_142" style="margin-right: 12%; margin-left: 4%; padding-top: 50%; ">Get Discovered</span>
                    </div>
                    <div class="col-md-6">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_143"style="margin-left: 4%;">Promote
                    and Sell Your Music</span>
                    </div>
                </div>


                <div class="row"style="margin-left:4%;margin-top:3%;">
                    <div class="col-md-5">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_151"style="margin-left: 4%;">Discover Others</span>
                    </div>
                    <div class="col-md-6">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_144" style="margin-right: 12%; margin-left: 4%; margin-top: 0px; top: 10%;">Protect Your IP </span>
                    </div>
                </div>

                <div class="row" style="margin-left:4%;margin-top:3%;">
                <div class="col-md-5">
                <img class="img-fluid " src="assets/img/portfolio/item.png" alt="">
                <span class="v348_152">Get
                    Exposure</span>
                </div>
                <div class="col-md-6">
                <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span
                    class="v348_145" style="margin-left: 4%;">Manage Your Business</span>
                </div>

                </div>

                <div class="row" style="margin-left:4%;margin-top:3%;">
                    <div class="col-md-5">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_153" style="margin-right: 4%; margin-left: 4%;">Collaborate with Others</span>
                    </div>
                    <div class="col-md-6">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_146"style="margin-right: 18%; margin-left: 4%;">Get Paid</span>
                    </div>
                </div>

                <div class="row" style="margin-left:4%;margin-top:3%;">
                    <div class="col-md-5">
                    <img class="img-fluid " src="assets/img/portfolio/item.png" alt=""><span class="v348_154"style="margin-left: 4%;">Get
                    Rewarded for Your Skills</span>
                    </div>
                </div>
                
               
                    
                    
    
                </div>
                
    
                        <div class="col align-self-center">
                            <img src="{{url('/assets/img/portfolio/Browser2.png')}}"  style="align-items: flex-end; width: 100%;  margin-top: 0px;" >
                        </div>
            </div>
            

                    
                    
        </section>
        <!-- <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <div class="row justify-content-center">
                    
                    
                    <div class="col-md-4" style="justify-content: left;">
                        <div id="left-side">
                            <img  src="assets/img/portfolio/v413_27.png" alt="" />
                        </div>
                        
                        
                    </div>
                    
                    <div class="col-md-6">
                        <div id="right-side">
                            <img class="img-fluid" src="assets/img/portfolio/v413_27.png" alt="" />
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>-->
        <section style="background: #F0F4F8;">
            <div class="container " style="padding-top:4%;padding-bottom:4%;">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <h1 id="t1">Give your music wings</h1>
                <div class="col-md-12 text-center">
                    <p style="color:grey;">Your success is our success. Subshare is FREE until you start to make money. Once you do, our fee is 2-5%*.The rest belongs to you and your partners, as it should be.</p>
                {{--<p style="color:grey;"> Subshare is FREE until you start to make money. Once you do, our fee is 2-5%*. </p>
                <p style="color:grey;">The rest belongs to you and your partners, as it should be.</p>--}}
                <p style="color:grey;">*Top level artists will be charged lower fees. The more successful you are, the lower % your fees will be.</p>

                </div>
                
                <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:38px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold; margin-top:4%;margin-left:8%;
                            "><h6 style="font-weight:bold;">Sign up Free</h6></button>

                            <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:38px; padding-right:2%; padding-left:2%;background: #2C4064;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2);
                            font-weight:bold;margin-top:4%;margin-left:8%;
                            "><h6 style="font-weight:bold;">Learn more</h6></button>
                </div>
                <div class="col-md-4"></div>
                </div>
               

                
            </div>
        </section>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h5 id="t1" class="page-section-heading text-center  mb-0">How to Get Started on Subshare</h5>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->

                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter" >
                            <img class="img-fluid " src="{{url('/assets/img/portfolio/1-1.png')}}"   alt="" />
                            </a>
                            <br>
                            
                           
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/1-1.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">1. Sign up</span>
                        <br>
                        <span class="v348_177">Create an account for free, It only
                            takes a minute!</span>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter2" >
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/2-2.png')}}"  alt="" />
                            </a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                               
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/2-2.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176" >2. Upload</span>
                        <br>
                        <span class="v348_177">Your media
                            (complete or incomplete)
                            Your work. Proof of your skills.</span>
                        </div>
                        
                    </div>
                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter3" >
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/3-3.png')}}"  alt="" />
                            </a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/3-3.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">3. Search</span>
                        <br>
                        <span class="v348_177">Connections,
                            Tracks, Skills.
                            Forge partnerships.</span>
                        </div>
                        
                    </div>
                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter4" > 
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/4-4.png')}}"  alt="" />
                            </a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/4-4.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">4. Work on Media</span>
                        <br>
                        <span class="v348_177">Create,
                            Help others create.
                            Get help, complete your creation.
                            Offer/ Sell media to others.</span>
                        </div>
                        
                    </div>
                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter5" >
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/5-5.png')}}"   alt="" />
                            </a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/5-5.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">5. Distribute</span>
                        <br>
                        <span class="v348_177">To iTunes.
                            Spotify, Youtube, etc. Easy, cost-effective process.</span>
                    
                        </div>
                        
                    </div>
                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter6" >
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/6-6.png')}}"   alt="" />
                            </a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/6-6.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">6. Link up</span>
                        <br>
                        <span class="v348_177">With
                            influencers on TikTok, Instagram, or YouTube and exchange royalties, or pay them to promote your
                            music.</span>
                        </div>
                        
                    </div>
                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter7" >
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/7-7.png')}}"  alt="" />
                            </a>    
                        </div>
                        <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/7-7.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">7. Manage</span>
                        <br>
                        <span class="v348_177">Collabs/Offers,
                            Contracts, Royalties, Financial Dashboard</span>
                        </div>
                        
                    </div>
                    <div class="col-md-3  mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter8" >
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/8-8.png')}}"  alt="" />
                            </a>    
                        </div>
                        <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                    <img style="height:130%;width:195%;"  src="{{url('/assets/img/portfolio/8-8.png')}}" alt="" />
                                
                            </div>
                        </div>
                        <div style="margin-left:10%; margin-right:1%;">
                        <span style="color:#2C4064;" class="v348_176">8. Get paid</span>
                        <br>
                        <span class="v348_177">Cash out your
                            earnings!</span>
                        </div>
                        
                    </div>


                    
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about" style="background: linear-gradient(rgba(36,199,144,1), rgba(28,62,123,1));">
            <div class="container">
                
                    <p id="p-white"  class="page-section-heading text-center  mb-0">If you love music, if you enjoy listening to, playing, or
                        making music,
                        these apps are for you:</p>
                
                <!-- About Section Heading-->
                
                <div class="divider-custom divider-light">
                    
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-5 ml-auto" style="margin-right: 10%;">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/browser.png')}}"  alt="" />
                        <h4 class="text-center">Neptune</h4>
                        <h5 class="text-center">The Next-gen Music Streaming
                            Service</h5>
                            <h6 class="text-center">For music lovers. For music artists.</h6>
                            <span class="text-center">Free to Listen. Listen with Freedom.</span>
                            <span class="text-center">Listen to Discover. Discover Your Song.</span>
                            <br>
                            {{--<button class="btn btn-light" style="align-items: center;margin-top: 20%; margin-left: 30%;">Learn More</button>--}}
                            <button type="button" class="btn bg-light" style="align-items: center;border-radius:25px; width: 200px; height:38px; padding-right:1%; padding-left:1%;background: #2C4064;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2);
                            font-weight:bold;margin-top:8%;margin-left:20%;
                            "><h6 style="font-weight:bold;">Learn more</h6></button>
                    </div>
                    <div class="col-lg-5 mr-auto">
                        <img class="img-fluid" src="{{url('/assets/img/portfolio/browser.png')}}"  alt="" />
                        <h4 class="text-center">Ripple</h4>
                        <h5 class="text-center">Music Education for All</h5><h6 class="text-center">For students. For teachers. For music artists.</h6>
                        <span class="text-center">Choose Your
                Tutor. Connect with Mentors.</span><span class="text-center">Share Your Experience. Be Rewarded.</span>
                {{--<button class="btn btn-light"  style="align-items: center;margin-top: 20%; margin-left: 30%;">Learn More</button>--}}
                <button type="button" class="btn bg-light" style="align-items: center;border-radius:25px; width: 200px; height:38px; padding-right:1%; padding-left:1%;background: #2C4064;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2);
                            font-weight:bold;margin-top:8%;margin-left:20%;
                            "><h6 style="font-weight:bold;">Learn more</h6></button>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="footer text-center text-dark bg-light">
            <div class="container">
                    
                <!-- Footer Location-->
                <h4 id="t1" class="col-md-12" style="color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);font-size:40px;" >We look forward to helping you ease and accelerate your musical journey.</h4>
                {{--<img src="{{url('/assets/img/portfolio/sign-up.png')}}">--}}
                <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:2%;
                            "><h5 style="font-weight:bold;">Sign Up Free</h5></button>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-md-2 ">
                        <p>Home</p>
                        
                    </div>
                    <div class="col-md-2 ">
                        <p>Subshare</p>
                        
                    </div>
                    <div class="col-md-2 ">
                        <p>Neptune</p>
                        
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
                        
                        <p>About</p>
                    </div>
                    <div class="col-md-2 ">
                        
                        <p>Ripple</p>
                    </div>
                    <div class="col-md-2 ">
                        
                        <p>Blog</p>
                    </div>
                    <div class="col-md-2 ">
                        
                        <p>Contact us</p>
                    </div>
                    <div class="col-md-2 ">
                        <p>Terms of Service</p>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    
                    <div class="col-md-9" style="align-items:flex-end;">
                        <div class="row">
                                <div class="col-md-2">
                                
                                </div>
                                <div class="col-md-7">
                                    <input type="text" placeholder="Email" class="form-control">
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
