let burger = document.querySelector(".burger1");
let Links = document.querySelector(".nav-links");
let TextArea = document.querySelector(".text-center");

burger.addEventListener('click',()=>{
    Links.classList.toggle("nav-show");
    TextArea.classList.toggle("textareahide");
    // cls name textareahide
    
})
myButton.addEventListener("click", function () {
  myPopup.classList.add("show");
});
closePopup.addEventListener("click", function () {
  myPopup.classList.remove("show");
});
window.addEventListener("click", function (event) {
  if (event.target == myPopup) {
      myPopup.classList.remove("show");
  }
});

function validatePhoneNumber(phoneNumberInput) {
  const phone = phoneInput.value.trim();
  const phoneNumberRegex = /^[0-9]{10}$/; // regex for exactly 10 digits

  if (!phoneNumberRegex.test(phone)) {
    alert("Please enter a valid 10-digit phone number.");
    phoneNumberInput.focus();
    return false;
  }

  return true;
}
