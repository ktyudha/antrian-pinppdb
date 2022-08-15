function cekLogin(){
    let $username = sessionStorage.getItem("username");
    if ($username === null || $username ==="")  {
      location.href="/loginvsga/e-kopsis/index.html";
    }
  }

  function logout() {
    sessionStorage.removeItem("username");
    location.href="/loginvsga/e-kopsis/index.html";
  }
  
  cekLogin();

  function semuaMenu(){
      $.getJSON("data/pizza.json", function (data) {
          let menu = data.menu;
          $.each(menu, function (i, data) {
              $('#daftar-menu').append('<div class="col-md-4"><div class="card"><img src="/loginvsga/img/menu/'+ data.gambar +' " class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5 class="card-title">Rp'+ data.harga +'</h5><a href="#" class="btn btn-primary" id="addToCart">Add to cart</a></div></div></div>');
          });
      });
  }

semuaMenu();

$('.nav-link').on('click', function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori);

    if (kategori === 'All Menu'){
        semuaMenu();
        return;
    }

    $.getJSON('data/pizza.json', function(data){ 
        let menu = data.menu;
        let content = '';

        $.each(menu, function (i, data){
            if (data.kategori === kategori.toLowerCase()){
                content += '<div class="col-md-4"><div class="card"><img src="/loginvsga/img/menu/'+ data.gambar +' " class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5 class="card-title">Rp'+ data.harga +'</h5><a href="#" class="btn btn-primary" id="addToCart">Add to cart</a></div></div></div>';
            }
        });
        $('#daftar-menu').html(content);
    });
});

$('#addToCart').click(function(){
    var cart = [];
    $.getJSON('data/pizza.json', function (data){
        let menu = data.menu;
        $cart.append(console.log());
       
    });
});


