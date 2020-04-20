<?php 
class BootstrapTableHelper{
 
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
    
    /**
    * Table attributes holder (Classes etc)
    * @var array
    */
    private $attributes = array();
    
    /**
    * Makes table responsive or not
    * @var boolean True means responsive false means not
    */
    private $responsive = FALSE;
    
    /**
    * Construct table options
    * @param string $id ID of this table
    * @param array $attributes HTML Attributes for this table
    */

    public function __construct($id = "", $attributes = array()) {
        
        if(!empty($id)){
            $this->attributes[""] = $id;
        }
        
        if(!empty($attributes)){
            foreach($attributes as $k => $v){
                $this->attributes[$k] = $v;
            }
        }
        
        $this->attributes["class"][] = "table";
    }
    
    /**
    * Add table-hover css class to this table
    * @return \BootstrapTableHelper
    */
    public function hover(){
        $this->attributes["class"][] = "table-hover";
        return $this;
    }
    
    /**
    * Add table-striped css class to this table
    * @return \BootstrapTableHelper
    */
    public function striped(){
        $this->attributes["class"][] = "table-striped";
        return $this;
    }
    
    /**
    * Add table-bordered css class to this table
    * Make this table's rows and columns bordered
    * @return \BootstrapTableHelper
    */
    public function bordered(){
        $this->attributes["class"][] = "table-bordered";
        return $this;
    }
    
    /**
    * Make this table Responsive
    * @return \BootstrapTableHelper
    */
    public function responsive(){
        $this->responsive = TRUE;
        return $this;
    }
    
    /**
    * Add condensed css class to this table
    * @return \BootstrapTableHelper
    */
    public function condensed(){
        $this->attributes["class"][] = "table-condensed";
        return $this;
    }
    

    public function addRow($data = array(),$context = null){
        $this->rows[] = array($data,$context);
        return $this;
    }
    
    /**
    * Add Columns (Table header/footer) to this table
    * @param array $data Columns in 1D array
    * @return \BootstrapTableHelper
    */
    public function columns($data = array()){
        $this->columns = $data;
        return $this;
    }
    
    /**
    * Add one column to the table
    * @param string $column Coulmn name
    * @return \BootstrapTableHelper
    */
    public function addColumn($column){
        $this->columns[] = $column; 
        return $this;
    }
    
    /**
    * Construct Table
    * @return string Returns HTML code of table
    */
    public function __toString() {
        return $this->make();
    }
    
    /**
    * Generate HTML for this table and return it
    * @return string Returns HTML Code of table
    */
    public function make(){
        print_r($this->attributes);
        // start columns
        $columns = "<thead><tr>";
        foreach($this->columns as $col){
            $columns.= '<th scope="col">';
            $columns.= "$col";
            $columns.= '</th>';
        }
        $columns.= "</tr></thead>";
        // end columns
        $table = "";
        $table.= "<table"; foreach($this->attributes as $name => $value){ if(is_array($value)){ 
        $table.= " $name='"; foreach($value as $v){ $table.= " $v"; } 
        $table.= "'"; }else{ 
        $table.= " $name='$value'"; } } 
        $table.= ">"; 
        $table.= ""; 
        $table.= $columns; 
        $table.= ""; 
        $table.= ""; 
        //print_r($this->rows);
        $table.= '<tbody>';
        foreach($this->rows as $row){ 
            $table.= ''; 
            $table.= '<tr>';
            foreach($row[0] as $column){ 
            $table.= '<td>';
            $table.= ''.$column.'';
            $table.= '</td>'; 
            } // end foreach
            $table.= '</tr>';
            $table.= ""; 
        } // end foreach
        $table.= '</tbody>';
        return $table;
    }// end function

}// end class
?>