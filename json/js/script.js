datosJson = { animales: [] };

let agregarBtn = document.getElementById("agregar-btn");

agregarBtn.addEventListener("click", crearElemento);

function crearElemento() {
  const animal = document.getElementById("nombreAnimal").value;
  let newInput = document.createElement("input");
  newInput.value = animal;
  document.body.appendChild(newInput);
  newInput.setAttribute("class", "card");

  newInput.setAttribute("name", datosJson.animales.length);

  datosJson.animales.push({ animal });
  newInput.addEventListener("input", editarElemento);
}

function editarElemento(e) {
  const nuevoValor = e.target.value;
  const indice = e.target.name;
  datosJson.animales[indice].animal = nuevoValor;
}
