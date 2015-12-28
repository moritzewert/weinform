<?php namespace Weinform\Http\Middleware;

use Weinform\Services\GeoIP\GeoIPInterface as GeoIP;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;


class Locale {


    public function __construct()
    {
    }

    /**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
    {
        $language = Session::get('language', Config::get('app.locale'));
        App::setLocale($language);

        return $next($request);
    }

}