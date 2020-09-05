const validate = () => {
  const email = document.getElementById("email")
  const repeatEmail = document.getElementById("confirm-email")
  const emailRegEx = \b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b;
  // const emailResult = emailRegEx.test(email)

  if (!email) {
    alert("Please fill in your email address")
  } else if (!repeatEmail) {
    alert("Please repeat your email address")
  } else if (!email.value.match(emailRegEx)) {
    alert("Please enter a valid email address")
  } else if (email !== repeatEmail) {
    alert("The two email addresses need to be identical")
  } else {
    location.reload
  }
}
