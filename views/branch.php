<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <style>
    

    .container {
        /* width: 80%; */
        margin: 0 auto;
        /* padding: 25px; */
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

   
    </style>
</head>

<body class=" p-3">
    <div class="container bg-white mx-auto p-2 w-full">
        <?php
        if (isset($_POST["submit"])) {
            $branch_name = $_POST["branch_name"];
            $branch_code = $_POST["branch_code"];
            $errors = array();

            if (empty($branch_name) or empty($branch_code)) {
                array_push($errors, "All fields are required");
            }

            require_once "database.php";

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {

                $sql = "INSERT INTO branch ( branch_code,name) VALUES ( ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "ss", $branch_code, $branch_name);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Branch Added successfully.</div>";
                } else {
                    die("Something went wrong");
                }
            }
        }
        ?>

        <div class="grid grid-cols-2 gap-4 p-8">
            <div class="flex items-center">
                <img src="../../app/asserts/loginImg2.jpg" alt="Image" class="w-full ">
            </div>

            <div class="text-center pt-5">
                <form action="branch.php" method="post">
                    <div class="mb-4">
                        <input type="text" class="form-input rounded-md border-2 border-gray-200 p-2 w-full" name="branch_code" placeholder="Branch Code">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-input rounded-md border-2 border-gray-200 p-2 w-full" name="branch_name" placeholder="Branch Name">
                    </div>

                    <div>
                        <input type="submit" class="bg-purple-500 hover:bg-blue-500 text-black font-semibold w-full p-3 rounded-md" value="Submit" name="submit">
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</body>

</html>
