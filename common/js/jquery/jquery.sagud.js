/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(larg);

$(window).resize(larg);

// function which triggers when screen changes 
function larg() {
    var larghezza = $(document).width();

    if ($('#navbar-info').width() > 550 && $('#navbar-info').width() <= 600) {
        $("#navbar-name").css("width", "180px");
    }
    else if ($('#navbar-info').width() > 600 && $('#navbar-info').width() <= 800) {
        $("#navbar-name").css("width", "240px");
    }
    else if ($('#navbar-info').width() > 800 && $('#navbar-info').width() <= 1000) {
        $("#navbar-name").css("width", "450px");
    }
    else if ($('#navbar-info').width() > 1000) {
        $("#navbar-name").css("width", "600px");
    } else {
        $("#navbar-name").css("width", "90px");
    }

    if ($(window).width() < 990) {

        // hide text
        $(".handleBar-text").hide();

        // new icon positions
        $(".content-img").css("float", "none");
        $(".content-img").css("margin", "0 auto");
        $(".design-img").css("float", "none");
        $(".design-img").css("margin", "-2px auto");
        $(".category-img").css("float", "none");
        $(".category-img").css("margin", "-2px auto");
        $(".account-img").css("float", "none");
        $(".account-img").css("margin", "-1px auto");

//        if (!$(".brElement").length > 0) {
//            $(".newLineSpan").after('<br class="brElement" />');
//            $(".newlineCorrection").css("margin-top", "1%");
//        }


    } else {

        // test show agai
        $(".handleBar-text").show();

        // back to position at start
        $(".content-img").css("float", "left");
        $(".content-img").css("margin", "0px auto");
        $(".design-img").css("float", "left");
        $(".design-img").css("margin", "-2px auto");
        $(".category-img").css("float", "left");
        $(".category-img").css("margin", "-2px auto");
        $(".account-img").css("float", "left");
        $(".account-img").css("margin", "-1px auto");

//        $(".brElement").remove();
//        $(".newlineCorrection").css("margin-top", "0%");

    }

    // left bar functions
    if ($(window).width() < 1200 && $(window).width() >= 990) {
        $(".function-name").css("width", "125px");
        $(".dayName").css("width", "10%");
    } else if ($(window).width() < 990) {
        $(".function-name").css("width", "70px");
        $(".dayName").css("width", "8%");
    } else {
        $(".function-name").css("width", "160px");
        $(".dayName").css("width", "14%");
    }
    $(".jaButton").html($(window).width());


    // tablet size fix left nav and content main page
//    if ($(window).width() < 860 && $(window).width() >= 700) {
//        $('.row-fluid [class*="offset"]:first-child').css("margin-left", "25.5%");
//    } else if ($(window).width() < 783 && $(window).width() >= 700) {
//        $('.row-fluid [class*="offset"]:first-child').css("margin-left", "25.5%");
//    } else {
//        $('.row-fluid [class*="offset"]:first-child').css("margin-left", "");
//    }

}


$(document).ready(function() {

    ajaxInGeneralInfo();


    // ajax refreshing mini navbar
    $("#pageLayout").click(function() {
        $.ajax({
            type: 'POST',
            url: base_url+"Dario/admin/pageLayout",
            success: function(json) {
                $("#main").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#generalInfo").click(function() {
    	var url = base_url+'/Dario/admin/generalInfo';
        $.ajax({
            type: 'POST',
            url: url,
            success: function(json) {
            	alert(2);
                $("#main").html(json.html);
                ajaxInGeneralInfo();
            },
            error: function(){
    		  alert('error');
            }, 
            dataType: 'json'
        });
    });
	
    $("#eventsPromotions").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/eventsPromotions",
            success: function(json) {
                $("#main").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#interactionSM").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/interactionSM",
            success: function(json) {
                $("#main").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#reviews").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/reviews",
            success: function(json) {
                $("#main").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#menuReservations").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/menuReservations",
            success: function(json) {
                $("#main").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#media").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/media",
            success: function(json) {
                $("#main").html(json.html);
            },
            dataType: 'json'
        });
    });
    // END OF ajax refreshing mini navbar

});


function ajaxInGeneralInfo() {
    // functions for button to stay active
    $("div.nav-fun-buttons").click(function() {

        if ($(this).hasClass("jaButtonActive")) {
            $(this).removeClass("jaButtonActive");
            $(this).addClass('neeButtonActive');
        } else {
            $(this).removeClass("neeButtonActive");
            $(this).addClass('jaButtonActive');
        }

    });

    // ajax refreshing left side nav (with switch)
    $("#helpButton").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/helpImage",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#Algemene").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/algemene",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#Openingstijden").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/openingstijden",
            success: function(json) {
                $("#content").html(json.html);
//                if (!$(".brElement").length > 0) {
//                    $(".newLineSpan").after('<br class="brElement" />');
//                    $(".newlineCorrection").css("margin-top", "1%");
//                }
            },
            dataType: 'json'
        });
    });
    $("#About").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/about",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#Crew").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/crew",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#News").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/news",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#History").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/history",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    $("#Beers").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/beers",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });
    // END OF ajax refreshing left side nav (with switch)

}



