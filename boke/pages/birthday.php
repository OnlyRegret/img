<?php
/**
 * Template name: vxras-生日祝福
 * Description:   birthday page
 */
 get_header(); ?>
<style>
.vxras-col-24 {
    display: none;
}
body {background: none;}
</style>
<script src="https://xn--wgvv25a.vxras.com/sweetalert2.all.min.js"></script>
<link href="https://xn--wgvv25a.vxras.com/style.css" rel="stylesheet" type="text/css" />
<script src="https://xn--wgvv25a.vxras.com/index.umd.js"></script>
  <audio src="https://xn--wgvv25a.vxras.com/hbdfb.mp3" id="linkmp3" class="sembunyi"></audio>
  <div id="bodyblur">
  <img id="wallpaper" />
    <div id="beneranblur"></div>
  </div>

  <div id='Content'>

    <div id="kadoIn">
      <!-- Tombol Surat --><img src="https://xn--wgvv25a.vxras.com/vxras/kado.png" />
    </div>
    <p id="ket">点击查收你的惊喜!</p>

    <div class="kumpulanstiker">
      <!-- Stiker untuk Konten -->
      <img src="https://xn--wgvv25a.vxras.com/vxras/bunga.gif" id="fotostiker" />
      <img src="https://xn--wgvv25a.vxras.com/vxras/pusn.gif" id="fotostiker1" />
      <img src="https://xn--wgvv25a.vxras.com/vxras/pandacoklat.gif" id="fotostiker2" />
      <img src="https://xn--wgvv25a.vxras.com/vxras/cilukba.gif" id="fotostiker3" />
      <img src="https://xn--wgvv25a.vxras.com/vxras/pandakuning.gif" id="fotostiker4" />
      <img src="https://xn--wgvv25a.vxras.com/vxras/emawh.gif" id="fotostiker5" />

      <img src="https://xn--wgvv25a.vxras.com/vxras/pandacoklat.gif" id="fotostiker6" />
    </div>

    <p id="halo" class="halo"></p>

    <div>
      <blockquote id='bq' data-text='来自初一'>
        <p id="kalimat">我有东西要给你看看 🤣🎉</p>

        <p id="pesan1">请点击下方四个蛋糕! 😆🎉</p>
        <div id="kolombaru">
          <li id="lv1">🎂</li>
          <li id="lv2">🎂</li>
          <li id="lv3">🎂</li>
          <li id="lv4">🎂</li>
        </div>

        <p id="pesan2">等会...</p>
        <!-- Pesan -->
        <p id="pesan3">唔.. 今天是什么日子 🤣🎉</p>
        <p id="pesan4">生日快乐, </p>
        <p id="pesan5" class="gaya2">你看起来又长大一岁</p>
        <p id="pesan6" class="gaya2">万岁！你是今天的小主😆🎉</p>
        <p id="pesan7" class="gaya2">今天的一切都由你说了算哦～</p>

        <p id="pesan8" class="gaya2">在新的一年里</p>
        <p id="pesan9" class="gaya2">希望你，平安喜乐，暴富暴瘦</p>
        <p id="pesan10" class="gaya2">生日快乐!! 🥳</p>

        <!-- Tombol Lanjut -->
        <p id="opsL">单击以继续</p>
      </blockquote>
    </div>

    <!-- Tombol Kirim Pesan -->
    <div id="Tombol"><a id="By">&#128140; 继续</a></div>

    <!-- Pesan Tambahan -->
    <p id="katatambahan" class="sembunyi">手慢了，红包抢完了！ 😜</p>

    <!-- Pesan Ditolak -->
    <div id="pesanditolak">
      <img id="stikerditolak" src="https://xn--wgvv25a.vxras.com/vxras/weee.gif" />
      <p id="kataditolak">这里也什么都没有！ 😜</p>
    </div>

  </div>

  <script>
    const body = document.querySelector("body");
    const swalst = Swal.mixin({
      timer: 2300,
      allowOutsideClick: false,
      showConfirmButton: false,
      timerProgressBar: true,
      imageHeight: 90,
    });
    audio = new Audio('' + linkmp3.src);
    ftganti = 0;
    fungsi = 0;
    fungsiAwal = 0;
    deffotostiker = fotostiker.src;

    function berjatuhan() {
      const heart = document.createElement("div");
      heart.className = "fas fa-snowflake";
      heart.style.left = (Math.random() * 90) + "vw";
      heart.style.animationDuration = (Math.random() * 3) + 2 + "s";
      body.appendChild(heart);
    }
    setInterval(function name(params) {
      var heartArr = document.querySelectorAll(".fa-snowflake");
      if (heartArr.length > 100) {
        heartArr[0].remove()
      }
    }, 100);
    Content.style = "opacity:1;margin-top:16vh";
    const swals = Swal.mixin({
      allowOutsideClick: false,
      cancelButtonColor: '#FF0040',
      imageHeight: 80,
    });

    document.getElementById("kadoIn").onclick = function () {
      if (fungsiAwal == 0) {
        audio.play();
        fungsiAwal = 1;
        kadoIn.style = "transition:all .8s ease;transform:scale(10);opacity:0";
        wallpaper.style = "transform: scale(1.5);";
        ket.style = "display:none";
        setTimeout(initengahan, 300);
        setTimeout(inipesan, 500)
      }
    }

    async function inipesan() {
      var {
        value: nama
      } = await swals.fire({
        title: '输入您的姓名',
        input: 'text',
      });
      if (nama && nama.length < 11) {
        window.nama = nama;
        vketikhalo = "Hi, " + nama + " ✨";
        mulainama();
      } else {
        await swals.fire('提示!', '名称不能为空或超过10个字符!');
        inipesan();
      }
    }

    //Variable Pertanyaan Akhir
    var tanya = '想要红包？😶🎁';
    var opstanya = '还是惊喜？ 😆';
    var tompositif = '红包';
    var tomnegatif = '惊喜';

    async function menuju() {
      pesanwhatsapp = "今天是 " + nama + " 的生日 ><";
      await swals.fire('OK!', '初一小盏祝愿你在新的一年里开开心心!', 'success');
    //   window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;
    window.location = "https://www.vxras.com/";
    }
  </script>
  <script src="https://xn--wgvv25a.vxras.com/script.js"></script>
<?php
get_footer();