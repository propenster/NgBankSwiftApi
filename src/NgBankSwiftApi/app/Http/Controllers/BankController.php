<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bank;
use App\Http\Resources\Bank as BankResource;

class BankController extends Controller
{
    /**
      * Return all Bank Resource in the DB 
      * GET route('/banks')
     * Function to create a Bank Resource
     * 
     * @param $id 
     * return an array... of a bank resource...instance
     */
    public function getAllBanks(){
        $bank = Bank::paginate(15);
        return BankResource::collection($bank);
    }

    /**
      * Return a Bank Resource 
      * GET route('/banks/{id}')
     * Function to create a Bank Resource
     * 
     * @param $id 
     * return an array... of a bank resource...instance
     */
    public function getSingleBank($id){
        if(Bank::where('id', $id)->exists()){
            $bank = Bank::findOrFail($id);
            return new BankResource($bank);
        }else{
            return response()->json([
                "message"=>"Record not found"
            ], 404);
        }


    }
    /**
     * Function to create a Bank Resource
     * POST - route('banks/')
     * @param Illuminate\Http\Request
     * return an @array... of a bank resource...instance 
     * created...
     */
    public function createBank(Request $request){

        $bank = new Bank;
        $bank->bank = $request->input('bank');
        $bank->city = $request->input('city');
        $bank->branch = $request->input('branch');
        $bank->swift_code = $request->input('swift_code');
        $bank->sort_code = $request->input('sort_code');

        if($bank->save()){
            return new BankResource($bank);
        }

    }
     /**
      * Update a Bank Resource 
     * PUT or PATCH  route('/banks/{id}')
     * Function to create a Bank Resource
     * @param Illuminate\Http\Request
     * @param $id 
     * return an array... of a bank resource...instance
     */
    public function updateBank(Request $request, $id){
        $bank = Bank::findOrFail($id);
        $bank->id = $request->input('bank_id');
        $bank->bank = $request->input('bank');
        $bank->city = $request->input('city');
        $bank->branch = $request->input('branch');
        $bank->swift_code = $request->input('swift_code');
        $bank->sort_code = $request->input('sort_code');

        if($bank->save()){
            return new BankResource($bank);
        }

    }

    /**
         * Delete a Bank Resource 
         * DELETE: *route('/banks/{id}')
        * Function to create a Bank Resource
        * 
        * @param $id of a specific resource/record to be deleted.
        * deletes and return an array... of a bank resource...instance
        */
    public function deleteBank($id){
        $bank = Bank::findOrFail($id);
        if($bank->delete()){
            return new BankResource($bank);
        }

    }
}
