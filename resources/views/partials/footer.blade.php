@php
    $menuList = [
        [
            'item_text' => 'Characters',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Comics',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Movies',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Tv',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Games',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Collectibles',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Videos',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Fans',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'News',
            'route_name' => 'home',
        ],
        [
            'item_text' => 'Shop',
            'route_name' => 'home',
        ],
    ];
@endphp

<div class="container-footer">

  <h3>Ciao Footer</h3>
  <img src="../resources/images/footer-bg.jpg" alt="">

  <ul class="ul">
    <h6>DC COMICS</h6>
    @foreach ($menuList as $item)
    
      <li>
        
        <a class="a" href="{{ $item['route_name'] != '' ? route($item['route_name']) : '' }}">{{$item['item_text'] }}</a>

      </li>
      
    @endforeach

</div>
