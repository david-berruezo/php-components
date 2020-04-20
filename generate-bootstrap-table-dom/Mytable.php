<?php 
class Mytable{
    
    /**
    * DOMDocument object
    * @var object DOMDocument
    */
    private $document = "";

    /**
    * Root document DOMDocument object
    * @var object root document DOMDocument
    */
    private $root_document = "";


    /**
    * Table Columns holder
    * @var array Array conatining columns
    */
    private $columns = array();
    
    /**
    * Table rows holder
    * @var array Multi-dimensional Array containing table data
    */
    private $rows = array();

    public function __construct(){
        // construct
    }

    public function create_dom_document(){
        $this->document = new DOMDocument('1.0'); //Create new document with specified version number   
    }

    public function create_columns($columns){
        $this->columns = $columns; 
    }

    public function create_rows($rows){
       $this->rows[] = $rows;     
    }  

    public function make_table(){
        // table
        $table = $this->document->createElement('table');
        $table = $this->document->appendChild($table);
        $table_class = $this->document->createAttribute('class');
        $table_class->value = "table table-hover table-striped table-bordered";
        $table->appendChild($table_class);
        // thead
        $thead = $this->document->createElement('thead');
        // tr
        $tr = $this->document->createElement('tr');
        foreach($this->columns as $column){
            $td = $this->document->createElement('td');
            $text = $this->document->createTextNode($column);
            $td->appendChild($text);
            $tr->appendChild($td);
        }
        $thead->appendChild($tr);
        $table->appendChild($thead);
        // rows
        // tbody
        $tbody = $this->document->createElement('tbody');
        foreach($this->rows as $row_one){
            // tr
            $tr = $this->document->createElement('tr');
            foreach($row_one as $row){
                $td = $this->document->createElement('td');
                $text = $this->document->createTextNode($row);
                $td->appendChild($text);
                $tr->appendChild($td);
            }
            $tbody->appendChild($tr);
        }
        $table->appendChild($tbody);
        return $table->ownerDocument->saveHTML($table);
    }

}// end class
?>