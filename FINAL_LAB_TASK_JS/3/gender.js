
let male=document.getElementById('gender').value;
let female=document.getElementById('gender').value;
let other=document.getElementById('gender').value;

function f2() {
    if (male.checked || female.checked || other.checked) 
    {

    } 
    else
    {
        document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";

    }
}