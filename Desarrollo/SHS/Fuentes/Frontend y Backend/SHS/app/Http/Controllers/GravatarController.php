<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Creativeorange\Gravatar\Facades\Gravatar;


class GravatarController extends Controller

{

    /**

     * Display the specified resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function gravatar()

    {

        // get image

        Gravatar::get('$user->email');


        // set fallback image

        Gravatar::fallback('https://www.nicesnippets.com/.....image_url')->get('test@example.com');

        return view('gravatar');

    }

}
