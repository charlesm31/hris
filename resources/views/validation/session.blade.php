@if(session()->has('message'))
    <div class="alert alert-danger validation-alert"  style="position: relative;">
        <ul>
             <li>{{ session()->get('message') }}</li>
        </ul>       
    </div>
@endif