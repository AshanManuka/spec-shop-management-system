<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 <title>item master</title>

   
</head>

<body>
    <div class="container bg-white p-4 w-full">
        <?php
        
        require_once "../controllers/db.php";
        require_once "../controllers/categoryController.php";
        require_once "../controllers/departmentController.php";
        require_once "../controllers/supplierController.php";

        $departmentList = getAllDepartment($conn);
        $categoryList = getAllCategory($conn);
        $supplierList = getAllSupplier($conn);


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST["save"])) {
                saveItem($conn);
            }
        } 


        function saveItem($conn){
            
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


            require_once '../controllers/itemController.php';

            if (empty($itemCode) || empty($description) || empty($department) || empty($cost) || empty($salesPrice) || empty($category) || empty($supplier) || empty($profit) || empty($discountRs) || empty($wholesale) || empty($location) || empty($maxStockQty) || empty($minStockQty)) {
                echo '<script>alert("All fields required..!");</script>';
            }else{
                $saved = saveItemData($conn, $itemCode, $barcode, $description, $department, $category, $supplier, $cost, $profit, $salesPrice, $discountRs, $wholesale, $location, $maxStockQty, $minStockQty);

                if ($saved === true) {
                    echo '<script>alert("Item added successfully..!");</script>';
                } else {
                    echo '<script>alert("Something went wrong..!");</script>';
                }
            }
        }

        
        
        
        
        ?>

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Item <span class="text-warning">Master</span></h3>
            </div>

            <div class="col-md-6">
                <div class="flex items-center ">
                    <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                        placeholder="Search...">
                    <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                        <i class="fa-solid fa-notes-medical"></i> </button>
                </div>



            </div>
        </div>

        <!-- ======================================================================================================== -->
        <form id="itemMasterForm" action="itemMaster.php" method="post" class="p-1">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="itemCode" class="form-label">Item Code:</label>
                        <input type="text" class="form-control" id="itemCode" name="itemCode" required>
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="barcode" class="form-label">Barcode:</label>
                        <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                </div>



            </div>

            <div class="row mt-2">

                <div class="col-md-4">

                    <div class="mb-3">
                        <label for="department" class="form-label">Department:</label>
                        <select class="form-control rounded-md border-2 border-gray-200 p-2 w-full" name="department" id="department">
                                <option value="" disabled selected>Select department:</option>
                                <?php
                                foreach ($departmentList as $department) {
                                    echo '<option value="' . $department['id'] . '">' . $department['name'] . '</option>';
                                }
                                ?>
                            </select>
                    </div>

                </div>



                <div class="col-md-4">



                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <select class="form-control rounded-md border-2 border-gray-200 p-2 w-full" name="category" id="category">
                                <option value="" disabled selected>Select category:</option>
                                <?php
                                foreach ($categoryList as $category) {
                                    echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                                }
                                ?>
                            </select>
                    </div>






                </div>

                <div class="col-md-4">

                    <div class="mb-3">
                        <label for="supplier" class="form-label">Supplier:</label>
                        <select class="form-control rounded-md border-2 border-gray-200 p-2 w-full" name="supplier" id="supplier">
                                <option value="" disabled selected>Select supplier:</option>
                                <?php
                                foreach ($supplierList as $supplier) {
                                    echo '<option value="' . $supplier['code'] . '">' . $supplier['name'] . '</option>';
                                }
                                ?>
                            </select>
                    </div>

                </div>


            </div>

            <div class="row mt-2">





                <div class="col-md-3">
                    <div class="mb-3 w-full ">
                        <label for="cost" class="form-label">Cost:</label>
                        <input type="number" class="form-control w-full " id="cost" name="cost">
                    </div>



                </div>

                <div class="col-md-3">
                    <div class="mb-3 w-full">
                        <label for="profit" class="form-label">Profit:</label>
                        <input type="number" class="form-control w-full" id="profit" name="profit">
                    </div>

                </div>

                <!-- ======================================================== -->
                <div class="col-md-3">
                    <div class="mb-3 w-full">
                        <label for="salesPrice" class="form-label">Sales Price (Cash):</label>
                        <input type="text" class="form-control w-full" id="salesPrice" name="salesPrice">
                    </div>

                </div>

                <!-- ================================================================== -->
                <div class="col-md-3">
                    <div class="mb-3 w-full">
                        <label for="discountRs" class="form-label">Discount Rs:</label>
                        <input type="text" class="form-control w-full" id="discountRs" name="discountRs">
                    </div>

                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-3">
                    <div class="mb-3 w-full">
                        <label for="wholesale" class="form-label">Wholesale:</label>
                        <input type="text" class="form-control w-full" id="wholesale" name="wholesale">
                    </div>


                </div>

                <div class="col-md-3">
                    <div class="mb-3 w-full">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" class="form-control w-full" id="location" name="location">
                    </div>



                </div>

                <div class="col-md-3">
                    <div class="mb-3 w-full">
                        <label for="maxStockQty" class="form-label">Maximum Stock Quantity:</label>
                        <input type="text" class="form-control w-full" id="maxStockQty" name="maxStockQty">
                    </div>


                </div>

                <div class="col-md-3">

                    <div class="mb-3 w-full">
                        <label for="minStockQty" class="form-label">Minimum Stock Quantity:</label>
                        <input type="text" class="form-control w-full" id="minStockQty" name="minStockQty">
                    </div>
                </div>
            </div>




            <div class="row mt-2">
                <div class="col-md-12">
                <div class="mb-3 d-flex justify-content-end gap-3">
                        <label for="submit" class="form-label"></label>
                        <button type="submit" class="bg-blue-600 text-white p-2 font-semibold" name="save">Submit</button>
                        <button type="submit" class="bg-yellow-500 text-white p-2 font-semibold" onclick="clearForm()">Clear</button>
                        <button type="submit" class="bg-green-600 text-white p-2 font-semibold" name="update">Update</button>
                        <button type="submit" class="bg-red-500 text-white p-2 font-semibold" name="delete">Delete</button>
                        <button type="submit" class="bg-black text-white p-2 font-semibold" onclick="exit()"
                            name="submit">Exit</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- ======================================================================================================== -->


    </div>

    <script>
    function clearForm() {
        document.getElementById("itemMasterForm").reset();
    }

    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>