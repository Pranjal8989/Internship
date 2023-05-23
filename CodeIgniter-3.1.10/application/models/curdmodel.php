<?php
class Curdmodel extends CI_model
{
    public function getrecord()
    {
    
       $q=$this->db->get('details');
      return $q->result();
    }
    public function saverecord($data)
    {
      return $this->db->insert('details',$data);
      
    }
    public function getAllRecords($record_id)
    {
      $qurey=$this->db->get_where('details',array('id'=>$record_id));
      if($qurey->num_rows() > 0)
      {
          return $qurey->row();
      }
    }
    public function updaterecords($record_id,$data)
    {
      $query = $this->db->where('id',$record_id)
      ->update('details',$data);
      return 1;
    }
    public function deleterecord($record_id)
    {
      return $this->db->delete('details',array('id'=>$record_id));
    }
}

?>