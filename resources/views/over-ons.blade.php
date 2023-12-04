<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

	<style>
		@font-face {
			font-family: MinionPro;
			src: url('MinionPro-Regular.otf');
		}
		
		* {
			z-index: 10;
			font-family: MinionPro, system-ui, sans-serif !important;
		}

		body>main {
			background-image: url("images/background-black.webp");
		}

		#xl {
			height: calc(100vh - 160px);
		}
	</style>

	<script>
		function toggleMenu() {
			let menu = document.querySelector("#menu");
			let button = document.querySelector("#button");
			let nav = document.querySelector("#nav");

			if (menu.classList.contains("hidden")) {
				menu.classList.remove("hidden");
				button.innerHTML = "↟ Links ↟";
				nav.classList.remove("md:mb-28");
				nav.classList.remove("mb-12");
			} else {
				menu.classList.add("hidden");
				button.innerHTML = "↡ Links ↡";
				nav.classList.add("md:mb-28");
				nav.classList.add("mb-12");
			}
		}
	</script>

    <meta property="og:title" content="Over ons" />
    <meta property="og:description"
        content="Wim de Waal is een zeer ervaren lijstenmaker. In zijn atelier kunt u op uw gemak kennis maken met de wereld van licht en kleur." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://dewaallijsten.nl/over-ons" />
    <meta property="og:image" content="https://dewaallijsten.nl/images/pages/over.webp" />

    <title>Uw kunstwerk in goede handen!</title>
</head>

<body>
    <main class="min-h-screen w-screen text-white">

		<!-- full screen -->

		<nav id="nav" class="flex border-b-8 border-gray md:h-40 h-80 2xl:mb-0 md:mb-28 mb-12">
			<a href="/" class="">
				<img src="/images/logo.svg" alt="logo wim de waal lijstenmaker"
					class="absolute top-12 sm:top-12 sm:left-8 scale-90" />
				<div class="bg-black absolute w-60 h-16 z-0 left-[74px] top-28 -skew-y-[12deg] md:block hidden"></div>
			</a>
			<ul class="ml-auto mt-auto gap-16 text-3xl mx-16 3xl:flex hidden">
				<li class="pb-6 bg-red/30">
					<a href="./over-ons" class="w-64 py-1 block text-center bg-red">Over ons</a>
				</li>
				<li class="pb-6 bg-red/30">
					<a href="./inlijsten" class="w-64 py-1 block text-center bg-red">Inlijsten</a>
				</li>
				<li class="pb-6 bg-red/30">
					<a href="./materialen" class="w-64 py-1 block text-center bg-red">Materialen</a>
				</li>
				<li class="pb-6 bg-red/30">
					<a href="./contact" class="w-64 py-1 block text-center bg-red">Contact</a>
				</li>
			</ul>
			<ul class="mx-auto md:mr-0 md:pr-16 mt-auto gap-16 text-3xl 3xl:hidden">
				<li class="pb-6 bg-red/30">
					<button onclick="toggleMenu()" class="w-64 py-1 block text-center bg-red" id="button">↡ Links
						↡</button>
				</li>
			</ul>
		</nav>

		<!-- moblie -->

		<nav class="flex hidden 3xl:hidden" id="menu">
			<ul class=" text-3xl gap-x-16 gap-y-8 grid xl:grid-cols-4 sm:grid-cols-2 mx-auto py-16">
				<li class="pb-6 bg-red/30">
					<a href="./over-ons" class="w-64 py-1 block text-center bg-red">Over ons</a>
				</li>
				<li class="pb-6 bg-red/30">
					<a href="./inlijsten" class="w-64 py-1 block text-center bg-red">Inlijsten</a>
				</li>
				<li class="pb-6 bg-red/30">
					<a href="./materialen" class="w-64 py-1 block text-center bg-red">Materialen</a>
				</li>
				<li class="pb-6 bg-red/30">
					<a href="./contact" class="w-64 py-1 block text-center bg-red">Contact</a>
				</li>
			</ul>
		</nav>

        <!-- page -->

        <main class="2xl:grid grid-cols-2">
            <section class="flex flex-col justify-between sm:px-24 px-8">
                <main class="2xl:pt-28">
                    <h1 class="text-6xl">In alle rust.</h1>
                    <br />

                    <p class="text-2.5xl 3xl:hidden">
                        <span class="bold">Uw kunstwerk in goede handen.</span>
                        <br /> Wim de Waal is een zeer ervaren lijstenmaker. In zijn
                        atelier kunt u op uw gemak kennis maken met de wereld van
                        licht en kleur.
                        <br />
                        <br />Daar wordt al snel duidelijk dat een perfecte
                        inlijsting een heel ander resultaat geeft dan een lijstje
                        van de ‘voordeelshop’ in de stad. <br /> <br />
                        Het handwerk is bij Wim de Waal in goede handen. Niet voor niets
                        won hij onlangs een prestigieuze lijstenmakersprijs.
                    </p>

                    <p class="text-2.5xl 3xl:block hidden">
                        <span class="bold">Uw kunstwerk in goede handen.</span>
                        <br /> Wim de Waal is een zeer ervaren lijstenmaker.
                        <br /> In zijn atelier kunt u op uw gemak kennis maken met
                        de wereld van
                        <br /> licht en kleur.
                        <br />
                        <br />Daar wordt al snel duidelijk dat een perfecte
                        inlijsting een heel
                        <br /> ander resultaat geeft dan een lijstje van de
                        ‘voordeelshop’ in de stad. <br />
                        <br /> Het handwerk is bij Wim de Waal in goede handen.
                        <br /> Niet voor niets won hij onlangs een prestigieuze lijstenmakersprijs.
                    </p>
                </main>

                <img src="/images/pages/over.webp" class="object-cover 2xl:hidden pt-8" alt="" />

                <footer class="max-w-[22rem] tracking-tighter py-8 3xl:pt-0">
                    <h1 class="text-7xl text-red leading-none">Inlijsten.</h1>
                    <h3 class="text-3xl italic text-right leading-none">
                        wij zorgen voor de <br /> perfecte match!
                    </h3>
                </footer>
            </section>

            <img src="/images/pages/over.webp" class="object-cover w-full 2xl:block hidden" id="xl" alt="" />
        </main>
    </main>
</body>

</html>