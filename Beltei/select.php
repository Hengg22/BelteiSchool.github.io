<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BELTEI International School</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Script/bootstrap.min.css'>
    <script src='Script/jquery-3.2.1.slim.min.js'></script>
    <script src='Script/popper.min.js'></script>
    <script src='Script//bootstrap.min.js'></script>
    <script src="Script/script.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header -->

    <header>
        <!-- banner -->
        <nav class="navbar navbar-light" style="background-color: #1596e0; width:100%;">
            <a class="navbar-brand mx-auto" href="#">
                <img src="image/banner.png" alt="" class="w-100" height="55"></a>
    </header>
    <br>
    <br><br>

    <!-- Search form -->
    <div class="container-fluid">
        <div>
            <form>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 style=" color: #1596e0" class="heading p-3">CHECK YOUR DIPLOMA <span> INFORMATION </span>
                        </h1>
                    </div>
                </div>
            </form>
        </div>
        <!-- table show -->
        <br><br>
        <?php
        include_once 'db1.php';
        if (isset($_GET['Search'])) {
            $search = $_GET['search'];
            $data;
            $sql = "SELECT CertificateNumber,FullNameKH,FullNameEN,SexEN,SexKH,DOB,CampusEN,CampusKH,Photo,BTBacXIIURL,BacXIIURL
            FROM tblcertificaterangdetail 
            INNER JOIN tblsex ON tblcertificaterangdetail.SexID=tblsex.SexID
            INNER JOIN tblcampus ON tblcertificaterangdetail.CampusID=tblcampus.CampusID='1' 
            where CertificateNumber like '%$search%' OR FullNameKH like '%$search%' OR FullNameEN like '%$search%' OR CampusEN like '%$search%'OR CampusKH like '%$search%' OR SexKH like '$search' OR SexEN like '$search' OR DOB like '%$search%'";
                        echo '
                    <table class="table text-center table-responsive-md table-hover ">
                    <thead style="background-color: #1596e0;color:whitesmoke;">
                        <tr>
                            <th style="vertical-align:middle;">No.Certi</th>
                            <th></th>
                            <th style="vertical-align:middle;">Khmer Name</th>
                            <th></th>
                            <th style="vertical-align:middle;">Latin Name</th>
                            <th></th>
                            <th style="vertical-align:middle;">Sex</th>
                            <th></th>
                            <th style="vertical-align:middle;">DOB</th>
                            <th></th>
                            <th style="vertical-align:middle;">Campus</th>
                            <th></th>
                            <th style="vertical-align:middle;">Photo-Stu</th>
                            <th style="vertical-align:middle;">BELTEI Certi</th>
                            <th style="vertical-align:middle;">Ministry Certi</th>
                        </tr>
                    </thead>
                    <tbody>
               ';
            $query = mysqli_query($conn, $sql);
            if ($query->num_rows > 0) {
                while ($row = mysqli_fetch_array($query)) {

                    echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['CertificateNumber'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['FullNameKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['FullNameEN'] . '<td/>
                        <td style="vertical-align:middle;" >' . $row['SexEN'] . '<td/>
                        <td style="vertical-align:middle;" >' . $row['DOB'] . '<td/>
                        <td style="vertical-align:middle;" >' . $row['CampusEN'] . '<td/>
                        <td style="vertical-align:middle;" ><a href="image/' . $row['Photo'] . '"<?php echo' . $row['Photo'] . ';?><img width="80px" height="100px"  src="image/' . $row['Photo'] . '"</a></td>
                        <td style="vertical-align:middle;" ><a href="image/' . $row['BTBacXIIURL'] . '"<?php echo' . $row['BTBacXIIURL'] . ';"><img width="80px" height="100px"  src="image/' . $row['BTBacXIIURL'] . '"</a></td>
                        <td style="vertical-align:middle;" ><a href="image/' . $row['BacXIIURL'] . '"<?php echo' . $row['BacXIIURL'] . ';?><img width="80px" height="100px"  src="image/' . $row['BacXIIURL'] . '"</a></td>
                    </tr>
                    ';

                }
            } else {
                echo '<p style="text-align: center;">Data not found !!</p>';
            }
        }
        ?>
        </tbody>
        </table>
    </div>
    <?php include_once('footer.php') ?>
</body>

</html>