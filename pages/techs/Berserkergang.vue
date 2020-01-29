<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>狂戰士幫</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>狂戰士幫</b>是<nuxt-link to="/civs/Vikings">維京</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
            >回血速度提升(每分鐘20HP變為每分鐘40HP)。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              狂戰士幫讓狂戰士在戰場上即使沒有<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >在後方支援還是能撐相當長的一段時間。如果操作得宜，玩家可用狂戰士以非常少的損失對對手造成巨大傷害。
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
              >能夠加速狂戰士幫的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為500F/850G。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>成本從500F/850G變為850F/400G。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            狂戰士，berserk 此字的由來意指「披熊皮者」，由ber"熊" 與 serk"衣衫"
            組成。後來意思轉變，成為具有異常力量，在發怒時，可以進入出神的狂暴狀態，可以不著鎧甲就迎向敵人進行戰鬥的勇士。
          </p>
          <p>
            傳說狂戰士因為蒙受戰神奧丁的神力加持而具有特殊的狂戰體質，平時力量雖和一般戰士無異，但是在危急時能夠進入無我的狂暴狀態，稱為「狂戰士之怒」（Berserker
            Rage），突然湧出如熊又如狼般的勇猛力量，在戰場上大發神威。
          </p>
          <p>
            傳說狂戰士甚至可以不穿甲冑也不持武器，僅身披熊皮或狼皮便以狂暴之姿衝鋒陷陣，徒手殺死敵人或把敵人的喉嚨咬破。13世紀的冰島史學家斯諾里·斯蒂德呂松曾經如此描述：「哈拉爾一世（Harald
            I）的禁軍中有狂戰士，即使用武器也傷不了他們」。但狂戰士在狂戰士之怒消退後會立刻陷入虛脫的狀態。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">狂戰士幫</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
                  class="img-fluid"
                  alt=""
                />
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
            <td class="unit4">維京</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">帝王時代</td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">城堡</td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
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
            <td class="unit4">850</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">狂戰士回血速度提升。</td>
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
