<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel">
            <div class="row pt-5 ">
                <div class="col-lg-12">
                    <div class="container">
                        <form action="campus.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h3>Campus Form</h3>
                                    <p class="pb-3">Please input your data here and click insert to insert data.</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3"></div>

                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="campusID"
                                            placeholder="Campus ID" ><br>
                                        <select type="text" class="form-control" name="campusKh" id="CampusKH"
                                            placeholder="Campus" >
                                            <option>Campus KH</option>
                                            <option value="B1 គីរីរម្យ">B1 គីរីរម្យ</option>
                                            <option value="B2 ផ្សាទួលទំពូង">B2 ផ្សាទួលទំពូង</option>
                                            <option value="B3 ដេអិន">B3 ដេអិន</option>
                                            <option value="B4 ផ្សារ​ដើម​ថ្កូវ">B4 ផ្សារ​ដើម​ថ្កូវ</option>
                                            <option value="B5 ច្បារ​អំពៅ">B5 ច្បារ​អំពៅ</option>
                                            <option value="B6 អូរ​ឫស្សី​">B6 អូរ​ឫស្សី</option>
                                            <option value="B7 ពេទ្យ​លោក​សង្ឃ">B7 ពេទ្យ​លោក​សង្ឃ</option>
                                            <option value="B8 ផ្សារ​ពោធិ៍​ចិន​តុង​">B8 ផ្សារ​ពោធិ៍​ចិន​តុង</option>
                                            <option value="B9 ស្ទឹង​មាន​ជ័យ">B9 ស្ទឹង​មាន​ជ័យ</option>
                                            <option value="B10 អាងទឹកអូឡាំពិក">B10 អាងទឹកអូឡាំពិក</option>
                                            <option value="B11 ផ្សារតូច">B11 ផ្សារតូច</option>
                                            <option value="B12 ផ្សារ​ដី​ហុយ">B12 ផ្សារ​ដី​ហុយ</option>
                                            <option value="B13 រង្វង់​មូល​កាំ​កូ​ស៊ី​ធី">B13 រង្វង់​មូល​កាំ​កូ​ស៊ី​ធី
                                            </option>
                                            <option value="B14 ក្រុងតាខ្មៅ">B14 ក្រុងតាខ្មៅ</option>
                                            <option value="B15 ផ្សារជម្ពូវ័ន">B15 ផ្សារជម្ពូវ័ន</option>
                                            <option value="B16 ផ្លូវកោងវេងស្រេង">B16 ផ្លូវកោងវេងស្រេង</option>
                                            <option value="B17 ឫស្សីកែវ">B17 ឫស្សីកែវ</option>
                                            <option value="B18 ផ្សារព្រែកឯង">B18 ផ្សារព្រែកឯង</option>
                                            <option value="B19 ផ្សារព្រែកលៀប">B19 ផ្សារព្រែកលៀប</option>
                                            <option value="B20 ចោមចៅ">B20 ចោមចៅ</option>
                                            <option value="B21 ផ្សារឈូកមាស">B21 ផ្សារឈូកមាស</option>
                                            <option value="B22 រង្វង់មូលគួរស្រូវ">B22 រង្វង់មូលគួរស្រូវ</option>
                                            <option value="B23 ផ្លូវព្រៃស">B23 ផ្លូវព្រៃស</option>
                                            <option value="B24 ព្រែកតាមាក់">B24 ព្រែកតាមាក់</option>
                                        </select><br>
                                        <select type="text" class="form-control" name="campusEn" id="CampusEN"
                                            placeholder="Campus">
                                            <option>Campus EN</option>
                                            <option value="B1 Kirirom">B1 Kirirom</option>
                                            <option value="B2 Phsar Toul Tumpong">B2 Phsar Toul Tumpong</option>
                                            <option value="B3 DN">B3 DN</option>
                                            <option value="B4 Phsar Deum Thkov">B4 Phsar Deum Thkov</option>
                                            <option value="B5 Chbar Ampoeu">B5 Chbar Ampoeu</option>
                                            <option value="B6 ORusey">B6 O’Rusey</option>
                                            <option value="B7 Loksang Hospital">B7 Loksang Hospital</option>
                                            <option value="B8 Pochintong">B8 Pochintong</option>
                                            <option value="B9 Stung Meanchey">B9 Stung Meanchey</option>
                                            <option value="B10 Ang Teuk Olympic">B10 Ang Teuk Olympic</option>
                                            <option value="B11 Phsa Toch">B11 Phsa Toch</option>
                                            <option value="B12 Phsar Deihoy">B12 Phsar Deihoy</option>
                                            <option value="B13 Camko City Roundabout">B13 Camko City Roundabout</option>
                                            <option value="B14 Takhmao City">B14 Takhmao City</option>
                                            <option value="B15 Phsar Chumpou Vorn">B15 Phsar Chumpou Vorn</option>
                                            <option value="B16 Phlov Koang Veng Sreng">B16 Phlov Koang Veng Sreng
                                            </option>
                                            <option value="B17 Russey Keo">B17 Russey Keo</option>
                                            <option value="B18 Phar Prek Eng">B18 Phar Prek Eng</option>
                                            <option value="B19 Phsar Preak Leab">B19 Phsar Preak Leab</option>
                                            <option value="B20 Chom Chao">B20 Chom Chao</option>
                                            <option value="B21 Chhouk Meas Market">B21 Chhouk Meas Market</option>
                                            <option value="B22 Kour Srov Roundabout">B22 Kour Srov Roundabout</option>
                                            <option value="B23 PreySar Road, Russey Sanh Stoplight">B23 PreySar Road
                                            </option>
                                            <option value="B24 Prek Tamak Roundabout">B24 Prek Tamak Roundabout</option>
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

                                    <div class="col-lg-3"></div>

                                </div>
                            </div>
                            </from>
                    </div>
                    <div>
                        <?php
                        include_once 'db1.php';
                        if (isset($_POST['Search'])) {
                            $campusID = $_POST['campusID'];
                            $sql = "SELECT * from tblcampus where CampusID=$campusID";
                            $query = mysqli_query($conn, $sql);
                            echo '
                        <table class="table text-center table-responsive-md table-hover ">
                        <thead style="background-color:whitesmoke;">
                            <tr>
                                <th>Campus ID</th>
                                <th></th>
                                <th>Campus KH</th>
                                <th></th>
                                <th>Campus EN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                    ';
                            if ($query->num_rows > 0) {
                                while ($row = mysqli_fetch_array($query)) {

                                    echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['CampusID'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['CampusKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['CampusEN'] . '<td/>
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
                    <!--  -->
                    <div>
                        <?php
                        include_once 'db1.php';
                        $sql = "SELECT * from tblcampus";
                        $query = mysqli_query($conn, $sql);
                        echo '
                                <table class="table text-center table-responsive-md table-hover ">
                                <thead style="background-color:whitesmoke;">
                                    <tr>
                                        <th>Campus ID</th>
                                        <th></th>
                                        <th>Campus KH</th>
                                        <th></th>
                                        <th>Campus EN</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                            ';
                        if ($query->num_rows > 0) {
                            while ($row = mysqli_fetch_array($query)) {

                                echo '
                    <tr>
                        
                        <td style="vertical-align:middle;" >' . $row['CampusID'] . '<td/>                        
                        <td style="vertical-align:middle;" >' . $row['CampusKH'] . '<td/>                         
                        <td style="vertical-align:middle;" >' . $row['CampusEN'] . '<td/>
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

<?php
include_once 'db1.php';
if (isset($_POST['Insert'])) {
    $campusID = $_POST['campusID'];
    $campusKh = $_POST['campusKh'];
    $campusEn = $_POST['campusEn'];
    $sql = "INSERT INTO tblcampus (CampusID,CampusKH,CampusEN) VALUES ('$campusID','$campusKh','$campusEn')";
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
    $campusID = $_POST['campusID'];
    $campusKh = $_POST['campusKh'];
    $campusEn = $_POST['campusEn'];
    $sql = "UPDATE tblcampus set 
    CampusID='$campusID',
    CampusKH='$campusKh',
    CampusEN='$campusEn'
    where CampusID=$campusID ";
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
    $campusID = $_POST['campusID'];
    $sql = "DELETE from tblcampus where CampusID=$campusID";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>