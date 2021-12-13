 function js(){
    let id = document.getElementById("id").value;
    let Saturday = document.getElementById("Saturday").value;
    let Sunday = document.getElementById("Sunday").value;
    let Monday = document.getElementById("Monday").value;
    let Tuesday = document.getElementById("Tuesday").value;
    let Wednesday = document.getElementById("Wednesday").value;
    let Thursday= document.getElementById("Thursday").value;
     

    let json ={
        'id' : id,
        'Saturday': Saturday,
        'Sunday':Sunday,
        'Monday':Monday,
        'Tuesday':Tuesday,
        'Wednesday':Wednesday,
        'Thursday':Thursday
        



     }

     let myjson = JSON.stringify(json);
     alert(myjson);
     

	
	let xhttp= new XMLHttpRequest();

	
	xhttp.open('POST', 'TeacherSchedulCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);
 



 xhttp.onreadystatechange = function(){

if(this.readyState == 4 && this.status == 200){
    // document.getElementById('t1').innerHTML = "DONE";
    alert(this.responseText);
}
}


 }



