<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Utils;
use App\Models\Squads\SquadTribe;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SquadTribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return Utils::buildReturnSuccessStatement(SquadTribe::all());
        } catch (\Exception $e) {
            return Utils::buildReturnErrorStatement($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'squad_id' => 'required',
                'tribe_id' => 'required',
            ]);

            $squadTribe = SquadTribe::create($request->all());

            return Utils::buildReturnSuccessStatement($squadTribe);
        } catch (ValidationException $e) {
            return Utils::buildReturnErrorStatement($e->errors());
        } catch (\Exception $e) {
            return Utils::buildReturnErrorStatement($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return Utils::buildReturnSuccessStatement(SquadTribe::find($id));
        } catch (\Exception $e) {
            return Utils::buildReturnErrorStatement($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'squad_id' => 'required',
                'tribe_id' => 'required',
            ]);

            $squadTribe = SquadTribe::find($id);
            $squadTribe->update($request->all());

            return Utils::buildReturnSuccessStatement($squadTribe);
        } catch (ValidationException $e) {
            return Utils::buildReturnErrorStatement($e->errors());
        } catch (\Exception $e) {
            return Utils::buildReturnErrorStatement($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            SquadTribe::destroy($id);
            return Utils::buildReturnSuccess();
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) 
                return Utils::buildReturnErrorStatement('23000SQL - Esse objeto possui relacionamentos existentes');
            return Utils::buildReturnErrorStatement($e->getMessage());
        }
    }
}
