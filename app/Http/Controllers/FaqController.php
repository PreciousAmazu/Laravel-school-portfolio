<?php

namespace App\Http\Controllers;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index() {
        $faqs = Faq::all();

        return view('faq', [
            'faqs' => $faqs
        ]);
    }
    public function show($faqId)
    {
        return view('faq', [
            'faq' => Faq::find($faqId)
        ]);

    }
    public function create() {
        return view('faq.create');
    }
    public function store() {
        // validation

        //clean up
        $faq = new Faq();
        $faq->question= request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faq');
    }
    public function edit($faqid) {
        return view('faq.edit', [
            'faq' => Faq::find($faqid)
        ]);
    }
    public function update($faqid) {

        $faq = Faq::find($faqid);

        $faq->question= request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faq/' . $faq->id);
    }
    public function destroy($id) {
        Faq::find($id)->delete();

        return redirect('/faq');
    }
}
