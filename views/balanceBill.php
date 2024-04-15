<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Balance Bill</title>
</head>

<body>
    <div class="container bg-white p-4 w-full ">

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Balance <span class="text-warning">Payment</span></h3>
            </div>


        </div>

        <!-- ======================================================================================================== -->


        <form id="billPaymentPage">

            <div class="grid grid-cols-12 gap-2 ">
                <!-- First row -->
                <div class="col-span-12  p-3 border-2 border-gray-200">
                    <!-- 1st row 1st div -->
                    <div class="grid grid-cols-12 gap-4 mt-3">


                        <div class=" flex col-span-3 gap-2">
                            <label for="date" class="form-label text-xs font-medium text-center mt-2">Date:</label>
                            <input type="date" class="form-control h-10 " id="date" name="date">
                        </div>

                        <div class=" flex col-span-3 gap-2">
                            <label for="jobNo" class="form-label text-xs font-medium">Job No:</label>
                            <input type="text" class="form-control h-10" id="jobNo" name="jobNo" required>
                        </div>

                        <div class=" flex col-span-4 gap-2">
                            <label class="form-label text-xs font-medium">Customer:</label>
                            <label class="form-label text-xs font-bold">1079 <span
                                    class="ml-2 text-uppercase font-bold ">MRS.jayanthi KUSUMALATHA</span></label>
                        </div>

                        <div class=" flex col-span-2 gap-2">
                            <label for="number" class="form-label text-xs font-medium">0715467865</label>
                        </div>
                    </div>

                    <!-- 2nd row 1st div -->
                    <div class="grid grid-cols-12 gap-4 mt-3">


                        <div class="  col-span-2 gap-2">
                            <label for="date" class="form-label text-xs font-medium text-center mt-2">Sale Date:</label>
                            <input type="date" class="form-control h-10 " id="date" name="date">
                        </div>

                        <div class="  col-span-2 ">
                            <label for="receiptNo" class="form-label text-xs font-medium">Receipt No:</label>
                            <input type="text" class="form-control h-10" id="receiptNo" name="receiptNo" required>
                        </div>

                        <div class="  col-span-1 ">
                            <label for="invoiceNo" class="form-label text-xs font-medium">Invoice No:</label>
                            <input type="text" class="form-control h-10" id="invoiceNo" name="invoiceNo" required>
                        </div>

                        <div class="  col-span-2 ">
                            <label for="netValue" class="form-label text-xs font-medium">Net Value:</label>
                            <input type="text" class="form-control h-10" id="netValue" name="netValue" required>
                        </div>

                        <div class="  col-span-1 ">
                            <label for="return" class="form-label text-xs font-medium">Return:</label>
                            <input type="text" class="form-control h-10" id="return" name="return" required>
                        </div>

                        <div class="  col-span-2 ">
                            <label for="paid" class="form-label text-xs font-medium">Paid:</label>
                            <input type="text" class="form-control h-10" id="paid" name="paid" required>
                        </div>

                        <div class="  col-span-2 ">
                            <label for="balance" class="form-label text-xs font-medium">Balance:</label>
                            <input type="text" class="form-control h-10" id="balance" name="balance" required>
                        </div>
                    </div>
                </div>


                <!-- Second div -->
                <div class="col-span-12  p-3 border-2 border-gray-200">
                    <div class="grid grid-cols-12 gap-4 ">

                        <div class="  col-span-2 text-start">
                            <label class="text-sm font-semibold">Pay Mode</label>
                            <div class="mt-3">
                                <input type="radio" id="cash" name="payType" value="user" class="mr-2 font-semibold ">
                                <label for="cash" class="font-semibold text-sm">Cash</label>
                            </div>

                            <div>
                                <input type="radio" id="cheque" name="payType" value="user" class="mr-2 font-semibold ">
                                <label for="cheque" class="font-semibold text-sm">Cheque</label>
                            </div>

                            <div>
                                <input type="radio" id="transfer" name="payType" value="user"
                                    class="mr-2 font-semibold ">
                                <label for="transfer" class="font-semibold text-sm">Card/Transfer</label>
                            </div>

                        </div>

                        <div class="col-span-10  ">
                            <table class="table table-bordered custom-table">
                                <thead class="text-xs">
                                    <tr>
                                        <th>Job No</th>
                                        <th>Inv No</th>
                                        <th>Rec No</th>
                                        <th>Amount</th>
                                        <th>Paid</th>
                                        <th>Pay Type</th>
                                        <th>Balance</th>
                                        <th>#</th>



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

                <!-- Third div -->
                <div class="col-span-12 p-3">

                    <div class="grid grid-cols-12 gap-4 ">

                        <div class="  col-span-6  border-2 border-gray-200 relative">
                            <button type="submit"
                                class="shadow-lg p-2 font-semibold bg-white rounded-md absolute bottom-2 right-2 hover:bg-gray-400">View
                                Update</button>
                        </div>

                        <div class="  col-span-3 border-2 border-gray-200 p-2">
                            <label class="text-red-500 font-bold text-sm"> Search Patient</label>

                            <div class="flex items-center ">
                                <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                                    placeholder="Search...">
                                <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                                    <i class="fa-solid fa-notes-medical"></i> </button>
                            </div>
                        </div>

                        <div class="  col-span-3 border-2 border-gray-200 p-2">
                            <label class="text-red-500 font-bold text-sm"> Search Prescription/ Job</label>
                            <div class="flex items-center ">
                                <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                                    placeholder="Search...">
                                <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                                    <i class="fa-solid fa-notes-medical"></i> </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <!-- ======================================================================================================================= -->
            <div class="grid grid-cols-12 gap-2 mt-3">


                <div class="col-span-12  text-end pt-3">
                    <div class="mb-3  gap-3">
                        <label for="submit" class="form-label"></label>
                        <button type="submit" class="bg-blue-600 text-white p-2 font-semibold" name="submit">Bill
                            Print</button>
                        <button type="submit" class="bg-red-500 text-white p-2 font-semibold"
                            name="submit">Delete</button>
                        <button type="submit" class="bg-yellow-500 text-white p-2 font-semibold"
                            onclick="clearForm()">Clear</button>
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
        document.getElementById("billPaymentPage").reset();
    }

    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>