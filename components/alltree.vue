<template>
    <div class="des col-md-12">
      <div class="row">
        <div class="des col-md-3">
            <div style=" font-size: 22px; font-weight: bold; text-align: center;">目錄</div>
        </div>
        <div class="des col-md-9">
            <div style=" font-size: 22px; font-weight: bold; text-align: center; ">各文明科技樹
            <div style="text-align: right;">
                <button id="hide" class="btn btn-danger btn-sm" v-show="show" @click="show=false">隱藏</button>
                <button id="show" class="btn btn-success btn-sm" v-show="!show" @click="show=true">展開</button>
            </div>
            </div>
        </div>
      </div>
        <div id="list" v-show="show" class="row">
            <div class="des col-md-3">
            <ul class="ult">
                <li><nuxt-link to="#軍營">軍營</nuxt-link></li>
                <li><nuxt-link to="#射箭場">射箭場</nuxt-link></li>
                <li><nuxt-link to="#馬廄">馬廄</nuxt-link></li>
                <li><nuxt-link to="#攻城器製造所">攻城器製造所</nuxt-link></li>
                <li><nuxt-link to="#城堡">城堡</nuxt-link></li>
                <li><nuxt-link to="#碼頭">碼頭</nuxt-link></li>
                <li><nuxt-link to="#兵工廠">兵工廠</nuxt-link></li>
                <li><nuxt-link to="#市集">市集</nuxt-link></li>
                <li><nuxt-link to="#修道院">修道院</nuxt-link></li>
                <li><nuxt-link to="#學院">學院</nuxt-link></li>
            </ul>
            </div>
            <div class="des col-md-9">
            <div>
                <table class="table-bordered allciv" width="100%" style="margin:0px 0px 20px 0px;">
                <tr>
                    <td class="unit3 treetd">亞洲</td>
                    <td class="unit4"><div id="banner"> <a href="chi.php">中國</a> <a href="jap.php">日本</a> <a href="mon.php">蒙古</a> <a
                    href="kor.php">韓國</a> <a href="ind.php">印度</a> <a href="byz.php">拜占庭</a> <a href="pre.php">波斯</a> <a
                        href="ber.php">柏柏</a> <a href="sar.php">薩拉森</a> <a href="tur.php">土耳其</a> <a href="bur.php">緬甸</a> <a
                        href="khm.php">高棉</a> <a href="mal.php">馬來</a> <a href="vie.php">越南</a> </div></td>
                </tr>
                <tr>
                    <td class="unit3 treetd">歐洲</td>
                    <td class="unit4">
                    <div id="banner"> <a href="bri.php">不列顛</a> <a href="cel.php">賽爾特</a> <a href="fra.php"> 法蘭克</a> <a
                        href="spa.php">西班牙</a> <a href="got.php">哥德</a> <a href="teu.php">條頓</a> <a href="vik.php">維京</a> <a
                        href="hun.php">匈奴</a> <a href="ita.php">義大利</a> <a href="mag.php">馬札爾</a> <a href="sla.php">斯拉夫</a> <a
                            href="por.php">葡萄牙</a> </div></td>
                </tr>
                <tr>
                    <td class="unit3 treetd">美洲 <br/>
                    非洲</td>
                    <td class="unit4"><div id="banner"> <a href="azt.php">阿茲特克</a> <a href="may.php">馬雅</a> <a href="inc.php">印加</a> <a
                    href="eth.php">衣索比亞</a> <a href="mai.php">馬利</a> </div></td>
                </tr>
                </table>
            </div>
        </div>
      </div>
    </div>
</template>
<script>
export default {
  data () {
      return {
          show: true
      }
  },
  components: {
  }
}
</script>
<style>
.treetd{
    background: #ccc;
    font-weight: bold;
    border: 1px solid;
    text-align: right;
    padding: 5px;
}

#banner a::after {
    content: " · ";
    font-weight: bold;
    color: #373a3c;
}
</style>
