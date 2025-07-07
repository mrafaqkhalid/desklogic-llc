<?php
/*
Template Name: Features Page
*/
get_header();
?>

<main class="__className_128fa8" style="opacity: 1; will-change: transform;">
  <section class="hero pt-8 pt-8 md:py-[10rem]">
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
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Advanced Inspection Tools
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Drag & Drop Calendar
            </li>
            <li class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
              <svg width="24" height="24" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4"><rect width="16" height="16" fill="none"></rect><path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path></svg>Future-Proof Software
            </li>
          </ul>
        </div>
        <div class="w-full">
        <a data-aos="fade-in" data-aos-delay="400" href="https://portal.desklogic.com/auth/signup" class="aos-init max-[768px]:mx-auto block max-w-max"><span class=" cursor-pointer inline-flex items-center px-8 py-5 mt-12 text-white bg-[var(--app-1)] uppercase hover:bg-[var(--app-2)] duration-300 ease-in-out rounded-full">Start Your Free Trial</span></a>

        </div>
      </div>
    </div>
  </section>

  <section class="z-40 mx-4">
    <div class="bg-[var(--app-1)] lg:max-w-[1500px] py-32 px-4 md:max-w-[1380px] rounded-[60px] relative mx-auto">
      <div class="container mx-auto px-0 text-center">
        <div class="flex flex-col items-center">
          <div class="w-full md:w-6/12 mb-6">
            <h1 class="text-3xl md:text-[40px] text-white font-semibold leading-[1.4]">All-Inclusive Access</h1>
            <p class="mt-4 text-lg font-light text-[22px] text-white">One subscription grants you complete access to all features Desklogic offers.</p>
          </div>
          <div class="w-full px-8 md:px-[120px] mt-8">
          <img alt="Dashboard preview" loading="lazy" width="3331" height="1706" decoding="async" data-nimg="1" class="mx-auto" style="color:transparent" srcset="https://desklogic.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcombine-mock.20bb34a3.png&amp;w=3840&amp;q=75 1x" src="https://desklogic.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcombine-mock.20bb34a3.png&amp;w=3840&amp;q=75">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features" class="features-section <?php if (is_front_page()) { echo 'bg-e9efff'; } elseif (is_page('features')) { echo 'bg-f5f7fa'; } ?> container mx-auto px-4 py-8 md:py-12 lg:py-20">
    <!-- Swiper -->
    <div class="swiper features-slider">
      <div class="swiper-wrapper">
        <?php
        $features = [
          ['icon' => 'email.svg', 'title' => 'Email Automation', 'description' => 'Boost efficiency with automated emails for inspectors, clients, and agents, keeping everyone informed and reducing manual reminders.'],
          ['icon' => 'responsive.svg', 'title' => 'Responsive User Interface', 'description' => 'Deliver a consistent and user-friendly experience across all devices with a fully responsive UI, adapting to any screen size for optimal usability.'],
          ['icon' => 'revenue.svg', 'title' => 'Easy Revenue Management', 'description' => 'Utilize built-in accounts to manage billing and invoicing. Ensure accurate financial tracking and simplify your bookkeeping directly within the platform.'],
          ['icon' => 'notifications.svg', 'title' => 'Notification System', 'description' => 'Receive instant notifications for important events, such as new appointments, client messages, and report submissions. Stay informed and responsive at all times.'],
          ['icon' => 'multiuser.svg', 'title' => 'Multi-User Support', 'description' => 'Allow multiple inspectors to access and update information simultaneously. Facilitate collaboration and ensure everyone has the latest data, improving team productivity.'],
          ['icon' => 'plans.svg', 'title' => 'Flexible Plans', 'description' => 'Explore our dynamic plans and scale smoothly as your business progresses. Adapt your capacity effortlessly to fit your evolving needs.'],
          ['icon' => 'gateways.svg', 'title' => 'Flexible Payment Gateway', 'description' => 'Offer clients multiple payment options with a secure and flexible payment gateway, making transactions seamless and boosting customer satisfaction.'],
          ['icon' => 'realtime.svg', 'title' => 'Real-Time Collaborations', 'description' => 'Enhance teamwork with real-time collaboration features, allowing users to work together seamlessly and make instant updates.'],
          ['icon' => 'docs.svg', 'title' => 'Comprehensive Tutorials', 'description' => 'Access a library of tutorials and guides to help you make the most of DESKLOGIC\'s features. Gain knowledge and confidence in using the software to its full potential.'],
          ['icon' => 'schedule.svg', 'title' => 'Efficient Scheduling', 'description' => 'Seamlessly schedule inspections with an intuitive calendar that syncs across all devices. Avoid double bookings and ensure every inspection is on time, enhancing your workflow and client satisfaction.'],
          ['icon' => 'ai.svg', 'title' => 'AI Assistant', 'description' => 'Reduce no-shows and late arrivals with automated reminders for inspectors, clients, and agents. Ensure everyone is on the same page, improving punctuality and overall efficiency.'],
          ['icon' => 'template.svg', 'title' => 'Customizable Templates', 'description' => 'Create detailed and professional inspection reports with customizable templates. Include photos, notes, and ratings to provide clients with clear, comprehensive information every time.'],
          ['icon' => 'reports.svg', 'title' => 'Instant Report Generation', 'description' => 'Generate reports on-site and share them with clients instantly. Save time with auto-fill features and quick data entry options, streamlining your inspection process.'],
          ['icon' => 'mobileapps.svg', 'title' => 'iOS and Android Apps', 'description' => 'Dedicated mobile apps for iOS and Android provide full functionality on your smartphone or tablet. Conduct inspections, generate reports, and manage schedules from anywhere.'],
          ['icon' => 'encrypted.svg', 'title' => 'Encrypted Data Storage', 'description' => 'Ensure all your data is secure with state-of-the-art encryption. Protect client information and inspection details from unauthorized access, maintaining confidentiality.'],
          ['icon' => 'backup.svg', 'title' => 'Regular Backups', 'description' => 'Automated backups to safeguard your data against loss. Ensure you can always recover important information, providing peace of mind and data security.'],
          ['icon' => 'profile.svg', 'title' => 'Detailed Client Profiles', 'description' => 'Maintain comprehensive client profiles with contact information, inspection history, and notes. Easily track interactions and provide personalized service to each client.'],
          ['icon' => 'insights.svg', 'title' => 'Data-Driven Insights', 'description' => 'Harness the power of data to drive decisions with actionable insights, helping you make informed choices and optimize performance.'],
          ['icon' => 'rolebased.svg', 'title' => 'Role-Based Access', 'description' => 'Assign roles and permissions to team members, ensuring everyone has access to the tools and information they need without compromising security, enhancing organizational control.'],
          ['icon' => 'syncing.svg', 'title' => 'Live Syncing', 'description' => 'Keep all your devices and team members in sync with real-time updates. Ensure everyone is working with the most current information, preventing any miscommunications.'],
          ['icon' => 'support.svg', 'title' => '24/7 Customer Service', 'description' => 'Get assistance whenever you need it with our round-the-clock customer support. Ensure any issues are resolved quickly, minimizing downtime and maintaining productivity.'],
        ];

        foreach ($features as $feature) :
        ?>
          <div class="swiper-slide h-auto">
            <div class="feature-card-slider text-left h-full p-8 bg-white rounded-[20px] border border-shades-100">
              <img alt="<?php echo $feature['title']; ?>" class="mb-8 h-20 w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $feature['icon']; ?>">
              <h3 class="text-2xl font-semibold mb-2 md:text-[1.7rem] md:font-semibold md:leading-[2rem] md:mb-2"><?php echo $feature['title']; ?></h3>
              <p class="text-[#374151] md:text-[1.2rem]"><?php echo $feature['description']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Navigation -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next "></div>
    </div>
  </section>

  <section class="cta text-white bg-[var(--app-1)] py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
      <h2 class="font-bold text-white text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] aos-init aos-animate">Ready to Transform<br> Your Home Inspection Process?</h2>
      <p class="lead text-[19px] sm:text-[19px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] mb-6 block">Experience the future of home inspections. Sign up now!</p>
      <a class="bg-[var(--app-2)] text-white py-4 px-8 mt-6 rounded-full shadow-lg transition duration-300 hover:bg-gray-900 inline-block uppercase" href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
    </div>
  </section>

  <section class="py-32 relative">
    <div class="container mx-auto z-20 relative">
        <div class="text-center mb-20 px-4 md:px-0 ">
            <h2 class="font-bold text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] mb-6" data-aos="fade-up">Simple Pricing For Everyone</h2>
            <p class="text-2xl mt-4" data-aos="fade-up" data-aos-delay="100">Affordable plans with 30 days free trial and unlimited inspections.</p>
        </div>
        <div class="flex max-w-[1300px] mx-auto flex-wrap justify-center -px-4">
            <div class="w-full lg:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white text-gray-800 relative z-40 overflow-hidden rounded-[20px] border hover:shadow-lg boreder-shades-100 p-6 md:p-12 md:pt-20 text-left transform transition duration-500 hover:scale-105 ">
                    <h6 class="text-xl font-semibold mb-4">Solo Inspector</h6>
                    <div class="text-5xl flex items-end font-bold text-[var(--app-1)]"><sup class="text-2xl">$</sup><span>69</span>
                        <p class="text-lg font-normal text-gray-500">/month</p>
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="text-md font-normal text-gray-500 line-through">$99</p>
                        <p class="text-xl font-bold  text-[var(--app-1)] bg-[var(--app-light)] px-3 py-1 ml-2 rounded-full">SAVE 30%</p>
                    </div>
                    <p class="mt-4 border-b pb-8 border-b-[#2f448f47]">30 Days Free Trial. No Credit Card Required.</p>
                    <ul class="mt-8 space-y-3">
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>Single Home Inspector
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>Unlimited Inspections
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>AI Assistant
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>24/7 Support
                        </li>
                    </ul>
                    <div class="mt-8 z-40 relative"><a targe="_blank" class="btn btn-primary text-white bg-[var(--app-1)] py-3 px-6 rounded-full shadow-lg transition duration-300 hover:bg-[var(--app-2)]" href="https://portal.desklogic.com/auth/signup">Choose plan</a></div>
                    <div class="absolute -bottom-1 -right-1 flex justify-center items-center w-5 h-5 z-10 opacity-20">
                        <div class="animated_circle  bg-shades-100"></div>
                        <div class="animated_circle2 bg-shades-200"></div>
                        <div class="animated_circle3 bg-shades-300"></div>
                        <div class="animated_circle4 bg-shades-400"></div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white text-gray-800 relative z-40 overflow-hidden rounded-[20px] border hover:shadow-lg boreder-shades-100 p-6 md:p-12 md:pt-20 text-left transform transition duration-500 hover:scale-105   border-app-2">
                    <h6 class="text-xl font-semibold mb-4">Team Inspect</h6>
                    <div class="text-5xl flex items-end font-bold text-[var(--app-1)]"><sup class="text-2xl">$</sup><span>99</span>
                        <p class="text-lg font-normal text-gray-500">/month</p>
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="text-md font-normal text-gray-500 line-through">$199</p>
                        <p class="text-xl font-bold  text-[var(--app-1)] bg-[var(--app-light)] px-3 py-1 ml-2 rounded-full">SAVE 50%</p>
                    </div>
                    <p class="mt-4 border-b pb-8 border-b-[#2f448f47]">30 Days Free Trial. No Credit Card Required.</p>
                    <ul class="mt-8 space-y-3">
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>Up to three employees
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>Unlimited Inspections
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>AI Assistant
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>24/7 Support
                        </li>
                    </ul>
                    <div class="mt-8 z-40 relative"><a targe="_blank" class="btn btn-primary text-white bg-[var(--app-1)] py-3 px-6 rounded-full shadow-lg transition duration-300 hover:bg-[var(--app-2)]" href="https://portal.desklogic.com/auth/signup">Choose plan</a></div>
                    <div class="mt-4 absolute top-[50px] right-0"><span class="bg-[var(--app-2)] text-white px-4 py-2 rounded-l-full text-sm">Most Popular</span></div>
                    <div class="absolute -bottom-1 -right-1 flex justify-center items-center w-5 h-5 z-10 opacity-20">
                        <div class="animated_circle  bg-shades-100"></div>
                        <div class="animated_circle2 bg-shades-200"></div>
                        <div class="animated_circle3 bg-shades-300"></div>
                        <div class="animated_circle4 bg-shades-400"></div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-white text-gray-800 relative z-40 overflow-hidden rounded-[20px] border hover:shadow-lg boreder-shades-100 p-6 md:p-12 md:pt-20 text-left transform transition duration-500 hover:scale-105 ">
                    <h6 class="text-xl font-semibold mb-4">Unlimited Access</h6>
                    <div class="text-5xl flex items-end font-bold text-[var(--app-1)]"><sup class="text-2xl">$</sup><span>199</span>
                        <p class="text-lg font-normal text-gray-500">/month</p>
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="text-md font-normal text-gray-500 line-through">$499</p>
                        <p class="text-xl font-bold  text-[var(--app-1)] bg-[var(--app-light)] px-3 py-1 ml-2 rounded-full">SAVE 60%</p>
                    </div>
                    <p class="mt-4 border-b pb-8 border-b-[#2f448f47]">30 Days Free Trial. No Credit Card Required.</p>
                    <ul class="mt-8 space-y-3">
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>Unlimited Employees
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>Unlimited Inspections
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>AI Assistant
                        </li>
                        <li class="flex justify-start items-left text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z" fill="white"></path>
                            </svg>24/7 Support
                        </li>
                    </ul>
                    <div class="mt-8 z-40 relative"><a targe="_blank" class="btn btn-primary text-white bg-[var(--app-1)] py-3 px-6 rounded-full shadow-lg transition duration-300 hover:bg-[var(--app-2)]" href="https://portal.desklogic.com/auth/signup">Choose plan</a></div>
                    <div class="absolute -bottom-1 -right-1 flex justify-center items-center w-5 h-5 z-10 opacity-20">
                        <div class="animated_circle  bg-shades-100"></div>
                        <div class="animated_circle2 bg-shades-200"></div>
                        <div class="animated_circle3 bg-shades-300"></div>
                        <div class="animated_circle4 bg-shades-400"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <section class="faq-section bg-[#e9efff] py-32 z-50">
    <div class="container max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-bold text-[37.2px] lg:text-[50.2px] 2xl:text-[60.2px] leading-[1.35em] tracking-[-0.5px] lg:tracking-[-2px]">
                Frequently Asked Questions
            </h2>
            <p class="text-[1.45rem] text-gray-600 mt-4">Answers to help you get started and succeed.</p>
        </div>
        <div class="flex flex-wrap w-full sm:mx-auto sm:mb-2 -mx-2">
            <!-- FAQ Item 1 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">What is this SaaS application for?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        This SaaS application is designed to streamline your business operations and improve productivity through cloud-based solutions.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 2 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">Is there a mobile version of the application?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        Yes, our application is fully responsive and offers a dedicated mobile version for both iOS and Android devices.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 3 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">How do I sign up for the application?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        You can sign up by clicking the "Sign Up" button on the homepage and following the registration process.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 4 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">What are the system requirements for using the application?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        The application works on any modern web browser. No special hardware or software is required.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 5 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">Is there a trial version available?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        Yes, we offer a free trial so you can explore all features before committing.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 6 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="350">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">Is my client data safe? Will my data be sold?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        Your data is encrypted and securely stored. We never sell your data to third parties.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 7 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">Can I customize the inspection report templates?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        Yes, you can customize templates to fit your workflow and branding needs.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 8 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="450">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">Can multiple users access the same account?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        Yes, you can invite team members and assign roles for collaborative work.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 9 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">What should I do if I forget my password?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        Use the "Forgot Password" link on the login page to reset your password securely.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 10 -->
            <div class="w-full lg:w-1/2 px-4 py-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="550">
                <div class="faq p-6 bg-white rounded-lg border border-shades-100">
                    <div class="flex justify-between items-center cursor-pointer faq-question">
                        <h3 class="faq-title font-semibold text-[1.1rem]">How can I contact customer support?</h3>
                        <div class="faq-toggle bg-[#d3e0ff] rounded-full w-8 h-8 min-h-8 min-w-8 flex items-center justify-center">
                            <span class="text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 transition-transform duration-200 text-[var(--app-1)] opacity-90 w-[1.3rem] h-[1.3rem] "> <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /> </svg>
                            </span>
                        </div>
                    </div>
                    <div class="faq-answer mt-4 text-gray-700 hidden text-[1.1rem]">
                        You can contact our support team via the "Support" section in your dashboard or by emailing support@example.com.
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</main>


<?php get_footer(); ?> 