<template>
  <div class="des col-md-12">
    <div class="row">
      <div class="des col-md-3">
        <div style=" font-size: 22px; font-weight: bold; text-align: center;">
          目錄
        </div>
      </div>
      <div class="des col-md-9">
        <div style=" font-size: 22px; font-weight: bold; text-align: center; ">
          各文明科技樹
          <div style="text-align: right;">
            <button
              id="hide"
              class="btn btn-danger btn-sm"
              v-show="show"
              @click="show = false"
            >
              隱藏
            </button>
            <button
              id="show"
              class="btn btn-success btn-sm"
              v-show="!show"
              @click="show = true"
            >
              展開
            </button>
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
          <table
            class="table-bordered allciv"
            width="100%"
            style="margin:0px 0px 20px 0px;"
          >
            <tr>
              <td class="unit3 treetd">亞洲</td>
              <td class="unit4">
                <div id="banner">
                  <a href="/tree/chi">中國</a> <a href="/tree/jap">日本</a>
                  <a href="/tree/mon">蒙古</a> <a href="/tree/kor">韓國</a>
                  <a href="/tree/ind">印度</a> <a href="/tree/byz">拜占庭</a>
                  <a href="/tree/pre">波斯</a> <a href="/tree/ber">柏柏</a>
                  <a href="/tree/sar">薩拉森</a> <a href="/tree/tur">土耳其</a>
                  <a href="/tree/bur">緬甸</a> <a href="/tree/khm">高棉</a>
                  <a href="/tree/mal">馬來</a> <a href="/tree/vie">越南</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3 treetd">歐洲</td>
              <td class="unit4">
                <div id="banner">
                  <a href="/tree/bri">不列顛</a> <a href="/tree/cel">賽爾特</a>
                  <a href="/tree/fra"> 法蘭克</a> <a href="/tree/spa">西班牙</a>
                  <a href="/tree/got">哥德</a> <a href="/tree/teu">條頓</a>
                  <a href="/tree/vik">維京</a> <a href="/tree/hun">匈奴</a>
                  <a href="/tree/ita">義大利</a> <a href="/tree/mag">馬札爾</a>
                  <a href="/tree/sla">斯拉夫</a> <a href="/tree/por">葡萄牙</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3 treetd">
                美洲 <br />
                非洲
              </td>
              <td class="unit4">
                <div id="banner">
                  <a href="/tree/azt">阿茲特克</a> <a href="/tree/may">馬雅</a>
                  <a href="/tree/inc">印加</a> <a href="/tree/eth">衣索比亞</a>
                  <a href="/tree/mai">馬利</a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      show: true
    }
  },
  components: {}
}
</script>
<style>
.treetd {
  background: #ccc;
  font-weight: bold;
  border: 1px solid;
  text-align: right;
  padding: 5px;
}

#banner a::after {
  content: ' · ';
  font-weight: bold;
  color: #373a3c;
}
</style>
