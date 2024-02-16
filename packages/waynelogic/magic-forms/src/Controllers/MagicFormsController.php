<?php

namespace Waynelogic\MagicForms\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;
use Waynelogic\MagicForms\Mail\ContactFormAdmin;
use Waynelogic\MagicForms\Models\FormRecord;
use Telegram\Bot\Laravel\Facades\Telegram;


class MagicFormsController extends BaseController
{
    use ValidatesRequests;

    public  $currentForm;

    public ?string $group = null;

//    public function __construct()
//    {
//        $this->forms = config('magicforms');
//    }

    public function onSendForm(Request  $request) {
        $formData = $request->except('_token');
        if (config('magicforms.' . $formData['form'])) {
            $this->currentForm = config('magicforms.' . $formData['form']);
            $this->group = $formData['form'];
            unset($formData['form']);
        }
        if (empty($formData)) {
            return false;
        }

        $formRecord = new FormRecord();

        if (isset($formData['group'])) {
            $this->group = isset($formData['group']);
            unset($formRecord['group']);
        }
        $formRecord->form_data = $formData;
        $formRecord->group = $this->group;
        $formRecord->ip = $request->ip();
        $ipData = json_decode(file_get_contents('http://ipinfo.io/' . $formRecord->ip));

        if (isset($ipData->city)) {
            $formRecord->city = $ipData->city;
        }
        $formRecord->unread = true;
        $formRecord->save();


        $resultString = '';
        foreach ($formData as $key => $value) {
            $resultString .= "$key: $value\n";
        }

        $response = Telegram::sendMessage([
            'chat_id' => '1045032580',
            'text' => $resultString
        ]);

//
//        $adminEmail = env('MAGIC_FORMS_EMAIL');
//
//        if (!empty($adminEmail)) {
//            Mail::to($adminEmail)->send(new ContactFormAdmin($formRecord));
//        }
//
//
        return true;
    }

    public function test() {
        return view('magic-forms::contact-admin', [
            'formRecord' => FormRecord::first()
        ]);
    }
}
