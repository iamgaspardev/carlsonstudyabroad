<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Upload;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Apply extends Component
{
    public $name;
    public $filename;
    public $phone;
    public $location;
    public $email;
    public $course;
    use WithFileUploads;
    public function uploadfile(){
        $upload = new Upload();
        $validatedData =  $this -> validate([
            'name' => 'required',
            'filename' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'email' => 'required',
            'course'=>'required',
        ]);
        $upload->name=$this->name;
        $upload->email=$this->email;
        $upload->phone=$this->phone;
        $upload->location=$this->location;
        $course-> course= $this->course;
        $filename=Carbon::now()->timestamp.'.' . $this->filename->extension();
        $this->filename->storeAs('files',$filename);
        $upload->filename=$filename;

        $upload->save();
        // $filename = $this-> filename-> store('files','public'); 
        // $validatedData['filename'] = $filename;
        // Upload::create($validatedData);
        // $upload->filename=$filename;
        // $upload->save();
        session()->flash('message','File Successfully Uploaded !');
        $this-> emit('fileUploaded');
    }
    public function render()
    {
        return view('livewire.apply')->layout('layouts.base');
    }
}
