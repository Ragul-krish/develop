<h1>...login...</h1>

<form action="user" method="POST">
@csrf
 <input type="text" name="id" placeholder="enter id"><br>
 <input type="password" name="password" placeholder="enter name"><br>
 <button type="submit">login</button>
</form>