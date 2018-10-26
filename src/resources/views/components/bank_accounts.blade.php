<table class="table table-bordered">
    <thead>
    <tr>
        <th>Account Type</th>
        <th>Bank Name</th>
        <th>Account Number</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($accounts as $account)
        <tr>
            <td>{{App\BankAccountType::getOption($account->type)}}</td>
            <td>{{$account->bank}}</td>
            <td>{{$account->account_number}}</td>
            <td width="80px">
                <a href="{{route('bank-accounts-delete',['id'=>$account->id])}}"><i class="fa fa-remove"></i>Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>