@if (count($errors))
    <div class="alert alert-danger  validation-alert" style="position: relative;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    