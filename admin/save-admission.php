<?php
require_once "includes/db.inc.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$gender = $_POST['gender'];
$dateofbirth = $_POST['dateofbirth'];
$roll = $_POST['roll'];
$bloodgroup = $_POST['bloodgroup'];
$religion = $_POST['religion'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$class = $_POST['class'];
$section = $_POST['section'];
$admissionid = $_POST['admissionid'];
$phone = $_POST['phone'];
$shortbio = $_POST['shortbio'];
$pic = $_POST['pic'];
// echo "<pre>";
// print_r($_POST);





$sql = "INSERT INTO students (firstname, lastname, fathername, mothername, gender, dateofbirth, roll, bloodgroup, religion, email, password, class, section, admissionid, phone, shortbio, pic  ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$query = $conn->prepare($sql);
try {
    $query->execute([$firstname, $lastname, $fathername, $mothername, $gender, $dateofbirth, $roll, $bloodgroup, $religion, $email, $pass, $class, $section, $admissionid, $phone, $shortbio, $pic]);

} catch(PDOException $e) {
    echo $e->getMessage();
}

if ($query->rowCount() == 1) {
    $_SESSION['successMessage'] = "Admission saved";
} else {
    $_SESSION['errorMessage'] = "Admission not saved";
}

// print_r($_SESSION);


header("Location: all-student.php");
