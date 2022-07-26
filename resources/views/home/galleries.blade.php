@extends('welcome')
@section('title', 'Galeri')
@section('page_description', 'Marsiajar merupakan sebuah komunitas Mari Siap Mengajar dimana guru-guru di Indonesia
dapat saling berbagi dan berkolaborasi untuk meningkatkan metode mengajar di dalam dan di luar kelas. Di Marsiajar, anda
dapat berbagi ide dan metode mengajar, berkolaborasi mendesain lembar kerja, dan mengembangkan diri.')
@section('page_keywords', '')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="masonry-thumbs grid-container grid-5" data-big="1" data-lightbox="gallery">
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/1.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/1.jpg')!!}"
                        alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/2.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/2.jpg')!!}"
                        alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/3.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/3.jpg')!!}"
                        alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/4.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/4.jpg')!!}"
                        alt="Gallery Thumb 4"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/5.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/5.jpg')!!}"
                        alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/6.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/6.jpg')!!}"
                        alt="Gallery Thumb 6"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/7.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/7.jpg')!!}"
                        alt="Gallery Thumb 7"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/9.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/9.jpg')!!}"
                        alt="Gallery Thumb 9"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/10.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/10.jpg')!!}"
                        alt="Gallery Thumb 10"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/11.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/11.jpg')!!}"
                        alt="Gallery Thumb 14"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/12.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/12.jpg')!!}"
                        alt="Gallery Thumb 12"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/12-1.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/12-1.jpg')!!}"
                        alt="Gallery Thumb 13"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/1.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/1.jpg')!!}"
                        alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/2.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/2.jpg')!!}"
                        alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/3.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/3.jpg')!!}"
                        alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/4.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/4.jpg')!!}"
                        alt="Gallery Thumb 4"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/5.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/5.jpg')!!}"
                        alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/6.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/6.jpg')!!}"
                        alt="Gallery Thumb 6"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/7.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/7.jpg')!!}"
                        alt="Gallery Thumb 7"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/9.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/9.jpg')!!}"
                        alt="Gallery Thumb 9"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/10.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/10.jpg')!!}"
                        alt="Gallery Thumb 10"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/11.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/11.jpg')!!}"
                        alt="Gallery Thumb 14"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/12.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/12.jpg')!!}"
                        alt="Gallery Thumb 12"></a>
                <a class="grid-item" href="{!!asset('webpage/images/portfolio/full/12-1.jpg')!!}"
                    data-lightbox="gallery-item"><img src="{!!asset('webpage/images/portfolio/4/12-1.jpg')!!}"
                        alt="Gallery Thumb 13"></a>
            </div>
        </div>
    </div>
</section>
@endsection
