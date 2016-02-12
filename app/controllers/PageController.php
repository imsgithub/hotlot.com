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
        $content = ContentPage::where('published','=',1)->get();
        $pages = ContentPage::where('alias','=',$alias)->get();
        return View::make('public.contentpage.index')->withPages($pages)->withContent($content);
    }
    public function indexPage(){
        $content = ContentPage::where('published','=',1)->get();
        //$pages = ContentPage::where('alias','=',$alias)->get();
        return View::make('public.contentpage.contentpage')->withContent($content);
    }
}