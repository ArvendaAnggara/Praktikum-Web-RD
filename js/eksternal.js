//dark mode
function changeMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
 }

//gender branch
function getGender(){
    var gender = document.getElementById("gender").value;
    if(gender == "m"){
        document.getElementById("sentence1").innerHTML = "Please be my friend";
    }
    else if (gender == "f"){
        document.getElementById("sentence1").innerHTML = "Please be my Girlfriend";
    }
 }

//loop factorial
function getFactorial(){
    var num = document.getElementById("factorial").value;
    var result = 1;
    var factor = 0;
    for (factor = num; factor >=1; factor--){
        result = result * factor;
    }
    document.getElementById("sentence2").innerHTML = `<p>Result : ${result}</p>`;

}