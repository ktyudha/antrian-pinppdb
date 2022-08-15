// https://stackoverflow.com/a/43824723/1240036
function hasClass(el, className) {
    if (el.classList)
      return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
  }
  
  function addClass(el, className) {
    if (el.classList)
      return el.classList.add(className);
    else if (!hasClass(el, className))
      el.className += ' ' + className;
  }
  
  function removeClass(el, className) {
    if (el.classList)
      el.classList.remove(className);
    else if (hasClass(el, className)) {
      var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
      el.className = el.className.replace(reg, ' ');
    }
  }
  
  function currency(amount) {
    return 'Rp ' + amount;
  }
  
  var products = [
    {
      id: 1,
      name: 'Kemeja Putih',
      price: 50000,
      active: false,
    },
    {
      id: 2,
      name: 'Celana Abu-abu',
      price: 80000,
      active: false,
    },
    {
      id: 3,
      name: 'Kemeja Biru khas',
      price: 50000,
      active: false,
    },
    {
      id: 4,
      name: 'Celana Biru',
      price: 80000,
      active: false,
    },
    {
      id: 5,
      name: 'Involet',
      price: 25000,
      active: false,
    },
    {
      id: 6,
      name: 'Dasi',
      price: 10000,
      active: false,
    },
    {
      id: 7,
      name: 'Sleyer',
      price: 10000,
      active: false,
    },
    {
      id: 8,
      name: 'Sabuk SMK',
      price: 35000,
      active: false,
    },
    {
      id: 9,
      name: 'Kaos Kaki',
      price: 15000,
      active: false,
    },
    {
      id: 10,
      name: 'PDH TNI/POLRI',
      price: 150000,
      active: false,
    },

  ];
  
  var total = 0;
  var $app = document.querySelector('.app');
  
  // Render title
  function renderTitle(container) {
    var $title = document.createElement('h1');
    $title.innerHTML = 'e-Kopsis';
    container.appendChild($title);
  }
  
  function addTotal(product, total, isAdd) {
    if (isAdd) {
      total += product.price;
    } else {
      total -= product.price;
    }
    return total;
  }
  
  // Render list
  function renderList(container, products) {
    var $orderList = document.createElement('ul');
  
    // Loop products, buat elemen tiap produk lalu append ke orderList
    products.forEach(function(product) {
      var $product = document.createElement('li');
      var $productPrice = document.createElement('span');
  
      $productPrice.innerHTML = currency(product.price);
      $product.innerHTML = product.name;
      $product.appendChild($productPrice);
  
      $orderList.appendChild($product);
  
      // Tambah event handler ketika produk di klik
      $product.addEventListener('click', function(event) {
  
        // isAdd untuk menentukan apakah operasi berikutnya adalah
        // operasi penambahan atau pengurangan
        var isAdd = !hasClass($product, 'is-active');
  
        // Kita tambah atau buang class is-active sesuai operasi yang
        // akan dilakukan
        if (isAdd) {
          addClass($product, 'is-active');
        } else {
          removeClass($product, 'is-active');
        }
  
        // Mendapatkan nilai total yang baru dari fungsi addTotal
        total = addTotal(product, total, isAdd);
  
        // Perbarui nilai total di DOM
        var $total = document.querySelector('.total span');
        $total.innerHTML = currency(total);
      });
    });
  
    container.appendChild($orderList);
  }
  
  // Render Total
  function renderTotalContainer(container, total) {
    var $totalContainer = document.createElement('div');
    addClass($totalContainer, 'total');
  
    $totalContainer.innerHTML = 'Total: ';
  
    var $total = document.createElement('span');
    $total.innerHTML = currency(total);
    $totalContainer.appendChild($total);
  
    container.appendChild($totalContainer);
  }

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

  //var $inputFields = document.querySelectorAll('.outputbox');
  
  //var $btnLogout = document.getElementById('logout');
  //$btnLogout.addEventListener('click', logout);

  // Render title, list, dan totalContainer
  renderTitle($app);
  renderList($app, products);
  renderTotalContainer($app, total);
  
  // querySelectorAll untuk mendapat semua DOM Node yang sesuai dengan selector
  // yang diberikan. Kemudian kita bisa menggunaka loop (forEach) untuk mendapat
  // setiap DOM Node nya.
  var $products = document.querySelectorAll('li');
  $products.forEach(function($product, index) {
  
    // Kita pilih 2 order teratas dengan men-trigger event click
    if (index < 0) {
      $product.dispatchEvent(new Event('click'));
    }
  });
  