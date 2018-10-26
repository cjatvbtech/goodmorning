
@extends('layouts.dashboard')

@section('content')


<h2 class="page-header">LOAN APPLICATION</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        List of {{ ucfirst('loan_applications') }}
    </div>

    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                                        <th>Id</th>
                                        <th>Email</th>
                                        <th>Borrower Name</th>
                                        <th>Cellphone Number</th>
                                        <th>Home Address</th>
                                        <th>Telephone Number</th>


                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <a href="{{url('loan_applications/create')}}" class="btn btn-primary" role="button">Add loan_application</a>
    </div>
</div>




@endsection



@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "searching": false,
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('loan_applications/grid')}}"
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/loan_applications') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection