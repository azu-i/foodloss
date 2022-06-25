$(document).ready(() => {
    $('.drawerOpen').on('click', function() {
        $(".globalNavi").toggleClass("isOpen");
    });

    $('.naviItem').on('click', function() {
        $(this).toggleClass("active");
    });

})