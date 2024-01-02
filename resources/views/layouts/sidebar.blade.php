<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('member*') ? 'active' : '' }}"
                    href="/member">
                    <span data-feather="file"></span>
                    Data Member
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pembayaran*') ? 'active' : '' }}" href="/pembayaran">
                    <span data-feather="chevrons-right"></span>
                    Pembayaran Member
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled text-decoration-line-through{{ Request::is('konsumsi*') ? 'active' : '' }}"
                    href="/konsumsi">
                    <span data-feather="users"></span>
                    Makanan dan Minuman
                </a>
            </li>
        </ul>
    </div>
</nav>
