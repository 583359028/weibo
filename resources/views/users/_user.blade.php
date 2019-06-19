<div class="list-group-item">
    <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" with=32>
    <a href="{{ route('users.show',$user) }}">
        {{ $user->name }}
    </a>
    @can('destroy',$user)
        <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="float-right">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">delete</button>
        </form>

    @endcan
</div>