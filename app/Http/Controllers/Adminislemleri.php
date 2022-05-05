<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Mail;
use Hash;
use App\Events\Ekle;
use App\Models\Kullanici;
use App\Models\Etkinlik;
use App\Models\Biletler;
use App\Models\Bizeulasin;
class Adminislemleri extends Controller
{
   public function Adminindex()
   {
       date_default_timezone_set('Europe/Istanbul');
       $simdikizaman=date('d-m-Y H:i:s');
       $bildirimler=Bizeulasin::get();
       $zamanlar=array(
         "yil"=>"",
         "gun_farki"=>"",
         "saat_farki"=>"",
         "dakika_farki"=>"",
         "saniye_farki"=>"",
       );
       for ($i=0; $i <sizeof($bildirimler) ; $i++) {
        $baslangicTarihi = strtotime($bildirimler[$i]->created_at);
        $bitisTarihi = strtotime($simdikizaman);
        $fark = $bitisTarihi - $baslangicTarihi;
        $dakika = $fark / 60;
        $saniye_farki = floor($fark - (floor($dakika) * 60));
        $saat = $dakika / 60;
        $dakika_farki = floor($dakika - (floor($saat) * 60));
        $gun = $saat / 24;
        $saat_farki = floor($saat - (floor($gun) * 24));
        $yil = floor($gun/365);
        $gun_farki = floor($gun - (floor($yil) * 365));
        $zamanlar[$i]["saniye_farki"]=$saniye_farki;
        $zamanlar[$i]["yil"]=$yil;
        $zamanlar[$i]["gun_farki"]=$gun_farki;
        $zamanlar[$i]["saat_farki"]=$saat_farki;
        $zamanlar[$i]["dakika_farki"]=$dakika_farki;

      }
       $kullanicisayisi=sizeof(Kullanici::get());
       $kisiler=Kullanici::get();
       $biletler=Etkinlik::get();
       $toplamkazanc=0;
       $satilanmiktar=0;
       for ($i=0; $i <sizeof($biletler);$i++)
       {
          $satilanmiktar=$satilanmiktar+($biletler[$i]->toplambilet-$biletler[$i]->kalanbilet);
          $toplamkazanc=$toplamkazanc+($biletler[$i]->konserfiyat)*($biletler[$i]->toplambilet-$biletler[$i]->kalanbilet);
       }
       return view("admin/index",['zamanlar'=>$zamanlar,'bildirimler'=>$bildirimler,'bildirimsayisi'=>sizeof($bildirimler),'satilanmiktar'=>$satilanmiktar,'toplamkazanc'=>$toplamkazanc,'kisiler'=>$kisiler,'kullanicisayisi'=>$kullanicisayisi]);
   }
   public function guncelzaman(Request $veri)
   {
     date_default_timezone_set('Europe/Istanbul');
     $simdikizaman=date('d-m-Y H:i:s');
     $bildirimler=Bizeulasin::get();
     $zamanlar=array(
       "yil"=>"",
       "gun_farki"=>"",
       "saat_farki"=>"",
       "dakika_farki"=>"",
       "saniye_farki"=>"",
     );
     for ($i=0; $i <sizeof($bildirimler) ; $i++) {
      $baslangicTarihi = strtotime($bildirimler[$i]->created_at);
      $bitisTarihi = strtotime($simdikizaman);
      $fark = $bitisTarihi - $baslangicTarihi;
      $dakika = $fark / 60;
      $saniye_farki = floor($fark - (floor($dakika) * 60));
      $saat = $dakika / 60;
      $dakika_farki = floor($dakika - (floor($saat) * 60));
      $gun = $saat / 24;
      $saat_farki = floor($saat - (floor($gun) * 24));
      $yil = floor($gun/365);
      $gun_farki = floor($gun - (floor($yil) * 365));
      $zamanlar[$i]["saniye_farki"]=$saniye_farki;
      $zamanlar[$i]["yil"]=$yil;
      $zamanlar[$i]["gun_farki"]=$gun_farki;
      $zamanlar[$i]["saat_farki"]=$saat_farki;
      $zamanlar[$i]["dakika_farki"]=$dakika_farki;

    }
    return $zamanlar;
   }
   public function AddItem(Request $veriler)
   {

       Etkinlik::create([
       "sanatci"=>$veriler->sanatci,
       "konsertarih"=>$veriler->tarih,
       "konseryeri"=>$veriler->mekan,
       "konserfiyat"=>$veriler->fiyat,
       "etkinlikturu"=>$veriler->etkinlikturu,
       "konsersehri"=>$veriler->sehir,
       "toplambilet"=>$veriler->bilet,
       "kalanbilet"=>$veriler->bilet,
     ]);
     Image::make(request()->file('resim'))->resize(500,500)->save("assets/img/portfolio/".$veriler->sanatci.".jpeg");
     return redirect()->route("Urunsayfasi")->with("onay","1");

   }
   public function UrunListele(Request $veri)
   {
     if($veri->filtrem=="TumEtkinlikler")
     {
     $data=Etkinlik::get();
     $say=sizeof($data);
     return view("admin/table",['data'=>$data,'say'=>$say,'tur'=>"tum"]);
     }
     else if($veri->filtrem=="Konserler")
     {
       $data=Etkinlik::where("etkinlikturu","konser")->get();
       $say=sizeof($data);
       return view("admin/table",['data'=>$data,'say'=>$say,'tur'=>"konser"]);
     }
     else if($veri->filtrem=="Festivaller")
     {
       $data=Etkinlik::where("etkinlikturu","festival")->get();
       $say=sizeof($data);
       return view("admin/table",['data'=>$data,'say'=>$say,'tur'=>'festival']);
     }
   }
   public function UrunSil(Request $asd)
   {
     Biletler::where("konser_id",$asd->deger)->delete();
     Etkinlik::where("id",$asd->deger)->delete();
     return "true";
   }
   public function UrunDuzenle(Request $veri)
   {
      $veriler=Etkinlik::where("id",$veri->id)->get()->first();
      if($veriler->toplambilet < $veri->bilet)
      {
        $biletsayisi=$veri->bilet - ($veriler->toplambilet - $veriler->kalanbilet);
      }
      else
      {
        $biletsayisi=$veri->bilet-($veriler->toplambilet - $veriler->kalanbilet);
      }
      Etkinlik::where("id",$veri->id)->update([
        "sanatci"=>$veri->sanatci,
        "konsertarih"=>$veri->tarih,
        "konseryeri"=>$veri->mekan,
        "konserfiyat"=>$veri->fiyat,
        "etkinlikturu"=>$veri->etkinlikturu,
        "konsersehri"=>$veri->sehir,
        "toplambilet"=>$veri->bilet,
        "kalanbilet"=>$biletsayisi,
      ]);
     
      Image::make(request()->file('resim'))->resize(500,500)->save("assets/img/portfolio/".$veri->sanatci.".jpeg");
      return redirect()->route('listele','TumEtkinlikler');
   }
   public function Uyesil(Request $veri)
   {
     Biletler::where("musteri_id",$veri->deger)->delete();
     Kullanici::where("email",$veri->deger)->delete();
     return "Başarılı";
   }
   public function UyeDuzenle(Request $veri)
   {
     $pwd=Hash::make($veri->sifre);
     if(Hash::check($veri->sifre,$pwd)==true)
     {
     if(Biletler::where("musteri_id",$veri->email)->get())
     {
       $verilerim=Biletler::where("musteri_id",$veri->email)->get();
       Biletler::where("musteri_id",$veri->email)->delete();
     }
      Kullanici::where("email",$veri->email)->update([
        "name"=>$veri->isim,
        "telno"=>$veri->telefon,
        "email"=>$veri->mailadres,
        "password"=>$pwd,
        "dtarih"=>$veri->dogum,
      ]);
      if(Biletler::where("musteri_id",$veri->email)->get())
      {
      for ($i=0; $i <sizeof($verilerim); $i++) {
        Biletler::insert([
          "biletid"=>$verilerim[$i]->biletid,
          "musteri_id"=>$veri->mailadres,
          "konser_id"=>$verilerim[$i]->konser_id,
          "created_at"=>$verilerim[$i]->created_at,
        ]);
      }
    }
      return redirect()->route("admin")->with("onay","1");
    }
    else {
      dd("Hata");
    }
   }
   public function bizeulasin(Request $veriler)
   {
      date_default_timezone_set('Europe/Istanbul');
      Bizeulasin::create([
        "name"=>$veriler->name,
         "email"=>$veriler->email,
         "konu"=>$veriler->subject,
         "mesaj"=>$veriler->message,
      ]);
      return redirect()->route("anasayfa");
   }
}
