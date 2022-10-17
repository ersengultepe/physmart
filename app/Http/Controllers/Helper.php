<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Helper extends Controller
{
    /*
     |--------------------------------------------------------------------------
     | Image Save Methods start
     |--------------------------------------------------------------------------
     | You can save pictures by the following methods.
     | Just say the name of the image, its dimensions and the
     | "name" value of the image element and the location where it will be saved.
     | For example; imgSave ($ request, $ imgName, 'photo', 250, 250, $ path);
     |
     */

    /**
     * @deprecated Kullanımdan kaldırıldı.
     * @param Request $request
     * @return bool|\Intervention\Image\Image|string
     */
    static public function userImgSave(Request $request)
    {
        $imgName = str_slug($request->name.'-'.$request->surname).'-'.str_random(6);
        $path = 'images/users/';

        $imgName = Helper::imgSave($request, $imgName, 'image', 250, 250,$path );

        return $imgName;

    }

    /**
     * @author Ersen Gültepe ersengultepe@gmail.com
     * @param $request formdan kullanıcının girdiği değerler
     * @param $pictureFileName fotoya verilmesi istenen name değeri
     * @param $pictureFieldName image file elementinde name değeri
     * @param $width foto genişliği
     * @param $height foto yükseklisi
     * @param $path kaydedilmesi istenilen adres
     * @return bool|\Intervention\Image\Image
     */
    static public function imgSave($request, $pictureFileName, $pictureFieldName, $width, $height, $path)
    {
        if ($request->hasFile($pictureFieldName))
        {
            $foto = $request->file($pictureFieldName);

            $img = Image::make($foto);
            $img->resize($width, $height, function ($rs) {
                $rs->aspectRatio();
                $rs->upsize();
            });

            $pictureFileName = $pictureFileName.'.'.$foto->getClientOriginalExtension();

            $img->save(public_path($path.$pictureFileName));

            chmod(public_path($path.$pictureFileName), 0777);

            return $pictureFileName;

        }else{
            return false;
        }
    }

    /**
     * @param $folderName oluşturulacak olan dizin adı
     * @param $folderPath örneğin dizinin kaydedileceği images/post/ gibi bir adres
     * @param $mode 0777 gibi chmod ayarı
     * @param $recursive bool true false
     * @param $force bool true false
     * @return bool
     */
    static public function folderCreate($folderName, $folderPath, $mode, $recursive, $force ){

        $folderPath = public_path($folderPath.$folderName.'/');


        if(!file_exists($folderPath)){

            //Klasör başarılı bir şekilde oluşmuşsa
            $makeDir = File::makeDirectory($folderPath, $mode, $recursive, $force);

            if($makeDir){
                \Log::info($folderPath.' adresinde yeni bir DİZİN oluşturuldu.');
                return $folderName;
            }else{
                \Session::flash('hata', $folderName.' isimli DİZİN oluşturulamadı, yazılımcınızla görüşmelisiniz.');
                \Log::critical($folderName.' isimli DİZİN oluşturulamadı, yazılımcınızla görüşmelisiniz.');
                return 'hata';
            }

        }else{
            return false;
        }
    }

    /**
     * @param $imgName atanması istenilen dosya adı
     * @param null $add  gerekirse dosya adına ek yapılabilir
     * @return string
     */
    static public function imgFileNameGenerator($request, $add=null)
    {
        $dt = Carbon::parse(Carbon::now());
        return str_slug(str_limit($request->title,20,'').'-'.str_limit($request->file('image'),20,'')).'-'.str_random(12).'-'.$dt->day.$dt->month.$dt->year.$dt->hour.$dt->minute.$dt->second.$add;
    }

    /**
     * @param $path
     * @return bool|string
     */
    static public function getCurrentImagePath($path)
    {
        return $path = substr($path, 0, 21);
    }

    /*
    |--------------------------------------------------------------------------
    | Image Save Methods end
    |--------------------------------------------------------------------------
    */

    /**
     * @param $time
     * @return string
     */
    static public function getTime($time)
    {   setlocale(LC_ALL, 'tr_TR.UTF-8');
        $dt = Carbon::parse($time);
        return $dt->formatLocalized('%d %B %Y');          // 21 May 2017 Çarşamba gibi
    }

    /**
     * @param $dt
     * @return string
     */
    static public function turkceTarih($dt){
        Switch($dt->month){
            case 1  : return 'Ocak';
            case 2  : return 'Şubat';
            case 3  : return 'Mart';
            case 4  : return 'Nisan';
            case 5  : return 'Mayıs';
            case 6  : return 'Haziran';
            case 7  : return 'Temmuz';
            case 8  : return 'Ağustos';
            case 9  : return 'Eylül';
            case 10 : return 'Ekim';
            case 11 : return 'Kasım';
            case 12 : return 'Aralık';
            default : return '';
        }
    }


    /**
     * @param array $route
     * @return string
     */
    static public function isActive(... $routes){
        if(in_array(\Request::route()->getName(), $routes)){
            return 'nav-active nav-expanded';
        }
        return null;
    }


    static public function breadcrumbs()
    {
        switch (\Request::route()->getName() ){
            case 'dashboard'                : return '<li><span>Yönetim Sayfası</span></li>';
            case 'post.index'        : return '<li><span>Makale</span></li>';
            case 'post.create'       : return '<li><span>Makale</span></li><li><span>Makale Ekle</span></li>';
            case 'category.index'    : return '<li><span>Kategori</span></li>';
            case 'category.create'   : return '<li><span>Kategori</span></li><li><span>Kategori Ekle</span></li>';
            case 'egitim.index'      : return '<li><span>Eğitim</span></li>';
            case 'egitim.create'     : return '<li><span>Eğitim</span></li><li><span>Eğitim Ekle</span></li>';
            case 'hizmet.index'      : return '<li><span>Hizmet</span></li>';
            case 'hizmet.create'     : return '<li><span>Hizmet</span></li><li><span>Hizmet Ekle</span></li>';
            case 'admin.index'       : return '<li><span>Yönetici</span></li>';
            case 'admin.create'      : return '<li><span>Yönetici</span></li><li><span>Yönetici Ekle</span></li>';
            case 'sirku.index'       : return '<li><span>Sirkü</span></li>';
            case 'sirku.create'      : return '<li><span>Sirkü</span></li><li><span>Sirkü Ekle</span></li>';
            case 'haber.index'       : return '<li><span>Haber</span></li>';
            case 'haber.create'      : return '<li><span>Haber</span></li><li><span>Haber Ekle</span></li>';
            default : return '';
        }
    }

    static public function prev($obj, Collection $collection){

        return $prev = $collection->where('id', '<', $obj->id)->max('slug');

    }

    static public function next($obj, Collection $collection){

        return $next = $collection->where('id', '>', $obj->id)->min('slug');

    }

}
