<?php

    require_once "db.php";

    function saveItemData($conn, $itemCode, $barcode, $description, $department, $category, $supplier, $cost, $profit, $salesPrice, $discountRs, $wholesale, $location, $maxStockQty, $minStockQty){
            $sql = "INSERT INTO item (code, barcode, description, department, supplier, category, cost, profit, salePrice, discount, wholesale, location, maxStockQty, minStockQty) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
            $stmt = mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../views/index.php?error=stmtError");
                exit();
            }
    
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $itemCode, $barcode, $description, $department, $category, $supplier, $cost, $profit, $salesPrice, $discountRs, $wholesale, $location, $maxStockQty, $minStockQty);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
    
           return true;
            
        

    }
