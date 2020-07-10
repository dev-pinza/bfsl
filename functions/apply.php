<?php
include("db/connect.php");
require_once "../bat/phpmailer/PHPMailerAutoload.php";
?>
<?php
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["textarea"];
$city = $_POST["city"];
$country = $_POST["country"];
$zip = $_POST["zip"];
$bsc = $_POST["bsc"];
$msc = $_POST["msc"];
$phd = $_POST["phd"];
$distance = $_POST["inlineRadioOptions"];
$yoe = $_POST["yoe"];
$qualification = $_POST["qualification"];
$entry_term = $_POST["entry_term"];
$course = $_POST["course"];
$study_country = $_POST["study_country"];
$school = $_POST["school"];
$add_info = $_POST["add_info"];
$question = $_POST["question"];
// DATE AND TIME
$gen_date = date('Y-m-d');
$gen_time = date('H:i:s');
// DONE
session_start();
    $_SESSION["fname"] = $fname;
    $_SESSION["mname"] = $mname;
    $_SESSION["lname"] = $lname;
    $_SESSION["email"] = $email;
$select_first = mysqli_query($connection, "SELECT * FROM `application` WHERE email = '$email' OR phone = '$phone'");
$x = mysqli_num_rows($select_first);
if ($x <= 0 ) {
    $insert_apply = mysqli_query($connection, "INSERT INTO `application` (`date_created`, `time`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `address`, `city`, `country`, `zip`, `bsc`, `msc`, `phd`, `distance`, `year_of_entry`, `qualification`, `entry_term`, `course`, `study_country`, `university`, `add_info`, `question`) 
VALUES ('{$gen_date}', '{$gen_time}', '{$fname}', '{$mname}', '{$lname}', '{$email}', '{$phone}', '{$address}', '{$city}', '{$country}', '{$zip}', '{$bsc}', '{$msc}', '{$phd}', '$distance', '{$yoe}', '{$qualification}', '{$entry_term}', '{$course}', '{$study_country}', '{$school}', '{$add_info}', '{$question}')");
if ($insert_apply) {
    // echo header for something
    $_SESSION["type"] = "success";
    // START CLIENT
      // begining of mail
      $mail = new PHPMailer;
      // from email addreess and name
      $mail->From = "info@bfsl633.com";
      $mail->FromName = "BFSL";
      // to adress and name
      $mail->addAddress($email, $fname);
      // reply address
      //Address to which recipient will reply
      // progressive html images
      $mail->addReplyTo("info@bfsl633.com", "Reply");
      // CC and BCC
      //CC and BCC
      // $mail->addCC("cc@example.com");
      // $mail->addBCC("bcc@example.com");
      // Send HTML or Plain Text Email
      $mail->isHTML(true);
      $mail->Subject = "BFSL Registration Successful";
      $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
      <html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>
      
      <head>
          <meta name='viewport' content='width=device-width' />
          <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
          <title>Application Successful</title>
      </head>
      
      <body style='margin:0px; background: #f8f8f8; '>
          <div width='100%' style='background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;'>
              <div style='max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px'>
                  <table border='0' cellpadding='0' cellspacing='0' style='width: 100%; margin-bottom: 20px'>
                      <tbody>
                          <tr>
                              <td style='vertical-align: top; padding-bottom:30px;' align='center'><a href='http://eliteadmin.themedesigner.in' target='_blank'><br/>
                                  <img src='https://firebasestorage.googleapis.com/v0/b/churaton-6e682.appspot.com/o/logo3.png?alt=media&token=d4b38801-90cc-4187-bb4e-84d752a9fdfb' height='100px' width='100px' alt='Responsive web app kit' style='border:none'></a>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                      <tbody>
                          <tr>
                              <td style='background:#413e39; padding:20px; color:#fff; text-align:center;'> Application Has Been Submitted Successfully. </td>
                          </tr>
                      </tbody>
                  </table>
                  <div style='padding: 40px; background: #fff;'>
                      <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                          <tbody>
                              <tr>
                                  <td>
                                      <p>Submitted Date <b>$gen_date</b></p>
                                      <p>$fname $mname $lname We will get back to you soon!</p>
                                      <center>
                                          <a href='https://bfsl633.com' style='display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;'>Explore</a>
                                      </center>
                                      <b>- Thanks (BFSL Email Robot)</b> </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  <div style='text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px'>
                      <p> Powered by BFSL
                          <br>
                          <a href='javascript: void(0);' style='color: #b2b2b5; text-decoration: underline;'>Unsubscribe</a> </p>
                  </div>
              </div>
          </div>
      </body>
      
      </html>";
      $mail->AltBody = "This is the plain text version of the email content";
      // mail system
      if(!$mail->send()) 
      {
    echo header("Location: ../msg1.php");
      } else
      {
    // echo header("Location: ../msg1.php");
    $mail = new PHPMailer;
      // from email addreess and name
      $mail->From = "info@bfsl633.com";
      $mail->FromName = "BFSL";
      // to adress and name
      $mail->addAddress("apply@bfsl633.com", "Applicant");
      // reply address
      //Address to which recipient will reply
      // progressive html images
      $mail->addReplyTo("info@bfsl633.com", "Reply");
      // CC and BCC
      //CC and BCC
      // $mail->addCC("cc@example.com");
      // $mail->addBCC("bcc@example.com");
      // Send HTML or Plain Text Email
      $mail->isHTML(true);
      $mail->Subject = "New Student Just Registered";
      $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
      <html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>
      
      <head>
          <meta name='viewport' content='width=device-width' />
          <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
          <title>Applicant</title>
      </head>
      
      <body style='margin:0px; background: #f8f8f8; '>
          <div width='100%' style='background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;'>
              <div style='max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px'>
                  <table border='0' cellpadding='0' cellspacing='0' style='width: 100%; margin-bottom: 20px'>
                      <tbody>
                          <tr>
                              <td style='vertical-align: top; padding-bottom:30px;' align='center'><a href='http://eliteadmin.themedesigner.in' target='_blank'><br/>
                  <img src='https://firebasestorage.googleapis.com/v0/b/churaton-6e682.appspot.com/o/logo3.png?alt=media&token=d4b38801-90cc-4187-bb4e-84d752a9fdfb' height='100px' width='100px' alt='Responsive web app kit' style='border:none'></a> </td>
                          </tr>
                      </tbody>
                  </table>
                  <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                      <tbody>
                          <tr>
                              <td style='background:#36bea6; padding:20px; color:#fff; text-align:center;'> Notification: New Student ($fname $mname $lname) Just Registered ... More Details Below </td>
                          </tr>
                      </tbody>
                  </table>
                  <div style='padding: 40px; background: #fff;'>
                      <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                          <tbody>
                              <tr>
                                  <td><b>$fname $lname</b>
                                      <p style='margin-top:0px;'>$gen_time</p>
                                  </td>
                                  <td align='right' width='100'> $gen_date </td>
                              </tr>
                              <tr>
                                  <td colspan='2' style='padding:20px 0; border-top:1px solid #f6f6f6;'>
                                      <div>
                                          <table width='100%' cellpadding='0' cellspacing='0'>
                                              <tbody>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;'>First Name</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;' align='right'>$fname</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Middle Name</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$mname</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Last Name</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$lname</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Email</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$email</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Phone</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$phone</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Address</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$address</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>City</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$city</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Country</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$country</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Zip/Postal Code</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$zip</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Bsc - Foundation</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$bsc</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Msc - Foundation</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$msc</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Phd - Foundation</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$phd</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Distance</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$distance</td>
                                                  </tr>
                                                  <tr>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;'>Year of Entry</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0;' align='right'>$yoe</td>
                                                  </tr>
                                                  <tr class='total'>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' width='80%'>Course</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' align='right'>$course</td>
                                                  </tr>
                                                  <tr class='total'>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' width='80%'>Country of Choice</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' align='right'>$study_country</td>
                                                  </tr>
                                                  <tr class='total'>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' width='80%'>School</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' align='right'>$school</td>
                                                  </tr>
                                                  <tr class='total'>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' width='80%'>Additinal Information</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' align='right'>$add_info</td>
                                                  </tr>
                                                  <tr class='total'>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' width='80%'>Question?</td>
                                                      <td style='font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;' align='right'>$question</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan='2'>
                                      <center>
                                          <!-- <a href='javascript: void(0);' style='display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #2962FF; border-radius: 60px; text-decoration:none;'>Login</a> -->
                                      </center>
                                      <b>- Thanks (BFSL Email Robot)</b> </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  <div style='text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px'>
                      <p> Powered by BFSL
                          <br>
                          <a href='javascript: void(0);' style='color: #b2b2b5; text-decoration: underline;'>Unsubscribe</a> </p>
                  </div>
              </div>
          </div>
      </body>
      
      </html>";
      $mail->AltBody = "This is the plain text version of the email content";
      // mail system
      if(!$mail->send()) 
      {
    echo header("Location: ../msg1.php");
      } else
      {
    echo header("Location: ../msg1.php");
        
      }
        
      }
    // SEND AN EMAIL
    // THEN TRY THE MAIL OF INSITUTION.
} else {
    // echo error
    $_SESSION["type"] = "error";
    echo header("Location: ../msg2.php");
}
} else {
    // echo registration has been processed already.
    $_SESSION["type"] = "exist";
    echo header("Location: ../msg3.php");
}
?>