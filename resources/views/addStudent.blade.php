<h1>Please Add New Student</h1>
<form action="" method="POST">
    @csrf
    <label for="ID">Enter Name:</label><input type="text" name="name" placeholder="Please Enter Student Name"><br><br>
    <label for="ID">Enter Father Name:</label><input type="text" name="fname" placeholder="Please Enter Student Father's Name"><br><br>
    <label for="ID">Enter Class:</label><input type="text" name="class" placeholder="Please Enter Student Class"><br><br>
    <label for="ID">Enter Roll No:</label><input type="text" name="rollno" placeholder="Please Enter Student Roll No"><br><br>
<button type="submit">Add Student</button>