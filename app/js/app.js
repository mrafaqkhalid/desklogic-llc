jQuery(document).ready(function ($) {
    // Toggle mobile menu visibility
    $('#mobileMenuToggle').on('click', function () {
      $('#mobileMenu').slideToggle(250);
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

    // 2. Close dropdown when clicking outside
    $(document).on('click', function() {
        $('.desktop-dropdown').addClass('invisible opacity-0').removeClass('visible opacity-100');
    });

    // 3. Prevent dropdown from closing when clicking inside it
    $('.desktop-dropdown').on('click', function(event) {
        event.stopPropagation();
    });
});

