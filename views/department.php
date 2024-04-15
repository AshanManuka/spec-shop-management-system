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
    <title>department master</title>

</head>

<body class="p-4 overflow-y-hidden">
    <div class="container mx-auto bg-white p-3 shadow-xl">

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Department <span class="text-warning">Master</span></h3>
            </div>

            <div class="col-md-6">
                <div class="flex items-center">
                    <input type="text" class="form-control rounded-full shadow-xl p-2" id="search"
                        placeholder="Search...">
                    <button class="text-yellow-500 text-xl ml-4 hover:text-blue-700">
                        <i class="fa-solid fa-notes-medical"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- ======================================================================================================== -->
        <form id="departmentForm" action="department.php" method="post">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="departmentCode" class="form-label"> Code:</label>
                        <input type="text" class="form-control" id="departmentCode" name="departmentCode" required>
                    </div>
                </div>


                <div class="col-md-6">

                    <div class="mb-3">
                        <label for="department" class="form-label">Department:</label>
                        <input type="text" class="form-control" id="department" name="department" required>

                       
                    </div>

                </div>


                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="mb-3 d-flex justify-content-end gap-3">
                            <label for="submit" class="form-label"></label>
                            <button type="submit" class="bg-blue-600 text-white p-2 font-semibold" name="submit">Submit</button>
                            <button type="button" class="bg-yellow-500 text-white p-2 font-semibold"
                                onclick="clearForm()">Clear</button>
                            <button type="submit" class="bg-green-600 text-white p-2 font-semibold" name="submit">Update</button>
                            <button type="submit" class="bg-red-500 text-white p-2 font-semibold" name="submit">Delete</button>
                            <button type="submit" class="bg-black text-white p-2 font-semibold" onclick="exit()"
                            name="submit">Exit</button>
                        </div>
                    </div>
                </div>
        </form>
        <!-- ======================================================================================================== -->


        <table class="table table-bordered custom-table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Department</th>

                    <!-- <th>Update</th>
                    <th>Delete</th> -->
                </tr>
            </thead>
            <tbody>
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

    <script>
    function clearForm() {
        document.getElementById("departmentForm").reset();
    }
    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>