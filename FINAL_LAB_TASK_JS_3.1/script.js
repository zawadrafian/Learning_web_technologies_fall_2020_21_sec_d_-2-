"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


let student = ['alamin', '123', 'CS'];

function f1(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty input';		
	}else{
		let data1=document.getElementById('name').value;
		let dlen = data1.length;
		let arr = data1.split("");
		let err=0;
		let i=0;
		
		for (i = 0; i < dlen; i++) {
              if(arr[i]>='A' && arr[i]<='Z'){
		  
		   
	   }
	   else if(arr[i]>='a' && arr[i]<='z'){
		  
	   }
	     else if(arr[i]=='.' || arr[i]=='-'){
		  
	   }
	   else{
		  err=err+1;
		   
		   
	   }
}
		if(err<=0){
			if(arr[0]>='A' && arr[0]<='Z' || arr[0]>='a' && arr[0]<='z'){
			let arr1=data1.split("-");
			let a=arr1.length;
			if(a>=2){
		document.getElementById('head').innerHTML = data1;
			}
			else{
				document.getElementById('head').innerHTML = 'Less than two words';
			}
			}
			else{
				document.getElementById('head').innerHTML = 'Not start with a letter';
			}
	
	}
	else{
		
		document.getElementById('head').innerHTML = 'Invalid characters';
	}

}
}
"use strict"

function f2(){
	
	let dmail= document.getElementById('name1').value;
	if(dmail == ''){
		document.getElementById('h').innerHTML = 'Empty input';
	}
	else{
		let check= dmail.includes("@gmail.com");
		if(check==true){
			document.getElementById('h').innerHTML = dmail;
			
		}
		else{
			document.getElementById('h').innerHTML = 'Invalid mail';
			
		}
		
		
	}
	
	
	
	
}
function f3(){
	
	let a=document.getElementById('m').value;
	let b=document.getElementById('f').value;
	let c=document.getElementById('o').value;
	let valid=false;
	if(document.getElementById('m').checked){
	   valid=true;
	   document.getElementById('h1').innerHTML= document.getElementById('m').value;
	}
	else if(document.getElementById('f').checked){
	   valid=true;
	   document.getElementById('h1').innerHTML= document.getElementById('f').value;
	}
	else if(document.getElementById('o').checked){
	   valid=true;
	   document.getElementById('h1').innerHTML= document.getElementById('o').value;
	}
	
	else{

	}
	
	if(valid==true){
		
	}
	
	else{
		
			document.getElementById('h1').innerHTML= 'Please select one';
	}
	
	
}
