<div class="hcf-sidebar">
    <a href="{{ route('index') }}">
        <div class="hcf-sidebar__logo">
            <img src="{{ asset('img/hitconfirm-logo-small.png') }}" class="img-fluid" alt="">
        </div>
    </a>
    <div id="" class="hcf-sidebar__menu">
        <div class="hcf-sidebar__menu-title">
            Options Select
        </div>
        <ul class="hcf-sidebar__menu-items">
            <a href="{{ route('index') }}">
                <li class="{{ Request::routeIs('index') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <div class="hcf-sidebar__menu-item_name">Index</div>
                </li>
            </a>
            <a href="{{ route('news.index') }}">
                <li class="{{ Request::routeIs('news.*') ? 'active' : '' }}">
                    <i class="fas fa-newspaper"></i>
                    <div class="hcf-sidebar__menu-item_name">News</div>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fas fa-calendar-day"></i>
                    <div class="hcf-sidebar__menu-item_name">Events</div>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fas fa-medal"></i>
                    <div class="hcf-sidebar__menu-item_name">Classements</div>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fas fa-child"></i>
                    <div class="hcf-sidebar__menu-item_name">Players</div>
                </li>
            </a>
        </ul>
    </div>
    @if ($is_admin)
    <div id="" class="hcf-sidebar__menu">
        <div class="hcf-sidebar__menu-title">
            Dashboard
        </div>
        <ul class="hcf-sidebar__menu-items">
            <a href="">
                <li class="">
                    <i class="fas fa-users"></i>
                    <div class="hcf-sidebar__menu-item_name">Members</div>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fas fa-coins"></i>
                    <div class="hcf-sidebar__menu-item_name">Treasury</div>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fas fa-boxes"></i>
                    <div class="hcf-sidebar__menu-item_name">Inventory</div>
                </li>
            </a>
        </ul>
    </div>
    @endif
    <div id="" class="hcf-sidebar__menu">
        <div class="hcf-sidebar__menu-title">
            About
        </div>
        <ul class="hcf-sidebar__menu-items">
            <a href="">
                <li class="">
                    <i class="fas fa-paper-plane"></i>
                    <div class="hcf-sidebar__menu-item_name">Contact</div>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fas fa-building"></i>
                    <div class="hcf-sidebar__menu-item_name">Adresse</div>
                </li>
            </a>
        </ul>
    </div>
    <div id="sidebar-menu__social" class="hcf-sidebar__menu">
        <div class="hcf-sidebar__menu-title">
            Network
        </div>
        <ul class="hcf-sidebar__menu-items">
            <a href="">
                <li class="">
                    <i class="fab fa-discord"></i>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fab fa-twitch"></i>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fab fa-facebook-square"></i>
                </li>
            </a>
            <a href="">
                <li class="">
                    <i class="fab fa-twitter-square"></i>
                </li>
            </a>
        </ul>
    </div>
</div>