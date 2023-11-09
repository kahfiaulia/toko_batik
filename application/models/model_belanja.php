<?php

class Model_belanja extends CI_Model{
    public function tampil_data(){
        return $this -> db -> get('belanja');
    }

    public function find($id){
        $result = $this -> db-> where('id_belanja', $id)
                             -> limit(1)
                             -> get('belanja');
        if($result -> num_rows() > 0){
            return $result -> row();
        } else {
            return array();
        }                       
    }

    public function detail_belanja($id_belanja){
        $result = $this -> db -> where('id_belanja', $id_belanja) ->get('belanja');
        if ($result -> num_rows() > 0){
            return $result -> result();
        } else{
            return false;
        }
    }
}