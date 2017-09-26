@if(session()->has('message'))
    <div class="alert alert-danger"  style="position: relative; top: 50px;">
        {{ session()->get('message') }}
    </div>
@endif