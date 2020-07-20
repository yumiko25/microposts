
  
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['microposts.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
        
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['microposts.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif