var annee = prompt("L'année : ");

var result = bisextile(year);

alert(result);

//Si février a 29 jours 
function bisextile(Lannee){
    var jour = new Date(année,2,0).getDate();

    if( jour == 29)
    {
        document.write(Lannee + ' est bissextile');
        return(true);
    }
    else
    {
        document.write(Lannee + " n'est pas bissextile");
        return(false);
    }
}