<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>科摩多巨蜥</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>科摩多巨蜥</b
            >是一種食肉動物，牠會主動攻擊玩家的單位。由<nuxt-link
              to="/games/aor"
              >王者崛起</nuxt-link
            >引入，牠是世界上最大的蜥蜴物種，存在於東南亞地區。科摩多巨蜥是幾種會攻擊玩家的動物之一，牠身上沒有<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >來源，牠打的贏沒有<nuxt-link to="/techs/Loom">織布技術</nuxt-link
            >的<nuxt-link to="/units/Villager">村民</nuxt-link>。
          </p>
          <img src="~assets/KomodoPair.png" alt="" />
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                科摩多巨蜥
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/KomodoIcon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>量
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">25</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的科摩多巨蜥
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a href="http://tinyurl.com/ybolosnk" target="_blank"
                    >科摩多巨蜥</a
                  ></b
                ></i
              >
            </div>
          </div>
        </div>
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
