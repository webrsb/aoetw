<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>自走遺跡</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            在《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》中， “
            <b>自走遺跡</b
            >”是一個單位。它僅在地圖編輯器中可用。與普通的文物不同，它們不必由<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >拾起，但可以自行移動。任何玩家都可以獲得該物品車，類似於世紀帝國I，神器或紀念碑。它不能存放在<nuxt-link
              to="/building/Monastery"
              >修道院</nuxt-link
            >裡。遺物車不能以任何方式被毀壞或損壞，但可以裝載在<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >上。
          </p>
          <p>
            一个文物车出现在<nuxt-link to="/civs/Malians">馬利</nuxt-link
            >殘廢王子<nuxt-link to="/batt">戰役</nuxt-link
            >的第二个场景，即“蝎子的刺”，代表馬利殘廢王子的猴面包树棒。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                自走遺跡
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Reliccarticon.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">無<br /></td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.66</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">1</td>
          </tr>
        </table>

        <div class="thanks"></div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alledmap' })

export default {
  components: {}
}
</script>
<style></style>
