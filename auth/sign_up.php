<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kickboxing Morocco - Agadir</title>
    <?php include('../includes/header.php'); ?>
    <?php include('../config/config.php'); ?>
</head>

<body class="bg-gray-200">
    <section class="relative flex flex-wrap lg:h-screen lg:items-center text-gray-800">
        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2 hidden lg:block">
            <img alt="Kickboxing Morocco" src="https://images.unsplash.com/photo-1602343168117-bb8ffe3e2e9f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHJlYWwlMjBlc3RhdGV8ZW58MHwxfDB8fHww" class="absolute inset-0 h-full w-full object-cover" style=" filter: grayscale(100%);" />
        </div>
        <div class="w-full px-4 sm:px-6 lg:w-1/2 lg:px-8 ">
            <div class="mx-auto max-w-lg text-center">
                <!-- <img src="../public/images/kbm.png" class="logo mx-auto" alt="kickboxing-morocco-logo" /> -->
                <h1 class="text-2xl font-bold sm:text-3xl">Connectez-vous à Agence Ernest Maroc!</h1>

                <p class="mt-4 text-gray-500 dark:text-white hidden">

                </p>
            </div>
            <form action="signup_process.php" method="post" class="mt-12" enctype="multipart/form-data">
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Phone -->
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-600">Phone</label>
                    <input type="text" name="phone" id="phone" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Type (Enum) -->
                <div class="mb-4">
                    <label for="type" class="block text-sm font-medium text-gray-600">User Type</label>
                    <select name="type" id="type" class="mt-1 p-2 w-full border rounded-md">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" name="username" id="username" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- First Name -->
                <div class="mb-4">
                    <label for="first_name" class="block text-sm font-medium text-gray-600">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-medium text-gray-600">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <!-- Avatar (File Upload) -->
                <div class="mb-4">
                    <label for="avatar" class="block text-sm font-medium text-gray-600">Avatar</label>
                    <input type="file" name="avatar" id="avatar" class="mt-1">
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Sign Up</button>
                </div>
            </form>

        </div>
    </section>

    <script src="../scripts/auth.js"></script>

</body>

</html>