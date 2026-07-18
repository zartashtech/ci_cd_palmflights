function checkquote1() {

  if (document.quote1.ful_name.value == "") {

    alert("Please provide your Name!");
    document.quote1.ful_name.focus();
    return false;
  }

  if (document.quote1.email.value == "") {
    alert("Please provide your Eamil");
    document.quote1.email.focus();
    return false;
  } else {
    var x = document.quote1.email.value;

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
      alert("Not a valid E-mail address. Please provide valid Email Address");
      return false;
    }
  }

  if (document.quote1.phoneNumber.value == "") {

    alert("Please provide your Contact Number!");
    document.myForm.phoneNumber.focus();
    return false;
  } else {

    var y = document.quote1.phoneNumber.value;


    if (isNaN(y)) {
      alert("Plese Enter valid Contact number, containing only numbers");
      return false;
    } else if (y.length < 8) {
      alert("Plese Enter valid Contact number, containing Minimum 8 digits");
      return false;
    }
  }

  if (document.quote1.origin.value == "") {

    alert("Please provide your Origin !");
    document.quote1.origin.focus();
    return false;
  }

  if (document.quote1.destination.value == "") {

    alert("Please provide your Destination !");
    document.quote1.destination.focus();
    return false;
  }

  if (document.quote1.departing_date.value == "") {

    alert("Please provide your Departing Date !");
    document.quote1.departing_date.focus();
    return false;
  }


}