<?php

/**
 * this file create new message
 */

?>

<html>
    <head>
        
            <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <meta charset="UTF-8">
        <title>Ivik Training</title>
    
    </head>
    <body>
        <header></header>
        <aside></aside>
        
        <article>
            <form method="POST" action="insert.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input name="title" type="text" class="form-control" id="title" placeholder="titel">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea name="content" type="text" class="form-control" id="content"></textarea>
                  
                </div>
               
                
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </article>
        
    </body>
</html>