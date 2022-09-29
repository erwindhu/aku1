<?php
//identifikasikan semua nilai dari variable
$Nama = "Erwindhu Putra Widhi Wardhana";
$Nim = "202520001";
$Alamat = "Perum Pepabri Boro Kulon";
$Alamat_Email = "erwindhu13@gmail.com";
$Bidang_Minat = "Desain grafis dan Programer";
?>
<h1 style="text-align:center">Biodata Saya </h1>
<table>
<tr>
<td rowspan="9">
<img src="aku.JPEG" width="130" height="200">
</td>
<td><?php echo "Nama";?>
<td><?php echo ":"; ?></td>
<td><?php echo $Nama ?></td>
</tr>
<tr>
<td><?php echo "Nim"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Nim ;?></td>
</tr>
<tr>
<td><?php echo "Alamat"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Alamat ;?></td>
</tr>
<tr>
<td><?php echo "Alamat_Email"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Alamat_Email ;?></td>
</tr>
<tr>
<td><?php echo "Bidang_Minat"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Bidang_Minat ;?></td>
</tr>
</table>