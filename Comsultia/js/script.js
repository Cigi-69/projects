// SELECTING THE ELEMENTS
var B1 = document.querySelectorAll("#B1")[0];
var B2 = document.querySelectorAll("#B2")[0];

var listB1 = document.querySelectorAll("#gItems1")[0];
var listB2 = document.querySelectorAll("#gItems2")[0];

var more = document.getElementById("more");
var hidden = document.querySelectorAll(".card");

B1.addEventListener("click", wasClicked);
B2.addEventListener("click", wasClicked);

// SWITCH OF B1 and B2 BUTTON
function wasClicked() {
	switch (this.id) {
		case 'B1':
			if(listB1.classList.contains("show")) {
				listB1.classList.remove("show");
			} else {
				listB2.classList.remove("show");
				listB1.classList.add("show");
			}
		break;

		case 'B2':
			if(listB2.classList.contains("show")) {
				listB2.classList.remove("show");
			} else {
				listB1.classList.remove("show");
				listB2.classList.add("show");
			}
			break;
	}
 };

//LOADING THE IMG in GALLERY
 more.addEventListener("click",cl);
 function cl(){
 	for (var i = 0; i < hidden.length; i++) {
 		if (hidden[i].classList.contains("d-none")) {
 			hidden[i].classList.remove("d-none");
 			hidden[i].classList.add("d-block");
 			more.innerText = "Menej";
 		} else if (hidden[i].classList.contains("d-block")){
 			hidden[i].classList.remove("d-block");
 			hidden[i].classList.add("d-none");
 			more.innerText = "Viac";
 		}
 	}
};