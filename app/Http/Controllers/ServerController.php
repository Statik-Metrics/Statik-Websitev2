<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Server;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$json = Request::json();
		try {
			$entry = DB::table('servers')->where("uuid", $json->get('uuid'))->firstOrFail();
		} catch (ModelNotFoundException $e) {
			$entry = new Server();
			$entry->uuid = $json->get('uuid');
		}
		$entry->javaVersion = $json->get('javaVersion');
		$entry->systemOS = $json->get('systemOS');
		$entry->systemArch = $json->get('systemArch');
		$entry->systemCores = $json->get('systemCores');
		$entry->systemMemory = $json->get('systemMemory');
		$entry->serverMod = $json->get('serverMod');
		$entry->serverMCVersion = $json->get('serverMCVersion');
		$entry->serverCountry = $json->get('serverCountry');
		$entry->serverOnline = $json->get('serverOnline');
		$entry->playerCount = $json->get('playerCount');
		$entry->save();
		return Response::json(array('status' => 'OK'));
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
	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
