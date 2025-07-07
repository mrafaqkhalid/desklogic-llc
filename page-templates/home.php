<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

    <section class="hero py-12">
        <div class="container mx-auto max-w-8xl px-4">

            <!-- Grid Layout for large screens and above -->
            <div class="
    flex flex-col gap-4 items-center text-center md:gap-8 md:text-left md:flex-row md:items-start
    lg:flex lg:gap-4 lg:items-center">

                <!-- Left Column (Text) font-['Stix_Two_Text_Variable','Times_New_Roman',sans-serif] -->
                <div class="lg:text-left lg:mx-[1rem]">
                    <h1 class="
        text-[2.5rem] leading-[1.2] font-normal tracking-[-0.5px] md:text-5xl md:leading-[1.05] md:tracking-[-1px]
        xl:text-[4.5rem] 
        lg:text-[4rem] lg:leading-[1] lg:font-[500] lg:-tracking-[1px]  text-[#001b66]  lg:mb-7">
                        Smart & Accurate Home Inspector's Software
                    </h1>

                    <p class="
        text-base leading-[1.5] md:text-lg md:leading-[1.6]
        lg:mb-7 lg:text-[1.3rem] lg:leading-[1.4] xl:text-[1.4rem] text-gray-900">
                       From first appointment to final report, DeskLogic empowers home inspectors with a complete suite of tools to streamline operations and grow their business.


                    </p>

                    <button class="get-started 
        inline-block mt-6 bg-[var(--app-1)] hover:bg-[var(--app-2)] text-white border rounded-[2rem] px-6 py-3 font-semibold text-base transition-colors duration-300 md:px-8 md:py-4 md:text-[1.2rem]
        lg:my-[3rem]">
                        <a href="https://portal.desklogic.com/auth/signup" class="">
                            Get started for free
                        </a>
                    </button>
                </div>

                <!-- Right Column (Video) -->
                <div class="relative lg:h-full">
                    <video id="accounting-video"
                        aria-label="On the transactions page, a user categorizes a transaction. Then, an expense breakdown chart pops up."
                        autoplay loop muted playsinline class="lg:rounded-3xl">
                        <source
                            src="https://brandassets.waveapps.com/m/6ca74f35b5087138/original/wave2-0-transactions.mp4"
                            type="video/mp4" />
                        <source
                            src="https://cdn.prod.website-files.com/62446230dcb514b828a6e237/678ad05215987e149549579e_wave2-0-transactions-transcode.webm"
                            type="video/webm" />
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
        </div>
    </section>
    <!-- <section class="hero pt-8 md:py-12">
        <div class="hero-inner">
            <div class="container max-w-7xl mx-auto px-4">
                <h1
                    class="font-bold  text-[42px] sm:text-[42px] md:text-[42px] lg:text-[55px] 2xl:text-[65px] leading-[1.25em] max-w-4xl">
                    <span>Seamless Home <br></span><span> Inspection Software for Quick and Accurate
                        Inspections<br></span>
                </h1>
                <p
                    class="text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10">
                    From first appointment to final report, DeskLogic empowers home inspectors with a complete
                    suite of tools to streamline operations and grow their business.</p>
                <div class="banner-list mb-10">
                    <ul class="list-none">
                        <li
                            class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
                            <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Next-gen tech features
                        </li>
                        <li
                            class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
                            <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>99.9% Server Uptime
                        </li>
                        <li
                            class="flex items-center text-[18px] sm:text-[18px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-2">
                            <svg width="24" height="24" viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>24/7 Live Chat Support
                        </li>
                    </ul>
                </div><a
                    class="cursor-pointer inline-flex items-center px-8 py-4 text-white bg-app-1 uppercase hover:bg-app-2 transition duration-300 ease-in-out rounded-full"
                    href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
                <div class="hidden md:block animated-logo animate-y right-[0] top-[60%]">
                    <div class="logo-anim mb-4"><img alt="Logo" loading="lazy" width="125" height="109" decoding="async"
                            data-nimg="1" class="circle-anim" src="/_next/static/media/logo.c4df4b88.svg"
                            style="color: transparent;"></div><img alt="Circle Animation" loading="lazy" width="389"
                        height="390" decoding="async" data-nimg="1" class="circle-anim"
                        src="/_next/static/media/logo-text-circle.6831aeb2.svg" style="color: transparent;">
                </div>
            </div>
        </div>
    </section> -->
    <div class="relative  mx-auto text-white bg-[transparent]">
        <section
            class="bg-[var(--app-1)] mx-4 px-4 pb-10 md:pb-0 md:mx-auto lg:max-w-[1500px] pt-16 md:pt-32 md:max-w-[1380px] rounded-[50px] relative z-40 ">
            <div class="container max-w- mx-auto px-0 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-full md:w-8/12 md:mb-6">
                        <h1 class="font-bold text-white text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] aos-init"
                            data-aos="fade-up">Good. Better. <span class=" text-[var(--app-2)]" leading-7">Desklogic.</span>
                            <br>Inspection Software Perfected
                        </h1>
                        <p class="text-[19px] sm:text-[19px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 aos-init"
                            data-aos="fade-up" data-aos-delay="100">Discover Trust Desk Logic, the ultimate home
                            inspection software designed to meet your needs and exceed expectations.</p>
                    </div>
                    <div class="w-full px-0 md:px-8 lg:px-[120px] md:mt-8 aos-init" data-aos="fade-up"
                        data-aos-delay="200"><img alt="Dashboard preview" loading="lazy" width="2339" height="1981"
                            decoding="async" data-nimg="1" class="mx-auto"
                            srcset="https://desklogic.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdashbaord.908cef7b.webp&amp;w=3840&amp;q=75 1x"
                            src="https://desklogic.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdashbaord.908cef7b.webp&amp;w=3840&amp;q=75"
                            style="color: transparent;"></div>
                </div>
            </div>
        </section>
    </div>
    <section class="features bg-shades-50py-20 md:py-40 mt-20 px-4 md:px-0 ">
        <div class="container max-w-7xl mx-auto">
            <div class="text-center">
                <div class="w-full flex items-center mb-12">
                    <div class="mx-auto text-center max-w-[1100px]">
                        <h2 class="font-bold mb-12 text-[35px]  md:text-[37px] lg:text-[50px] 2xl:text-[60px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] aos-init"
                            data-aos="fade-up">Home Inspection Software that simplifies your workflow and boosts
                            your productivity</h2>
                        <h5 class="text-[19px] sm:text-[19px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 aos-init"
                            data-aos="fade-up" data-aos-delay="100">Leverage 30 years of expertise with our
                            powerful office and report writing software, crafted by seasoned home inspectors to
                            ensure your success.</h5>
                    </div>
                </div>
            </div>
<div class="flex w-full">
  <div class="flex flex-wrap w-full gap-8 max-w-7xl mx-auto px-4">
    <div class="feature-card p-6 md:p-12 flex flex-col aos-init transition-all duration-300 w-full md:w-[calc(50%-1rem)]" data-aos="fade-up" data-aos-delay="200">
      <div class="icon mb-8 w-auto"><svg class="h-[90px]" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 59.68 45.13">
                                  <path
                                      d="M9.01,6.64h41.62c1.93,0,3.49,1.57,3.49,3.49v28.91H5.52V10.13c0-1.93,1.57-3.49,3.49-3.49Z"
                                      fill="none" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M.8,39.04h58.07c.17,0,.3.14.3.3v1.26c0,2.22-1.8,4.02-4.02,4.02H4.52c-2.22,0-4.02-1.8-4.02-4.02v-1.26c0-.17.14-.3.3-.3Z"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <line x1="5.23" y1="35.77" x2="53.84" y2="35.77" fill="none" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <line x1="22.02" y1=".5" x2="18.33" y2="4.79" fill="none" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <path
                                      d="M41.13,1.81v27c0,.72-.58,1.31-1.31,1.31h-20.19c-.72,0-1.31-.58-1.31-1.31V4.79l3.69-4.29h17.81c.72,0,1.31.58,1.31,1.31Z"
                                      fill="#fff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <line x1="21.14" y1="20.57" x2="38.32" y2="20.57" fill="none" stroke="#1e81ce"
                                      stroke-linecap="round" stroke-miterlimit="10"></line>
                                  <line x1="21.14" y1="23.82" x2="38.32" y2="23.82" fill="none" stroke="#1e81ce"
                                      stroke-linecap="round" stroke-miterlimit="10"></line>
                                  <line x1="21.14" y1="27.37" x2="38.32" y2="27.37" fill="none" stroke="#1e81ce"
                                      stroke-linecap="round" stroke-miterlimit="10"></line>
                                  <rect x="35.58" y="3.44" width="2.89" height="14.08" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></rect>
                                  <rect x="32.66" y="14.06" width="2.89" height="3.46" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></rect>
                                  <rect x="29.74" y="11.72" width="2.89" height="5.8" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></rect>
                                  <rect x="26.82" y="8.89" width="2.89" height="8.63" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></rect>
                                  <rect x="23.91" y="14.51" width="2.89" height="3.01" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></rect>
                                  <rect x="20.99" y="12.07" width="2.89" height="5.45" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></rect>
                                  <polyline points="22.02 .5 22.02 4.79 18.33 4.79" fill="none" stroke="#1e81ce"
                                      stroke-miterlimit="10"></polyline>
                                  <circle cx="24.99" cy="4.2" r=".78" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></circle>
                                  <circle cx="27.09" cy="6.31" r=".78" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></circle>
                                  <circle cx="29.93" cy="3.48" r=".78" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></circle>
                                  <circle cx="32.43" cy="5.98" r=".78" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></circle>
                                  <line x1="25.64" y1="4.64" x2="26.58" y2="5.72" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></line>
                                  <line x1="27.7" y1="5.82" x2="29.39" y2="4.05" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></line>
                                  <line x1="30.55" y1="3.94" x2="32.01" y2="5.53" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10" stroke-width=".5"></line>
                              </svg></div>
      <div class="left">
          <h3 class="text-2xl font-semibold mb-2 text-[var(--foreground)]">Detailed Reporting</h3>
          <p class="mt-2 text-[1.1rem] text-gray-700">Instantly generate detailed and customizable
              inspection reports with ease.</p>
      </div>
    </div>
    <div class="feature-card p-6 md:p-12 flex flex-col aos-init transition-all duration-300 w-full md:w-[calc(50%-1rem)]" data-aos="fade-up" data-aos-delay="300">
      <div class="icon mb-8 w-auto"><svg class="h-[90px]" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 65.99 42.99">
                                  <path
                                      d="M40.32,5.14h1.96c.68,0,1.23.55,1.23,1.23v20.26h-4.42V6.37c0-.68.55-1.23,1.23-1.23Z"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M35.87,21.35h1.96c.68,0,1.23.55,1.23,1.23v4.05h-4.42v-4.05c0-.68.55-1.23,1.23-1.23Z"
                                      fill="#fff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M31.42,17.78h1.96c.68,0,1.23.55,1.23,1.23v7.62h-4.42v-7.62c0-.68.55-1.23,1.23-1.23Z"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M26.97,13.47h1.96c.68,0,1.23.55,1.23,1.23v11.94h-4.42v-11.94c0-.68.55-1.23,1.23-1.23Z"
                                      fill="#fff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M22.52,22.04h1.96c.68,0,1.23.55,1.23,1.23v3.37h-4.42v-3.37c0-.68.55-1.23,1.23-1.23Z"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M18.07,18.31h1.96c.68,0,1.23.55,1.23,1.23v7.1h-4.42v-7.1c0-.68.55-1.23,1.23-1.23Z"
                                      fill="#fff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <circle cx="13.25" cy="6.4" r="1.31" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <circle cx="16.78" cy="9.93" r="1.31" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <circle cx="21.52" cy="5.19" r="1.31" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <circle cx="25.71" cy="9.38" r="1.31" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <line x1="14.34" y1="7.13" x2="15.92" y2="8.95" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <line x1="17.79" y1="9.11" x2="20.62" y2="6.14" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <line x1="22.57" y1="5.96" x2="25" y2="8.62" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <path
                                      d="M9.01.5h41.62c1.93,0,3.49,1.57,3.49,3.49v32.91H5.52V3.99c0-1.93,1.57-3.49,3.49-3.49Z"
                                      fill="none" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <path
                                      d="M.8,36.9h58.07c.17,0,.3.14.3.3v1.26c0,2.22-1.8,4.02-4.02,4.02H4.52c-2.22,0-4.02-1.8-4.02-4.02v-1.26c0-.17.14-.3.3-.3Z"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <line x1="5.23" y1="33.63" x2="53.84" y2="33.63" fill="none" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <circle cx="55.81" cy="18.31" r="9.67" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <polyline points="51.04 22.58 56.02 19.06 56.02 11.98" fill="none" stroke="#1e81ce"
                                      stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline>
                              </svg></div>
      <div class="left">
          <h3 class="text-2xl font-semibold mb-2 text-[var(--foreground)]">Real Time Analytics</h3>
          <p class="mt-2 text-[1.1rem] text-gray-700">Access and update inspection data in real-time from any device anywhere with no additional charges.</p>
      </div>
    </div>
    <div class="feature-card p-6 md:p-12 flex flex-col aos-init transition-all duration-300 w-full md:w-[calc(50%-1rem)]" data-aos="fade-up" data-aos-delay="400">
      <div class="icon mb-8 w-auto"><svg class="h-[90px]" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 55.82 46.7">
                                  <rect x=".52" y="4.68" width="43.26" height="34.52" rx="2.95" ry="2.95" fill="#fff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <path
                                      d="M.52,14.39v-6.44c0-1.8,1.46-3.26,3.26-3.26h36.74c1.79,0,3.25,1.46,3.25,3.26v6.44"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></path>
                                  <line x1="43.26" y1="14.24" y2="14.24" fill="#9bc9ff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></line>
                                  <rect x="7.21" y=".5" width="3.89" height="8.37" rx="1.19" ry="1.19" fill="#fff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="15.7" y=".5" width="3.89" height="8.37" rx="1.19" ry="1.19" fill="#fff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="24.19" y=".5" width="3.89" height="8.37" rx="1.19" ry="1.19" fill="#fff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="32.68" y=".5" width="3.89" height="8.37" rx="1.19" ry="1.19" fill="#fff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="6.39" y="17.12" width="4.15" height="4.15" rx=".92" ry=".92" fill="#9bc9ff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="15.34" y="17.12" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="24.29" y="17.12" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="33.24" y="17.12" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="6.39" y="24.79" width="4.15" height="4.15" rx=".92" ry=".92" fill="#9bc9ff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="15.34" y="24.79" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="24.29" y="24.79" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="6.39" y="31.96" width="4.15" height="4.15" rx=".92" ry=".92" fill="#9bc9ff"
                                      stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="15.34" y="31.96" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="24.29" y="31.96" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <rect x="33.24" y="31.96" width="4.15" height="4.15" rx=".92" ry=".92"
                                      fill="#9bc9ff" stroke="#1e81ce" stroke-miterlimit="10"></rect>
                                  <circle cx="43.16" cy="34.04" r="12.16" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <polyline points="50.14 28.82 39.77 39.81 35.41 35.28" fill="none" stroke="#1e81ce"
                                      stroke-miterlimit="10"></polyline>
                              </svg></div>
      <div class="left">
          <h3 class="text-2xl font-semibold mb-2 text-[var(--foreground)]">Seamless Scheduling</h3>
          <p class="mt-2 text-[1.1rem] text-gray-700">Schedule inspections, manage appointments, and assigning multiple inspectors is a breeze.</p>
      </div>
    </div>
    <div class="feature-card p-6 md:p-12 flex flex-col aos-init transition-all duration-300 w-full md:w-[calc(50%-1rem)]" data-aos="fade-up" data-aos-delay="500">
      <div class="icon mb-8 w-auto"><svg class="h-[90px]" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 61.32 47.33">
                                  <path d="M10.38,9.64v12.02h8.2v-12.02h-8.2Z" fill="#1e81ce"></path>
                                  <path
                                      d="M18.48,8.36h-7.98c-1,0-1.42.42-1.42,1.42v11.73c0,.99.44,1.43,1.42,1.43,1.32,0,2.64.01,3.97.01s2.64-.01,3.96-.01c1.01,0,1.44-.44,1.44-1.46.01-1.29,0-2.59,0-3.89v-3.91c0-1.31.01-2.62,0-3.93,0-.97-.42-1.39-1.39-1.39ZM18.58,21.66h-8.2v-12.02h8.2v12.02Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M36.2,8.36h-12.01c-.83,0-1.29.47-1.3,1.32-.01.71,0,1.42,0,2.13v1.06c0,1.17.38,1.55,1.57,1.55.96.01,1.91.01,2.87.01s1.9,0,2.86-.01h3.93s1.97,0,1.97,0c.98-.01,1.4-.44,1.41-1.43v-3.31c-.01-.86-.46-1.32-1.3-1.32ZM36.2,13.13h-12.03v-3.49h12.03v3.49Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M36.2,8.36h-12.01c-.83,0-1.29.47-1.3,1.32-.01.71,0,1.42,0,2.13v1.06c0,1.17.38,1.55,1.57,1.55.96.01,1.91.01,2.87.01s1.9,0,2.86-.01h3.93s1.97,0,1.97,0c.98-.01,1.4-.44,1.41-1.43v-3.31c-.01-.86-.46-1.32-1.3-1.32ZM36.2,13.13h-12.03v-3.49h12.03v3.49Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M37.49,18.42c-.02.51-.47.59-.74.59h-13c-.33,0-.58-.08-.71-.22-.1-.1-.15-.23-.15-.41.01-.15.01-.62.89-.62h12.98c.48.02.75.27.73.66Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M37.49,22.31c0,.4-.28.63-.76.63-1.09,0-2.19.01-3.28.01s-2.18-.01-3.27-.01c-.48,0-.77-.25-.77-.63s.29-.61.77-.62h6.55c.35.01.77.11.76.62Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M37.49,22.31c0,.4-.28.63-.76.63-1.09,0-2.19.01-3.28.01s-2.18-.01-3.27-.01c-.48,0-.77-.25-.77-.63s.29-.61.77-.62h6.55c.35.01.77.11.76.62Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M26.16,22.28c.01.36-.2.59-.58.65h-.41s-1.27.02-1.27.02c-.12,0-.24-.01-.36-.02-.41-.03-.65-.27-.64-.64,0-.36.26-.59.67-.59.32-.01.64-.02.97-.02s.66.01,1,.02c.38.01.61.22.62.58Z"
                                      fill="#1e81ce"></path>
                                  <path
                                      d="M26.16,22.28c.01.36-.2.59-.58.65h-.41s-1.27.02-1.27.02c-.12,0-.24-.01-.36-.02-.41-.03-.65-.27-.64-.64,0-.36.26-.59.67-.59.32-.01.64-.02.97-.02s.66.01,1,.02c.38.01.61.22.62.58Z"
                                      fill="#1e81ce"></path>
                                  <rect x="10.38" y="9.64" width="8.2" height="12.02" fill="#9bc9ff"></rect>
                                  <rect x="24.17" y="9.64" width="12.03" height="3.49" fill="#9bc9ff"></rect>
                                  <g id="b">
                                      <path
                                          d="M4.34,5.65c0-2.42,2.01-4.44,4.44-4.44h37.24c2.42,0,4.44,2.02,4.44,4.44v23.31H4.34V5.65ZM4.34,30.28h46.02v2.52H4.34v-2.52ZM51.68,33.3V5.65c0-3.13-2.53-5.65-5.66-5.65H8.78C5.65,0,3.13,2.52,3.13,5.65v27.65C-.11,42.39,0,42.09,0,42.29v.3c.85,1.46,2.04,2.65,3.44,3.47,1.4.82,3.01,1.27,4.73,1.27h38.36c3.33,0,6.46-1.81,8.17-4.74v-.3q.1,0,.1-.1c0-.1.21.5-3.12-8.89ZM22,46.02h-13.83c-2.52,0-4.94-1.21-6.46-3.13h20.29v3.13ZM32.09,46.02h-8.88v-3.13h8.88v3.13ZM46.53,46.02h-13.23v-3.13h19.69c-1.52,1.92-3.94,3.13-6.46,3.13ZM1.41,41.58l2.72-7.57h46.43l2.73,7.57H1.41Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M9.99,35.93h-1.31c-.3,0-.61.3-.61.61s.3.61.61.61h1.31c.3,0,.61-.3.61-.61s-.2-.61-.61-.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M15.04,35.93h-1.31c-.3,0-.61.3-.61.61s.3.61.61.61h1.31c.3,0,.61-.3.61-.61s-.2-.61-.61-.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M18.87,37.24h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M23.92,37.24h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M28.96,37.24h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M34.01,37.24h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M39.06,37.24h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M44.11,37.24h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M9.99,38.45h-1.31c-.3,0-.61.3-.61.61s.3.61.61.61h1.31c.3,0,.61-.3.61-.61s-.2-.61-.61-.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M15.04,38.45h-1.31c-.3,0-.61.3-.61.61s.3.61.61.61h1.31c.3,0,.61-.3.61-.61s-.2-.61-.61-.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M30.78,39.06c0-.3-.3-.61-.61-.61h-11.3c-.3,0-.61.3-.61.61s.3.61.61.61h11.41c.3.1.5-.2.5-.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M34.01,39.76h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M39.06,39.76h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                      <path
                                          d="M44.11,39.76h1.31c.3,0,.61-.3.61-.61s-.3-.61-.61-.61h-1.31c-.3,0-.61.3-.61.61-.1.3.2.61.61.61Z"
                                          fill="#1e81ce"></path>
                                  </g>
                                  <rect x="23.21" y="42.89" width="8.88" height="3.13" fill="#9bc9ff"></rect>
                                  <circle cx="50.9" cy="15.66" r="9.92" fill="#fff" stroke="#1e81ce"
                                      stroke-miterlimit="10"></circle>
                                  <path
                                      d="M54.61,16.13c-.63-.64-1.51-1.16-2.65-1.55l-.26-.09v-3.74c.29.08.55.2.77.39.38.32.64.69.78,1.12l1.88-.8c-.24-.71-.7-1.34-1.4-1.91-.54-.44-1.21-.7-2.03-.8v-1.57h-1.59v1.6c-.48.08-.92.21-1.33.42-.64.33-1.14.77-1.5,1.33-.36.56-.54,1.17-.54,1.82,0,.96.3,1.72.91,2.31.61.58,1.36,1.03,2.25,1.34l.21.07v4.38c-.3-.12-.58-.29-.83-.52-.5-.46-.85-1.06-1.05-1.79l-1.97.8c.33,1.17.94,2.07,1.82,2.72.62.45,1.3.75,2.03.88v1.61h1.59v-1.57c.5-.06,1-.19,1.48-.39.69-.29,1.26-.72,1.7-1.31.45-.59.67-1.32.67-2.19,0-1.07-.31-1.92-.94-2.56ZM49.37,13.44c-.37-.3-.56-.68-.56-1.13,0-.48.21-.88.62-1.19.2-.15.42-.26.66-.34v3.1c-.3-.14-.54-.29-.73-.44ZM52.76,20.11c-.31.23-.67.37-1.06.45v-3.89c.51.23.89.46,1.15.68.4.35.6.8.6,1.35,0,.6-.23,1.06-.69,1.4Z"
                                      fill="#1e81ce"></path>
                              </svg></div>
      <div class="left">
          <h3 class="text-2xl font-semibold mb-2 text-[var(--foreground)] text">Cost-Effective</h3>
          <p class="mt-2 text-[1.1rem] text-gray-700">Top-notch features at an affordable price, ideal for home inspectors.</p>
      </div>
    </div>
  </div>
</div>
            <div class="text-center">
                <div class="w-full flex items-center justify-center">
                    <div class="text-center mt-12">
                        <p class="text-[17px] sm:text-[17px] md:text-[20px]  max-w-[80%] mx-auto leading-[1.4] aos-init"
                            data-aos="fade-up" data-aos-delay="700">
                        <strong>Designed with the user in mind</strong>, Desklogic offers an intuitive
                            experience that simplifies every aspect of home inspections. From detailed reporting
                            to real-time updates and client management, our features save you time, reduce
                            errors, and improve the quality of your inspections. Focus on what matters most:
                            providing thorough and reliable inspections.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features bg-white py-20 md:py-40">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between flex-col-reverse md:flex-row">
                <div class="w-full md:w-1/2 mt-6 md:mt-0 order-2 mb-8 md:mb-0 md:order-1">
                    <figure class="mobile-mock bg-[var(--app-1)] rounded-[50px]"><img alt="DESKLOGIC Features" data-aos="fade-up"
                            loading="lazy" width="2549" height="2999" decoding="async" data-nimg="1"
                            class="img-fluid rounded aos-init"
                            srcset="https://www.desklogic.com//_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmobile.065a036a.png&amp;w=3840&amp;q=75 1x"
                            src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmobile.065a036a.png&amp;w=3840&amp;q=75"
                            style="color: transparent;"></figure>
                </div>
                <div class="w-full md:w-1/2 pr-0 md:pr-5">
                    <h2 class="font-bold text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] mb-6 aos-init"
                        data-aos="fade-up">Mobile-Ready Home Inspection Software</h2>
                    <h2 class="text-[19px] sm:text-[19px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] leading-[1.67em] mb-10 lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 aos-init"
                        data-aos="fade-in" data-aos-delay="50">Desklogic offers a comprehensive suite of tools
                        designed to streamline your home inspection process:</h2>
                    <ul class="mt-4 list-inside">
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Customizable inspection templates</li>
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Instant report generation</li>
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Mobile-friendly interface</li>
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Client management system</li>
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Integrated scheduling and invoicing</li>
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>Secure cloud storage for all your reports</li>
                        <li class="mt-2 flex items-center aos-init" data-aos="fade-in"><svg width="20" height="20"
                                viewBox="0 0 16 16" class="bg-[var(--app-2)] p-1 rounded-full mr-4">
                                <rect width="16" height="16" fill="none"></rect>
                                <path d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                    fill="white"></path>
                            </svg>One click to export all your data.</li>
                    </ul>
                    <div class="w-full">
                        
                        <a data-aos="fade-in" data-aos-delay="400" href="/features" class="aos-init max-[768px]:mx-auto block max-w-max"><span
                        class=" cursor-pointer inline-flex items-center px-8 py-5 mt-12 text-white bg-[var(--app-1)] uppercase hover:bg-[var(--app-2)] duration-300 ease-in-out rounded-full">Discover
                        Features</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-[#e9efff] py-32 relative">
        <div class="container mx-auto z-20 relative">
            <div class="text-center mb-20 px-4 md:px-0 ">
                <h2 class="font-bold text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] mb-6 aos-init"
                    data-aos="fade-up">Simple Pricing For Everyone</h2>
                <p class="text-2xl mt-4 aos-init" data-aos="fade-up" data-aos-delay="100">Affordable plans
                    with 30 days free trial and unlimited inspections.</p>
            </div>
            <div class="flex max-w-[1300px] mx-auto flex-wrap justify-center -px-4">
                <div class="w-full lg:w-1/3 px-4 mb-8 aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-white text-gray-800 relative z-40 overflow-hidden rounded-[20px] border hover:shadow-lg boreder-shades-100 p-6 md:p-12 md:pt-20 text-left transform transition duration-500 hover:scale-105 ">
                        <h6 class="text-xl font-semibold mb-4">Solo Inspector</h6>
                        <div class="text-5xl flex items-end font-bold  text-[var(--app-1)]""><sup
                                class="text-2xl">$</sup><span>69</span>
                            <p class="text-lg font-normal text-gray-500">/month</p>
                        </div>
                        <div class="flex items-center mt-4">
                            <p class="text-md font-normal text-gray-500 line-through">$99</p>
                            <p
                                class="text-xl font-bold  text-[var(--app-1)] bg-[var(--app-light)] px-3 py-1 ml-2 rounded-full">
                                SAVE 30%</p>
                        </div>
                        <p class="mt-4 border-b pb-8 border-b-[#2f448f47]">30 Days Free Trial. No Credit
                            Card Required.</p>
                        <ul class="mt-8 space-y-3">
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>Single Home Inspector</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>Unlimited Inspections</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>AI Assistant</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>24/7 Support</li>
                        </ul>
                        <div class="mt-8 z-40 relative"><a targe="_blank"
                                class="btn btn-primary text-white bg-[var(--app-1)] hover:bg-[var(--app-2)] py-3 px-6 rounded-full shadow-lg transition duration-300 "
                                href="https://portal.desklogic.com/auth/signup">Choose plan</a></div>
                        <div
                            class="absolute -bottom-1 -right-1 flex justify-center items-center w-5 h-5 z-10 opacity-20">
                            <div class="animated_circle  bg-shades-100"></div>
                            <div class="animated_circle2 bg-shades-200"></div>
                            <div class="animated_circle3 bg-shades-300"></div>
                            <div class="animated_circle4 bg-shades-400"></div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8 aos-init" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-white text-gray-800 relative z-40 overflow-hidden rounded-[20px] border hover:shadow-lg boreder-shades-100 p-6 md:p-12 md:pt-20 text-left transform transition duration-500 hover:scale-105   border-[var(--app-2)]">
                        <h6 class="text-xl font-semibold mb-4">Team Inspect</h6>
                        <div class="text-5xl flex items-end font-bold  text-[var(--app-1)]""><sup
                                class="text-2xl">$</sup><span>99</span>
                            <p class="text-lg font-normal text-gray-500">/month</p>
                        </div>
                        <div class="flex items-center mt-4">
                            <p class="text-md font-normal text-gray-500 line-through">$199</p>
                            <p
                                class="text-xl font-bold  text-[var(--app-1)] bg-[var(--app-light)] px-3 py-1 ml-2 rounded-full">
                                SAVE 50%</p>
                        </div>
                        <p class="mt-4 border-b pb-8 border-b-[#2f448f47]">30 Days Free Trial. No Credit
                            Card Required.</p>
                        <ul class="mt-8 space-y-3">
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>Up to three employees</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>Unlimited Inspections</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>AI Assistant</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>24/7 Support</li>
                        </ul>
                        <div class="mt-8 z-40 relative"><a targe="_blank"
                                class="btn btn-primary text-white bg-[var(--app-1)] hover:bg-[var(--app-2)] py-3 px-6 rounded-full shadow-lg transition duration-300 "
                                href="https://portal.desklogic.com/auth/signup">Choose plan</a></div>
                        <div class="mt-4 absolute top-[50px] right-0"><span
                                class="bg-app-2 text-white px-4 py-2 rounded-l-full text-sm">Most
                                Popular</span></div>
                        <div
                            class="absolute -bottom-1 -right-1 flex justify-center items-center w-5 h-5 z-10 opacity-20">
                            <div class="animated_circle  bg-shades-100"></div>
                            <div class="animated_circle2 bg-shades-200"></div>
                            <div class="animated_circle3 bg-shades-300"></div>
                            <div class="animated_circle4 bg-shades-400"></div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8 aos-init" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-white text-gray-800 relative z-40 overflow-hidden rounded-[20px] border hover:shadow-lg boreder-shades-100 p-6 md:p-12 md:pt-20 text-left transform transition duration-500 hover:scale-105 ">
                        <h6 class="text-xl font-semibold mb-4">Unlimited Access</h6>
                        <div class="text-5xl flex items-end font-bold  text-[var(--app-1)]""><sup
                                class="text-2xl">$</sup><span>199</span>
                            <p class="text-lg font-normal text-gray-500">/month</p>
                        </div>
                        <div class="flex items-center mt-4">
                            <p class="text-md font-normal text-gray-500 line-through">$499</p>
                            <p
                                class="text-xl font-bold  text-[var(--app-1)] bg-[var(--app-light)] px-3 py-1 ml-2 rounded-full">
                                SAVE 60%</p>
                        </div>
                        <p class="mt-4 border-b pb-8 border-b-[#2f448f47]">30 Days Free Trial. No Credit
                            Card Required.</p>
                        <ul class="mt-8 space-y-3">
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>Unlimited Employees</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>Unlimited Inspections</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>AI Assistant</li>
                            <li class="flex justify-start items-left text-gray-700"><svg width="20" height="20"
                                    viewBox="0 0 16 16" class="bg-app-2 p-1 rounded-full mr-4">
                                    <rect width="16" height="16" fill="none"></rect>
                                    <path
                                        d="M0,9.014L1.414,7.6L5.004,11.189L14.593,1.6L16.007,3.014L5.003,14.017L0,9.014Z"
                                        fill="white"></path>
                                </svg>24/7 Support</li>
                        </ul>
                        <div class="mt-8 z-40 relative"><a targe="_blank"
                                class="btn btn-primary text-white bg-[var(--app-1)] hover:bg-[var(--app-2)]  py-3 px-6 rounded-full shadow-lg transition duration-300 "
                                href="https://portal.desklogic.com/auth/signup">Choose plan</a></div>
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
</div> 


    <section class="cta text-white bg-[var(--app-1)] py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h2 class="font-bold text-white text-[35px] sm:text-[35px] md:text-[35px] lg:text-[48px] 2xl:text-[58px] leading-[1.35em] tracking-[-0.5px] md:tracking-[-0.5px] lg:tracking-[-2px] aos-init"
                data-aos="fade-up" data-aos-delay="0">Ready to Transform<br> Your Home Inspection Process?</h2>
                       <p class="lead text-[19px] sm:text-[19px] md:text-[19px] lg:text-[19px] 2xl:text-[22px] mb-6 block aos-init"
                data-aos="fade-up" data-aos-delay="100">Experience the future of home inspections. Sign up now!
            </p><a
                class="bg-[var(--app-2)] text-white py-4 px-8 mt-6 rounded-full shadow-lg transition duration-300 hover:bg-gray-900 inline-block uppercase"
                href="https://portal.desklogic.com/auth/signup">Start Your Free Trial</a>
        </div>
    </section>
    <div class="relative  mx-auto bg-[transparent]">


        <?php get_template_part('template-parts/faq-block'); ?>
    </div>



   
<?php
get_footer();
?>