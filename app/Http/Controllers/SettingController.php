<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index()
    {
      $setting = Setting::all();
     return view('frontend.setting.index',['setting'=>$setting]);
    }

    public function create()
    {
      return view('frontend.setting.create');
    }

     public function storelogo(Request $request)
    {
        $setting = new Setting;
        if($request->hasfile('headinlogo'))
        {
            $file = $request->file('headinlogo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/headinglogo/',$filename);
            $setting->headinlogo=$filename;
        }

        if($request->hasfile('footerlogo'))
        {
            $file = $request->file('footerlogo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/footerlogo/',$filename);
            $setting->footerlogo=$filename;
        }

        if($request->hasfile('facebookicon'))
        {
            $file = $request->file('facebookicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/facebookicon/',$filename);
            $setting->facebookicon=$filename;
        }
        
        if($request->hasfile('instaicon'))
        {
            $file = $request->file('instaicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/instaicon/',$filename);
            $setting->instaicon=$filename;
        }

        if($request->hasfile('twittericon'))
        {
            $file = $request->file('twittericon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/twittericon/',$filename);
            $setting->twittericon=$filename;
        }
        if($request->hasfile('addressicon'))
        {
            $file = $request->file('addressicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/addressicon/',$filename);
            $setting->addressicon=$filename;
        }
        if($request->hasfile('emailicon'))
        {
            $file = $request->file('emailicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/emailicon/',$filename);
            $setting->emailicon=$filename;
        }
        if($request->hasfile('youtubeicon'))
        {
            $file = $request->file('youtubeicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/youtubeicon/',$filename);
            $setting->youtubeicon=$filename;
        }
        if($request->hasfile('phoneicon'))
        {
            $file = $request->file('phoneicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/phoneicon/',$filename);
            $setting->phoneicon=$filename;
        }
        $setting ->aboutdescription = $request->input('aboutdescription');
        $setting ->phonenumber = $request->input('phonenumber');
        $setting ->emailaddress = $request->input('emailaddress');
        $setting ->address = $request->input('address');
        $setting ->footercopyright = $request->input('footercopyright');
        $setting ->facebookurl = $request->input('facebookurl');
        $setting ->youtubeurl = $request->input('youtubeurl');
        $setting ->emailurl = $request->input('emailurl');
        $setting ->insturl = $request->input('insturl');
        $setting ->mapurl = $request->input('mapurl');
        $setting ->twitterurl = $request->input('twitterurl');
        $setting->save();
        return redirect()->back()->with('status', 'Icons Added');
    }


    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('frontend.setting.edit',compact('setting'));
    }

    public function update(Request $request, $id)
    {
         $setting = Setting::find($id);
    
        if($request->hasfile('headinlogo'))
        {
             $destination = 'uploads/headinlogo/'.$setting->headinlogo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('headinlogo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/headinglogo/',$filename);
            $setting->headinlogo=$filename;
        }
        if($request->hasfile('footerlogo'))
        {
             $destination = 'uploads/footerlogo/'.$setting->footerlogo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('footerlogo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/footerlogo/',$filename);
            $setting->footerlogo=$filename;
        }

        if($request->hasfile('facebookicon'))
        {
             $destination = 'uploads/footerlogo/'.$setting->facebookicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('facebookicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/facebookicon/',$filename);
            $setting->facebookicon=$filename;
        }

        if($request->hasfile('instaicon'))
        {
             $destination = 'uploads/instaicon/'.$setting->instaicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('instaicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/instaicon/',$filename);
            $setting->instaicon=$filename;
        }

        if($request->hasfile('twittericon'))
        {
             $destination = 'uploads/twittericon/'.$setting->twittericon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('twittericon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/twittericon/',$filename);
            $setting->twittericon=$filename;
        }
        
        if($request->hasfile('addressicon'))
        {
             $destination = 'uploads/addressicon/'.$setting->addressicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('addressicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/addressicon/',$filename);
            $setting->addressicon=$filename;
        }
        
        if($request->hasfile('emailicon'))
        {
             $destination = 'uploads/emailicon/'.$setting->emailicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('emailicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/emailicon/',$filename);
            $setting->emailicon=$filename;
        }
        
        if($request->hasfile('youtubeicon'))
        {
             $destination = 'uploads/youtubeicon/'.$setting->youtubeicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('youtubeicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/youtubeicon/',$filename);
            $setting->youtubeicon=$filename;
        }
        
        if($request->hasfile('phoneicon'))
        {
             $destination = 'uploads/phoneicon/'.$setting->phoneicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('phoneicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/phoneicon/',$filename);
            $setting->phoneicon=$filename;
        }
         $setting ->aboutdescription = $request->input('aboutdescription');
        $setting ->phonenumber = $request->input('phonenumber');
        $setting ->emailaddress = $request->input('emailaddress');
        $setting ->address = $request->input('address');
        $setting ->footercopyright = $request->input('footercopyright');
        $setting ->facebookurl = $request->input('facebookurl');
        $setting ->youtubeurl = $request->input('youtubeurl');
        $setting ->emailurl = $request->input('emailurl');
        $setting ->insturl = $request->input('insturl');
         $setting ->mapurl = $request->input('mapurl');
        $setting ->twitterurl = $request->input('twitterurl');
        $setting->update();
        return redirect()->back()->with('status', 'Setting Updated');
    }

     public function destroy($id)
    {
        $setting = Setting::find($id);
        $destination = 'uploads/headinglogo/'.$setting->headinlogo;
         if(File::exists($destination))
        {
          File::delete($destination);
        }

        $flogo = 'uploads/footerlogo/'.$setting->footerlogo;
         if(File::exists($flogo))
        {
          File::delete($flogo);
        }

        $add = 'uploads/addressicon/'.$setting->addressicon;
         if(File::exists($add))
        {
          File::delete($add);
        }

        $picon = 'uploads/phoneicon/'.$setting->phoneicon;
         if(File::exists($picon))
        {
          File::delete($picon);
        }
        $ficon = 'uploads/facebookicon/'.$setting->facebookicon;
         if(File::exists($ficon)) 
        {
          File::delete($ficon);
        }
        $yicon = 'uploads/youtubeicon/'.$setting->youtubeicon;
         if(File::exists($yicon))
        {
          File::delete($yicon);
        }

        $eicon = 'uploads/emailicon/'.$setting->emailicon;
         if(File::exists($eicon))
        {
          File::delete($eicon);
        }


        $inicon = 'uploads/instaicon/'.$setting->instaicon;
         if(File::exists($inicon))
        {
          File::delete($inicon);
        }
        
        $ticon = 'uploads/twittericon/'.$setting->twittericon;
         if(File::exists($ticon))
        {
          File::delete($ticon);
        }
       
        $setting->delete();
          return redirect()->back()->with('status', ' Deleteted');
    }
}
