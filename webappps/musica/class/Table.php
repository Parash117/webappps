<?php
  class Table{
    public $heading;
    public $rows=[];

    public function setHeading($heading){
      $this->heading=$heading;
    }

    public function addRow($row){
      $this->rows[]=$row;
    }

    public function getHTML(){
      $html = '<table border = "0">';
      $html .= '<tr>';
      foreach ($this->heading as $heading) {
        $html.='<th>'.$heading.'</th>';
      }
      $html.='</tr>';
      foreach ($this->rows as $row) {
        $html.='<tr>';
        foreach ($row as $key=>$cell) {
          if(!is_numeric($key)){

            $html.='<td>'.$cell.'</td>';
          }
        }
        $html.='</tr>';
      }
      $html.='</table>';
      return $html;
    }

  }

 ?>
