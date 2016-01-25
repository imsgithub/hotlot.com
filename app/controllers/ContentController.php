<?php
use \Evth\ConfirmationMailer;
class ContentController extends \BaseController {
    protected $content;
    public function __construct(Content $content) {
        $this->content = $content;
    }
    public function indexContentEdit() {
      $contents = Content::all();
      return View::make('admin.contentedit.index')->withContents($contents);
    }
    
    public function editContentEdit($id) {
        $content = Content::find($id);
        return View::make('admin.contentedit.edit')->withContents($content);
    }
    public function editStoreContentEdit($id){
      $content = Content::find($id);
      $t = Input::get('title');
      $c = Input::get('content');
      if(empty($t) or empty($c)){
		return View::make('admin.contentedit.edit')->withContents($content)->withErrors(['msg'=>['Все поля должны быть заполнены!!!']]);
	  }
      $content->title = $t;
      $content->content = $c;
      $content->save();
      return Redirect::to('/admin/contentedit')->withErrors(['msg'=>['Контент '.$content->title.' changed!']]);
    }    
}
