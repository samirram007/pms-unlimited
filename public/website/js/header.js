// JavaScript Document
function getproduct_p(){
			var id=$("#pal").val();
			var pg =null;
			if (id==2)
			{pg="modules/productgroup.php";}
			else if (id==3)
			{pg="modules/productcategory.php";}
			else
			{pg="modules/products.php";}
			$.post(pg,function(data){$("#result").html(data);
		});
		}
function getproduct(val0,val1){
	//alert(val0+String(val1));
			var pg ="modules/products.php";
			var pgtype=null;
			if (val1==2)
			{pgtype="grp";}
			else if (val1==3)
			{pgtype="cat";}
			var typeval=val0;
			//alert(pgtype);
						//alert(typeval);
			$.post(pg,{type:pgtype,t_value:typeval},function(data){$("#result").html(data)});
	}
	
	function getcategory(){
	//alert(val0+String(val1));
			var pg ="modules/productcategory.php";
			
						//alert(typeval);
			$.post(pg,function(data){$("#result").html(data)});
			//alert("category");
	}
	function getgroup(){
	//alert(val0+String(val1));
			var pg ="modules/productgroup.php";
			$.post(pg,function(data){$("#result").html(data)});
			//alert("group");
	}
function addtocart(val0,val1,val2){
		var pid=val0;
		var price=val1;
		var qty=$("#quantity"+pid).val();
		var pg="modules/cart.class.php";
		
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		$.post(pg,{pid:pid,qty:qty,price:price},function(data){});
		$("#quantity"+pid).val(1);
	//	alert(qty+" added to the cart");
		$("#ppp"+pid).html("<div>&nbsp;"+qty+" Unit added to <span class='glyphicon glyphicon-shopping-cart' ><span> = Rs. "+price*qty+".00</div>");
//		alert(qty+" added to the cart");
		//alert(html(data))
		}	
		
	function emptycart(){
		var pg="modules/cart.empty.php";
		
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		$.post(pg,function(data){alert(data)});

		//alert(html(data))
		}
		
	function cart_removeitem(val0){
	var pg="modules/cart.removeitem.php";
	var pid=val0;
		$.post(pg,{pid:pid},function(data){alert(data); showcart_transaction();});
	}
	
	function switchview(val0){
		var pg="modules/switchview.php";
			var vw=val0;			
			$.post(pg,{vw:vw},function(data){});
			//alert(vw);
		}
		
		function signup(){
		 $("#signupresult").val(" ..");
	var pg="modules/signup.class.php";
	var name=$("#name").val();
		var email=$("#email").val();
			var mob=$("#mob").val();
				var password=$("#password").val();
					var repassword=$("#repassword").val();
					//$("#chkerror").val("password match ..");
					if(password==repassword)
					{
						//$("#chkerror").val("password match ..");
//						alert("password match ..");
//	alert("password: "+password+"  Name:"+name +" mob: " +mob +" email: "+email);
					
						$.post(pg,{name:name,email:email,mob:mob,password:password},function(data){$("#signupresult").html(data)});
						//alert(html(data));
						}else {
							$("#signupresult").val("password does not match ..");
							}
	}

	$(function(){
    $(window).resize(function(){
        placeFooter();
    });
    placeFooter();
    // hide it before it's positioned
    $('#footer').css('display','inline');
});

function placeFooter() {    
    var windHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var offset = parseInt(windHeight) - parseInt(footerHeight);
    $('#footer').css('top',offset);
}
function getaccountdetails(val01){
	var pg ="modules/memberaccount.php";
			
						//alert(typeval);
						var mid=val01;
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
	function getprofiledetails(val01){
	var pg ="modules/memberprofile.php";
			
						//alert(typeval);
						var mid=val01;
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
	function showtree(val01){
	var pg ="modules/tree.php";
			
						//alert(typeval);
						var mid=val01;
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
		function showitem(val01){
	var pg ="modules/products.php";
			
						//alert(typeval);
						var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
		function showmembers(){
	var pg ="modules/members.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
	function showcustomers(){
	var pg ="modules/customers.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
	function showtransactions(){
	var pg ="modules/transactions.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
		function showregistration(){
	var pg ="modules/registration.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
	function showjournal(){
		var pg ="modules/list.journal.php";
		$.post(pg,function(data){$("#memberresult").html(data)});
		}
		function showtrialbalance(){
		var pg ="modules/trialbalance.php";
		$.post(pg,function(data){$("#memberresult").html(data)});
		}
	function showincomestatement(){
		var pg ="modules/incomestatement.php";
		$.post(pg,function(data){$("#memberresult").html(data)});
		}
		
	function shownewjournalentry(){
		var pg ="modules/entry.journal.php";
		$.post(pg,function(data){$("#memberresult").html(data)});
		}
			function showadmin(){
	var pg ="modules/adminprogram.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
 function showcompany(){
	var pg ="modules/list.company.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
function showlist(val01){
	var pg ="";
	if (val01==1){pg ="modules/list.company.php";}
	else if (val01==2) {pg ="modules/list.costcategory.php";}
	else if (val01==3) {pg ="modules/list.costcenter.php";}
	else if (val01==4) {pg ="modules/list.godown.php";}
	else if (val01==5) {pg ="modules/list.acmastergroup.php";}
	else if (val01==6) {pg ="modules/list.acgroup.php";}
	else if (val01==7) {pg ="modules/list.acledger.php";}
	else if (val01==8) {pg ="modules/list.acsubledger.php";}
	else if (val01==9) {pg ="modules/list.vouchercategory.php";}
	else if (val01==10) {pg ="modules/list.vouchertype.php";}
	else if (val01==11) {pg ="modules/list.taxclass.php";}
	else if (val01==12) {pg ="modules/list.taxtype.php";}
	else if (val01==13) {pg ="modules/list.tax.php";}
	else if (val01==14) {pg ="modules/list.itemgroup.php";}
	else if (val01==15) {pg ="modules/list.itemcategory.php";}
	else if (val01==16) {pg ="modules/list.item.php";}
	else if (val01==17) {pg ="modules/list.unit.php";}
	else if (val01==18) {pg ="modules/list.office.php";}
	else if (val01==19) {pg ="modules/list.department.php";}
	else if (val01==20) {pg ="modules/list.employee.php";}
	else if (val01==21) {pg ="modules/list.designation.php";}	
	else if (val01==22) {pg ="modules/list.instrumenttype.php";}	
	else if (val01==23) {pg ="modules/list.itemcosttype.php";}	
	else if (val01==24) {pg ="modules/list.itempricingtype.php";}	
	else if (val01==25) {pg ="modules/list.costcenter.php";}	
	else if (val01==26) {pg ="modules/list.costcenter.php";}	
	else if (val01==27) {pg ="modules/list.costcenter.php";}	
	else if (val01==28) {pg ="modules/list.costcenter.php";}	
	else if (val01==29) {pg ="modules/list.costcenter.php";}	
	else if (val01==51) {pg ="modules/list.customer.php";}	
	else if (val01==52) {pg ="modules/list.vendor.php";}

//			alert(pg);
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
	 function showproduct(){
	var pg ="modules/list.item.php";
			
						//alert(typeval);
						//var mid=val01;
			$.post(pg,function(data){$("#memberresult").html(data)});
	}
	
			function showcart(val01){
	var pg ="modules/cart.php";
			
						//alert(typeval);
						var mid=val01;
						//alert(val01);
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
	function newjoin(val01){
	var pg ="modules/memberjoin.php";
			
						//alert(typeval);
						var mid=val01;
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
		function newcustomer(val01){
			//alert();
	var pg ="modules/customerjoin.php";
			//alert();
						//alert(typeval);
						var mid=val01;
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
function newtransaction(val01){
			//alert();
	var pg ="modules/transaction_new.php";
			//alert();
						//alert(typeval);
						var mid=val01;
			$.post(pg,{mid:mid},function(data){$("#memberresult").html(data)});
	}
function	be_a_member(val01){
		var pg ="modules/memberasagentjoin.php";
		
		var mid=val01;
		var type='member_to_agent';
			$.post(pg,{memberid:mid},function(data){$("#m"+mid).html(data)});
	
	}
function	be_a_contributor(val01){
			//alert(val01);
		var pg ="modules/member_to_agent.sql.php";
		var mid=val01;
		var type='member_to_customer';
	
			$.post(pg,{memberid:mid,type:type},function(data){$("#c"+mid).html(data)});
	
	}
function	be_a_contributor_noreturn(val01){
			//alert(val01);
		var pg ="modules/member_to_agent.sql.php";
		var mid=val01;
		var type='member_to_customer';
	
			$.post(pg,{memberid:mid,type:type},function(data){});
	
	}
function changeprofilepicture(val01){
	var pg ="modules/indexchangepicture.php";
	//alert(pg);
			//indexchangepicture
						//alert(typeval);
//			var mid=$("#memid").val();
var upload=0;
			var mid=val01;
		$.post(pg,{mid:mid,upload:upload},function(data){$("#memberresult").html(data)});
if (upload==1){
		location.reload();	
	}

	}
	function inform(){
 			var pg ="modules/memberinfo.php";
			//alert("typeval");
			var mid=$("#memid").val();
			if (mid>0) {
			$.post(pg,{mid:mid},function(data){$("#memberaccountsummary").html(data)});
						}
						

}
function digitaladd(){
//		 
	//alert();
		//alert(mid);
	//	var password=$("#cpass").val();
		var pg="modules/digitaladd.php";
	
		$.post(pg,function(data){$("#memberresult").html(data)});
//		$("#pass").html(password+'<a href="#" onclick="changetotext();">&nbsp;&nbsp;Change Password</a>');
	}
	
		function addtocart01(val0,val1,val2,val3,val4){
		//alert(val3);
		var pid=val0;
		var mrp=val1;
		var price=val2;
		var designationid=val3;
		var qty=1;
		var pg="modules/cart.classnew.php";
		//alert(pid);
		//alert(qty);
		//alert(price);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
	//	alert(val3);
		$.post(pg,{pid:pid,qty:qty,price:price,mrp:mrp,designationid:designationid},function(data){});
		
		showcart(val4);
		//$("#quantity"+pid).val(1);
	//	alert(qty+" added to the cart");
		//$("#ppp"+pid).html("<div>&nbsp;"+qty+" Unit added to <span class='glyphicon glyphicon-shopping-cart' ><span> = Rs. "+price*qty+".00</div>");
//		alert(qty+" added to the cart");
		//alert(html(data))
		}
		function contributouralert(){
			alert("USE YOUR MEMBERSHIP CODE & GET THE CONTRIBUTOR CODE WITH YOUR FIRST CONTRIBUTION");
			}
function welcomeletter(val01){
	var pg ="modules/memberwelcomeletter.php";
						//alert(val01);
						var mid=val01;
						
						//alert(val01);
						
			$.post(pg,{mid:parseInt(mid)},function(data){$("#memberresult").html(data)});
						
}
function welcomeletter_c(val01){
	var pg ="modules/customerwelcomeletter.php";
						//alert(val01);
						var mid=val01;
						
						//alert(val01);
						
			$.post(pg,{mid:parseInt(mid)},function(data){$("#memberresult").html(data)});
						
}
function answer() {
 // console.log(42);
  	var pg ="modules/memberinfo.php";
			//alert("typeval");
			var mid='<?php echo $member_id ;?>';
			//alert(mid);
			if (mid>0) {
			$.post(pg,{mid:mid},function(data){$("#memberaccountsummary").html(data)});
			}
			//console.log($("#mid").val());
}

answer();
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});