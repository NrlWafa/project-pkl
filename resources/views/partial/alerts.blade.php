@if (Session::has('alerts'))
  @foreach(Session::get('alerts') as $alert)
    <div class="alert alert-{{ $alert['type'] }} alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
      </button> {!! $alert['text'] !!}
    </div>
  @endforeach
@endif
