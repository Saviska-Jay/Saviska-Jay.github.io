function Convert() {
    var Celsius = document.getElementById("C").value;
    var Farenheit = (9 / 5 * Celsius) + 32;
    var result = document.getElementById("result");

    if (Celsius == "") {
        alert("🙄 Please Enter a Number ! 🙄");
        document.getElementById("C").focus;
    }
    else {
        result.innerHTML = " " + Celsius + " °C = " + "<mark>" + Farenheit + " &nbsp °F </mark> <br>"
    }
}