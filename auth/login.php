<!-- login.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <?php include('../config/config.php'); ?>
    <?php include('../includes/header.php'); ?>
</head>

<body>
    <section class="relative flex flex-wrap lg:h-screen lg:items-center text-gray-800">
        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2 hidden lg:block">
            <img alt="Kickboxing Morocco" src="https://images.unsplash.com/photo-1602343168117-bb8ffe3e2e9f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHJlYWwlMjBlc3RhdGV8ZW58MHwxfDB8fHww" class="absolute inset-0 h-full w-full object-cover" style=" filter: grayscale(100%);" />
        </div>
        <div class="w-full px-4 sm:px-6 lg:w-1/2 lg:px-8 ">
            <div class="mx-auto max-w-lg text-center">
                <!-- <img src="../public/images/kbm.png" class="logo mx-auto" alt="kickboxing-morocco-logo" /> -->
                <h1 class="text-2xl font-bold sm:text-3xl">Connectez-vous à Agence Ernest maroc Maroc!</h1>

                <p class="mt-4 text-gray-500 dark:text-white hidden">
                    Tous les athlètes doivent s'inscrire pour assister aux cours.
                </p>
            </div>
            <form id="step-1-form" class="mt-12" action="login_process.php" method="post">
                <!-- Step 1: Personal Information -->
                <div id="step-1">
                    <h2 class="text-1xl font-semibold mb-4 mb-5 ">Informations pour la connexion</h2>
                    <div>
                        <div class="grid gap-6 mb-6 md:grid-cols-1">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium ">Email</label>
                                <input type="email" name="email" class="bg-orange-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="email@example.com" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium ">Mot De Pass</label>
                                <input type="password" name="password" class="bg-orange-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="*******" required>
                            </div>

                            <button type="submit" class="btn2 bg-orange-500 w-56 mx-auto text-white p-5 rounded-lg hover:bg-gray-500">Se Connecter</button>
                        </div>
                    </div>
            </form>
        </div>
    </section>
</body>

</html>