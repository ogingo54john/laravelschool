<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;
use App\Http\Requests\SubscriberFormRequest;
use Response;
class SubscribersController extends Controller
{
    public function subscribe(SubscriberFormRequest $request){
        $validatedData = $request->validated();
        $subscribeduser = new Subscribers;
        $subscribeduser ->name =$validatedData["name"];
        $subscribeduser ->email =$validatedData["email"];
        $subscribeduser ->save();
        return Response::json([
            "status"=>200,
            "message"=> "You have successfully subscribed",
        ]);

    }
}
