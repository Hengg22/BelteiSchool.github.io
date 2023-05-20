<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel">
            <div class="row pt-5 ">
                <div class="col-lg-12">
                    <div>
                        <form>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h1>Display Data</h1>
                                    <p>Please check your information here.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                        <!-- table show -->
                        <?php
                        include_once 'db1.php';
                            $output='';
                            $search = $_GET['search'];
                            $data;
                            $sql = "SELECT CertificateNumber,FullNameKH,FullNameEN,SexEN,DOB,CampusEN,CampusKH,Photo,BTBacXIIURL,BacXIIURL
                FROM tblcertificaterangdetail 
                INNER JOIN tblsex ON tblcertificaterangdetail.SexID=tblsex.SexID
                INNER JOIN tblcampus ON tblcertificaterangdetail.CampusID=tblcampus.CampusID='1' 
                where CertificateNumber like '%$search%' OR FullNameKH like '%$search%' OR FullNameEN like '%$search%' OR CampusEN like '%$search%'OR CampusKH like '%$search%' OR SexKH like '$search' OR SexEN like '$search' OR DOB like '%$search%'";
                            $query = mysqli_query($conn, $sql);
                            if ($query->num_rows > 0) {
                                $output .= '
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
                                        <th style="vertical-align:middle;">Photo-Stu</th>
                                        <th style="vertical-align:middle;">BELTEI Certi</th>
                                        <th style="vertical-align:middle;">Ministry Certi</th>
                                    </tr>
                                </thead>
                                <tbody>
                           ';
                                while ($row = mysqli_fetch_array($query)) {

                                    $output .= '
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
                                                      </tr>';
                                   }
                                   echo $output;
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
</body>

</html>


