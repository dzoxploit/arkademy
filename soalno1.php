<?php
class Biodata{
    private $name = '';
    private $address = ''; 
    private $hobbies = array();
    private $is_married = '';
    private $school = array();
    private $skill = array();
    function get_data(){
        $this->name = 'Didin nur yahya';
        $this->address = 'puri bintaro hijau h4/45 parung serab ciledug tangerang';
        $this->hobbies = array('ngoding','tidur','makan','minum','humor');
        $this->is_married = array('0' => 'belum','1' => 'sudah');
        $this->school = array('1' => 'smk bina informatika','2' => 'stt telkom');
        $this->skill = array( 
            1 => array(
                "nama" => 'html5',
               "score" => '80',
            ),
            
            2 => array(
                "nama" => 'php',
                "score" => '90',
            ),
            3 => array(
                "nama" => 'javascript',
                "score" => '50',
            )
         );
         $nama = $this->name;
         $alamat = $this->address;
         $hobbies = $this->hobbies;
         $nikah  = $this->is_married['0'];
         $sekolah = $this->school;
         $skill = $this->skill;
        return json_encode(array($nama,$alamat,$hobbies,$nikah,$sekolah,$skill));
     }
}
$data = new Biodata();

echo $data->get_data();
?>