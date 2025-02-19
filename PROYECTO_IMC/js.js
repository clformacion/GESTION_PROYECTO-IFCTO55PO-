function imc(){

var peso=0;
var estatura=0;
var resultado=0;



peso=prompt("coloque su peso");
estatura=prompt("coloque su estatura");
resultado=peso/Math.pow(estatura,2);
document.getElementById("demo").innerHTML= "<h1 style='color:blue;text-align:center;border:8px solid black'>"+resultado;
alert("gracias por su preferencia. No olvide revisar la tabla y su IMC")


}