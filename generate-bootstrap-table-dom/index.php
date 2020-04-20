<?php 
// MyTable class
require 'Mytable.php'; 

function build_table(){
    // columns
    $vector_columns = array("Languages","IDEs","Browsers","OSs");
    // rows
    $vector_rows = array();

    $row = array("PHP","NetBeans","FireFox","Windows");
    array_push($vector_rows,$row);

    $row = array("PHP","Visual studio code","FireFox","Windows");
    array_push($vector_rows,$row);

    $row = array("PHP","Php eclipse","FireFox","Windows");
    array_push($vector_rows,$row);

    $row = array("PHP","Sublime","FireFox","Windows");
    array_push($vector_rows,$row);

    // table
    $table = new Mytable(); 
    $table->create_dom_document();
    $table->create_columns($vector_columns);
    foreach($vector_rows as $my_row){
        $table->create_rows($my_row);    
    }
    $tabla = $table->make_table();
    return $tabla;
    //echo $tabla;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate bootstrap table DOM</title>
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
        <?php echo build_table(); ?>    
    </div>
</div>       
</body>
</html>
