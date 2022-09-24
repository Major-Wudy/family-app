<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;

class FeatureController
{
    /**
     * @author Roman Weinberger (roman.weinberger@th-rosenheim.de)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLayoutCookie()
    {
        // Cookie is valid for one week
        Cookie::queue(env('APP_NAME') . '_design', '1', 60*24*7);

        return redirect()->back();

    }

    /**
     * @author Roman Weinberger (roman.weinberger@th-rosenheim.de)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyLayoutCookie()
    {
        $cookie = \Cookie::forget(env('APP_NAME') . '_design');

        return back()->withCookies([$cookie]);
    }

    /**
     * @author Roman Weinberger (roman.weinberger@th-rosenheim.de)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setExplanationCookie()
    {
        // Cookie is valid for one year
        Cookie::queue(env('APP_NAME') . '_explanation', '1', 60*24*365);

        return redirect()->back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyExplanationCookie()
    {
        $cookie = \Cookie::forget(env('APP_NAME') . '_explanation');

        // ToDo: Delete all other cookies

        return back()->withCookies([$cookie]);
    }

}
