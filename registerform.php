<?php
            require_once "db1.php";

            if (isset($_SESSION['user_id']) != "") {
                header("Location: dashboard.php");
            }
            $error = "";
            $sql = "";
            if (isset($_POST['signup'])) {
                $role = $_POST['Role'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $password = $_POST['password'];

                if (!$error) {
                    if (mysqli_query($conn, "INSERT INTO tblusers(RoleID,name, email, mobile ,password) VALUES('" . $role . "','" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
                        header("location: admin.php");
                        exit();
                    } else {
                        echo "Error: " . $sql . "" . mysqli_error($conn);
                    }
                }
                mysqli_close($conn);
            }
            ?>
<?php include_once('adminpart.php') ?>
        <div class="col-lg-10 right-panel ">
            <div class="row pt-4 pb-5">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h2>Registration Form</h2>
                    <p class="text-center">Please fill all fields in the form</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group">
                            <label>Role:</label>
                            <select name="Role" class="form-control">
                                <option value="1">
                                    Admin
                                </option>
                                <option value="2">
                                    User
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="" maxlength="50" required="" placeholder="Name">
                        </div>

                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="" maxlength="30" required="" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="" placeholder="Mobile">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="" maxlength="8"
                                required="" placeholder="Password">
                        </div>

                        <input type="submit" class="btn btn-primary" name="signup" value="submit">
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</body>

</html>