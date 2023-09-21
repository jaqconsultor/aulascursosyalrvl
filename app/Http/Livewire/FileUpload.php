<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class FileUpload extends Component

{

use WithFileUploads;

public $file, $title;

public function submit()

{

$validatedData = $this->validate([

'title' => 'required',

'file' => 'required',

]);

$validatedData['name'] = $this->file->store('files', 'public');

File::create($validatedData);

dd($validatedData);

session()->flash('message', 'File successfully Uploaded.');

}

public function render()

{

return view('livewire.file-upload');

}

}