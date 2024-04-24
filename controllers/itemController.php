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
            //  $sResult = array($searchResults, $selectedSupCode, $selectedSupName);
            //  return $sResult;
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

    function deleteItemData($conn,$itemCode){
        $sql = "DELETE FROM item WHERE code = ?;";
        $stmt = mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../views/index.php?error=stmtError");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $itemCode);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            return true;
    }

    $dataArray = array();
    function loadToArray($iCode, $iQty, $iDisc, $iPrice, $iAmount){
        $dataArray[] = $iCode;
        return $dataArray;
    }

    function saveGoodReciedData($conn, $selectedCmName, $selectedDate, $enteredInvoiceNo, $data) {
        $sql = "INSERT INTO goodrecieddetail (companyName, iDate, invoiceNo, itemCode, description, qty, discount, price, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../views/index.php?error=stmtError");
            exit();
        }
    
        foreach ($data as $item) {
            mysqli_stmt_bind_param($stmt, "sssssssss", $selectedCmName, $selectedDate, $enteredInvoiceNo, $item['code'], $item['desc'], $item['qty'], $item['disc'], $item['price'], $item['amount']);
            mysqli_stmt_execute($stmt);
    
            if (!updateItemDetails($conn, $item['code'], $item['qty'], $item['price'], $item['disc'], $item['amount'])) {
                // Handle the error if item details update fails
                // You can log the error, display an error message, etc.
            }
        }
    
        mysqli_stmt_close($stmt);
    
        return true;
    }
    
    function updateItemDetails($conn, $code, $qty, $price, $discount, $amount) {
        $sql = "UPDATE item SET minStockQty = ?, salePrice = ?, discount = ?, cost =?, WHERE code = ?";
                
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        }
        
        mysqli_stmt_bind_param($stmt, "dddds", $qty, $price, $discount,$amount, $code);
    
        if (!mysqli_stmt_execute($stmt)) {
            return false;
        }
    
        mysqli_stmt_close($stmt);
    
        return true; // Return true to indicate success
    }
    
    
    
    