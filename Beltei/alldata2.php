<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel">
            <div class="row pt-5 ">
                <div class="col-lg-12 text-center">
                    <h3>Show Data</h3>
                    <p>Please check your data here.</p>
                </div>
            <div class="row">
                <div>
                    <?php
                    include_once 'db1.php';
                    $sql = "SELECT CertificateNumber,FullNameKH,FullNameEN,SexEN,DOB,CampusEN,Photo,BTBacXIIURL,BacXIIURL
                FROM tblcertificaterangdetail 
                INNER JOIN tblsex ON tblcertificaterangdetail.SexID=tblsex.SexID
                INNER JOIN tblcampus ON tblcertificaterangdetail.CampusID=tblcampus.CampusID where CertificateRangDetailID between 51 and 75";
                    echo '
                    <table class="table text-center table-responsive-md table-hover ">
                    <thead style="background-color:whitesmoke;">
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
                            <th style="vertical-align:middle;">Photo</th>
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

                    ?>
                    </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="alldata1.php" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="AllData.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="alldata1.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="alldata2.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="alldata3.php">4</a></li>
                        <li class="page-item"><a class="page-link" href="alldata4.php">5</a></li>
                        <li class="page-item"><a class="page-link" href="alldata5.php">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="alldata3.php">Next</a>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </div>

</body>

</html>