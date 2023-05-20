<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('header.php') ?>
    <title>Admin</title>
</head>
<?php include_once('style.php') ?>

<body>
    <!-- banner -->
    <div class="row pb-2 ">
        <div class="col-lg-2 align-middle pl-3 d-flex pt-2"><a href="admin.php"><img src="image/logo.png" alt="Logo BELTEI" width="65"></a>
            <h3 class="pl-3 text-center align-middle" style="color:black;margin-top:12px">ADMIN</h3>
        </div>
        <div class="col-lg-10 pt-3">
            <form action="Search.php" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search" required style="border-radius:20px">
                    <pre> </pre>
                    <button class="btn btn-outline-primary pl-3 pr-3 " style="border-radius:20px" name="Search" type="submit"><i
                            class="bi bi-search align-middle justify-content-center d-flex pt-1"></i><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                    <pre> </pre>
                    <a href="logout.php" type="button"style="border-radius:20px" class="pl-3 pr-3 btn btn-danger" data-toggle="tooltip"
                        data-placement="bottom" title="Logout">Logout <i class="bi bi-box-arrow-right"></i><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                            class="bi bi-box-arrow-right align-middle d-inline pt-1"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg></a>
                </div>
            </form>
        </div>
    </div>
    <div class="row flexbox">
        <div class="col-lg-2 left-panel text-center" id="menu">
            <?php include_once('menu.php') ?>
        </div>