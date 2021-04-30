<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>김태늬 포트폴리오 - <?=$pageTitle?></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="common1.css">
    <script src="common.js" defer></script>
</head>

<body>
            <div class="menu">
                <div class="menu-bar">
                    <div class="row">
                          <div class="logo"><a href="index.ssghtml.php"><img src="https://github.com/taenui/php-ssg-blog/blob/master/pf/img/home/whole-logo.png?raw=true" alt=""></a></div>
                        <ul class="menu-bar__row">
                            <li class="cell <?=$pageCode == 'home' ? 'active' : ''?>"><a href="index.ssghtml.php">Home</a></li>
                            <li class="cell <?=$pageCode == 'about' ? 'active' : ''?>"><a href="about.ssghtml.php">About Artist</a></li>
                            <li class="cell <?=$pageCode == 'map' ? 'active' : ''?>"><a href="map.ssghtml.php">Map</a></li>
                            <li class="cell <?=$pageCode == 'be' ? 'active' : ''?>"><a href="bi.ssghtml.php">Behind</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>