<?php

require_once "db.php";

function searchDepartmentbyCode($conn, $searchWord){
    $sql = "SELECT * FROM department WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../views/index.php?error=stmtError");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $searchWord);
            mysqli_stmt_execute($stmt);
            $resultData = mysqli_stmt_get_result($stmt);
            $searchResults = mysqli_fetch_all($resultData, MYSQLI_ASSOC);   
            mysqli_stmt_close($stmt);

            if(empty($searchResults)){
                return 'emptyResult';
            }else{
                return $searchResults;
            }
}