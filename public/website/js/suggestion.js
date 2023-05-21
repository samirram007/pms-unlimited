
function suggestme(inputString,e)
{
//alert(inputString);
if(e.keyCode==40 || e.keyCode==38){
	//setTimeout("$('#suggestme').fadeOut();", 600);
return false;
}
 
/*if(inputString.length == 0)
 {
			$('#suggestme').fadeOut();
		} 
else {*/
var a =0;
	if (a==0){
		$('#SearchBox').addClass('load');
			$.post("process.php", {"name": ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestme').fadeIn();					
					$('#suggestmeList').html(data);
					$('#SearchBox').removeClass('load');
					$(document).ajaxStop(function(){
						var chosen="";
						$("#SearchBox").keydown(function(e){
							var list = $(this);   
							if(e.keyCode==40){
								if(chosen === "") {
										chosen = 0;
									} else if((chosen+1) < $('.searchsugg li').length) {
										chosen++; 
									}								
								 $('.searchsugg li').removeClass('active');
								  $('.searchsugg li:eq('+chosen+')').addClass('active');
							$('#SearchBox').val($('.searchsugg li:eq('+chosen+')').text());
							$("#AccountID").val($('.searchsugg li:eq('+chosen+')').attr("id"));
								return false;
							}
							else if(e.keyCode==38){
								 if(chosen === "") {
									chosen = 0;
								} else if(chosen > 0) {
									chosen--;            
								}
								$('.searchsugg li').removeClass('active');
								$('.searchsugg li:eq('+chosen+')').addClass('active');
								$('#SearchBox').val($('.searchsugg li:eq('+chosen+')').text());
						$("#AccountID").val($('.searchsugg li:eq('+chosen+')').attr("id"));
								return false;
							}
							
						});
					});
					
				}
			});
		}
}
function fillSearch(val,val_id)
{
//alert(val_id);
$("#SearchBox").val(val);

$("#AccountID").val(val_id);

//$("#SearchForm").submit();
setTimeout("$('#suggestme').fadeOut();", 600);
}

function activate(event){
	  var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13' || keycode=='9'){
		 // alert('You pressed a "TAB" key in textbox');  
		setTimeout("$('#suggestme').fadeOut();", 200);
//        alert('You pressed a "enter" key in textbox');  
    }
	}
$(document).ready(function(){
$("#SearchForm").mouseleave(function(){
	setTimeout("$('#suggestme').fadeOut();", 600);
	});
 
});