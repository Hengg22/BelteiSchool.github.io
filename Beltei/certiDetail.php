<?php
include_once 'db1.php';
if (isset($_POST['Search'])) {

    $rankcertiID = $_POST['rankcertiID'];
    $dimplomaID = $_POST['dimplomaID'];
    $certiID = $_POST['certiID'];
    $certiNum = $_POST['certiNum'];
    $nameKh = $_POST['nameKh'];
    $nameEn = $_POST['nameEn'];
    $sexID = $_POST['sexID'];
    $dob = $_POST['dob'];
    $campusID = $_POST['campusID'];
    $photo = $_POST['photo'];
    $BTurl = $_POST['BTurl'];
    $Miniurl = $_POST['Miniurl'];
    $data;
    $sql = "SELECT CertificateRangDetailID,BTBacXIIID,CertificateRangID ,CertificateNumber,FullNameKH,FullNameEN,SexID,DOB,CampusID,Photo,BTBacXIIURL,BacXIIURL
                FROM tblcertificaterangdetail 
                where CertificateNumber='$certiNum' or FullNameKH='$nameKh' or FullNameEN='$nameEn'";

    $query = mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            header("location:certiDetail.php?rankcertiID=" . $row['CertificateRangDetailID'] . "&dimplomaID=" . $row['BTBacXIIID'] . "&certiID=" . $row['CertificateRangID'] . "&certiNum=" . $row['CertificateNumber'] . "&nameKh=" . $row['FullNameKH'] .
                "&nameEn=" . $row['FullNameEN'] . "&sexID=" . $row['SexID'] . "&dob=" . $row['DOB'] . "&campusID=" . $row['CampusID'] . "&photo=" . $row['Photo'] . "&BTurl=" . $row['BTBacXIIURL'] . "&Miniurl=" . $row['BacXIIURL']);
        }
    } else {
        echo '<p style="text-align: center;">Data not found !!</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('adminpart.php') ?>
<div class="col-lg-10 right-panel">
    <div class="row pt-5 ">
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center ">
                        <h3>Certificate Detail Form</h3>
                        <p class="pb-3">Please input your data here and click insert to insert data.</p>
                    </div>
                </div>
                <form action="certiDetail.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="<?php if (!empty($_GET))
                                echo $_GET['rankcertiID'] ?>" name="rankcertiID"
                                    placeholder="Certificate Rank Detail"><br>
                                <input type="text" value="<?php if (!empty($_GET))
                                echo $_GET['dimplomaID'] ?>" class="form-control" name="dimplomaID"
                                    placeholder="Diploma ID"><br>
                                <input type="text" value="<?php if (!empty($_GET))
                                echo $_GET['certiID'] ?>" class="form-control" name="certiID"
                                    placeholder="Certificate RankID"><br>
                                <input type="text" value="<?php if (!empty($_GET))
                                echo $_GET['certiNum'] ?>" class="form-control" name="certiNum"
                                    placeholder="Certificate Number"><br>
                                <input type="text" value="<?php if (!empty($_GET))
                                echo $_GET['nameKh'] ?>" class="form-control" name="nameKh"
                                    placeholder="Full Name KH"><br>
                                <input type="text" value="<?php if (!empty($_GET))
                                echo $_GET['nameEn'] ?>" class="form-control" name="nameEn"
                                    placeholder="Full Name EN"><br>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="date" value="<?php if (!empty($_GET))
                                echo $_GET['dob'] ?>" class="form-control" name="dob" placeholder="Date of birth"><br>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="Sex" name="sexID">
                                            <option>Sex</option>
                                            <option value="1" >Male</option>
                                            <option value="2" >Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="sex" value="<?php if (!empty($_GET))
                                echo $_GET['sexID'] ?>"><br>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="campusID" id="Campus">
                                            <option>Campus ID</option>
                                            <option value="1" <?php if (!empty($_GET))
                                echo $_GET['campusID'] == '1' ? 'selected' : '' ?>>B1 Kirirom</option>
                                            <option value="2">B2 Phsar Toul Tumpong</option>
                                            <option value="3">B3 DN</option>
                                            <option value="4">B4 Phsar Deum Thkov</option>
                                            <option value="5">B5 Chbar Ampoeu</option>
                                            <option value="6">B6 O'Rusey</option>
                                            <option value="7">B7 Loksang Hospital</option>
                                            <option value="8">B8 Pochintong</option>
                                            <option value="9">B9 Stung Meanchey</option>
                                            <option value="10">B10 Ang Teuk Olympic</option>
                                            <option value="11">B11 Phsa Toch</option>
                                            <option value="12">B12 Phsar Deihoy</option>
                                            <option value="13">B13 Camko City Roundabout</option>
                                            <option value="14">B14 Takhmao City</option>
                                            <option value="15">B15 Phsar Chumpou Vorn</option>
                                            <option value="16">B16 Phlov Koang Veng Sreng</option>
                                            <option value="17">B17 Russey Keo</option>
                                            <option value="18">B18 Phar Prek Eng</option>
                                            <option value="19">B19 Phsar Preak Leab</option>
                                            <option value="20">B20 Chom Chao</option>
                                            <option value="21">B21 Chhouk Meas Market</option>
                                            <option value="22">B22 Kour Srov Roundabout</option>
                                            <option value="23">B23 PreySar Road, Russey Sanh Stoplight</option>
                                            <option value="24">B24 Prek Tamak Roundabout</option>
                                        </select><br>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="campusID" value="<?php if (!empty($_GET))
                                echo $_GET['campusID'] ?>"><br>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control " name="photo" placeholder="Photo"><br>
                                        <input type="file" class="form-control" name="BTurl"
                                            placeholder="BELTEI Certificate URL"><br>
                                        <input type="file" class="form-control" name="Miniurl"
                                            placeholder="Ministry Certificate URL"><br>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="photo" value="<?php if (!empty($_GET))
                                echo $_GET['photo'] ?>"  class="form-control pb-2 mb-1"><br>
                                        <input type="text" name="BTurl" value="<?php if (!empty($_GET))
                                echo $_GET['BTurl'] ?>" class="form-control pb-2"><br>
                                        <input type="text" value="<?php if (!empty($_GET))
                                echo $_GET['Miniurl'] ?>" name="Miniurl" class="form-control pb-2"><br>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 pb-4" style="text-align: right">
                                <button type="submit" name="Insert" value="Insert"
                                    class="btn btn-outline-info">Insert</button>
                                <button type="submit" name="Update" value="Update"
                                    class="btn btn-outline-success">Update</button>
                                <button type="submit" name="Delete" value="Delete"
                                    class="btn btn-outline-danger">Delete</button>
                                <button type="submit" name="Search" value="Search"
                                    class="btn btn-outline-info">Search</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>



    </body>

    </html>
    <!-- insert -->
    <?php
                            include_once 'db1.php';
                            if (isset($_POST['Insert'])) {
                                $rankcertiID = $_POST['rankcertiID'];
                                $dimplomaID = $_POST['dimplomaID'];
                                $certiID = $_POST['certiID'];
                                $certiNum = $_POST['certiNum'];
                                $nameKh = $_POST['nameKh'];
                                $nameEn = $_POST['nameEn'];
                                $sexID = $_POST['sexID'];
                                $dob = $_POST['dob'];
                                $campusID = $_POST['campusID'];
                                $photo = $_POST['photo'];
                                $BTurl = $_POST['BTurl'];
                                $Miniurl = $_POST['Miniurl'];
                                $sql = "INSERT INTO tblcertificaterangdetail (CertificateRangDetailID,BTBacXIIID,CertificateRangID,CertificateNumber,FullNameKH,FullNameEN,SexID,DOB,CampusID,Photo,BTBacXIIURL,BacXIIURL)
     VALUES ('$rankcertiID','$dimplomaID','$certiID','$certiNum','$nameKh','$nameEn','$sexID','$dob','$campusID','$photo','$BTurl','$Miniurl')";
                                if (mysqli_query($conn, $sql)) {
                                    echo '<script>alert("Insert Successfully.")</script>';
                                } else {
                                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            }
                            ?>
<!-- update -->
<?php
include_once 'db1.php';
if (isset($_POST['Update'])) {
    $rankcertiID = $_POST['rankcertiID'];
    $dimplomaID = $_POST['dimplomaID'];
    $certiID = $_POST['certiID'];
    $certiNum = $_POST['certiNum'];
    $nameKh = $_POST['nameKh'];
    $nameEn = $_POST['nameEn'];
    $sexID = $_POST['sexID'];
    $dob = $_POST['dob'];
    $campusID = $_POST['campusID'];
    $photo = $_POST['photo'];
    $BTurl = $_POST['BTurl'];
    $Miniurl = $_POST['Miniurl'];
    $sql = "UPDATE tblcertificaterangdetail set 
    CertificateRangDetailID='$rankcertiID',
    BTBacXIIID='$dimplomaID',
    CertificateRangID='$certiID',
    CertificateNumber='$certiNum',
    FullNameKH='$nameKh',
    FullNameEN='$nameEn',
    DOB='$dob',
    SexID='$sexID',
    CampusID='$campusID',
    Photo='$photo',
    BTBacXIIURL='$BTurl',
    BacXIIURL='$Miniurl' 
    where CertificateRangDetailID=$rankcertiID";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Update Successfully.")</script>';
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!-- Delete -->
<?php
include_once 'db1.php';
if (isset($_POST['Delete'])) {
    $certiNum = $_POST['certiNum'];
    $sql = "DELETE from tblcertificaterangdetail where CertificateNumber='$certiNum',CertificateRangDetailID='$rankcertiID'";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Delete Successfully.")</script>';
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>