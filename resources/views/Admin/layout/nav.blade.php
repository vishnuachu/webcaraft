<div class="sidebar">
    <div class="sidebar-wrapper overflow-auto">
        <ul class="nav">
            <li class="nav-item active">
                <a href="{{ route('dashboard') }}">
                    <i class="la la-th-large"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li style="padding: 2px 0px;background-color: #0000000d;"></li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}">
                    <i class="la la-shopping-cart"></i>
                    <p>Product</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('category.index') }}">
                    <i class="la la-chain"></i>
                    <p>Category</p>
                </a>
            </li>


            <li style="padding: 2px 0px;background-color: #0000000d;"></li>

            <li class="nav-item">
                <a href="{{ route('order.index') }}">
                    <i class="la la-shopping-cart"></i>
                    <p>Order</p>
                    <span class="badge badge-count" id="count">0</span>
                </a>
            </li>
            <li style="padding: 2px 0px;background-color: #0000000d;"></li>

        </ul>
    </div>
</div>