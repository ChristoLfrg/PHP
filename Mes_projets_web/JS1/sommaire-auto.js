let contenu = document.querySelectorAll('div');

// CREATION DE LA LISTE
let divListe = document.createElement("div");
divListe.setAttribute("id","sommaire");
document.body.insertBefore(divListe, contenu[0]);
	
let ol = document.createElement("ol");
ol.setAttribute("class","niveau1");
divListe.appendChild(ol);

// INSERTION DES H1 DANS LA LISTE
let h1 = document.querySelectorAll('h1');

for (let i = 0; i < h1.length; i++) {
 
	let li_h1 = document.createElement("li");
	let a_h1 = document.createElement("a");
	a_h1.setAttribute("href","#ancre-"+i);
	let titre = document.createTextNode(h1[i].textContent);
  
	a_h1.appendChild(titre);
	li_h1.appendChild(a_h1);
	li_h1.setAttribute("id","sommaire-"+i);
	ol.appendChild(li_h1);
  
	// INSERTION DES H2
	let h2 = h1[i].nextElementSibling.querySelectorAll('h2');
	if(h2) {
		
		let ol_h2 = document.createElement("ol");
		ol_h2.setAttribute("class","niveau2");
		h1[i].appendChild(ol_h2);
		
		for (let j = 0; j < h2.length; j++){
						
			let li_h2 = document.createElement("li");
			let a_h2 = document.createElement("a");
			a_h2.setAttribute("href","#ancre-"+i+"-"+j);
			let texte = document.createTextNode(h2[j].textContent);
		  
			a_h2.appendChild(texte);
			li_h2.appendChild(a_h2);
			ol_h2.appendChild(li_h2);
			li_h1.appendChild(ol_h2);
		}
	}
}
