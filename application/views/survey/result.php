<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Survey Form | Result</title>
    <style>
        span{
            font-weight:bold;
        }

        .container{
            padding-top:30px;
        }

        section {
            -webkit-box-shadow: 0px 1px 5px 17px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 1px 5px 17px rgba(0,0,0,0.75);
            box-shadow: 0px 1px 5px 17px rgba(0,0,0,0.75);
            margin:120px auto;
            padding:20px
        }
    </style>
  </head>
    <body>
        <div class="container">
           <?php if(!empty($this->session->flashdata("submit-success"))):?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata("submit-success")?>
            </div>
            <?php endif;?>

            <section>
                <h1>Submitted Information</h1>

                <p>Name: <span><?= $this->session->userdata('name');?></span></p>
                <p>Dojo Location: <span><?= $this->session->userdata('dojo-location');?></span></p>
                <p>Favorite Language: <span><?= $this->session->userdata('favorite-language');?>!!!</span></p>
                <p>Comment: <span><?= $this->session->userdata('comment');?></span></p>

                <a href="<?php echo base_url()?>">Go back</a>
            </section>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>