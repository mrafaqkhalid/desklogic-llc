<?php
/*
Template Name: Features Page
*/
get_header();
?>

<main class="__className_128fa8" style="opacity: 1; will-change: transform;">
  <section class="hero pt-8 md:py-12">
    <div class="hero-inner">
      <div class="container max-w-7xl mx-auto px-4">
        <h1 class="font-bold  text-[42px] sm:text-[42px] md:text-[42px] lg:text-[55px] 2xl:text-[65px] leading-[1.25em] max-w-4xl">
          <span>Exceptional Features for Enhanced Home Inspection Management | Desklogic<br></span>
        </h1>
        <p class="text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
          Empowering Home Inspectors with Cutting-Edge Tools
        </p>
        <div class="banner-list mb-10">
          <ul class="list-none">
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Advanced Inspection Tools
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Drag & Drop Calendar
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Future-Proof Software
            </li>
          </ul>
        </div>
        <a class="cursor-pointer inline-flex items-center px-8 py-4 text-white bg-app-1 uppercase hover:bg-app-2 transition duration-300 ease-in-out rounded-full" href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/features-block'); ?>

  <?php get_template_part('template-parts/pricing-block'); ?>

  <section class="cta text-white bg-app-1 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
      <h2 class="font-bold text-white text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] aos-init aos-animate">Ready to Transform<br> Your Home Inspection Process?</h2>
      <p class="lead text-[19px] sm:text-[19px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] mb-6 block">Experience the future of home inspections. Sign up now!</p>
      <a class="bg-app-2 text-white py-4 px-8 mt-6 rounded-full shadow-lg transition duration-300 hover:bg-gray-900 inline-block uppercase" href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
    </div>
  </section>

  <?php get_template_part('template-parts/faq-block'); ?>
</main>

<?php get_footer(); ?> 