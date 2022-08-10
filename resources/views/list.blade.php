<h1>Student Database Data</h1>
<form method="get" action="">
    <input type="text" name="q" value="{{ request('q') }}" >
</form>
<table>
    <tr>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Class</th>
        <th>Roll No</th>
        <th>Operation</th>
    </tr>
    @foreach ($students as $student)
        <tr>
        <td>{{$student['name']}}</td>
        <td>{{$student['fname']}}</td>
        <td>{{$student['class']}}</td>
        <td>{{$student['rollno']}}</td>
        
        <td><a href={{"delete/".$student['id']}}>Delete</a>
        <a href={{"edit/".$student['id']}}>,Edit</a></td>

    </tr>
    @endforeach
</table>
<link rel="stylesheet" href="table.css">