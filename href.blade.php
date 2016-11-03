// approach 1
@foreach($users as $user)
	<ul>
	<li><a href="/users/{{ $user->id }}">{{ $user->username }}</a></li>
	</ul>
@endforeach

// approach 2
@foreach($users as $user)
	<ul>
	<li><a href="{{ action('UsersController@user', [$user->id]) }}">{{ $user->username }}</a></li>
	</ul>
@endforeach

// approach 3
@foreach($users as $user)
	<ul>
	<li><a href="{{ url('users', $user->id) }}">{{ $user->username }}</a></li>
	</ul>
@endforeach

// approach 4
// Route::get('users/{id}', 'UsersController@user')->name('blabla');
@foreach($users as $user)
	<ul>
	<li><a href="{{ route('blabla', [$user->id]) }}">{{ $user->username }}</a></li>
	</ul>
@endforeach
