<h1>Update Student Data</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}>
    <input type="text" name="name" value={{$data['name']}}> <br><br>
    <input type="text" name="fname" value={{$data['fname']}}><br><br>
    <input type="text" name="class" value={{$data['class']}}><br><br>
    <input type="text" name="rollno" value={{$data['rollno']}}><br><br>
    <button type="submit">Update</button>
</form>