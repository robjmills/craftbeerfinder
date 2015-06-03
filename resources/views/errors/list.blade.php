@if($errors->any())
    <div  class="alert alert-danger">
        <span><strong>Ooops!</strong> There were some errors in your form!</span>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif