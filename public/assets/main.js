// Numeric Validate

function ValidateNumber(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
    key = event.clipboardData.getData('text/plain');
  } else {
    // Handle key press
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if (!regex.test(key)) {
    theEvent.returnValue = false;
    if (theEvent.preventDefault) theEvent.preventDefault();
  }
}

// Numeric Validate

// Images 

function User(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#userImg')
        .attr('src', e.target.result)
        .width(180)
        .height(180);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
function petsitterImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#petsitterimg')
        .attr('src', e.target.result)
        .width(180)
        .height(180);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
function eventpic(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#eventimg')
        .attr('src', e.target.result)
        .width(360)
        .height(250);
    };
    reader.readAsDataURL(input.files[0]);
  }
}


// Images 



// Clinic Section

function clinicImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#clinicimg')
        .attr('src', e.target.result)
        .width(180)
        .height(160);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function validateClinic(form) {
  if (form.name_en.value == "") {
    alert("Error: Please Enter The Clinic Name(English)!");
    form.name_en.focus();
    return false;
  }
  if (form.name_ar.value == "") {
    alert("Error: Please Enter The Clinic Name(Arabic)!");
    form.name_ar.focus();
    return false;
  }
  var content = tinymce.get("description_en").getContent();
  if (content == '') {
    alert("Error: Please Enter The Clinic Description(English)!");
    tinyMCE.get('description_en').focus();
    return false;
  }
  var content = tinymce.get("description_ar").getContent();
  if (content == '') {
    alert("Error: Please Enter The Clinic Description(Arabic)!");
    tinyMCE.get('description_ar').focus();
    return false;
  }
  if (form.address_en.value == "") {
    alert("Error: Please Enter The Clinic Address(English)!");
    form.address_en.focus();
    return false;
  }
  if (form.address_ar.value == "") {
    alert("Error: Please Enter The Clinic Address(Arabic)!");
    form.address_ar.focus();
    return false;
  }
  if (form.email.value == "") {
    alert("Error: Please Enter The Clinic Email Id!");
    form.email.focus();
    return false;
  }
  var year = $('#city option:selected').val();
  if (year == "") {
    alert("Error: Please Select The  City!");
    form.city.focus();
    return false;
  }

  var $values = $glue = '';
  for (var $i = 0; $i < document.getElementById('service').length; $i++) {
    if (document.getElementById('service')[$i].selected == true) {
      $values += $glue + document.getElementById('service')[$i].value;
      $glue = ', ';
    }
  }
  if ($values == '') {
    alert('Please Select service')
    form.service.focus();
    return false;
  }

  if (form.dp_image.value == "") {
    alert("Error: Please Select The Image!");
    form.dp_image.focus();
    return false;
  }
}

function validateEditClinic(form) {
  if (form.clinicname.value == "") {
    alert("Error: Please Enter The Clinic Name!");
    form.clinicname.focus();
    return false;
  }
  var content = tinymce.get("texteditor").getContent();
  if (content == '') {
    alert("Error: Please Enter The Clinic Description!");
    tinyMCE.get('texteditor').focus();
    return false;
  }

  if (form.address.value == "") {
    alert("Error: Please Enter The Clinic Address!");
    form.address.focus();
    return false;
  }

  if (form.email.value == "") {
    alert("Error: Please Enter The Clinic Email Id!");
    form.email.focus();
    return false;
  }

  if (form.phonenumber.value == "") {
    alert("Error: Please Enter The Clinic Phone Number!");
    form.phonenumber.focus();
    return false;
  }

  if (form.start.value == "") {
    city
    alert("Error: Please Select The Clinic Opening Time!");
    form.start.focus();
    return false;
  }

  if (form.end.value == "") {
    alert("Error: Please Select The Clinic Closing Time!");
    form.end.focus();
    return false;
  }

  var $values = $glue = '';
  for (var $i = 0; $i < document.getElementById('service').length; $i++) {
    if (document.getElementById('service')[$i].selected == true) {
      $values += $glue + document.getElementById('service')[$i].value;
      $glue = ', ';
    }
  }
  if ($values == '') {
    alert('Please Select service')
    form.service.focus();
    return false;
  }
}

// Clinic Section



// Clinic Section


function ShopImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#shopimg')
        .attr('src', e.target.result)
        .width(360)
        .height(250);
    };
    reader.readAsDataURL(input.files[0]);
  }
}



function validateShop(form) {
  if (form.name_en.value == "") {
    alert("Error: Please Enter The Shop Name(English)!");
    form.name_en.focus();
    return false;
  }
  if (form.name_ar.value == "") {
    alert("Error: Please Enter The Shop Name(Arabic)!");
    form.name_ar.focus();
    return false;
  }
  var content = tinymce.get("description_en").getContent();
  if (content == '') {
    alert("Error: Please Enter The Shop Description(English)!");
    tinyMCE.get('description_en').focus();
    return false;
  }
  var content = tinymce.get("description_ar").getContent();
  if (content == '') {
    alert("Error: Please Enter The Shop Description(Arabic)!");
    tinyMCE.get('description_ar').focus();
    return false;
  }
  if (form.address_en.value == "") {
    alert("Error: Please Enter The Shop Address(English)!");
    form.address_en.focus();
    return false;
  }
  if (form.address_ar.value == "") {
    alert("Error: Please Enter The Shop Address(Arabic)!");
    form.address_ar.focus();
    return false;
  }
  var year = $('#city option:selected').val();
  if (year == "") {
    alert("Error: Please Select The  City!");
    form.city.focus();
    return false;
  }
  if (form.email.value == "") {
    alert("Error: Please Enter The Shop Email Id!");
    form.email.focus();
    return false;
  }
  if (form.phonenumber.value == "") {
    alert("Error: Please Enter The Shop Phone Number!");
    form.phonenumber.focus();
    return false;
  }
  if (form.mainimage.value == "") {
    alert("Error: Please Select The Image!");
    form.mainimage.focus();
    return false;
  }
}

function validateEditshop(form) {
  if (form.name_en.value == "") {
    alert("Error: Please Enter The Shop Name(English)!");
    form.name_en.focus();
    return false;
  }
  if (form.name_ar.value == "") {
    alert("Error: Please Enter The Shop Name(Arabic)!");
    form.name_ar.focus();
    return false;
  }
  var content = tinymce.get("description_en").getContent();
  if (content == '') {
    alert("Error: Please Enter The Shop Description(English)!");
    tinyMCE.get('description_en').focus();
    return false;
  }
  var content = tinymce.get("description_ar").getContent();
  if (content == '') {
    alert("Error: Please Enter The Shop Description(Arabic)!");
    tinyMCE.get('description_ar').focus();
    return false;
  }
  if (form.address_en.value == "") {
    alert("Error: Please Enter The Shop Address(English)!");
    form.address_en.focus();
    return false;
  }
  if (form.address_ar.value == "") {
    alert("Error: Please Enter The Shop Address(Arabic)!");
    form.address_ar.focus();
    return false;
  }
  if (form.email.value == "") {
    alert("Error: Please Enter The Shop Email Id!");
    form.email.focus();
    return false;
  }
  if (form.phonenumber.value == "") {
    alert("Error: Please Enter The Shop Phone Number!");
    form.phonenumber.focus();
    return false;
  }
}


// Clinic Section



