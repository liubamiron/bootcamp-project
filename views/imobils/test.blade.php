
<div class="card">

<img src="{{ asset('/assets/images/image' .$imobil->id. '.jpg') }}">

 <div class="card-body">
   <p class="card-text">{{ $imobil->id }}</p>
   <div class="d-flex justify-content-between align-items-center">
     <div class="btn-group">
      <div class="btn-group">
        <a href="{{route('itemById', ['id' => $imobil->id]) }}"
       class="btn btn-sm btn-outline-secondary">
       View
      </a>

     </div>

   </div>
 </div>
</div>

</div>
