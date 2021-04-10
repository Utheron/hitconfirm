@if ($is_admin)

{{-- INDEX --}}
@if (Request::routeIs('index'))

<!-- Menu -->
<div class="hcf-admin__menu">
    <ul class="hcf-admin__menu-items col-9">     
        <li class="">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminIndexMenu">Nouveau</button>
        </li>
    </ul>
    <div class="hcf-topnav__append col-3">
        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="adminIndexMenu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04">
                        <option selected>Select Content</option>
                        <option value="1">News</option>
                        <option value="2">Event</option>
                        <option value="3">Page</option>
                    </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endif

@endif