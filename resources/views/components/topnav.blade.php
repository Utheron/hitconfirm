<div class="hcf-topnav row no-gutters">
    <ul class="hcf-topnav__menu-items col-9">   
        <div id="navbar-toggler">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <a href="{{ route('page.show', 'voluptate-doloremque') }}">
            <li class="active">
                <i class="fas fa-store-alt hcf-topnav__menu-item_icon"></i>
                <div class="hcf-topnav__menu-item_name">Association</div>
            </li>
        </a>
        <a href="{{ route('page.show', 'eius-deleniti') }}">
            <li class="active">
                <i class="fas fa-balance-scale hcf-topnav__menu-item_icon"></i>
                <div class="hcf-topnav__menu-item_name">Règlement</div>
            </li>
        </a>
        <a href="{{ route('page.show', 'eius') }}">
            <li class="active">
                <i class="fas fa-file-signature hcf-topnav__menu-item_icon"></i>
                <div class="hcf-topnav__menu-item_name">Devenir Membre</div>
            </li>
        </a>
        <a href="{{ route('page.show', 'rerum') }}">
            <li class="active">
                <i class="fas fa-handshake hcf-topnav__menu-item_icon"></i>
                <div class="hcf-topnav__menu-item_name">Partenaires</div>
            </li>
        </a>
    </ul>
    <div class="hcf-topnav__append col-3">
        
        <div class="hcf-topnav__append-notify">
            <a href="#" id="topnav-notify__alert" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
                <span class="badge badge-primary">9</span>
            </a>
            
            <div class="dropdown-menu" aria-labelledby="topnav-notify__alert">
                <a class="dropdown-item" href="#">ALERT</a>
                <a class="dropdown-item" href="#">Messages</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div>
        </div>
        
        <div class="hcf-topnav__append-notify">
            <a href="#" id="topnav-notify__message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope"></i>
                <span class="badge badge-primary">4</span>
            </a>
            
            <div class="dropdown-menu" aria-labelledby="topnav-notify__message">
                <a class="dropdown-item" href="#">MESSAGE</a>
                <a class="dropdown-item" href="#">Messages</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div>
        </div>
        
        <div class="hcf-topnav__append-user">
            <a href="#" id="topnav-user__menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (Auth::check())
                <img src="{{ Auth::user()->avatar }}" class="img-fluid" alt="">
                @else
                <img src="https://place-hold.it/120x120" class="img-fluid" alt="">
                @endif
            </a>
            
            <div class="dropdown-menu" aria-labelledby="topnav-user__menu">
                <a class="dropdown-item" href="#">Very_Long_Ass_User_Name_But_Not_That_Much</a>
                <a class="dropdown-item" href="#">Messages</a>
                <a class="dropdown-item" href="#">Settings</a>
                @if (Auth::check())
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        Log out
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
            @endif
        </div>
    </div>
    
</div>
</div>