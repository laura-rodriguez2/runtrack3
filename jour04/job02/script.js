document.addEventListener("DOMContentLoaded", (event) => {
  const url = "string.json"; // Variable lien fichier .json

  function jsonValueKey(val) {
      fetch(url)
          .then((response) => response.json())
          .then((response) => {
              return console.log(response[val]);
          });
  }

  jsonValueKey("city"); //Retourne : "Marseille"
});