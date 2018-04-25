<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ \Request::is( 'admin/user') ? 'active' : '' }}" href="/admin/user">Users</a>
    <a class="nav-link {{ \Request::is( 'admin/visitors') ? 'active' : '' }}" href="/admin/visitors">Visitors</a>
</div>