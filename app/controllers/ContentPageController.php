<?php
use \Evth\ConfirmationMailer;
class ContentPageController extends \BaseController {
    protected $content_page;
    public function __construct(ContentPage $content_page) {
        $this->content_page = $content_page;
    }

    public function indexContentPage() {

        $content_pages = ContentPage::paginate(3);
/*
        if(Input::get('publish')==1 or Input::get('publish')==0){
            $content_pages = ContentPage::where('published','=',Input::get('publish'))->paginate(3);
        }else{

        }*/
        return View::make('admin.contentpage.index')->withContentPages($content_pages)->withInput('publish');
    }

    public function editContentPage($id) {
        $content_pages = ContentPage::find($id);
        return View::make('admin.contentpage.edit')->withContentPages($content_pages);
    }
    public function createContentPage() {
        //$content_pages = ContentPage::find($id);
        return View::make('admin.contentpage.create');//->withContentPages($content_pages);
    }
    public function storeContentPage(){
        $content_page = $this->content_page;
        //$data = Input::only('title', 'content','discription','alias','keywords','language','published');
        $title = Input::get('title');
        $content = Input::get('content');
        $title_page = Input::get('title_page');
        $discription = Input::get('discription');
        $alias = trim(strtolower(Input::get('alias')));
        $keywords = Input::get('keywords');
        $language = Input::get('language');
        if(Input::get('published')=='on'){
            $published = 1;
        }else {
            $published = 0;
        }
        if(str_word_count($alias) > 1){
            return View::make('admin.contentpage.create')->withContentPages($content_page)->withErrors(['msg'=>['alias должен быть латиницей без пробелов и цифр посередине!!!']]);
        }
        if(empty($title) or empty($content) or empty($alias) or empty($language) or empty($title_page)){
            return View::make('admin.contentpage.create')->withContentPages($content_page)->withErrors(['msg'=>['Все поля должны быть заполнены!!!']]);
        }
        $content_page->title = $title;
        $content_page->content = $content;
        $content_page->title_page = $title_page;
        $content_page->discription = $discription;
        $content_page->alias = $alias;
        $content_page->keywords = $keywords;
        $content_page->language = $language;
        $content_page->published = $published;

        $validator = Validator::make(
            array('alias' => Input::get('alias')),
            array('alias' => array('required', 'unique:content_pages,alias'),)
        );

        if ($validator->fails()) {
            return View::make('admin.contentpage.create')->withContentPages($content_page)->withErrors(['msg'=>['поле alias должно быть уникальным!!!']]);
        }

        $content_page->save();
        return Redirect::to('/admin/contentpage')->withErrors(['msg'=>["Страница '".$content_page->title."' создана!"]]);
    }
    public function editStoreContentPage($id){
        $content_pages = ContentPage::find($id);

        $validator = Validator::make(
            array('alias' => Input::get('alias')),
            array('alias' => array('required', 'unique:content_pages,alias,'.$content_pages->id),)
        );
        if ($validator->fails()) {
            return View::make('admin.contentpage.edit')->withContentPages($content_pages)->withErrors(['msg'=>['поле alias должно быть уникальным!!!']]);
        }
        //$data = Input::only('title', 'content','discription','alias','keywords','language','published');
      $title = Input::get('title');
      $content = Input::get('content');
      $title_page = Input::get('title_page');
      $discription = Input::get('discription');
      $alias = trim(strtolower(Input::get('alias')));
      $keywords = Input::get('keywords');
      $language = Input::get('language');
        //return Input::get('published');
        if(Input::get('published')=='on'){
            $published = 1;
            //$alias .='qwerty';
        }else {
            $published = 0;
            //$alias .='123456';
        }

        if(str_word_count($alias) >= 2){
            return View::make('admin.contentpage.edit')->withContentPages($content_pages)->withErrors(['msg'=>['alias должен быть латиницей без пробелов и цифр в середине']]);
        }
      if(empty($title) or empty($content) or empty($alias) or empty($language) or empty($title_page)){
		return View::make('admin.contentpage.edit')->withContentPages($content_pages)->withErrors(['msg'=>['Все поля должны быть заполнены!!!']]);
	  }
        $content_pages->title = $title;
        $content_pages->content = $content;
        $content_pages->title_page = $title_page;
        $content_pages->discription = $discription;
        $content_pages->alias = $alias;
        $content_pages->keywords = $keywords;
        $content_pages->language = $language;
        $content_pages->published = $published;
        $content_pages->save();
      return Redirect::to('/admin/contentpage')->withErrors(['msg'=>['Контент '.$content_pages->title.' изменен!']]);
    }
    public function deleteContentPage($id) {
        $content_page = ContentPage::where('id', '=', $id);
        $content_page->delete();
        return Redirect::to('/admin/contentpage')->withErrors(['msg'=>['Страница удалена!']]);
    }
}
