<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link href="./css/main.css" rel="stylesheet" />
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

            
        #bg-l{
            position: absolute;
                    
            width: 400px;
            height: 180px;
            padding-bottom: 15%; 
            font-family: arial;
            font-style: normal;
                    /* font-weight: 900; */
                    
            font-size: 150px;
            line-height: 280px;
            text-align: center;
            letter-spacing: 0.02em;
            opacity: 0.095;
                    /* border: 6px solid #2C4064; */
                    /* box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); */
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-weight: 900;
            -webkit-text-stroke: 4px black;
        }

        #bg-r{
            position: absolute;
                    
            width: 400px;
            height: 150px;
            padding-bottom: 15%; 
            font-family: arial;
            font-style: normal;
                    /* font-weight: 900; */
            font-size: 140px;
            line-height: 280px;
            text-align: center;
            letter-spacing: 0.02em;
            opacity: 0.095;
                    /* border: 6px solid #2C4064; */
                    /* box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); */
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-weight: 900;
            -webkit-text-stroke: 4px white;
        }
        

        @media (min-width: 1100px) {
            

            #bg-l{
                font-size: 148px;
                padding-left:20%;
                /*width: 80px;
                height: 40px;
                margin-left:2%;*/
            }

            #bg-r{
                font-size: 148px;
                /*width: 40px;
                height: 20px;
                margin-left:4%;*/
            }

             #head{
                margin-left:12%;
                
            }
            
        }

        

            @media (max-width: 992px) {
                #bg-l{
                font-size: 60px;
                width: 40px;
                height: 20px;
                padding-left:20%;
            }

            #bg-r{
                font-size: 60px;
                width: 40px;
                height: 20px;
                margin-left:4%;
            }

            #bg-color{
                width:100%:
            }

            #brows{
                padding-top:10%;
            }

            #head{
                padding-top:16%;
            }

            #mouse{
                padding-left: 40%;
            }
            
            #brow-2{
                margin-bottom:15%;
            }

            #brow-3{
                margin-bottom:5%;
            }

            #brow-4{
                margin-bottom:5%;
            }
        }

       /* @media (max-width: 150px) {
                #bg-l{
                font-size: 60px;
                width: 40px;
                height: 20px;
                margin-left:4%;
            }
            
        }*/

        
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
        <section style="background: #F0F4F8;">
            <div class="row">
                <div class="col-md-5" id="head" style="margin-top:8%;">
                <img src="{{url('/assets/img/portfolio/neptune2.png')}}"  style="padding-top: 6%;"  class="img-fluid" alt="">
                    <h1 style="color: rgba(36, 199, 144, 1);
                    margin-top:1%;font-family: Montserrat;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 64px;
                    line-height: 78px;
                    letter-spacing: 0.01em;">The Next-gen Music Streaming Service</h1>
                    <p style="font-family: Montserrat;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 24px;
                    line-height: 36px;
                    letter-spacing: 0.01em;
                    color: #69768D;" >For music lovers. For music artists.</p>
                </div>
                <div class="col-md-5" style="margin-top:6%;">
                <img src="{{url('/assets/img/portfolio/br.png')}}"  style="padding-top: 6%;"  class="img-fluid" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2"  style="margin-bottom:2%;margin-left:6%;margin-top:2%;">
                <img src="{{url('/assets/img/portfolio/v4.png')}}" id="mouse" style="padding-top: 6%;"  class="img-fluid" alt="">
                </div>
                <div class="col-md-4"></div>
            
            </div>
        </section>
        
        
        <section >
            {{--<img src="{{url('/assets/img/portfolio/ripple.png')}}"  style="padding-top:6%;" class="img-fluid" alt="">--}}
            
            <div class="row">
                <div class="col-md-6" style="background: #24C790;"  >
                    {{--<a href="#" style="width: 100%; margin-right: 0px;"></a><img src="assets/img/portfolio/Free.png" style="width: 107%; height: 100%; margin-right: 0px;" alt=""></a>--}}
                    
                    <span id="bg-l"  style="
                    margin-left: 1%; 
                    
                    
                    color: #24C790;">FREE</span>
                        <h2 class="text-center " style="padding-top:10%; font-weight: bold;
                    font-size: 58px;
                    line-height: 78px;
                    text-align: center;
                    letter-spacing: 0.01em;


                    color: #F0F4F8;
                    ">Free to Listen</h2>
                        <h3 class="text-center " style="padding-bottom:10%;font-style: italic;
                    font-weight: bold;
                    font-size: 40px;
                    line-height: 49px;

                    text-align: center;
                    letter-spacing: 0.01em;
                    color: #F0F4F8;">"Listen with Freedom"</h3>
                </div>
                <div class="col-md" style="background: #2C4064;" >
                    {{--<a href="#" style="width: 100%; margin-left: 0px;"><img src="assets/img/portfolio/Listen.png"  style="width: 100%; height: 100%; margin-left: 0px;" alt=""></a>--}}
                    <span id="bg-r" style="position: absolute;
                    margin-left: 10%; 
                    color: #2C4064;">LISTEN</span>
                        <h2 class="text-center " style="padding-top:10%;color: rgba(240, 244, 248, 1); opacity:1;font-size: 58px;
                        line-height: 78px;


                    text-align: center;
                    letter-spacing: 0.01em;


                    color: #F0F4F8;
                    ">Listen to Discove</h2>
                        <h3 class="text-center " style="padding-bottom:10%;font-style: italic;
                    font-weight: bold;
                    font-size: 40px;
                    line-height: 49px;
                    /* identical to box height */

                    text-align: center;
                    letter-spacing: 0.01em;

                    /* Light Blue */

                    color: #F0F4F8;">Discover Your Song</h3>
                </div>
            </div>
            
        </section>
        
        <section>
            <div class="row">
                <div class="col-md-6" style="background: #2C4064;">
                    <img class="img-fluid" src="{{url('/assets/img/portfolio/browser-ripple.png')}}" id="brow-2"  style="padding: 10%;padding-top:25%;" alt="" />
                </div>
                <div class="col">
                    
                    <div class="col-md-12 align-items-center" style="padding-left: 10%; padding-top:2%;padding-bottom:10%;">
                        <div style="padding-bottom:5%;">
                        
                        
                        <h1 class="" style="color: #24C790; padding-top: 15%;font-weight: bold;
                        font-size: 40px;
                        line-height: 49px;
                        letter-spacing: 0.01em;
                        color: #24C790;font-family: Montserrat;">Listen to Discover</h1>
                        <p style="color: #69768D;font-family: Montserrat;">Ever spent
                            hours listening to recommendations, searching for that fresh new tune?
                            That new song you’ve never heard before.
                            That’ll speak to a part of you.
                            That’ll suit your mood.
                            That’ll become the next great anthem all your friends will sing along to.
                            That conveys your feelings so well, you wonder if it was written just for you.
                            You don’t know what it is yet. You’ll know it when you hear it.</p>
                            <p> <b style="color: rgba(44, 64, 100, 1);
                                ">It’s true.</b></p> 
                            <p style="color: #69768D;font-family: Montserrat;"> That IS how we decide if we like a song or not.
                                But it’s based on only a certain part of the song.
                                No need to spend hours listening to a full song, which we may not like.
                                No need to skip through songs without purpose.</p>
                                <p> <b style="color: rgba(44, 64, 100, 1);
                                ">What if I told you, that you have a choice?</b>  .</p> 
                            <p style="color: #69768D;font-family: Montserrat;">That you could
                                choose to listen to just a part of the song?
                                It’s not a recommendation from some machine.
                                It’s a recommendation directly from the artist themselves.</p>
                                <p> <b style="color: rgba(44, 64, 100, 1);"
                                >You
                                    could find that song faster.</b>  .</p> 
                                <p style="color: #69768D;font-family: Montserrat;">By
                                    listening to 120 parts of different songs in 1 hour, for example.</p>
                        </div>
                        
                        
                        font-family: Montserrat;
                           

                    </div>
                    
                </div>
                
            </div>
                
            

        </section>
        <section class="page-section  mb-0" id="about" style="background: #F0F4F8;">
            <div class="container">
                
                    {{--<img src="{{url('/assets/img/portfolio/Card.png')}}"  alt="">--}}

                    <div class="row bg-white">
                        <div class="col-md-6 bg-white">
                        <img src="{{url('/assets/img/portfolio/image.png')}}" class="img-fluid"  alt="">
                        </div>
                        <div class="col-md-6" >
                        <h1 style="padding-top:12%; font-family: Montserrat;
                            font-style: normal;
                            font-weight: bold;
                            font-size: 24px;
                            line-height: 29px;
                            letter-spacing: 0.01em;
                            color: #2C4064;">With Intelligent Track Tagging:</h1>
                        <p style="color: #69768D;font-family: Montserrat;">Just set it to play all the parts tagged #best bit. It’s the part the song creator wants to showcase to you! Or if you feel intros are what get you into a tune, set it to play “Intro” tags for each song.</p>
                        </div>
                    </div>
                    
                
        
                
            </div>
        </section>
        <section class="page-section  mb-0" id="about" style="background: #24C790;">
            <div class="container">
               <h3 class="text-center text-white" style="font-family: Montserrat;">Treat your ears*! Discover fresh tunes!</h3> 
               <p class="text-center text-white" style="font-family: Montserrat;">*We don’t play ads to interrupt your listening experience.</p> 
               {{--<img src="{{url('/assets/img/portfolio/w-sign-up.png')}}"  class="img-fluid" style="margin-left: 35%;" alt="">--}}


                <div class=row>
                    <div class="col-md-4">
                    
                    </div>
                    <div class="col-md-5">
                    <button type="button" class="btn text-secondary" style="margin-left:8%;border-radius:25px; width: 250px; height:45px; padding-right:2%; padding-left:2%;background: white;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;
                            "><h5 style="font-weight:bold;font-family: Montserrat;">Sign up Free</h5></button>
                    </div>
                    <div class="col-md-6">
                    
                    </div>
                </div>   
               
        
                
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col">
                    
                    <div class="col-md-12 align-items-center" style="padding-left: 10%;padding-top:12%;padding-bottom:12%;">
                        <h1  style="color: #24C790; font-weight: bold;
                        font-size: 40px;
                        line-height: 49px;
                        letter-spacing: 0.01em;font-family: Montserrat;
                        ">Listen with Freedom</h1>
                        <p style="color: #69768D;font-family: Montserrat;">Neptune is where music artists come together, to showcase their music.
                            It’s also where you’re free to choose.
                            You don’t have to listen to what you’re told to listen to, by corporations or radio
                            stations.</p>

                            <p> <b style="color: #2C4064;font-family: Montserrat;"> You’re free to
                                listen to what you want.
                                Free to discover music that speaks to your soul.</b></p>

                            <p style="color: #69768D;font-family: Montserrat;">Break free from what some exec or algorithm thinks you would,
                                or should, like.
                                There could be someone from a different continent from yours, who uploads music online.
                                They could be (as yet) unknown.
                                But their music could inspire you to great things.</p>
                                <p style="color: #69768D;font-family: Montserrat;">What if what you really need, is a musical mentor?</p>

                           <p> <b style="color: #2C4064;font-family: Montserrat;">Be the one to discover them and their songs.
                            Without borders or barriers.
                            Find them on Neptune </b> </p> 
                            {{--<img src="{{url('/assets/img/portfolio/sign-up.png')}}"  alt="">--}}
                            <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:1%; padding-left:1%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:1%;
                            margin-bottom:8%;"><h5 style="font-weight:bold;">Sign Up Free</h5></button>
                            
                    </div>
                    
                </div>
                <div class="col-md-6" style="background: #2C4064;">
                    <img class="img-fluid" src="{{url('/assets/img/portfolio/browser-ripple.png')}}" id="brow-3"  style="padding: 10%;padding-top:20%;" id="brows"  alt="" />
                </div>
                
                
            </div>
                
        </section>
        <section>
            <div class="row">
                <div class="col-md-6" style="background: #2C4064;" >
                    <img class="img-fluid" src="{{url('/assets/img/portfolio/browser-ripple.png')}}"  style="padding: 10%;padding-top:15%;" id="brow-4" alt="" />
                </div>
                <div class="col">
                    
                    <div class="col-md-10" style="padding-left: 10%;padding-top:12%;padding-bottom:12%;">
                        <h1  style="color: #24C790; font-weight: bold;
                        font-size: 40px;
                        line-height: 49px;
                        
                        letter-spacing: 0.01em;
                        ">Let your music be discovered!</h1>
                        <p style="color: #69768D;font-family: Montserrat;">To all the music artists of the world,
                            We want to help you have a meaningful career, while preserving your freedom.
                            You all have unique sounds, waiting to be discovered.
                            We want to make it happen.
                            Help us help you.</p>
                            
                            <p style="color: #69768D;font-family: Montserrat;"> Use Neptune as your base,
                                to showcase your music to the world.
                                Promote your music.
                                Connect to an audience that wants your music.
                                They just haven’t heard it. Yet.</p>

                               
                                
                            <p style="color: #69768D;font-family: Montserrat;">Do it all without giving up your IP.
                                Instead, we help you protect it.
                                “All your tracks belong to you.”</p>
                                {{--<img src="{{url('/assets/img/portfolio/sign-up.png')}}"  alt="">--}} 
                                <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:1%; padding-left:1%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:1%;
                            "><h5 style="font-weight:bold;">Sign Up Free</h5></button>
                            
                           

                    </div>
                    
                </div>
                
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
