<?php
session_start();
$username = $_SESSION['username'];
include ('auth.php');
//end of check session
include ('db.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>แก้ไขข้อมูลส่วนตัว</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
.style25 {font-size: 11px; font-family: Tahoma; }
.style9 {font-size: 12px}
.style7 {color: #3987FB; font-size: 14px; }
.style26 {
	font-size: 14px;
	font-weight: bold;
}
.style28 {font-size: 12px; font-weight: bold; }
.main {	font-size: 14px; font-weight: bold; font-family: Tahoma; text-align: right;
}
input:focus, textarea:focus {
		background:#E3E7A6;
		color:#000000;
	}
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }
    </style>
</head>
<body>
    <div class="BodyContent">
<div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div>
      <div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div>
      <div class="Border">

        <div class="Menu">
            <ul>
              <li></li> 
              <li></li> 
              <li></li> <li></li> 
              <a href="##" class="MenuButton"><span>หน้าหลัก</span></a>
              <a href="##" class="MenuButton"><span>วิทยาลัย</span></a>
              <a href="##" class="MenuButton"><span>หลักสูตร</span></a>
              <a href="##" class="MenuButton"><span>ประชาสัมพันธ์</span> </a>
              <a href="##" class="MenuButton"><span>ภาพกิจกรรม</span></a>
              <a href="##" class="MenuButton"><span> ติดต่อเรา</span></a>
                 <input name="text" type="text" style="width:120px" />
                 <span class="ButtonInput"><span>
                 <input type="button" value="Search" />
                 </span></span></ul>
        </div>
        <div class="Header">
        <div class="HeaderTitle">
          <div align="left"><img src="images/banner.jpg" width="836" height="250"></div>
          <h1>&nbsp;</h1>
        </div>
        </div><div class="Columns"><div class="Column1">
         
          <div class="Block">
            
            <span class="BlockHeader"><span>Online Register</span></span>
           <table width="150" border="0" align="left" cellpadding="0" cellspacing="3">
              <tr>
                <td width="197"><?php echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; ?><?php echo '<span class="style26 "> '.$_SESSION["username"].' </span><br>'; ?></td>
              </tr>
              <tr>
                <td><?php echo '<span class="style7"><a href="lec_profile.php" style="color: #3987FB; text-decoration: none">ดูข้อมูลส่วนตัว</a></span ><br>'; ?></td>
              </tr>
              <tr>
              <td style="text-align:left"><strong><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>ออกจากระบบ</a></strong></td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>


            <br>
          </div>
        <div class="Block">
            <span class="BlockHeader"><span>เมนูส่วนตัว</span></span>
            <div class="BlockContentBorder">
                <ul>
                    <li><span class="style7"><a href="lec_view_cos.php" style="color: #3987FB; text-decoration: none">แสดงข้อมูลวิชา</a></span></li>
                    <li><span class="style7"><a href="lec_view_student.php" style="color: #3987FB; text-decoration: none">แสดงรายชื่อนักศึกษา</a></span></li>
                </ul>
          </div>
        </div>
        </div><div class="MainColumn">
        <div class="ArticleBorder">
        <div class="ArticleBL"><div></div></div>
        <div class="ArticleBR"><div></div></div>
        <div class="ArticleTL"></div>
        <div class="ArticleTR"><div></div></div>
        <div class="ArticleT"></div>
        <div class="ArticleR"><div></div></div>
        <div class="ArticleB"><div></div></div>
        <div class="ArticleL"></div>
       
          <div class="Article"><br>
            <table width="647" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="643" class="style56">&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------------</td>
              </tr>
            </table>
     <?php
     error_reporting(~E_NOTICE );
     $username=$_SESSION["username"];
       $ok=$_POST['ok'];
            if(isset($ok)){
				$login=$_POST['username'];
        $pswd=$_POST['password'];
				$name=$_POST['lec_name'];
        $phone=$_POST['lec_tel'];
        $email=$_POST['lec_email'];
				
				$query = "UPDATE lecture set username ='$login', password ='$pswd', lec_name ='$name', lec_email ='$email', lec_tel ='$phone' where username='$username'";
				$do=mysqli_query($connection, $query);
			}
			?>
            <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table width="600">
             <?php 
			
			$sql = "select * from lecture where  username='$username'";
            $result=mysqli_query($connection, $sql);
            ($row=mysqli_fetch_array($result));
		    ?>
                <tr>
                  <td width="29">&nbsp;</td>
                  <td width="186" class="main">&nbsp;</td>
                  <td width="284"><p><img src="image/lecturer.png" alt="" width="124" height="120"></p></td>
                  <td width="81">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">รูปภาพ :</td>
                  <td><input name="file[]" type="file" id="file[]" class="inputbox-normal" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Username :</td>
                  <td>
                    <label for="username"></label>
                    <input type="text" name="username" id="username" class="inputbox-normal" value="<?php echo $row['username'];?>">
                 </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Password :</td>
                  <td><label for="password"></label>
                  <input type="password" name="password" id="password" class="inputbox-normal" value="<?php echo $row['password'];?>" ></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">ชื่อ :</td>
                  <td><label for="lec_name"></label>
                  <input type="text" name="lec_name" id="lec_name" class="inputbox-normal" value="<?php echo $row['lec_name'];?>" ></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Email :</td>
                  <td><label for="lec_email"></label>
                  <input type="text" name="lec_email" id="lec_email" class="inputbox-normal" value="<?php echo $row['lec_email'];?>" ></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Phone :</td>
                  <td><label for="lec_tel"></label>
                  <input type="text" name="lec_tel" id="lec_tel" class="inputbox-normal" value="<?php echo $row['lec_tel'];?>" ></td>
                  <td>&nbsp;</td>
                </tr>
            </table>
            <table width="600" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="234">&nbsp;</td>
                <td width="78">&nbsp;</td>
                <td width="84">&nbsp;</td>
                <td width="194">&nbsp;</td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="ok" id="ok" value=" ตกลง "></td>
                <td><input type="reset" name="cancel" id="cancel" value=" ยกเลิก "></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
          </table>
            <table width="647" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="643" class="style56">&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------------</td>
              </tr>
            </table>
            <br>
            </form>
          </div>
        </div>
        </div>
        <?php include('../config/footer.php');?>
</body>
</html>