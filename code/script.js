const validate = () => {
  const email = document.getElementById("email").value
  const repeatEmail = document.getElementById("confirm-email").value
  const emailRegEx = /\S+@\S+\.\S+/

  if (!email) {
    alert("Please fill in your email address")
  } else if (!repeatEmail) {
    alert("Please repeat your email address")
  } else if (!email.match(emailRegEx)) {
    alert("Please enter a valid email address")
  } else if (email !== repeatEmail) {
    alert("The two email addresses need to be identical")
  } else {
    location.reload()
  }
}
