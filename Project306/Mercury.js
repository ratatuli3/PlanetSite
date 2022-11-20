// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("mercuryRealImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

function register()
{
  var selecteddata="";
  selecteddata1= selecteddata+ " " + document.getElementById("name").value;
  selecteddata2= selecteddata+ " " + document.getElementById("surname").value;
  selecteddata3= selecteddata+ " " + document.getElementById("email").value;
  selecteddata4= selecteddata+ " " + document.getElementById("password").value;

  if (document.getElementById("male").checked==true)
		selecteddata5= selecteddata+ " " + document.getElementById("male").value;
		
  if (document.getElementById("female").checked==true)
		selecteddata5= selecteddata+ " " + document.getElementById("female").value;
	
alert("Your Name is: " + selecteddata1 + "\n Your Surname is: " + selecteddata2 + "\n Your E-mail is: " + selecteddata3 + "\n Your Password is: " + selecteddata4 + "\n Your Sex is: " + selecteddata5);
}