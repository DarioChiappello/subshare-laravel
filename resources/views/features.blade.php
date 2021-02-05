<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link href="./css/main.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <!-- Google fonts
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />-->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
        <style>
        
               
                #div-cent{

                }

                @media (min-width: 992px) {
                    #div-cent{
                        padding-left:25%;
                    }
                    
                    #t1{
                        padding-left:12%;
                    }

                    #p-center{
                        padding-left:25%;
                    }
                }

                @media (max-width: 992px) {
                    #button{
                        padding-top:2%;
                    }     
                }

        
        
            .panel-title>a, .panel-title>a:active{
                display:block;
                padding:15px;
            color:#555;
            font-size:16px;
            font-weight:bold;
                text-transform:uppercase;
                letter-spacing:1px;
            word-spacing:3px;
                text-decoration:none;
            }
            .panel-heading  a:before {
            font-family: 'Glyphicons Halflings';
            content: "\e114";
            float: right;
            transition: all 0.5s;
            }
            .panel-heading.active a:before {
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                transform: rotate(180deg);
            } 

            /*
            .accordion .card-header:after {
                font-family: 'FontAwesome';  
                content: "\f078";
                float: right; 
            }*/
        
            .accordion .card-header.collapsed:after {
                /* symbol for "collapsed" panels */
                content: "\f077"; 
            }
        </style>
        <script>
            
            $('.panel-collapse').on('show.bs.collapse', function () {
                $(this).siblings('.panel-heading').addClass('active');
            });

            $('.panel-collapse').on('hide.bs.collapse', function () {
                $(this).siblings('.panel-heading').removeClass('active');
            });
        </script>
        
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
        <section class="page-section  mb-0" id="about" style="background: #F0F4F8;">
            <div class="container ">
                
                    <h1 id="title-s" class="page-section-heading text-center about-title" style="color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);font-size: 36px; font-family: Montserrat;
                    font-style: normal;
                    font-weight: bold; padding-top: 10%;font-size: 64px;
                    line-height: 78px;
                    text-align: center;">“It’s hard to go alone. <br>
                    Take Subshare with you.”
                    </h1>
                    
                    <div class="col-md-16 " id="div-cent" >   <p class="col-md-8 text-center" style="color: #2C4064;color: font-family: Montserrat;"><b>Being independent</b>  is not about doing it all on your own. <br>
                        It’s about making <b>your own decisions</b> to create 
                        <b>your own music business.</b> <br>   Decisions like:</p></div>
                    
                <!-- About Section Heading-->
                
                <div class="divider-custom divider-light">
                    
                </div>

                
                <!-- About Section Content-->
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-md-6 ml-auto text-white" style="margin-bottom:2%;">
                        {{--<img  style="width: 110%; margin-top: 6%; " src="{{url('/assets/img/portfolio/about-1.png')}}"  alt="" />--}}
                        <div style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%); border-radius: 10px; height:100%;padding:4%;">
                        <div style="padding:5%;">
                            <h6 style="font-weight: bold;
                                font-size: 24px;
                                line-height: 29px;
                                letter-spacing: 0.01em;padding-bottom:4%;">Who to work with</h6>
                            <p>• Subshare helps you be speedy.</p>
                            <p>• Find people or music you need, FAST</p>

                        </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mr-auto text-white" style="margin-bottom:2%;">
                        {{--<img  style="width: 120%; height: 106%; " src="{{url('/assets/img/portfolio/about-2.png')}}"   alt="" />--}}
                        <div style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%); border-radius: 10px; height:100%;padding:4%;">

                        <div style="padding:5%;">
                            <h6 style="font-weight: bold;
                            font-size: 24px;
                            line-height: 29px;
                            letter-spacing: 0.01em;padding-bottom:4%;">What you’re willing to give, in exchange for collaboration</h6>
                            <p>• Subshare lets you set your own terms.</p>
                            <p>• You negotiate your contract.</p>
                            <p>• You determine how the money is split.</p>
                            <p>• It’s easy, secure, and protects your IP.</p>
                        </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="divider-custom divider-light">
                    
                </div>
                <div class="container align-items-center">
                    <div class="row col-md-12 align-items-center">
                        <p class="text-center" id="p-center" style="color: grey;">Do it all with ease and speed. Then get back to
                            what’s most important:</p>
                            <h5 id="t1"  class="page-section-heading text-center about-title" style="
                        font-weight: bold; ">Make your music. Have it played.
                        Get rewarded with royalties.</h5>
                        
                    </div>
                </div>
                <div class="container align-items-center">
                    <div class="row col-md-12 align-items-center">
                        
                            <h5 id="t1" class="page-section-heading text-center about-title" style="
                        font-weight: bold; padding-top: 10%;">What you can get done on Subshare:</h5>
                    </div>
                </div>

                
                
                <div class="container my-4">





                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row" >
                            <div class="col-md-10">
                            <h1 class="text-white" >Get Discovered</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white " data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon" style="margin-top:8%;"></i></h1>
                                </a>  
                            </div>
                        </div>
                    
                    
                        <div class="col-md-10">
                        <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">Your talent.
                                                Your hard work. Anyone in the world can discover it on Subshare.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Full or
                                                    partial track? Get paid by selling or contributing it.</p>

                        </div>
                    
                    
                                            
                    
                    </div>

                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p>How? <b>Start</b>  by uploading your tracks, sound packs, soundbanks, or
                                pre-sets.</p>
                                <p>
                                ● Old or new, complete or incomplete, upload them all.
                                </p>
                                <p>
                                ● Somewhere out there, there's someone who wants them!
                                </p>
                                <p>
                                <b> Get offers </b>to incorporate your music into other compositions.
                                </p>
                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"   alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>

                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white">Discover Others</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree1"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10"><span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">The fastest way
                                                to find the music you need -- Subfuse.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Will your work sound good with theirs?
                                                    Subfuse compares your media with others at a specific part of any track.
                                                    Hear it for yourself.</p></div>

                        
                    
                    </div>

                    <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                            



                                <p>
                                Find the right track for you or your composition with POI Player .
                                </p>

                                <p>● Saves time, takes you to the point in the track you need to go.</p>
                                <p>
                                ● Old or new, complete or incomplete, upload them all.
                                </p>
                                <p>
                                ● Stop wasting time skipping through tracks manually.
                                </p>
                                <p>
                                Have your music found (or find others’) faster than ever with music
                                tagging.
                                </p>
                                <p>● It’s not just tagging the track. It’s for specific points of the track
                        that are most interesting .
                                </p>
                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"   alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>

                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white"><h1>Collab With Others</h1></h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree2"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">

                            <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">They want
                                                your music or skills. You want theirs.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">No money to start with? No problem.
                                                    Go ahead and collaborate.
                                                    In a structured and safe environment, no less.</p>

                        </div>

                        
                    
                    </div>

                    <div id="collapseThree2" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                        

                                <p>
                                You can sell or buy media directly.
                                </p>

                                <p>Or, make offers with some of the eventual profits.</p>
                                <p>
                                Negotiate how much you each will get when the money does come in.
                                </p>
                                <p>
                                Do it all in the same place: make and track offers, negotiate, or find others
                                to bring into your music creation process.
                                </p>
                                
                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"   alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white">Contribute Your Skills</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                        <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">Exchange
                                                your skills for some of the royalties.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Or find others with the skills you
                                                    need.</p>

                        </div>
                        
                    </div>

                    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                        

                                <p>
                                Roles and skills needed by others could include melodies, synths, kick
                                drums, mastering, chord musician, orchestra.
                                </p>

                                <p>Or even roles beyond music creation , such as music teacher, graphic artist,
                                graphic designer, lyricist, video creator, social media influencer, and so on.</p>
                                
                                
                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"  alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white">Promote
                                                Your
                                                Music</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">

                        <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">Want to get your music into more ears?
                                                Get exposure with Neptune and SubSocial.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Manage your negotiated agreement --
                                                    and how much of the royalties each party gets
                                                    with our Smart Contract and Royalty Management systems</p>

                        </div>
                        
                    </div>

                    <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                        

                                <p>
                                SubSocial :
                                </p>

                                <p>Link up with influencers and personalities on TikTok, Instagram, or
                                YouTube.</p>

                                <p>
                                ● They’re hungry for fresh, indie music ; you'd like them to promote
                                your music. It’s a win-win partnership just waiting to happen.
                                </p>

                                <p>
                                ● Exchange royalties with them or pay them directly to get your
                                music in their videos.
                                </p>
                                
                                <p>
                                ● To get references and shout outs , let social media content
                                creators use your media by setting up a free zone.
                                </p>
                
                                <p>
                                Manage your negotiated agreement -- and how much of the royalties each
                                party gets -- with our Smart Contract and Royalty Management systems.
                                </p>

                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"   alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white">Position
                                                Your
                                                Music</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">


                        <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">The data you need is in our dashboards.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Where would your music be most popular?
                                                    We have the data for you.</p>
                        </div>
                        
                    </div>

                    <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                        

                                <p>
                                Analyze demand for your music, where it (and similar music from others) is
                                being streamed.
                                </p>

                                <p>Discover what others are doing to get exposure.</p>

                                <p>
                                See your relative position in charts.
                                </p>

                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"  alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white">Distribute
                                                Your
                                                Music</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree7"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                        <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">Low cost digital distribution. Easy process.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Distribute to iTunes, Spotify, Amazon Music, YouTube Art Tracks and
                                                    more, with a single simple process on Subshare.</p>

                        </div>
                        
                    </div>

                    <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                        

                                <p>
                                As cost effective as possible . We’ve done our best to make it so, although
                                it’s not part of our core business.
                                You could get a decent return even with a handful of songs .
                                </p>


                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"  alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                <div class="accordion md-accordion"  id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">

                    <!-- Card header -->
                    <div class="card-header text-white" style="background: #2C4064;padding-top:3%;padding-left:3%;
                                " role="tab" id="headingThree3">
                        <div class="row">
                            <div class="col-md-10">
                            <h1 class="text-white">Protect Your IP</h1>
                            </div>
                            <div class="col-md-2 text-white">
                            <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree8"
                            aria-expanded="false" aria-controls="collapseThree3">
                                <h1><i class="fas fa-angle-down rotate-icon"></i></h1> 
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                        <span style="font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;line-height: 22px">Protect your
                                                uploaded media on Subshare.</span>
                                                <p style="font-family: Montserrat;font-style: normal;font-weight: normal;font-size: 16px;">Move forward with confidence In the event of any
                                                    legal dispute.
                                                    We provide you with indisputable evidence to prove what happened,
                                                    which will definitely help your case.</p>
                        </div>
                        
                    </div>

                    <div id="collapseThree8" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx" >
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                            
                            
                            

                                <p>
                                We build this indisputable evidence using blockchain tech, for your
                                protection.
                                </p>

                                <p>
                                Every step of the process, exchange of media, all communications and any
                                evolution of your media is captured, stored and made safe .
                                </p>

                                <p>
                                This is combined with our specialised legal terms that add another layer of
                                protection.
                                </p>


                                
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{url('/assets/img/portfolio/f-img.png')}}"   alt="" />
                            </div>
                        
                        </div>
                        
                        
                        
                        </div>
                    </div>
                    
                </div>
                <br>
                </div>

                
                    
                
                
            </div>
        </section>
        
       
       
        <section class="footer text-center text-dark bg-light" style="background: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);">
            <div class="container">
                    
                <!-- Footer Location-->
                <h4 class="text-white font-weight-bold" style="color: linear-gradient(135deg, #24C790 0%, #1C3E7B 100%);font-size:
                40px;" >Do you want any of this? Give us a try, for FREE!</h4>
                {{--<img src="{{url('/assets/img/portfolio/w-sign-up.png')}}" >--}}
                <br>
                <button type="button" id="button" class="btn text-secondary" style="border-radius:25px; width: 200px; height:45px; padding:1%;background: white;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;
                            "><h6 style="font-weight:bold;">Sign up Free</h6></button>
            
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
        <script>
             $('.panel-collapse').on('show.bs.collapse', function () {
                $(this).siblings('.panel-heading').addClass('active');
            });

            $('.panel-collapse').on('hide.bs.collapse', function () {
                $(this).siblings('.panel-heading').removeClass('active');
            });

        </script>
    </body>
</html>
