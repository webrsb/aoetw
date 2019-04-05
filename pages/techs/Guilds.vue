<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>行會制度</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>行會制度</b>在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在<nuxt-link to="/building/Market">市集</nuxt-link>研發。
          </p>
          研究完成後，將<nuxt-link to="/building/Market">市集</nuxt-link
          >裡商品交易費用從30%->15%，簡單來說，玩家在買賣資源時成本更低，收益更高。
          <p>
            隨著遊戲的進行，地圖上的資源會慢慢耗盡，這時這項<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >會相當有用處，因為這意味著玩家在出售多於資源時會獲得較多的收益，反之在購買資源時所花費也會較低。
          </p>
        </div>
        <h3>文明可研發與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <i class="fas fa-check" style="color: green;"></i
                ><span class="okcc" style="margin-left: 2px;">可研發</span>
              </h4>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >、<nuxt-link to="/civs/Britons">不列顛</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Goths">哥德</nuxt-link>、<nuxt-link
                to="/civs/Huns"
                >匈奴</nuxt-link
              >、<nuxt-link to="/civs/Incas">印加</nuxt-link>、<nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
                to="/civs/Koreans"
                >韓國</nuxt-link
              >、<nuxt-link to="/civs/Malay">馬來</nuxt-link>、<nuxt-link
                to="/civs/Malians"
                >馬利</nuxt-link
              >、<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >、<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >、<nuxt-link to="/civs/Teutons">條頓</nuxt-link>、<nuxt-link
                to="/civs/Turks"
                >土耳其</nuxt-link
              >、<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <i class="fas fa-times" style="color: #d9534f;"></i
                ><span class="nocc" style="margin-left: 2px;">不可研發</span>
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >、<nuxt-link to="/civs/Khmer">高棉</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、<nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >:無法研發這項科技，但在遊戲開始時便擁有交易費用只需要5%的這項<nuxt-link
                to="/civs"
                >文明</nuxt-link
              >加成。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">行會制度</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Guilds.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <nuxt-link to="/building/Market">市集</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">交易費用降低至15%</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
