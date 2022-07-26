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


// Product Section


function productImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#productimg')
        .attr('src', e.target.result)
        .width(180)
        .height(160);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function validateProduct(form) {
  if (form.name_en.value == "") {
    alert("Error: Please Enter The Product Name(English)!");
    form.name_en.focus();
    return false;
  }
  if (form.name_ar.value == "") {
    alert("Error: Please Enter The Product Name(Arabic)!");
    form.name_ar.focus();
    return false;
  }

  var content = tinymce.get("texteditor").getContent();
  if (content == '') {
    alert("Error: Please Enter The Product Description(English)!");
    tinyMCE.get('texteditor').focus();
    return false;
  }

  var content = tinymce.get("texteditor1").getContent();
  if (content == '') {
    alert("Error: Please Enter The Product Description(Arabic)!");
    tinyMCE.get('texteditor1').focus();
    return false;
  }

  var year = $('#categoryid option:selected').val();
  if (year == "") {
    alert("Error: Please Select The  Category!");
    form.category_id.focus();
    return false;
  }

  if (form.price.value == "") {
    alert("Error: Please Enter The Product Price!");
    form.price.focus();
    return false;
  }
  if (form.quantity.value == "") {
    alert("Error: Please Enter The Product Quantity!");
    form.quantity.focus();
    return false;
  }
  if (form.mainimage.value == "") {
    alert("Error: Please Select The Image!");
    form.mainimage.focus();
    return false;
  }
}

function validateEditProduct(form) {
  if (form.productname.value == "") {
    alert("Error: Please Enter The Product Name!");
    form.productname.focus();
    return false;
  }
  var content = tinymce.get("texteditor").getContent();
  if (content == '') {
    alert("Error: Please Enter The Product Description!");
    tinyMCE.get('texteditor').focus();
    return false;
  }
  if (form.tagline.value == "") {
    alert("Error: Please Enter The Product Short Description!");
    form.tagline.focus();
    return false;
  }
  if (form.amount.value == "") {
    alert("Error: Please Enter The Product Amount!");
    form.amount.focus();
    return false;
  }
  var $values = $glue = '';
  for (var $i = 0; $i < document.getElementById('category').length; $i++) {
    if (document.getElementById('category')[$i].selected == true) {
      $values += $glue + document.getElementById('category')[$i].value;
      $glue = ', ';
    }
  }
  if ($values == '') {
    alert('Please Select Category')
    form.category.focus();
    return false;
  }

  var $species = $glues = '';
  for (var $i = 0; $i < document.getElementById('species').length; $i++) {
    if (document.getElementById('species')[$i].selected == true) {
      $species += $glues + document.getElementById('species')[$i].value;
      $glues = ', ';
    }
  }

}

// Product Section