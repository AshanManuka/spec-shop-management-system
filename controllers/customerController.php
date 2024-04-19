<?php

require_once "db.php";


function saveCustomerData($conn, $datepicker, $registerNo, $name, $location, $address1, $address2, $address3, $loyaltyBarcode, $teleMobile, $teleLand, $nic, $dob, $age, $occupation, $area, $familyDetails, $notes){

    $sql = "INSERT INTO customer (datepicker, registerNo, name, location, addressOne, addressTwo, addressThree, loyaltyBarcode, teleMobile, teleLand, nic, dob, age, accupation, area, familyDetails, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_stmt_init($conn);
  
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../views/index.php?error=stmtError");
        exit();
    }
    
    // Corrected data types for mysqli_stmt_bind_param
    mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $datepicker, $registerNo, $name, $location, $address1, $address2, $address3, $loyaltyBarcode, $teleMobile, $teleLand, $nic, $dob, $age, $occupation, $area, $familyDetails, $notes);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    return true;
}


function searchCustomersByKeyword($conn, $keyWord){
    $sql = "SELECT * FROM customer WHERE registerNo = ? OR nic = ? OR name LIKE ?";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../views/index.php?error=stmtError");
        exit();
    }

    $searchParam = "%$keyWord%";
    mysqli_stmt_bind_param($stmt, "sss", $keyWord, $keyWord, $searchParam);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    $searchResults = mysqli_fetch_all($resultData, MYSQLI_ASSOC);   
    mysqli_stmt_close($stmt);

    if(empty($searchResults)){
        return 'emptyResult';
    } else {
        return $searchResults;
    }
}
