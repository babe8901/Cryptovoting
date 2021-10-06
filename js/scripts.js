$(document).ready(function() {
    $('#mycarousel').carousel({ interval : 2000});

    $('#carouselButton').click(function() {
        if ($('#carouselButton').children('span').hasClass('fa-pause')) {
            $('#mycarousel').carousel('pause');
            $('#carouselButton').children('span').removeClass('fa-pause');
            $('#carouselButton').children('span').addClass('fa-play');
        } else if ($('#carouselButton').children('span').hasClass('fa-play')) {
            $('#mycarousel').carousel('cycle');
            $('#carouselButton').children('span').removeClass('fa-play');
            $('#carouselButton').children('span').addClass('fa-pause');
        }
    });

    $('#reserveTable').click(function() {
        console.log("reserve");
        $('#reserveModal').modal('toggle');
    });
    
    $('.reserveCancel').click(function() {
        $('#reserveModal').modal('toggle');
    });

    $('#loginButton').click(function() {
        console.log("login");
        $('#loginModal').modal('toggle');
    });

    $('.loginCancel').click(function() {
        $('#loginModal').modal('toggle');
    });

    $('#registerButton').click(function() {
        console.log("register");
        $('#registerModal').modal('toggle');
    });

    $('.registerCancel').click(function() {
        $('#registerModal').modal('toggle');
    });

    $('#castVote').click(function() {
        console.log("cast vote");
        $('#voteModal').modal('toggle');
    });

    $('.voteCancel').click(function() {
        $('#voteModal').modal('toggle');
    });
})