<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryFaq;
use App\Models\Faq;

class FaqController extends Controller
{
    public function Faqcat(){
        $faqcat = CategoryFaq::get();
        // $faq = Faq::findOrFail($id);
        return view('support.index',compact('faqcat'));
    }

    public function Allfaq($id){
        // $allfaq = Faq::get();
        $category = CategoryFaq::findOrFail($id);
        $faq = $category->faq;
        // dd($faq);
        return view('support._support_category',compact('faq','category'));
    }

    public function Faqdetails($category_id, $id){

        $faqdet = Faq::findOrFail($id);
        $category = CategoryFaq::findOrFail($category_id);
        $category_posts = $category->faq;
        
        
        // dd($faq);
        return view('support._support_details',compact('faqdet','category', 'category_posts','category_id'));
    }
}
