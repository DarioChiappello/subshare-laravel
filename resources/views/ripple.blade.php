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
            opacity: 0.15;
                    /* border: 6px solid #2C4064; */
                    /* box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); */
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-weight: 900;
            -webkit-text-stroke: 4px black;
        }

        #bg-r{
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
            opacity: 0.15;
                    /* border: 6px solid #2C4064; */
                    /* box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); */
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-weight: 900;
            -webkit-text-stroke: 4px white;
        }

        @media (min-width: 1100px) {
            

            #bg-l{
                font-size: 140px;
                /*width: 80px;
                height: 40px;
                margin-left:1%;*/
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
                margin-left:4%;
            }

            #bg-r{
                font-size: 60px;
                width: 40px;
                height: 20px;
                margin-left:4%;
            }

            #browser{
                padding-bottom:12% !important;
                margin-top:0%;
            }

            #browser2{
                padding-bottom:40% !important;
                margin-top:0%;
            }

            #head{
                padding-top:12%;
            }

            #mouse{
                padding-left: 40%;
            }

            
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
        <section  style="background: #F0F4F8;">
            <div class="row" >
                <div class="col-md-5" id="head" style="margin-top:8%;">
                <img src="{{url('/assets/img/portfolio/ripple2.png')}}"  style="padding-top: 6%;"  class="img-fluid" alt="">
                    <h1 style="color: rgba(36, 199, 144, 1);
                    margin-top:1%;font-family: Montserrat;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 64px;
                    line-height: 78px;
                    letter-spacing: 0.01em;">Music Education for All</h1>
                    <p style="font-family: Montserrat;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 24px;
                        line-height: 36px;
                        letter-spacing: 0.01em;
                        color: #69768D;">For students. For teachers. For music artists.</p>
                                        </div>
                <div class="col-md-5" style="margin-top:6%;">
                <img src="{{url('/assets/img/portfolio/bripple.png')}}"  style="padding-top: 6%;"  class="img-fluid" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2" style="margin-bottom:2%;margin-left:6%;margin-top:2%;">
                <img src="{{url('/assets/img/portfolio/v4.png')}}" id="mouse" style="padding-top: 6%;"  class="img-fluid" alt="">
                </div>
                <div class="col-md-4"></div>
            
            </div>
        </section>
        <!-- Masthead-->
        <section >
            {{--<img src="{{url('/assets/img/portfolio/ripple.png')}}"  style="padding-top:6%;" class="img-fluid" alt="">--}}
            
            <div class="row">
                <div class="col-md-6" style="background: #24C790;"  >
                    {{--<a href="#" style="width: 100%; margin-right: 0px;"></a><img src="assets/img/portfolio/Free.png" style="width: 107%; height: 100%; margin-right: 0px;" alt=""></a>--}}
                    
                    <span id="bg-l"  style="
                    margin-left: 1%; 
                    
                    
                    color: #24C790;">CHOOSE</span>
                        <h2 class="text-center " style="padding-top:10%; font-weight: bold;
                    font-size: 58px;
                    line-height: 78px;
                    text-align: center;
                    letter-spacing: 0.01em;


                    color: #F0F4F8;
                    ">Choose Your Tutor</h2>
                        <h3 class="text-center " style="padding-bottom:10%;font-style: italic;
                    font-weight: bold;
                    font-size: 40px;
                    line-height: 49px;

                    text-align: center;
                    letter-spacing: 0.01em;
                    color: #F0F4F8;">Connect with Mentors</h3>
                </div>
                <div class="col-md" style="background: #2C4064;" >
                    {{--<a href="#" style="width: 100%; margin-left: 0px;"><img src="assets/img/portfolio/Listen.png"  style="width: 100%; height: 100%; margin-left: 0px;" alt=""></a>--}}
                    <span id="bg-r" style="position: absolute;
                    margin-left: 10%; 
                    color: #2C4064;">SHARE</span>
                        <h2 class="text-center " style="padding-top:10%;color: rgba(240, 244, 248, 1); opacity:1;font-size: 58px;
                        line-height: 78px;


                    text-align: center;
                    letter-spacing: 0.01em;


                    color: #F0F4F8;
                    ">Share Your Experience</h2>
                        <h3 class="text-center " style="padding-bottom:10%;font-style: italic;
                    font-weight: bold;
                    font-size: 40px;
                    line-height: 49px;
                    /* identical to box height */

                    text-align: center;
                    letter-spacing: 0.01em;

                    /* Light Blue */

                    color: #F0F4F8;">Be Rewarded</h3>
                </div>
            </div>
            
        </section>
        
        
        <section class="page-section  mb-0" id="about" style="background: #F0F4F8;">
            <div class="container">
                
                    <h6 class="page-section-heading text-center about-title" style="color: rgba(44, 64, 100, 1);
                    font-size: 36px; font-family: Montserrat;
                    font-style: normal;
                    font-weight: bold;">The <b style="color: #24C790;">Ripple</b> Effect </h6>
                    <div class="container">
                        <div class="container">
                            <div class="col-md-10 text-center" style="padding-left:18%;">
                                <span class="text-center" style="color: #69768D;align-text:center;">We want to
                                    empower music creators to help other music creators .
                                    </span><br>
                                    <span class="text-center" style="color: #69768D; align-text:center;">Those with experience can help newer music creators grow and improve.</span><br>
                                    <span class="text-center" style="color: #69768D;align-text:center;">As they mature in skills and experience, the newer music creators can help others in turn.</span><br>
                                    <span class="text-center" style="color: #69768D;align-text:center;">It’s the Ripple Effect.</span><br>
                                    <span class="text-center" style="color: #69768D;align-text:center;">To help more music creators realise their potential.</span><br>
                                    <span class="text-center" style="color: #69768D;align-text:center;">To make sure great music isn’t abandoned, half-complete.</span><br>
                                    <span class="text-center" style="color: #69768D;align-text:center;">To bring more inspired music to the world.</span>
                            </div>
                            
                        </div>
                    </div>
                
                <!-- About Section Heading-->
                
                <div class="divider-custom divider-light">
                    
                </div>

                
        
                
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-md-6" style="background: #2C4064;padding-top:3%;">
                    <img class="img-fluid " src="{{url('/assets/img/portfolio/browser-ripple.png')}}" id="browser" style="padding-top: 12%;" alt="" />
                </div>
                <div class="col">
                    
                    <div class="col-md-10 align-items-center" style="padding-left: 15%;padding-bottom:4%;padding-top:4%;">
                        <h1  style="color: #24C790; padding-top: 15%;margin-bottom:2%;font-family: Montserrat;">Choose Your Tutors</h1>
                        <p style="color: #69768D;font-family: Montserrat;">How do you
                            know they’re the right one for you?
                            It’s hard to tell, based only on a profile, or qualifications and certifications.
                            The right tutor could expand your musical world.
                            Deepen your love for music.
                            Expose you to new sources of inspiration.</p>

                            <p style="color: #69768D;font-family: Montserrat;"> On <b style="color: #24C790;">Ripple</b>, <b style="color: #2C4064;">listen to their music</b>  first,
                            to see if they’re a good match.
                            Check out <b style="color: #2C4064;"">their past musical production.
                            Hear their quality</b> for yourself.
                            Then connect.
                            See if they’d make a good tutor. For you.</p>

                            <p style="color: #69768D;font-family: Montserrat;">Maybe they’re self-taught, like you.
                            Or classically trained, like you.
                            Or had struggled to find their voice, like you.
                            Or just had problems hitting that chord progression. Okay, maybe not like you.
                            More important, is that they <b style="color: #2C4064;">share similar values and attitudes.</b>
                            And are the right ones to help you further your journey.</p>

                           <p style="font-family: Montserrat;"> <b style="color: #2C4064;">Find them
                            now on</b>  <b style="color: #24C790;">Ripple</b>.</p> 
                            {{--<img src="{{url('/assets/img/portfolio/sign-up.png')}}"  alt="">--}}
                            <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:6%; padding-left:6%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:8%;
                            margin-bottom:8%;"><h5 style="font-weight:bold;">Sign Up Free</h5></button>

                    </div>
                    
                </div>
                
            </div>
                
            

        </section>
        <section>
            <div class="row">
                <div class="col">
                    
                    <div class="col-md-10 align-items-center" style="padding-left: 15%;padding-bottom:4%;padding-top:4%;">
                        <h1 style="color: #24C790; padding-top: 15%;font-family: Montserrat;margin-bottom:2%;">Connect with Mentors</h1>
                        <p style="color: #69768D;font-family: Montserrat;">What
                            if, what you really need is feedback , help, ideas. Even some inspiration?
                            Not tutoring, or actual lessons.
                            Maybe you just have one tiny problem.
                            Like starting 60 tracks in the past few months, getting all of them to 80% completion.
                            But you can’t seem to complete a single one.
                            Something’s missing, but you don’t know what.
                            It’d be a shame to let all those tracks gather dust on the harddrive.
                            So find a mentor, or someone to collab with.
                            Who knows, that someone could be both!
                            Or you’re the type that receives feedback best when it’s structured, instead of unstructured.
                            Find a like-minded mentor who matches your style!
                            Or things have been tough for a while, and you’re thinking of quitting music.</p>

                            <p style="color: #69768D;font-family: Montserrat;"> Could be, all you need is a gentle hand on your back, urging you on.
                                A gentle hand from someone, letting you know you’re not alone.
                                From someone who understands what it’s like.
                                Who can help get you back to that place of determination, hard work, and sheer refusal to
                                give up.</p>

                            <p style="color: #69768D;font-family: Montserrat;">Whichever your need, wouldn’t it be great to have some honest,
                                direct-yet-gentle feedback or encouragement?
                                Or ideas. Or suggestions. Or advice.
                                So you can improve.
                                So you can get those 60 tracks up to 100% completion, upload them, and start getting offers
                                for them.</p>
                                <p style="color: #69768D;font-family: Montserrat;">What if what you really need, is a <b style="color: #2C4064;">musical mentor </b> ?</p>

                           <p style="font-family: Montserrat;"> <b style="color: #2C4064;">Whichever you
                            prefer, mentor or tutor, find them on </b>  <b style="color: #24C790;">Ripple</b>.</p> 
                            {{--<img src="{{url('/assets/img/portfolio/sign-up.png')}}"  alt="">--}}
                            <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:6%; padding-left:6%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:8%;
                            margin-bottom:8%;"><h5 style="font-weight:bold;">Sign Up Free</h5></button>

                    </div>
                    
                </div>
                <div class="col-md-6" style="background: #2C4064;">
                    <img class="img-fluid" src="{{url('/assets/img/portfolio/browser-ripple.png')}}" id="browser2" style="padding-top: 40%;" alt="" />
                </div>
                
                
            </div>
                
            

        </section>

        <section class="footer text-center text-dark bg-light">
            <div >
                    
                
                
                    <div class="col-md-8"></div>
                    <div class="col-md-10" style="padding-left:18%;">
                    <h3  style="color: #2C4064;font-family: Montserrat;" >Share Your Experience</h3>
                        <p class="text-center" style="color: #69768D;font-family: Montserrat;">Great
                            tutors or mentors come from all sorts of backgrounds.</p>
                    
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Some are highly certified.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Some aren’t. But what they have is experience.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Or skills in certain areas.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Some have a higher education in music.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Some are students, with a gift for teaching music.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">You could be one of them.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Your skills. Your experience.</span><br>
                        <span class="text-center" style="color: #69768D;font-family: Montserrat;">Teach them. Pass them on.</span><br>
                        
                            <h5 class="text-center"  style="margin-top:4%;color: #2C4064;font-family: Montserrat;font-weight: bold;">Connect with the students who want you. Who
                                appreciate you.
                                Get rewarded for it.</h5>
                                <br>
                                <button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:2%; padding-left:2%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;margin-top:2%;
                            "><h5 style="font-weight:bold;font-family: Montserrat;">Sign Up Free</h5></button>
                    </div>
                    
                           <br>
                            {{--<a href="#"><img src="{{url('/assets/img/portfolio/sign-up.png')}}" ></a>--}}
                            {{--<button type="button" class="btn text-white" style="border-radius:25px; width: 200px; height:45px; padding-right:1%; padding-left:1%;background: #24C790;box-shadow: 0px 10px 40px 0px rgba(43, 69, 116, 0.2); font-weight:bold;
                            "><h6 style="font-weight:bold;">Sign Up Free</h6></button>--}}
                            
            
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
