<!DOCTYPE html>
<?php
$locale = "fr_FR"; // Set the default locale (French in this case)

if (isset($_GET['lang'])) {
    $locale = $_GET['lang'];
}

putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);

bindtextdomain("messages", "./locale");
textdomain("messages");

?>
<html lang="<?php echo strtolower(substr($locale, 0, 2)); ?>" <?php if ($locale == "ar_AR") echo " dir='rtl'"; ?> data-theme="light">

<head>
    <!-- Include the necessary PHP code to set the locale and translation domain -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Ernest - Agadir</title>

</head>

<body>

    <!-- Language Switcher Dropdown -->
    <select onchange="changeLanguage(this.value)">
        <option value="fr_FR" <?php if ($locale === 'fr_FR') echo 'selected'; ?>>Français</option>
        <option value="en_US" <?php if ($locale === 'en_US') echo 'selected'; ?>>English</option>
        <option value="ar_AR" <?php if ($locale === 'ar_AR') echo 'selected'; ?>>العربية</option>
    </select>

    <!-- Your page content -->
    <div class="hero">
        <div class="flex flex-col justify-center px-12 pt-48 md:px-24 md:py-72 xl:p-96 text-white">
            <h2 class="text-4xl font-bold mb-4"><?php echo _("Bureau et Agence Ernest"); ?></h2>
            <p class="text-xl"><?php echo _("Leader de l’expertise Immobilière à Agadir"); ?></p>
            <button class="btn my-5 w-48"><?php echo _("Cliquez ici"); ?></button>
        </div>
    </div>

    <script>
        // JavaScript function to change the language when the dropdown is used
        function changeLanguage(lang) {
            window.location.href = window.location.pathname + "?lang=" + lang;
        }
    </script>

</body>

</html>