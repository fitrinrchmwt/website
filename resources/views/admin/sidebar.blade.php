<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
    </a>
    <a href="{{ route('admin.articles.index') }}" class="list-group-item {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
        <i class="fas fa-newspaper me-2"></i> Kelola Artikel
    </a>
    <a href="{{ route('admin.products.index') }}" class="list-group-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
        <i class="fas fa-box-open me-2"></i> Kelola Produk
    </a>
    <a href="#" class="list-group-item">
        <i class="fas fa-users me-2"></i> Kelola User
    </a>
    <a href="#" class="list-group-item">
        <i class="fas fa-cogs me-2"></i> Pengaturan
    </a>
</div>
