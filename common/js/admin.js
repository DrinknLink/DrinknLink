$(function(){
	url = base_url+'/main/getNavBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: {
			  'isAdmin': true
		  },
		  success: function(json){
			  $("body").prepend(json.html);
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
	
    ajaxInGeneralInfo();

    /**
     * wrapped sub-tab function 
     * @author Yuchen
     * @version 1.0 15-08-2013
     */
    $(".sub-tab").click(function(){
    	var url = base_url+"/Dario/admin/"+$(this).attr('data');
    	 $.ajax({
             type: 'POST',
             data: {},
             url: url,
             success: function(json) {
                 $("#main").html(json.html);
                 ajaxInGeneralInfo();
             },
             error: function(json) {
             },
             dataType: 'json'
         });
    });

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
    $(".side-tab").click(function() {
        $.ajax({
            type: 'POST',
            url: "Dario/admin/helpImage",
            success: function(json) {
                $("#content").html(json.html);
            },
            dataType: 'json'
        });
    });	
    
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



