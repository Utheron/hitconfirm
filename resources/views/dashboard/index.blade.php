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
    <div class="col hcf-admin__card ml-0">
        <div class="hcf-admin__card-title">
            Members
        </div>
        <div class="hcf-admin__card-body"></div>
        <div class="hcf-admin__card-footer"></div>
    </div>
    <div class="col hcf-admin__card">
        <div class="hcf-admin__card-title">
            Treasury
        </div>
        <div class="hcf-admin__card-body"></div>
        <div class="hcf-admin__card-footer"></div>
    </div>
    <div class="col hcf-admin__card">
        <div class="hcf-admin__card-title">
            Users
        </div>
        <div class="hcf-admin__card-body"></div>
        <div class="hcf-admin__card-footer"></div>
    </div>
    <div class="col hcf-admin__card mr-0">
        <div class="hcf-admin__card-title">
            Agenda
        </div>
        <div class="hcf-admin__card-body"></div>
        <div class="hcf-admin__card-footer"></div>
    </div>
</div>
@endsection