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
  <a class="nav-link text-white" href="{{'index'}}"<i class="fa-sharp fa-solid fa-house mr-1"></i>Home</a>
  <a class="nav-link text-white" href="/"><i class="fa-sharp fa-solid fa-user-plus mr-1"></i>Add User</a>
  <a class="nav-link text-white" href="{{'about'}}"><i class="fa-sharp fa-solid fa-globe mr-1"></i>About</a>
  <a class="nav-link text-white" href="{{'contact'}}"><i class="fa-sharp fa-solid fa-envelope mr-1"></i>Contact</a>
</nav>
</nav>

<div class="container" style="margin-top:60px; margin-bottom:60px">
    <div class="navbar-dark bg-dark" style="height:650px">
        <div style="padding-top:40px"><h1 class="text-center text-white" >Contact Us</h1></div>
        <div><p class="text-center text-white">Get in Touch With Our Team to Learn More About Crud Application</p></div>
        <div class="text-white" style="padding-left:100px; padding-right:100px; padding-top:20px;">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="lname" class="form-control" id="lname" name="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>