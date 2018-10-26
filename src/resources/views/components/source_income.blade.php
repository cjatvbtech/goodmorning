<table class="table table-bordered">
    <thead>
    </thead>
    <tbody>
    @foreach($sourcesOfIncome as $income)
        <tr>
            <td>{{$income->source}}</td>
            <td width="80px">
                <a href="{{route('source-of-income-delete',['id'=>$income->id])}}">
                    <i class="fa fa-remove"></i>
                    Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>