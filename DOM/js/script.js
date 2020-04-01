let titulo = document.getElementsByTagName("h1")[0];
titulo.style.color = "violet";

let contenedor = document.getElementById("contenedor");
contenedor.style.display = "flex";
contenedor.style.justifyContent = "space-around";
contenedor.style.alignItems = "center";
contenedor.style.flexWrap = "wrap";

class Palabra {
  constructor(letra, palabra, indice) {
    this.letra = letra;
    this.palabra = palabra;
    this.indice = indice;
  }
  crear() {
    let elemento = document.createElement("div");
    elemento.style.backgroundColor = generarHexadecimalAleatorio();
    let contenido = document.createTextNode(
      `letra:${this.letra} palabra:${this.palabra} posicion:${this.indice + 1}`
    );
    elemento.appendChild(contenido);
    elemento.setAttribute("class", "card");
    contenedor.appendChild(elemento);
  }
  // crear() {
  //   contenedor.innerHTML += `<div class="card" style="background-color: ${generarHexadecimalAleatorio()}"><div>${
  //     this.letra
  //   }${this.palabra}${this.indice}</div>`;
  // }
}

let letras = [
  "a",
  "b",
  "c",
  "d",
  "e",
  "f",
  "g",
  "h",
  "i",
  "j",
  "k",
  "l",
  "m",
  "n",
  "o",
  "p",
  "q",
  "r",
  "s",
  "t",
  "u",
  "v",
  "w",
  "x",
  "y",
  "z"
];

for (i = 0; i < letras.length; i++) {
  const palabra = prompt(`Ingresa una palabra con la letra ${letras[i]}`)
    .toLowerCase()
    .trim();
  if (letras[i] === palabra.charAt(0)) {
    new Palabra(letras[i], palabra, i).crear();
  } else {
    alert(`La palabra debe comenzar con la letra ${letras[i]}`);
    i--;
  }
}

function generarHexadecimalAleatorio() {
  return "#" + (((1 << 24) * Math.random()) | 0).toString(16);
}
