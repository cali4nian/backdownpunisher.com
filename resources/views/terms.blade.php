<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
  <title>Terms and Conditions | BackDownPunisher.com</title>
  <meta name="title" content="Terms and Conditions | BackDownPunisher.com">
  <meta name="description" content="Read the terms and conditions for using BackDownPunisher.com. Your use of this website constitutes acceptance of these terms.">

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
    
    <!-- Navigation -->
    @include('navigation')
    
    <!-- Main Content -->

    <main class="flex flex-col max-w-3xl px-4 py-16 mx-auto">
      <section class="bg-neutral-900 bg-opacity-80 rounded-xl shadow-lg border border-[#D4AF37] p-8">
        <h1 class="text-3xl md:text-4xl font-bold text-[#D4AF37] mb-6 text-center">Terms and Conditions</h1>
        <p class="mb-4 text-sm text-center text-gray-300">Last updated: August 9, 2025</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">1. Acceptance of Terms</h2>
        <p class="mb-4">By accessing or using BackDownPunisher.com (the "Site"), you agree to be bound by these Terms and Conditions and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing this Site.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">2. Intellectual Property Rights</h2>
        <p class="mb-4">All content, features, and functionality on this Site, including but not limited to text, graphics, logos, images, and videos, are the intellectual property of BackDownPunisher.com or its licensors and are protected by copyright and other intellectual property laws. You may not reproduce, distribute, modify, or create derivative works without express written permission.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">3. User Conduct</h2>
        <p class="mb-4">You agree not to use the Site for any unlawful purpose or in any way that may harm, disrupt, or impair the Site or its users. Harassment, spamming, or posting offensive content is strictly prohibited.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">4. Third-Party Links</h2>
        <p class="mb-4">This Site may contain links to third-party websites or services that are not owned or controlled by BackDownPunisher.com. We are not responsible for the content, privacy policies, or practices of any third-party sites or services.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">5. Disclaimer</h2>
        <p class="mb-4">The Site and its content are provided on an "as is" and "as available" basis. BackDownPunisher.com makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">6. Limitation of Liability</h2>
        <p class="mb-4">In no event shall BackDownPunisher.com or its affiliates be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the Site, even if BackDownPunisher.com or a BackDownPunisher.com authorized representative has been notified orally or in writing of the possibility of such damage.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">7. Changes to Terms</h2>
        <p class="mb-4">BackDownPunisher.com reserves the right to revise these Terms and Conditions at any time without notice. By using this Site, you are agreeing to be bound by the then-current version of these Terms and Conditions.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">8. Governing Law</h2>
        <p class="mb-4">These terms and conditions are governed by and construed in accordance with the laws of your jurisdiction and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">9. Contact</h2>
        <p class="mb-4">If you have any questions about these Terms and Conditions, please contact us at <a href="mailto:info@backdownpunisher.com" class="text-[#D4AF37] underline">info@backdownpunisher.com</a>.</p>
      </section>
    </main>

    <!-- Footer -->
    @include('footer')
      
  </body>
</html>
