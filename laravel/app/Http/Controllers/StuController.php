<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StuController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//获取所有信息
		$list = \DB::table("stu")->get();
		//获取分页信息
		$list = \DB::table("stu")->paginate(3);
		return view("stu.index",['list'=>$list]);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("stu.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 //执行添加
	public function store(Request $request)
	{
		//dd($request);
		
		//获取要添加的信息
		$data = $request->all();
		
		//去除多余信息
		unset($data['_token']);
		//dd($data);
		//执行添加
		$id = \DB::table('stu')->insertGetId($data);
		$id = \DB::table('stu')->insertGetId($data);
		//return "添加成功 id".$id;
		
		//执行重定向
		return redirect('stu');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return "show method id =".$id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 //加载修改表单
	public function edit($id = 0)
	{
		$stu = \DB::table('stu')->where("id","=",$id)->first();
		//dd($stu);
		return view("stu.edit",['stu'=>$stu]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$data = $request->all();
		//dd($id);
		unset($data['_method']);
		unset($data['_token']);
		//执行修改
		\DB::table("stu")->where('id',$id)->update($data);
		//执行重定向
		return redirect('stu');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\DB::table('stu')->where('id','=',$id)->delete();
		return redirect('stu');
	}

}
