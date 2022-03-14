function sommenombrespremiers(nb1, nb2) {

    var i = 2;

    //nb1
    for (i; i < nb1; i++) {
        if (nb1 % i == 0) {
            return false;
        }
    }
    //nb2
    for (i; i < nb2; i++) {
        if (nb2 % i == 0) {
            return false;
        }
    }
    //resultat
    var resultat = nb1 + nb2;
    console.log(resultat);
}
console.log(sommenombrespremiers(2, 13))