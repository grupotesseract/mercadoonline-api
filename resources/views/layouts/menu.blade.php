<li class="nav-item {{ Request::is('produtos*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('produtos.index') }}">
    <i class="fa fa-cubes fa-fw"></i>
    <span>Produtos</span>
  </a>
</li>

<li class="nav-item {{ Request::is('pedidos*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('pedidos.index') }}">
    <i class="fas fa-shopping-cart fa-fw"></i>
    <span>Pedidos</span>
  </a>
</li>

<li class="nav-item {{ Request::is('banners*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('banners.index') }}">
    <i class="fa fa-ad fa-fw"></i>
    <span>Banners</span>
  </a>
</li>

<hr>

<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
  <a class="nav-link" href="{!! route('usuarios.index') !!}">
    <i class="fa fa-users fa-fw"></i>
    <span>Usuários</span>
  </a>
</li>

<li class="nav-item {{ Request::is('configuracoes*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('configuracoes.edit', 1) }}">
    <i class="fa fa-cogs fa-fw"></i>
    <span>Configurações</span>
  </a>
</li>
