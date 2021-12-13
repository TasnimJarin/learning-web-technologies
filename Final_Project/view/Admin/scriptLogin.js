function validation(){
        
    
    let id = document.getElementById("id").value;
    let password = document.getElementById("password").value;


    let json ={
        'id': id,
        'password':password
        

     }

     let  myjson=JSON.stringify(json);
    // alert(myjson);
     let  xhttp= new XMLHttpRequest();

    xhttp.open('POST', '../../controller/Admin/regCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('data='+myjson);
    




 xhttp.onreadystatechange = function(){

if(this.readyState == 4 && this.status == 200){
    // document.getElementById('t1').innerHTML = "DONE";
    // alert(this.responseText);
}
}



}