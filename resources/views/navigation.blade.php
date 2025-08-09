<!-- Header -->
<header class="bg-neutral-900 py-4 px-6 shadow-lg border-b-2 border-[#D4AF37]">
  <div class="flex items-center justify-between">
    <h1 class="text-2xl font-extrabold text-yellow-400 uppercase font-anton">Kain Soriano</h1>
    <!-- Hamburger button -->
    <button id="nav-toggle" class="text-yellow-400 cursor-pointer md:hidden focus:outline-none" aria-label="Toggle navigation">
      <!-- Hamburger Icon -->
      <svg id="icon-hamburger" class="block w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <!-- X Icon -->
      <svg id="icon-close" class="hidden w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
    <!-- Desktop nav -->
    @php
      $isSpecialPage = request()->is('terms') || request()->is('privacy');
    @endphp
    <nav class="hidden md:block">
      <ul class="flex flex-row space-x-4">
        @if ($isSpecialPage)
          <li><a href="/" class="hover:text-yellow-300">Back to Home</a></li>
        @else
          <li><a href="#about" class="hover:text-yellow-300">About</a></li>
          <li><a href="#highlights" class="hover:text-yellow-300">Highlights</a></li>
          <li><a href="#contact" class="hover:text-yellow-300">Contact</a></li>
        @endif
      </ul>
    </nav>
  </div>
  <!-- Mobile nav -->
  <nav id="mobile-nav" class="hidden mt-4 md:hidden">
    <ul class="flex flex-col space-y-2">
      @if ($isSpecialPage)
        <li><a href="/" class="block px-2 py-2 rounded hover:bg-yellow-400 hover:text-neutral-900">Back to Home</a></li>
      @else
        <li><a href="#about" class="block px-2 py-2 rounded hover:bg-yellow-400 hover:text-neutral-900">About</a></li>
        <li><a href="#highlights" class="block px-2 py-2 rounded hover:bg-yellow-400 hover:text-neutral-900">Highlights</a></li>
        <li><a href="#contact" class="block px-2 py-2 rounded hover:bg-yellow-400 hover:text-neutral-900">Contact</a></li>
      @endif
    </ul>
  </nav>
</header>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('nav-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    const iconHamburger = document.getElementById('icon-hamburger');
    const iconClose = document.getElementById('icon-close');
    navToggle.addEventListener('click', function () {
      mobileNav.classList.toggle('hidden');
      iconHamburger.classList.toggle('hidden');
      iconClose.classList.toggle('hidden');
    });
  });
</script>