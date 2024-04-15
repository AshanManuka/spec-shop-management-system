<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Other Sale</title>
</head>

<body>
    <div class="container bg-white p-4 w-full ">

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Other <span class="text-warning">Sale</span></h3>
            </div>

            <div class="col-md-6">
                <div class="flex items-center ">
                    <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                        placeholder="Search Customer ">
                    <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                        <i class="fa-solid fa-notes-medical"></i> </button>
                </div>



            </div>


        </div>

        <!-- ======================================================================================================== -->


        <form id="otherSalePage">

            <div class="grid grid-cols-12 gap-2 ">
                <!-- First row -->
                <div class="col-span-12  p-3 border-2 border-gray-200">

                    <!-- 1st row 1st div -->
                    <div class="grid grid-cols-12 gap-4 ">


                        <div class="  col-span-3  ">
                            <label class="form-label text-xs font-medium">Search Item:</label>

                            <div class="flex items-center  ">

                                <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                                    placeholder="Search.. ">
                                <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                                    <i class="fa-solid fa-notes-medical"></i> </button>
                            </div>
                        </div>



                        <div class="  col-span-1 ">
                            <label for="invoiceNo" class="form-label text-xs font-medium">Invoice No:</label>
                            <input type="text" class="form-control h-10" id="invoiceNo" name="invoiceNo" required>
                        </div>

                        <div class="  col-span-2 ">
                            <label for="date" class="form-label text-xs font-medium text-center mt-2">Date:</label>
                            <input type="date" class="form-control h-10 " id="date" name="date">
                        </div>

                        <div class="  col-span-2 ">
                            <label for="cusNo" class="form-label text-xs font-medium">Customer No:</label>
                            <select class="form-select h-10" id="cusNo" name="cusNo" required>
                                <!-- <option value="">Select an option</option> -->
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="  col-span-4 gap-1 ">
                            <label for="cusName" class="form-label text-xs font-medium">Customer Name:</label>
                            <div class="flex">
                                <select class="form-select h-10" id="payType" name="payType" required>
                                    <!-- <option value="">Select an option</option> -->
                                    <option value="Cash">Cash</option>
                                    <option value="Card">Card</option>
                                    <option value="Online Transfer">Online Transfer</option>
                                </select>
                                <input type="text" class="form-control h-10" id="cusName" name="cusName" required>
                            </div>


                        </div>


                    </div>
                </div>


                <!-- Second row -->
                <div class="col-span-12  p-2  ">
                    <div class="grid grid-cols-12 gap-3 ">

                        <!-- second row 1st col -->

                        <div class="  col-span-3 p-2 text-start border-2 border-gray-200 ">

                            <div class="flex mt-3 ">
                                <label for="billTotal" class="font-semibold text-sm">Bill Total:</label>
                                <input type="text" class="form-control h-8" id="billTotal" name="billTotal" required>

                            </div>

                            <div class="flex mt-2 ">
                                <label for="discountRs" class="form-label font-semibold text-sm">Dis Rs:</label>
                                <input type="text" class="form-control h-8" id="discountRs" name="discountRs">

                            </div>

                            <div class="flex mt-2 ">
                                <label for="payableRs" class="font-semibold text-sm">Payable Rs:</label>
                                <input type="text" class="form-control  h-8" id="payableRs" name="payableRs">

                            </div>

                            <div class="flex mt-2 ">
                                <label for="paid" class="font-semibold text-sm">Paid:</label>
                                <input type="text" class="form-control h-8 ml-2" id="paid" name="paid" required>

                            </div>

                            <div class="flex mt-3 ">
                                <label for="dueBalance" class="font-semibold text-sm">Due Balance:</label>
                                <input type="text" class="form-control h-8 ml-2" id="dueBalance" name="dueBalance"
                                    required>

                            </div>

                        </div>

                        <!-- second row 2nd col -->

                        <div class="col-span-9  w-full p-2">
                            <!-- 1st row -->
                            <div class="grid grid-cols-12 gap-1 ">

                                <div class="col-span-2">
                                    <label for="code" class="form-label text-xs font-medium">Code:
                                    </label>
                                    <select class="form-select h-10" id="code" name="code" required>
                                    <!-- <option value="">Select an option</option> -->
                                    <option value="200">200</option>
                                    <option value="100">100</option>
                                    <option value="300">300</option>
                                </select>
                                    <input type="text" class="form-control h-10" id="code" name="code" required>

                                </div>

                                <div class="col-span-4">
                                    <label for="description" class="form-label">Description:</label>
                                    <select class="form-select h-10" id="code" name="code" required>
                                    <!-- <option value="">Select an option</option> -->
                                    <option value="SELECTION">SELECTION</option>
                                    <option value="SELECTION">SELECTION</option>
                                    <option value="SELECTION">SELECTION</option>
                                </select>
                                </div>

                                <div class="col-span-2">
                                    <label for="qty" class="form-label text-xs font-medium">Qty:</label>
                                    <input type="text" class="form-control" id="qty" name="qty" required>
                                </div>

                                <div class="col-span-2">
                                    <label for="price" class="form-label text-xs font-medium">Price:</label>
                                    <input type="text" class="form-control" id="price" name="price" required>
                                </div>

                                <div class="col-span-2 ">
                                    <label for="discount" class="form-label">Discount:</label>
                                    <input type="text" class="form-control w-full" id="discount" name="discount">
                                </div>

                                <!-- Table -->
                                <div class="col-span-12 mt-2">
                                    <table class="table table-bordered custom-table">
                                        <thead class="text-xs">
                                            <tr>
                                                <th>#</th>
                                                <th>Item Code</th>
                                                <th>Description</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Discount</th>
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

                       
                    </div>

                </div>


                <!-- 3rd row -->
                <div class="col-span-12  p-1 ">
                    <div class="grid grid-cols-12 gap-2 ">

                        <!-- second row 1st col -->

                        <div class="  col-span-3 p-2 text-start border-2 border-gray-200 h-30">
                        <label  class="font-semibold text-sm flex justify-center text-center">Hold No</label>
                            <div class=" ">
                                <label for="billTotal" class="font-semibold text-sm">Bill No:</label>
                                <input type="text" class="form-control h-8" id="billTotal" name="billTotal" required>
                            </div>
                        </div>

                        <!-- second row 2nd col -->

                        <div class="col-span-9  w-full ">
                            <!-- 1st row -->

                                    <table class="table table-bordered custom-table">
                                        <thead class="text-xs">
                                            <tr>
                                                <th>#</th>
                                                <th>Bill No</th>
                                                <th>Net</th>
                                                <th>Pay Type</th>
                                                <th>Paid</th>
                                                <th>Balance</th>
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


            </div>


            <!-- ======================================================================================================================= -->
            <div class="grid grid-cols-12">


                <div class="col-span-12  text-end pt-1">
                    <div class=" gap-4">
                        <button type="submit" class="bg-white text-black p-1 pl-2 pr-2 font-semibold border-2 border-black" name="submit">SMS
                            </button>
                            <button type="submit" class="bg-blue-600 text-white p-1  font-semibold ml-3" name="submit">Print
                            </button>
                       
                        <button type="submit" class="bg-black text-white p-1 font-semibold ml-3" onclick="exit()"
                            name="submit">Exit</button>
                    </div>
                </div>
            </div>
            <!-- ======================================================================================================== -->


        </form>

    </div>



   

    <script>
    function clearForm() {
        document.getElementById("otherSalePage").reset();
    }

    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>