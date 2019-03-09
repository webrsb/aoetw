<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>穆斯林學墊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>穆斯林學墊</b>是<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >如果死亡會返還33<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森人</nuxt-link
              >有優異的僧侶和全滿的<nuxt-link to="/building/Monastery"
                >修道院</nuxt-link
              >。因此很常使用僧侶作進攻。僧侶無論在快攻或在後方支援部隊時常會成為敵人的首要目標，所以若進攻不成常會對經濟有很大影響。然而<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >研發穆斯林學墊後仍可取回部分用於創造僧侶的黃金，在經濟上可謂不無小補。但還是盡量讓僧侶保持在安全的位置<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >敵人和支援部隊才是上上之策。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速穆斯林學墊的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            Madrasah的意思是阿拉伯語中的“學校”，寫成“مدرسة”。
            在就學之前，阿拉伯人會在清真寺和<nuxt-link to="/building/Monastery"
              >修道院</nuxt-link
            >學習關伊斯蘭教以及阿拉伯語的知識。儘管升級頭銜與目的之間缺乏聯繫，但也可以解釋為升級成為伊瑪姆的僧侶可以扮演老師的角色。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                穆斯林學墊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">30秒</td>
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
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">僧侶如果死亡會返還33黃金。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
