<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Prescription Invoice</title>
</head>

<body>
    <div class="container bg-white p-4 w-full">

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Prescription <span class="text-warning">Invoice</span></h3>
            </div>

            <!-- <div class="col-md-6">
                <div class="flex items-center ">
                    <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                        placeholder="Search Prescription Invoice">
                    <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                        <i class="fa-solid fa-notes-medical"></i> </button>
                </div>



            </div> -->
        </div>

        <!-- ======================================================================================================== -->



        <form id="goodRecivePage">
            <div class="grid grid-cols-12 gap-1">
                <!-- First row -->
                <div class="col-span-12 p-2 border-2 border-gray-200">

                    <div class="grid grid-cols-12 gap-2 mt-3">

                        <div class="  col-span-2 gap-2 border-2 border-gray-200 p-2">
                            <div>
                                <label for="regNo" class="form-label text-xs font-medium">Reg No:</label>
                                <input type="text" class="form-control h-10" id="regNo" name="regNo" required>
                            </div>

                            <div class="mt-2">
                                <div class="flex items-center ">
                                    <input type="text" class="form-control bg-white rounded-full shadow-xl" id="search"
                                        placeholder="Search Patient">
                                    <button class="ml-4 text-yellow-500 text-xl hover:text-blue-700">
                                        <i class="fa-solid fa-notes-medical"></i> </button>
                                </div>
                            </div>

                        </div>

                        <div class="  col-span-2 gap-2 border-2 border-gray-200 p-2">
                            <label for="option" class="form-label text-xs font-medium">Options</label>

                            <div class="">
                                <input type="radio" id="prescription" name="option" value="user"
                                    class="mr-2 font-semibold " checked>
                                <label for="prescription" class="font-semibold text-sm">Prescription</label>
                            </div>

                            <div class="mt-2">
                                <input type="radio" id="invoice" name="option" value="user" class="mr-2 font-semibold ">
                                <label for="invoice" class="font-semibold text-sm">Invoice</label>
                            </div>
                        </div>


                        <div class="  col-span-2 gap-2 border-2 border-gray-200 p-2">
                            <div class="text-center">
                                <label class="form-label text-sm font-medium uppercase text-blue-600">Mrs
                                    B.kusumalatha</label>
                                <div>
                                    <label
                                        class="form-label text-sm font-medium uppercase text-blue-600">Address</label>
                                </div>

                                <label class="form-label text-sm font-medium">071236477</label>
                            </div>



                        </div>

                        <div class="  col-span-2 gap-2">
                            <div class="border-2 border-gray-200">
                            <label for="date" class="form-label text-lg flex justify-center font-bold text-center mt-2 text-green-700">2990</label>

                            </div>

                            <div class="flex mt-3">
                            <label  class="form-label text-sm font-medium  text-center mt-2">Officer</label>

                            <select class="form-select h-10 ml-1"  name="officer" required>
                                    <!-- <option value="">Select an option</option> -->
                                    <option value="Gayan">Gayan</option>
                                    <option value="Heshan">Heshan</option>
                                    <option value="Janu">Janu</option>
                                </select>   
                            </div>
                                                  
                        </div>

                        <div class=" flex col-span-4 gap-2">
                        <table class="table table-bordered custom-table">
                            <thead class="text-xs">
                                <tr>
                                    <th>Date</th>
                                    <th>Job No</th>
                                    


                                </tr>
                            </thead>
                            <tbody class="text-xs">
                                <tr>
                                    <td>19/3/2024</td>
                                    <td>2665</td>
                                </tr>
                                <tr>
                                    <td>19/3/2024</td>
                                    <td>2665</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

               <div id="option">

               </div>


            </div>


            <!-- ======================================================================================================================= -->
            <div class="grid grid-cols-12 gap-2 mt-3">


                <div class="col-span-6  text-end pt-3">
                    <div class="mb-3  gap-3">
                        <label for="submit" class="form-label"></label>
                        <button type="submit" class="bg-blue-600 text-white p-2 font-semibold" name="submit">Bill
                            Close</button>
                        <button type="submit" class="bg-yellow-500 text-white p-2 font-semibold"
                            onclick="clearForm()">Clear</button>
                        <button type="submit" class="bg-green-600 text-white p-2 font-semibold"
                            name="submit">Update</button>
                        <button type="submit" class="bg-red-500 text-white p-2 font-semibold"
                            name="submit">Delete</button>
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
        document.getElementById("prescriptionForm").reset();
    }

    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>