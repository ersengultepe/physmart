<?php

namespace App\Http\Controllers;

use App\Category;
use App\Egitim;
use App\Haber;
use App\Hizmet;
use App\Post;
use App\Sirku;
use App\User;
use Carbon\Carbon;
use Mimrahe\StripTags\Stripper;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;


class BlogController extends Controller
{
    public function personel($link)
    {
        $personel = User::where('slug', $link)->firstOrFail();
        $personeller = User::where('rank', '!=', 1)->where('slug', '!=', $link)->get();
        return view('frontend.personel', compact('personel', 'personeller'));
    }

    public function hizmet($link)
    {
        if($link === null){
            return view('frontend.hizmet.index');
        }else{
            $hizmetler = Hizmet::all();
            $hizmet = $hizmetler->where('slug', $link)->first();

            $next = Helper::next($hizmet, $hizmetler);
            $prev = Helper::prev($hizmet, $hizmetler);

            return view('frontend.hizmet.index', compact('hizmetler', 'hizmet', 'prev', 'next'));
        }

    }

    public function haber($link = null)
    {
        $haberler = Haber::all();

        if($link === null)
        {
            $haber = $haberler->sortByDesc('id')->first();
        }else{
           $haber = $haberler->where('slug', '=', $link)->first();
        }

        $ilgiliHaberler = $haberler->where('category_id', $haber->category_id)->whereNotIn('category_id', $haber->category_id)->take(5);
        $ilgiliHaberler = $ilgiliHaberler->isEmpty() ? null : $ilgiliHaberler;

        $yeniHaberler = $haberler->sortByDesc('id')->take(5);

        $kategoriler = Category::all();

        $prev = Helper::prev($haber, $haberler);
        $next = Helper::next($haber, $haberler);

        return view('frontend.haber.single', compact('haber', 'kategoriler', 'ilgiliHaberler', 'yeniHaberler', 'prev', 'next'));
    }

    public function egitim($link = null)
    {
        $egitimler = Egitim::all();

        if ($link === null) {
            $egitim = $egitimler->last();
        } else {
            $egitim = $egitimler->where('slug', $link)->first();

        }

        $prev = Helper::prev($egitim, $egitimler);

        $next = Helper::next($egitim, $egitimler);

        return view('frontend.egitim.single', compact('egitim', 'egitimler', 'prev', 'next'));
    }

    public function sirku($link = null)
    {
        $sirkuler = Sirku::all();

        if ($link == null) {
            $sirku = $sirkuler->last();
        } else {
            $sirku = $sirkuler->where('slug', $link)->first();
        }

        //sirk??lerin kategorilerini tekil olarak ??eker.
        $kat_ids = $sirkuler->pluck('category_id')->unique();

        $kategoriler = Category::whereIn('id', $kat_ids)->get();

        $prev = Helper::prev($sirku, $sirkuler);

        $next = Helper::next($sirku, $sirkuler);

        return view('frontend.sirku.single', compact('sirku', 'sirkuler', 'kategoriler', 'prev','next'));
    }

    public function makale($link = null)
    {
        $makaleler = Post::all();

        $kategoriler = Category::whereIn('id', $makaleler->pluck('category_id'))->get();

        if ($link === null) {
            $makale = $makaleler->first();
        } else {
            $makale = $makaleler->where('slug', $link)->first();
        }

        $ilgiliMakaleler = $makaleler->where('category_id', $makale->category_id)
            ->whereNotIn('id', $makale->id)
            ->take(5);

        $yeniMakaleler = $makaleler->sortByDesc('id');

        $prev = Helper::prev($makale, $makaleler);

        $next = Helper::next($makale, $makaleler);

        return view('frontend.makale.single', compact( 'prev', 'next', 'makale', 'kategoriler', 'ilgiliMakaleler', 'yeniMakaleler'));
    }

    public function makaleKategori($link)
    {
        //Makaleleri ??eker
        $makaleler = Post::all();

        //Makalelerin kategorilerini tekil olarak ??eker.
        $kat_ids = $makaleler->pluck('category_id')->unique();

        $kategoriler = Category::whereIn('id', $kat_ids)->get();

        $kat_id = Category::where('slug', $link)->first();

        $kategori = $kat_id->title;

        //Belirli bir kategoriye ait makaleleri getir.
        $makaleler = Post::where('category_id', $kat_id->id)->orderBy('id', 'desc')->paginate(15);

        $makale = $makaleler->first();

        $ilgiliMakaleler = $makaleler->where('category_id', $makale->category_id)
            ->whereNotIn('id', $makale->id)
            ->take(5);

        $yeniMakaleler = $makaleler->sortByDesc('id');

        return view('frontend.makale.post_categories', compact('makaleler', 'makale', 'ilgiliMakaleler','yeniMakaleler','kategoriler', 'kategori'));
    }

    public function haberKategori($link)
    {
        //Haberleri ??eker
        $haberler = Haber::all();

        //haberlerin kategorilerini tekil olarak ??eker.
        $kat_ids = $haberler->pluck('category_id')->unique();

        $kategoriler = Category::whereIn('id', $kat_ids)->get();


        $kat = $kategoriler->where('slug', $link)->first();

        //Belirli bir kategoriye ait haberleri getir.
        $haberler = $haberler->where('category_id', $kat->id)->sortByDesc('id')->take(20);

        return view('frontend.haber.haber_kategori', compact('haberler', 'kategoriler', 'kat'));
    }

    public function sirkuKategori($link)
    {
        //Sirk??leri ??eker
        $sirkuler = Sirku::all();

        //Sirk??lerin kategorilerini tekil olarak ??eker.
        $kat_ids = $sirkuler->pluck('category_id')->unique();

        $kategoriler = Category::whereIn('id', $kat_ids)->get();

        $kat = $kategoriler->where('slug', $link)->first();

        //Belirli bir kategoriye ait sirk??leri getir.
        $sirkuler = $sirkuler->where('category_id', $kat->id)->sortByDesc('id')->take(20);

        return view('frontend.sirku.sirku_categories', compact('sirkuler', 'kategoriler', 'kat'));
    }

    /*
    |--------------------------------------------------------------------------
    | HABER BOTLARI
    |--------------------------------------------------------------------------
    */
    public function aloMaliye()
    {
        $url = 'http://www.alomaliye.com/feed/';

        $haberler   = Haber::all();

        $makaleler  = Post::all();

        $sirkuler   = Sirku::all();

        $kategoriler = Category::all();

        $botCode = $this->getBotCode($url);

        $totalItem = $this->countItem($botCode);


        for ($i=0; $i<$totalItem; $i++){

            $item = $this->parseItems($botCode, $i);

            $botUrl = $this->getBotLink($item);

            //E??er sonu?? true ise DB'de kay??tl?? demektir bu linkteki haber vb. atla

//            dd(['botlink' => $url, 'slug' => str_slug($this->getTitle($item)) ]);

            if(
                $this->isInsert($sirkuler, 'botlink', $botUrl, 'slug', str_slug($this->getTitle($item)) ) or
                $this->isInsert($haberler, 'botlink', $botUrl, 'slug', str_slug($this->getTitle($item)) ) or
                $this->isInsert($makaleler, 'botlink', $botUrl, 'slug', str_slug($this->getTitle($item)) )
            ){
                continue;
            }

            $type = $this->guidance($item);

            $title      =   $this->getTitle($item);

            $slug       =   str_slug($title);

            $botLink    =   $this->getBotLink($item);

            $content    =   $this->cleanContent($this->getContent($item));

            if($type !== 'sirku'){
                $imageUrl   =   $this->getImage($item,$type);
            }else{
                $imageUrl = null;
            }

            $category_id =   $this->getCategory($item, $kategoriler);

            if($this->insertGuidance($type, $title, $slug, $botLink, $content, $imageUrl, $category_id) == false){
                continue;
            }

            break;
        }

        return 'ok';
    }

    /**
     * @param $url
     * @return mixed
     * @see kaynak kodu d??nd??r??r
     */
    private function getBotCode($url){
        return url_get_contents($url);
    }

    /**
     * @param $botCode
     * @param $itemIndex
     * @return mixed
     * @see kaynak koddan itemlar?? ayr????t??r??r
     */
    private function parseItems($botCode, $itemIndex)
    {
        $items = ara('<item>', '</item>', $botCode);
        return $items[$itemIndex];
    }

    /**
     * @param Collection $dbCollect
     * @param $column_name
     * @param $url
     * @return static
     * @see DB'de kay??tl??m?? diye kontrol eder
     */
    private function isInsert(Collection $dbCollect, $columnName, $url, $columnName2=null, $url2=null)
    {
        $result1 = $dbCollect->where($columnName, $url);
        $result2 = $dbCollect->where($columnName2, $url2);

        //DB'de zaten kay??tl?? ise true d??ner
        if(count($result1) > 0 or count($result2) > 0 ){
            return true;
        }

        return false;
    }

    /**
     * @param array $catArr
     * @param Collection $categories
     * @return bool|mixed
     */
    private function checkCategory($catArr, $categories)
    {
        //$catArr de??i??keni dizi olarak geldi.
        if(count($catArr) > 1 ){

            foreach ($catArr as $cat){

                //kategorinin ad??n?? bu a??amada "<![CDATA[Ekonomi Haberleri]]>" gibi g??r??n??r temizleyip bak??yorum
                //slug dan ar??yorum.
                $result = $categories->where('slug', str_slug($this->cleanCategory($cat)));

                if(count($result) > 0){

                    return (int)$result->implode('id');

                }else{
                    //id yi d??nd??recek
                    return $this->insertCategory($cat);
                }
            }

        }else{

            //E??er sonu??ta hi?? kay??t d??nmeyecekse DB'de kay??tl?? de??ildir.
            $sonuc = $categories->where('slug', str_slug($this->cleanCategory($catArr[0])));

            if(count($sonuc) == 0){

                //Eklenen son kategorinin id'sini d??nd??r
                return $this->insertCategory($catArr[0]);

            }else{

               return (int)$sonuc->implode('id');
            }

        }

    }

    /**
     * @param $category
     * @return bool|mixed
     */
    private function insertCategory($category)
    {
        if($category === null){
            return false;
        }

        $ins = new Category();
        $ins->title = $this->cleanCategory($category);
        $ins->slug = str_slug($ins->title);
        $ins->saveOrFail();
        Log::info($category.' ad??nda '.$ins->id.' id\'li yeni bir KATEGOR?? eklendi');
        return $ins->id;

    }

    /**
     * @param $botCode
     * @return int
     */
    private function countItem($botCode){

        $items = ara('<item>', '</item>', $botCode);

        return count($items);
    }

    /**
     * @param $item
     * @return mixed
     */
    private function getBotLink($item){
        $link = ara('<link>', '</link>', $item);
        return $link[0];
    }

    /**
     * @param $item
     * @return mixed
     */
    private function getTitle($item)
    {
        $title = ara('<title>', '</title>', $item);
        return $title[0];
    }

    /**
     * @param $item
     * @return mixed
     */
    private function getContent($item)
    {
        $content = ara('<content:encoded>', '<p>Devam??: ', $item);

        return $content[0];
    }

    /**
     * @param $imageUrl
     * @param $imageName
     * @return string
     */
    private function copyImage($imageUrl, $imageName, $type)
    {
        $dt = Carbon::parse(Carbon::now());

        $folderCreate = Helper::folderCreate($dt->year.$dt->month, 'images/'.$type.'/',0755,true, true);

        //Sunucuya ??ekti??imiz resimin ad??
        $imageGenerate = 'images'.'/'.$type.'/'.$dt->year.$dt->month.'/'.str_limit(str_slug($imageName),150).'-'.str_random(6).'.jpg';

        copy($imageUrl, public_path($imageGenerate));

        return $imageGenerate;
    }

    /**
     * @param $item
     * @return string
     */
    private function getImage($item, $type)
    {
        $imageUrl     = ara('src="', '" class', $item);

        $imageAddress = $this->checkSizeImage($imageUrl[0]);

      if($imageAddress === 'noimage'){
          return null;
      }

      return $this->copyImage($imageAddress, $this->getTitle($item), $type);
    }

    /**
     * @param $item
     * @param $kategoriler
     * @return bool|mixed
     */
    private function getCategory($item, $kategoriler)
    {
        $categories = ara('<category>', '</category>', $item);

        //Birden fazla kategori olabiliyor, o y??zden $categories de??i??keni dizi olarak g??nderildi
        return $this->checkCategory($categories, $kategoriler);
    }

    /**
     * @param $cat
     * @return mixed
     */
    private function cleanCategory($cat){
        return str_replace('<![CDATA[', '',str_replace(']]>', '',$cat));
    }

    /**
     * @param $imageUrl
     * @return mixed|string
     */
    private function checkSizeImage($imageUrl){

        $imageUrl600 = str_replace('150x150', '600x600', $imageUrl);
        $imageUrl300 = str_replace('150x150', '300x300', $imageUrl);
        $imageUrl180 = str_replace('150x150', '180x180', $imageUrl);

        if(url_get_contents($imageUrl600) !== false ){
            return $imageUrl600;
        }

        if(url_get_contents($imageUrl300) !== false ){
            return $imageUrl300;
        }

        if(url_get_contents($imageUrl180) !== false ){
            return $imageUrl180;
        }

        //150x150
        if(url_get_contents($imageUrl) !== false ){
            return $imageUrl;
        }else{
            return 'noimage';
        }

    }

    /**
     * @param $content
     * @return mixed|string
     */
    private function cleanContent($content){
        $post = str_replace('<![CDATA[', '', $content);

        $stripper = new Stripper($post);
        $stripper->only(['a', 'ins', 'script', 'img', 'blockquote']);
        $post = $stripper->strip();

        return $post;
    }

    /**
     * Gelen item a g??re verinin sirk??, haber yada post tablosuna kaydedilece??ini belirler.
     * @param $item
     * @param $title
     * @param $slug
     * @param $botLink
     * @param $content
     * @param $imageUrl
     * @param $category_id
     * @return bool
     */
    private function insertGuidance($type, $title, $slug, $botLink, $content, $imageUrl, $category_id){

        if( $type == 'sirku' ){
            if($this->insertSirku($title, $slug, $botLink, $content, $category_id) == true) {
                Log::info($title . ' ba??l??kl?? sirku siteye eklendi.');
                return 'sirku kaydedildi';
            }else{
                return false;
            }

        }elseif ($type == 'post'){

            if($this->insertPost($title, $slug, $botLink, $content, $imageUrl, $category_id) == true){
                Log::info($title.' isimli makale siteye eklendi.');
                return 'makale kaydedildi';
            }else{
                return false;
            }

        }else{
            if ($this->insertHaber($title, $slug, $botLink, $content, $imageUrl, $category_id) == true) {
                Log::info($title . ' ba??l??kl?? haber siteye eklendi.');
                return 'haber kaydedildi';
            } else {
                return false;
            }
        }
    }

    private function guidance($item){
        //birden fazla kategori olabilir.
        $categories = ara('<category>', '</category>', $item);

        $values = [
            0 =>'sirk??',
            1 =>'tebli??',
            2 =>'mevzuat',
            3 =>'kanun',
            4 =>'??zelge',
            5 =>'t??z??k',
            6 =>'y??netmelik',
            7 =>'makale',
            8 => 'haber',
            9 => 'Tebli??',
            10 => 'T??z??k',
            11 => 'Sirk??',
            12 => '??zelge',
            13 => 'Y??netmelik'
        ];

        switch($values){
            case $this->findCategory($categories, $values[7]) == true : return 'post'; break;
            case str_contains(implode(' ', $categories), $values[9]) == true :
                return 'sirku';
                break;
            case str_contains(implode(' ', $categories), $values[10]) == true :
                return 'sirku';
                break;
            case str_contains(implode(' ', $categories), $values[11]) == true :
                return 'sirku';
                break;
            case str_contains(implode(' ', $categories), $values[12]) == true :
                return 'sirku';
                break;
            case str_contains(implode(' ', $categories), $values[13]) == true :
                return 'sirku';
                break;
            case $this->findCategory($categories, $values[0]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[1]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[2]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[3]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[4]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[5]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[6]) == true : return 'sirku'; break;
            case $this->findCategory($categories, $values[8]) == true :
                return 'haber';
                break;
            default : return 'haber';
        }
    }

    /**
     * value dizi i??inde aran??r varsa true d??ner yoksa false
     * @param array $categories
     * @param $value
     * @return bool
     */
    private function findCategory(array $categories, $value){
        return str_contains(mb_strtolower(implode($categories),'utf8'), $value);
    }

    /**
     * @param $title
     * @param $slug
     * @param $botLink
     * @param $content
     * @param $imageUrl
     * @param $category_id
     * @return bool
     */
    private function insertHaber($title, $slug, $botLink, $content, $imageUrl, $category_id){
        //Art??k haberimizi DB'ye kaydedebiliriz.
        $ekle = new Haber();
        $ekle->title        = $title;
        $ekle->slug         = $slug;
        $ekle->botlink      = $botLink;
        $ekle->body         = $content;
        $ekle->image        = $imageUrl;
        $ekle->category_id  = $category_id;
        $ekle->user_id      = 5;
        $ekle->publish      = 1;
        return $ekle->save();
    }

    /**
     * @param $title
     * @param $slug
     * @param $botLink
     * @param $content
     * @param $imageUrl
     * @param $category_id
     * @return bool
     */
    private function insertSirku($title, $slug, $botLink, $content, $category_id){

        //Art??k sirk??y?? DB'ye kaydedebiliriz.
        $ekle = new Sirku();
        $ekle->title        = $title;
        $ekle->slug         = $slug;
        $ekle->botlink      = $botLink;
        $ekle->body         = $content;
        $ekle->category_id  = $category_id;
        $ekle->user_id      = 5;
        $ekle->publish      = 1;
        return $ekle->save();

    }

    /**
     * @param $title
     * @param $slug
     * @param $botLink
     * @param $content
     * @param $imageUrl
     * @param $category_id
     * @return bool
     */
    private function insertPost($title, $slug, $botLink, $content, $imageUrl, $category_id){

        //Art??k sirk??y?? DB'ye kaydedebiliriz.
        $ekle = new Post();
        $ekle->title        = $title;
        $ekle->slug         = $slug;
        $ekle->botlink      = $botLink;
        $ekle->body         = $content;
        $ekle->image        = $imageUrl;
        $ekle->category_id  = $category_id;
        $ekle->user_id      = 5;
        $ekle->publish      = 1;
        return $ekle->save();

    }

}
