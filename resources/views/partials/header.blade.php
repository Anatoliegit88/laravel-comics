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

<div class="container-blue">
  <div class="small-blue">
    <p>DC POWER @ VISA</p>
    <P>ADDITIONAL DC SITES</P>
  </div>
</div>
<div class="container">
  <div class="container-nav">
    <img class="image" src="../../images/dc-logo.png" alt="logo">
      <nav>
        <ul class="ul">
          @foreach ($menuList as $item)
          
            <li>
              
              <a class="a" href="{{ $item['route_name'] != '' ? route($item['route_name']) : '' }}">{{$item['item_text'] }}</a>
  
            </li>
            
          @endforeach
         
        </ul>
      </nav>
      <img src="../../images/jumbotron.jpg" alt="">
  </div>
</div>
<main class="d-flex flex-wrap p-3">
  <div class="container-card p-3 ">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3 ">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>
  <div class="container-card p-3">
    <div class="card" style="width: 10rem;">
      <img src="resources/images/im-01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ACTION COMICS</p>
      </div>
    </div>
  </div>

</main>
 