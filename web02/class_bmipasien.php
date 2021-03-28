<?php
class BmiPasien {
    public $nama;
    public $umur;
    public $jeniskelamin; 
    public $berat; // for calculate BMI
    public $convert_t; // for calculate BMI

    // for converting cm to m, example 160cm x 0.01m = 1.6m (used to calculate BMI)

//============================================================================//

    function __construct($berat, $convert_t ) {
        $this->berat = $berat;
        $this->convert_t = $convert_t;
    }

//============================================================================//

    function hasil_mbi() {
        return ($this->berat) / ($this->convert_t * 2);                 // Calculate for result MBI
    }
    
//============================================================================//

    function status_mbi(){
            if (($this->berat) / ($this->convert_t * 2) >= 30.0){
            return "Berat Kegemukan";
        }
            if (($this->berat) / ($this->convert_t * 2) >= 25.0){
            return "Berat lebih";                                       // Grade for Status MBI
        }
            if (($this->berat) / ($this->convert_t * 2) >= 18.5){
            return "Berat Ideal";
        }
        if (($this->berat) / ($this->convert_t * 2) >= 0){
            return "Berat Kurang";
        }
    }

//============================================================================//

}
?>

