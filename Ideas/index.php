<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: "Comic Sans MS", cursive, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<title>Idea Submission Form</title>
<br><br>
<center><h1> Idea Submission Form</h1></center>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-sm-3">
   </div>
   <div class="col-sm-6 ">
    <form method="post" action="server.php">
     <div class="form-group ">
      <label class="control-label requiredField" for="name">
       Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name" name="name" placeholder="Enter Name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="roll">
       Roll No
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="roll" name="roll" placeholder="Enter HT No" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" placeholder="Enter E-mail ID" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="mobile">
       Mobile No
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="year">
       Year
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" id="year" name="year">
       <option value="2">
        2
       </option>
       <option value="3">
        3
       </option>
       <option value="4">
        4
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="title">
       Title Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="title" name="title" placeholder="Enter event name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="description">
       Description
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="description" name="description" placeholder="Enter Discription" rows="10"></textarea>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>

   </div>
  </div>
 </div>
</div>

