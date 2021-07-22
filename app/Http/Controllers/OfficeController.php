<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\Utils;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return Utils::buildReturnSuccessStatement(Office::all());
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
                'name' => 'required|unique:office,name|max:191',
                'description' => 'max:191',
            ]);

            $office = Office::create($request->all());

            return Utils::buildReturnSuccessStatement($office);
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
            return Utils::buildReturnSuccessStatement(Office::find($id));
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
                'name' => 'required|unique:office,name|max:191',
                'description' => 'max:191',
            ]);

            $office = Office::find($id);
            $office->update($request->all());

            return Utils::buildReturnSuccessStatement($office);
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
            Office::destroy($id);
            return Utils::buildReturnSuccess();
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) 
                return Utils::buildReturnErrorStatement('23000SQL - Esse objeto possui relacionamentos existentes');
            return Utils::buildReturnErrorStatement($e->getMessage());
        }
    }
}
