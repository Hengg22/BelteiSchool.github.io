<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel">
            <div class="row pt-5 ">
                <div class="col-lg-12">
                    <div class="container">
                        <form action="CertiRang.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h3>Certificate Rang Form</h3>
                                    <p class="pb-3">Please input your data here and click insert to insert data.</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3"></div>

                                    <div class="col-lg-6">

                                        <input type="text" class="form-control" name="certiID"
                                            placeholder="Certificate Rank ID"><br>
                                        <input type="text" class="form-control" name="certiRankKh"
                                            placeholder="Certificate Rank KH"><br>
                                        <input type="text" class="form-control" name="certiRankEn"
                                            placeholder="Certificate Rank EN"><br>
                                        <div class="row">
                                            <div class="col-lg-12 pb-4" style="text-align: right">
                                                <button type="submit" name="Insert" value="Insert"
                                                    class="btn btn-outline-info">Insert</button>
                                                <button type="submit" name="Update" value="Update"
                                                    class="btn btn-outline-success">Update</button>
                                                <button type="submit" name="Delete" value="Delete"
                                                    class="btn btn-outline-danger">Delete</button>
                                                <button type="submit" name="Search" value="Delete"
                                                    class="btn btn-outline-primary">Search</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3"></div>

                                </div>
                            </div>
                            </from>
                    </div><br>
                    <div>
                     <!-- search -->
                        <?php
                        include_once 'db1.php';
                        if (isset($_POST['Search'])) {
                            $certiID = $_POST['certiID'];
                            $sql = "SELECT * from tblcertificaterang  where  CertificateRangID=$certiID";
                            $query = mysqli_query($conn, $sql);
                            echo '
    <table class="table text-center table-responsive-md table-hover ">
    <thead style="background-color:whitesmoke;"">
        <tr>
            <th>Certificate ID</th>
            <th></th>
            <th>Certificate KH</th>
            <th></th>
            <th>Certificate EN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
';
                            if ($query->num_rows > 0) {
                                while ($row = mysqli_fetch_array($query)) {

                                    echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['CertificateRangID'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['CertificateRangKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['CertificateRangEN'] . '<td/>
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



                    <div>
                        <?php
                        include_once 'db1.php';
                        $sql = "SELECT * from tblcertificaterang";
                        $query = mysqli_query($conn, $sql);
                        echo '
    <table class="table text-center table-responsive-md table-hover ">
    <thead style="background-color:whitesmoke;">
        <tr>
        <th>Certificate ID</th>
        <th></th>
        <th>Certificate KH</th>
        <th></th>
        <th>Certificate EN</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
';
                        if ($query->num_rows > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                echo '
                    <tr>
                        
                    <td style="vertical-align:middle;" >' . $row['CertificateRangID'] . '<td/>                        
                    <td style="vertical-align:middle;" >' . $row['CertificateRangKH'] . '<td/>                         
                    <td style="vertical-align:middle;" >' . $row['CertificateRangEN'] . '<td/>
                    </tr>
                    ';

                            }
                        } else {
                            echo '<p style="text-align: center;">Data not found !!</p>';
                        }
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- Insert -->
<?php
include_once 'db1.php';
if (isset($_POST['Insert'])) {
    $certiID = $_POST['certiID'];
    $certiRankKh = $_POST['certiRankKh'];
    $certiRankEn = $_POST['certiRankEn'];
    $sql = "INSERT INTO tblcertificaterang (CertificateRangID,CertificateRangKH,CertificateRangEN) VALUES ('$certiID','$certiRankKh','$certiRankEn')";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!-- Update -->
<?php
include_once 'db1.php';
if (isset($_POST['Update'])) {
    $certiID = $_POST['certiID'];
    $certiRankKh = $_POST['certiRankKh'];
    $certiRankEn = $_POST['certiRankEn'];
    $sql = "UPDATE tblcertificaterang set 
    CertificateRangID='$certiID',
    CertificateRangKH='$certiRankKh',
    CertificateRangEN='$certiRankEn' where CertificateRangID=$certiID";
    if (mysqli_query($conn, $sql)) {

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
    $certiID = $_POST['certiID'];
    $certiRankKh = $_POST['certiRankKh'];
    $certiRankEn = $_POST['certiRankEn'];
    $sql = "DELETE from tblcertificaterang where CertificateRangID=$certiID";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>