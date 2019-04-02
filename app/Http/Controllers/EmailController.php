<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller {

	public function PostContact(Request $request) {
		$this->validate($request, [
			'nom' => 'required|min:5|max:50',
			'email' => 'required|email',
			'téléphone' => 'required|numeric|',
			'object' => 'required|min:5',
			'msg' => 'required|min:10']);

		$data = array(
			'nom' => $request->nom,
			'email' => $request->email,
			'téléphone' => $request->téléphone,
			'object' => $request->object,
			'msg' => $request->msg,
		);

		Mail::send(app()->getLocale() . '/sentemail', $data, function ($message) use ($data) {

			$message->from($data['email']);

			$message->to('fiviar@fiviar.ma');

			$message->subject($data['object']);

		});
		if (app()->getLocale() == "fr") {
			return redirect('contact')->with('status', 'Merci ! Votre message a bien été envoyé. Nous y répondrons dès que possible');
		} else {
			return redirect('contact')->with('status', 'شكرا لك! تم إرسال رسالتك. سوف نقوم بالرد في أقرب وقت ممكن.');
		}

	}

}
