<?php


use Illuminate\Support\Facades\DB;

if (!function_exists('selectJobType')) {
    function selectJobType($user_id, $category_id)
    {
        if (DB::table('categories_wise_user')->where('user_id', $user_id)->where('category_id', $category_id)->exists()) {
            return 'selected';
        }
        return null;
    }
}


if (!function_exists('categoryWiseNotifyShow')) {
    function categoryWiseNotifyShow()
    {
        return DB::table('categories_wise_user')->where('user_id', auth()->user()->id)->where('notify',NOTIFY_SHOW)->get();
    }
}
