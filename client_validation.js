
  function validation(){

    var user = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var gen = document.getElementById('gen').value;
    var mobileNumber = document.getElementById('mob').value;
    var emails = document.getElementById('email').value;
    var image = document.getElementById('myfile').value;
    var about = document.getElementById('about').value;
    var address = document.getElementById('address').value;
    var ed = document.getElementById('ed').value;
    var interest = document.getElementById('interest').value;
    var pflink = document.getElementById('pflink').value;





    if(user == ""){
      document.getElementById('alert-n').innerHTML =" ** Please fill the username field";
      return false;
    }
    if((user.length <= 2) || (user.length > 20)) {
      document.getElementById('alert-n').innerHTML =" ** Username lenght must be between 2 and 20";
      return false;	
    }
    if(!isNaN(user)){
      document.getElementById('alert-n').innerHTML =" ** only characters are allowed";
      return false;
    }

    if(dob == ""){
      document.getElementById('alert-dob').innerHTML =" ** Please fill the Dob field";
      return false;
    }
    
  if(gen == ""){
    document.getElementById('alert-g').innerHTML ="Please specify your Gender";
    return false;
  }

    if(about == ""){
      document.getElementById('alert-ab').innerHTML =" ** Please fill the about field";
     
              document.getElementById('about').focus();
        return false;  
    
    }

    if(address == ''){
      document.getElementById('alert-add').innerHTML =" ** Please fill the address field";
      return false;
    }

    if(ed == ""){
      document.getElementById('alert-ed').innerHTML =" ** Please fill the education qualification field";
      return false;
    }

    if(interest == ""){
      document.getElementById('alert-in').innerHTML =" ** Please fill the interest field";
      return false;
    }

    if(pflink== ""){
      document.getElementById('alert-prof').innerHTML =" ** Please fill the professional link field";
      return false;
    }

   
  if(image ==''){
    document.getElementById('alert-p').innerHTML =" ** Please select an image to upload";
    return false;
  }

    if(mobileNumber == ""){
      document.getElementById('alert-c').innerHTML =" ** Please fill the mobile NUmber field";
      return false;
    }
    if(isNaN(mobileNumber)){
      document.getElementById('alert-c').innerHTML =" ** user must write digits only not characters";
      return false;
    }
    if(mobileNumber.length!=10){
      document.getElementById('alert-c').innerHTML =" ** Mobile Number must be 10 digits only";
      return false;
    }



    if(emails == ""){
      document.getElementById('alert-e').innerHTML =" ** Please fill the email id` field";
      return false;
    }
    if(emails.indexOf('@') <= 0 ){
      document.getElementById('alert-e').innerHTML =" ** @ Invalid Position";
      return false;
    }

    if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
      document.getElementById('alert-e').innerHTML =" ** . Invalid Position";
      return false;
    }
  }


