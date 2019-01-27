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
                  <nuxt-link to="/tree/chi">中國</nuxt-link> <nuxt-link to="/tree/jap">日本</nuxt-link>
                  <nuxt-link to="/tree/mon">蒙古</nuxt-link> <nuxt-link to="/tree/kor">韓國</nuxt-link>
                  <nuxt-link to="/tree/ind">印度</nuxt-link> <nuxt-link to="/tree/byz">拜占庭</nuxt-link>
                  <nuxt-link to="/tree/pre">波斯</nuxt-link> <nuxt-link to="/tree/ber">柏柏</nuxt-link>
                  <nuxt-link to="/tree/sar">薩拉森</nuxt-link> <nuxt-link to="/tree/tur">土耳其</nuxt-link>
                  <nuxt-link to="/tree/bur">緬甸</nuxt-link> <nuxt-link to="/tree/khm">高棉</nuxt-link>
                  <nuxt-link to="/tree/mal">馬來</nuxt-link> <nuxt-link to="/tree/vie">越南</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3 treetd">歐洲</td>
              <td class="unit4">
                <div id="banner">
                  <nuxt-link to="/tree/bri">不列顛</nuxt-link> <nuxt-link to="/tree/cel">賽爾特</nuxt-link>
                  <nuxt-link to="/tree/fra"> 法蘭克</nuxt-link> <nuxt-link to="/tree/spa">西班牙</nuxt-link>
                  <nuxt-link to="/tree/got">哥德</nuxt-link> <nuxt-link to="/tree/teu">條頓</nuxt-link>
                  <nuxt-link to="/tree/vik">維京</nuxt-link> <nuxt-link to="/tree/hun">匈奴</nuxt-link>
                  <nuxt-link to="/tree/ita">義大利</nuxt-link> <nuxt-link to="/tree/mag">馬札爾</nuxt-link>
                  <nuxt-link to="/tree/sla">斯拉夫</nuxt-link> <nuxt-link to="/tree/por">葡萄牙</nuxt-link>
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
                  <nuxt-link to="/tree/azt">阿茲特克</nuxt-link> <nuxt-link to="/tree/may">馬雅</nuxt-link>
                  <nuxt-link to="/tree/inc">印加</nuxt-link> <nuxt-link to="/tree/eth">衣索比亞</nuxt-link>
                  <nuxt-link to="/tree/mai">馬利</nuxt-link>
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
