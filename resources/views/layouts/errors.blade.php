@if (count($errors))
    
<div class="form-gorup">

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error }}</li>
      @endforeach
    </ul>
  </div>

</div>
@endif