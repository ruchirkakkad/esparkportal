<?php

class ModulesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /modules
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('modules.index');
	}
    public function getIndexdata()
    {
        $a=Module::select('module_id','module_name','parent_id','module_url','is_active','is_inmenu')->get();
        $abc['aaData'] = $a;
        return json_decode(json_encode($abc),true);
//        return json_encode($arr);
//        return str_replace('"',"'",json_encode(Module::select('module_id','module_name','parent_id','module_url','is_active','is_inmenu')->get()));

    }
    public function postParentdata()
    {
        return json_encode(Module::lists('module_name','module_id'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /modules/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        $data['modules'] = Module::lists('module_name','module_id');
		return View::make('modules.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /modules
	 *
	 * @return Response
	 */
	public function postStore()
	{

		$module = new Module();
        $module->module_name = Input::get('module_name');
        $module->module_url = Input::get('module_url');
        $module->parent_id = Input::get('parent_id');
        $module->is_inmenu = Input::get('is_inmenu');
        $module->is_active = Input::get('is_active');
        $save_module = $module->save();
        if($save_module)
        {
            return json_encode([
                'code'=> 200,
                'msg'=> 'Stored the record',
                'result'=>json_encode(Module::lists('module_name','module_id'))
            ]);
        }
        else
        {
            return json_encode([
                'code'=> 403,
                'msg'=> 'Something went wrong. Please retry inserting proper data',
                'result'=>null
            ]);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /modules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /modules/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /modules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /modules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}