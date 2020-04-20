<?php 
// table class
require 'class.BootstrapTable.php'; 

// build table
function build_table(){
    // Fake data
    $vector_columns = array("Languages","IDEs","Browsers","OSs"); 
    $vector_rows = array();

    $row = array("PHP","NetBeans","FireFox","Windows");
    array_push($vector_rows,$row);

    $row = array("PHP","Visual studio code","FireFox","Windows");
    array_push($vector_rows,$row);

    $row = array("PHP","Php eclipse","FireFox","Windows");
    array_push($vector_rows,$row);

    $row = array("PHP","Sublime","FireFox","Windows");
    array_push($vector_rows,$row);

    // instanciate table
    $table = new BootstrapTableHelper();
    $table->bordered();
    $table->striped();
    $table->hover();
    $table->columns($vector_columns);
    foreach($vector_rows as $my_row){
        $table->addRow($my_row);    
    }
    $my_table  = $table->make();
    return $my_table;
}
?>

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
        <?php echo build_table();?>    
    </div>
</div>    
</body>
</html>