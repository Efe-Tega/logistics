<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('create.shipment') }}" class="waves-effect">
                        <i class=" ri-shopping-cart-line"></i>
                        <span>Create Shipment</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('all.shipment') }}" class="waves-effect">
                        <i class=" ri-shopping-cart-line"></i>
                        <span>All Shipment</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('edit.status') }}" class="waves-effect">
                        <i class=" ri-shopping-cart-line"></i>
                        <span>Edit Shipment Status</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('travel.history') }}" class="waves-effect">
                        <i class=" ri-shopping-cart-line"></i>
                        <span>Add / Edit Travel History</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('generate.invoice') }}" class="waves-effect">
                        <i class=" ri-shopping-cart-line"></i>
                        <span>Generate Invoice</span>
                    </a>
                </li>

                <li class="menu-title">Pages</li>
                <li>
                    <a href="{{ route('page.profile') }}" class="waves-effect">
                        <i class="ri-edit-box-line"></i>
                        <span>Profile Page</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
