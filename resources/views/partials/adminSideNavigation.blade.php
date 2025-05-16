<aside class="column is-2 hero is-fullheight is-hidden-mobile side-navigation has-background-black-bis">
    <nav class="menu mt-6">
        <p class="menu-label has-text-white has-text-centered main-text">Dashboard</p>
        <ul class="menu-list">
            <li>
                <a href=" {{ route('adminDashboard') }}">
                    <span class="icon is-small"><i class="fa fa-user"></i></span>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href=" {{ route('adminManageProducts') }}">
                    <span class="icon is-small"><i class="fa fa-box"></i></span>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('adminManageOrders') }}">
                    <span class="icon is-small"><i class="fa fa-shopping-cart"></i></span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ route('adminManageCarts') }}">
                    <span class="icon is-small"><i class="fa fa-shopping-cart"></i></span>
                    <span>Carts</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>