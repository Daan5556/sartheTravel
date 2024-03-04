const validateCreateAccount = () => {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("confirm-password").value;

  if (password != confirmPassword) {
    alert("Wachtwoorden komen niet overheen")
    return false
  }
  return true
}