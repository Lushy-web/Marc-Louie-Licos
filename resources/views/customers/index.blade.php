@extends('layout')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Customer</h4>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-12">
        <div class="card-body">
            <h5 class="card-title m-b-0">Customer Table</h5><br>
            <form action="customers/create">
                        <button type="submit" 
                        class="btn btn-success btn-sm mdi mdi-account-plus">New</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scple="col">#</th>
                        <th scple="col">Name</th>
                        <th scple="col">Address</th>
                        <th scple="col">Generated</th>
                        <th scple="col">Last Update</th>
                        <th scple="col">Action</th>
                    </tr>

                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td>{{ $customer->updated_at->diffForHumans() }}</td>
                            <td>
                            <a href="{{route('customers.edit', $customer->id)}}" data-toggle="tooltip" data-replacement="top" title="Update">
                                <i class="mdi mdi-account-edit btn-info"></i>
                                
                                </a>
                                 <a style="padding:0px" href="{{route('customers.destroy', $customer->id)}}" data-toggle="tooltip" 
                                data-placement="top" onclick="confirm('Are you sure you want to delete?')"  title="Delete">
                                     <i class="mdi mdi-account-remove btn-danger"></i>   
                                </a>
                                
                            </td>
                           
                        </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>

</div>

@endsection