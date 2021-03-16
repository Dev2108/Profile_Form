
<!DOCTYPE html>
<html>
  <head>

        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
      <link rel="stylesheet" href="style.css">
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript" src="client_validation.js" ></script>

  </head>
<body>

<div class="container">

<form method="post" action="process.php" enctype="multipart/form-data" onsubmit="return validation()">

  <h1 style="text-align:center; padding-top:3%; font-size:70px" > Profile Form </h1>

 
  
 
 <div style="padding-left:10%" >

 <div class="form-group">
          <label class="head" for="user" class="font-weight-bold"> <h2>Name:</h2> </label>
          <input type="text" id="name" name="username" />	
          <span id="alert-n" class="text-danger font-weight-bold"> </span>
  </div>


  <div class="form-group">
          <label class="head" for="user" class="font-weight-bold"> <h2>Date of Birth :</h2> </label>
          <input type="date" id="dob" name="dob"/>
          <span id="alert-dob" class="text-danger font-weight-bold"> </span>
  </div>

   
  <div class="form-group" id="gen">
      <label class="head" for="user" class="font-weight-bold"> <h2>Gender:</h1> </label>
         
          <input type="radio" name="gen" id="gen1" value="Male" >
         <label for="m">Male</label> 
          <input type="radio" name="gen" id="gen2" value="Female">
          <label for="f">Female</label>
          <span id="alert-g" class="text-danger font-weight-bold"> </span>
  </div>

   
  <div class="form-group">
      <label class="head" for="user" class="font-weight-bold"> <h2>Email Address : </h1> </label>
      <br>
     <input type="email" id="email" name="email">
     <span id="alert-e" class="text-danger font-weight-bold"> </span> 
     </div>
      <br>
     <div class="form-group">
      <label class="head" for="user" class="font-weight-bold"> <h2>Contact No.:</h1> </label>
      <br>
      <input type="number" id="mob"  name="number"
   min="1000000000" max="9999999999">
   <span id="alert-c" class="text-danger font-weight-bold"> </span>
   </div>
  <br>
   <div class="form-group">
      <label class="head" for="user" class="font-weight-bold"> <h2>Skills:</h1> </label>
       <input type="checkbox" name="skill[]"  id="skill1" value="HTML">
       <label>HTML</label>
   <input type="checkbox" name="skill[]"  id="skill2" value="CSS">
   <label>CSS</label>
   <input type="checkbox" name="skill[]"  id="skill3" value="Javascript">
   <label>JavaScript</label>
   <input type="checkbox" name="skill[]"  id="skill4" value="Bootstrap">
   <label>Bootstrap</label>
   <span id="alert-s" class="text-danger font-weight-bold"> </span>
   </div>
   
   <div>
   <h2>Profile photo:</h2>
   <input type="file" id="myfile" name="image" multiple>
   <span id="alert-p" class="text-danger font-weight-bold"> </span>
   </div>
  <br>

   <div>   <h2>About:</h2>
   <textarea  name="about" id="about"
      rows="6" cols="33" placeholder="Type something">
      </textarea>
      <span id="alert-ab" class="text-danger font-weight-bold"> </span>
   </div> 
 <br>
<div>     
    <h2>Address:</h2>

<textarea  name="address" id="address"
      rows="6" cols="33" placeholder="Type something">
      </textarea> 
      <span id="alert-add" class="text-danger font-weight-bold"> </span>
   </div> 

<br>
   <div>    
      <h2>Education Qualifications:</h2>

<select name="ed" id="ed">
    <option value="">--Please choose an option--</option>
    <option >10th</option>
    <option >12th</option>
    <option >UG</option>
    <option >PG</option>
    <option >Diploma</option>
    
</select>
<span id="alert-ed" class="text-danger font-weight-bold"> </span>
   </div>
<br>

   <div>
<h2>Interests Area:</h2>
<select multiple id="interest" name="interest[]" >
    <option value="">--Please choose an option--</option>
    <option value="AI" id="interest1" >AI</option>
    <option value="ML" id="interest2">ML</option>
    <option value="BlockChain" id="interest3">Block chain</option>
    <option value="DevOps" id="interest4">DevOps</option>
    <option value="Cloud Computing" id="interest5">Cloud Computing</option>
    
</select>
<span id="alert-in" class="text-danger font-weight-bold"> </span>
   </div>
<br>

   <div>
     <H2>Professional Link:</H2>
<input type="text" name="pflink" id="pflink" />
<span id="alert-prof" class="text-danger font-weight-bold"> </span>
   </div>
<br>
<br>
<input  class="submit"  type="submit" name="submit" value="Submit" />
</div>
</form>

</div>






</body>
</html>