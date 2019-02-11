<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>狂猴</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            狂猴是世紀帝國二：征服這入侵的作弊單位。此單位是一隻猴子，以四肢四處走動，
            一隻手攻擊目標。可以通過僅僅幾次揮動手來摧毀建築物，惟使用有限，因為他
            在死亡之前只能攻擊9次。缺點：他很慢。他也可以在地圖編輯器中找到。
          </p>
          <p>狂猴不能乘坐運輸船。</p>
        </div>
        <h3>外觀</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在被遺忘的王朝戰役中(Prithviraj)出現了三隻狂猴，他們實際上是玩家必須射擊的三個“玩偶”。若玩家
            選擇了與古魯相遇，他們必須在9秒內拍攝才能掌握 “盲目的拍攝藝術”。
          </p>
          <p>狂猴是Yodit戰役的歡迎家庭場景中的可玩角色。</p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <div class="unititle">
              <img src="~assets/Furiousthemonkeyboy.png" width="250" alt="" />
              <p>一群狂猴</p>
            </div>
          </ul>
          <div class="hrn1"></div>
          <div class="n1"></div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">
                狂猴
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Furiousthemonkeyboyicon.png"
                  width="45"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Civilian">平民</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">資料片</td>
            <td class="unit4">征服者戰役</td>
          </tr>
          <tr>
            <td class="unit3">作弊碼</td>
            <td class="unit4">furious the monkey boy</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">99近戰</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td>+999對 <nuxt-link to="/building">建築</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">攻擊間隔</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">99</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">99</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.99</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">12</td>
          </tr>
        </table>

        <div class="thanks"></div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
