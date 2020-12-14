"use strict"


function ajax(){
	
	
	
	
let data1=document.getElementById("Id").value;
let data2=document.getElementById("pass").value;
let data3=document.getElementById("cpass").value;
let data4=document.getElementById("name").value;
let data5=document.getElementById("email").value;
let data6=document.getElementById("utype").value;

var xhttp= new XMLHttpRequest();
xhttp.open('GET','registration1.php?id='+data1,true);

xhttp.onreadystatechange= function(){
	if(this.readyState== 4 && this.status == 200){
		alert();
		//document.getElementById('head').innerHTML= this.responseText;
	}
	
}
xhttp.send();
}