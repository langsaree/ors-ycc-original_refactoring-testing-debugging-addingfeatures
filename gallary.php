<?php
session_start();
include('include/login_check.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ภาพกิจกรรม</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/galleria.js"></script>
    <style>
        .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:620px;margin:20px auto}
        #galleria{height:400px;}
    </style>
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
        .style30 {color: #666666}
    </style>
    </head>

<body>
<div class="MainColumn">
    <div class="ArticleBorder">
        <div class="ArticleBL">
            <div></div>
        </div>
        <div class="ArticleBR">
            <div></div>
        </div>
        <div class="ArticleTL">

        </div>
        <div class="ArticleTR">
            <div></div>
        </div>
        <div class="ArticleT">

        </div>
        <div class="ArticleR">
            <div></div>
        </div>
        <div class="ArticleB">
            <div></div>
        </div>
        <div class="ArticleL">
        </div>

          <div class="Article">
            <p align="center">
                <div class="content">
                    <h1 class="style30">ภาพกิจกรรม</h1>

              <div id="galleria">
            <img src="gallary/1.jpg">
            <img src="gallary/2.jpg">
            <img src="gallary/3.jpg">
            <img src="gallary/4.jpg">
            <img src="gallary/5.jpg">  
                    </div>
                </div>

            <script>
            // Load the classic theme
            Galleria.loadTheme('galleria.classic.js');
            // Initialize Galleria
            $('#galleria').galleria();
            </script>

        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>
</body>
</html>