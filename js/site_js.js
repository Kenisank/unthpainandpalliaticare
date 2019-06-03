     // Get the modal
var modal = document.getElementById('resumemodal');

// Get the button that opens the modal
var btn = document.getElementById("profile");

// Get the <span> element that closes the modal
var closespan = document.getElementsByClassName("close")[0];



// Get the <span> element that closes the modal
var closemodalspan = document.getElementsByClassName("closemodal")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
   
}

// When the user clicks on <span> (x), close the modal
closespan.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks on <button> (close), close the modal
closemodalspan.onclick = function () {
    modal.style.display = "none";
}
