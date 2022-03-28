<?php
 $first_name =$_POST['first_name']
 $Last_name =$_POST['Last_name']
 $DOB =$_POST['DOB']
 $Phn_num =$_POST['Phn_num']
 $email_id =$_POST['email_id']
 $user_name =$_POST['user_name']
 $language =$_POST['language']
 $prog_lang =$_POST['prog_lang']
 $sslc_name =$_POST['sslc_name']
 $sslc_year =$_POST['sslc_year']
 $sslc_mark =$_POST['sslc_mark']
 $hsc_name =$_POST['hsc_name']
 $hsc_year =$_POST['hsc_year']
 $hsc_mark =$_POST['hsc_mark']
 $clg_name =$_POST['clg_name']
 $dept =$_POST['dept']
 $cgpa_sem1 =$_POST['cgpa_sem1']
 $cgpa_sem2 =$_POST['cgpa_sem2']
 $cgpa_sem3 =$_POST['cgpa_sem3']
 $nptel_score =$_POST['nptel_score']
 $achivement =$_POST['achivement']
 $interest =$_POST['interest']
 //Database Connection
 $conn = new mysqli('localhost','root','','','resume');
 if($conn->connect_error){ 
     die('Connection Failed :..... '.$conn->connect_error);
 }
 else{
     $stmt = $conn->prepare("insert into details(first_name, Last_name, DOB, Phn_num,
     email_id,user_name, language,prog_lang, sslc_name, sslc_year,sslc_mark,
     hsc_name, hsc_year, hsc_mark,clg_name, dept, cgpa_sem1,cgpa_sem2
     cgpa_sem3,nptel_score,  achivement, interest) values(?,?,?,?,?,?,?,?,?,?,
     ?,?,?,?,?,?,?,?,?,?,?,?)")
      $stmt->bind_param("sssssssssssiiiiiiiiii",$first_name ,$Last_name,$DOB,$Phn_num,$Phn_num,$email_id
      $user_name,$language, $prog_lang,$sslc_name, $sslc_year, $sslc_mark,$hsc_name,$hsc_year, $hsc_mark,  $clg_name
      $dept, $cgpa_sem1 , $cgpa_sem2,  $cgpa_sem3,  $nptel_score, $achivement, $interest );
      stmt->execute();
      echo "Registration Sucessfull.....";
      $stmt->close();
      $conn->close();
 }

?>