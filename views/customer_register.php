<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>customer register</title>

    <style>

    </style>
</head>

<body>
    <div class="container bg-white p-4   w-full">
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['save'])) {
                saveCustomer();                
            }

        }

        function saveCustomer(){
            $datepicker = $_POST["datepicker"];
            $registerNo = $_POST["registerNo"];
            $name = $_POST["name"];
            $location = $_POST["location"];
            $address1 = $_POST["address1"];
            $address2 = $_POST["address2"];
            $address3 = $_POST["address3"];
            $loyaltyBarcode = $_POST["loyaltyBarcode"];
            $teleMobile = $_POST["teleMobile"];
            $teleLand = $_POST["teleLand"];
            $nic = $_POST["nic"];
            $dob = $_POST["dob"];
            $age = $_POST["age"];
            $occupation = $_POST["occupation"];
            $area = $_POST["area"];
            $familyDetails = $_POST["familyDetails"];
            $notes = $_POST["notes"];

            if(empty($datepicker) || empty($registerNo) || empty($name) || empty($location) || empty($address1) || empty($address2) || empty($address3) || empty($loyaltyBarcode) || empty($teleMobile) || empty($teleLand) || empty($nic) || empty($dob) || empty($age) || empty($occupation) || empty($area) || empty($familyDetails) || empty($notes)){
                echo '<script>alert("Input Should not be Empty..!")</script>';
            }else{
                require_once '../controllers/db.php';
                require_once '../controllers/customerController.php';

                $saved = saveCustomerData($conn, $datepicker, $registerNo, $name, $location, $address1, $address2, $address3, $loyaltyBarcode, $teleMobile, $teleLand, $nic, $dob, $age, $occupation, $area, $familyDetails, $notes);

                if($saved){
                    echo '<script>alert("Customer details Saved Successfully..!..!")</script>';
                }else{
                    echo '<script>alert("Something went wrong..!")</script>';
                }

            }
        }


        // if (isset($_POST["submit"])) {
        


        //     $errors = array();

        //     if (empty($datepicker) || empty($registerNo) || empty($name) || empty($location) || empty($address) || empty($loyaltyBarcode) || empty($teleMobile) || empty($teleLand) || empty($nic) || empty($dob) || empty($age) || empty($occupation) || empty($area) || empty($familyDetails) || empty($notes)) {
        //         array_push($errors, "All fields are required");
        //     }


        //     require_once "database.php";

        //     if (count($errors) > 0) {
        //         foreach ($errors as $error) {
        //             echo "<div class='alert alert-danger'>$error</div>";
        //         }
        //     } else {

        //         $sql = "INSERT INTO customers (date, registerNo, name, location, address1,address2,address3, loyaltyBarcode, teleMobile, teleLand, nic, dob, age, occupation, area, familyDetails, notes) 
        //     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


        //         $stmt = mysqli_stmt_init($conn);
        //         $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        //         if ($stmt) {
        //             $stmt->bind_param("sssssssssssssssss", $datepicker, $registerNo, $name, $location, $address1,$address2,$address3, $loyaltyBarcode, $teleMobile, $teleLand, $nic, $dob, $age, $occupation, $area, $familyDetails, $notes);

        //             if ($stmt->execute()) {
        //                 echo '<script>alert("Customer Register successfully.");</script>';
        //                 header("Location:customer_details.php");
        //                 exit();


        //             } else {
        //                 echo "Error: " . $stmt->error;
        //             }

        //             $stmt->close();
        //         } else {
        //             echo "Error: " . $conn->error;
        //         }
        //     }


        // }
        ?>

        <div class="row mb-2">

            <div class="col-md-6">
                <h3>Customer <span class="text-warning">Register</span></h3>
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

        <form id="customerRegistrationForm" action="customer_register.php" method="post" class="mt-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="datepicker" class="form-label">Date:</label>
                        <input type="date" class="form-control " id="datepicker" name="datepicker" required>
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="registerNo" class="form-label">Register No:</label>
                        <input type="text" class="form-control" id="registerNo" name="registerNo" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="loyaltyBarcode" class="form-label">Loyalty Barcode:</label>
                    <input type="text" class="form-control" id="loyaltyBarcode" name="loyaltyBarcode">
                </div>



            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>


                </div>
                <div class="col-md-4">

                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input class="form-control" id="address1" name="address1"></input>
                        <input class="form-control" id="address2" name="address2"></input>
                        <input class="form-control" id="address3" name="address3"></input>

                    </div>


                </div>


            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="teleMobile" class="form-label">Telephone (Mobile):</label>
                        <input type="tel" class="form-control" id="teleMobile" name="teleMobile">
                    </div>



                </div>

                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="teleLand" class="form-label">Telephone (Land):</label>
                        <input type="tel" class="form-control" id="teleLand" name="teleLand">
                    </div>

                </div>

                <!-- ======================================================== -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation:</label>
                        <input type="text" class="form-control" id="occupation" name="occupation">
                    </div>

                </div>

                <!-- ================================================================== -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="area" class="form-label">Area:</label>
                        <select class="form-select" id="area" name="area">
                            <option>Main Street</option>
                            <option>City Center</option>
                            <option>Suburban Area</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="nic" class="form-label">NIC:</label>
                        <input type="text" class="form-control" id="nic" name="nic">
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="dob" class="form-label">DOB:</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>



                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="age" class="form-label">Age (Years):</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>


                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="familyDetails" class="form-label">Family Details:</label>
                        <textarea class="form-control" id="familyDetails" name="familyDetails" rows="3"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes:</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                    </div>
                </div>
            </div>





            <div class="row">
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


    </div>

    <script>
    function clearForm() {
        document.getElementById("customerRegistrationForm").reset();
    }

    function exit() {
        window.location.href = "index.php";
    }
    </script>

</body>

</html>