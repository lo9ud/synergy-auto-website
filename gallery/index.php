<head>
    <title>
        Synergy Auto Repair - Gallery
    </title>
    <link rel="stylesheet" href="../global_assets/styles/styles.css">
    <link rel="stylesheet" href="../global_assets/styles/slideshow.css">
    <script src="../global_assets/scripts/slideshow.js"></script>
    <link rel="stylesheet" href="../global_assets/styles/sidenav.css">
    <link rel="icon" type="image/png" href="../global_assets/images/Colour_Logo_no-bg.png">
    
    <script src="../global_assets/scripts/navbar.js"></script>
</head>
<body>
    <a name="top"></a>

    <div class="header">
        <span class="openbtn" onclick="openNav()"> &#9776; </span>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../home/">Home</a>
            <a href="../services/">Services</a>
            <a href="../gallery/">Gallery</a>
            <a href="../contact/">Contact</a>
        </div>
        <span class="title" >Gallery</span>
        <a href="../home/" class="logo">
            <img class="logo"/>
        </a>
    </div>

    <hr class="rule">
    
    <div class="content">
        <?php require("../global_assets/php/slideshow.php"); ?>
        <div class="block">
            <h1>A slide show</h1>
            <?php
                createSlideshow("slideshow0", array_slice(scandir("./gallery_images/"), 2), "./gallery_images/");
            ?>
        </div>

        <div class="block half">
            <h1>A second slide show</h1>
            <?php
                createSlideshow("slideshow1", array_slice(scandir("./gallery_images/"), 2), "./gallery_images/");
            ?>
        </div>

        <div class="block half">
            <h1>A third slide show here</h1>
            <?php
                createSlideshow("slideshow2", array_slice(scandir("./gallery_images/"), 2), "./gallery_images/");
            ?>
        </div>
    </div>

    <hr class="rule">

    <div class="footer">
        <a class="top-btn" href="#top">Top</a>
    </div>
</body>