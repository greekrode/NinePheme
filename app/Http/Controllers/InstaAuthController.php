<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Instagram;
use View;

class InstaAuthController extends Controller
{
    public function login(Request $request){
        $authUrl = Instagram::authorize([], function ($url, $provider) use ($request) {
            $request->session()->put('instagramState', $provider->getState());
            return $url;
        });
        
        return redirect()->away($authUrl);
    }

    public function callback(Request $request){
        if (!$request->has('state') || $request->state !== $request->session()->get('instagramState')) {
            abort(400, 'Invalid state');
        }
        
        if (!$request->has('code')) {
            abort(400, 'Authorization code not available');
        }
        
        $token = Instagram::getAccessToken('authorization_code', [
            'code' => $request->code,
        ]);
        
        $request->session()->put('instagramToken', $token);

        $instagramToken = $request->session()->get('instagramToken');

        $instagramUser = Instagram::getResourceOwner($instagramToken);
        $name = $instagramUser->getName();
        $bio = $instagramUser->getDescription();

        $feedRequest = Instagram::getAuthenticatedRequest(
            'GET',
            'https://api.instagram.com/v1/users/self',
            $instagramToken
        );

        $client = new \GuzzleHttp\Client();
        $feedResponse = $client->send($feedRequest);
        $instagramFeed = json_decode($feedResponse->getBody()->getContents(), true);
        // $instagramFeed = json_encode($feedResponse->getBody()->getContents());
        // return $instagramFeed;
        // dd($instagramFeed);

        return View::make('pages.influencer')->with('instagram', $instagramFeed['data']);
    }
}
