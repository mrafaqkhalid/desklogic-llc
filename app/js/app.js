jQuery(document).ready(function ($) {
    // Toggle mobile menu visibility
    $('#mobileMenuToggle').on('click', function () {
      $('#mobileMenu').slideToggle(250);
      // Toggle icons
      $('#menuIcon').toggleClass('hidden');
      $('#closeIcon').toggleClass('hidden');
    });

    // Toggle solutions submenu in mobile view
    $('#mobileSolutionsToggle').on('click', function () {
      $('#mobileSolutionsMenu').slideToggle(200);
    });

    // --- Desktop Dropdown Click Logic ---

    // 1. Toggle dropdown on click
    $('.group > span').on('click', function(event) {
        event.stopPropagation();
        var $dropdown = $(this).siblings('.desktop-dropdown');

        // Hide any other open dropdowns
        $('.desktop-dropdown').not($dropdown).addClass('invisible opacity-0').removeClass('visible opacity-100');

        // Toggle the current dropdown's visibility
        if ($dropdown.hasClass('invisible')) {
            $dropdown.removeClass('invisible opacity-0').addClass('visible opacity-100');
        } else {
            $dropdown.addClass('invisible opacity-0').removeClass('visible opacity-100');
        }
    });

    // sign in button hide
    
        $('#mobile-menu-toggle').on('click', function() {
            $('body').toggleClass('menu-open');
        });

    // 2. Close dropdown when clicking outside
    $(document).on('click', function() {
        $('.desktop-dropdown').addClass('invisible opacity-0').removeClass('visible opacity-100');
    });

    // 3. Prevent dropdown from closing when clicking inside it
    $('.desktop-dropdown').on('click', function(event) {
        event.stopPropagation();
    });

    // --- Swiper Slider Initialization ---
    if ($('.features-slider').length) {
        var swiper = new Swiper(".features-slider", {
            slidesPerView: 1.1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                        fill: 'row',
                    },
                }
            }
        });
    }
});

// FAQ section behavior 


document.querySelectorAll('.faq-question').forEach(function(q) {
  q.addEventListener('click', function() {
    const answer = this.parentElement.querySelector('.faq-answer');
    answer.classList.toggle('hidden');
    // Optionally rotate the icon
    const icon = this.querySelector('svg');
    if (icon) icon.classList.toggle('rotate-45');
    // Toggle custom green border on parent .faq
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