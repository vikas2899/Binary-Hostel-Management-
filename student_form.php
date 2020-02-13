<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=email] ,input[type=tel],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: SlateBlue;
}

div {
   margin-top: 10px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 400px;
  border-radius: 5px;
  background-color: #f0f8ff;
  padding: 20px;
  align-content: center;
  height: 600px;
  width: 400px;
}
h1{
  text-align: center;
  color: #00BFFF;
}
</style>
<body>

<h1 style="font-family: century gothic;">Allocation Form</h1>

<div style="margin-left:440px; ">
  <form action="student_addData.php" method="post">
    <label for="id">ID</label>
    <input type="text" id="id" name="id" placeholder="Enter Person ID.." required>

    <label for="name">Name</label>
    <input type="text" id="name" name="firstname" placeholder="Your name.." required>

    <label for="name">Guardian's Name</label>
    <input type="text" id="gname" name="gname" placeholder="Your Guardian's name.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="name">Residential Address</label>
    <input type="text" id="raddress" name="raddress" placeholder="Your residential address.." required>

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="Your Phone Number.." required>

    <label for="institute">Institute</label>
    <input type="text" id="institute" name="institute" placeholder="Your institute.." required>

    <label for="gender">Gender</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
