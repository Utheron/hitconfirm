@extends('layouts.shujin')

@section('content')
<div class="row hcf-admin__header mb-3">
    <div class="col hcf-admin__header-title p-0">
        Dashboard
    </div>
    <div>
        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Add
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">News</button>
              <button class="dropdown-item" type="button">Event</button>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item" type="button">Member</button>
            </div>
          </div>
    </div>
</div>
<div class="row">
        <card-members :users="{{ $users }}"></card-members>
        <card-treasury></card-treasury>
        <card-users :users="{{ $users }}"></card-users>
        <card-agenda></card-agenda> 
</div>
@endsection