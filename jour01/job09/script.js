
function tri(array) {
    var length = array.length;
    for (var i = 0; i < length; i++) {
        for (var j = 0; j < (length - i - 1); j++) {
            if (array[j] > array[j + 1]) {
                var temporaire = array[j];
                array[j] = array[j + 1];
                array[j + 1] = temporaire;
            }
        }
    }
    return array;
}

var nombres = [5, 4, 6, 3, 1, 9];

var resultat = tri(nombres, "desc");

console.log(resultat);
