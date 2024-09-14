<?php
public function index(){
    if(auth()->user()->hasPermission('admin concern index')){
        $concerns = Concern::orderBy('serial','ASC')->paginate(20);
        return view('admin.concern.index',compact('concerns'));
    }
    else{
        toastr()->error('You Have No Permission.');
        return back();
    }
}