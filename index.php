<?php
 
   $koneksi = mysqli_connect("localhost", "root", "", "dbpenjualan_khirana");

   $querry = mysqli_query($koneksi, "select * from tbproduk");
   while($data = mysqli_fetch_array(result: $querry)){
    echo $data["nama"]."<br/>";
    echo $data["kategori"];
   }

?>