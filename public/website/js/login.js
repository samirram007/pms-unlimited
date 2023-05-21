alert("SAME");
$(document).keypress(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	 //alert(event.which);
	if(keycode == '13')
	{
		var a=$('#uid').val();
		var b=$('#pwd').val();
//		alert();
		if((a!='')&&(b!=''))
		{
			checklogin();
		}
	}
	else if(keycode == '10')
	{
		var a=$('#uid').val();
		var b=$('#pwd').val();
		//		alert();
		if((a!='')&&(b!=''))
		{
		//checklogin();
			var r = confirm("How dare you use this login method");
		//confirm("Press a button!");
		if (r == true)
		{
			//txt = "You pressed OK!";
			forcelogin();
		} else
		{
			alert("You pressed Cancel!");
			exit;
		}
	}
}

});
function KeyFile(){
    $("#key").load("D:/KEY.txt", function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success")
            alert("External content loaded successfully!");
        if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
    });
}
function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
				document.getElementById("key").innerHTML=allText+"b";
               // alert(allText);
            }
        }
    }
    rawFile.send(null);
}

/*function readTextFile(filepath) {
	var str = "";
	alert(filepath);
	var txtFile = new File(filepath);
	txtFile.open("r");
	while (!txtFile.eof) {
		// read each line of text
		str += txtFile.readln() + "\n";
	}
	alert(str);
	document.getElementById("key").innerHTML=str;
	//return str;
}*/
 //readTextFile("file:///D:/KEY.txt");
 ReadFiles();
 function ReadFiles()
{
   var fso, f1, ts, s;
   var ForReading = 1;
   fso = new ActiveXObject("Scripting.FileSystemObject");
   ts = fso.OpenTextFile("D:\KEY.txt", ForReading);
   s = ts.ReadLine();
   document.getElementById("key").innerHTML=s+"b";
   // s holds the text content
   ts.Close();
}
//KeyFile();
function forcelogin(){
	alert("PG");
		var uid=$("#uid").val();
		var pwd=$("#pwd").val();
		var pg =<?php echo MOD_DIR."forcelogin.php"; ?>;
		alert(pg);
		$.post(pg,{uid:uid,pwd:pwd},function(data){
			if (data==0)
			{
				document.getElementById("logresult").innerHTML='Wrong Credintial';
			}
			else{

	setTimeout('Redirect()', 500);
				}

			});
}

	function checklogin(){
		var uid=$("#uid").val();

		if (uid.length<3) {
			alert("ID LENGTH ERROR! ");
			exit();
			}
		//$uid = mysql_real_escape_string($uid);
			var pwd=$("#pwd").val();
			var pg =<?php echo MOD_DIR."login.class.php"; ?>;
			alert(pg);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		$.post(pg,{uid:uid,pwd:pwd},function(data){
			if (data==0)
			{
				document.getElementById("logresult").innerHTML='Wrong Credintial';
			}
			else{

	setTimeout('Redirect()', 500);
				}

			});
		}

function Redirect() {
			   var http = location.protocol;
var slashes = http.concat("//");
var host = slashes.concat(window.location.hostname);
//var pathname=host.concat(window.location.pathname);
var redirectlocation=host.concat("/?p=userpage");
              window.location=redirectlocation;
            }


function login(){
			var loginvalue=$("#logresult").innerHeight();
			}
function Clear()
{
   document.getElementById("uid").value= "";
   document.getElementById("pwd").value= "";
}
Clear();
$(document).ready(function () {
    $('input[type=text], input[type=password]').attr('autocomplete', 'off');
});


document.getElementById("myForm").reset();
$('#uid').attr('autocomplete','off');
$('#pwd').attr('autocomplete','off');
