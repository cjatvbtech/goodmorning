@extends('layouts.dashboard')

@section('content')


<!-- <h2 class="page-header">{{ ucfirst('corp_credit_applications') }}</h2>
 -->
<div class="panel panel-default">
<!--     <div class="panel-heading">
        List of {{ ucfirst('corp_credit_applications') }}
    </div> -->

    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                                        <!-- <th>Id</th> -->
                                        <th>Brand New</th>
                                        <th>Name Of Business</th>
                                        <th>Financing For</th>
                                        <th>Purpose</th>
                                        <th>Dealer Name</th>
                                        <th>Cash Price</th>
                                        <th>Sales Discount</th>
                                        <th>Name Of User</th>
                                        <th>Downpayment</th>
                                        <th>Amount Finance</th>
                                        <th>Item Description</th>
                                        <th>Terms</th>
                                        <th>Biz Main Address</th>
                                        <th>Biz Telephone 1</th>
                                        <th>Biz Telephone 2</th>
                                        <th>Biz Year Of Stay</th>
                                        <th>Factory Branch</th>
                                        <th>Factory Branch Contact Psn 1</th>
                                        <th>Factory Branch Contact Psn 2</th>
                                        <th>Factory Branch Contact Psn 1 Pos</th>
                                        <th>Factory Branch Contact Psn 2 Pos</th>
                                        <th>Type Of Biz</th>
                                        <th>Biz Year Of Operation</th>
                                        <th>Form Of Biz Operation</th>
                                        <th>Biz Years Incorporated</th>
                                        <th>Biz Net Total Income Yr</th>
                                        <th>Biz Net Total Income Mo</th>
                                        <th>Biz Gross Revenue</th>
                                        <th>Biz Net Income</th>
                                        <th>Biz Total Assets</th>
                                        <th>Biz Equity</th>
                                        <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <a href="{{url('corp_credit_applications/create')}}" class="btn btn-primary" role="button">Add corp_credit_application</a>
    </div>
</div>




@endsection



@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('corp_credit_applications/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/corp_credit_applications') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/corp_credit_applications') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 34                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 34+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/corp_credit_applications') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection