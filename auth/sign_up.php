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
    <section class="relative flex flex-wrap lg:h-screen lg:items-center dark:bg-gray-900">
        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2 hidden lg:block">
            <img alt="Kickboxing Morocco" src="https://images.unsplash.com/photo-1546711076-85a7923432ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1965&q=80" class="absolute inset-0 h-full w-full object-cover" style=" filter: grayscale(100%);" />
        </div>
        <div class="w-full px-4 sm:px-6 lg:w-1/2 lg:px-8 ">
            <div class="mx-auto max-w-lg text-center">
                <img src="../public/images/kbm.png" class="logo mx-auto" alt="kickboxing-morocco-logo" />
                <h1 class="text-2xl font-bold sm:text-3xl dark:text-white">Inscrivez-vous à Kickboxing Maroc!</h1>

                <p class="mt-4 text-gray-500 dark:text-white">
                    Tous les athlètes doivent s'inscrire pour assister aux cours.
                </p>
            </div>
            <form id="step-1-form" class="mt-12" action="process.php" method="post" enctype="multipart/form-data">
                <!-- Step 1: Personal Information -->
                <div id="step-1">
                    <h2 class="text-1xl font-semibold mb-4 mb-5 dark:text-white">Étape 1 : Informations personnelles</h2>
                    <div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                                <input type="text" id="firstName" name="firstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hassan" required>
                            </div>
                            <div>
                                <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de famille</label>
                                <input type="text" id="lastName" name="lastName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="El Alami" required>
                            </div>
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom d'utilisateur</label>
                                <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="kbm">
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                                <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" required>
                            </div>
                            <div>
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse</label>
                                <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rue..." required>
                            </div>
                            <div>
                                <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                                <input type="text" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Agadir">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse e-mail</label>
                            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@example.com" required>
                        </div>
                        <div class="mb-6 grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                            </div>
                            <div>
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer le mot de passe</label>
                                <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                            </div>
                        </div>
                        <button type="button" id="next-1" class=" text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2 mb-2">Suivante</button>
                    </div>
                </div>


                <!-- Step 3: Confirmation -->
                <div id="step-3" class="hidden">
                    <h2 class="text-2xl font-semibold mb-4 dark:text-white">Étape 3: Documents essentiels d'athlète</h2>
                    <div>
                        <label for="discipline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nos Disciplines</label>
                        <select id="discipline" name="discipline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choisissez une discipline</option>
                            <option value="BOXE">Boxe</option>
                            <option value="KICKBOXE">Kickboxing</option>
                            <option value="MUAYTHAI">Muay-thaï</option>
                            <option value="MMA">MMA</option>
                            <option value="LUTTE">Lutte</option>
                            <option value="JUJITSU">Jujitsu</option>
                            <option value="TAEKWONDO">Taekwondo</option>
                            <option value="CROSS_TRAINING">cross training</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Photo de
                            Profile</label>
                        <input name="avatar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
                        </p>
                    </div>
                    <div class="mt-10">
                        <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Téléchargez votre CIM, Permit de conduite ou
                            Passport
                    </div>
                    <div class="mt-2 flex items-center justify-center w-full">
                        </h3>
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                                    or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" name="document" type="file" class="hidden" />
                        </label>
                    </div>
                    <div id="confirmation-message" class=" my-5">
                    </div>
                    <button type="button" id="prev-3" class=" text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
                        Précédente
                    </button>
                    <button type="submit" class="text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 mr-2 mb-2">Envoyer</button>

                </div>
            </form>
        </div>
    </section>

    <script src="../scripts/auth.js"></script>

</body>

</html>