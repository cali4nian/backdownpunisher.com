<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
  <title>Privacy Policy | BackDownPunisher.com</title>
  <meta name="title" content="Privacy Policy | BackDownPunisher.com">
  <meta name="description" content="Read the privacy policy for BackDownPunisher.com. Learn how we collect, use, and protect your information.">

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
        <h1 class="text-3xl md:text-4xl font-bold text-[#D4AF37] mb-6 text-center">Privacy Policy</h1>
        <p class="mb-4 text-sm text-center text-gray-300">Last updated: August 9, 2025</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">1. Introduction</h2>
        <p class="mb-4">This Privacy Policy explains how BackDownPunisher.com ("we", "us", or "our") collects, uses, and protects your information when you use our website.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">2. Information We Collect</h2>
        <p class="mb-4">We may collect personal information that you voluntarily provide to us, such as your name, email address, or social media handles when you contact us or interact with our content. We may also collect non-personal information such as browser type, device information, and usage data through cookies and analytics tools.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">3. How We Use Your Information</h2>
        <p class="mb-4">We use your information to operate and improve our website, respond to inquiries, provide updates, and analyze site usage. We do not sell your personal information to third parties.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">4. Cookies and Tracking Technologies</h2>
        <p class="mb-4">We use cookies and similar technologies to enhance your experience, analyze trends, and administer the website. You can control cookies through your browser settings.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">5. Third-Party Links</h2>
        <p class="mb-4">Our website may contain links to third-party sites. We are not responsible for the privacy practices or content of those sites. Please review their privacy policies before providing any information.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">6. Data Security</h2>
        <p class="mb-4">We implement reasonable security measures to protect your information. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">7. Children's Privacy</h2>
        <p class="mb-4">Our website is not intended for children under 13. We do not knowingly collect personal information from children under 13. If you believe we have collected such information, please contact us to have it removed.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">8. Changes to This Policy</h2>
        <p class="mb-4">We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated effective date. Your continued use of the site constitutes acceptance of the revised policy.</p>

        <h2 class="mt-8 mb-2 text-xl font-semibold text-yellow-400">9. Contact Us</h2>
        <p class="mb-4">If you have any questions about this Privacy Policy, please contact us at <a href="mailto:info@backdownpunisher.com" class="text-[#D4AF37] underline">info@backdownpunisher.com</a>.</p>
      </section>
    </main>

    <!-- Footer -->
    @include('footer')
      
  </body>
</html>
