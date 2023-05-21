var addComment={moveForm:function(a,b,c,d){var e,f=this,g=f.I(a),h=f.I(c),i=f.I("cancel-comment-reply-link"),j=f.I("comment_parent"),k=f.I("comment_post_ID");if(g&&h&&i&&j){f.respondId=c,d=d||!1,f.I("wp-temp-form-div")||(e=document.createElement("div"),e.id="wp-temp-form-div",e.style.display="none",h.parentNode.insertBefore(e,h)),g.parentNode.insertBefore(h,g.nextSibling),k&&d&&(k.value=d),j.value=b,i.style.display="",i.onclick=function(){var a=addComment,b=a.I("wp-temp-form-div"),c=a.I(a.respondId);if(b&&c)return a.I("comment_parent").value="0",b.parentNode.insertBefore(c,b),b.parentNode.removeChild(b),this.style.display="none",this.onclick=null,!1};try{f.I("comment").focus()}catch(l){}return!1}},I:function(a){return document.getElementById(a)}};
// JavaScript Document
function getmenu(val01)
{
	$(".se-pre-con").fadeOut("slow");
	var pg="home.php";
	if (val01==101){	pg="home.php";}
	else if (val01==2){	pg="aboutus.php";}
	else if (val01==3){	pg="products.php";}
	else if (val01==4){	pg="approvals.php";}
	else if (val01==5){	pg="enquery.php";}
	else if (val01==6){	pg="contact.php";}
	else if (val01==7){	pg="login.php";}
	else if (val01==8){	pg="userpage.php";}
	else if (val01==0)
	{	
						pg="underconstruction.php";
						//alert(pg);
						}
		$.post(pg,function(data){
			//ani();
			$("#mainarea").html(data);});
	}
	
function getpage(val01)
{
	$(".se-pre-con").fadeOut("slow");
	//alert(pg);
	var pg="home.php";
	if (val01==1){	pg="home.php";}
	else if (val01==2){	pg="aboutus.php";}
	else if (val01==3){	pg="products.php";}
	else if (val01==4){	pg="approvals.php";}
	else if (val01==5){	pg="enquery.php";}
	else if (val01==6){	pg="contact.php";}
	else if (val01==7){	pg="login.php";}
	else if (val01==8){	pg="userpage.php";}
	else if (val01==0){	
						pg="underconstruction.php";
						
						}
		$.post(pg,function(data){
			//ani();
			$("#mainarea").html(data);
			});
	}
	
function ani()
{
	$(".se-pre-con").fadeOut("slow");
			//$('#loading').show(1000);
		//	 $('#loading').fadeOut(1000);
//$('#loading').removeClass("modal");
 
	}
function getmainsubmenu(val01)
{
	var pg="sql/head.php";
		$.post(pg,{menuid:val01},function(data){
			//ani();
			$("#mainarea").html(data);});
			
	}	
function getmainmenu(val01)
{
	//alert(val01);
	var pg="js/menu.php";
		$.post(pg,{id:val01},function(data){
			var pg1=data;
					$.post(pg1,function(data1){
						//ani();
						$("#mainarea").html(data1);});
			})
	}	
function getsubitem(val01,val02)
{
 	var pg="sql/add.php";
	$.post(pg,{menuid:val01,mastertypeid:val02},function(data){
		//ani();
		$("#searchresult").html(data);});
}	
function getsubitem_backup(val01)
{
 
	/*var pg="js/menu.php";
	
	// sleep();
		$.post(pg,{id:val01},function(data){
			//$("#errresult").html(data);
			//alert(data);
			var pg1=data;
					$.post(pg1,function(data1){ani();$("#searchresult").html(data1);});
		//	alert(data);
			})*/
	}
 function getsubitem_id(val01,val02)
 {
	var pg="sql/edit.php";
	//alert(val02);
		$.post(pg,{id:val02},function(data){//ani();
		$("#searchresult").html(data);});
	 
	}


 function getsubitem_id_backup(val01,val02)
 {
 
	var pg="js/menu.php";
	
		$.post(pg,{id:val01},function(data){
			//$("#errresult").html(data);
			//alert(data);
			var pg1=data;
					$.post(pg1,{id:val02},function(data1){//ani();
					$("#searchresult").html(data1);});
		//	alert(data);
			})
	}
 function getmenuitem(val01)
 {
 
	var pg="js/menu.php";
	
			$.post(pg,{id:val01},function(data){
			var pg1=data;
					$.post(pg1,function(data1){//ani();
					$("#searchresult").html(data1);});
		//	alert(data);
			})
	}	
	
 function SearchMember(val01)
 {
	var pg="sql/membersearch.php";
	//alert(pg);
	$.post(pg,function(data){
		$("#mainarea").html(data); 
		if (val01==1)
		{ 
		newMember();}
		else{
				searchcontent(34,34,10,0);
			}
		
		});
		newMember();
	}
	function Searchscheme(val01)
	{
	var pg="sql/schemesearch.php";
	//alert(pg);
		$.post(pg,function(data)
		{
			$("#mainarea").html(data); 
			if (val01==1)
						{ 
			newscheme();
						}
			else{
					searchschemecontent(32,33,10,0);
				}
			
		});
			newscheme();
	}	
	



function newtransaction()
{
	var pg="transaction_new.php";
	$.post(pg,function(data){$("#searchresult").html(data);});
}


function getviewtransaction(val01)
{
	$(".se-pre-con").fadeOut("slow");
	var pg="viewtransaction.php";
	//alert("getviewtransaction");
	$.post(pg,{id:val01},function(data){$("#mainarea").html(data);});
}


