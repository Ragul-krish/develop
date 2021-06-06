<h1>list of members</h1>
<table border="1">
<tr>
 <td>ID</td>
 <td>firstName</td>
 <td>lastName</td>
 <td>address</td>
</tr>
@foreach ($employees as $employee)
<tr>
<td>I{{$employee['id']}}</td>
 <td>{{$employee['name']}}</td>
 <td>{{$employee['lstname']}}</td>
 <td>{{$employee['address']}}</td>
</tr>

@endforeach


</table>


