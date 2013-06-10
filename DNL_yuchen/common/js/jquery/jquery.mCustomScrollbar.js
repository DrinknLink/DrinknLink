/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#maximizeBtn').hide();
    $("#minimizeBtn").click(function() {
        $("#choiceDiv").hide("fast");
        $("#maximizeBtn").show("slow");
    });
    $("#maximizeBtn").click(function() {
        $("#choiceDiv").show("fast");
        $("#maximizeBtn").hide("slow");
    });
});

(function($) {
    $(window).load(function() {
        $(".content").mCustomScrollbar({
            theme: "dark"
        });
    });
})(jQuery);


