<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body background="background.jpg">
      <font color="white", size="6">
        {{HTML::style('css/bootstrap.css')}}
        <div class="container">
            <div class="row">
                <div class="col-md-4">  
	                <h1><?= $name; ?></h1>
	                <div class="form-group">
	                    <button type="button" style="background: #fff url(Books.jpg); padding: 10.2em 5.3em; color: white; font-size:1.5m"><?= $ButtonBook; ?></button>
                    </div>
                    <div class="form-group">
	                    <button type="button" style="background: #fff url(Games.gif); padding: 7.4em 17.1em; color: white; size: 4"><?= $ButtonGame; ?></button>
                    </div>
                    <div class="form-group">
	                    <button type="button" style="background: #fff url(Movies.gif); padding: 13em 17.1em; color: black; size: 4"><?= $ButtonMovie; ?></button>	
                    </div>
                </div> 
            </div>
        </div>
      </font>
  </body>
</html>
