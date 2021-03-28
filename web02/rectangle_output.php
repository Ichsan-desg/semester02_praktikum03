<form>
    <div>
        <label>Panjang Persegi Panjang</label> <br>
        <input name="panjang" type="text" placeholder="Masukkan panjang">
    </div><br/>
    <div>
        <label>Lebar Persegi Panjang</label> <br>
        <input name="lebar" type="text" placeholder="Masukkan lebar">
    </div><br/>
    <div>
        <button>Klik Gan!</button>
    </div>
</form>
<?php
require_once "rectangle_data.php";
$panjang = $_GET['panjang'];
$lebar = $_GET['lebar'] ;
if ($panjang) {
$nilai = new nilai($panjang, $lebar );
echo "Luasnya : ",$nilai->get_luas();
echo "<br/>";
echo "Keliling : ",$nilai->get_keliling();
}
?>
