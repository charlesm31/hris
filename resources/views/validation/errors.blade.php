@if (count($errors))
    <div class="alert alert-danger" style="position: relative; top: 50px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif     