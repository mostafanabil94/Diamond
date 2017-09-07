<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    public function getAddService(){
        $users = User::orderBy('name', 'desc')->get();
        return view('addService', ['users' => $users]);
    }

    public function postAddService(Request $request){
        $service = new Service();

        $service->name = $request['service_name'];
        $service->startDate = $request['start_date'];
        $service->endDate = $request['end_date'];
        $service->description = $request['description'];
        $service->numberOfMessages = $request['message_number'];
        $service->price = $request['price'];
        $service->user_id = $request['user_id'];
        $service->used = 0;

        $service->save();

        return redirect()->route('dashboard');
    }

    public function getServices(){
        $users = User::orderBy('name', 'desc')->get();
        return view('services', ['users' => $users]);
    }

    public function postEditServices(Request $request){
        $userId = $request['user_id'];
        $services = Service::where('user_id', $userId)->orderBy('created_at', 'asc')->get();
        return view('userservices', ['services' => $services]);
    }

    public function getDeleteService($id){
        Service::destroy($id);

        return redirect()->route('services');
    }

    public function getEditService($id){
        $service = Service::find($id);
        return view('editservice', ['service' => $service]);
    }

    public function postEditService(Request $request){
        $service = Service::find($request['service_id']);

        $service->name = $request['service_name'];
        $service->startDate = $request['start_date'];
        $service->endDate = $request['end_date'];
        $service->description = $request['description'];
        $service->numberOfMessages = $request['message_number'];
        $service->price = $request['price'];
        $service->used = $request['used'];

        $service->update();

        return redirect()->route('services');
    }
}
