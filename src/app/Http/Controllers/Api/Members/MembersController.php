<?php

namespace App\Http\Controllers\Api\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function show($id){
            $user =  \App\User::find($id);
            $profile = $user->profile()->with([
                'bankAccounts',
                'comakers',
                'tradeReferences',
                'uploadedRequirements',
                'sourceOfIncome'
            ])->first();
            return ['user'=>$user,'profile'=>$profile];
    }
}
