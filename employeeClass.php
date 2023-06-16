<?php
class EmployeeClass{
   public function store_data($data){
    global $conn;
    $dataObj=json_decode($data);
    $firstName=$dataObj->firstName;
    $lastName=$dataObj->lastName;
    $email=$dataObj->email;
    $dob=$dataObj->dob;
    $gender=$dataObj->gender;
    $education=$dataObj->education;
    $companyName=$dataObj->companyName;
    $experiance=$dataObj->experiance;
    $salary=$dataObj->salary;

    if(empty($dataObj)){
        return;
    }
    $sql="INSERT INTO `employee`(`firstName`, `lastName`, `email`, `dob`, `gender`, `education`, `companyName`, `experiance`, `salary`) VALUES ('$firstName','$lastName','$email','$dob','$gender','$education','$companyName','$experiance','$salary')";
    if ($conn->query($sql) == false) {
        echo "Error: " . $sql . "<br>" . $conn->error;
      } else {
        echo json_encode('Employee Added Successfully');
      }
    }
    
}
?>
