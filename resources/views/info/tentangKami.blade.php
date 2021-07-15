@extends('layouts.main')

@section('content')
@include('layouts.navbar')
<div class="section-about">
    <div class="container">
        <div class="left-col">
            <h1>Tentang Kami</h1>
            <video src="{{ asset('public/videos/Asmat Baru 2.mp4') }}" controls poster="{{ asset("public/images/thumbnail.jpg") }}" width="100%"></video>
            <p>ASMAT adalah sebuah Marketplace atau platform perantara yang menghubungkan penjual dan pembeli yang dilakukan secara online (e-Commerce), ASMAT memiliki singkatan Advancing Sustainable Market atau memajukan pasar yang berkelanjutan.  Dibentuk pada tahun</p>
            
        </div>
        <div class="right-col">
            <img src="{{ asset('public/images/banner-about.svg') }}" alt="">
        </div>
        <div class="bot-col">
            <p>2021 dengan inisiasi yang dilakukan oleh Program Pelestarian Sumber Daya Alam dan Peningkatan Kehidupan Masyarakat Adat melalui Pertanian Berkelanjutan di Tanah Papua atau yang disingkat PAPeDA Papua.</p>
        </div>
        <div class="penjelasan-produk">
            
            <p class="berbagai"> Sejak 2018 dengan dukungan David and Lucile Packard Foundation, The Asia Foundation bersama Pt PPMA, KIPRa, Perkumpulan Mnuwar Papua, GEMAPALA & PUPUK melakukan pemberdayaan masyarakat adat di Jayapura, Keerom, Manokwari Selatan dan Fakfak. <span class="berbagai-mobile">Berbagai macam potensi komoditas dipilih dan dibudidayakan untuk dapat diolah menjadi produk konsumsi yang layak jual secara berkesinambungan. Website e-Commerce ini digunakan untuk memperkenalkan produk-produk tersebut yang khas akan budaya masyarakat adat dan semangatnya dalam melestarikan hutan Papua.</span> Berbagai macam potensi komoditas dipilih dan dibudidayakan untuk dapat diolah menjadi produk konsumsi yang layak jual secara berkesinambungan. Website e-Commerce ini digunakan untuk memperkenalkan produk-produk tersebut yang khas akan budaya masyarakat adat dan semangatnya dalam melestarikan hutan Papua. </p>
            <p>  <a href="http://www.asmatpapua.com">www.asmatpapua.com</a> diharapkan ke depan bisa menjadi etalase semua produk dari Papua, untuk tahap awal ada beberapa produk yang dihasilkan:</p>
            <div class="item"> <label>(a)</label> <p><strong>Keripik dan Tepung Keladi SUNGGA</strong> berasal dari Tanaman Keladi yang ditanam di Kampung Aryawinmoho & Kampung Wama di Distrik Neney – Kabupaten Manokwari Selatan, Provinsi Papua Barat.  Kedua kampung terletak pada gugusan Pegunungan Arfak dengan ketinggian 2.500 meter dpl dan Daerah Aliran Sungai Dwengrou, Keladi merupakan makanan pokok dari Suku Sough yang dikonsumsi sehari-hari maupun untuk hidangan jamuan acara.  Setiap rumah di kampung memiliki Tanaman Keladi di pekarangan dan kebun. Keladi memiliki manfaat untuk kesehatan yaitu bebas Gluten, rendah Gula, dan ditanam secara organik tanpa bantuan pupuk kimia.</p></div>
            <div class="item"> <label>(b)</label> <p><strong>Coklat Batangan CENDRAWASIH CHOCOLATE</strong> memiliki unsur kedaerahan yang sangat kental karena bahan baku Kakao didapat dari Lembah Grime Jayapura wilayah Dewan Adat Suku Demutru, komoditi ini pernah memiliki kejayaan awal pada tahun 1949 hingga 1954 melalui Koperasi Yawa Datum dan tahun 2006 hingga 2011 melalui Program Gerakan Wajib Tanam Kakao.  Sesuai dengan arti Yawa Datum yaitu Semangat Bertumbuh, kejayaan Kakao coba dibangun kembali.  Kakao yang diolah menjadi Coklat Batang ini memiliki banyak manfaat yaitu sebagai antioksidan yang berfungsi untuk menangkal radikal bebas, mencegah insomnia, serta dipercaya sebagai penambah gairah dalam tubuh.</p></div>
            <div class="item"> <label>(c)</label> <p><strong>Balsem Cair, Pensanitasi Tangan Sereh Wangi MOZAIK & Teh Sereh Wangi REWAPUA</strong> adalah produk-produk olahan dari Tanaman Sereh Wangi yang dibudidayakan di Kampung Skanto dan Gudang Garam 54 oleh Suku Awi, Elseng & Dani.  Hasil extract dari pabrik mini di kedua kampung di proses lanjut ke Aceh untuk diramu dijadikan Balsam Cair serta Pensanitasi Tangan, menjadikan kolaborasi bisnis Sereh Wangi lebih kuat. Selain itu daun yang masih muda dikeringkan dan dimanfaatkan menjadi Teh.  Balsem Cair & Pensanitasi Tangan memiliki manfaat seperti Anti Bakteri, meredakan Migran/Sakit Kepala, meredakan nyeri Otot/Sendi, meringankan Gejala Flu, mengencangkan pori kulit dan mengusir Serangga.  Untuk Teh memiliki manfaat seperti mengatasi perut kembung, menyehatkan mulut, menjaga kadar Kolestrol, produksi Sel Darah Merah dan mengatasi rasa cemas atau gangguan tidur.</p></div>
            <div class="item"> <label>(d)</label> <p><strong>Sirup Pala MOSCADA</strong> dibuat dari Buah Pala asli Fakfak yang telah ada bertahun-tahun di Hutan Desa Wertuar.  Ide untuk mengolah Sirup Pala berasal dari kelompok perempuan dari Petuanan Wertuar di sekitar hutan karena melihat sisa Buah Pala yang terbuang setelah bijinya di panen.  Produksi Sirup Pala diolah secara bergantian berberbasis kelompok, agar setiap orang bisa berkesempatan untuk mendapatkan pemasukan dari produksi Sirup Pala.  Sisa Buah Pala ini dapat diolah menjadi berbagai macam olahan pangan selain Sirup seperti Manisan dan Selai.  Untuk Sirup Pala selain rasanya yang enak ternyata ada manfaat kesehatan seperti Anti Bakteri, Anti Jamur, dan Anti Radang. </p></div>
            <h3>Hutan Papua Lestari, masyarakat adat sejahtera!</h3>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection