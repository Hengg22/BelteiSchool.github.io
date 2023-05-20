<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('header.php') ?>
  <title>BELTEI International School</title>
</head>

<body>
  <?php include_once('login.php') ?>
  <!-- header -->
  <header>
    <!-- banner -->
    <nav class="navbar navbar-light" style="background-color: #1596e0; width:100%;">
      <img class="navbar-brand mx-auto" src="image/banner.png" alt="" class="w-100" height="55">

    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0" id="navbar_top"
      style=" box-shadow: 0 2px 10px -5px;">
      <a class="navbar-brand" href="index.php">
        <img src="image/Logo.png" alt="" width="65" class="d-inline-block text-center ml-3">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class=" navbar-nav mx-auto text-center">
          <li class="nav-item active ">
            <a class="nav-link hover-2 ml-2" href="#" style="color: #181616;">Home <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-2 ml-2" href="#diploma_info" style="color: #181616;">Diploma Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-2 ml-2" href="#about" style="color: #181616;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  hover-2 ml-2" href="#campus" style="color: #181616;">Campus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-2 ml-2" href="#teamwork" style="color: #181616;">teamwork</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link hover-2 ml-2" href="#contact" style="color: #181616;">Contact us</a>
          </li>
         
        </ul>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
          class="btn btn-outline-primary">Login</button>
      </div>
    </nav>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener('scroll', function () {
          if (window.scrollY >= 80) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.navbar_top = navbar_height;
          } else {
            document.getElementById('navbar_top').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop;
          }
        });
      }); 
    </script>
  </header>

  <!-- home -->
  <section class="home" id="home">
    <div class="bg-image"></div>
    <div class="bg-text">
      <p style="font-weight: bold; font-size: 50px;">Welcome</p>
      <h5>BELTEI International School</h5>
      <p>Builds the spirit to love nation and motherland, preserve its culture and national identity,<br> obey the
        state
        laws and the BELTEI's regulations as well as possess justice, morality, and virtue like <br> a bamboo shoot
        growing
        up to bamboo for the future of the country.</p>
    </div>
  </section>
  <br>
  <br>

  <!-- table show -->
  <br><br>

  <section class="diploma_info" id="diploma_info">
    <div class="container">
      <h1 class="heading text-center">
        <span style="color: #1596e0 ">BELTEI high school</span> Diploma
      </h1>
      <form action="Select.php" method="GET">
        <div class="row">
          <div class="col-lg-3">
          </div>
          <div class="col-lg-3">
          </div>
          <div class="col-lg-6 text-center">
            <div class="input-group d-flex">
              <input type="text" class="form-control" placeholder="Search" name="search"> 
              <pre> </pre>
              <button class="btn btn-outline-primary  " name="Search" type="submit">Search</button>
            </div>
          </div>
        </div>
      </form><br>
        <table class="table table-responsive-md table-hover text-center">
          <thead style="background-color: #1596e0;color:whitesmoke;">
            <tr>
              <th scope="col">Diploma-year</th>
              <th scope="col"></th>
              <th scope="col">Total-Stu</th>
              <th scope="col"></th>
              <th scope="col">Female</th>
              <th scope="col"></th>
              <th scope="col">No.certificate</th>
              <th scope="col"></th>
              <th scope="col">View Info</th>
              <th scope="col">Document</th>
            </tr>
          </thead>
          <tbody>
            <!-- 2020-2021 -->
            <?php
            include_once 'db1.php';
            $data;

            $sql = "select tblacademicyear.AcademicYearEN ,tblbtbachxii.StudentTotal,tblbtbachxii.StudentTotalFemale,tblbtbachxii.CertificateRang,tblbtliststudent.ListStudentURL
                    FROM tblacademicyear
                    INNER JOIN tblbtbachxii ON tblacademicyear.AcademicYearID =tblbtbachxii.AcademicYearID INNER JOIN tblbtliststudent ON 
                    tblbtbachxii.BTBacXIIID=tblbtliststudent.BTBacXIIID where tblbtbachxii.BTBacXIIID='6'";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {

              echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['StudentTotal'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['StudentTotalFemale'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="Data2020to2021.php">' . $row['CertificateRang'] . '</a><td/>
                        <td><a href="Data2020to2021.php">Open</a></td>
                        <td><a href="' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?>Open</a></td>
                    </tr>
                    ';

            }
            ?>
            <!-- 2019-2020 -->
            <?php
            include_once 'db1.php';
            $data;

            $sql = "select tblacademicyear.AcademicYearEN ,tblbtbachxii.StudentTotal,tblbtbachxii.StudentTotalFemale,tblbtbachxii.CertificateRang,tblbtliststudent.ListStudentURL
                    FROM tblacademicyear
                    INNER JOIN tblbtbachxii ON tblacademicyear.AcademicYearID =tblbtbachxii.AcademicYearID INNER JOIN tblbtliststudent ON  tblbtbachxii.BTBacXIIID=tblbtliststudent.BTBacXIIID where tblbtbachxii.BTBacXIIID='5'";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {

              echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['StudentTotal'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['StudentTotalFemale'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="Data2019to2020.php">' . $row['CertificateRang'] . '</a><td/>
                        <td><a href="Data2019to2020.php">Open</a></td>
                        <td><a href="' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?>Open</a></td>
                    </tr>
                    ';

            }
            ?>
            <!-- 2018-2019 -->
            <?php
            include_once 'db1.php';
            $data;

            $sql = "select tblacademicyear.AcademicYearEN ,tblbtbachxii.StudentTotal,tblbtbachxii.StudentTotalFemale,tblbtbachxii.CertificateRang,tblbtliststudent.ListStudentURL
                    FROM tblacademicyear
                    INNER JOIN tblbtbachxii ON tblacademicyear.AcademicYearID =tblbtbachxii.AcademicYearID INNER JOIN tblbtliststudent ON  tblbtbachxii.BTBacXIIID=tblbtliststudent.BTBacXIIID where tblbtbachxii.BTBacXIIID='4'";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {

              echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['StudentTotal'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['StudentTotalFemale'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="Data2018to2019.php">' . $row['CertificateRang'] . '</a><td/>
                        <td><a href="Data2018to2019.php">Open</a></td>
                        <td><a href="' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?>Open</a></td>
                    </tr>
                    ';

            }
            ?>

            <!-- 2017-2018 -->
            <?php
            include_once 'db1.php';
            $data;

            $sql = "select tblacademicyear.AcademicYearEN ,tblbtbachxii.StudentTotal,tblbtbachxii.StudentTotalFemale,tblbtbachxii.CertificateRang,tblbtliststudent.ListStudentURL
                    FROM tblacademicyear
                    INNER JOIN tblbtbachxii ON tblacademicyear.AcademicYearID =tblbtbachxii.AcademicYearID INNER JOIN tblbtliststudent ON  tblbtbachxii.BTBacXIIID=tblbtliststudent.BTBacXIIID where tblbtbachxii.BTBacXIIID='3'";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {

              echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['StudentTotal'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['StudentTotalFemale'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="Data2017to2018.php">' . $row['CertificateRang'] . '</a><td/>
                        <td><a href="Data2017to2018.php">Open</a></td>
                        <td><a href="' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?>Open</a></td>
                    </tr>
                    ';

            }
            ?>
            <!-- 2016-2017 -->
            <?php
            include_once 'db1.php';
            $data;

            $sql = "select tblacademicyear.AcademicYearEN ,tblbtbachxii.StudentTotal,tblbtbachxii.StudentTotalFemale,tblbtbachxii.CertificateRang,tblbtliststudent.ListStudentURL
                    FROM tblacademicyear
                    INNER JOIN tblbtbachxii ON tblacademicyear.AcademicYearID =tblbtbachxii.AcademicYearID INNER JOIN tblbtliststudent ON  tblbtbachxii.BTBacXIIID=tblbtliststudent.BTBacXIIID where tblbtbachxii.BTBacXIIID='2'";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {

              echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['StudentTotal'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['StudentTotalFemale'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="Data2016to2017.php">' . $row['CertificateRang'] . '</a><td/>
                        <td><a href="Data2016to2017.php">Open</a></td>
                        <td><a href="' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?>Open</a></td>
                    </tr>
                    ';

            }
            ?>

            <!-- 2015-2016 -->
            <?php
            include_once 'db1.php';
            $data;

            $sql = "select tblacademicyear.AcademicYearEN ,tblbtbachxii.StudentTotal,tblbtbachxii.StudentTotalFemale,tblbtbachxii.CertificateRang,tblbtliststudent.ListStudentURL
                    FROM tblacademicyear
                    INNER JOIN tblbtbachxii ON tblacademicyear.AcademicYearID =tblbtbachxii.AcademicYearID INNER JOIN tblbtliststudent ON  tblbtbachxii.BTBacXIIID=tblbtliststudent.BTBacXIIID where tblbtbachxii.BTBacXIIID='1'";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {

              echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['StudentTotal'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['StudentTotalFemale'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="Data2015to2016.php">' . $row['CertificateRang'] . '</a><td/>
                        <td><a href="Data2015to2016.php">Open</a></td>
                        <td><a href="' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?>Open</a></td>
                    </tr>
                    ';

            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </section>
  <br><br><br>

  <br>
  <br>
  <br>
  <!-- About us -->
  <div class="container">
    <div class="container">
      <section class="about" id="about">
        <h1 class="heading text-center">
          <span style=" color: #1596e0;">ABOUT</span> US
        </h1>
    </div>


    <!--  -->

    <!--  -->
    <div class="container">
      <div class="zoom">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=815&Itemid=513"
          class="hover-zoom">
          <div class="row">
            <div class="col-lg-6">
              <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=815&Itemid=513"><img class="p-2" src="image/FounderBeltei.png" alt="" width="100%"></a>
            </div>
            <div class="col-lg-6">
              <h3 style="color: rgb(37, 37, 37);">Founder of BELTEI International School</h3>
              <p class="text-justify" style="font-size: 1.1rem; padding-top: 1rem; color: rgb(37, 37, 37);">Welcome Samdech, Your
                Excellencies,
                Lok
                Chumteav, Lok Oknha, Ladies, Gentlemen, Parents, Guardians and all
                dear students who have trusted, and decided to choose BELTEI International School for high quality and
                up to
                date knowledge to the (Digital Era) in order to achieve their goals in the future.</p>
              <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=815&Itemid=513">Learn
                more</a>
            </div>
          </div>
        </a>
      </div>
    </div><br><br>
    <div class="container">
      <div class="zoom">
        <div class="row hover-zoom">
          <div class="col-lg-6">
            <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1025&Itemid=270"><img class="p-2" src="image/imageslide.jpg" alt="" width="100%"></a>
          </div>
          <div class="col-lg-6">
            <h3 style="color: rgb(37, 37, 37); ">Khmer General Education</h3>
            <p class="text-justify" style="font-size: 1.1rem; padding-top: 1rem; color: rgb(37, 37, 37);">
              A- High School
              BELTEI High School is one of the biggest, most campuses, most inexpensive private schools and a leading
              one in providing educational services on General Education, whose curriculum is in accordance with the
              Ministry of Education Youth and Sport’s. Particularly.</p>
            <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1025&Itemid=270">Learn
              more</a>
          </div>
        </div>
      </div>
    </div><br><br>
    <div class="container">
      <div class="zoom">
        <div class="row hover-zoom">
          <div class="col-lg-6">
            <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1453&Itemid=515"><img class="p-2" src="image/Graduate.png" alt="" width="100%"></a>
          </div>
          <div class="col-lg-6">
            <h3 style="color: rgb(37, 37, 37); ">BELTEI High School Graduation</h3>
            <p class="text-justify" style="font-size: 1.1rem; padding-top: 1rem; color: rgb(37, 37, 37);">High School Diploma Graduation
              Ceremony to Grade-12 students who graduated from BELTEI and National Examination in order to promote the
              students who studied hard and passed the exam with the good grade.</p>
            <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1453&Itemid=515">Learn
              more</a>
          </div>
        </div>
      </div>
    </div>
    </section>

  </div>
  <br><br><br><br>

  <!-- Campus -->
  <section class="campus" id="campus">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <h2 class="heading text-center">
      <span style=" color: #1596e0">BELTEI</span> Campus
    </h2>
    <br>
    <div class="customer-logos slider container">
      <!-- campus1 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px" width="50%">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=883%20target=_blank"><img
            src="image/campus1.jpg" alt="" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 1 <br>Kirirom</h5>
          <p>BELTEI Kirirom is located at 77, Street 125, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>
        </div>
      </div>
      <!-- campus2 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=884%20target=_blank"><img
            class="image" src="image/campus2.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 2 <br> Phsar Tuol Tumpoung</h5>
          <p>It is located at 34, Street 431, Sangkat Tuol Tumpoung 1, Khan Chamkamon, Phnom Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star "></span>
        </div>

      </div>
      <!-- campus3 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=885%20target=_blank"><img
            class="image pt-1" src="image/Campus3.png" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-3">
          <h5>BELTEI Campus 3 <br>DN</h5>
          <p>It is located at Nº 10A, Street 118, Sangkat Phsar Depo 3, Khan Tuol Kork, Phnom Penh</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked "></span>
          <span class="fa fa-star checked "></span>
          <span class="fa fa-star "></span>
        </div>
      </div>
      <!-- campus4 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=886%20target=_blank"><img
            class="image" src="image/campus4.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 4 <br>Phsar Deum Thkov</h5>
          <p>It is located at 54, Street 488, Sangkat Phsar Deum Thkov, Khan Chamka Mon, Phnom Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked "></span>
          <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>
        </div>
      </div>
      <!-- campus5 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=887%20target=_blank"><img
            class="image" src="image/campus5.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 5 <br>Chbar Ampoeu</h5>
          <p>It is situated at 36, National Road 1, Sangkat Chba Ampov I, Khan Chba Ampov, Phnom Penh.</p>
          <span class="fa fa-star checked checked"></span>
          <span class="fa fa-star checked checked"></span>
          <span class="fa fa-star checked checked"></span>
          <span class="fa fa-star "></span>
          <span class="fa fa-star "></span>
        </div>
      </div>
      <!-- campus6 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=888%20target=_blank"><img
            class="image" src="image/campus6.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 6 <br>O’Rusey</h5>
          <p>Head Office, is located at 25, Street 105, Sangkat Beung Prolit, Khan 7 Makara, Phnom Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- Campus7 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=889%20target=_blank"><img
            class="image" src="image/campus7.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 7 <br>Preah Kossamak Hospita</h5>
          <p>It is located at 96, Corner of Street 160 and 265, Sangkat Teuk Laak II, Khan Tuol Kork, Phnom Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus8 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=890%20target=_blank"><img
            class="image pt-2" src="image/Campus8.png" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-3">
          <h5>BELTEI Campus 8 <br>Pochintong</h5>
          <p>It is located at 123, Russian Federation Blvd, Sangkat Kakab, Khan Dangkor, Phnom Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus9 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=891%20target=_blank"><img
            class="image" src="image/campus9.png" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-3">
          <h5>BELTEI Campus 9 <br>Stung Meanchey</h5>
          <p>It is located at 3032, Corner of Veng Sreng Street and 217 Sangkat Stung Meanchey, Khan Meanchey, Phnom
            Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus10 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=893%20target=_blank"><img
            class="image" src="image/campus10.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 10 <br>Ang Teuk Olympic</h5>
          <p>It is located at 57, Corner of Street 217 and 290, Sangkat Tuol Svay Prey II, Khan Chamcarmon, Phnom
            Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus11 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1016%20target=_blank"><img
            class="image" src="image/campus11.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 11 <br>Phsa Toch</h5>
          <p>It is located at #1796 National Road 5,Phsa Toch Village, Sangkat Tuol Sangke,Khan Russey Keo, Phnom
            Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus12 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1071%20target=_blank"><img
            class="image" src="image/campus12.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 12 <br>Phsar Deihoy</h5>
          <p>It is located at the building Nº 2258, Hanoi Street (1019), Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh
          </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus13 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1071%20target=_blank"><img
            class="image" src="image/campus13.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 13 <br>Camko City Roundabout</h5>
          <p>Building Nº 163, Corner of Street 528 and 353, Sangkat Boeung Kak 1, Khan Tuol Kork, Phnom Penh</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus14 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1244%20target=_blank"><img
            class="image" src="image/campus14.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 14 <br>Takhmao City</h5>
          <p>It is located at Building Nº 786A, National Road number 2, Sangkat Preak Reosey, Takhmao City, Kandal
            Province. </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus15 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1258%20target=_blank"><img
            class="image" src="image/campus15.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 15 <br>Phsar Chumpou Vorn</h5>
          <p>Building Nº 119A, National Road 4, Chumpou Vorn Village, Sangkat Chaom Chao, Khan Posenchey, Phnom Penh
          </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus16 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1449%20target=_blank"><img
            class="image" src="image/Campus16.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 16 <br>Phlov Koang Veng Sreng</h5>
          <p>It is located at Nº 77A Veng Sreng Street, Chrey Koang Village, Sangkat Posenchey, Phnom Penh</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus17 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1511%20target=_blank"><img
            class="image" src="image/Campus17.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 17 <br>Russey Keo</h5>
          <p>It is located at the National Road No 5, Sangkat Svay Pak, Khan Russey Keo, Phnom Penh City.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus18 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1512%20target=_blank"><img
            class="image" src="image/campus18.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 18 <br>Phar Prek Eng</h5>
          <p>located at the National Road No 1, Preak Cheang Prom Village, Sangkat Veal Sbov, Khan Chbar Ampov, Phnom
            Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus19 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1549%20target=_blank"><img
            class="image" src="image/campus13.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 19 <br>Phsar Preak Leab</h5>
          <p>It is located at the National Road Nº 6A, Sangkat Preak Leab, Khan Chroy Changvar, Phnom Penh</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus20 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1550%20target=_blank"><img
            class="image" src="image/campus20.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 20 <br>Chom Chao</h5>
          <p>It is located at the National Road Nº 3, Sangkat Chaom Chao 3, Khan Porsenchey, Phnom Penh </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus21 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1551%20target=_blank"><img
            class="image" src="image/campus21.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 21 <br>Chhouk Meas Market</h5>
          <p>It is located at Street Okhna Triheng (2011) kok Kleang Village, sangkat Kok kleang, Khan Sen sok, Phnom
            Penh.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus22 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1597%20target=_blank"><img
            class="image" src="image/campus22.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-2">
          <h5>BELTEI Campus 22 <br>Kour Srov Roundabout</h5>
          <p>It is located at National Road N2, Krang Svay, sangkat Prek Kompues, Khan Dangkor, Phnom Penh. </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus23 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1626%20target=_blank"><img
            class="image pt-2" src="image/campus5.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-4">
          <h5>BELTEI Campus 23 <br>Russey Sanh Stoplight</h5>
          <p>It is located at Phum Brakar sangkat Prey Sar, Khan Dangkor, Phnom Penh.
          </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
      <!-- campus24 -->
      <div class="card-text" style="height:27rem; padding-bottom: 20px; border-radius:13px">
        <a href="https://www.beltei.edu.kh/eng/index.php?option=com_content&view=article&id=1627%20target=_blank"><img
            class="image pt-2" src="image/campus15.jpg" alt="Card image cap" style="width: 100%;"></a>
        <div class="text text-center ml-1 pt-4">
          <h5>BELTEI Campus 24 <br>Prek Tamak Roundabout</h5>
          <p>It is located at Phum Ta Meak, Khum Prek Ta Meak, Khsach Kandal District, Kandal Province. </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $('.customer-logos').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: true,
          responsive: [{
            breakpoint: 995,
            settings: {
              slidesToShow: 2,
            }
          }, {
            breakpoint: 520,
            settings: {
              slidesToShow: 1,
            }
          }]
        });
      });
    </script>
  </section><br><br><br><br>

  <!-- Team work -->
  <section class="teamwork" id="teamwork">

    <h2 class="heading text-center">
      <span style=" color: #1596e0;">Our</span> teamwork
    </h2>
    <br><br>
    <?php include_once('teamwork.php') ?>
  </section>
  <!-- Insert form -->
  <br>
  <section class="contact" id="contact">
    <h1 class="heading text-center">
      <span style=" color: #1596e0;">Contact</span> Us
    </h1>
    <?php include_once('contact.php') ?>
  </section>
  <!-- logo slide -->
  <h1 class="heading text-center">
    <span style=" color: #1596e0;">Our</span> Partner
  </h1>
  <?php include_once('logoslide.php') ?><br><br><br>
  <!-- footer -->
  <?php include_once('footer.php') ?>
</body>

</html>