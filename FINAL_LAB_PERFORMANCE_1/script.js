function btn(key)
 {
    let resultElement = document.getElementById("result");
    let resultPrevElement = document.getElementById("resultPrev");
    let operatorElement = document.getElementById("operator");

    console.log(key);
    if (!isNaN(key)) 
    {
      let res = resultElement.innerHTML;
      resultElement.innerHTML = res == 0 ? key : res + key;
    } 
    else if (key == ".")
     {
      indexOperator = resultElement.innerHTML.indexOf("+");
    } 
    else 
    {
        f (key == "+" || key == "-" || key == "*" || key == "/" || key == "=") 
        {
            
        }
    }
  }