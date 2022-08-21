<head>
    <title>
        Synergy Auto Repair - Gallery
    </title>
    <link rel="stylesheet" href="../global_assets/styles/styles.css">
    <link rel="stylesheet" href="../global_assets/styles/sidenav.css">
    <link rel="stylesheet" href="../global_assets/styles/slideshow.css">
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
        <img class="logo"/>
    </div>

    <hr class="rule">
    
    <div class="content">
        <div class="block">
            <p>
                A slideshow goes here 
            </p>
            <p>
                <br>
                Time at page render:
                <?php
                    date_default_timezone_set("Africa/Johannesburg");
                    echo date("Y-m-d h:i:s")
                ?>
            </p>
        </div>
    </div>

    <hr class="rule">

    <div class="footer">
        <span class="top-btn">Top</span>
    </div>
</body>