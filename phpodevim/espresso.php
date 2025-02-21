<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espressolab</title>
  <script src="https://cdn.tailwindcss.com/3.4.1"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
</head>
<body>
    <header x-data="{menuitems: [
        {href: '#slider', title: 'ANASAYFA' },
        {href: '#about', title: 'ESPRESSOLAB' },
        {href: '#menu', title: 'MENÜ' },
        {href: '#references', title: 'BAHSETMELER' },
        {href: '#contact', title: 'İLETİŞİM' },
        ]}" class="absolute z-50 top-0 w-full">
        <div class="container mx-auto py-4 flex flex-row items-center">
            <a href="">
                <img src="./images/espressolab.png" alt="Espressolab" class="w-[120px] md:w-[150px] lg:w-[170px]">
              </a>
            <nav class="flex items-center justify-center gap-6 pl-6 ml-6 border-l border-gray-200 text-base">
                <template x-for="(menuitem, index) in menuitems" :key="index"> 
                    <a x-bind:href="menuitem.href" x-text="menuitem.title" class="font-medium text-white hover:underline"></a>
                </template>
            </nav>
            <div class="ml-auto">
                <a href="" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded shadow">REZERVASYON YAP </a>
            </div>
        </div>
     </header>
     <!-- DERS1 -->
     <div id="slider" x-data="slider" class="relative w-full h-screen overflow-hidden bg-black">
        <template x-for="(slide,index) in slides">
            <figure x-show="currentIndex == index">
                <img x-bind:src="slide" class="absolute z-0 size-full object-cover" />
            </figure>
        </template>
        <button x-on:click="back()" class="absolute left-6 lg:left-14 top-1/2 -translate-y-1/2 size-11 z-10 rounded-full bg-gray-100 hover:bg-gray-200 shadow-md">
        <svg class="size-8 text-gray-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
        </svg>
</button>
<button x-on:click="next()" class="absolute right-14 top-1/2 -translate-y-1/2 size-11 z-10 rounded-full  bg-gray-100 hover:bg-gray-200shadow-md">
    <svg class="size-8 text-gray-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
  </svg>
</button>
     </div>
     <div id="about" class="py-20">
        <div class="container mx-auto px-4">
          <div class="flex flex-col sm:flex-row gap-6 md:gap-8 md:gap-10 lg:gap-12 items-center">
            <div class="w-full sm:w-6/12">
              <img src="./images/about-us-1.jpg" alt="espressolab kahve demleme görseli" class="w-full rounded-lg">
            </div>
            <div class="w-full sm:w-6/12">
              <img src="./images/espressolab.png" alt="Espressolab"
                class="w-[130px] sm:w-[160px] md:w-[180px] brightness-0">
              <p class="mt-4 sm:mt-6 text-gray-500">Türkiye'nin en yenilikçi kahve zinciri olarak; kahve tutkunlarına
                dünyadaki
                gurme kahve kültürünün değişik tatlarını sunuyoruz. 2014'te İstanbul Bilgi Üniversitesi'nde ilk mağazamızla
                kapılarımızı açtığımız andan itibaren kahve tutkuları arasında önemli bir hayran kitlesine sahip olduk. İyi
                kahveye olan tutkumuzu her geçen gün daha fazla kahve severle paylaşmak için çok çalışıyoruz. Global bir
                marka olma yolunda ilerleyen şirketimizin 1 kavurma merkezi, Türkiye ve yurt dışında toplam 213 mağazası
                bulunmaktadır. 2024 yılı içerisinde mağaza sayımızı 400'e çıkarmayı hedeflemekteyiz.
              </p>
            </div>
          </div>
          <div class="w-full rounded-lg bg-gray-500 my-6 sm:my-8 p-8 sm:p-12 md:p-14">
            <h2 class="text-2xl text-white font-semibold">KAHVEMİZİ KENDİMİZ KAVURUYORUZ</h2>
            <p class="mt-4 text-gray-300">Tanzanya, Etiyopya, Endonezya, Guatemala, Kolombiya, Brezilya ve Kenya'daki
              yerel çiftlikleri bizzat ziyaret ediyor ve yerel üreticileri destekleyen programlar geliştiriyoruz.
              Çiftliklerden en iyi çekirdekleri seçiyor ve kahvemizi, dünyaca ünlü kahve uzmanı Renato Correira
              danışmanlığında kahve kavurma profillerini sürekli güncelleyerek kendi kavurma merkezimizde taze bir
              şekilde
              kavuruyoruz. Misafirlerimize sunduğumuz kahvelerin en büyük özelliği uzun stoklu olmamasıdır. Bizim için
              nitelikli kahve taze kahvedir.</p>
            <p class="mt-4 text-gray-300">Zincir kahve markaları yurt dışından gelen ve 6 aydan hatta 1 yıldan uzun
              süreli kahveleri piyasaya sürmektedir. Biz bunu yapmıyoruz. En ileri kavurma tekniklerinin kullanıldığı
              üretim süreçlerine dayalı en kaliteli ürünü sunarak, Nitelikli Kahve akımının Türkiye'deki en başarılı
              temsilcilerinden biriyiz.</p>
          </div>
          <div class="flex flex-col sm:flex-row gap-6 md:gap-8 md:gap-10 lg:gap-12 items-center">
            <div class="w-full w-6/12">
              <h2 class="text-xl sm:text-2xl md:text-3xl text-black font-bold"><span class="text-gray-500">RESPONSIBLE
                  TOGETHER</span> HAREKETİ İLE SÜRDÜRÜLEBİLİR KAHVE</h2>
              <p class="mt-4 sm:mt-6 text-gray-500"> Araştırmalara göre 2050 yılında kahve üretiminin iklim değişikliği,
                yanlış tarım politikaları ve üreticilerin kahvede gelecek görmemesi nedeniyle %50 oranında azalması öngörülüyor.
                Her gün büyük bir keyifle tükettiğimiz kahvenin iklim değişikliği karşısındaki uzun vadeli mücadelesi,
                sürdürülebilir tarımsal ürün olması ve geri dönüşüm projeleri gibi temel konularda, kahve sektörü içerisinde
                yer alan tüm markalara büyük sorumluluk düşüyor. “Future Generation Coffee” ile bu problemlerin bütününe
                eğilecek ve tüm kahve sektörünün katılımıyla yürütülecek yeni bir hareketi hayata geçirdik.
              </p>
            </div>    
            <div class="w-6/12">
                <img src="./images/about-us-2.jpg" alt="sürdürülebilir kahve görseli" class="w-full rounded-lg">
            </div>
        </div>
        </div>
     </div>
     <div id="menu" x-data="menu" class="py-20 bg-gray-100">
        <div x-data="{tabs: ['Yiyecekler','İçecekler'] }" class="max-w-md mx-auto mb-8 flex gap-x-4 p-2 bg-white shadow-md rounded-lg">
   <template x-for="(tab,index) in tabs" :key="index">
<button x-text="tab" x-on:click="change(index)" x-bind:class="{'bg-red-600 text-white':currentIndex ==index}" class="flex-1 py-2 px-4 rounded-md transition-all  duration-300"></button>
   </template>
    </div>
    <div class="container mx-auto px-4">
        <div x-show="currentIndex==0">
            <div class="grid gap-4 grid-cols-3">
            <template x-for="(food,index) in foods" :key="index">
                <div class="bg-white w-full shadow-md rounded-3xl p-1 max-w-[445px]">
                    <img x-bind:src="food.image" x-bind:alt="food.name" class="h-60 rounded-3xl w-full object-cover">
                    <p x-text="food.name" class="text-lg font-semibold text-gray-800 p-3 text-center"></p>
                </div>
            </template>
        </div>
        </div>
        <div x-show="currentIndex == 1">
            <div class="grid gap-4 grid-cols-3">
                <template x-for="(drink,index) in drinks" :key="index">
                    <div class="bg-white w-full shadow-md rounded-3xl p-1 max-w-[445px]">
                        <img x-bind:src="drink.image" x-bind:alt="drink.name" class="h-60 rounded-3xl w-full object-cover">
                        <p x-text="drink.name" class="text-lg font-semibold text-gray-800 p-3 text-center"></p>
                    </div>
                </template>
            </div>
        </div>
        <div id="urunler" x-data="urunler" class="py-20 bg-gray-100">
        <div class="max-w-md mx-auto mb-12 flex justify-center items-center p-2 bg-white shadow-md rounded-lg">
                <button onclick="openNewPage()" class="text-lg font-semibold text-gray-800 p-3 text-center hover:bg-yellow-600 hover:rounded-lg" >Ürünleri İncelemek İçin Tıklayınız </button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 lg:gap-8">
    <!-- Ürün 1 -->
    <div>
        <img src="./images/products/1.png" alt="Ürün 1" class="w-full rounded-lg">
        <p class="text-lg font-semibold text-gray-800 p-5 text-center shadow-md rounded-lg hover:bg-yellow-600 hover:rounded-lg">Kenya Karogoto 250 g</p>
    </div>
    <!-- Ürün 2 -->
    <div>
        <img src="./images/products/3.png" alt="Ürün 2" class="w-full rounded-lg">
        <p class="text-lg font-semibold text-white bg-gray-800 p-5 text-center shadow-md rounded-lg hover:bg-yellow-600 hover:rounded-lg">Tutacaklı Bordo Termos 480 ml</p>
    </div>
    <!-- Ürün 3 -->
    <div>
        <img src="./images/products/5.png" alt="Ürün 3" class="w-full rounded-lg">
        <p class="text-lg font-semibold text-gray-800  p-3 text-center shadow-md rounded-lg hover:bg-yellow-600 hover:rounded-lg">Kuşburnu 50 g</p>
    </div>
</div>
    </div>
        </div>
    </div>
    </div>
    <div id="references" x-data="references" class="py-20">
      <div class="container mx-auto flex flex-row  rounded-lg overflow-hidden bg-gray-100 items-stretch">
        <div class="relative w-1/2 bg-yellow-600 flex items-center"> 
          <div class="w-64 mx-auto text-5xl font-semibold text-white">
          <span class="block"> Müşteriler</span>
          <span class="block"> Neler</span>
          <span class="block"> Söylüyor?</span>
        </div>
        <div class="absolute right-2 bottom-2 block"> 
        <button x-on:click="change(currentIndex-1)" class="rounded-l-full bg-gray-100 text-gray-600 font-bold w-12 h-10 hover:bg-gray-100">&#8592;</button>
        <button x-on:click="change(currentIndex+1)" class="rounded-r-full bg-gray-100 text-gray-600 font-bold w-12 h-10 hover:bg-gray-100">&#8594;</button>
      </div>
        </div>
          <div class="w-1/2 flex-items-center min-h-96"> 
           <template x-for="(comment,index) in comments":key="index">
            <div x-show="currentIndex == index" class="p-14 min-h-96">
             <p x-text="comment.message" class="text-xl text-gray-700 font-normal italic "></p>
             <h4 x-text="comment.fullname" class="text-sm font-bold text-grat-900 mt-2 "></h4>
            </div>
          </template> 
        </div>
      </div>
    </div>
    <div id="contact" class="py-20 bg-black">
      <div class="container mx-auto ppx-4">
        <div class="flex items-center gap-10 text-white" >
          <div class="flex-1">
            <h2 class="text-4xl font-bold text-gray-400">Bize Ulaşın!</h2>
            <h2 class="text-7xl font-bold text-white">Size Nasıl Yardımcı Olabiliriz?</h2>
          </div>
          <div class="flex-1">
            <form class="text-white">
              <div>
                <label for="name" class="mb-3 block text-base font-medium">İsim Soyisim</label>
                <input type="text" name="name" id="name" class="w-full rounded-md border-none bg-white py-3 px-6 text-base font-medium outline-none text-black">
              </div>
              <div class="mt-3">
                <label for="ename" class="mb-3 block text-base font-medium">E-posta adresiniz</label>
                <input type="email" name="ename" id="email" class="w-full rounded-md border-none bg-white py-3 px-6 text-base font-medium outline-none text-black">
              </div>
              <div>
                <label for="phone" class="mb-3 mt-3 block text-base font-medium">Telefon numaranız</label>
                <input type="tel" name="phone" id="phone" class="w-full rounded-md border-none bg-white py-3 px-6 text-base font-medium outline-none text-black">
              </div>
              <div>
                <label for="message" class="mb-3 mt-3 block text-base font-medium">Mesajnız!</label>
                <textarea rows="4"  name="message" id="message" class="w-full rounded-md border-none bg-white py-3 px-6 text-base font-medium outline-none text-black resize-none">
                </textarea>
              </div>
              <div class="mt-3">
                <button class="bg-yellow-600 text-center font-semibold rounded-lg px-10 py-3 hover:bg-red-500">Gönder</button>
              </div>
             </form>
          </div>
        </div>
      </div>
    </div>
     <div id="contact-us" class="py-20">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-3 gap-5 text-center">
          <div class="flex flex-col items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" class="fill-yellow-600">
              <path
                d="M31.9904 13.965L22.4166 4.40166C21.6057 3.60976 20.5294 3.16817 19.4104 3.16817C18.2914 3.16817 17.2151 3.60976 16.4041 4.40166L6.8304 13.9017C6.40502 14.283 6.0629 14.7524 5.82645 15.279C5.58999 15.8056 5.46454 16.3776 5.45831 16.9575V30.5425C5.47456 31.6946 5.93476 32.793 6.73808 33.5973C7.5414 34.4016 8.62236 34.846 9.74415 34.8333H28.9225C30.0443 34.846 31.1252 34.4016 31.9285 33.5973C32.7319 32.793 33.1921 31.6946 33.2083 30.5425V16.9575C33.2071 16.4009 33.0989 15.85 32.8899 15.3365C32.6809 14.823 32.3752 14.3569 31.9904 13.965ZM18.47 6.68166C18.7058 6.46025 19.0138 6.33747 19.3333 6.33747C19.6528 6.33747 19.9608 6.46025 20.1966 6.68166L28.5833 15.0417L20.1504 23.4017C19.9146 23.6231 19.6066 23.7459 19.2871 23.7459C18.9675 23.7459 18.6596 23.6231 18.4237 23.4017L10.0833 15.0417L18.47 6.68166ZM30.125 30.5425C30.1052 30.8533 29.9688 31.144 29.7445 31.3537C29.5203 31.5633 29.2256 31.6755 28.9225 31.6667H9.74415C9.44102 31.6755 9.14636 31.5633 8.9221 31.3537C8.69785 31.144 8.56147 30.8533 8.54165 30.5425V17.9708L14.7854 24.1458L12.2262 26.6792C11.9391 26.9758 11.7779 27.3771 11.7779 27.7954C11.7779 28.2137 11.9391 28.615 12.2262 28.9117C12.3695 29.066 12.5417 29.1891 12.7324 29.2734C12.9232 29.3578 13.1286 29.4017 13.3362 29.4025C13.7332 29.4009 14.1142 29.2421 14.4 28.9592L17.1287 26.2675C17.8065 26.6928 18.5853 26.9179 19.3796 26.9179C20.1738 26.9179 20.9527 26.6928 21.6304 26.2675L24.3591 28.9592C24.6449 29.2421 25.026 29.4009 25.4229 29.4025C25.6306 29.4017 25.8359 29.3578 26.0267 29.2734C26.2174 29.1891 26.3896 29.066 26.5329 28.9117C26.82 28.615 26.9812 28.2137 26.9812 27.7954C26.9812 27.3771 26.82 26.9758 26.5329 26.6792L23.9583 24.1458L30.125 17.9708V30.5425Z" />
            </svg>
            <p class="text-2xl font-extrabold text-black">E-Posta</p>
            <p class="text-base text-gray-900">Bize Şu Adresten Ulaşın</p>
            <a  href="mailto:info@espressolab.com" class="text-lg font-bold hover:text-red-600">info@espressolab.com</a>
          </div>
          <div class="flex flex-col items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" class="fill-yellow-600">
              <path
                d="M30.4237 20.5833C30.0846 20.5833 29.73 20.4725 29.3908 20.3933C28.7045 20.2357 28.0297 20.0294 27.3712 19.7758C26.656 19.5086 25.8699 19.5225 25.164 19.8148C24.4582 20.1071 23.8826 20.6572 23.5479 21.3592L23.2087 22.0875C21.7115 21.2154 20.3283 20.1513 19.0925 18.9208C17.8944 17.6516 16.8583 16.231 16.0092 14.6933L16.7183 14.3608C17.4018 14.0171 17.9374 13.4259 18.222 12.701C18.5067 11.9761 18.5202 11.1687 18.26 10.4342C18.0151 9.7518 17.8143 9.05363 17.6587 8.34417C17.5817 7.99584 17.52 7.63167 17.4737 7.28334C17.2865 6.16807 16.7177 5.1581 15.8698 4.4353C15.0219 3.7125 13.9506 3.32439 12.8487 3.34084H8.20832C7.55657 3.33996 6.91201 3.48056 6.31687 3.75343C5.72174 4.02629 5.18948 4.42526 4.75498 4.92417C4.31148 5.43662 3.98125 6.04161 3.78698 6.69756C3.59271 7.35351 3.53901 8.04489 3.62957 8.72417C4.4676 15.3142 7.39927 21.4362 11.97 26.1408C16.5508 30.8351 22.5117 33.846 28.9283 34.7067C29.1284 34.7224 29.3294 34.7224 29.5296 34.7067C30.6664 34.7084 31.7641 34.28 32.6129 33.5033C33.0987 33.0571 33.4871 32.5105 33.7528 31.8992C34.0185 31.288 34.1554 30.626 34.1546 29.9567V25.2067C34.1463 24.1126 33.7705 23.0551 33.0907 22.2127C32.411 21.3704 31.4689 20.7948 30.4237 20.5833ZM31.1791 30.0833C31.1786 30.3043 31.1331 30.5227 31.0455 30.7245C30.9579 30.9263 30.8301 31.107 30.6704 31.255C30.5014 31.4131 30.3004 31.5306 30.0817 31.5991C29.8631 31.6676 29.6323 31.6852 29.4062 31.6508C23.6532 30.8792 18.3066 28.1865 14.19 23.9875C10.0698 19.756 7.4252 14.2458 6.66665 8.31251C6.63316 8.08028 6.65037 7.84332 6.71702 7.61877C6.78368 7.39422 6.89813 7.1877 7.05207 7.01417C7.19794 6.84816 7.3764 6.71577 7.57569 6.62571C7.77499 6.53565 7.99059 6.48997 8.20832 6.49167H12.8333C13.1897 6.48273 13.5381 6.6009 13.8192 6.82607C14.1002 7.05124 14.2967 7.3695 14.375 7.72667C14.375 8.15417 14.5137 8.59751 14.6062 9.025C14.7844 9.85446 15.0214 10.6694 15.3154 11.4633L13.1571 12.5083C12.7861 12.6832 12.4978 13.0021 12.3554 13.395C12.2012 13.7805 12.2012 14.2129 12.3554 14.5983C14.5742 19.4794 18.3945 23.4029 23.1471 25.6817C23.5224 25.84 23.9434 25.84 24.3187 25.6817C24.7013 25.5354 25.0118 25.2393 25.1821 24.8583L26.1533 22.6417C26.9487 22.9395 27.7624 23.1828 28.5891 23.37C28.99 23.465 29.4217 23.5442 29.8379 23.6075C30.1857 23.6879 30.4956 23.8897 30.7148 24.1784C30.934 24.467 31.0491 24.8248 31.0404 25.1908L31.1791 30.0833ZM22.0833 3.16667C21.7287 3.16667 21.3587 3.16667 21.0042 3.16667C20.5953 3.20237 20.217 3.40341 19.9524 3.72558C19.6879 4.04776 19.5588 4.46466 19.5935 4.88459C19.6283 5.30451 19.824 5.69306 20.1377 5.96476C20.4514 6.23645 20.8574 6.36903 21.2662 6.33334H22.0833C24.5366 6.33334 26.8893 7.33423 28.6241 9.11582C30.3588 10.8974 31.3333 13.3138 31.3333 15.8333C31.3333 16.1183 31.3333 16.3875 31.3333 16.6725C31.2991 17.0902 31.4276 17.5048 31.6906 17.8253C31.9536 18.1459 32.3296 18.3463 32.7362 18.3825H32.8596C33.2455 18.3841 33.618 18.237 33.9034 17.9702C34.1889 17.7035 34.3665 17.3364 34.4012 16.9417C34.4012 16.5775 34.4012 16.1975 34.4012 15.8333C34.4012 12.4767 33.104 9.25725 30.7943 6.88225C28.4847 4.50724 25.3516 3.17087 22.0833 3.16667ZM25.1667 15.8333C25.1667 16.2533 25.3291 16.656 25.6182 16.9529C25.9073 17.2499 26.2994 17.4167 26.7083 17.4167C27.1172 17.4167 27.5093 17.2499 27.7984 16.9529C28.0876 16.656 28.25 16.2533 28.25 15.8333C28.25 14.1536 27.6003 12.5427 26.4438 11.355C25.2873 10.1673 23.7188 9.50001 22.0833 9.50001C21.6744 9.50001 21.2823 9.66682 20.9932 9.96375C20.7041 10.2607 20.5417 10.6634 20.5417 11.0833C20.5417 11.5033 20.7041 11.906 20.9932 12.2029C21.2823 12.4999 21.6744 12.6667 22.0833 12.6667C22.9011 12.6667 23.6853 13.0003 24.2636 13.5942C24.8418 14.188 25.1667 14.9935 25.1667 15.8333Z" />
            </svg>
            <p class="text-2xl font-extrabold text-black">Telefon</p>
            <p class="text-base text-gray-900">Bize Telefonla Ulaşın</p>
            <a  href="tel:4440464" class="text-lg font-bold hover:text-red-600">444 0 464</a>
          </div>
          <div class="flex flex-col items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" class="fill-yellow-600">
              <path
                d="M31.7091 15.2475C31.4927 12.9341 30.6966 10.7177 29.3984 8.81412C28.1003 6.91054 26.3443 5.38464 24.3014 4.38503C22.2585 3.38541 19.9984 2.94614 17.7412 3.10998C15.4839 3.27383 13.3065 4.03522 11.4208 5.32C9.8008 6.43252 8.44083 7.89972 7.43858 9.6162C6.43633 11.3327 5.81667 13.2558 5.62413 15.2475C5.43524 17.2261 5.67758 19.2231 6.33355 21.0936C6.98953 22.9641 8.04269 24.6611 9.41663 26.0617L17.5875 34.4692C17.7308 34.6176 17.9013 34.7354 18.0892 34.8157C18.277 34.8961 18.4785 34.9375 18.682 34.9375C18.8856 34.9375 19.0871 34.8961 19.2749 34.8157C19.4628 34.7354 19.6333 34.6176 19.7766 34.4692L27.9166 26.0617C29.2906 24.6611 30.3437 22.9641 30.9997 21.0936C31.6557 19.2231 31.898 17.2261 31.7091 15.2475ZM25.7583 23.8292L18.6666 31.1125L11.575 23.8292C10.5298 22.7557 9.72928 21.4578 9.23081 20.0288C8.73233 18.5997 8.54834 17.075 8.69204 15.5642C8.83668 14.0301 9.31143 12.5482 10.082 11.2256C10.8525 9.90299 11.8996 8.77278 13.1475 7.91666C14.7831 6.80079 16.703 6.20555 18.6666 6.20555C20.6302 6.20555 22.5502 6.80079 24.1858 7.91666C25.4299 8.76947 26.4747 9.89469 27.245 11.2115C28.0154 12.5283 28.4922 14.0039 28.6412 15.5325C28.7896 17.0484 28.6079 18.5793 28.1093 20.0142C27.6107 21.4491 26.8076 22.7522 25.7583 23.8292ZM18.6666 9.5C17.2945 9.5 15.9532 9.91787 14.8124 10.7008C13.6715 11.4837 12.7823 12.5965 12.2572 13.8984C11.7321 15.2003 11.5947 16.6329 11.8624 18.015C12.1301 19.3971 12.7908 20.6667 13.7611 21.6631C14.7313 22.6596 15.9674 23.3382 17.3132 23.6131C18.6589 23.888 20.0538 23.7469 21.3215 23.2076C22.5892 22.6684 23.6726 21.7551 24.4349 20.5834C25.1972 19.4117 25.6041 18.0342 25.6041 16.625C25.6001 14.7366 24.8678 12.9268 23.5677 11.5915C22.2675 10.2562 20.5053 9.50418 18.6666 9.5ZM18.6666 20.5833C17.9043 20.5833 17.1592 20.3512 16.5254 19.9162C15.8916 19.4813 15.3976 18.8631 15.1058 18.1398C14.8141 17.4165 14.7378 16.6206 14.8865 15.8528C15.0352 15.0849 15.4023 14.3796 15.9413 13.826C16.4803 13.2724 17.1671 12.8955 17.9147 12.7427C18.6623 12.59 19.4373 12.6684 20.1416 12.968C20.8458 13.2676 21.4477 13.7749 21.8712 14.4259C22.2947 15.0768 22.5208 15.8421 22.5208 16.625C22.5208 17.6748 22.1147 18.6816 21.3919 19.424C20.6691 20.1663 19.6888 20.5833 18.6666 20.5833Z" />
            </svg>
            <p class="text-2xl font-extrabold text-black">Adres</p>
            <p class="text-base text-gray-900">Tozkoporan, General Ali Rıza Gören Cd. Çırpıpcı Çıkmazı Sok. No: 2 34173</p>
            <a  href="https://maps.app.goo.gl/BquYUMptty6gksZJ7" class="text-lg font-bold hover:text-red-600">Espressolab Adres</a>
          </div>
        </div>
      </div>
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
    <script>
function openNewPage() {
  // Yeni bir pencere açmak için window.open kullanılır.
  // İlk parametre olarak açılacak sayfanın URL'si verilir.
  // İkinci parametre olarak pencerenin adı (opsiyonel) ve
  // üçüncü parametre olarak açılacak pencerenin özellikleri (opsiyonel) verilebilir.
  window.open('http://localhost/phpodevim/urunad%C4%B1.php', '_blank');
}
</script>
     <!-- DERS2 -->


</body>
</html>
