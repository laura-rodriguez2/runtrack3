document.addEventListener("DOMContentLoaded", (event) => {
  const url = "expression.txt";
  
  let button = document.getElementById("button");  //Création d'une variable pour le boutton et pour la création du <p>
  let p = document.createElement("p");
  let main = document.querySelector("html"); // Variable ou on selectionne le main 

  button.addEventListener("click", function () { // Quand on clique sur le bouton
    fetch(url)
      .then((response) => response.text())
      .then((textString) => {
        main.append(p);
        p.append(textString);
      });
  });
});

