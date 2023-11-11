<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez Nous</title>
    <?php include('../includes/header.php'); ?>
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/mobile.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    <?php include('../includes/navigation.php'); ?>

    <div class="page_hero h-96  w-full flex flex-row">
        <div class=" mx-auto my-auto">
            <h1 class="text-2xl text-white">Contactez Nous</h1>
        </div>

    </div>
    <h2 class="text-center text-3xl font-bold sm:text-4xl pt-12">Contactez Nous</h2>
    <div class="container mx-auto p-5 md:px-48 md:pb-10 pt-10 flex flex-wrap ">
        <!-- Contact Form -->
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
            <form action="#" method="post" class="space-y-4">
                <div class="flex flex-row mx-auto gap-10">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Jamal Ibrahimi" class="mt-1 p-2 w-full border rounded-md" required>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Sujet</label>
                        <input type="email" id="email" name="email" placeholder="Loyer journalier " class="mt-1 p-2 w-full border rounded-md" required>
                    </div>
                </div>

                <div class="flex flex-row mx-auto  gap-10">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Telephone</label>
                        <input type="text" id="name" name="name" placeholder="+212 541 552 6785" class="mt-1 p-2 w-full border rounded-md" required>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="email@example.com" class="mt-1 p-2 w-full border rounded-md" required>
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="votre message ici" class="mt-1 p-2 w-full border rounded-md" required></textarea>
                </div>

                <button type="submit" class="btn2 px-10">Envoyer</button>
            </form>
        </div>

        <!-- Address and Phone -->
        <div class="w-full lg:w-1/2 md:px-10 mt-5">
            <p class="mb-2 text-xl">N 20 IMM Al AMAL, Bd Hassan II</p>
            <p class="mb-2 text-xl">Agadir, Maroc</p>
            <div class="mb-4 text-xl flex flex-row gap-2">
                <span class="material-symbols-outlined">
                    phone_in_talk
                </span>
                <p class="text-xl">(+212) 664-151050</p>

            </div>
        </div>

    </div>

    <!-- Google Map (replace with your own map) -->
    <div class="h-96 overflow-hidden rounded-md mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13762.98344947122!2d-9.593869!3d30.4149515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b73566990517%3A0x50280885ea03f6c9!2sAgence%20et%20bureau%20ernest!5e0!3m2!1sen!2str!4v1699726461338!5m2!1sen!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include('../includes/footer.php'); ?>
</body>

</html>