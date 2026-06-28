<div class="page-sidebar">
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="<?= base_url('/') ?>">ATLANT</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?= base_url('assets/assets/images/users/FotoSaya.jpg') ?>" alt="Meliana Khamisah"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?= base_url('assets/assets/images/users/FotoSaya.jpg') ?>" alt="Meliana Khamisah"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Meliana Khamisah</div>
                    <div class="profile-data-title">Teknologi Informasi</div>
                </div>
            </div>                                                                        
        </li>
        <li class="xn-title">Navigation</li>
        
        <li class="<?= ($judul == 'Dashboard' || $judul == 'Dashboard - Maps') ? 'active' : '' ?>">
            <a href="<?= base_url('/') ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>                    
        
        <li class="xn-openable <?= ($judul == 'Gallery' || $judul == 'Profile') ? 'active' : '' ?>">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
            <ul>
                <li><a href="<?= base_url('pages/gallery') ?>"><span class="fa fa-image"></span> Gallery</a></li>
                <li><a href="<?= base_url('pages/profile') ?>"><span class="fa fa-user"></span> Profile</a></li>
            </ul>
        </li>
        
        <li class="xn-title">Components</li>
        
        <!-- Hasil ubahan -->
         <li>
            <a href="<?= base_url('maps') ?>"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
        </li>
        
    </ul>
    </div>
    <style>
/* Menindas class active pada menu maps agar tidak berwarna biru */
.x-navigation li#menu-maps.active > a {
    background: transparent !important; /* Membuat background kotak jadi transparan */
    color: #CCC !important; /* Mengembalikan warna teks ke abu-abu default sidebar */
    border-left: 0px !important; /* Menghapus garis tepi kiri jika ada */
}

/* Memastikan ikon juga kembali ke warna default */
.x-navigation li#menu-maps.active > a span.fa {
    color: #CCC !important;
}
</style>