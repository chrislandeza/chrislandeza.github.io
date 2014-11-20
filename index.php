<?php
    define('home_img', 'home.png');
    define('profile_img', 'profile.png');
    define('home_heading', 'Shangri-La Finest Chinese Cuisine'); // HELLO, I'M CHRIS
    define('home_subheading', 'Best Chinese Restaurant in Quezon City'); // Welcome to my Interactive Resume.
?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Developer and Designer - Chris Landeza</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Animate CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body data-spy="scroll" data-target="#navigation" data-offset="80"  >
    
     <!-- Home Section -->
     <section id="home">
         <div  class="center-div">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <div class="avatar wow fadeIn">
                            <img src="assets/img/<?php echo home_img; ?>" class="img-responsive" alt="Profile Picture">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <h1 class="home-heading wow fadeInUp"><?php echo home_heading; ?></h1>
                            <p class="home-subheading wow fadeInUp"><?php echo home_subheading; ?></p>
                            <div class="home-buttons wow bounceIn">
                             <a href="#profile" class="btn btn-primary btn-md page-scroll">READ MORE</a>
                             <a href="https://wrapbootstrap.com/theme/cvilized-timeline-style-cv-resume-WB057FN0R" class="btn btn-danger btn-md">DOWNLOAD MENUS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sticky Navigation -->
    <section id="navigation">
        <!-- Navigation -->
        <nav id="nav" class="navbar navbar-default navbar-static-top" role="navigation">
             <div class="container"> 
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#home">
                        <!-- logo.png -->
                        <img src="assets/img/logo.png" class="brand"> 
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from profile link when scrolled up past profile section -->
                        <li class="hidden">
                            <a class="page-scroll" href=""></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#profile" class="about-section">Profile</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#experiences">Experiences</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#abilities">abilities</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#projects">Projects</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div> 
            <!-- /.container -->
        </nav>
    </section>
    <!-- Sticky Navigation end -->
    

   
    <!-- Profile Section -->
    <section id="profile" class="full-height">
        <div class="container">
            
            <h2 class="heading wow fadeInDown">Profile</h2>
            <p class="lead text-center wow fadeInDown">Web Developer</p>
            <hr>
           
            <div class="row">
                <div class="col-md-4 wow fadeInLeft">
                    <h2>Chris Landeza</h2>
                    <p><strong>Age: </strong> 21 </p>
                    <p><strong>Hobbies: </strong> Codes, Movies, Read, Video Tutorials,  Hangout with friends, listen to music and Computer Games (Dota 2). </p>
                    <p><strong>Location: </strong> Valenzuela City, Philippines </p>
                    
                </div><!--/col-->          
                <div class="col-md-4 text-center wow fadeInLeft">
                        <img src="assets/img/<?php echo profile_img; ?>" alt="" class="center-block img-circle img-responsive">
                        <ul class="list-inline ratings text-center" title="Ratings">
                          <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                          <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                          <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                          <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                          <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                        </ul>
                </div><!--/col-->
                <div class="col-md-4 wow fadeInLeft">
                    <h3>About Me</h3>
                    <p>
                        I'm a Web Developer with good knowledge of front and back-end techniques, a person who loves to code and learn new things (specially in my field). 
                        I devoted almost 4 hours of my everyday life reading articles and watching video tutorials to expand my knowledge.
                        I like spending time on fixing little details and complex things. my goal right now is to work with a team of developers so I can share and enhance my ability.
                    </p>
                </div>
                        
            </div><!--/row-->
             
        </div>
    </section>
    <!-- Profile Section End -->

    <!-- Experiences Section -->
    <section id="experiences" class="full-height">
        <div class="container">
            <div id="education">
                <h2 class="heading wow fadeInDown">Experiences</h2>
                <hr>
                <p class="lead wow fadeIn">Education</p>
                <div class="experience row">
                    <div class="col-md-4 wow fadeIn">
                        <h4>Our Lady of Fatima University</h4>
                        <p class="experience-period">
                            <small class="timeline-date"><i class="glyphicon glyphicon-calendar"></i> June 2009 - April 2013</small>
                        </p>
                    </div>
                    <div class="col-md-8 wow fadeIn">
                        <p>
                            <strong>Bachelor of Science in Information Technology</strong>
                            <span class="hidden-phone">
                                The education was simply all the basic things you need to know before you enter the world of Technology, 
                                I learned about Hardware, Networking, Databases, Robotics, Graphic Designs, Video Editing, etc. but I have focus more in programming, software/web development and database management because it feels like the world is in my hand whenever I start to code.			
                            </span>
                            <span class="experience-details">
                                <span class="location">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    Valenzuela City				</span>
                            </span>
                        </p>
                    </div>
                </div>
                
                <div class="experience row">
                    <div class="col-md-4 wow fadeIn">
                        <h4>Florentino Torres High School</h4>
                        <p class="experience-period">
                            <small class="timeline-date"><i class="glyphicon glyphicon-calendar"></i> 2005 - 2009</small>
                        </p>
                    </div>
                    <div class="col-md-8 wow fadeIn">
                        <p>
                            <strong>Secondary School</strong>
                            <span class="hidden-phone">
                                Enjoyed doing Physics, Chemistry and History.
                            </span>
                            <span class="experience-details">
                                <span class="location">
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    Tondo, Manila				
                                </span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
            <hr>
            <p class="lead wow fadeInDown">Careers</p> <br />
            
            <div class="row">
                <div class="col-md-12">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"></div>
                                    <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <div class="row">
                                            <div class="col-md-8"> 
                                                <h4 class="timeline-company">Shangri-La Finest Chinese Cuisine</h4>
                                                <span class="timeline-position">Assistant Programmer</span>
                                            </div>
                                            <div class="col-md-4">
                                                <small class="timeline-date"><i class="glyphicon glyphicon-calendar"></i> June 2013 - Present</small>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="timeline-body">
                                      <p>
                                          Right after I graduated, I started working at Shangri-La Finest Chinese Cuisine: One of the best and has been the strongest Chinese Restaurant in Quezon City that has 1,200 seating Capacity. 
                                          
                                          </p>
                                          
                                        <p>I developed an Internal Reservation System for the Reservation staffs to cut out their workflow and make their job easy (See Features). </p>

<p>I also do marketing stuffs such as Email Blasting, Social media marketing, SEO, Creating Marketing materials etc.

I’ve learned lot from this company because I was able to all the 
                                        </p>
	

                                    </div>
                                  </div>
                                </li>
                                <li class="timeline-inverted">
                                  <div class="timeline-badge"></div>
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                      <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="timeline-badge danger"></div>
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                      
                                     
                                      
                                      
                                      wag mong sbhn na tinaboy kita ksi bka galit na maramdaman ko sayo dahil sa mga sinasabi mo..
                                      db everytime na bumabalik ka skn 
                                    </div>
                                  </div>
                                </li>
                                <li class="timeline-inverted">
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="timeline-badge info"></div>
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                      <hr>
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                          <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Action</a></li>
                                          <li><a href="#">Another action</a></li>
                                          <li><a href="#">Something else here</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                    </div>
                                  </div>
                                </li>
                                
                                <li class="timeline-inverted">
                                  <div class="timeline-badge success"></div>
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                      <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        
                </div>
            </div>
        </div>
    </section>
    <!-- Experiences Section End -->
    
    
    
    
    <!-- Abilities Section -->
    <section id="abilities" class="full-height">
        <div class="container">
            <h2 class="heading wow fadeInDown">Shangri-La</h2>
            <p class="lead text-center wow fadeInDown">Chinese Restaurant</p>
            <hr>
            <p class="lead wow fadeIn">Other Programming Language</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled ability-list">
                        <li>
                            <span class="ability-label">Visual Basic</span>
                            <div class="ability-rating">
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span>  
                                <span class="glyphicon glyphicon-star-empty"></span>  
                            </div>
                        </li>
                        <li>
                            <span class="ability-label">Java</span>
                            <div class="ability-rating">
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star-empty"></span> 
                                <span class="glyphicon glyphicon-star-empty"></span> 
                            </div>
                        </li>
                        <li>
                            <span class="ability-label">C++</span>
                            <div class="ability-rating">
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            
                        </li>
                        
                    </ul>
                </div>
                
                <div class="col-md-6">
                    <ul class="list-unstyled ability-list">
                      
                        <li>
                            <span class="ability-label">C#</span>
                            <div class="ability-rating">
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </li>

                        <li>
                            <span class="ability-label">Assembly Language</span>
                            <div class="ability-rating">
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star"></span> 
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                        </li>
                    </ul>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- Abilities Section End -->
    
    
    <!-- Projects Section -->
    <section id="projects" class="full-height">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Project Section</h1>
                    <h2>Shangri-La Finest Chinese Cuisine</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section End -->
    
    
    
    <!-- Contact Section -->
    <section id="contact" class="full-height">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                    <h2>Shangri-La Finest Chinese Cuisine</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- jQuery Version 1.11.0 -->
    <script src="assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>
