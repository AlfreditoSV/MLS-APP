<nav>
    <div class="px-3 py-2 " style="background-color:#005189">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <a href="">

                </a>
                <a href="{{ route('dashboard') }} "
                    class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">

                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small text-center">
                    <li>
                        <a href="{{route('ecommerce')}}" class="nav-link text-white">
                            <i class="fa-solid fa-dumpster bi d-block md-auto mb-1 icon-menu" style=""></i>
                            Ecommerce
                        </a>
                    </li>
                    <li>
                        <a href="{{route('shipping_quoter')}}" class="nav-link text-white">
                            <i class="fa-solid fa-list-check bi d-block md-auto mb-1 icon-menu"></i>
                            Cotizar envío
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sales_packaging_material')}}" class="nav-link text-white">
                            <i class="fa-solid fa-cubes bi d-block md-auto mb-1 icon-menu"></i>
                            Venta material
                        </a>
                    </li>
                    <li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <i class="fa-solid fa-truck-fast bi d-block md-auto mb-1 icon-menu"></i>
                                Envíos
                            </a>
                        </li>
                        <li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <i class="fa-regular fa-building bi d-block md-auto mb-1 icon-menu"></i>
                                    Adminstrador
                                </a>
                            </li>
                            <li>
                        <a href="route('profile.edit')" class="nav-link text-white">
                            <i class="fa-solid fa-user bi d-block md-auto mb-1 icon-menu"></i>
                            <div>{{-- {{ Auth::user()->name }} --}}</div>
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')" class="text-white"
                                onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <div>cerrar sesión</div>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
