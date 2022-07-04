function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

// function checkPassword() {
//     let password = document.getElementById("password").value;

//     let rpassword = document.getElementById("rpassword").value;

//     console.log(password, rpassword);

//     let message = document.getElementById("message");

//     if (password.lenght != 0) {
//         if (password == rpassword) {
//             message.textContent = "password match";
//             message.style.backgroundColor = "#3ae374";
//         }
//         else{
//             message.textContent = "password no match";
//             message.style.backgroundColor = "#ff4d4d";
//         }
//     }
//     else{
//         alert("password can't be empty!");
//         message.textContent = "";

//     }
// }