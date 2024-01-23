<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


h2{
	text-align: center;
	font-size: 45px;
	font-family: Humnst777 Blk BT;
}
</style>
</head>
<body>

<h2>MY FORM</h2>


<div class="container">
  <form action="fetch.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">USER ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="Id" name="Id" placeholder="Your Id.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">USER NAME</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Name" placeholder="Your Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">EMAIL</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="Email" placeholder="Your last Email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">PASSWORD</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Password" placeholder="Your Password..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">COUNTRY</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
      	 <option selected disabled>Choose here</option>
        <option value="India">India</option>	 
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
        <option value="Usa">USA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">SUBJECT</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>


