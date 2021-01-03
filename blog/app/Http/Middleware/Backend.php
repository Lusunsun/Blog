<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Backend
{
    /**
     * 后台中间件
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    /**
     * 请求完了会执行的操作
     *
     * @param $request
     * @param $response
     */
    public function terminate($request, $response)
    {

    }
}
