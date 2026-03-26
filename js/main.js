// Bravo - Minimal UI Interactions (no data logic)
// - Quantity controls on product details page
// - Admin sidebar collapse

$(function () {
    // Quantity controls (single instance, UI only)
    $('.qty-plus').on('click', function () {
        var $input = $('.qty-input');
        var current = parseInt($input.val(), 10);

        if (isNaN(current)) {
            current = 1;
        }

        $input.val(current + 1);
    });

    $('.qty-minus').on('click', function () {
        var $input = $('.qty-input');
        var current = parseInt($input.val(), 10);

        if (isNaN(current) || current <= 1) {
            current = 1;
        } else {
            current = current - 1;
        }

        $input.val(current);
    });

    // Admin sidebar toggle
    $('.admin-sidebar-toggle').on('click', function () {
        $('.admin-layout').toggleClass('sidebar-collapsed');
    });
});


