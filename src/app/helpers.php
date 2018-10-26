<?php

function getRequirementName($key)
{
    $types = Cache::rememberForever('requirement_types', function () use ($key) {
        return \App\RequirementType::all()->pluck('name', 'id')->toArray();
    });

    return array_key_exists($key-1, $types) ? $types[$key-1] : null;
}


function getBankAccountOptions()
{
    $types = Cache::rememberForever('requirement_types', function () use ($key) {
        return \App\AccountType::all()->pluck('name', 'id')->toArray();
    });

    return types;
}

function getPendingApplicationsCount()
{
    return \App\Application::where('status', \App\Application::PENDING)->count();
}