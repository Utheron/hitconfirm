@if ($is_admin && !Request::routeIs("dashboard"))

<div class="hcf-admin__menu">
    <ul class="hcf-admin__menu-items col-9">     
        <li class="hcf-dashboard__title">
            <a class="btn btn-warning" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="hcf-dashboard__title">
            23 Members
        </li>
        <li class="hcf-dashboard__title">
            120€ Treasury
        </li>
        <li class="hcf-dashboard__title">
            31 Registered
        </li>
    </ul>
    <div class="hcf-admin__menu-append col-3">
        <button class="btn btn-primary mr-2">Settings</button>

        <!-- Default dropup button -->
        <div class="btn-group dropup">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Add
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Member</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Event</a>
                <a class="dropdown-item" href="#">News</a>
            </div>
        </div>

    </div>
</div>

@endif