function f1()
{

	let name = document.getElementById('name').value;
	
	if(name != ""){
		document.getElementsByTagName('h1')[0].innerHTML = name;

		document.getElementById('d1').innerHTML = "";
	}else{
		document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
	}
}