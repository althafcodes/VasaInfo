<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "phpcrud";

if (count($_POST) > 0) {
    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);
    $sql = "INSERT INTO vasaformc(firstname, lastname, email) VALUES ('" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["email"] . "')";
    mysqli_query($conn, $sql);
    $message = "Submitted Successfully! . Thank You for your interest";
    echo "<script>
              alert('$message');
              window.location.href='http://localhost/vasa-infotech/';
              </script>";
}
?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Baloo|Roboto|Tahoma|Pacifico|Bebas+Neue|Fondamento|Merienda+One|PT+Serif" rel="stylesheet">
  <link rel="shortcut icon" href="./images/favicon.ico"/>


  <title>Vasa Infotech</title>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->




  <link rel="stylesheet" href="./css/styles1.css">
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="./css/services.css">
  <link rel="stylesheet" href="./css/products.css">
  <link rel="stylesheet" href="./MDBootstrap-pro/MDB-Pro_4.11.0/css/mdb.min.css">

</head>






<body>





  <section id="home">

    <nav class="navbar navbar-expand-lg fixed-top navbar-light nav-menu">

      <a class="navbar-brand" href="#home" id="logo"><img src="./images/logo.png"></a>
      <span class="navbar-brand" id="t1"> <b style="color: #E91B26;">VASA <span style="color: royalblue;">Infotech</span></b> </span>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-center"
        aria-controls="menu-center" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu-center">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="btn btn-md btn-rounded btn-outline-danger waves-effect active1"
              id="about-btn" type="button"><span>Home</span></a>
          </li>
          <li class="nav-item">
            <a href="#about" class="btn btn-md btn-rounded btn-outline-danger waves-effect" id="about-btn" type="button"><span>About Us</span></a>
          </li>
          <li class="nav-item">
            <a href="#services" class="btn btn-md btn-rounded btn-outline-danger waves-effect"
              id="services-btn" type="button"><span>Services</span></a>
          </li>
          <li class="nav-item">
            <a href="#products" class="btn btn-md btn-rounded btn-outline-danger waves-effect"
              id="products-btn" type="button"><span>Products</span></a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="btn btn-md btn-rounded btn-outline-danger waves-effect" id="contact-btn" type="button"><span>Contact
              Us</span></a>
          </li>

        </ul>
      </div>

    </nav>



  <div class="main-banner">
    <video autoplay controls loop width="100%" height="670px">
      <source src="./images/vasainfo3.mp4" type="video/mp4" />
    </video>
    </div>

    <br><br><br><br>

  </section>























  <section id="about">

  <div class="container ">
        <div class="h2 mt-3 col-12 head fade">
            <span style="color: red;">Our</span>
            <span style="color: royalblue;">Belief</span>
        </div>
    </div>
    <div class="container">
        <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 fade" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
              <a class="blue-gradient btn-floating" href="#carousel-example-multi" data-slide="prev"><i
                  class="fas fa-chevron-left"></i></a>
              <a class="blue-gradient btn-floating" href="#carousel-example-multi" data-slide="next"><i
                  class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-multi" data-slide-to="1"></li>
              <li data-target="#carousel-example-multi" data-slide-to="2"></li>
              <li data-target="#carousel-example-multi" data-slide-to="3"></li>
              <li data-target="#carousel-example-multi" data-slide-to="4"></li>
              <li data-target="#carousel-example-multi" data-slide-to="5"></li>
            </ol>
            <!--/.Indicators-->

            <div class="carousel-inner v-2" role="listbox">

              <div class="carousel-item active">
                <div class="col-12 col-md-4">
                  <div class="card mb-2 hoverable">
                    <img class="card-img-top" src="https://blog.vantagecircle.com/content/images/2020/02/creativity-at-work.png"
                      alt="image_innovationThinking">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold">Innovation Thinking</h4>
                      <a  href="https://www.thebalancecareers.com/creative-thinking-definition-with-examples-2063744" target="_blank" class="btn btn-unique btn-md btn-rounded" style="background-color: rgb(255, 97, 97) !important;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-4">
                  <div class="card mb-2 hoverable">
                    <img class="card-img-top" src="https://www.ibexmag.com/wp-content/uploads/2020/04/studentlearning.jpg" alt="image_keepLearning ">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold">Keep Learning</h4>
                      <a href="https://www.linkedin.com/pulse/7-reasons-why-continuous-learning-important-amit-nagpal#:~:text=Continues%20learning%20is%20your%20self,and%20reach%20your%20full%20potential. " target="_blank " class="btn btn-primary btn-md btn-rounded" style="background-color: rgb(255, 97, 97) !important;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-4">
                  <div class="card mb-2 hoverable">
                    <img class="card-img-top" src="https://miro.medium.com/max/960/1*FlnarOPNP_oTnz0xwuBdLg.jpeg " alt="image_impossibleToPossible ">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold">Impossible to Possible</h4>
                      <a href="https://medium.com/@brunoboksic/how-to-make-the-impossible-possible-44d67617e3b5 " target="_blank " class="btn btn-primary btn-md btn-rounded" style="background-color: rgb(255, 97, 97) !important;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-4">
                  <div class="card mb-2 hoverable">
                    <img class="card-img-top" src="https://images.wsj.net/im-105325?width=620&size=1.5 " alt="image_billGates ">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold">Bill Gates is our Belief</h4>
                      <a href="https://blog.taskque.com/entrepreneur-lessons-bill-gates/ " target="_blank " class="btn btn-primary btn-md btn-rounded" style="background-color: rgb(255, 97, 97) !important;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-4">
                  <div class="card mb-2 hoverable">
                    <img class="card-img-top"src=" https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3laUA0opiJayk7FzysfoxXmG_XrR0cHyWKQ&usqp=CAU " alt="image_Quality ">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold">Quality</h4>
                      <a href="https://www.greenlight.guru/blog/quality-culture " target="_blank " class="btn btn-primary btn-md btn-rounded" style="background-color: rgb(255, 97, 97) !important;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-12 col-md-4">
                  <div class="card mb-2 hoverable">
                    <img class="card-img-top"  src="https://miro.medium.com/max/1080/1*sbL_Xst2AuDlG9mMy0w5TQ.png " alt="image_constantImprovemnet ">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold">Constant Improvement</h4>
                      <a href="https://theleanway.net/5-Benefits-of-Continuous-Improvement " target="_blank " class="btn btn-primary btn-md btn-rounded" style="background-color: rgb(255, 97, 97) !important;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
    </div>

      </div>






<br><br><br><br>




  <div id="technologies">
  <div class="h2 mt-3 col-12 head pt-4 fade">
            <span style="color: red;">Technologies</span>
            <span style="color: royalblue;"> We use</span>
        </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/analysis2.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Requriments Analysis</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/design.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Design</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/archi.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Architecture</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/devalopment.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Development</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/golive1.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Go Live</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/submission.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Submission to App Store</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/quality.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Quality Assurance</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">

                    <h3><img src="./images/technologies/build.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Build and Release</p>

                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="row">
            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/market.jpeg" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Setting Period in Market(3Months)</p>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/maintain.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Post Launch Maintenance</p>
                    <br>
                </div>
            </div>

            <div class="col-md-3 fade">
                <div class="card hoverable">
                    <h3><img src="./images/technologies/download.png" style="width:100px; height:100px; background-color: yellowgreen;"></li>
                    </h3>
                    <p class="title">Optimization and enhancement</p>
                </div>
            </div>

        </div>
        <br><br><br>
    </div>

    </div>
    <br><br><br><br>

    <div id="wcu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 card border-0">
            <div class="h2 mt-3 col-12 head fade">
            <span style="color: red;">Why</span>
            <span style="color: royalblue;">Choosing Us?</span>
            </div>
                <br>
                <p style="text-align: center;">We choose only clients that share in our values...it takes treament and a solid commitment to good communication,<br>
                                               excellence and industry best pracitices to serve a company in an excellent manner</p>
            </div>
            <div class="center">
                <img class="col-md-12 hoverable" style="width:100%; height:100%; " src="./images/wcu.jpg" >

            </div>

            <div class="container my-2">
                <div class="row">
                    <div class="col-md-4 card border-0 fade">
                        <h4 class="one " style="text-align: center; color:red;">DESIGN</h4>
                        <p class="title">Digital has emerged as the universal disruptor for bussinesses striving to address new challenges in today's transforming milieu</p>

                    </div>
                    <div class="col-md-4 card border-0 fade">
                        <h4 class="one " style="text-align: center; color:red;">INNOVATION</h4>
                        <p class="title">Business innovation is when an organization introduces new processes, services or products to affect positive changes in their bussiness</p>
                    </div>
                    <div class="col-md-4 card border-0 fade">
                        <h4 class="one" style=" text-align: center; color:red; ">PEOPLE</h4>
                        <P class="title">
                            Employess are our most important customers because they can provide crucial insights into the overall customer experience
                        </P>

                    </div>
                </div>
            </div>
            <div class="container">

                <div class="col-md-4 center card border-0 fade">
                    <div class="two">
                    <h4 style="text-align: center; color:red;">TECHNOLOGIES</h4>
                        <p class="title">Technology has a big impact on bussiness operations no matter the size of your company technology can bring many benefits that will help you increase revenue make and produce the goods to your customer demand </p>




                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


  </section>





















  <section id="services">

        <div class="h2 col-12 head fade">
            <span style="color: red;">Services </span>
            <span style="color: royalblue;">Provided By Us</span>
        </div>
    <br>
    <div class="row">
      <div class="column ">
        <div class="card text-dark hoverable fade">
          <h3><img src="./images/services/technology_consultancy.jpg"
              style="width:100px; height:100px; background-color: yellowgreen;"></li>
          </h3>
          <p class="title">TECHNOLOGY CONSULTING</p>

          <p class="content">Providing technical consultation to companies to streamline their process flows and enable
            them for automation, tracking and scaling.</p>
        </div>
      </div>
      <div class="column">
        <div class="card text-dark hoverable fade">
          <h3><img src="./images/services/photo_product.jpg"
              style="width:100px; height:100px; background-color: yellowgreen;"></li>
          </h3>
          <p class="title">PRODUCT ENGINEERING</p>

          <p class="content">We provide the process of designing and developing a device, assembly, or system such that
            it could be produced as an item for sale through some production manufacturing process.</p>
        </div>
      </div>

      <div class="column">
        <div class="card text-dark hoverable fade">
          <h3><img src="./images/services/process_automation.jpg"
              style="width:100px; height:100px; background-color: yellowgreen;"></li>
          </h3>
          <p class="title">PROCESS AUTOMATION</p>

          <p class="content">Providing automation tools necessary for any process in any business to help in improving efficiency, tracking and transparency.</p>
        </div>
      </div>

      <div class="column">
        <div class="card text-dark hoverable fade">
          <h3><img src="./images/services/enterprise.jpg"
              style="width:100px; height:100px; background-color: yellowgreen;"></li>
          </h3>
          <p class="title">ENTERPRISE SERVICES</p>

          <p class="content">Providing proper scope to play a productive role in automating business processes in
            enterprise computing.</p>
        </div>
      </div>

      <div class="column">
        <div class="card text-dark hoverable fade">
          <h3><img src="./images/services/digital_transformation.jpg"
              style="width:100px; height:100px; background-color: yellowgreen;"></li>
          </h3>
          <p class="title">DIGITAL TRANSFORMATION</p>

          <p class="content">Providing end to end tools needed to automate the whole process flow of any business and
            help in business transformation and seamless scaling.</p>
        </div>
      </div>
      <div class="column">
        <div class="card text-dark hoverable fade">
          <h3><img src="./images/services/startup_software_solutions.jpg"
              style="width:100px; height:100px; background-color: yellowgreen;"></li>
          </h3>
          <p class="title">STARTUP SOFTWARE SOLUTIONS</p>

          <p class="content">We provide our team of experts, who works with our clients throughout the entire
            development cycle no matter how diverse or complex your idea may be.</p>
        </div>
      </div>
    </div>
  </section>



















  <section id="products">

  <div class="row">
  <div class="col-2"></div>

  <div class="col-8">

  <div class="h2 col-12 head fade">
            <span style="color: red;">Products</span>
            <span style="color: royalblue;">We Make</span>
            </div>
  <br><br>



    <div class="grid-container">
      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/erp.jpg" alt="Randomimage">

        </div>
        <br>
        <p class="title">ERP</p>
        <p>Enterprise resource planning is the integrated management at main business processes, often in real time and
          medicated by software and technology.</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/ecommerce.png" alt="Randomimage">

        </div>
        <br>
        <p class="title">E-COMMERCE</p>
        <p>E-COMMERCE is the activity of electronically buying or selling of products on online services or over the
          internet.</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/e-permit.png" alt="Randomimage">

        </div>
        <br>
        <p class="title">E-PERMIT SYSTEM</p>
        <p>The online e-permit system is used to get the Mineral permits by paying the royalty amount through online
          system.</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/e-arbitration.jpg" alt="Randomimage">

        </div>
        <br>
        <p class="title">E-ARBITRATION SYSTEM</p>
        <p>E-arbitration refers to the use of electronic means like e-mail and electronic file management systems to be
          used through the internet.</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/meeting.jpg" alt="Randomimage">

        </div>
        <br>
        <p class="title">MEETING & WEBINAR SOLUTION</p>

        <p>A webinar is an online event that is hosted by an organization/company and broadcast to a select group at
          individuals through the computers via the internet</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/asset.png" alt="Randomimage">

        </div>
        <br>
        <p class="title">ASSET MANAGEMENT</p>
        <p>Asset management is a systematic process of developing, operating, maintaining, upgrading, and disposing of
          assests in the most cost-effective manner (including all costs, risks and performance attributes).</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/crm.jpg" alt="Randomimage">

        </div>
        <br>
        <p class="title">CRM</p>
        <p>Customer relationship management is one of many different approaches that allow a company to manage and
          analyse its own interactions with its past, current and potential customers.</p>
      </div>

      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/construction.png" alt="Randomimage">

        </div>
        <br>
        <p class="title">CONSTRUCTION SITE ERP</p>
        <p>Construction is a general term meaning that art and science to form objects, systematic, or organizations and
          comes from Latin `constructio` and old french `construction`</p>
      </div>


      <div class="grid-item card border-0 fade">
        <div class="image">
          <img src="./images/products/help.png" alt="Randomimage">

        </div>
        <br>
        <p class="title">HELP DESK</p>
        <p>A help desk is a resource interact to provide the customer or end user with information and support related
          to a company's or institution's products and services.</p>
      </div>


    </div>

  </div>

  <div class="col-2"></div>
  </div>
  <br><br>


  </section>
















  <section id="contact">

    <div class="container">
      <div class="h2 text-center head fade">
            <span style="color: red;">Contact</span>
            <span style="color: royalblue;">Us</span>
            </div>
      <div class="row col-12 fade">
        <div class="col-12 col-md-7 mt-5">
          <!--  form contact -->
          <div class="card hoverable">

            <h5 class="card-header white-text text-center py-4">
              <strong>Contact us</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

              <!-- Form -->
              <form class="text-center" style="color: #757575;" action="" method="POST">

                <!-- First-Name -->
                <div class="md-form mt-3">
                  <input type="text" id="form-firstname" class="form-control" name="firstname">
                  <label for="form-firstname">First Name</label>
                </div>
                <!-- Last-Name -->
                <div class="md-form">
                  <input type="text" id="form-lastname" class="form-control" name="lastname">
                  <label for="form-lastname">Last Name</label>
                </div>

                <!-- E-mail -->
                <div class="md-form">
                  <input type="email" id="form-email" class="form-control" name="email">
                  <label for="form-email">E-mail</label>
                </div>

                <!-- Send button -->
                <button class="mb-2 btn btn-outline-danger btn-lg btn-rounded waves-effect" type="submit"><i class="fas fa-paper-plane"> Send </i></button>

              </form>
              <!-- Form -->

            </div>

          </div>
          <!--  form contact end-->

        </div>
        <div class="col-12 col-sm-5 mt-5">
          <!--address card starts-->
          <!-- Card -->
          <div class="card hoverable">
          <h5 class="card-header white-text text-center py-4">
              <strong>Meet at</strong>
            </h5>

            <!-- Card content -->
            <div class="card-body d-flex flex-row">

              <!-- Avatar -->
              <img src="./images/logo.png" class="rounded-circle mr-2" height="50px" width="50px" alt="avatar">

              <!-- Content -->
              <div class="col-sm-12">
                <!-- Title -->
                <h4 class="card-title font-weight-bold pt-1" style="color:rgb(255, 97, 97);">VASA InfoTech Office
                </h4>
                <p class="card-text ml-auto">
                <address>
                    Vasa Infotech Services Pvt Ltd<br> 96, 1/1B,<br>1st Flr, Consistory Building,<br>Front St, Colombo 11,
                  <br>Colombo, Sri Lanka<br>
                  <span class="fa fa-envelope fa-lg mt-3"></span> : <a
                    href="mailto:info@vasaits.com">info@vasaits.com</a>
                </address>
                </p>
              </div>
            </div>
            <!-- Card content -->
            <div class="card-body">
            </div>
          </div>
          <!-- Card -->
        </div>
      </div>
      <!--Form and Address Card Ends Here-->

      <div class="container-fluid">
        <div class="row fade">
          <div class="col-sm-1 mt-5 mb-4">
          </div>
          <div class="col-sm-10 mt-5 hoverable">
          <Card mb-5>
            <h5 class="card-header white-text"><strong>Meet Us Here</strong>
            </h5>
            <div class="container if">
            <iframe class="responsive-iframe" frameborder="0 " scrolling="no " marginheight="0 " marginwidth="0 "
              id="gmap_canvas "
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247.516494593271!2d79.84988422132629!3d6.936209456049315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2592198897f01%3A0xca1ebb0e6cc068d7!2sConsistory%20Building%2C%20Colombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sin!4v1605523569460!5m2!1sen!2sin"></iframe>
            </div>

            <a href='https://mapswebsite.net/'>more on</a>
            <script type='text/javascript'
              src='https://maps-generator.com/google-maps-authorization/script.js?id=5963f72594debc5a4aec9bfceb90f9f8f8bd1011'></script>
          </Card>
          </div>

          <div class="col-sm-1 mt-5"></div>
        </div>
      </div>

    </div>
  </section>
















  <footer class="page-footer font-small special-color-dark pt-2">

    <div class="container">

      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1" href="#">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1" href="#">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating mx-1" href="#">
            <i class="fab fa-github fa-5x" aria-hidden="true"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1" href="#">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1" href="#">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>

    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#home"> VASA Infotech Services. All Rights Reserved.</a>
    </div>

  </footer>

  <!-- <section id="g1" class="pt-1 pb-1"><div><img src="./images/g1.png"></div></section>
  <section id="g2" class="pt-1 pb-1"><div><img src="./images/g2.png"></div></section>
  <section id="g3" class="pt-1 pb-1"><div><img src="./images/g3.png"></div></section> -->



















  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="./MDBootstrap-pro/MDB-Pro_4.11.0/js/mdb.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <script src="./js/script1.js"></script>
</body>

</html>
