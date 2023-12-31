{{-- MENU DA ESQUERDA --}}
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Vendas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('produto.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Clientes
                </a>
            </li>

        </ul>
    </div>
</nav>
