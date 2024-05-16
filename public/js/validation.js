const fullName = document.getElementById("fname");
const userName = document.getElementById("user");
const birthdate = document.getElementById("Brithday");
const phone = document.getElementById("phone");
const email = document.getElementById("email");
const address = document.getElementById("address");
const password = document.getElementById("pwd");
const conPassword = document.getElementById("conpwd");
const registerButton = document.getElementById("btn");
const img = document.getElementById("userimg");

const emailRegex = /^\S+@\S+\.\S+$/;
const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&^])[A-Za-z\d@.#$!%*?&]{8,15}$/;
const phoneRegex = /^(01)[0-9]{9}$/;

function createError(errorMessage, index) {
  const node = document.createElement("span");
  node.className = "error";
  node.style.color = "red";
  const textnode = document.createTextNode(errorMessage);
  node.appendChild(textnode);
  document
    .getElementById("register")
    .getElementsByTagName("div")
    [index].appendChild(node);
}

registerButton.addEventListener("click", function (event) {
  event.preventDefault();

  const errorElements = document.querySelectorAll(".error");
  errorElements.forEach((errorElement) => errorElement.remove());

  const fields = [
    email,
    userName,

    fullName,
    phone,
    address,
    password,
    conPassword,
    
    img,
    birthdate,
  ];
  let isValid = true;

  fields.forEach((field, index) => {
    const value = field.value.trim();
    if (!value) {
      createError("This field is required*", index);
      isValid = false;
      changeBorderColor(field, false);
    } else if (field === phone && !phoneRegex.test(value)) {
      createError("Please enter a valid phone number*", index);
      isValid = false;
      changeBorderColor(field, false);
    } else if (field == email && !emailRegex.test(value)) {
      createError('Please enter a vaild email address*',index);
      isValid = false;
      changeBorderColor(field, false);
    } 
    // else if (field == password && !passwordRegex.test(value)) {
    //   createError(
    //     "Password must be at least 8 characters with at least 1 number and 1 special character*",
    //     index
    //   );
    //   isValid = false;
    //   changeBorderColor(field, false);
    // } 
    else if (field === conPassword && value !== password.value) {
      createError("Passwords do not match*", index);
      isValid = false;
      changeBorderColor(field, false);
    } else {
      changeBorderColor(field, true);
    }
  });
  if (isValid) {
    document.querySelector("form").submit();
  }
});
function changeBorderColor(field, isValid) {
  if (isValid) {
    field.style.borderColor = "green";
  } else {
    field.style.borderColor = "red";
  }
}
