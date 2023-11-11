<?php

$text1 = "Bureau et Agence Ernest propose ses services dans le domaine de l'expertise immobilière pour tous types de biens immobiliers, qu'il s'agisse de terrains, d'immeubles ou d'immeubles, avec des produits qui s'adaptent à tous les budgets, en toute sécurité et en toute sérénité.";
$text2 = "L'achat d'un bien immobilier entraîne de nombreux frais et taxes que l'acheteur doit payer et le calcul de ces taxes n'est pas aisé. Bureau et Agence Ernest propose des conseils fiscaux personnalisés et une assistance fiscale proactive. Au service de nos clients, nous mettons notre expérience et nos connaissances en conseil fiscal et apportons toutes les solutions nécessaires et indispensables pour l'administration fiscale.";
$text3 = "Les démarches semblent compliquées et les démarches paraissent lourdes, Bureau et Agence Ernest prend en charge ces démarches en votre nom auprès de l'Agence Nationale pour la Préservation du Patrimoine Immobilier
Notre objectif est de permettre à nos clients d'accéder à tous ces documents auxquels ils ont droit en toute sérénité, confidentialité et sécurité.
";

$immobilier = mb_substr($text1, 0, 120);
$fiscaux = mb_substr($text2, 0, 120);
$preservation = mb_substr($text3, 0, 120);
?>

<section id="services" class="bg-gray-900 text-white py-12">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
            <h2 class="text-3xl font-bold sm:text-4xl">Nos Services</h2>

            <p class="mt-4 text-gray-300">
                Nous fournissons une variété des services immobiliers aux acteurs privés, publics et institutionnels (investisseurs, promoteurs, assurances, banques, particuliers et utilisateurs immobiliers).
        </div>

        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-orange-500/10 hover:shadow-orange-500/10" href="#">
                <span class="material-symbols-outlined text-4xl">
                    apartment
                </span>

                <h2 class="mt-4 text-xl font-bold text-white">Services immobiliers</h2>

                <p class="mt-1 text-sm text-gray-300">
                    <?php echo "$immobilier"; ?>...
                </p>
            </a>

            <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-orange-500/10 hover:shadow-orange-500/10" href="#">
                <span class="material-symbols-outlined text-4xl">
                    account_balance
                </span>

                <h2 class="mt-4 text-xl font-bold text-white">Services fiscaux</h2>

                <p class="mt-1 text-sm text-gray-300">
                    <?php echo "$fiscaux"; ?>...
                </p>
            </a>

            <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-orange-500/10 hover:shadow-orange-500/10" href="#">
                <span class="material-symbols-outlined text-4xl">
                    real_estate_agent
                </span>

                <h2 class="mt-4 text-xl font-bold text-white">La préservation immobilière </h2>

                <p class="mt-1 text-sm text-gray-300">
                    <?php echo "$preservation"; ?>...
                </p>
            </a>

        </div>

        <div class="mt-12 text-center">
            <a href="#" class="btn2 px-12">
                Contactez-Nous
            </a>
        </div>
    </div>
</section>