<head>
    <title>
        TEMPLATE
    </title>
    <link rel="stylesheet" href="./global_assets/styles/styles.css">
    <link rel="stylesheet" href="./global_assets/styles/sidenav.css">
    <link rel="icon" type="image/png" href="../global_assets/images/Colour_Logo_no-bg.png">
    <script src="./global_assets/scripts/navbar.js"></script>
</head>
<body>
    <a name="top"></a>

    <div class="header">
        <span class="openbtn" onclick="openNav()"> &#9776; </span>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../home/index.html">Home</a>
            <a href="../services/index.html">Services</a>
            <a href="../gallery/index.html">Gallery</a>
            <a href="../contact/index.html">Contact</a>
        </div>
        <span class="title" >Title</span>
        <img class="logo"/>
    </div>

    <hr size="3" color="#c21b1b" />

    <div class="content">
        <div class="block">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum ante elit, sed aliquam turpis iaculis in. Ut efficitur mattis mollis. Curabitur ut ipsum vel urna lobortis facilisis at sed velit. Pellentesque vel sagittis neque. Quisque finibus, lorem ac consectetur egestas, orci elit tempus ipsum, gravida efficitur turpis dui non orci. Nullam urna ipsum, mattis sed tortor sed, molestie pharetra augue. Praesent vitae placerat dolor. Nam tempus velit at est ultrices, et ornare risus lobortis. Sed turpis turpis, porta vel hendrerit sed, laoreet id lectus.        
            </p>
            <img src="./global_assets/images/Colour_Logo_no-bg.png">
        </div>

        <div class="block">
            <p>
                Donec id malesuada arcu. Morbi convallis ultricies est, quis pellentesque ex imperdiet in. Sed augue massa, vestibulum eget sollicitudin vel, feugiat eu dui. Aliquam erat volutpat. Etiam aliquam in eros sit amet elementum. Etiam interdum scelerisque nunc nec molestie. Praesent facilisis mi eu ultrices venenatis. Nulla commodo dapibus bibendum. Duis a dictum mi. Pellentesque facilisis orci non congue condimentum. Duis facilisis, felis id viverra rutrum, libero nunc laoreet justo, et condimentum lectus nibh suscipit dui. Aliquam ullamcorper lectus non erat pellentesque ultricies. Mauris pharetra mattis malesuada. Nunc feugiat mauris eu lacus venenatis egestas. Pellentesque massa sem, bibendum quis euismod non, ultricies laoreet nisl.
            </p>
        </div>

        <div class="block half">
            <p>
                Pellentesque vestibulum diam ligula, placerat feugiat mauris ornare sit amet. Cras ut dignissim justo, vel aliquet augue. Pellentesque non mi lacus. Praesent a sollicitudin justo. Donec bibendum odio felis. In eget justo nec diam pulvinar luctus. Nam id viverra risus. Vivamus id auctor turpis, ac tempor mi. Duis quis varius felis. In laoreet elit in fringilla placerat. Donec erat ante, condimentum eget dolor eget, aliquam imperdiet magna. Morbi varius odio placerat luctus porta. Pellentesque eget ipsum ac enim tempus lobortis. Sed eleifend ligula in sem vehicula ultrices. Quisque vitae mauris cursus mauris dapibus bibendum ut convallis nibh.
            </p>
        </div>

        <div class="block half">
            <p>
                Vivamus aliquet metus in sapien egestas lacinia vitae at diam. Pellentesque id fringilla ipsum. Pellentesque feugiat viverra commodo. Nulla facilisi. Nunc auctor leo ultricies nunc iaculis vestibulum. Vestibulum rutrum aliquam diam, sed laoreet turpis imperdiet vitae. Mauris quam dolor, mollis a felis ac, semper interdum lorem. Cras malesuada sed dui et auctor. Duis in enim non felis pharetra facilisis ut sit amet sem. Suspendisse euismod magna eget pharetra dictum. Fusce dapibus justo non odio dapibus, et rhoncus purus congue. Suspendisse semper vehicula mauris, nec ultricies mauris. Donec at congue nunc. Phasellus scelerisque pulvinar nibh, vel condimentum sapien malesuada quis. Ut euismod sem volutpat maximus rutrum.
            </p>
        </div>

        <img class="block" src="./global_assets/images/Colour_Logo_no-bg.png">
        
        <div class="block">
            <p>
                Cras eget diam ipsum. Nunc elit turpis, efficitur ac purus sit amet, laoreet dictum elit. Quisque ultrices velit non justo aliquet, quis porttitor ligula tristique. Integer vitae imperdiet dui, ac hendrerit nunc. Proin faucibus leo at justo cursus, ut maximus libero tincidunt. Donec placerat lacus est, quis sodales enim mattis tincidunt. Proin mattis, lacus quis varius auctor, dui justo mollis risus, sit amet hendrerit sapien eros dignissim quam. Donec aliquam mi vel libero luctus, sed pretium leo tristique. Sed euismod ante finibus, efficitur nulla et, pretium purus.
            </p>
        </div>
        <div class="block">
            <p>
                <?php
                    $files = scandir("./");
                    foreach(array_slice($files,2) as $file){
                        echo $file . "<br>";
                    }
                ?>
            </p>
        </div>

    </div>

    <hr size="3" color="#c21b1b" />

    <div class="footer">
        <span class="top-btn">Top</span>
    </div>
</body>