<?php 
/**[N]** 
 * JIBAS Education Community 
 * Jaringan Informasi Bersama Antar Sekolah 
 *  
 * @version: 29.0 (Sept 20, 2023) 
 * @notes: JIBAS Education Community will be managed by Yayasan Indonesia Membaca (http://www.indonesiamembaca.net) 
 *  
 * Copyright (C) 2009 Yayasan Indonesia Membaca (http://www.indonesiamembaca.net) 
 *  
 * This program is free software: you can redistribute it and/or modify 
 * it under the terms of the GNU General Public License as published by 
 * the Free Software Foundation, either version 3 of the License, or 
 * (at your option) any later version. 
 *  
 * This program is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
 * GNU General Public License for more details. 
 *  
 * You should have received a copy of the GNU General Public License 
 **[N]**/ ?>
<?php
/*
   Konfigurasi Untuk Logo dan Judul di Halaman Muka
   Ukuran logo 60x60 pixel. Menggunakan format PNG atau GIF dengan latar belakang transparan
   Simpan Gambar Logo di direktori images
   Jika tidak menggunakan logo, masukkan nama gambar nologo.png
*/
$G_LOGO_DEPAN_KIRI=getenv("G_LOGO_DEPAN_KIRI"); // nama file gambarnya, jika tidak ada gunakan nama file nologo.png
$G_LOGO_DEPAN_KANAN=getenv("G_LOGO_DEPAN_KANAN");
$G_JUDUL_DEPAN_1=getenv("G_JUDUL_DEPAN_1");
$G_JUDUL_DEPAN_2=getenv("G_JUDUL_DEPAN_2");
$G_JUDUL_DEPAN_3=getenv("G_JUDUL_DEPAN_3");
?>
