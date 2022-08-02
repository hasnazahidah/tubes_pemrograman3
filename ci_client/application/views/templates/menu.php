<nav class="navbar navbar-expand-md bg-success navbar-dark text-light">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img height=30 src="https://i.pinimg.com/originals/55/69/55/5569554b4d8a9bb11965949e1af08dbf.png"> TOKO BUKU DATIC</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('buku'); ?>">Buku</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('kategori'); ?>">Kategori</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('users'); ?>">Users</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('pegawai'); ?>">Pegawai</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('transaksi'); ?>">Transaksi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('penjualan'); ?>">Penjualan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('pembeli'); ?>">Pembeli</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> -->
        </ul>
    </div>
</nav>