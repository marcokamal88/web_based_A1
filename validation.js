inputs = document.getElementsByTagName("form")[0];
password = document.getElementById("pwd");
conPassword = document.getElementById("conpwd");
const passwordRegex =
  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!#$%&?])[A-Za-z\d!#$%&?]{8,}$/;

console.log(inputs);
function createError(errorMessage,index) {
    const node = document.createElement("span");
      node.className = "error";
      node.style.color = "red";
      const textnode = document.createTextNode(errorMessage);
      node.appendChild(textnode);
      document
        .getElementsByTagName("form")[0]
        .getElementsByTagName("div")
        [index].appendChild(node);
}
function emptyFields() {
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value == "") {
      console.log(inputs[i]);
      createError('*this field is required',i);
    }
    if (inputs[i] == password && !passwordRegex.test(password)) {
        createError('*invalid password',i);
    }
    if (inputs[i] == conPassword && conPassword.value!=password.value) {
        createError('*password does not match',i);
    }
  }
}
emptyFields();
