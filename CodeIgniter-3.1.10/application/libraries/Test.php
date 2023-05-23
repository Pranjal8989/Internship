<?php
//custom libraries in this class name and file name should be same
class Test
{
    public function dbdetails()
    {
        $ic=&get_instance();
        $ic->load->helper('array');
        echo "showing db details"."</br>";
    }
}
?>