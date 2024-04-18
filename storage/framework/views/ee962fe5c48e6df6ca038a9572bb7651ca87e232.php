<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/intro.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/planes.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/casos-practicos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/mobile-main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/scroll-horizontal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/whast.css')); ?>" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="css/videoModal.css"> -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <!--video -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap-3.3.7/dist/css/bootstrap.css')); ?>"> 
    <script src="<?php echo e(asset('assets/bootstrap-3.3.7/dist/js/bootstrap.js')); ?>"></script>
    <style>
        .bs-example {
            margin: 20px;
        }

        .modal-content{
            margin: 0 auto;
            display: block; 
            width: 600px;
            height:600px;
            display: flex;
            align-items: center;
        }
        .modal-body iframe{
            width: 600px;
            height:600px;
           
        }
        .modal-body-responsive iframe{
            width: 60%;
            height:60%;

        }
    </style>
    <script>
        $(document).ready(function() {
            var url = $("#Geeks3").attr('src');
            $("#Geeks2").on('hide.bs.modal', function() {
                $("#Geeks3").attr('src', '');
            });
            $("#Geeks2").on('show.bs.modal', function() {
                $("#Geeks3").attr('src', url);
            });
        });
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js">
                            </script>
                           
                            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
                            </script>
                            
                            <script type="text/javascript">
                                $(window).load(function() {
                                    $(".carousel .item").each(function() {
                                        var i = $(this).next();
                                        i.length || (i = $(this).siblings(":first")),
                                            i.children(":first-child").clone().appendTo($(this));
                                        for (var n = 0; n < 1; n++)(i = i.next()).length ||
                                            (i = $(this).siblings(":first")),
                                            i.children(":first-child").clone().appendTo($(this))
                                    })
                                });
                            </script>
    <title>Enext</title>
</head><?php /**PATH /home/ingealimitec2/public_html/demos/demo.ingealimite.com/resources/views/web/layout/header.blade.php ENDPATH**/ ?>