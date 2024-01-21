<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
        <a href="/home" class="menu-link text-body">
            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
            <div data-i18n="Beranda">Beranda</div>
        </a>
    </li>


    @if (Auth()->user()->role == 'Kepala')
        <li class="menu-item {{ request()->is('admins') ? 'active' : '' }}">
            <a href="{{ route('users.officer') }}" class="menu-link text-body">
                <i class="menu-icon tf-icons mdi mdi-human"></i>
                <div data-i18n="Admin">Akun Admin</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('reports') ? 'active' : '' }}">
            <a href="/reports" class="menu-link text-body">
                <i class="menu-icon tf-icons mdi mdi-cash"></i>
                <div data-i18n="reports">Laporan</div>
            </a>
        </li>
    @else
        <li class="menu-item {{ request()->is(['users', 'confirmation-account']) ? 'active' : '' }}">
            <a href="/users" class="menu-link text-body menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-human"></i>
                <div data-i18n="Users">Users</div>
                <div class="badge bg-danger rounded-pill ms-auto {{ $pending == null ? 'd-none' : '' }}">
                    {{ $pending }}
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users.index') }}" class="menu-link text-body">
                        <div data-i18n="Data-User">Data User</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('confirmations.index') }}" class="menu-link text-body">
                        <div data-i18n="Konfirmasi-Akun">Konfirmasi Akun</div>
                        <div class="badge bg-danger rounded-pill ms-auto {{ $pending == null ? 'd-none' : '' }}">
                            {{ $pending }}
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('categories') ? 'active' : '' }}">
            <a href="/categories" class="menu-link text-body">
                <i class="menu-icon tf-icons mdi mdi-shape"></i>
                <div data-i18n="categories">Kategori Buku</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('books') ? 'active' : '' }}">
            <a href="/books" class="menu-link text-body">
                <i class="menu-icon tf-icons mdi mdi-book"></i>
                <div data-i18n="books">Buku</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('transactions') ? 'active' : '' }}">
            <a href="/transactions" class="menu-link text-body">
                <i class="menu-icon tf-icons mdi mdi-sync-circle"></i>
                <div data-i18n="transactions">Transaksi Perpustakaan</div>
                <div class="badge bg-danger rounded-pill ms-auto {{ $late_days == null ? 'd-none' : '' }}">
                    {{ $late_days }}
                </div>
                <div class="badge bg-info rounded-pill ms-auto {{ $confirmed == null ? 'd-none' : '' }}">
                    {{ $confirmed }}
                </div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('penalties') ? 'active' : '' }}">
            <a href="/penalties" class="menu-link text-body">
                <i class="menu-icon tf-icons mdi mdi-cash"></i>
                <div data-i18n="penalties">Denda</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->is(['/reports/books', '/reports/users', '/reports/transactions', '/reports/penalties']) ? 'active' : '' }}">
            <a href="" class="menu-link text-body menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-human"></i>
                <div data-i18n="report">Laporan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('reports.members') }}" class="menu-link text-body">
                        <div data-i18n="reports-members">Laporan Anggota</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('reports.books') }}" class="menu-link text-body">
                        <div data-i18n="reports-books">Laporan Buku</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('reports.transactions') }}" class="menu-link text-body">
                        <div data-i18n="reports-transactions">Laporan Transaksi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('reports.penalties') }}" class="menu-link text-body">
                        <div data-i18n="reports-penalties">Laporan Denda</div>
                    </a>
                </li>
            </ul>
        </li>
    @endif

</ul>
