
function check() {

  if (document.qq.ful_name.value == "") {

    document.getElementById("name").innerHTML = "Please provide your Name!";
    document.qq.ful_name.focus();
    return false;
  }

  if (document.qq.email.value == "") {
    document.getElementById("email").innerHTML = "Please provide your Eamil";
    document.qq.email.focus();
    return false;
  } else {
    var x = document.qq.email.value;

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
      document.getElementById("error").innerHTML = "Not a valid E-mail address. Please provide valid Email Address";
      return false;
    }
  }

  if (document.qq.phoneNumber.value == "") {

    document.getElementById("cell").innerHTML = "Please provide your Contact Number!";
    document.myForm.phoneNumber.focus();
    return false;
  } else {

    var y = document.qq.phoneNumber.value;


    if (isNaN(y)) {
      document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing only numbers";
      return false;
    } else if (y.length < 8) {
      document.getElementById("cell").innerHTML = "Plese Enter valid Contact number, containing Minimum 8 digits";
      return false;
    }
  }

  if (document.qq.origin.value == "") {

    alert("Please provide your Origin !");
    document.qq.origin.focus();
    return false;
  }

  if (document.qq.destination.value == "") {

    alert("Please provide your Destination !");
    document.qq.destination.focus();
    return false;
  }

  if (document.qq.departing_date.value == "") {

    alert("Please provide your Departing Date !");
    document.qq.departing_date.focus();
    return false;
  }


}
