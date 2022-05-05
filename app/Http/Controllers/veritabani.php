<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use DB;
use Mail;
use Hash;
use App\Models\Kullanici;
use App\Models\Etkinlik;
use App\Models\Biletler;
class veritabani extends Controller
{
   public function getir(Request $request)
   {

     setlocale(LC_TIME,'turkish');
     $sayac=0;
     $degiskenn=1;
     $dedektor=0;
     $sanatcilar=array();
     $konseryeri=array();
     $konserfiyat=array();
     $konsertarih=array();
     $converttarih=array();
     $konsersehri=array();
     $sehirler=array();
     $numara=array();
     $biletsayisi=array();
     if($request->tur=="Konserler")
     {
      $veriler=Etkinlik::where("etkinlikturu","Konser")->get();
     }
     else if($request->tur=="Festivaller")
     {
       $veriler=Etkinlik::where("etkinlikturu","Festival")->get();
     }
     foreach ($veriler as $key => $value)
     {
        $sanatcilar[$sayac]=$value->sanatci;
        $konseryeri[$sayac]=$value->konseryeri;
        $konserfiyat[$sayac]=$value->konserfiyat;
        $konsertarih[$sayac]=$value->konsertarih;
        $sehirler[$sayac]=$value->konsersehri;
        $numara[$sayac]=$value->id;
        $biletsayisi[$sayac]=$value->kalanbilet;
        if($sayac > 0)
        {
        $boyut=sizeof($konsersehri);
        for ($i=0; $i<$boyut; $i++)
        {
          if($konsersehri[$i]==$value->konsersehri)
          {
              $dedektor++;
          }
        }
        if($dedektor==0)
        {
          $konsersehri[$degiskenn]=$value->konsersehri;
          $degiskenn++;
          $dedektor=0;
        }
        else {
          $dedektor=0;
        }
      }
      else
      {
        $konsersehri[$sayac]=$value->konsersehri;
      }
        $converttarih[$sayac]= iconv('latin5','utf-8',strftime("%d %B %A",strtotime($konsertarih[$sayac])));
        $sayac++;
     }

     return view('konserler', ['veriler'=>$veriler,'goster'=>$biletsayisi,"id"=>$numara,"sehirler"=>$sehirler,'degiskenn'=>$degiskenn,'say'=>$sayac,'sanatci' => $sanatcilar,'konseryer'=>$konseryeri,'konserfiyatlari'=>$konserfiyat,'konsertarihleri'=>$converttarih,'konsersehri'=>$konsersehri]);
   }
   public function logincheck(Request $request)
   {
       if($request->mailadres=="root@tonight")
       {
        if(Auth::guard("root")->attempt(['email' => $request->mailadres, 'password' =>$request->pwd]))
        {
          return redirect()->route("admin");
        }
        else
        {
          return view("girisyap")->withErrors("E-Mail Adresi veya Şifre Yanlış.");
        }
       }
       else {
       if (Auth::attempt(['email' => $request->mailadres, 'password' =>$request->pwd]))
       {
          setlocale(LC_TIME,'turkish');
          $sayac=0;
          $sanatcilar=array();
          $konseryeri=array();
          $konserfiyat=array();
          $konsertarih=array();
          $converttarih=array();
          $konserturu=array();
            $numara=array();
          $veriler2=Etkinlik::get();
          foreach ($veriler2 as $key => $deger)
          {
             $numara[$sayac]=$deger->id;
             $sanatcilar[$sayac]=$deger->sanatci;
             $konseryeri[$sayac]=$deger->konseryeri;
             $konserfiyat[$sayac]=$deger->konserfiyat;
             $konsertarih[$sayac]=$deger->konsertarih;
             $konserturu[$sayac]=$deger->etkinlikturu;
             $converttarih[$sayac]= iconv('latin5','utf-8',strftime("%d %B %A",strtotime($konsertarih[$sayac])));
             $sayac++;
          }
        return view('index', ['id'=>$numara,'say'=>$sayac,'sanatci' => $sanatcilar,'konseryer'=>$konseryeri,'konserfiyatlari'=>$konserfiyat,'konsertarihleri'=>$converttarih,'etkinlikturu'=>$konserturu]);
        }
    return view("girisyap")->withErrors("E-Mail Adresi veya Şifre Yanlış.");
  }
 }
   public function bilgilerim()
   {
       return view("bilgilerim");
   }
   public function cikisyap()
   {
      Auth::logout();
      setlocale(LC_TIME,'turkish');
      $sayac=0;
      $sanatcilar=array();
      $konseryeri=array();
      $konserfiyat=array();
      $konsertarih=array();
      $converttarih=array();
      $konserturu=array();
      $veriler2=Etkinlik::get();
      foreach ($veriler2 as $key => $deger)
      {
         $sanatcilar[$sayac]=$deger->sanatci;
         $konseryeri[$sayac]=$deger->konseryeri;
         $konserfiyat[$sayac]=$deger->konserfiyat;
         $konsertarih[$sayac]=$deger->konsertarih;
         $konserturu[$sayac]=$deger->etkinlikturu;
         $converttarih[$sayac]= iconv('latin5','utf-8',strftime("%d %B %A",strtotime($konsertarih[$sayac])));
         $sayac++;
      }
    //  return view('index', ['say'=>$sayac,'sanatci' => $sanatcilar,'konseryer'=>$konseryeri,'konserfiyatlari'=>$konserfiyat,'konsertarihleri'=>$converttarih,'gorun2'=>"display:none",'gorun'=>"display:block",'ay'=>$value->isimsoyisim,'maill'=>$value->email,'etkinlikturu'=>$konserturu]);
      return view('index', ['say'=>$sayac,'sanatci' => $sanatcilar,'konseryer'=>$konseryeri,'konserfiyatlari'=>$konserfiyat,'konsertarihleri'=>$converttarih,'etkinlikturu'=>$konserturu]);

   }
   public function guncelle()
   {
     return view("my_profile_information_edit");
   }
   public function updatecheck(Request $x)
   {
     setlocale(LC_TIME,'turkish');
      Kullanici::where("email",Auth::guard("kullanici")->user()->email)->update([
        'email'=>$x->gelenmail,
        'telno'=>$x->gelentel,
      ]);

       return redirect()->route("anasayfa");

   }
   public function kayitkontrol(Request $request)
   {
      $request->validate([
        "adsoyad"=>"required|min:10|max:20",
        "telno"=>"required|min:10",
        'email' => 'required|email:rfc,dns',
        'sifre'=>'required|min:8',
        'tarih' => 'required',
        'Kosullar'=>'required'
      ]);
      $veriler=Kullanici::get();
      foreach ($veriler as $key => $value)
      {
         if($value->email==$request->email)
         {
           return redirect()->route('kayitol')->with('message', 'Böyle Bir E-Mail Adresi Zaten Mevcut.');
         }
      }
      $duzen=iconv('latin5','utf-8',strftime("%Y-%m-%d",strtotime($request->tarih)));
      $sifree=bcrypt($request->sifre);
      Kullanici::insert([
        "name"=>$request->adsoyad,
        "telno"=>$request->telno,
        "email"=>$request->email,
        "password"=>$sifree,
        "dtarih"=>$duzen,
        "cinsiyet"=>$request->cinsiyet
      ]);
      return redirect()->route('girisyap');
   }

   public function sifremiunuttum(Request $mailverisi)
   {
     if($veriler=Kullanici::where("email",$mailverisi->mailadres)->get()->first())
     {
      $rastgele=rand(1000,9999);
       $array=[
         'adsoyad'=>$veriler->name,
         'kod'=>$rastgele,
       ];
       Mail::send('deneme',$array,function($message) use($mailverisi){
        $message->from('Denemem@app.com', 'LaravelWebProje');
        $message->to($mailverisi->mailadres);
        $message->subject('Şifremi Unuttum');
       });
       return redirect()->route('kodgir')->with('message', 'Lütfen E-Postanıza Gelen Kodu Girin.')->with('rastgele',$rastgele)->with('adres',$mailverisi->mailadres);
     }
     else {
        return view("sifremiunuttum")->withErrors("E-Mail Adresi Mevcut Değil.Tekrar Deneyin");
     }
   }
  public function aktif(Request $deneme)
  {
     if($deneme->realkod==$deneme->kullanicikod)
     {

       return redirect()->route('yenile')->with('adres',$deneme->realadres);
     }
     else {

      return redirect()->route('kodgir')->with('hatamesaj',"Girilen Kod Doğru Değil.Tekrar Deneyin.")->with('rastgele',$deneme->realkod)->with('adres',$deneme->realadres);

     }
  }
  public function yenilekontrol(Request $kontrol)
  {
      if($kontrol->sifre1==$kontrol->sifre2)
      {
        $pwd=Hash::make($kontrol->sifre1);
        if(Hash::check($kontrol->sifre1,$pwd)==true)
        {
          Kullanici::where("email",$kontrol->realadres)->update([
            "password"=>$pwd,
          ]);
        }
        return redirect()->route("girisyap");
      }
      else {
        return redirect()->route('yenile')->with('message',"Şifreler Uyuşmuyor.Tekrar Deneyin.")->with('adres',$kontrol->realadres);
      }
  }
  public function ReUptade(Request $request)
  {
    $biletler=array();
    $telefon=Auth::guard("kullanici")->user()->telno;
    if(Kullanici::where("email",$request->email)->get()->first())
    {
      $veriler=Kullanici::where("email",$request->email)->get()->first();
      if($veriler->email != Auth::guard("kullanici")->user()->email)
      {
        return "E-Mail Adresi Zaten Mevcut";
      }
      else {
        $biletler=Biletler::where("musteri_id",Auth::guard("kullanici")->user()->email)->get();
        Biletler::where("musteri_id",Auth::guard("kullanici")->user()->email)->delete();
        Kullanici::where('email',Auth::guard("kullanici")->user()->email)->update([
         'email'=>$request->email,
            ]);
      }

    }
    else {
      $biletler=Biletler::where("musteri_id",Auth::guard("kullanici")->user()->email)->get();
      Biletler::where("musteri_id",Auth::guard("kullanici")->user()->email)->delete();
      Kullanici::where('email',Auth::guard("kullanici")->user()->email)->update([
       'email'=>$request->email,
          ]);
    }

    if(Kullanici::where("telno",$request->telno)->get()->first())
    {
      $veriler=Kullanici::where("telno",$request->telno)->get()->first();
      if($veriler->telno != $telefon)
      {
        return "Telefon Numarası Zaten Mevcut";
      }
      else {
        Kullanici::where('email',$request->email)->update([
         'telno'=>$request->telno,
       ]);
      }
    }
    else {
      Kullanici::where('email',$request->email)->update([
       'telno'=>$request->telno,
     ]);
    }
      if (Auth::attempt(['email' => $request->email, 'password' =>$request->sifre]))
      {
        $boyut=sizeof($biletler);
        for ($i=0; $i <$boyut; $i++)
        {
          Biletler::create([
           "biletid"=>$biletler[$i]->biletid,
           "musteri_id"=>$request->email,
           "konser_id"=>$biletler[$i]->konser_id,
          ]);
        }
      }
   }
   public function sifrekontrol(Request $veri)
   {

      $pwd=Hash::make($veri->sifre);
      $x=Kullanici::where("email",Auth::guard("kullanici")->user()->email)->get()->first();
      if(Hash::check($veri->sifre,$x->password)==true)
      {
        return "true";
      }
      else
      {
        return "false";
      }
   }
}
