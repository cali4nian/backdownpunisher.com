<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <title>BackDownPunisher – Rising Basketball Talent</title>
    <meta name="title" content="BackDownPunisher – Rising Basketball Talent">
    <meta name="description" content="Follow BackDownPunisher, an 8th-grade basketball phenom sharing highlights, training, and behind-the-scenes grind. Join the journey and get inspired.">

    <!-- Favicon -->
    <link rel="icon" href="/images/heroImg.jpg" type="image/jpeg">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://backdownpunisher.com/">
    <meta property="og:title" content="BackDownPunisher – Rising Basketball Talent">
    <meta property="og:description" content="Watch game highlights, training sessions, and social content from BackDownPunisher, a young athlete grinding to the top.">
    <meta property="og:image" content="https://backdownpunisher.com/public/images/heroImg.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://backdownpunisher.com/">
    <meta name="twitter:title" content="BackDownPunisher – Rising Basketball Talent">
    <meta name="twitter:description" content="8th-grade baller. Big dreams. Bigger hustle. Tap in and follow the journey.">
    <meta name="twitter:image" content="https://backdownpunisher.com/public/images/heroImg.jpg">

    <!-- Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="/public/images/heroImg.jpg">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body class="antialiased text-gray-200 bg-black font-instrument-sans">
    <!-- Header -->
    <header class="flex flex-row items-center justify-between bg-neutral-900 py-4 px-6 shadow-lg border-b-2 border-[#D4AF37]">
      <h1 class="space-x-3 text-2xl font-extrabold text-yellow-400 uppercase font-anton">Kain Soriano</h1>
      <nav>
        <ul class="flex flex-row space-x-4">
          <li><a href="#about">About</a></li>
          <li><a href="#highlights">Highlights</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    <!-- Main Content -->
    <main class="flex flex-col mx-auto space-y-20">

      <!-- About Section -->
      <section id="about" class="relative h-screen overflow-hidden text-center">
        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 bg-[url('/public/images/heroImg.jpg')] bg-cover bg-center opacity-30"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full px-4">
          <h2 class="text-3xl md:text-4xl font-bold text-[#D4AF37] mb-6">
            Welcome to the BackDownPunisher
          </h2>
          <p class="max-w-3xl text-lg leading-relaxed text-white md:text-xl">
            Join Kain Soriano, the rising star of low-post basketball, as he takes you through his journey of skill, strength, and strategy.
            From dominating the court to sharing exclusive training tips, this is your front-row seat to the action.
          </p>
          <a
            href="#highlights"
            class="inline-block mt-6 px-8 py-4 bg-[#E63946] hover:bg-[#D4AF37] text-white font-semibold text-lg rounded-full transition-all duration-300 shadow-md hover:text-black"
          >
            Watch Highlights
          </a>
        </div>
      </section>

      <!-- Highlights Section -->
      <section id="highlights" class="min-h-screen mx-6 text-left">
        <h2 class="text-2xl md:text-3xl font-bold text-[#D4AF37] border-b-2 border-[#E63946] px-3 py-2 mb-6">
          Latest YouTube Highlights
        </h2>
        <div class="w-full max-w-4xl mx-auto aspect-video rounded-xl overflow-hidden ring-4 ring-[#1A1E3F] shadow-lg">
          <iframe 
            class="w-full h-full"
            src="https://www.youtube.com/embed/videoseries?list=YOUR_PLAYLIST_ID"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
          </iframe>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="min-h-screen px-4 py-12 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-[#D4AF37] border-b-2 border-[#E63946] pb-2 mb-6">
          Follow Kain on Social Media
        </h2>

        <p class="mb-6 text-lg md:text-xl">
          For collaborations, sponsorships, or just to follow his journey, connect with Kain online.
        </p>

        <aside class="flex justify-center gap-8">
          
          <!-- TikTok -->
          <a href="https://www.tiktok.com/@geekinn.kslapz" target="_blank" class="text-[#D4AF37] hover:text-white transition duration-300">
            <svg class="w-8 h-8 fill-current" viewBox="0 0 48 48">
              <path d="M33.8 14.6c-2.1-1.3-3.4-3.5-3.4-5.9h-5.5v22.3c0 3.1-2.4 5.7-5.5 5.7s-5.5-2.5-5.5-5.7 2.4-5.7 5.5-5.7v-5.5c-6.1 0-11 5.1-11 11.3s4.9 11.3 11 11.3 11-5.1 11-11.3V20.5c2.2 1.4 4.7 2.2 7.3 2.2v-5.4c-2.5 0-4.9-.7-7-2z"/>
            </svg>
          </a>

          <!-- Instagram -->
          <a href="https://www.instagram.com/19ktrapz" target="_blank" class="text-[#D4AF37] hover:text-white transition duration-300">
            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
              <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 2 .3 2.5.5.6.2 1.1.5 1.6.9.5.4.8 1 1 1.6.2.5.4 1.3.5 2.5.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1.1-.9 1.6-.4.5-1 .8-1.6 1-.5.2-1.3.4-2.5.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1.1-.5-1.6-.9-.5-.4-.8-1-.9-1.6-.2-.5-.4-1.3-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-2 .5-2.5.2-.6.5-1.1.9-1.6.4-.5 1-.8 1.6-1 .5-.2 1.3-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2m0-2.2C8.7 0 8.3 0 7 .1 5.6.2 4.5.5 3.6 1c-.9.5-1.7 1.3-2.2 2.2-.5.9-.8 2.1-1 3.4C.1 8.3 0 8.7 0 12s.1 3.7.2 5.1c.2 1.3.5 2.5 1 3.4.5.9 1.3 1.7 2.2 2.2.9.5 2.1.8 3.4 1C8.3 23.9 8.7 24 12 24s3.7-.1 5.1-.2c1.3-.2 2.5-.5 3.4-1 .9-.5 1.7-1.3 2.2-2.2.5-.9.8-2.1 1-3.4.1-1.4.2-1.8.2-5.1s-.1-3.7-.2-5.1c-.2-1.3-.5-2.5-1-3.4-.5-.9-1.3-1.7-2.2-2.2-.9-.5-2.1-.8-3.4-1C15.7.1 15.3 0 12 0z"/>
              <path d="M12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/>
              <circle cx="18.4" cy="5.6" r="1.4"/>
            </svg>
          </a>

          <!-- Twitter -->
          <a href="https://x.com/27ktrapz" target="_blank" class="text-[#D4AF37] hover:text-white transition duration-300">
            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
              <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.26 4.26 0 0 0 1.88-2.35 8.51 8.51 0 0 1-2.7 1.03 4.24 4.24 0 0 0-7.22 3.86A12.02 12.02 0 0 1 3.16 4.57a4.24 4.24 0 0 0 1.31 5.66 4.2 4.2 0 0 1-1.92-.53v.05a4.24 4.24 0 0 0 3.4 4.15 4.27 4.27 0 0 1-1.92.07 4.24 4.24 0 0 0 3.96 2.95A8.5 8.5 0 0 1 2 19.54a12.01 12.01 0 0 0 6.5 1.9c7.8 0 12.07-6.47 12.07-12.07 0-.18-.01-.35-.02-.52A8.6 8.6 0 0 0 24 4.56a8.38 8.38 0 0 1-2.54.7z"/>
            </svg>
          </a>

          <!-- Facebook -->
          <!-- <a href="#" target="_blank" class="text-[#D4AF37] hover:text-white transition duration-300">
            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
              <path d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.49v-9.29H9.69v-3.62h3.12V8.41c0-3.1 1.89-4.79 4.66-4.79 1.33 0 2.47.1 2.8.14v3.25h-1.92c-1.5 0-1.79.71-1.79 1.75v2.29h3.58l-.47 3.62h-3.11V24h6.1c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/>
            </svg>
          </a> -->

          <!-- YouTube -->
          <a href="https://www.youtube.com/@backdownpunisher" target="_blank" class="text-[#D4AF37] hover:text-white transition duration-300">
            <svg class="w-8 h-8 fill-current" viewBox="0 0 576 512">
              <path d="M549.7 124.1c-6.3-23.7-24.8-42.2-48.5-48.5C456.4 64 288 64 288 64s-168.4 0-213.2 11.6c-23.7 6.3-42.2 24.8-48.5 48.5C16 168.9 16 256 16 256s0 87.1 10.3 131.9c6.3 23.7 24.8 42.2 48.5 48.5C119.6 448 288 448 288 448s168.4 0 213.2-11.6c23.7-6.3 42.2-24.8 48.5-48.5C560 343.1 560 256 560 256s0-87.1-10.3-131.9zM232 336V176l142 80-142 80z"/>
            </svg>
          </a>
        </aside>
        
      </section>

    </main>

    <!-- Footer -->
    <footer class="py-4 mt-10 text-sm text-center text-gray-400 bg-neutral-900">
      <p class="mb-2">&copy; {{ date('Y') }} Kain Soriano. All rights reserved.</p>
      <div class="flex justify-center space-x-6">
        <a href="/terms" class="transition-colors duration-300 hover:text-white">Terms and Conditions</a>
        <span>|</span>
        <a href="/privacy" class="transition-colors duration-300 hover:text-white">Privacy Policy</a>
      </div>
    </footer>
      
  </body>
</html>
