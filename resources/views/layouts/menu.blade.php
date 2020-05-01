<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('usuarios.index') !!}">
        <i class="fa fa-users"></i>
        <span>Usuários</span>
    </a>
</li>
<li class="nav-item {{ Request::is('produtos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('produtos.index') }}">
        <i class="fa fa-cubes"></i>
        <span>Produtos</span>
    </a>
</li>
