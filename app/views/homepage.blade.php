<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body background="background.jpg">
      <font color="white">
        {{HTML::style('css/bootstrap.css')}}
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1> Profile</h1>  
	                <h1> Name: <?= $firstname, " ", $lastname ?></h1>
	                <h1> Username: <?= $username ?></h1>
	                <h1> Email: <?= $email ?></h1>
                </div> 
                <div class="col-md-4">
                    <h1> Update Info</h1>
                    <form action="updateUsername" role="form" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name ="Username" id="" class="form-control">
                        </div>
                        <div><input type="submit" value="Username"></div>
                    </form>
                    <form action="updateFirst" role="form" method="post">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name ="Firstname" id="" class="form-control">
                        </div>
                        <div><input type="submit" value="Update First Name"></div>
                    </form>
                    <form action="updateLast" role="form" method="post">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name ="Lastname" id="" class="form-control">
                        </div>
                        <div><input type="submit" value="Update Last Name"></div>
                    </form>
                    <form action="updatePass" role="form" method="post">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name ="Password" id="" class="form-control">
                        </div>
                    </form>
                    <form action="updateEmail" role="form" method="post">
                        <div><input type="submit" value="Update Password"></div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name ="Email" id="" class="form-control">
                        </div>
                        <input type="submit" value="UpdateEmail">
                    </form>
                 </div>
            </div>
        </div>
      </font>
  </body>
</html>
