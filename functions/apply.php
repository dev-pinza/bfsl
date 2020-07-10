<?php
include("db/connect.php");
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
    echo header("Location: ../msg1.php");

    // SEND AN EMAIL
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