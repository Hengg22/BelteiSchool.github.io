<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel">
            <div class="row pt-5 ">
                <div class="col-lg-12">
                    <div class="container">
                        <form action="AcademicYear.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h3>Academic Year Form</h3>
                                    <p class="pb-3">Please input your data here and click insert to insert data.</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3"></div>

                                    <div class="col-lg-6">

                                        <input type="text" class="form-control" name="academicyearID"
                                            placeholder="AcademicYear ID"><br>
                                        <select class="form-control" id="yearexam" name="academicYearKH"
                                            placeholder="Academic Year Kh">
                                            <option>Academic Year KH</option>
                                            <option value="២០១៥-២០១៦">២០១៥-២០១៦</option>
                                            <option value="២០១៦-២០១៧">២០១៦-២០១៧</option>
                                            <option value="២០១៧-២០១៨">២០១៧-២០១៨</option>
                                            <option value="២០១៨-២០១៩">២០១៨-២០១៩</option>
                                            <option value="២០១៩-២០២០">២០១៩-២០២០</option>
                                            <option value="២០២០-២០២១">២០២០-២០២១</option>
                                        </select><br>
                                        <select class="form-control" id="yearexam" name="academicyearEN"
                                            placeholder="Academic year">
                                            <option>Academic Year EN</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                            <option value="2020-2021">2020-2021</option>
                                        </select><br>

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
                                </div>

                                <div class="col-lg-3"></div>

                            </div>
                            </from>
                    </div>
                    <br>
                    <div>
                        <?php
                        if(isset($_POST['Search'])){
                        $academicyearID=$_POST['academicyearID'];
                        include_once 'db1.php';
                        $sql = "SELECT * from tblacademicyear where AcademicYearID=$academicyearID";
                        $query = mysqli_query($conn, $sql);
                        echo '
                            <table class="table text-center table-responsive-md table-hover ">
                            <thead style="background-color:whitesmoke;">
                                <tr>
                                    <th>AcademicYear ID</th>
                                    <th></th>
                                    <th>AcademicYear KH</th>
                                    <th></th>
                                    <th>AcademicYear EN</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                        ';
                        if ($query->num_rows > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearID'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>
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
                        $sql = "SELECT * from tblacademicyear";
                        $query = mysqli_query($conn, $sql);
                        echo '
                            <table class="table text-center table-responsive-md table-hover ">
                            <thead style="background-color:whitesmoke;">
                                <tr>
                                    <th>AcademicYear ID</th>
                                    <th></th>
                                    <th>AcademicYear KH</th>
                                    <th></th>
                                    <th>AcademicYear EN</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                        ';
                        if ($query->num_rows > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearID'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['AcademicYearKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['AcademicYearEN'] . '<td/>
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
    $academicyearID = $_POST['academicyearID'];
    $academicYearKH = $_POST['academicYearKH'];
    $academicyearEN = $_POST['academicyearEN'];
    $sql = "INSERT INTO tblacademicyear (AcademicYearID,AcademicYearKH	,AcademicYearEN) VALUES ('$academicyearID','$academicYearKH','$academicyearEN')";
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
    $academicyearID = $_POST['academicyearID'];
    $academicYearKH = $_POST['academicYearKH'];
    $academicyearEN = $_POST['academicyearEN'];
    $sql = "UPDATE tblacademicyear set 
    AcademicYearID='$academicyearID',
    AcademicYearKH='$academicYearKH',
    AcademicYearEN='$academicyearEN'
    where  AcademicYearID=$academicyearID";
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
    $academicyearID = $_POST['academicyearID'];
    $academicYearKH = $_POST['academicYearKH'];
    $academicyearEN = $_POST['academicyearEN'];
    $sql = "DELETE from tblacademicyear where  AcademicYearID=$academicyearID";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>