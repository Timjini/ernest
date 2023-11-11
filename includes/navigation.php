<nav class="fixed w-full z-20 top-0 left-0 " id="bar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <!-- img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo"-->
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Agence Ernest</span>
        </a>
        <div class="flex md:order-2">
            <div>
                <span class="hidden lg:block my-4 mr-2 link"> (+212) 664-151050 </span>
            </div>
            <button type="button" class="btn2 hidden md:block ml-12">Consultation</button>
            <button id="burger" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="material-symbols-outlined" style="color:#fff;">
                    menu
                </span>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:block md:w-auto md:order-1" id="navbar-sticky">
            <ul class=" mobile-nav flex flex-col bg-white  md:bg-transparent p-4 md:p-0 mt-4 text-lg md:text-medium gap-5 md:gap-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 ">
                <li>
                    <a href="#" class="link block py-2 pl-3 pr-4  rounded ">À propos</a>
                </li>
                <li>
                    <a href="/#services" class="link block py-2 pl-3 pr-4  rounded ">Services</a>
                </li>
                <li>
                    <a href="/pages/contactez_nous.php" class="link block py-2 pl-3 pr-4  rounded ">Contactez-Nous</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const navigation = document.getElementById('bar')
    const twentyFivePrecentHeight = 0.25 * document.body.scrollHeight;

    // Add scroll event listener to the window
    window.addEventListener('scroll', function() {

        if (window.scrollY > twentyFivePrecentHeight) {
            navigation.classList.add('hidden');
        } else {
            navigation.classList.remove('hidden');
        };

        if (window.scrollY > 0) {
            navigation.classList.add('navigation-scroll');
        } else {
            navigation.classList.remove('navigation-scroll');
        }
    });
</script>