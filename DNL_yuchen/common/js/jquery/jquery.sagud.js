/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    // city search google maps
    $('#maximizeBtn').hide();
    $("#minimizeBtn").click(function() {
        $("#choiceDiv").hide("fast");
        $("#maximizeBtn").show("slow");
    });
    $("#maximizeBtn").click(function() {
        $("#choiceDiv").show("fast");
        $("#maximizeBtn").hide("slow");
    });

    // grading
    $(".grade1").on("mouseover", function() {
        $(this).css("background-position", "0px 0px");
    });
    $(".grade1").on("mouseout", function() {
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade2").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade2").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade3").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade3").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade4").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade4").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade5").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(".grade4").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade5").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(".grade4").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade6").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(".grade4").css("background-position", "0px 0px");
        $(".grade5").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade6").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(".grade4").css("background-position", "-33px -47px");
        $(".grade5").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade7").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(".grade4").css("background-position", "0px 0px");
        $(".grade5").css("background-position", "0px 0px");
        $(".grade6").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade7").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(".grade4").css("background-position", "-33px -47px");
        $(".grade5").css("background-position", "-33px -47px");
        $(".grade6").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade8").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(".grade4").css("background-position", "0px 0px");
        $(".grade5").css("background-position", "0px 0px");
        $(".grade6").css("background-position", "0px 0px");
        $(".grade7").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade8").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(".grade4").css("background-position", "-33px -47px");
        $(".grade5").css("background-position", "-33px -47px");
        $(".grade6").css("background-position", "-33px -47px");
        $(".grade7").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade9").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(".grade4").css("background-position", "0px 0px");
        $(".grade5").css("background-position", "0px 0px");
        $(".grade6").css("background-position", "0px 0px");
        $(".grade7").css("background-position", "0px 0px");
        $(".grade8").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade9").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(".grade4").css("background-position", "-33px -47px");
        $(".grade5").css("background-position", "-33px -47px");
        $(".grade6").css("background-position", "-33px -47px");
        $(".grade7").css("background-position", "-33px -47px");
        $(".grade8").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    $(".grade10").on("mouseover", function() {
        $(".grade1").css("background-position", "0px 0px");
        $(".grade2").css("background-position", "0px 0px");
        $(".grade3").css("background-position", "0px 0px");
        $(".grade4").css("background-position", "0px 0px");
        $(".grade5").css("background-position", "0px 0px");
        $(".grade6").css("background-position", "0px 0px");
        $(".grade7").css("background-position", "0px 0px");
        $(".grade8").css("background-position", "0px 0px");
        $(".grade9").css("background-position", "0px 0px");
        $(this).css("background-position", "0px 0px");
    });
    $(".grade10").on("mouseout", function() {
        $(".grade1").css("background-position", "-33px -47px");
        $(".grade2").css("background-position", "-33px -47px");
        $(".grade3").css("background-position", "-33px -47px");
        $(".grade4").css("background-position", "-33px -47px");
        $(".grade5").css("background-position", "-33px -47px");
        $(".grade6").css("background-position", "-33px -47px");
        $(".grade7").css("background-position", "-33px -47px");
        $(".grade8").css("background-position", "-33px -47px");
        $(".grade9").css("background-position", "-33px -47px");
        $(this).css("background-position", "-33px -47px");
    });
    
});

$(document).ready(function() {
    $("ul.pagination3").quickPagination({pagerLocation: "before", pageSize: "3"});
});

$(function() {
    dateSelector = $("#calendarFilterBox").calendarPicker({
        monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        dayNames: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        useWheel: false,
        callbackDelay: 500,
        years: 1,
        months: 6,
        days: 15,
        showDayArrows: true,
        callback: function(cal) {
            $("#mydate").html(cal.currentDate + "");
        }});
});

(function($) {
    $(window).load(function() {
        $(".content").mCustomScrollbar({
            theme: "dark"
        });
    });
})(jQuery);


