function ajax(){

	let name = document.getElementById('n').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('n='+name+"&&id="+id);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('s').innerHTML = this.responseText;		
		}
	}
}