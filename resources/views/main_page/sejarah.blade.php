@extends('layouts.master')
@section('content')

<div id="fh5co-footer">
    <div class="container">
        <div class="row">
            <h1>Sejarah Singkat Annafiiyah</h1>
            <div class="box">
                <div class="col-md-7">
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim risus vel porttitor congue. Proin tempus scelerisque purus, at condimentum sem ornare ultricies. Vestibulum fermentum pulvinar eleifend. Cras scelerisque sapien ac sapien eleifend feugiat. Nunc dictum leo facilisis sapien lacinia porta. Morbi pellentesque sed tellus vitae sollicitudin. Morbi quis est vel sem dignissim cursus. Nulla aliquet purus ac suscipit feugiat. Quisque non mi dignissim, vehicula urna eu, pellentesque ante. Nullam at orci at est tincidunt aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In quis risus hendrerit, pellentesque eros sed, porta leo. Sed efficitur sodales congue. Mauris elementum risus porttitor neque convallis venenatis.
                    </div><br>
                    <div>Proin commodo facilisis magna ut imperdiet. In vitae dictum ipsum. Maecenas tincidunt feugiat enim, sit amet congue metus facilisis vitae. Aenean eget dictum diam. Donec nulla magna, rhoncus ac odio sed, porttitor posuere urna. Nulla quis nulla nec sem elementum sollicitudin nec nec eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean hendrerit lectus venenatis, elementum justo id, tincidunt sem. Vestibulum mattis feugiat imperdiet. Etiam suscipit odio sem, laoreet rhoncus dui tristique vel.
                    </div><br>
                    <div>Pellentesque vestibulum turpis vel est pretium ultricies et sit amet massa. Vestibulum placerat egestas tellus, non sodales mauris. Nunc condimentum sem id dui pharetra, nec imperdiet libero venenatis. Proin vestibulum lacinia eros, gravida pellentesque lectus gravida et. Aliquam vestibulum ac erat non malesuada. Suspendisse feugiat orci dolor, at venenatis elit condimentum sed. Nullam ligula magna, molestie eget sapien eget, tempus ornare turpis.
                    </div>
                </div>
                <div class="col-md-5">
                    <img style="width: 100%" src="{{asset('/main_asset/images/annafiiyah_3.jpg')}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    .box {
        color: black;
        text-align: justify;
    }
</style>
@endsection