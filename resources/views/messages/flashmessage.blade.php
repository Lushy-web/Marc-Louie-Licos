@if ( Session::has('flash_message') )

  <div class="alert {{ Session::get('flash_type') }} alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>  
        <strong>{{ Session::get('flash_message') }}</strong>
    </div>
  
@endif