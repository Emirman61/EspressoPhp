<?php
session_start();

// Sepet içeriğini kontrol etme ve gerekirse oturumu sıfırlama
if (!isset($_SESSION['initialized'])) {
    $_SESSION['initialized'] = true;
    $_SESSION['cart'] = array();
}

// displayCart fonksiyonunu tanımla
function displayCart() {
    // Sepet içeriğini gösteren kod buraya gelecek
    // Örnek olarak, burada bir HTML tablosuyla sepetteki ürünler ve toplam tutarı gösteriliyor
    echo "<div class='max-w-md mx-auto mb-12 flex justify-center items-center p-2 bg-gray-800 text-white shadow-md rounded-lg '>";
    echo "<h2 class='text-lg font-semibold'>Sepet İçeriği</h2>";
    echo "</div>";
    echo "<div class='flex flex-col items-center'>";
    // Sepetin içeriği burada listeleniyor
    if(isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $product) {
            echo "<div class='flex items-center justify-between w-full p-4 border border-gray-200 shadow-lg rounded-lg mb-2'>";
            echo "<div class='flex items-center'>";
            echo "<img src='{$product['image']}' alt='{$product['name']}' class='w-12 h-12 mr-4'>";
            echo "<span>{$product['name']}</span>";
            echo "</div>";
            echo "<span>{$product['price']}</span>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='index' value='$key'>";
            echo "<button type='submit' name='removeProduct' class='ml-4 px-4 py-2.5 border border-gray-200 rounded-lg text-white tracking-wider bg-red-600 transition hover:bg-red-800'>Çıkar</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "<p class='text-center'>Sepetiniz boş</p>";
    }
    // Sepetteki ürünlerin toplam tutarını hesapla
    $totalPrice = 0;
    if(isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $totalPrice += floatval(str_replace(',', '.', $product['price']));
        }
    }
    echo "<div class='max-w-md mx-auto p-4 border bg-gray-800 border-gray-200 rounded-lg mt-4'>";
    echo "<p class='text-lg font-semibold text-white'>Sepet Toplamı: " . number_format($totalPrice, 2, ',', '.') . " ₺</p>";
    echo "</div>";
    echo "</div>";
}

// Sepete ürün ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product'])) {
    // Gelen ürün bilgisini al
    $product = json_decode($_POST['product'], true);
    
    // Sepete ekle
    if(!in_array($product, $_SESSION['cart'])) {
        array_push($_SESSION['cart'], $product);
    }
}

// Sepetten ürün çıkarma işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['removeProduct']) && isset($_POST['index'])) {
    // Çıkarılacak ürünün index'ini al
    $index = $_POST['index'];
    
    // Sepetten ürünü çıkar
    unset($_SESSION['cart'][$index]);
}

// Sepeti temizleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['clearCart'])) {
    unset($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alışveriş sistemi</title>
  <script src="https://cdn.tailwindcss.com/3.4.1"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-400">
<div id="urunler" x-data="urunler" class="py-20 bg-gray-100">
        <div class="max-w-md mx-auto mb-12 flex justify-center items-center p-2 bg-white shadow-md rounded-lg">
                <p class="text-lg font-semibold text-gray-800 p-3 text-center hover:bg-yellow-600 hover:rounded-lg " > ÜRÜNLER </p>
            </div>
        <div class="grid gap-4 grid-cols-2">
                <template x-for="(product,index) in products" :key="index">
                    <div class="bg-white w-full shadow-md rounded-3xl p-4 flex ">
                        <div class="size-40">
                        <img x-bind:src="product.image" x-bind:alt="product.name" class="size-full rounded-3xl object-cover">
                        </div>
                        <div class="flex-auto ml-4 ">
                            <h5 x-text="product.type" class="text-sm font-medium text-red-600"> </h5>
                            <h2 x-text="product.name" class="text-ld font-medium"></h2>
                            <div class="mt-4 border-t border-gray-200 pt-4 text-sm font-medium flex items-center justify-between">
                                <div>
                                <button x-text="${product.price} TL" class="px-4 py-2.5 border border-gray-200 rounded-lg text-black transition hover:bg-yellow-600"></button>
                                </div>
                                <!-- Yeni eklenen buton -->
                                <form method="post">
                                    <input type="hidden" name="product" :value="JSON.stringify(product)">
                                    <button type="submit" class="ml-4 px-4 py-2.5 border border-gray-200 rounded-lg text-white tracking-wider bg-gray-800 transition hover:bg-red-600">Sepete Ekle </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </template>
            </div>  
    </div>
    <!-- Sepet -->
    <div>
        <?php displayCart(); ?>
    </div>
    <script>
      document.addEventListener('alpine:init', () => {
        Alpine.data('header', () => ({
          mobilemenu: false,
          menuitems: [
            { href: '#slider', title: 'ANASAYFA' },
            { href: '#about', title: 'ESPRESSOLAB' },
            { href: '#menu', title: 'MENÜ' },
            { href: '#references', title: 'BAHSETMELER' },
            { href: '#contact', title: 'İLETİŞİM' },
          ]
        }));
  
        Alpine.data('slider', () => ({
          slides: [
            './images/slide-1.jpeg',
            './images/slide-2.jpeg',
            './images/slide-3.jpeg',
          ],
          currentIndex: 0,
          back() {
            if (this.currentIndex > 1) {
              this.currentIndex = this.currentIndex - 1;
            }
          },
          next() {
            if (this.currentIndex < this.slides.length - 1) {
              this.currentIndex = this.currentIndex + 1;
            } else {
              this.currentIndex = 0;
            }
          }
        }));
  
        Alpine.data('menu', () => ({
          foods: [
            { image: './images/foods/1.png', name: 'Portakallı Kek' },
            { image: './images/foods/2.png', name: 'Parça Çikolata Kuki' },
            { image: './images/foods/3.png', name: 'Peynirli Simit Sandviç' },
            { image: './images/foods/4.jpeg', name: 'Ekşi Mayalı Hindi Fümeli Sandviç' },
            { image: './images/foods/5.png', name: 'Mont Blanc' },
            { image: './images/foods/6.jpeg', name: 'Lotus Cheesecake' },
          ],
          drinks: [
            { image: './images/drinks/1.jpg', name: 'Spanish Latte' },
            { image: './images/drinks/2.jpeg', name: 'Iced Caffe Latte' },
            { image: './images/drinks/3.jpeg', name: 'Iced Lotus Latte' },
            { image: './images/drinks/4.jpeg', name: 'Sour Green Plum Shake' },
            { image: './images/drinks/5.jpeg', name: 'Iced Matcha Latte' },
            { image: './images/drinks/6.jpeg', name: 'Cranberry Hibiscus' },
          ],
        
          tabs: ['Yiyecekler', 'İçecekler',],
          currentIndex: 0,
          change(index) {
            this.currentIndex = index;
          }
        }));
        Alpine.data('urunler', () => ({
        
          products: [
            { image: './images/products/1.png', type: 'Kahve', name: 'Kenya Karogoto 250 g', price: '450,00' },
            { image: './images/products/2.png', type: 'Kahve', name: 'El Salvador El Cerro Pacas 250 g', price: '450,00' },
            { image: './images/products/3.png', type: 'Termos', name: 'Tutacaklı Bordo Termos 480 ml', price: '825,00' },
            { image: './images/products/4.png', type: 'Termos', name: 'Siyah Uzun Termos 480 ml', price: '825,00' },
            { image: './images/products/5.png', type: 'Çay', name: 'Kuşburnu 50 g', price: '825,00' },
            { image: './images/products/6.png', type: 'Çay', name: 'Winterfell Tea 50 g', price: '825,00' },
          ],
          tabs: ['Ürünler'],
          currentIndex: 0,
          change(index) {
            this.currentIndex = index;
          }
        }));
        Alpine.data('references', () => ({
          comments: [
            { message: 'EspressoLab, benim için kahve deneyiminin zirvesidir! Her fincan kahvesi özenle hazırlanmış ve harika bir lezzete sahip. Atmosferi de çok sıcak ve davetkâr. Her ziyaretimde keyif alıyorum.', fullname: 'John Doe' },
            { message: 'EspressoLab, sadece kahve içmekle kalmıyor, aynı zamanda bir kahve sanatını yaşamanızı sağlıyor. Baristalar burada gerçekten birer sanatçı gibi çalışıyor ve sundukları kahveler sadece lezzetli değil, aynı zamanda görsel bir şölen.', fullname: 'Winter Doe' },
            { message: 'EspressoLab\'in kahveleri mükemmel kalitede ve çeşitli. Her zevke uygun bir seçenek bulmak mümkün. Ayrıca, çalışanlar çok ilgili ve samimi. Buraya gelmek her zaman keyifli bir deneyim." "EspressoLab, kahve tutkunları için bir cennet! Yüksek kaliteli kahveleri, özenle seçilmiş çeşitleri ve sıcak atmosferi ile favori kahve durağım haline geldi. Kesinlikle denemelisiniz', fullname: 'John Wick' },
          ],
          currentIndex: 0,
          change(index) {
            var lastIndex = this.comments.length - 1;
  
            if (index < 0) {
              this.currentIndex = lastIndex;
            } else if (index > lastIndex) {
              this.currentIndex = 0;
            } else {
              this.currentIndex = index;
            }
          }
        }));
      })
    </script>
</body>
</html>