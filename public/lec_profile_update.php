<?php
session_start();
$username = $_SESSION['username'];
if(!isset($_SESSION['username'])){header("location:index.php");}
//end of check session
include('db.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>แก้ไขข้อมูลส่วนตัว</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <style type="text/css">
        <!--
        .main {	font-size: 14px; font-weight: bold; font-family: Tahoma; text-align: right;
        }
        -->
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
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span>วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
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
                <td width="197"><? echo '<br><span class="style7">ยินดีต้อนรับ ::</span>'; ?><? echo '<span class="style26 "> '.$username.' </span><br>'; ?></td>
              </tr>
              <tr>
                <td><? echo '<span class="style7"><a href="lec_profile.php" style="color: #3987FB; text-decoration: none">ดูข้อมูลส่วนตัว</a></span ><br>'; ?></td>
              </tr>
              <tr>
                <td><? echo '<span class="style7"><a href="logout.php" style="color: #3987FB; text-decoration: none">ออกจากระบบ</a></span ><br>'; ?></td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>


            <br>
          </div>
          <div class="Block">

            <span class="BlockHeader"><span>Menu</span></span>
            <div class="BlockContentBorder">

                 <ul>
                    <li><span class="style7"><a href="index.php" style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span></li>
                    <li><span class="style7"><a href="manual.pdf" style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span></li>
                </ul>
          </div>
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
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article"><br>
            <table width="647" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td width="643" class="style56">&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------------</td>
              </tr>
            </table>
<?
			

            if(isset($POST['ok'])){
				$login=$_POST['login'];
				$pswd=$_POST['pswd'];
				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				
				$sql="UPDATE lecturer SET username='$login',password='$pswd',lec_name='$name',lec_email='$email',lec_tel='$phone' where username='$username'";
				$do=mysqli_query($connection,$sql);
				if($do){
					header("location:lec_profile.php");
				}
				else{
					 mysqli_error($connection);
				}
			}
			?>
            <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table width="600">
             <? 
			
			$sql = "select * from lecturer where username='$username'";
            $result=mysqli_query($connection,$sql);
            ($row=mysqli_fetch_array($result));
		    ?>
                <tr>
                  <td width="29">&nbsp;</td>
                  <td width="186" class="main">&nbsp;</td>
                  <td width="284"><p><img src="images/lecturer.png" alt="" width="124" height="120"></p></td>
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
                    <label for="login"></label>
                    <input type="text" name="login" id="login" class="inputbox-normal" value="<?=$row['username'];?>">
                 </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Password :</td>
                  <td><label for="pswd"></label>
                  <input type="password" name="pswd" id="pswd" class="inputbox-normal" value="<?=$row['password'];?>" ></td>
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
                  <td><label for="name"></label>
                  <input type="text" name="name" id="name" class="inputbox-normal" value="<?=$row['lec_name'];?>" ></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Email :</td>
                  <td><label for="email"></label>
                  <input type="text" name="email" id="email" class="inputbox-normal" value="<?=$row['lec_email'];?>" ></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="main">Phone :</td>
                  <td><label for="phone"></label>
                  <input type="text" name="phone" id="phone" class="inputbox-normal" value="<?=$row['lec_tel'];?>" ></td>
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
                <td><input type="submit" name="ok" id="ok" value="    ตกลง    "></td>
                <td><input type="reset" name="cancel" id="cancel" value="    ยกเลิก    "></td>
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
  <?php  include('include/footer.php');?>
</body>
</html>