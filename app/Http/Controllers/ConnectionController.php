<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Mover;
use App\Models\MoverAddress;
use App\Models\PostalAddress;
use App\Models\Connection;
use Auth;
use Mail;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/dashboard-connection');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'mobile' =>'required',
        //     'email' =>'required',
        //     'resume'=>'required',
        //     'country'=>'required',
        //     'experience'=>'required',
        //     'profile'=>'required'
        // ]);

        $Company  =   Company::create([
            'company_name'  =>  $request->company_name,
            'company_abn'   =>  $request->company_abn,
        ]);

        $mover  =   Mover::create([
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'date_of_birth'     =>  $request->date_of_birth,
            'mobile'            =>  $request->mobile_number,
            'notes'             =>  $request->notes,
            'email'             =>  $request->email,
            'status'            =>  $request->mover_status,
            'created_by'        =>  Auth::user()->id,
            'company_id'        =>  $Company->id
        ]);

        if($request->second_mover_status == 1){
            $second_mover  =   Mover::create([
                'first_name'        =>  $request->sm_first_name,
                'last_name'         =>  $request->sm_last_name,
                'date_of_birth'     =>  $request->sm_date_of_birth,
                'mobile'            =>  $request->sm_mobile_number,
                'notes'             =>  $request->notes,
                'email'             =>  $request->sm_email,
                'created_by'        =>  Auth::user()->id,
                'company_id'        =>  $Company->id,
                'parent_id'         =>  $mover->id
            ]);
        }

        $mover_addresses  =   MoverAddress::create([
            'mover_id'          =>  $mover->id,
            'unit_no'           =>  $request->unit_no,
            'street_no'         =>  $request->street_no,
            'street_name'       =>  $request->street_name,
            'street_type'       =>  $request->street_type,
            'suburb'            =>  $request->suburb,
            'postcode'          =>  $request->postcode,
            'state'             =>  $request->state,
        ]);

        if($request->postal_address_status == 1){
            if($request->postbox == "no"){
                $mover_addresses  =   PostalAddress::create([
                    'mover_id'          =>  $mover->id,
                    'unit_no'           =>  $request->ps_unit_no,
                    'street_no'         =>  $request->ps_street_no,
                    'street_name'       =>  $request->ps_street_name,
                    'street_type'       =>  $request->ps_street_type,
                    'suburb'            =>  $request->ps_suburb,
                    'postcode'          =>  $request->ps_postcode,
                    'state'             =>  $request->ps_state,
                ]);
            }else{
                $mover_addresses  =   PostalAddress::create([
                    'mover_id'          =>  $mover->id,
                    'pobox_type'        =>  $request->ps_box_type,
                    'pobox_no'          =>  $request->ps_box_no,
                    'suburb'            =>  $request->ps_suburb,
                    'postcode'          =>  $request->ps_postcode,
                    'state'             =>  $request->ps_state,
                ]);
            }
        }    
        $application_id = random_int(10000000, 99999999);
        $mover_addresses  =   Connection::create([
            'mover_id'              =>  $mover->id,
            'application_id'        =>  $application_id,
            'mover_status'          =>  $request->mover_status,
            'moving_date'           =>  $request->moving_date,
            'lease_length'          =>  $request->lease_length
            // 'services'              =>  $request->services,
        ]);

        if ($mover) {
            $app_from_address   = Config('mail.from.address');
            $app_from_name      = Config('mail.from.name');
            $subject            = 'Sortlisted';
            $data['name'] = $mover->first_name;
            $data['application_id'] = $application_id;
            Mail::send('mail.select', $data, function ($message) use ($mover , $app_from_address,$app_from_name,$subject) {
                $message->to($mover->email, $mover->first_name)->subject($subject);
                $message->from($app_from_address, $app_from_name);
            });
        }
        return view('pages/thnkyoupage/connection-create',compact('application_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getConnectionTracker(){
        $connection = Connection::all();
        return view('pages/connection-tracker',compact('connection'));
    }
}
