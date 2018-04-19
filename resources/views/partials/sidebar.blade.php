<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ \Request::is( 'site') ? 'active' : '' }}"href="/site" >Home</a>
    <a class="nav-link {{ \Request::is( 'user') ? 'active' : '' }}" href="/user">Users</a>
</div>