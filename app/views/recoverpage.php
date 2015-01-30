<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body background="background2.jpg">
    {{HTML::style('css/bootstrap.css')}}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <font color="white", size="3">
                    <h1>Password Recovery</h1>
                    <form action="mail" method="post">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name ="Email" id="" class="form-control">
                        </div>
                </font>    
                <font color="black", size="3">
                        <input type="submit" value="Send" class = "btn btn-create">
                    </form>
                </font>
            </div>
        </div>
    </div>
  </body>
</html>
