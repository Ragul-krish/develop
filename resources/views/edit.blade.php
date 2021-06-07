<h1>update the user</h1>

<form action="/edit" method="POST">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}"><br>
 
 <input type="text" name="name" value="{{$data['name']}}"><br>
 <input type="text" name="lstname" value="{{$data['lstname']}}"><br>
 <input type="text" name="address" value="{{$data['address']}}"><br>
 <button type="submit"class="btn btn-success">update</button>
</form>