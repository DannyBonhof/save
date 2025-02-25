function showTable()
{
    let element = document.getElementById("getalVoorTafel");
    let element2 = document.getElementById("getalHoever");
    let tafel = element.value;

    for (let i = 0; i <= element2.value; i++) 
    {    
        let getal = i * tafel;
        let tekst = "De som is " + i + " x " + tafel + " = " + getal +"<br>";

        document.getElementById("uitkomst").innerHTML += tekst;
    }

    // console.log(element.innerHTML);
    // console.log(element.value); is het beste om te gebruiken
    // let getal = element.value * 2;
    // document.getElementById("uitkomst").innerHTML = 
    // "De som is " + element.value + " x " + 2 + " = " + getal;
}