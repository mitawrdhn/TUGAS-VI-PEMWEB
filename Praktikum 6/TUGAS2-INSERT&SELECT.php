<?php
include "TUGAS2-KONEKSI.php";
$sql = "INSERT INTO buku_tamu (NAMA,EMAIL,ISI) VALUES ('Mita','rahayuwrdhn@gmail.com','Pengunjung'),('Reilly','reillylikecat@gmail.com','Pengunjung'),('Bianca','biancaalexandra@gmail.com','Pengunjung')";
if(mysqli_query($conn,$sql)){
	echo "New record created succesfully"."<br>";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
} 
$sql = "SELECT NAMA,EMAIL,ISI FROM buku_tamu";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	//output data of each row
	while($row = mysqli_fetch_assoc($result)){
		echo "NAMA: " . $row["NAMA"] . " - EMAIL: " . $row["EMAIL"] . " " . $row["ISI"] . "<br>";
	}
} else {
	echo "0 results";
}
mysqli_close($conn);
?>