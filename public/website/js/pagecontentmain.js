// JavaScript Document

$(document).ready(function(){
	
    $("#Contactus").click(function(){
		  $('.page_content').load("contact.php", function() {
                
				// if you want to add someting in this function you can add..
          });
    });
    $("#album01").click(function(){
		  $('.page_content').load("gallery01.php", function() {
                
				// if you want to add someting in this function you can add..
          });
    });
    $("#album02").click(function(){
      $('.page_content').load("gallery02.php", function() {
                
        // if you want to add someting in this function you can add..
          });
    });
    $("#album03").click(function(){
      $('.page_content').load("gallery03.php", function() {
                
        // if you want to add someting in this function you can add..
          });
    });
    $("#album04").click(function(){
      $('.page_content').load("gallery04.php", function() {
                
        // if you want to add someting in this function you can add..
          });
    });
});