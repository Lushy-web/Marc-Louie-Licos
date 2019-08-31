<div class="card-body">
<div class="form-group">
    <label class="col-md-3 text-right control-label col-form-label">Customer</label>
    
    </div>
    <div class="Form-group row">
    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
        <div class="col-sm-9">
        <input type="text" name="name" id="name" value="{{old('name') :: $customers->name}}" class = "form-control"placeholder="Customer name here">
        </div>
    
    </div>
    <br>
    <div class="Form-group row">
     <label for="fname" class="col-sm-3 text-right control-label col-form-label">Address</label>
        <div class="col-sm-9">
        <input type="text" name="address" id="address"  value="{{old('address') :: $customers->address}}" class = "form-control" placeholder="Customer address here">
        </div>
    
    </div>



</div>
@csrf