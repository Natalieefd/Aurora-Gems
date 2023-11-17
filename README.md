<!-- inspiring README PROJECTS -->

<!-- https://github.com/ma-shamshiri/Spam-Detector/blob/master/README.md -->
<!-- https://github.com/aregtech/areg-sdk/blob/master/README.md -->
<!-- https://github.com/gitpoint/git-point#readme -->


<a name="top"></a>

<div align="center">
<!-- Logo Aplikasi -->
<img src="https://github.com/Natalieefd/Aurora-Gems/blob/main/public/assets/logo_aurora_gems_render.png" width="30%">

# Aurora Gems
### Kelompok 2<br>Website Katalog Perhiasan
<p>Projek Akhir - Praktikum Framework</p>


| NIM | NAMA | ROLE |
|------------|:----------------------:|:---------:|
| 2109106037 | Agustina Dwi Maharani | `Anggota` |
| 2109106040 | Natalie Fuad | `Ketua` |
<br>
</div>


## Table Of Content
 - [Introduction](#introduction)
 - [Alur Program](#alur-program)
 - [Job Desk](#job-desk)
 - [Features](#features)


## Introduction
<!-- tentang website -->
Aurora Gems merupakan sebuah website yang menyediakan berbagai koleksi perhiasan khusus untuk wanita dengan desain yang elegan. Aurora Gems menyediakan berbagai macam jenis katalog perhiasan mulai dari cincin, anting-anting, kalung, gelang, dan lain sebagainya. Aurora Gems juga memuat informasi detail mengenai setiap jenis perhiasan yang tersedia, seperti deskripsi, warna, berat, harga dan ukuran perhiasan tersebut. Pengguna juga dapat memilih perhiasan yang mereka sukai dengan menambahkan katalog perhiasan ke favorite mereka.


## Job Desk
<br>
<div align=center>

| NIM | NAMA | JOB DESK |
|-----|:--------------------:|:--------: |
| 2109106037 | Agustina Dwi Maharani |`FE&BE Login Page` `FE&BE Landing Page`<br>`FE&BE Product Page` `FE&BE Favorite Page`<br>`FE&BE Manajemen Product Page`|
| 2109106050 | Natalie Fuad |`FE&BE Register Page` `FE&BE Landing Page`<br>`FE&BE Product Detail Page` `FE&BE Manajemen Product Page`|

</div>
<br>

## Alur Program
<strong>Alur User</strong>

```mermaid
graph
  A(Landing Page)-->B(Login Page);
  B-->C(Regist Page);
  B--->D(Landing Page);
  D--->F(Produk Page);
  D--->E(produk Detail Page);
  D--->G(Favorite Page);
  D-->H(Logout);
```

<br>
<strong>Alur Admin<br><br></strong>


```mermaid
graph
  A(Landing Page)-->B(Login Page);
  B--->D(Landing Page);
  D--->F(Produk Page);
  D--->E(produk Detail Page);
  D--->G(Manajemen Produk Page);
  G--Action-->H(Read Produk);
      G--->I(Create Produk Page);
      G--->J(Update Produk Page);
  G--Action-->K(Delete Produk);
  D-->L(Logout);
```

<br>

## Manual Book
Silahkan buka manual book Aurora Gems [disini](MANUALBOOK.md).

## Features
Fitur-fitur yang tersedia pada website Aurora Gems :
+ <strong>User</strong>
  <details open><summary><code>Selengkapnya</code></summary>
    
  + Regist
  + Login
  + Melihat semua produk
  + Melihat detail produk
  + Menambah poduk ke favorite
  </details>

+ <strong>Admin</strong>
  <details open><summary><code>Selengkapnya</code></summary>
    
  + Login
  + Melihat semua produk
  + Melihat detail produk
  + Manajemen data produk
      + Tambah data produk
      + Ubah data produk
      + Hapus data produk
  </details>



<br>
<div align="center">
<hr>
  
[Back To Top](top)
</div>
