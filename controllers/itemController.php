<?php
require_once "itemModel.php";

if (isset($_POST["submit"])) {
    $itemCode = $_POST["itemCode"];
    $barcode = $_POST["barcode"];
    $description = $_POST["description"];
    $department = $_POST["department"];
    $category = $_POST["category"];
    $supplier = $_POST["supplier"];
    $cost = $_POST["cost"];
    $profit = $_POST["profit"];
    $salesPrice = $_POST["salesPrice"];
    $discountRs = $_POST["discountRs"];
    $wholesale = $_POST["wholesale"];
    $location = $_POST["location"];
    $maxStockQty = $_POST["maxStockQty"];
    $minStockQty = $_POST["minStockQty"];

    $errors = array();

    if (empty($itemCode) || empty($description) || empty($department) || empty($cost) || empty($salesPrice)) {
        array_push($errors, "All fields are required");
    }

    $result = addItem($itemCode, $barcode, $description, $department, $category, $supplier, $cost, $profit, $salesPrice, $discountRs, $wholesale, $location, $maxStockQty, $minStockQty);

    if ($result === true) {
        echo '<script>alert("Item added successfully.");</script>';
    } else {
        echo "Error: " . $result;
    }
}

require_once "database.php";

$sql_department = "SELECT description FROM department";
$result_department = mysqli_query($conn, $sql_department);
$departments = mysqli_fetch_all($result_department, MYSQLI_ASSOC);

$sql_category = "SELECT description FROM category";
$result_category = mysqli_query($conn, $sql_category);
$categories = mysqli_fetch_all($result_category, MYSQLI_ASSOC);

$sql_supplier = "SELECT name FROM supplier";
$result_supplier = mysqli_query($conn, $sql_supplier);
$suppliers = mysqli_fetch_all($result_supplier, MYSQLI_ASSOC);

mysqli_close($conn);


// Load the view
require_once "itemMaster.php";
?>
