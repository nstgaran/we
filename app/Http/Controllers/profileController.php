<?php

// ************************************
// Author : Le Van Hiep - vanhiep.net *
// ************************************

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;
class profileController extends Controller
{
    public function profile(Request $request)  
    {
        $apikey = $request->apikey ;
    $endpoint = "https://hust.media/truyen-tranh/api2.php?".$apikey ;
    $client = new \GuzzleHttp\Client();
    $id = 5;
    $value = "ABC";
    $response = $client->request('GET', $endpoint,  [
      'form_params' => [
         
      ]]);
    // url will be: https://vinasupport.com/test.php?key1=5&key2=ABC;
    $statusCode = $response->getStatusCode();
    $content = $response->getBody();
    header('Content-type: application/json; charset=UTF-8');
    echo  $content ;
      }
}
