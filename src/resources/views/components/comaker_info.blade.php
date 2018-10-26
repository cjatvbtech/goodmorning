<table class="table table-bordered">
    <tbody>
    <tr>
        <td width="250px">Spouse Name</td>
        <td>{{$client->profile->comakers->name}}</td>
    </tr>
    <tr>
        <td>Spouse's Date Of Birth</td>
        <td>{{$client->profile->comakers->dob}}</td>
    </tr>
    <tr>
        <td>Spouse's Place Of Birth</td>
        <td>{{$client->profile->comakers->pob}}</td>
    </tr>
    <tr>
        <td>Spouse's Employer</td>
        <td>{{$client->profile->comakers->employer}}</td>
    </tr>
    <tr>
        <td>Spouse's Employer's Address</td>
        <td>{{$client->profile->comakers->employer_address}}</td>
    </tr>
    <tr>
        <td>Spouse's Employer's Tel. No.</td>
        <td>{{$client->profile->comakers->employer_phone}}</td>
    </tr>
    <tr>
        <td>Spouse's Position</td>
        <td>{{$client->profile->comakers->position}}</td>
    </tr>
    </tbody>
</table>