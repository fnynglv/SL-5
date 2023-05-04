<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $moods = [
        ["id" => "1", "category" => "Boygroup", "name"=>"EXO",
        "description" => "Exo adalah sebuah grup vokal pria Korea Selatan-Tiongkok yang berbasis di Seoul dan berada di bawah naungan SM Entertaiment.
        Grup ini pada awalnya beranggotakan 12 orang yang terdiri dari Kris, Suho, Luhan, Xiumin, Tao, Chen, Chanyeol, D.O, Baekhyun, Kai, Sehun, dan Lay.
        Namun karena beberapa hal, akhirnya member EXO yang tersisa hanya sebanyak sembilan orang yaitu Suho, Baekhyun, Chanyeol, D.O., Kai, Sehun, Xiumin, Lay, dan Chen.
        Grup ini pada tahun 2011 dan debut pada tahun 2012.
        Hingga saat ini, jumlah album EXO adalah sebanyak 7 album studio dan 28 singel"],
        ["id" => "2", "category" => "Boygroup", "name"=>"NCT",
        "description" => "NCT Dream adalah sub-unit ketiga dari boy band asal Korea Selatan NCT, yang khusus beranggotakan remaja dengan usia belasan tahun.
        NCT adalah group yang dibentuk oleh SM Entertaiment mulai pada tahun 2016 dan semakin berkembang hingga saat ini.
        Pada awalnya, sub-unit NCT Dream ini memiliki sistem kelulusan di mana anggota yang melampaui usia 20 akan keluar, tapi pada 2020, sistem ini diganti dan menjadikan NCT Dream sebagai unit tetap NCT.
        NCT Dream beranggotakan 7 orang yakni Mark, Renjun, Jeno, Haechan, Jaemin, Chenle dan Jisung."],
        ["id" => "3", "category" => "Boygroup", "name"=>"The Boyz",
        "description" => "The Boyz adalah grup idola pria Korea Selatan di bawah naungan IST Entertainment.
        Grup ini debut pada 6 Desember 2017 dengan single utama Boy dari album mini debut mereka The First.
        Grup ini terdiri dari Sangyeon, Jacob, Younghoon, Hyunjae, Juyeon, Kevin, New, Q, Juhaknyeon, Sunwoo, Hwall dan Eric.
        Namun, pada Oktober 2019. Salah satu member The Boyz yaitu Hwall mengundurkan diri dari The Boyz karena alasan kesehatan."],
        ["id" => "4", "category" => "Boygroup", "name"=>"Seventeen",
        "description" => "Seventeen adalah sebuah boy band asal Korea Selatan yang dibentuk oleh Pledis Entertainment.
        Grup yang terdiri dari 13 anggota ini dibagi berdasarkan spesialisasi keahlian masing-masing ke dalam 3 sub-unit : hip-hop unit, vocal unit, dan performance unit.
        Member Seventeen terdiri dari S.coups sebagai leader, Jeonghan, Seungkwan, Hoshi, Woozi, DK, Wonwoo, Vernon, Mingyu, Joshua, Dino, The 8, dan Jun"],
        ["id" => "5", "category" => "Movie", "name"=>"Alchemy of Souls", "description" => "Alchemy of Souls adalah seri televisi Korea Selatan yang akan datang yang dibintangi oleh Lee Jae-wook, Jung So-min, Hwang Min-hyun, Shin Seung-ho, Yoo Jun-sang, Oh Na-ra dan Jo Jae-yoon. Seri ini ditulis oleh Hong bersaudara, itu menggambarkan kisah-kisah penyihir muda yang berurusan dengan langit dan bumi.
        Drama ini terdiri dari 2 season yang memiliki peran utama wanita yang berbeda di season 1 dan season 2. Namun, cerita pada season 1 dan season 2 saling berhubungan"],
        ["id" => "6", "category" => "Movie", "name"=>"The Untamed", "description" => "The Untamed adalah drama televisi Tiongkok yang diadaptasi dari novel populer Mo Dao Zu Shi. Drama ini mengikuti kisah petualangan Wei Wuxian yang diperankan oleh aktor China yaitu Xiao Zhan dan Lan Wangji yang diperankan oleh idol dan aktor China yaitu Wang Yi Bo dalam mencari kebenaran di dunia yang penuh intrik, konspirasi, serta persahabatan yang kuat di antara karakter-karakter utama.
        Selain berfokus pada kedua pemeran utama, cerita pada drama ini juga memiliki selingan cerita pada pemeran-pemeran lainnya yang sangat menarik."],
        ["id" => "7", "category" => "Snacks", "name"=>"Chocolate", "description" => "Coklat dapat menjadi mood booster karena kandungan feniletilamina dan teobromin di dalamnya yang dapat merangsang produksi serotonin dan dopamin dalam otak.
        Senyawa tersebut dapat membantu meningkatkan suasana hati, mengurangi kecemasan, dan memberikan perasaan bahagia dan nyaman.
        Selain itu, rasa manis dan lezat dari coklat dapat memberikan pengalaman yang menyenangkan dan memuaskan secara sensorik, yang dapat meningkatkan mood dan meredakan stres."],
        ["id" => "8", "category" => "Snacks", "name"=>"Ice Cream", "description" => "Es krim dapat menjadi mood booster karena rasa manis dan dinginnya yang menyegarkan dan dapat meningkatkan produksi endorfin dalam otak.
        Selain itu, variasi rasa dan variasi topping pada es krim dapat memberikan pengalaman yang menyenangkan dan memuaskan secara sensorik, yang dapat membantu meningkatkan suasana hati dan meredakan stres."]
    ];

    return view('welcome', [
        "booster" => $moods
    ]);
});

Route::get('/detail/{id}', function($id){
    $moods = [
        ["id" => "1", "category" => "Boygroup", "name"=>"EXO",
        "description" => "Exo adalah sebuah grup vokal pria Korea Selatan-Tiongkok yang berbasis di Seoul dan berada di bawah naungan SM Entertaiment.
        Grup ini pada awalnya beranggotakan 12 orang yang terdiri dari Kris, Suho, Luhan, Xiumin, Tao, Chen, Chanyeol, D.O, Baekhyun, Kai, Sehun, dan Lay.
        Namun karena beberapa hal, akhirnya member EXO yang tersisa hanya sebanyak sembilan orang yaitu Suho, Baekhyun, Chanyeol, D.O., Kai, Sehun, Xiumin, Lay, dan Chen.
        Grup ini pada tahun 2011 dan debut pada tahun 2012.
        Hingga saat ini, jumlah album EXO adalah sebanyak 7 album studio dan 28 singel"],
        ["id" => "2", "category" => "Boygroup", "name"=>"NCT",
        "description" => "NCT Dream adalah sub-unit ketiga dari boy band asal Korea Selatan NCT, yang khusus beranggotakan remaja dengan usia belasan tahun.
        NCT adalah group yang dibentuk oleh SM Entertaiment mulai pada tahun 2016 dan semakin berkembang hingga saat ini.
        Pada awalnya, sub-unit NCT Dream ini memiliki sistem kelulusan di mana anggota yang melampaui usia 20 akan keluar, tapi pada 2020, sistem ini diganti dan menjadikan NCT Dream sebagai unit tetap NCT.
        NCT Dream beranggotakan 7 orang yakni Mark, Renjun, Jeno, Haechan, Jaemin, Chenle dan Jisung."],
        ["id" => "3", "category" => "Boygroup", "name"=>"The Boyz",
        "description" => "The Boyz adalah grup idola pria Korea Selatan di bawah naungan IST Entertainment.
        Grup ini debut pada 6 Desember 2017 dengan single utama Boy dari album mini debut mereka The First.
        Grup ini terdiri dari Sangyeon, Jacob, Younghoon, Hyunjae, Juyeon, Kevin, New, Q, Juhaknyeon, Sunwoo, Hwall dan Eric.
        Namun, pada Oktober 2019. Salah satu member The Boyz yaitu Hwall mengundurkan diri dari The Boyz karena alasan kesehatan."],
        ["id" => "4", "category" => "Boygroup", "name"=>"Seventeen",
        "description" => "Seventeen adalah sebuah boy band asal Korea Selatan yang dibentuk oleh Pledis Entertainment.
        Grup yang terdiri dari 13 anggota ini dibagi berdasarkan spesialisasi keahlian masing-masing ke dalam 3 sub-unit : hip-hop unit, vocal unit, dan performance unit.
        Member Seventeen terdiri dari S.coups sebagai leader, Jeonghan, Seungkwan, Hoshi, Woozi, DK, Wonwoo, Vernon, Mingyu, Joshua, Dino, The 8, dan Jun"],
        ["id" => "5", "category" => "Movie", "name"=>"Alchemy of Souls", "description" => "Alchemy of Souls adalah seri televisi Korea Selatan yang akan datang yang dibintangi oleh Lee Jae-wook, Jung So-min, Hwang Min-hyun, Shin Seung-ho, Yoo Jun-sang, Oh Na-ra dan Jo Jae-yoon. Seri ini ditulis oleh Hong bersaudara, itu menggambarkan kisah-kisah penyihir muda yang berurusan dengan langit dan bumi.
        Drama ini terdiri dari 2 season yang memiliki peran utama wanita yang berbeda di season 1 dan season 2. Namun, cerita pada season 1 dan season 2 saling berhubungan"],
        ["id" => "6", "category" => "Movie", "name"=>"The Untamed", "description" => "The Untamed adalah drama televisi Tiongkok yang diadaptasi dari novel populer Mo Dao Zu Shi. Drama ini mengikuti kisah petualangan Wei Wuxian yang diperankan oleh aktor China yaitu Xiao Zhan dan Lan Wangji yang diperankan oleh idol dan aktor China yaitu Wang Yi Bo dalam mencari kebenaran di dunia yang penuh intrik, konspirasi, serta persahabatan yang kuat di antara karakter-karakter utama.
        Selain berfokus pada kedua pemeran utama, cerita pada drama ini juga memiliki selingan cerita pada pemeran-pemeran lainnya yang sangat menarik."],
        ["id" => "7", "category" => "Snacks", "name"=>"Chocolate", "description" => "Coklat dapat menjadi mood booster karena kandungan feniletilamina dan teobromin di dalamnya yang dapat merangsang produksi serotonin dan dopamin dalam otak.
        Senyawa tersebut dapat membantu meningkatkan suasana hati, mengurangi kecemasan, dan memberikan perasaan bahagia dan nyaman.
        Selain itu, rasa manis dan lezat dari coklat dapat memberikan pengalaman yang menyenangkan dan memuaskan secara sensorik, yang dapat meningkatkan mood dan meredakan stres."],
        ["id" => "8", "category" => "Snacks", "name"=>"Ice Cream", "description" => "Es krim dapat menjadi mood booster karena rasa manis dan dinginnya yang menyegarkan dan dapat meningkatkan produksi endorfin dalam otak.
        Selain itu, variasi rasa dan variasi topping pada es krim dapat memberikan pengalaman yang menyenangkan dan memuaskan secara sensorik, yang dapat membantu meningkatkan suasana hati dan meredakan stres."]
    ];

    $boosterNew = [];
    foreach($moods as $bs){
        if($bs["id"] == $id){
            $boosterNew = $bs;
        }
    }

    return view('detail', [
        "booster" => $boosterNew
    ]);
});
