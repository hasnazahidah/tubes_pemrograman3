<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?= base_url('buku'); ?>">TOKO BUKU SERBA 100K</a>

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
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('Users'); ?>">User</a>
            </li>
             <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('Pegawai'); ?>">Pegawai</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Penjualan'); ?>">Penjualan</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('pembeli'); ?>">Pembeli</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('Transaksi'); ?>">Transaksi</a>
            </li>
             <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('key'); ?>">Generated Key</a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>
