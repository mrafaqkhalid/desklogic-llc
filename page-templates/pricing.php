<?php
/*
Template Name: Pricing Page
*/
get_header();
?>

<main class="__className_128fa8" style="opacity: 1; will-change: transform;">
  <section class="hero pt-8 md:py-12">
    <div class="hero-inner">
      <div class="container max-w-7xl mx-auto px-4">
        <h1 class="font-bold  text-[42px] sm:text-[42px] md:text-[42px] lg:text-[55px] 2xl:text-[65px] leading-[1.25em] max-w-4xl">
          <span>Choose the Perfect Plan for Your Home Inspection Business.<br></span>
        </h1>
        <p class="text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
          Explore our flexible pricing options designed to scale with your business and provide the best value.
        </p>
        <div class="banner-list mb-10">
          <ul class="list-none">
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>30 Days Free Trial
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>No Credit Card Required
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Unlimited Inspections
            </li>
          </ul>
        </div>
        <a class="cursor-pointer inline-flex items-center px-8 py-4 text-white bg-app-1 uppercase hover:bg-app-2 transition duration-300 ease-in-out rounded-full" href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/pricing-block'); ?>

  <section class="faq-section py-32 z-50">
    <div class="container max-w-7xl mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="font-bold  text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px]">Frequently Asked Questions</h2>
        <p class="text-lg text-gray-600 mt-4">Answers to help you get started and succeed.</p>
      </div>
      <div class="flex flex-wrap w-full sm:mx-auto sm:mb-2 -mx-2">
        <!-- Example FAQ item, repeat as needed -->
        <div class="w-full lg:w-1/2 px-4 py-2 aos-init" data-aos="fade-up" data-aos-delay="100">
          <div class="faq p-6 bg-white rounded-lg  border border-shades-100">
            <div class="flex justify-between items-center cursor-pointer faq-question">
              <h3 class="faq-title text-[16px] font-semibold">Can I upgrade my plan later?</h3>
              <div class="faq-toggle bg-shades-100 text-app-1 rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                <span class="text-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-4 transition-transform duration-200"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"/></svg></span>
              </div>
            </div>
            <div class="faq-answer mt-4 text-gray-600 hidden">
              Yes, you can upgrade your plan at any time from your account dashboard.
            </div>
          </div>
        </div>
        <!-- Add more FAQ items as needed -->
      </div>
    </div>
  </section>

  <section class="cta text-white bg-app-2 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8  text-center">
      <h2 class="font-bold text-white text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] aos-init aos-animate">Ready to Transform<br> Your Home Inspection Process?</h2>
      <p class="lead text-2xl mb-6 block">Experience the future of home inspections. Sign up now!</p>
      <a class="bg-app-2 text-white py-4 px-8 mt-6 rounded-full shadow-lg transition duration-300 hover:bg-gray-900 inline-block uppercase" href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.faq-question').forEach(function(q) {
    q.addEventListener('click', function() {
      const answer = this.parentElement.querySelector('.faq-answer');
      answer.classList.toggle('hidden');
      const icon = this.querySelector('svg');
      if (icon) icon.classList.toggle('rotate-45');
      const faqBox = this.closest('.faq');
      if (faqBox) {
        if (answer.classList.contains('hidden')) {
          faqBox.classList.remove('border-[var(--app-2)]');
          faqBox.classList.add('border-shades-100');
        } else {
          faqBox.classList.add('border-[var(--app-2)]');
          faqBox.classList.remove('border-shades-100');
        }
      }
    });
  });
});
</script>

<?php get_footer(); ?> 