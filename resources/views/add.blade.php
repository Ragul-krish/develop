<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<h1>.......................adding Data......................</h1> 

<form action="add" method="POST">
@csrf
 <input type="text" name="id" placeholder="enter id"><br>
 <input type="text" name="name" placeholder="enter name"><br>
 <input type="text" name="lstname" placeholder="enter lstname"><br>
 <input type="text" name="address" placeholder="enter address"><br>
 <button type="submit"class="btn btn-success">Add members</button>
</form>


