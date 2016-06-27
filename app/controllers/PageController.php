<?php
use \Evth\ConfirmationMailer;
/**
 * Created by PhpStorm.
 * User: user pc
 * Date: 09.02.2016
 * Time: 11:28
 */
class PageController extends \BaseController
{
    protected $content_page;
    public function __construct(ContentPage $content_page) {
        $this->content_page = $content_page;
    }

    public function index($alias){
        $lang = Session::get('lang');
        $content = ContentPage::where('published','=',1)->where('language','=',$lang)->get();
        $pages = ContentPage::where('alias','=',$alias)->get();
        if(count($pages) == 0) {
            return Response::view('errors.missing', array(), 404);
        }
        return View::make('public.contentpage.index')->withPages($pages)->withContent($content);
    }
    public function indexPage(){
//        Lang::setLocale('de');
        $lang = Session::get('lang');
        $content = $this->content_page->where('published','=',1)->where('language','=',$lang)->paginate(5);
//        return var_dump($content);
        //$pages = ContentPage::where('alias','=',$alias)->get();
        return View::make('public.contentpage.contentpage')->withContent($content)->with('lang', $lang);
    }
}