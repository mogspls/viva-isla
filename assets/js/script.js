$(document).ready(function(){
    // Search function
    $("header#main-menu nav a#search").on('click', function(){
        $("header#main-menu nav div#search").slideToggle(50);
        $("header#main-menu nav ul").slideToggle(50);
        
//        $(this).toggle(function() {
//            $(this).html('Before');
//        }, function() {
//            $(this).html('After');
//        });
    });
    // Hamburger
    $('#hamburger').click(function(){
        // Open Navigation Panel on Mobile View
        $("header#main-menu nav").toggleClass('openNav');
    })
})