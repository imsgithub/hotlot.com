<?php
use \Evth\ConfirmationMailer;
class WorksController extends \BaseController {
    protected $work;
    public function __construct(Work $work) {
        $this->work = $work;
    }
    public function indexWorkEdit() {
      $works = Work::all();
      $groups = Workgroup::all();
      
      return View::make('admin.user.workedit.index')->withWorks($works)->withGroups($groups);
    }
   /* public function editWorkGroupEdit() {
      return View::make('admin.user.workgroupedit.edit')->withUsers($users);
    }*/
    public function createWorkEdit() {
      $groups = Workgroup::all();
      foreach ($groups as $v){
          $group[$v->id] = $v->name;
      }
      return View::make('admin.user.workedit.create')->withGroups($group);
    }
    public function storeWorkEdit(){
      $work = $this->work;
      $data = Input::only('name', 'workgroup_id');
      /*if (!$workgroup->is_valid($data)) {
          return Redirect::back()->withInput()->withErrors(User::$errors);
      }*/
      $work->name = Input::get('name');
      $work->workgroup_id = Input::get('workgroup_id');
      $work->save();
      return Redirect::to('/admin/workedit')->withErrors(['msg'=>["Работа '".$work->name."' создана!"]]);
    }
    public function deleteWorkEdit($id) {
     // $work = Work::find($id);
      $work = Work::where('id', '=', $id);
      //$workgroup->roles()->detach();
      $work->delete();
      return Redirect::to('/admin/workedit')->withErrors(['msg'=>['Работа удалена!']]);
    }
    public function editWorkEdit($id) {
        $work = Work::find($id);
        $groups = Workgroup::all();
        foreach ($groups as $v){
            $group[$v->id] = $v->name;
        }
        return View::make('admin.user.workedit.edit')->withWorks($work)->withGroups($group);
    }
    public function editStoreWorkEdit($id){
      $work = Work::find($id);
      $work->name = Input::get('name');
      $work->workgroup_id = Input::get('workgroup_id');
      $work->save();
      return Redirect::to('/admin/workedit')->withErrors(['msg'=>['Работа '.$work->id.' change!']]);
    }    
}
