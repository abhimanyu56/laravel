<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Academy;
use App\Tags;
use App\Artifacts;
use Illuminate\Http\Request;
use Illuminate\Http\Input;
use Mail;

class AdminController extends Controller {

    public function getIndex(){
        
        $academy = Academy::all();
        return view('pages.admin')->with('academy' , $academy);
    }
    
    public function getAdd(){
        return view('pages.add');
    }
    
    public function addAcademy(Request $request){
        
        
        
        $imgArr = array();
        if(isset($_FILES["images"])){
            $files_name = $_FILES["images"]["name"];
            $files_tmp = $_FILES["images"]["tmp_name"];
            $files_size = $_FILES["images"]["size"];
        }
        
        for($i=0;$i<sizeof($files_name);$i++){
            $name =  substr(md5($files_name[$i]), 0, 5);
            $ext = pathinfo($files_name[$i], PATHINFO_EXTENSION);
            $tempFile = $files_tmp[$i];
            $targetPath = "/uploads/";
            $mainName =  time() . "-" . $name . ".". strtolower($ext);
            $resPath = $targetPath . $mainName;
            $mainFile = public_path() . $resPath;
            if($files_size[$i] < 2097152){
                if(move_uploaded_file($tempFile,$mainFile)){
                    array_push($imgArr,$resPath);
                }
                
            }
        }
        
        try{
            
        $academy = new Academy;
        $academy->academy_name = $request->input("academy_name");
        $academy->timeslot = $request->input("timeslot");
        $academy->contact_person = $request->input("contact_person");
        $academy->email = $request->input("email");
        $academy->phone = $request->input("phone");
        $academy->address= $request->input("address");
        $academy->city = $request->input("city");
        $academy->country = $request->input("country");
        $academy->description = $request->input("content");
        $academy->latitude = $request->input("lat");
        $academy->longitude  = $request->input("lon");
        $academy->save();
            
        $academy_id = $academy->academy_id;
            
        $tags = explode("," , $request->input("tags"));
            
        foreach($tags as $tag){
            $tagModel = new Tags;
            $tagModel->academy_id = $academy_id;
            $tagModel->tag_name = $tag;
            $tagModel->save();
        }
            
        foreach($imgArr as $img){
            $arti = new Artifacts;
            $arti->academy_id = $academy_id;
            $arti->artifact_url = $img;
            $arti->save();
        }
            
        return redirect()->action('AdminController@getIndex');    
            
            
            
        }catch(\Illuminate\Database\QueryException $e){
            //TODO : SHOW FLASH
            echo json_encode($e);
        }
        
    
    
    }

    
    public function deleteAcademy($id){
        
        Artifacts::where('academy_id', $id)->delete();
        Tags::where('academy_id', $id)->delete();
        Academy::where('academy_id', $id)->delete();
        
        return redirect()->action('AdminController@getIndex');
    }
    
     public function editAcademy($id){
         
         $academy = Academy::where('academy_id', $id)->first();
         
         if(isset($academy)){
            return view('pages.edit')->with('academy' , $academy);
         }else{
            return redirect()->action('AdminController@getIndex'); 
         }
     }
    
     public function updateAcademy(Request $request , $id){
         
          try{
         $academy = Academy::find($id);
         $academy->academy_name = $request->input("academy_name");
        $academy->timeslot = $request->input("timeslot");
        $academy->contact_person = $request->input("contact_person");
        $academy->email = $request->input("email");
        $academy->phone = $request->input("phone");
        $academy->address= $request->input("address");
        $academy->city = $request->input("city");
        $academy->country = $request->input("country");
        $academy->description = $request->input("content");
        $academy->latitude = $request->input("lat");
        $academy->longitude  = $request->input("lon");
        $academy->save();
        return redirect()->action('AdminController@getIndex'); 
        }catch(\Illuminate\Database\QueryException $e){
            //TODO : SHOW FLASH
            echo json_encode($e);
        } 
         
     
     }
    
    public function explore(){
        return view('pages.explore');
    }
    
    
     public function getExplore(){
        $academy = Academy::all();
        $res = array();
        foreach($academy as $aca){
            $temp = array($aca->academy_id , $aca->latitude , $aca->longitude);
            array_push($res, $temp);
        }
        return $res;
    }
    
    public function loadAcademy($id){
        
        $academy = Academy::where('academy_id', $id)->first();
        $data = array (
            'academy_name' => $academy->academy_name
        );
        
        Mail::send('email.email', $data, function ($message) {
            $message->from('us@example.com', 'Demo Account');
            $message->subject('Enquiry');
            $message->to('demoforlaravel@gmail.com');
            
        });
        
        $tags = Tags::where('academy_id', $id)->get();
        $artifacts = Artifacts::where('academy_id', $id)->get();
        return view('pages.academy')->with('academy' , $academy)->with("tags" , $tags)->with("artifacts" , $artifacts);
    }
    
    public function getProfile(){
        return view('pages.profile');
    }
    
}


    
