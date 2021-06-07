<h1>list of members</h1>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<table border="1"id="customers">
<tr>
 <td>ID</td>
 <td>firstName</td>
 <td>lastName</td>
 <td>address</td>
 <td>operations</td>
 <td>operations</td>
</tr>
@foreach ($employees as $employee)
<tr>
<td>{{$employee['id']}}</td>
 <td>{{$employee['name']}}</td>
 <td>{{$employee['lstname']}}</td>
 <td>{{$employee['address']}}</td>
 <td><a href={{"delete/".$employee['id']}}>delete</a></td>
 <td><a href={{"edit/".$employee['id']}}>edit</a></td>
</tr>

@endforeach


</table>


