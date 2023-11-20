<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body>
    <!-- header -->
    <header class='<?php echo isset($header) ? $header : "header"; ?>'>
        <div class="container-fluid">
            <div class="header-main">
                <ul class="createUser">
                    <li><a href="" data-toggle="modal" data-target="#userModal">Create User</a></li>
                </ul>
                <a href="index.php" class="header-main__logo">
                    <img src="images/logo.webp" alt="logo" class="imgFluid w-100 h-100 object-fit">
                </a>
                <ul class="header-main__nav">
                    <li>
                        <form action="">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input type="text">
                        </form>
                    </li>
                    <li>
                        <button class="notificationBtn">
                            <i class="fa-regular fa-bell bell"></i>
                        </button>
                    </li>
                    <li>
                        <div class="userProfile">
                            <a href="" class="d-block"><img src="images/user.webp" alt="user"
                                    class="img-fluid w-100 object-fit"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <nav class="navbar navbar-expand-lg p-0 responsiveHeader-main d-none">
                <a class="navbar-brand header-main__logo m-0" href="index.php">
                    <img src="images/logo.webp" alt="img">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="header-main__nav">
                        <li>
                            <form action="">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="text">
                            </form>
                        </li>
                        <li>
                            <button class="notificationBtn">
                                <i class="fa-regular fa-bell bell"></i>
                            </button>
                        </li>
                        <li>
                            <div class="userProfile">
                                <a href="" class="d-block"><img src="images/user.webp" alt="user"
                                        class="img-fluid w-100 object-fit"></a>
                            </div>
                        </li>
                    </ul>
                    <ul class="createUser d-flex align-items-center justify-content-center">
                        <li><a href="login.php">login</a></li>
                        <li>\</li>
                        <li><a href="" data-toggle="modal" data-target="#userModal">Create User</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class='<?php echo isset($addWebsite) ? $addWebsite : "addWebsite"; ?>'>
        <div class="container">
            <form action="" class="addWebsite-form">
                <input type="text" placeholder="Add Website URL">
                <button type="submit" class="addWebsite-btn"><span><i class="fa-regular fa-circle-plus"></i></span> Add
                    Website</button>
            </form>
        </div>
    </section>