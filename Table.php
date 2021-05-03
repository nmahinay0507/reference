<?php

    $var = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
    $var2 = "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb";
?>

<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style>

        #container{

            width: 800px;
            position: absolute;
            top: 30px;
            left: 0;
            right: 0;
            margin: 0 auto;

        }

        .btnDesign{

            width: 100px;
        }

    </style>

  </head>

  <body>
   
    <div id="container">
        <table id="example" class="display" style="width:100%;">
            <thead>
                <tr>
                    <th>Story</th>
                    <th>Read</th>
                    <th>Vote</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo mb_strimwidth($var, 0, 65, "...");?></td>
                    <td><button type="button" id="btnRead" class="btn btn-primary btnDesign" data-toggle="modal" data-target="#exampleModal" value="<?php echo $var; ?>"><i class="bi bi-book-fill"></i> Read</button></td>
                    <td><button type="button" class="btn btn-danger btnDesign"><i class="bi bi-heart-fill"></i> Vote</button></td>
                </tr>
                <tr>
                    <td><?php echo mb_strimwidth($var2, 0, 65, "...");?></td>
                    <td><button type="button" id="btnRead2" class="btn btn-primary btnDesign" data-toggle="modal" data-target="#exampleModal" value="<?php echo $var2; ?>"><i class="bi bi-book-fill"></i> Read</button></td>
                    <td><button type="button" class="btn btn-secondary btnDesign"><i class="bi bi-heart"></i> Unvote</button></td>
                </tr>
            </tbody>
        </table> 
    </div>
      
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" style="word-break: break-all;">
            <p id="modalStory"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    
    <!-- Custom Scripts -->
    <script>

        $(document).ready(function(){

            $('#example').DataTable({

                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": false,
                "searching": false, 
                "info": false,
                "ordering": false,
            });

            $("#btnRead").click(function(){

                var value = $("#btnRead").val();
                $("#modalStory").text(value);
            });

            $("#btnRead2").click(function(){

                var value = $("#btnRead2").val();
                $("#modalStory").text(value);
            });

        });

    </script>

  </body>
</html>