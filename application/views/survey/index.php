<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Survey Form</title>
  </head>
    <body>
        <div class="container">
        <h1>Hello, world!</h1>
            <form action="<?php echo base_url();?>/surveys/process_form" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    
                </div>
                <div class="form-group">
                    <label for="dojo-location">Dojo Location</label>
                    <select class="form-control" id="dojo-location" name="dojo-location"">
                        <option value="mountain view">Mountain View</option>
                        <option value="west view">West View</option>
                        <option value="north view">North View</option>
                        <option value="south view">South View</option>
                        <option value="east view">East View</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="favorite-language">Example select</label>
                    <select class="form-control" id="favorite-language" name="favorite-language">
                        <option value="python">Python</option>
                        <option value="node">Node</option>
                        <option value="javascript">Javascript</option>
                        <option value="scala">Scala</option>
                        <option value="java">Java</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Comment (optional)</label>
                    <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>