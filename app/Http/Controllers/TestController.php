<?php

namespace App\Http\Controllers;

use App\Models\ShortlistedProperty;
use App\Models\User;
use App\Models\UserProperty;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return $user;
    }

    public function listProperty(Request $request)
    {
        $property = new UserProperty();
        $property->user_id = $request->user_id;
        $property->property_name = $request->property_name;
        $property->dimensions = $request->dimensions;

        $property->rate_per_square_feet = $request->rate_per_square_feet;
        $property->status = $request->status;
        $property->list_type = $request->list_type;
        $property->bhk = $request->bhk;

        $property->save();

        return $property;
    }

    public function getPropertyListed(Request $request)
    {
        return UserProperty::where('user_id', $request->user_id)->get();
    }

    public function shortlistProperty(Request $request)
    {
        $property = new ShortlistedProperty();

        $property->user_id = $request->user_id;
        $property->property_id = $request->property_id;

        $property->save();

        return $property;
    }

    public function getShortlistProperty(Request $request)
    {
        return ShortlistedProperty::with('property')->where('user_id', $request->user_id)->get();
    }

    public function propertySold(Request $request)
    {
        $property = UserProperty::find($request->property_id);

        $property->status = "SOLD";
        $property->save();

        return $property;

    }
}
