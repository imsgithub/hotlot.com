<?php
use \Evth\ConfirmationMailer;
class WorkgroupsController extends \BaseController {
    protected $workgroup, $person;
    public function __construct(Workgroup $workgroup) {
        $this->workgroup = $workgroup;
    }
    public function indexWorkGroupEdit() {
      $groups = Workgroup::all();
      
      return View::make('admin.user.workgroupedit.index')->withGroups($groups);
    }
   /* public function editWorkGroupEdit() {
      return View::make('admin.user.workgroupedit.edit')->withUsers($users);
    }*/
    public function createWorkGroupEdit() {
      return View::make('admin.user.workgroupedit.create');
    }
    public function storeWorkGroupEdit(){
      $workgroup = $this->workgroup;
      $data = Input::only('name', 'icon');
      /*if (!$workgroup->is_valid($data)) {
          return Redirect::back()->withInput()->withErrors(User::$errors);
      }*/
      $workgroup->name = Input::get('name');
      $workgroup->icon = Input::get('icon');
      $workgroup->save();
      return Redirect::to('/admin/workgroupedit')->withErrors(['msg'=>["Группа '".$workgroup->name."' создана!"]]);
    }
    public function deleteWorkGroupEdit($id) {
      $workgroup = Workgroup::find($id);
      //$work = Work::where('workgroup_id', '=', $id);
      try{		
            $workgroup->delete();
            return Redirect::to('/admin/workgroupedit')->withErrors(['msg'=>['Группа удалена!']]);
	} catch (Exception $e) {
            return Redirect::to('/admin/workgroupedit')->withErrors(['msg'=>['С группой '.$id.' связаны работы. Группа не может быть удалена!']]);}
        }
      /*if(is_object($work)){
      
      
      }else{
    }*/
    public function editWorkGroupEdit($id) {
        $workgroup = Workgroup::find($id);
        return View::make('admin.user.workgroupedit.edit')->withGroups($workgroup);
    }
    public function editStoreWorkGroupEdit($id){
      $workgroup = Workgroup::find($id);
      $workgroup->name = Input::get('name');
      $workgroup->icon = Input::get('icon');
      $workgroup->save();
      return Redirect::to('/admin/workgroupedit')->withErrors(['msg'=>['Группа '.$workgroup->id.' change!']]);
    }    
}
