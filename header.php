<?php
/**
 * The header for our theme
 *
 * @package Desklogic_LLC
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Tailwind Config for CDN (MUST be after CDN script) -->
<script>
  tailwind.config = {
    theme: {
      extend: {},
    }
  }
</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Figtree', sans-serif;
        }

        body.menu-open .mobile-signin-btn {
          display: inline-block !important;
        }

    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

      <nav class="bg-white py-5 max-[600px]:py-2 shadow-lg">
    <div class="container mx-auto max-w-8xl max-[1280px]:max-w-[95%]">
      <div class="grid grid-cols-12 gap-4 px-4 max-[772px]:px-2">
        <!-- Logo Section -->
        <div class="col-span-6 sm:col-span-6 md:col-span-3 flex items-center">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="logo flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Desklogic LLC" class="w-48">
          </a>
        </div>

        <!-- Hamburger Button -->
        <div class="col-span-6 sm:col-span-6 md:col-span-9 flex items-center justify-end min-[992px]:hidden">
          <button id="mobileMenuToggle" class="p-2 bg-gray-200 rounded-full">
            <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
            </svg>
            <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="col-span-6 hidden min-[992px]:flex justify-center items-center max-[1260px]:ml-[3rem]">
          <ul class="flex space-x-6 flex-nowrap">
            <li class="text-lg font-semibold whitespace-nowrap"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link  text-gray-700 hover:text-gray-900">Home</a></li>
            <li class="text-lg font-semibold whitespace-nowrap"><a href="<?php echo site_url('/features'); ?>" class="nav-link text-gray-700 hover:text-gray-900">Features</a></li>
            <li class="text-lg font-semibold whitespace-nowrap"><a href="<?php echo site_url('/pricing'); ?>" class="nav-link text-gray-700 hover:text-gray-900">Pricing</a></li>
            <li class="relative group text-lg font-semibold whitespace-nowrap">
              <!-- Trigger -->
              <span class="flex items-center gap-1 cursor-pointer text-gray-700 hover:text-gray-900 text-md md:text-[17px]">
                Solutions
                <svg class="h-5 w-5 text-gray-600 group-hover:text-gray-800 transition" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
              </span>

              <!-- Dropdown -->
              <div class="desktop-dropdown invisible opacity-0 transition-all duration-300 absolute left-1/2 -translate-x-1/2 top-[3rem] w-screen max-w-[32rem] z-50 rounded-xl bg-white border-y-[8px]  border-[#bfdbfe] shadow-lg">
                
                <!-- Service Items -->
                <div class="p-6 space-y-5">
                  <!-- Item 1 -->
                  <a href="<?php echo site_url('/managed-wordpress-hosting'); ?>" class="flex items-start gap-4 hover:bg-gray-50 p-2 rounded-lg transition">
                  <svg class=" flex-shrink-0 h-6 w-6 text-[var(--app-1)]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                    <div>
                      <p class="text-gray-900 font-medium">Managed Wordpress Hosting</p>
                      <p class="text-sm text-gray-500 opacity-[0.9]">Reliable, secure, and optimized WordPress hosting tailored for your business needs.</p>
                    </div>
                  </a>

                  <!-- Item 2 -->
                  <a href="<?php echo site_url('/web-design-development'); ?>" class="flex items-start gap-4 hover:bg-gray-50 p-2 rounded-lg transition">
                  <svg class="flex-shrink-0 h-6 w-6  text-[var(--app-1)]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    <div>
                      <p class="text-gray-900 font-medium">Web Design & Development</p>
                      <p class="text-sm text-gray-500 opacity-[0.9]">Professional web design tailored to your brand, driving growth through optimized development.</p>
                    </div>
                  </a>

                  <!-- Item 3 -->
                  <a href="<?php echo site_url('/search-engine-optimization'); ?>" class="flex items-start gap-4 hover:bg-gray-50 p-2 rounded-lg transition">
                  <svg class="flex-shrink-0 h-6 w-6  text-[var(--app-1)]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <div>
                      <p class="text-gray-900 font-medium">Search Engine Optimization</p>
                      <p class="text-sm text-gray-500 opacity-[0.9]">We continuously monitor, refine, and adapt to keep you ahead of your competition.</p>
                    </div>
                  </a>
                </div>

                <!-- CTA Section -->
                <div class="flex justify-between items-center bg-[#f9fbff] px-6 py-4 rounded-b-xl">
                  <!-- Watch Demo -->
                  <a href="#" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12A9 9 0 113 12a9 9 0 0118 0z"/>
                    </svg>
                    <span>Watch Demo</span>
                  </a>

                  <!-- Phone -->
                  <a href="tel:+16187229189" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>(618) 722-9189</span>
                  </a>
                </div>
              </div>
            </li>

            <li class="text-lg font-semibold whitespace-nowrap"><a href="<?php echo site_url('/events'); ?>" class="nav-link text-gray-700 hover:text-gray-900">Events</a></li>
            <li class="text-lg font-semibold whitespace-nowrap"><a href="<?php echo site_url('/contact'); ?>" class="nav-link text-gray-700 hover:text-gray-900">Connect</a></li>
          </ul>
        </div>

        <!-- Auth Buttons (Desktop) -->
        <div class="col-span-3 hidden min-[992px]:flex items-center justify-end space-x-2">
          <a href="https://portal.desklogic.com/auth/signin" class="px-6 py-3 border rounded-full text-white bg-[var(--app-2)] uppercase text-base font-medium hover:text-white transition whitespace-nowrap">Sign in</a>
          <a href="https://portal.desklogic.com/auth/signup" class="mobile-signin-btn max-[1260px]:hidden px-6 py-3 bg-app-1 text-white rounded-full uppercase text-base font-medium transition whitespace-nowrap">GET STARTED FREE</a>
        </div>
      </div>
    </div>
  </nav>
<!-- Mobile Menu (hidden by default) -->
<div id="mobileMenu" class="md:hidden hidden w-full bg-[var(--app-1)] text-white space-y-4 p-6">
  <div class="flex flex-col justify-center items-center py-6 px-4 space-y-6 min-h-[calc(100vh-72px)] text-[1.1rem] opacity-90">

    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo site_url('/features'); ?>">Features</a>
    <a href="<?php echo site_url('/pricing'); ?>">Pricing</a>

    <button id="mobileSolutionsToggle" class="flex items-center space-x-1">
      <span>Solutions</span>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>

    <div id="mobileSolutionsMenu" class="space-y-2 ml-4 hidden">
      <div class="content flex items-center justify-center space-y-2 flex-col">
        <a href="<?php echo site_url('/managed-wordpress-hosting'); ?>">Managed WordPress Hosting</a>
        <a href="<?php echo site_url('/web-design-development'); ?>">Web Design & Development</a>
        <a href="<?php echo site_url('/search-engine-optimization'); ?>">Search Engine Optimization</a>
      </div>
    </div>

    <a href="<?php echo site_url('/events'); ?>">Events</a>
    <a href="<?php echo site_url('/contact'); ?>">Connect</a>

    <div class="space-y-4">
      <a class="block px-6 py-3 rounded-full text-white text-center bg-[var(--app-2)]" href="https://portal.desklogic.com/auth/signin">Sign in</a>
      <a class="block px-6 py-3 bg-white text-[var(--app-1)] rounded-full text-center" href="https://portal.desklogic.com/auth/signup">Sign up</a>
    </div>
    
  </div>
</div>


