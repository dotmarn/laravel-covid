<?php

namespace Dotman\Covid;
use Illuminate\Support\Facades\Http;

define('BASE_URL', 'https://api.covid19api.com/');

class Covid
{
	//Get List Of Countries
    public static function getCountries()
    {
    	$response = Http::get(BASE_URL.'countries');
        return $response->json();
    }

    //Summary of new and total cases per country
    public static function getSummary()
    {
    	$response = Http::get(BASE_URL.'summary');
        return $response->json();
    }

    //Get cases per country by passing the country slug
    public static function getCasesPerCountry($country)
    {
    	$response = Http::get(BASE_URL.'country/'.$country);
        return $response->json();
    }

    //Get cases per country by passing the country slug and status
    public static function getCasesPerCountryPerStatus($country, $status)
    {
    	$response = Http::get(BASE_URL.'country/'.$country.'/status/'.$status);
        return $response->json();
    }

    //Get total cases per country
    public static function getTotalCasesPerCountry($country)
    {
    	$response = Http::get(BASE_URL.'/total/country/'.$country);
        return $response->json();
    }

    //Get total cases per country per status
    public static function getTotalCasesPerCountryPerStatus($country, $status)
    {
    	$response = Http::get(BASE_URL.'/total/country/'.$country.'/status/'.$status);
        return $response->json();
    }



}