// Image Section

  // User Image
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
  // User Image

  // Pet Category Image
    function PetCategory(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#petcategoryImg')
              .attr('src', e.target.result)
              .width(180)
              .height(180);
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
  // Pet Category Image


  // Add Product Image
    function productImg(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#userdp')
              .attr('src', e.target.result)
              .width(360)
              .height(250);
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
  // Add Product Image

  // Add Clinic Image
    function clinicImg(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#clinicimg')
              .attr('src', e.target.result)
              .width(360)
              .height(250);
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
  // Add Clinic Image

  // Add Service Image
    function serviceImg(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#serviceimg')
              .attr('src', e.target.result)
              .width(360)
              .height(250);
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
  // Add Service Image

  // Add Offer Image
    function offerImg(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#offerimg')
              .attr('src', e.target.result)
              .width(360)
              .height(250);
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
  // Add Offer Image

// Image Section




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
    if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }

// Numeric Validate









// Form Validation

  // Form Validation Add User

  function validateUser(form)
      {
        if(form.username.value=="") {
          alert("Error: Please Enter The User Name!");
          form.username.focus();
          return false;
        }
        if(form.emailid.value=="") {
          alert("Error: Please Enter The User Email Id!");
          form.emailid.focus();
          return false;
        }
        if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(form.emailid.value)))
        {
          alert("You have entered an invalid email address!");
          form.emailid.focus();
          return (false);
        }
        if(form.phonenumber.value=="") {
          alert("Error: Please Enter The User Phone Number!");
          form.phonenumber.focus();
          return false;
        }
        var year = $('#role option:selected').val();
        if(year == "")
        {
        alert("Error: Please Select The  Role!");
        form.role.focus();
        return false;
        }
        if(form.image.value=="") {
          alert("Error: Please Select The Image!");
          form.image.focus();
          return false;
        }

      }

  // Form Validation Add User

  // Form Validation Edit User

  function validateEditUser(form)
  {
    if(form.username.value=="") {
      alert("Error: Please Enter The User Name!");
      form.username.focus();
      return false;
    }
    if(form.emailid.value=="") {
      alert("Error: Please Enter The User Email Id!");
      form.emailid.focus();
      return false;
    }
    if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(form.emailid.value)))
    {
      alert("You have entered an invalid email address!");
      form.emailid.focus();
      return (false);
    }
    if(form.phonenumber.value=="") {
      alert("Error: Please Enter The User Phone Number!");
      form.phonenumber.focus();
      return false;
    }
  }

  // Form Validation Edit User

  // Form Validation Add Pet Categroy

  function validatePetCategory(form)
      {
        if(form.categroy.value=="") {
          alert("Error: Please Enter The Pet Category!");
          form.categroy.focus();
          return false;
        }
        if(form.icon.value=="") {
          alert("Error: Please Select The Image!");
          form.icon.focus();
          return false;
        }
      }

  // Form Validation Add Pet Categroy

  // Form Validation Edit Pet Categroy

    function validateEditPetCategory(form)
    {
      if(form.categroy.value=="") {
        alert("Error: Please Enter The Pet Category!");
        form.categroy.focus();
        return false;
      }
    }

// Form Validation Edit Pet Categroy



  // Form Validation Add Pet

  function validatePet(form)
      {
        if(form.name.value=="") {
          alert("Error: Please Enter The Pet Name!");
          form.name.focus();
          return false;
        }
        var year = $('#species option:selected').val();
        if(year == "")
        {
        alert("Error: Please Select The Species!");
        form.species.focus();
        return false;
        }

        var year = $('#breed option:selected').val();
        if(year == "")
        {
        alert("Error: Please Select The Breed!");
        form.breed.focus();
        return false;
        }

        if(form.gender.value=="") {
          alert("Error: Please Select The Gender!");
          // form.gender.focus();
          return false;
        }

        if(form.dob.value=="") {
          alert("Error: Please Select The DOB!");
          form.dob.focus();
          return false;
        }

        var year = $('#ownerid option:selected').val();
        if(year == "")
        {
        alert("Error: Please Select The Owner!");
        form.ownerid.focus();
        return false;
        }
        if(form.image.value=="") {
          alert("Error: Please Select The Image!");
          form.image.focus();
          return false;
        }
      }

  // Form Validation Add Pet

  // Form Validation Edit Pet

  function validateEditPet(form)
  {
    if(form.name.value=="") {
      alert("Error: Please Enter The Pet Name!");
      form.name.focus();
      return false;
    }
    if(form.dob.value=="") {
      alert("Error: Please Select The DOB!");
      form.dob.focus();
      return false;
    }
  }

  // Form Validation Edit Pet



  // Form Validation Add Category

  function validateCate(form)
    {
      if(form.categoryname.value=="") {
        alert("Error: Please Enter The Category Name(English)!");
        form.categoryname.focus();
        return false;
      }
      var year = $('#Parent option:selected').val();
      if(year == "")
      {
      alert("Error: Please Select The  Parent Sector!");
      form.Parent.focus();
      return false;
      }

    }

  // Form Validation Add Category


  // Form Validation Edit Category

  function validateEditCate(form)
    {
      if(form.categoryname.value=="") {
        alert("Error: Please Enter The Category Name(English)!");
        form.categoryname.focus();
        return false;
      }
    }

  // Form Validation Edit Category

  // Form Validation Add Product

  function validateProduct(form)
  {
    if(form.productname.value=="") {
      alert("Error: Please Enter The Product Name!");
      form.productname.focus();
      return false;
    }
    if(form.productnamearb.value=="") {
      alert("Error: Please Enter The Product Name(Arabic)!");
      form.productnamearb.focus();
      return false;
    }
    if(form.productdesc.value=="") {
      alert("Error: Please Enter The Product Description!");
      form.productdesc.focus();
      return false;
    }
    if(form.productdescarb.value=="") {
      alert("Error: Please Enter The Product Description Arabic!");
      form.productdescarb.focus();
      return false;
    }
    if(form.amount.value=="") {
      alert("Error: Please Enter The Product Amount!");
      form.amount.focus();
      return false;
    }
    // if(form.dsntamount.value=="") {
    //   alert("Error: Please Enter The Product Discount Amount!");
    //   form.dsntamount.focus();
    //   return false;
    // }
    if(form.radio.value=="") {
      alert("Error: Please Select The Stock Value!");
      form.radio.focus();
      return false;
    }
    var year = $('#category option:selected').val();
    if(year == "")
    {
    alert("Error: Please Select The  Category!");
    form.category.focus();
    return false;
    }
    if(form.image.value=="") {
      alert("Error: Please Select The Image!");
      form.image.focus();
      return false;
    }


  }

  // Form Validation Add Product

  // Form Validation Edit Product

  function validateEditshop(form)
  {
    if(form.shopname.value=="") {
      alert("Error: Please Enter The Product Name!");
      form.shopname.focus();
      return false;
    }
    if(form.shopnamearb.value=="") {
      alert("Error: Please Enter The Product Name(Arabic)!");
      form.shopnamearb.focus();
      return false;
    }
    if(form.shopdesc.value=="") {
      alert("Error: Please Enter The Product Description!");
      form.shopdesc.focus();
      return false;
    }
    if(form.shopdescarb.value=="") {
      alert("Error: Please Enter The Product Description Arabic!");
      form.shopdescarb.focus();
      return false;
    }
    if(form.amount.value=="") {
      alert("Error: Please Enter The Product Amount!");
      form.amount.focus();
      return false;
    }

  }

  // Form Validation Edit Product

  // Form Validation Add Clinic

  function validateClinic(form)
  {
    if(form.clinicname.value=="") {
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
    if(form.address.value=="") {
      alert("Error: Please Enter The Clinic Address!");
      form.address.focus();
      return false;
    }
    if(form.ownerid.value=="") {city
      alert("Error: Please Select The Clinic Owner!");
      form.ownerid.focus();
      return false;
    }
    var year = $('#city option:selected').val();
    if(year == "")
    {
    alert("Error: Please Select The  City!");
    form.city.focus();
    return false;
    }
    var year = $('#category option:selected').val();
    if(year == "")
    {
    alert("Error: Please Select The Category!");
    form.category.focus();
    return false;
    }
    if(form.mainimage.value=="") {
      alert("Error: Please Select The Image!");
      form.mainimage.focus();
      return false;
    }

  }
  
  // Form Validation Add Clinic

  // Form Validation Edit Clinic

  function validateEditClinic(form)
  {
    if(form.clinicname.value=="") {
      alert("Error: Please Enter The Clinic Name!");
      form.clinicname.focus();
      return false;
    }
    if(form.clinicnamearb.value=="") {
      alert("Error: Please Enter The Clinic Name(Arabic)!");
      form.clinicnamearb.focus();
      return false;
    }
    var content = tinymce.get("texteditor").getContent();
    if (content == '') {
      alert("Error: Please Enter The Clinic Description!");
    tinyMCE.get('texteditor').focus();
    return false;
    }
    var content = tinymce.get("texteditor1").getContent();
    if (content == '') {
      alert("Error: Please Enter The Clinic Description Arabic!");
    tinyMCE.get('texteditor1').focus();
    return false;
    }
    if(form.address.value=="") {
      alert("Error: Please Enter The Clinic Address!");
      form.address.focus();
      return false;
    }
    if(form.addressarb.value=="") {
      alert("Error: Please Enter The Clinic Address Arabic!");
      form.addressarb.focus();
      return false;
    }
    if(form.start.value=="") {city
      alert("Error: Please Select The Clinic Opening Time!");
      form.start.focus();
      return false;
    }
    if(form.end.value=="") {
      alert("Error: Please Select The Clinic Closing Time!");
      form.end.focus();
      return false;
    }
  }

  // Form Validation Edit Product    

  // Form Validation Add Service

  function validateService(form)
  {
    if(form.servicename.value=="") {
      alert("Error: Please Enter The Service Name!");
      form.servicename.focus();
      return false;
    }
    if(form.servicenamearb.value=="") {
      alert("Error: Please Enter The Service Name(Arabic)!");
      form.servicenamearb.focus();
      return false;
    }
    var content = tinymce.get("texteditor").getContent();
    if (content == '') {
      alert("Error: Please Enter The Service Description!");
    tinyMCE.get('texteditor').focus();
    return false;
    }
    var content = tinymce.get("texteditor1").getContent();
    if (content == '') {
      alert("Error: Please Enter The Service Description Arabic!");
    tinyMCE.get('texteditor1').focus();
    return false;
    }
    if(form.amount.value=="") {
      alert("Error: Please Enter The Service Amount!");
      form.amount.focus();
      return false;
    }
    if(form.duration.value=="") {
      alert("Error: Please Select The Service Time Duration!");
      form.duration.focus();
      return false;
    }
    var option=document.getElementsByName('status');

    if (!(option[0].checked || option[1].checked)) {
        alert("Please Select Your status");
        return false;
    }
    selects= document.getElementsByTagName('select');
    for(i=0;i<selects.length;i++){
        x=selects[i].value;
        if (x==null || x=="" || x=="---< Select Delivery Team >---")
          {
            alert("Please select The Group.");
            return false;
          }
      }
    if(form.mainimage.value=="") {
      alert("Error: Please Select The Image!");
      form.mainimage.focus();
      return false;
    }

  }
    
  // Form Validation Add Service

  // Form Validation Add Service

  function validateOffer(form)
  {
    if(form.offername.value=="") {
      alert("Error: Please Enter The Offer Nameas!");
      form.offername.focus();
      return false;
    }
    var content = tinymce.get("texteditor").getContent();
    if (content == '') {
      alert("Error: Please Enter The Offer Description!");
    tinyMCE.get('texteditor').focus();
    return false;
    }
    var option=document.getElementsByName('status');

    if (!(option[0].checked || option[1].checked)) {
        alert("Please Select Your status");
        return false;
    }
    var year = $('#category option:selected').val();
    if(year == "")
    {
    alert("Error: Please Select The  Category!");
    form.category.focus();
    return false;
    }
    if(form.mainimage.value=="") {
      alert("Error: Please Select The Image!");
      form.mainimage.focus();
      return false;
    }

  }
    
  // Form Validation Add Service
  
  // Form Validation Add Service

  function validateEditOffer(form)
  {
    if(form.offername.value=="") {
      alert("Error: Please Enter The Offer Nameas!");
      form.offername.focus();
      return false;
    }
    var content = tinymce.get("texteditor").getContent();
    if (content == '') {
      alert("Error: Please Enter The Offer Description!");
    tinyMCE.get('texteditor').focus();
    return false;
    }
  }
    
  // Form Validation Add Service





// Clinic Section

  // Add Product Image
  function userdp(input) {
    alert("Error: Please Enter The User Name!");

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#userdp')
            .attr('src', e.target.result)
            .width(180)
            .height(200);
        };
        reader.readAsDataURL(input.files[0]);
    }
  }
  // Add Product Image

  // Form Validation Add Service Price

    function validateServiceDetails(form)
    {
      var year = $('#service option:selected').val();
      if(year == "")
      {
      alert("Error: Please Select The Service!");
      form.service.focus();
      return false;
      }
      var content = tinymce.get("texteditor").getContent();
      if (content == '') {
        alert("Error: Please Enter The Service Description!");
      tinyMCE.get('texteditor').focus();
      return false;
      }
      if(form.duration.value=="") {
        alert("Error: Please Select The Service Time Duration!");
        form.duration.focus();
        return false;
      }
      var option=document.getElementsByName('status');
      if (!(option[0].checked || option[1].checked)) {
          alert("Please Select Your status");
          return false;
      }
      if(form.price.value=="") {
        alert("Error: Please Enter The Service Charge!");
        form.price.focus();
        return false;
      }
    }
  
  // Form Validation Add Service Price


// Clinic Section



























