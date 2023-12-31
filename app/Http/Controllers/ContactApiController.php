<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'whatsapp' => 'required',
            'whatsapp_message' => 'required',
            'call_number' => 'required',
            'address' => 'required',
            'email' => 'required',
            'embeded_map_url' => 'required',
            'background_contact' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:width=1950,height=679',
        ], [
            'background_contact.dimensions' => 'Ukuran gambar yang dibolehkan adalah 1950x679 pixel',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $background_contact = null;
        $contact = Contact::first();
        if ($background_contact) {
            $file = $request->file('background_contact');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/contact/background_contact/'), $filename);
            $background_contact = 'images/contact/background_contact/' . $filename;
        }
        if ($contact) {
            $contact->whatsapp = $request->whatsapp;
            $contact->whatsapp_message = $request->whatsapp_message;
            $contact->call_number = $request->call_number;
            $contact->address = $request->address;
            $contact->email = $request->email;
            $contact->info_contact = $request->info_contact;
            if ($background_contact) {
                $contact->background_contact = $background_contact;
            }
            if ($contact->save() || !$contact->isDirty()) {
                return $this->successResponse($contact);
            }
            return $this->failResponse(null);
        } else {
            $validator = Validator::make($request->all(), [
                'background_contact' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $contact = Contact::create([
                'whatsapp' => $request->whatsapp,
                'whatsapp_message' => $request->whatsapp_message,
                'call_number' => $request->call_number,
                'address' => $request->address,
                'email' => $request->email,
                'info_contact' => $request->info_contact,
                'background_contact' => $background_contact,
            ]);
            if ($contact) {
                return $this->successResponse($contact);
            }
            return $this->failResponse(null);
        }
    }

    public function updateLocation(Request $request){
        $validator = Validator::make($request->all(), [
            'info_location' => 'required',
            'embeded_map_url' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $contact= Contact::first();
        $contact->info_location = $request->info_location;
        $contact->embeded_map_url = $request->embeded_map_url;

        if ($contact->save()) {
            return $this->successResponse($contact);
        }
        return $this->failResponse(null);
    }

    public function show()
    {
        $contact = Contact::first();
        return $this->successResponse($contact);
    }
}
