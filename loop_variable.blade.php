@foreach($users as $user)
  {{$user->name}}{{$loop->remaining?', ':''}}
@endforeach

/**
  'iteration',
  'index',
  'first',
  'last',
  'count',
  'remaining',
  'level',
  'parent'
  */
  
