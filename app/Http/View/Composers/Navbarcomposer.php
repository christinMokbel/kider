<?php
namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Models\Contact;

class Navbarcomposer
{
    public function compose(View $view)
    {
        $unreadcount=Contact::where('unread',0)->count();
        $view->with('unreadcount', $unreadcount);
    }
}