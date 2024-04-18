<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Purchasing Invoice</title>
</head>

<body>
    <div class="container bg-white p-4 w-full ">

    <?php

        require_once "../controllers/db.php";
        require_once "../controllers/supplierController.php";

        //$supplierList = getAllSupplier($conn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["search"])) {
            
            $keyword = $_POST["keyword"];
   
        if(empty($keyword)){
            echo '<script>alert("Empty Field..!")</script>';
        } else {
            require_once "../controllers/goodReciveController.php";
    
            $supplierList = filterSupplier($conn, $keyword);

        }
        }
    }



    ?> 

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Purchasing <span class="text-warning">Invoice</span></h3>
            </div>

            <div class="col-md-6">
                <div class="flex items-center ">
                    <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                        placeholder="Search Purchasing Invoice">
                    <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                        <i class="fa-solid fa-notes-medical"></i> </button>
                </div>



            </div>
        </div>

        <!-- ======================================================================================================== -->


        <form id="goodRecivePage" action="goodRecive.php" method="post">
            <div class="grid grid-cols-12 gap-2">
                <!-- First row -->
                <div class="col-span-12  p-3 border-2 border-gray-200">
                    <label class="text-sm font-semibold">Our details</label>

                    <div class="grid grid-cols-12 gap-4 mt-3">
                        <div class=" flex col-span-6 gap-2">
                            <label for="grnNo" class="form-label text-xs font-medium">Our No (GRN No):</label>
                            <input type="text" class="form-control h-10" id="grnNo" name="grnNo" >
                        </div>

                        <div class=" flex col-span-6 gap-2">
                            <label for="date" class="form-label text-xs font-medium text-center mt-2">Date:</label>
                            <input type="date" class="form-control h-10 " id="date" name="date">
                        </div>
                    </div>
                </div>

                <!-- Second row -->
                <div class="col-span-12  p-3 border-2 border-gray-200">
                    <label class="text-sm font-semibold">Company details</label>
                    <div class="grid grid-cols-12 gap-4 ">
                        <div class="  col-span-3 ">
                        <div class="flex items-center mt-4">
                            <input type="text" class="form-control bg-white rounded-full shadow-xl" id="keyword" name="keyword" placeholder="Search">
                            <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700" type="submit" id="searchButton" name="search" onclick="location.reload()">
                                <i class="fa-solid fa-notes-medical"></i>
                            </button>
                        </div>

                        </div>

                        <div class="  col-span-3 gap-2">
                            <label for="companyCode" class="form-label text-xs font-medium text-center">Company Code:</label>
                                <select type="text" class="form-control h-8" id="supplier" name="supplier">
                                <?php
                                if(!empty($supplierList)){
                                    foreach ($supplierList as $supplier) {
                                        echo '<option value="' . $supplier['code'] . '">' . $supplier['code'] . '</option>';
                                    }
                                }

                                ?>

                            </select>
                 
                        </div>


                        <div class="  col-span-3 gap-2">
                            <label for="companyName" class="form-label text-xs font-medium text-center">Company
                                Name:</label>
                            <input type="text" class="form-control h-8 " id="companyName" name="companyName">
                        </div>



                        <div class="  col-span-3 gap-2">
                            <label for="invoiceNo" class="form-label text-xs font-medium text-center ">Invoice
                                No:</label>
                            <input type="text" class="form-control h-8 " id="invoiceNo" name="invoiceNo">
                        </div>
                    </div>
                </div>

                <!-- Third row -->
                <div class="col-span-12 p-3 border-2 border-gray-200">
                    <label class="text-sm font-semibold">Invoice details</label>

                    <!-- First row with 7 columns -->
                    <div class="grid grid-cols-12 gap-4 ">
                        <div class="  col-span-2">
                            <div class="flex items-center mt-4">
                                <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                                    placeholder="Search...">
                                <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                                    <i class="fa-solid fa-notes-medical"></i> </button>
                            </div>
                        </div>

                        <div class="  col-span-2 ">
                            <label for="itemCode" class="form-label text-xs">Item Code:</label>
                            <input type="text" class="form-control h-8" id="itemCode" name="itemCode" >
                        </div>

                        <div class="  col-span-3 ">
                            <label for="description" class="form-label text-xs">Description:</label>
                            <input type="text" class="form-control h-8" id="description" name="description" >
                        </div>



                        <div class="  col-span-1 ">
                            <label for="Qty" class="form-label text-xs">Qty:</label>
                            <input type="text" class="form-control w-full h-8" id="Qty" name="Qty">
                        </div>

                        <div class="  col-span-1">
                            <label for="discountRs" class="form-label text-xs">Dis Rs:</label>
                            <input type="text" class="form-control w-full h-8" id="discountRs" name="discountRs">
                        </div>

                        <div class="  col-span-1 ">
                            <label for="price" class="form-label text-xs">Price:</label>
                            <input type="text" class="form-control w-full h-8" id="price" name="price">
                        </div>

                        <div class="  col-span-2 ">
                            <label for="amount" class="form-label text-xs">Amount:</label>
                            <input type="text" class="form-control w-full h-8" id="amount" name="amount">
                        </div>
                    </div>

                    <!-- Second row with table -->
                    <div class="col-span-12 mt-2">
                        <table class="table table-bordered custom-table">
                            <thead class="text-xs">
                                <tr>
                                    <th>#</th>
                                    <th>Item Code</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Qty</th>
                                    <th>Dis%</th>
                                    <th>Price</th>
                                    <th>Amount</th>


                                </tr>
                            </thead>
                            <tbody class="text-xs">
                                <tr>
                                    <td>001</td>
                                    <td>Electronics</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Clothing</td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Furniture</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>


            <!-- ======================================================================================================================= -->
            <div class="grid grid-cols-12 gap-2 mt-3">
                <div class="col-span-6  text-start">

                    <div>
                        <label class="form-label text-blue-700 font-bold text-md">Bill Total Amount:</label>
                        <span class="text-blue-700 font-bold text-md">15000</span>
                    </div>
                    <div>
                        <label class="form-label text-red-700 font-bold text-md">Bill Status:</label>
                        <span class="text-red-700 font-bold text-md">Running</span>
                    </div>

                </div>

                <div class="col-span-6  text-end pt-3">
                    <div class="mb-3  gap-3">
                        <label for="submit" class="form-label"></label>
                        <button type="submit" class="bg-blue-600 text-white p-2 font-semibold" name="submit">Bill Close</button>
                        <button type="submit" class="bg-yellow-500 text-white p-2 font-semibold" onclick="clearForm()">Clear</button>
                        <button type="submit" class="bg-green-600 text-white p-2 font-semibold" name="submit">Update</button>
                        <button type="submit" class="bg-red-500 text-white p-2 font-semibold" name="submit">Delete</button>
                        <button type="submit" class="bg-black text-white p-2 font-semibold" onclick="exit()"
                            name="submit">Exit</button>
                    </div>
                </div>
            </div>
            <!-- ======================================================================================================== -->


</form>

    </div>


    <script>
    function clearForm() {
        document.getElementById("goodRecivePage").reset();
    }
    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>