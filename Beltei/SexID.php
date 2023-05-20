<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel">
            <div class="row pt-5 ">
                <div class="col-lg-12">
                    <div class="container">
                        <form action="SexID.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 text-center ">
                                    <h3>Sex Form</h3>
                                    <p class="pb-3">Please input your data here and click insert to insert data.</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3"></div>

                                    <div class="col-lg-6">

                                        <input type="text" class="form-control" name="sexID" placeholder="Sex ID"><br>
                                        <select class="form-control" id="yearexam" name="sexKh" placeholder="">
                                            <option>Sex KH</option>
                                            <option value="ប្រុស">ប្រុស</option>
                                            <option value="ស្រី">ស្រី</option>
                                        </select><br>
                                        <select class="form-control" id="yearexam" name="sexEn" placeholder="">
                                            <option>Sex EN</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><br>
                                        <div class="row">
                                            <div class="col-lg-12 pb-4" style="text-align: right">
                                                <button type="submit" name="Insert" value="Insert"
                                                    class="btn btn-outline-info">Insert</button>
                                                <button type="submit" name="Update" value="Update"
                                                    class="btn btn-outline-success">Update</button>
                                                <button type="submit" name="Delete" value="Delete"
                                                    class="btn btn-outline-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3"></div>

                                </div>
                            </div>
                            </from>

                    </div><br>
                    <div>
                        <?php
                        include_once 'db1.php';
                        $sql = "SELECT * from tblsex";
                        $query = mysqli_query($conn, $sql);
                        echo '
    <table class="table text-center table-responsive-md table-hover ">
    <thead style="background-color:whitesmoke;">
        <tr>
            <th>Sex ID</th>
            <th></th>
            <th>Sex KH</th>
            <th></th>
            <th>Sex EN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
';
                        if ($query->num_rows > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['SexID'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['SexKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['SexEN'] . '<td/>
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
    $sexID = $_POST['sexID'];
    $sexKh = $_POST['sexKh'];
    $sexEn = $_POST['sexEn'];
    $sql = "INSERT INTO tblsex (SexID,SexKH,SexEN) VALUES ('$sexID','$sexKh','$sexEn')";
    if (mysqli_query($conn, $sql)) {

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
    $sexID = $_POST['sexID'];
    $sexKh = $_POST['sexKh'];
    $sexEn = $_POST['sexEn'];
    $sql = "UPDATE tblsex set 
    SexID='$sexID',
    SexKH='$sexKh',
    SexEN='$sexEn'
    where SexID=$sexID ";
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
    $sexID = $_POST['sexID'];
    $sql = "DELETE from tblsex where SexID=$sexID";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>