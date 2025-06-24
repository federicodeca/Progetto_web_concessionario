


      document.addEventListener("DOMContentLoaded", function () { // dom è caricato tutto
      const brandInput = document.getElementById("brandInput"); //Prendiamo i dati da html
      const modelInput = document.getElementById("modelInput");
      const modelButton= document.getElementById("modelButton"); // bottone per selezionare il modello
      
      const allModelItems = document.querySelectorAll(".dropdown-model-item");   // tutti i modelli associati ai brand

      window.selectBrand = function (brand) {  // su html abbiamo un evento onclick che richiama questa funzione
        brandInput.value = brand; // settiamo il valore del brand nel campo di input
        modelInput.disabled = false; // abilitiamo il campo dei modelli
        modelButton.disabled = false; // abilitiamo il bottone per selezionare il modello
        
        allModelItems.forEach(function (item) { // per ogni modello associato al brand
          if (item.dataset.brand === brand) { // se il modello ha lo stesso brand 
            item.style.display = "block"; // lo mostriamo
          } else {
            item.style.display = "none"; // altrimenti lo nascondiamo
          }
        });
      };

      window.selectModel = function (model) { // funzione per selezionare il modello
        modelInput.value = model; // settiamo il valore del modello nel campo di input
      };
    });