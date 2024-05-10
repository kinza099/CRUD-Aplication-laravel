<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap cdn 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <i class="fa-solid fa-code"></i> Crud Application
  </a>
  <nav class="nav text-white">
  <a class="nav-link text-white" href="{{'index'}}"><i class="fa-sharp fa-solid fa-house mr-1"></i>Home</a>
  <a class="nav-link text-white" href="/"><i class="fa-sharp fa-solid fa-user-plus mr-1"></i>Add User</a>
  <a class="nav-link text-white" href="{{'about'}}"><i class="fa-sharp fa-solid fa-globe mr-1"></i>About</a>
  <a class="nav-link text-white" href="{{'contact'}}"><i class="fa-sharp fa-solid fa-envelope mr-1"></i>Contact</a>
</nav>
</nav>
<br>

<div style="margin-bottom: 30px;"> <h1 class="text-center">RECORDS</h1></div>

<div class="container" style="">
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->name}}</td>
        <td>{{$post->email}}</td>
        <td>{{$post->password}}</td>
        <td>{{$post->phone}}</td>
        <td>
          <div class="row">
            <form action="{{ route('del', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><i class="fa-sharp fa-solid fa-trash" style="color: red;"></i></button>
            </form>
            <div class="col">
              <a href="{{route('edit',$post->id)}}"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
            </div>
          </div>
        </td>  
      </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
