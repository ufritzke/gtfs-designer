@if(Session::has('danger_message'))
<div class="row">
  <div class="col s12">
    <div class="card red darken-2">
      <div class="card-content white-text">
        <p>{!! Session::get('danger_message') !!}</p>
      </div>
    </div>
  </div>
</div>
@endif