<?php

namespace App\Http\Middleware;

use Closure;
use App\Type;

class VerifyType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Type::all()->count()==0){
            Session()->flash('warning',"ต้องมีประเภทสินค้าอย่างน้อย 1 รายการ");
            return redirect("/admin/createType");
        }
        return $next($request);
    }
}
