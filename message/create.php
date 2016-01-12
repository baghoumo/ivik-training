<?php

/**
 * this file create new message
 */
include "header.php";
?>


        
        <article>
            <form id="create" method="POST" action="insert.php">
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
        
<?php
include "footer.php";
?>