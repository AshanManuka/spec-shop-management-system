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


    function searchItemByKeyword($conn, $keyword){
        $sql = "SELECT * FROM item WHERE code = ? OR description LIKE ? OR department LIKE ? OR supplier LIKE ? OR category LIKE ?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../views/index.php?error=stmtError");
            exit();
        }
    
        $searchParam = "%$keyword%";
    
        mysqli_stmt_bind_param($stmt, "sssss", $keyword, $searchParam, $searchParam, $searchParam, $searchParam);
        
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
    
    function updateItemData($conn, $itemCode, $barcode, $description, $department, $category, $supplier, $cost, $profit, $salesPrice, $discountRs, $wholesale, $location, $maxStockQty, $minStockQty){
        $sql = "UPDATE item SET barcode=?, description=?, department=?, supplier=?, category=?, cost=?, profit=?, salePrice=?, discount=?, wholesale=?, location=?, maxStockQty=?, minStockQty=? WHERE code=?;";

        $stmt = mysqli_stmt_init($conn);
        
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../views/index.php?error=stmtError");
                exit();
            }
        
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $barcode, $description, $department, $supplier, $category, $cost, $profit, $salesPrice, $discountRs, $wholesale, $location, $maxStockQty, $minStockQty, $itemCode);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        
            return true; 
    }