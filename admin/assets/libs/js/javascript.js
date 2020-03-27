function validation() {
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var name = document.getElementById("name");
  var emp_post = document.getElementById("emp_post");

  if (email.value == "") {
    alert("Your pasword is empty!");
    email.focus();
    return false;
  }
  if (password.value == "") {
    alert("Your pasword is empty!");
    password.focus();
    return false;
  }
  if (name.value == "") {
    alert("Your name is empty!");
    name.focus();
    return false;
  }
  if (emp_post.value == "") {
    alert("Your emp_post is empty!");
    emp_post.focus();
    return false;
  }
  /* if (attendence.value == "") {
    alert("Your attendence is empty!");
    attendence.focus();
    return false;
  }*/
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!email.value.match(mailformat)) {
    alert("You have entered an invalid email address!");
    email.focus();
    return false;
  }
  var lettersformat = /^[A-Za-z ]+$/;
  if (!name.value.match(lettersformat)) {
    alert("You have entered an invalid name!");
    name.focus();
    return false;
  }
  var lettersformat = /^[A-Za-z ]+$/;
  if (!emp_post.value.match(lettersformat)) {
    alert("You have entered an invalid emplye post!");
    emp_post.focus();
    return false;
  }
  var passformat = /.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/;
  if (!password.value.match(passformat)) {
    alert("You have entered an invalid password!");
    password.focus();
    return false;
  }
  /*var digitformat = /^[0-9]+$/;
  if (!attendence.value.match(digitformat)) {
    alert("You have entered an invalid attendence!");
    attendence.focus();
    return false;
  }
  var passformat = /.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/;
  if (!password.value.match(passformat)) {
    alert("You have entered an invalid password!");
    password.focus();
    return false;
  }*/
}
