@if(session()->has('message'))
    <div class="alert alert-danger validation-alert"  style="position: relative;">
        {{ session()->get('message') }}
    </div>
@endif