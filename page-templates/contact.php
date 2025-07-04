<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main>
  <section class="hero pt-8 pt-8 md:py-[10rem]">
    <div class="hero-inner">
      <div class="container max-w-7xl mx-auto px-4">
        <h1 class="font-bold text-[42px] sm:text-[42px] md:text-[42px] lg:text-[55px] 2xl:text-[65px] leading-[1.25em] max-w-4xl">
          <span>Contact our help desk for assistance<br></span>
        </h1>
        <p class="text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
          Reach Out to Our Support Team for Help and Guidance
        </p>
        <div class="banner-list mb-10">
          <ul class="list-none">
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>
              Friendly Support Team
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>
              Live chat support
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>
              Prompt Email Response
            </li>
          </ul>
        </div>
        <a class="cursor-pointer inline-flex items-center px-8 py-4 text-white bg-[var(--app-1)] uppercase hover:bg-[var(--app-2)] transition duration-300 ease-in-out rounded-full" href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
      </div>
    </div>
  </section>
  <section class="bg-[#e9efff] py-24 ">
    <div class="container max-w-6xl mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col text-left pr-0 md:pr-20 justify-center">
          <h2 class="mb-4 text-5xl tracking-tight font-semibold  ">Lets Talk</h2>
          <p class="mb-8 lg:mb-8 font-light    sm:text-xl">Got a technical issue? Want to send feedback about a feature? Need details about our pricing plan? Let us know.</p>
        </div>
        <div class="bg-white p-8 rounded-xl">
          <form class="space-y-8">
            <div><input type="text" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Your name" required></div>
            <div><input type="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="name@example.com" required></div>
            <div><input type="text" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required></div>
            <div class="sm:col-span-2"><textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Leave a comment..." required></textarea></div>
            <button type="submit" class="cursor-pointer inline-flex items-center px-6 py-3 text-white bg-[var(--app-1)] uppercase hover:bg-[var(--app-2)] transition duration-300 ease-in-out rounded-full">Send Message<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"></path></svg></button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
