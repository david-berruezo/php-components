<?php require 'class.BootstrapTable.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">
    <script src="https://jquery.com/download/"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
    <style>
        td{
            cursor:pointer;
        }

        .container{
            margin-top:100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <h3>Bootstrap PHP table</h3>
        <br>
        <?php 
        $table = new BootstrapTableHelper();
        $table->bordered();
        $table->striped();
        $table->hover();
        $table->columns(array("Languages","IDEs","Browsers","OSs"));
        $table->addRow(array("PHP","NetBeans","FireFox","Windows"),"activ");
        $table->addRow(array("PHP","NetBeans","FireFox","Windows"),"");
        $table->addRow(array("PHP","NetBeans","FireFox","Windows"),"success");
        $table->addRow(array("PHP","NetBeans","FireFox","Windows"));
        $table->addRow(array("Java","Visual Studio","Chrome","Linux"),"warning");
        $table->addRow(array("Java","Visual Studio","Chrome","Linux"));
        $table->addRow(array("Java","Visual Studio","Chrome","Linux"),"danger");
        $table->addRow(array("Java","Visual Studio","Chrome","Linux"),"");
        $table->addRow(array("C++","Ecllips","Internet Explorer","Mac OS"),"info");
        $table->addRow(array("C++","Ecllips","Internet Explorer","Mac OS"),"");
        $table->addRow(array("C++","Ecllips","Internet Explorer","Mac OS"),"danger");
        $table->addRow(array("C++","Ecllips","Internet Explorer","Mac OS"),"");
        echo $table->make();
        ?>    
    </div>
</div>    
</body>
</html>



 

