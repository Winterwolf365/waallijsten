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

    <meta property="og:title" content="Contact" />
    <meta property="og:description"
        content="Neem gerust contact met ons op door middel van het contact- formulier of bel met ons voor vragen en/of opdrachten." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://dewaallijsten.nl/contact" />

    <title>Neem gerust contact met ons op!</title>
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
                <main class="2xl:pt-28 h-full">
                    <h1 class="text-6xl">Contact.</h1>
                    <br />

                    <p class="text-2.5xl">
                        <span class="bold">Neem gerust contact met ons op door middel van het
                            contact- formulier of bel met ons voor vragen en/of
                            opdrachten.</span>
                    </p>
                </main>

                <div class="2xl:block hidden">
                    <p class="text-2.5xl text-center">
                        <span class="bold">De Waallijsten</span> <br />
                        <a href="https://www.google.com/maps/place/Emmalaan+2,+3738+DT+Maartensdijk" target="_blank">
                            Emmalaan 2 <br />
                            3738 DT Maartensdijk <br />
                        </a>
                        <a href="tel:+31 0346 214 997">0346 214 997</a> • <a href="tel:+31 06 516 869 60">06 516 869
                            60</a>
                        <br>
                        <a href="http://www.dewaallijsten.nl/" target="_blank">www.dewaallijsten.nl</a> • <a
                            href="mailto:info@dewaallijsten.nl">info@dewaallijsten.nl</a> <br />
                    </p>

                    <div class="flex py-8 gap-4 justify-center">
                        <a href="https://www.facebook.com/p/De-Waallijsten-100063774833638/" target="_blank">
                            <img src="/images/facebook.png" alt="facebook" class="h-20">
                        </a>
                        <a href="https://www.instagram.com/dewaallijsten/" target="_blank">
                            <img src="/images/instagram.png" alt="instagram" class="h-20">
                        </a>
                    </div>

                    <p class="text-2.5xl text-center">
                        Op zoek naar schilderijverlichting? <br />
                        kijk op <a href="https://schilderijverlichting.nl/" target="_blank"
                            class="underline">www.schilderijverlichting.nl</a>
                    </p>
                </div>
            </section>

            <section class="lg:px-48 sm:px-24 px-8 2xl:py-0 py-8">
                <form action="/contact" method="POST"
                    class="2xl:pt-28 h-full flex flex-col gap-6 text-2.5xl text-black placeholder:text-black">
                    @csrf
                    <input type="text" name="first_name" id="first_name" placeholder="Voornaam:*"
                        class="bg-neutral-200/80 px-6 py-2" required value="{{ old('first_name') }}" />
                    <input type="text" name="last_name" id="last_name" placeholder="Achternaam:*"
                        class="bg-neutral-200/80 px-6 py-2" required value="{{ old('last_name') }}" />
                    <input type="email" name="email" id="email" placeholder="Email:*"
                        class="bg-neutral-200/80 px-6 py-2" required value="{{ old('email') }}" />
                    <input type="tel" name="tel" id="tel" placeholder="Telefoonnummer:*"
                        class="bg-neutral-200/80 px-6 py-2" required value="{{ old('tel') }}" />
                    <div>
                        <textarea name="message" id="message" cols="30" rows="7" placeholder="Bericht:"
                            class="bg-neutral-200/80 px-6 py-2 w-full">{{ old('message') }}</textarea>
                        <p class="lg:hidden block text-white text-right mt-2 mb-5">*Verplichte velden</p>
                        <section class="grid place-items-center relative lg:pt-6">
                            <div class="lg:w-56 w-full py-2 block text-center bg-red text-white relative">
                                <input type="submit" value="Verzenden" class="lg:w-56 w-full cursor-pointer">
                                <p class="absolute lg:block hidden top-2 left-64 w-full">*Verplichte velden</p>
                            </div>
                        </section>
                    </div>
                </form>
            </section>

            <div class="2xl:hidden block sm:px-24 px-8 pb-8">
                <p class="text-2.5xl text-center">
                    <span class="bold">De Waallijsten</span> <br />
                    <a href="https://www.google.com/maps/place/Emmalaan+2,+3738+DT+Maartensdijk" target="_blank">
                        Emmalaan 2 <br />
                        3738 DT Maartensdijk <br />
                    </a>
                    <a href="tel:+31 0346 214 997">0346 214 997</a> • <a href="tel:+31 06 516 869 60">06 516 869
                        60</a>
                    <br>
                    <a href="http://www.dewaallijsten.nl/" target="_blank">www.dewaallijsten.nl</a> • <a
                        href="mailto:info@dewaallijsten.nl">info@dewaallijsten.nl</a> <br />
                </p>

                <div class="flex py-8 gap-4 justify-center">
                    <a href="https://www.facebook.com/p/De-Waallijsten-100063774833638/" target="_blank">
                        <img src="/images/facebook.png" alt="facebook" class="h-20">
                    </a>
                    <a href="https://www.instagram.com/dewaallijsten/" target="_blank">
                        <img src="/images/instagram.png" alt="instagram" class="h-20">
                    </a>
                </div>

                <p class="text-2.5xl text-center">
                    Op zoek naar schilderijverlichting? <br />
                    kijk op <a href="https://schilderijverlichting.nl/" target="_blank"
                        class="underline">www.schilderijverlichting.nl</a>
                </p>
            </div>
        </main>
    </main>
</body>

</html>