<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>魚類</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>魚類</b>是遊戲中重要的<nuxt-link to="/resource/Food"
              >食物</nuxt-link
            >來源，通常比種田、採集還要來的有效率，且不會腐敗，重點<nuxt-link
              to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >是額外的工作單位，經濟會比純<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >的經濟來的好。早期臺灣的<nuxt-link to="/maps/Continental"
              >大陸</nuxt-link
            >地圖禁封海曾經流行過一陣子。
          </p>

          <p>
            <nuxt-link to="/maps/Islands">島嶼</nuxt-link>、遊牧與<nuxt-link
              to="/maps/Highland"
              >高原</nuxt-link
            >等有海的地圖，魚類都是很重要的，所以海上也是兵家必爭之地，而誰先破壞了對方的漁船，也就在遊戲中搶得了先機。
          </p>
          <p>
            <nuxt-link to="/civs/Japanese">日本</nuxt-link
            >是漁船捕魚最有效率的<nuxt-link to="/civs">文明</nuxt-link
            >，<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link>/<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建</nuxt-link
            >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link>/<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >各快5％、10％、15％、20％，而<nuxt-link to="/civs/Indians"
              >印度</nuxt-link
            >則是捕魚的村民速度提高15％，攜帶量+15。
          </p>
        </div>
        <h3>魚類列表</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>沿岸魚群</strong
              >:200食物，通常在岸邊就可以找到，所以可以透過村民收集，漁船也可以，但收集食物的速度比深海魚慢些。
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>鯛魚</strong
              >:225食物，遊戲中常見的魚，多數出現在<nuxt-link to="/maps/Coastal"
                >沿海</nuxt-link
              >地圖。
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>金槍魚</strong>:225食物
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>鮭魚</strong>:225食物，深海魚類。
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>鱸魚</strong
              >:200食物，遊戲中最稀少的魚類，在大陸、<nuxt-link
                to="/maps/Nile_Delta"
                >尼羅河三角洲</nuxt-link
              >與<nuxt-link to="/maps/Salt_Marsh">鹽沼地</nuxt-link>出現。
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>劍魚</strong>:225食物
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>馬林魚</strong
              >:350食物，最多食物來源的魚類，通常都遠離陸地。
            </li>
            <li>
              <img
                src="~assets/Dolphin.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>海豚</strong>:350食物，失落的帝國登場，原本在<nuxt-link
                to="/games/aok"
                >帝王世紀</nuxt-link
              >就會登場，但為了爭議，被取消了。
            </li>
            <li>
              <img
                src="~assets/FishAOEIIicon.png"
                width="22"
                style="margin-right: 5px;"
                alt=""
              /><strong>箱龜</strong
              >:200食物，與沿岸魚群一樣，於岸邊可以捕獲，村民可以採收，通常出現在亞洲地圖上。
            </li>
          </ul>
        </div>
        <h3>瑣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>箱龜是遊戲內唯一可以吃的爬蟲類動物。</li>
            <li>鱸魚是淡水魚種，但會出現在鹽沼地並不合理。</li>
            <li>海豚和箱龜其實都不是魚類。</li>
            <li>
              馬林魚的原形應該是<a
                href="http://tinyurl.com/jrcq84j"
                target="_blank"
                >大西洋藍槍魚</a
              >。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <img src="~assets/Shore_Fish_AoEII.jpg" alt="" />
            <p>一群村民正在捕魚</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                魚類
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/FishAOEIIicon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">肉量</td>
            <td class="unit4">請看列表</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allanimal' })

export default {
  components: {}
}
</script>
<style></style>
