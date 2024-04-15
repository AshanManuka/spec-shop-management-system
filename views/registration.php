<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
    .container {
        /* width: 80%; */
        margin: 0 auto;
        /* padding: 25px; */
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    </style>
</head>

<body>
    <div class="container p-3">
        <?php
        if (isset($_POST["submit"])) {
            $user_name = $_POST["user_name"];
            $branch = $_POST["branch"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($user_name) or empty($branch) or empty($password) or empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            //    if (!filter_var($branch, FILTER_VALIDATE_EMAIL)) {
            //     array_push($errors, "Branch is not valid");
            //    }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 charactes long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            //    $sql = "SELECT * FROM users WHERE branch = '$branch'";
            //    $result = mysqli_query($conn, $sql);
            //    $rowCount = mysqli_num_rows($result);
            //    if ($rowCount>0) {
            //     array_push($errors,"Branch already exists!");
            //    }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {

                $sql = "INSERT INTO users (user_name, branch, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $user_name, $branch, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong");
                }
            }


        }
        ?>

        <div class="form-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-column">
                        <img src="../../app/asserts/loginImg2.jpg" alt="Image" class="w-full">
                    </div>
                </div>

                <div class="col-md-6">

                    <!-- <div class="d-flex justify-content-end align-items-end mt-1">
                        <a href="branch.php" class=""><i class="fas fa-plus"></i> Add Branch</a>
                    </div> -->

                    <div class="form-column text-center p-3 ">
                        <form action="registration.php" method="post" class="gap-3">
                            <div class="form-group mb-4">
                                <input type="text" class="form-control rounded-md border-2 border-gray-200 p-2 w-full"
                                    name="user_name" placeholder="User Name:">
                            </div>
                            <div class="form-group mb-4">
                                <!-- <label for="branch" class="text-start font-semibold">Branch:</label> -->
                                <select class="form-control rounded-md border-2 border-gray-200 p-2 w-full"
                                    name="branch" id="branch">
                                    <option value="" disabled selected>Select Branch:</option>
                                    <option value="branch2">Branch 2</option>
                                    <option value="branch3">Branch 3</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password"
                                    class="form-control rounded-md border-2 border-gray-200 p-2 w-full" name="password"
                                    placeholder="Password:">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password"
                                    class="form-control rounded-md border-2 border-gray-200 p-2 w-full"
                                    name="repeat_password" placeholder="Repeat Password:">
                            </div>
                            <div class="form-btn">
                                <input type="submit"
                                    class="bg-purple-700 text-white hover:bg-blue-600  font-semibold w-full p-3 rounded-md"
                                    value="Register" name="submit">
                            </div>
                        </form>
                        <!-- <div>
                            <div class="mt-3">
                                <p>Already Registered <a href="login.php">Login Here</a></p>
                            </div>
                        </div> -->
                    </div>


                </div>
            </div>
        </div>



























    </div>
</body>

</html>