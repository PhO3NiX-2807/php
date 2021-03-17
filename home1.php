<!DOCTYPE html>
<html>
<body>
<style>

body{
    background-color: #ffde22;
}
input[type=submit]{
    background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
fieldset{
    border:5px solid red;
}


</style>
<center>
<br>
<br>
<br>
<marquee><font size='32'><h>Welcome To My Shopping Cart</h></font></marquee>
<fieldset>
<form action="next.php" method='post'>
 <b> <label for="fname">First name:</label><br></b>
  <input type="text" name="fname" placeholder='Enter Your Name'><br><br>
  <label for="fname">Enter Your ID:</label><br></b>
  <input type="text" name="id" placeholder='Enter ID'><br>
  <br>
  <div class="form-group col-md-6 mb-0">
    <strong>Choose the Items You Want </strong>: <br><br>
    <input type="checkbox" id="apple" name="fruits" value="apple">
    <label for="apple">1 Dozen Apples For <b>Rs.200</b> </label><br><br>

    <input type="checkbox" id="chicken" name="frozen" value="chicken">
    <label for="chicken">2 Kg Chicken For <b>Rs.1000</b> </label><br><br>

    <input type="checkbox" id="tomato" name="veggies" value="tomato">
    <label for="tomato">1 Kg Tomato <b>Rs.75</b></label><br><br>

    <input type="checkbox" id="potato" name="veggies1" value="potato">
    <label for="potato">1 Kg Potato <b>Rs.50</b></label><br><br>

    <input type="checkbox" id="books" name="books" value="books">
    <label for="books">Pack of 10 Books <b>Rs.500(Rs.50 Each)</b></label><br><br>

    <input type="checkbox" id="redbull" name="bev" value="redbull">
    <label for="redbull">Pack of 10 RedBull<b>Rs.1500</b></label><br><br>
    </div>
    <br>
  <input type="submit" value="Submit">
</form> 
</fieldset>
</body>
</html>