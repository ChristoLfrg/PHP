let sommaire = document.querySelector("#sommaire");
sommaire.style.border = "1px dashed green";
sommaire.style.width = "230px";

let bouton = document.createElement("BUTTON");
let texte = document.createTextNode("Effacer le sommaire");
bouton.appendChild(texte);
bouton.addEventListener("click", masquer);

document.body.insertBefore(bouton, sommaire);

function masquer() {
	if (bouton.textContent=="Effacer le sommaire"){
		sommaire.style.visibility="hidden";
		bouton.innerHTML= "Afficher le sommaire";
	}
	else {
		sommaire.style.visibility="visible";
		bouton.innerHTML= "Effacer le sommaire";
	}
}

for (let i = 0; i < h1.length; i++) {
	h1[i].style.backgroundColor = "lightblue";
	h1[i].style.borderLeft = "5px solid coral";
	h1[i].style.padding = "0px 0px 0px 10px";
}
