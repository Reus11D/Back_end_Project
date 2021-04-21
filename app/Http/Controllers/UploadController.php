<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetails;
class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('fileupload_page');
    }
    public function uploadSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname'=>'required',
            'email'=>'required',
            'photos'=>'required',
        ]);
        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['pdf','jpg','png','docx','jpeg', 'MOV', 'mp4'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
//dd($check);
                if($check)
                {
                    $items= Item::create($request->all());
                    foreach ($request->photos as $photo) {
                        $filename = $photo->store('photos');
                        ItemDetails::create([
                            'item_id' => $items->id,
                            'filename' => $filename
                        ]);
                    }
                    return view('fileupload_page');
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }
    }
}?>
