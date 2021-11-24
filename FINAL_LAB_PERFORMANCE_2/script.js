function ajax(num1, num2, operator, key){

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
function getResult(num1, num2, operator, key) {
    let xhttp = new XMLHttpRequest();
  
    xhttp.open("POST", "jsGotNoOperators.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("num1=" + num1 + "&&num2=" + num2 + "&&operator=" + operator);
  
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById('h1').innerHTML = this.responseText;
        //console.log(this.responseText);
        //return this.responseText;
        resultPrevElement.innerHTML = this.responseText;
        resultElement.innerHTML = 0;
        operatorElement.innerHTML = key;
        hideElementsForEqual(key);
      }
    }

}