<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4 w-2/3 mt-5">
        <div class="grid grid-cols-12  gap-4 p-5 shadow-xl">
            <div class="col-span-5 justify-center">
                <img src="../../app/asserts/loginImg.jpg" alt="Image" class="w-full">
            </div>
            <div class="col-span-7 justify-center p-8">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="branch" class="font-semibold">Select Branch:</label>
                        <select name="branch" id="branch" class="form-select mt-1 block w-full rounded-md shadow-sm h-10" >
                            <?php foreach ($branches as $branch): ?>
                            <option value="<?php echo $branch; ?>"><?php echo $branch; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="userName" class="font-semibold">Select Username:</label>
                        <select name="userName" id="userName" class="form-select mt-1 block w-full rounded-md shadow-sm h-10">
                            <?php foreach ($usernames as $username): ?>
                            <option value="<?php echo $username; ?>"><?php echo $username; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="password" class="font-semibold">Password:</label>
                        <input type="password" name="password" id="password" class="form-input mt-1 block w-full rounded-md shadow-sm h-10" required>
                    </div>

                    <div class="form-btn mt-3">
                        <input type="submit" value="Login" name="login" class="btn btn-primary w-full mt-4 px-4 py-2 bg-blue-500 text-white rounded-md transition duration-300 ease-in-out hover:bg-blue-600 h-10">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('branch').addEventListener('change', function() {
            var selectedBranch = this.value;
            var usernameDropdown = document.getElementById('userName');

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var usernames = JSON.parse(xhr.responseText);
                    usernameDropdown.innerHTML = '';

                    usernames.forEach(function(username) {
                        var option = document.createElement('option');
                        option.value = username;
                        option.text = username;
                        usernameDropdown.appendChild(option);
                    });
                }
            };

            xhr.open('GET', 'get_usernames.php?branch=' + selectedBranch, true);
            xhr.send();
        });
    </script>
</body>

</html>
