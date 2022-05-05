<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etkinlik;
use App\Models\Biletler;
use App\Models\Sepet;
use Illuminate\Support\Facades\Auth;
class Satisislemleri extends Controller
{
    public function idcek(Request $veri)
    {
      setlocale(LC_TIME,'turkish');
      $urunler=Sepet::where("email",Auth()->user()->email)->get();
      $veriler=array();
      $fiyat=0;
      for ($i=0; $i <sizeof($urunler) ; $i++) {
       $veriler[$i]=Etkinlik::where("id",$urunler[$i]->urun_id)->get()->first();
       $fiyat=$fiyat+$veriler[$i]->konserfiyat;
      }
      $tarih=array();
      for ($i=0; $i <sizeof($veriler);$i++) {
        $tarih[$i]=iconv('latin5','utf-8',strftime("%d %B %A",strtotime($veriler[$i]->konsertarih)));
      }
      $sayac=sizeof($veriler);
       return view("satinal",['fiyat'=>$fiyat,'sayac'=>$sayac,'tarih'=>$tarih,'veriler'=>$veriler]);
    }
    public function sepettencikar(Request $veri)
    {
      Sepet::where("urun_id",$veri->id)->delete();
      return redirect()->route("satinal");
    }
    public function sepetekle(Request $veri)
    {
      if(Sepet::where("urun_id",$veri->id,)->get()->first())
      {
         return "hata";
      }
      else {
        Sepet::create([
          "email"=>Auth()->user()->email,
          "urun_id"=>$veri->id,
        ]);
      }

    }

    public function check(Request $al)
    {
      setlocale(LC_TIME,'turkish');
      $veriler=Etkinlik::where("id",$al->kadi)->get()->first();
      return $veriler->konserfiyat;
    }
    public function biletkontrolet(Request $veri)
    {
      $sayi=Etkinlik::where("id",$veri->id)->get()->first();
      if($sayi->kalanbilet > $veri->x)
      {
        return "true";
      }
      else {
        return "false";
      }
    }
    public function sepetbiletekle(Request $veri)
    {
      $boyut=sizeof($veri->deger);
      $numaralar=Sepet::where("email",Auth()->user()->email)->get();
      for ($i=0; $i <$boyut; $i++)
      {
        Sepet::where("email",Auth()->user()->email)->where("urun_id",$numaralar[$i]->urun_id)->update([
          "biletsayisi"=>$veri->deger[$i],
        ]);
      }
    }
    public function satinaltamamla()
    {
       setlocale(LC_TIME,'turkish');
       $veriler=Sepet::where("email",Auth()->user()->email)->get();
       for ($i=0; $i <sizeof($veriler); $i++)
       {
       $biletid=rand(1,45875974);
       while(Biletler::where("biletid",$biletid)->get()->first())
       {
         $biletid=rand(1,45875974);
       }
       Biletler::create([
         "biletid"=>$biletid,
         "musteri_id"=>Auth::guard("kullanici")->user()->email,
         "konser_id"=>$veriler[$i]->urun_id,
       ]);
       $dizi=Etkinlik::where("id",$veriler[$i]->urun_id)->get()->first();
       $kalanbilet=$dizi->kalanbilet;
       $kalanbilet=$kalanbilet-$veriler[$i]->biletsayisi;
       Etkinlik::where("id",$veriler[$i]->urun_id)->update([
         "kalanbilet"=>$kalanbilet,
       ]);
       $tarih=$dizi->konsertarih;
       $tarih=iconv('latin5','utf-8',strftime("%d %B %A",strtotime($tarih)));
     }
       Sepet::where("email",Auth()->user()->email)->delete();
       return redirect()->route('anasayfa');
    }
    public function kuponyazdir(Request $veri)
    {
       setlocale(LC_TIME,'turkish');
       $dizi=Etkinlik::where("id",$veri->id)->get()->first();
       $tarih=$dizi->konsertarih;
       $tarih=iconv('latin5','utf-8',strftime("%d %B %A",strtotime($tarih)));
       $biletno=Biletler::where('konser_id',$veri->id)->get()->first();

       return view('satisrapor',['dizi'=>$dizi,'tarih'=>$tarih,'biletno'=>$biletno->biletid]);
    }
    public function biletlerim()
    {
      setlocale(LC_TIME,'turkish');
      $biletlerim=Biletler::where('musteri_id',Auth::guard("kullanici")->user()->email)->get();
      $konserbilgileri=array();
      $adet=sizeof($biletlerim);
      for ($i=0; $i <$adet; $i++)
      {
         $konserbilgileri[$i]=Etkinlik::where("id",$biletlerim[$i]->konser_id)->get()->first();
         $konserbilgileri[$i]->konsertarih=iconv('latin5','utf-8',strftime("%d %B %A",strtotime($konserbilgileri[$i]->konsertarih)));
      }
      return view("biletlerim",['sayac'=>$adet,'bilgiler'=>$konserbilgileri]);
    }
}
