function f2(){

	let name = document.getElementById('name').value;
	
	if(name != "" ){
        
		document.getElementsByTagName('h3')[0].innerHTML = name;
		document.getElementById('name').value = "";
		document.getElementById('d1').innerHTML = "";
	}
    else{
		document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
	}
}





