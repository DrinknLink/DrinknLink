<?php

class generalmodel extends CI_Model {

    function generalmodel() {
        parent::__construct();
    }

    /**
     * 
     * Getting general info on page load
     * 
     */
    public function getGeneralInfoOnLoad($BarID) {
        $result = selectSql("Bar", array('BarID' => $BarID));
        if ($result->num_rows() != 0) {
            $row = $result->row_array();
            return $row;
        }
        return 0;
    }
   
    /**
     * 
     * Getting opening time info on page load
     * 
     */
    public function getOpeningTimesOnLoad($BarID) {
        $result = selectSql("OpeningTime", array('BarID' => $BarID));
        if ($result->num_rows() != 0) {
            $row = $result->row_array();            
            return $row;
        }
        return 0;
    }

}