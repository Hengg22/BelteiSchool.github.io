<?php include_once('adminpart.php') ?>
<div class="col-lg-10 right-panel">
    <div class="row pt-5 ">
        <div class="col-lg-12">
            <div class="container">
                <form action="studentlist.php" method="post">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3>Studentlist Form</h3>
                            <p class="pb-3">Please input your data here and click insert to insert data.</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3"></div>

                            <div class="col-lg-6">

                                <input type="text" class="form-control"  name="liststuID" placeholder="List Student ID"><br>
                                    <input type="text" class="form-control" name="diplomaID" placeholder="Diploma ID"><br>
                                    <input type="file" class="form-control" name="urllist" placeholder="List Student URL"
                                       ><br>
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
                
                <?php
                                include_once 'db1.php';
                                if (isset($_POST['Search'])) {
                                    $liststuID = $_POST['liststuID'];
                                    $sql = "SELECT * from tblbtliststudent where BTListStudentID= $liststuID";
                                    $query = mysqli_query($conn, $sql);
                                    echo '
                                    <table class="table text-center table-responsive-md table-hover ">
                                    <thead style="background-color:whitesmoke;">
                                        <tr>
                                        <th>List Student ID</th>
                                        <th></th>
                                        <th>Diploma ID</th>
                                        <th></th>
                                        <th>List Student URL</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                ';
                                    if ($query->num_rows > 0) {
                                        while ($row = mysqli_fetch_array($query)) {
                                            echo '
                                            <tr>
                                                
                                            <td style="vertical-align:middle;" >' . $row['BTListStudentID'] . '<td/>                        
                                            <td style="vertical-align:middle;" >' . $row['BTBacXIIID'] . '<td/>                         
                                            <td style="vertical-align:middle;" ><a href="image/' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?><img width="80px" height="100px"  src="image/' . $row['ListStudentURL'] . '"</a></td>
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

            <div>
                <?php
                include_once 'db1.php';
                $sql = "SELECT * from tblbtliststudent";
                $query = mysqli_query($conn, $sql);
                echo '
    <table class="table text-center table-responsive-md table-hover ">
    <thead style="background-color:whitesmoke;">
        <tr>
        <th>List Student ID</th>
        <th></th>
        <th>Diploma ID</th>
        <th></th>
        <th>List Student URL</th>
    
        </tr>
    </thead>
    <tbody>
';
                if ($query->num_rows > 0) {
                    while ($row = mysqli_fetch_array($query)) {

                        echo '
                    <tr>
                        
                    <td style="vertical-align:middle;" >' . $row['BTListStudentID'] . '<td/>                        
                    <td style="vertical-align:middle;" >' . $row['BTBacXIIID'] . '<td/>                         
                    <td style="vertical-align:middle;" ><a href="image/' . $row['ListStudentURL'] . '"<?php echo' . $row['ListStudentURL'] . ';?><img width="80px" height="100px"  src="image/' . $row['ListStudentURL'] . '"</a></td>
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
<!--  -->
<?php
include_once 'db1.php';
if (isset($_POST['Insert'])) {
    $liststuID = $_POST['liststuID'];
    $diplomaID = $_POST['diplomaID'];
    $urllist = $_POST['urllist'];
    $sql = "INSERT INTO  tblbtliststudent (BTListStudentID ,BTBacXIIID,ListStudentURL) VALUES ('$liststuID','$diplomaID','$urllist')";
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
    $liststuID = $_POST['liststuID'];
    $diplomaID = $_POST['diplomaID'];
    $urllist = $_POST['urllist'];
    $sql = "UPDATE tblbtliststudent set 
     BTListStudentID='$liststuID' ,
     BTBacXIIID='$diplomaID',
     ListStudentURL='$urllist'
     where  BTListStudentID=$liststuID";
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
    $liststuID = $_POST['liststuID'];
    $sql = "DELETE from tblbtliststudent where  BTListStudentID=$liststuID";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>