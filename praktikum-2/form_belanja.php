<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Belanja</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class=" d-flex m-5">
  <div class="container_fluid1 col-8">
    <form method = "POST" action = "form_belanja.php">
    <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
    </div>
    </div>
    <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-4">
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </form>
  </div>
  <div class="container_fluid2 col-4">
  <div class="card">
				<h5 class="card-header bg-primary text-white">
					Daftar Harga
				</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">Kulkas : 3.100.000</li>
            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
          </ul>
				<div class="card-footer bg-primary text-white">
					Harga Dapat Berubah Setiap Saat
				</div>
			</div>
  </div>


</div>
<?php
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];


        if ($produk == 'TV'){
            $harga = 4200000;
        }elseif ($produk == 'KULKAS'){
            $harga = 3100000;
        }elseif ($produk == 'MESIN CUCI'){
            $harga = 3800000;
        }

        $total = $jumlah * $harga;

        echo '<br/> Nama Customer : '.$customer; 
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Beli : '.$jumlah; 
        echo '<br/> Total Belanja :'.$total; 
    ?>

</body>
</html>