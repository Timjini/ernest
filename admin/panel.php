<?php
// admin_panel.php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ../auth/login.php'); // Redirect if not logged in
    exit();
}

require('../config/db_connection.php'); // Establish database connection

// Fetch and display user data from the 'users' table
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php include('../config/head.php'); ?>
    <?php include('../config/config.php'); ?>
</head>

<body>
    <div class="flex h-screen">
        <?php include('../components/sidebar.php') ?>
        <div class="flex-1 ml-64 px-4 py-6">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-8">
                <div class="flex items-center justify-between py-4  ">
                    <div>
                        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500  border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5   dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                            <span class="sr-only">Action button</span>
                            Action
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownAction" class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44  dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownActionButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600  dark:hover:text-white">Delete User</a>
                            </div>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                    </div>
                </div>
                <?php include('../members/members_data.php'); ?>
            </div>

        </div>
    </div>

    <script>
        let icon1 = document.getElementById("icon1");
        let menu1 = document.getElementById("menu1");
        const showMenu1 = (flag) => {
            if (flag) {
                icon1.classList.toggle("rotate-180");
                menu1.classList.toggle("hidden");
            }
        };
        let icon2 = document.getElementById("icon2");

        const showMenu2 = (flag) => {
            if (flag) {
                icon2.classList.toggle("rotate-180");
            }
        };
        let icon3 = document.getElementById("icon3");

        const showMenu3 = (flag) => {
            if (flag) {
                icon3.classList.toggle("rotate-180");
            }
        };

        let Main = document.getElementById("Main");
        let open = document.getElementById("open");
        let close = document.getElementById("close");

        const showNav = (flag) => {
            if (flag) {
                Main.classList.toggle("-translate-x-full");
                Main.classList.toggle("translate-x-0");
                open.classList.toggle("hidden");
                close.classList.toggle("hidden");
            }
        };
    </script>




</body>

</html>