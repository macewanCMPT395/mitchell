<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Create User </title>
</head>
    <body background="background2.jpg">
    <font color="white", size="3">
    {{HTML::style('css/bootstrap.css')}}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h1>Create Account</h1>
            <form action="create" role="form" method="post">
                 <div class="form-group">
                     <label for="">Username *</label>
                     <input type="text" name ="Username" id="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="">First Name</label>
                     <input type="text" name ="Firstname" id="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="">Last Name</label>
                     <input type="text" name ="Lastname" id="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="">Password *</label>
                     <input type="password" name ="Password" id="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="">Email *</label>
                     <input type="text" name ="Email" id="" class="form-control">
                 </div>
                 <div> 
                    Inputs with * are required
                 </div>
    </font>    
    <font color="black", size="3">
                 <input type="submit" value="Create" class = "btn btn-create">
            </form>
            <form action="/">
            <input type="submit" value="Back To Login" class = "btn btn-back">
            </form>
            </div>
        </div>
    </div>
    </font>
    </body>
</html>
