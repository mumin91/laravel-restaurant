@extends('admin.master')
@section('title', 'Orders Dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table id="example" class="table">
                <thead class=".thead-light">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
             
                <tbody>
                    <tr>
                        <td><img src="" alt="" height="100" width="100"></td>
                        <td><span id="change"></span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
              

            </table>
        </div>
        
    </div>
    
</div>


@endsection
