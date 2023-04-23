<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>野豬</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>野豬</b>在遊戲初期是豐富的<nuxt-link to="/resource/Food"
              >食物</nuxt-link
            >來源(340肉)，但牠75的<nuxt-link to="/elements/Hit_points"
              >血量</nuxt-link
            >與7的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
            >讓狩獵牠不像獵<nuxt-link to="/units/animal/Deer">鹿</nuxt-link
            >那樣簡單。通常需要一群<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >
            合力獵捕。可以使用一位村民朝野豬射兩箭後<nuxt-link
              to="/units/animal/Wild_Horse"
              >馬</nuxt-link
            >上往<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >跑，將野豬引誘到城鎮中心跟其他村民一起殺掉牠。厲害的玩家甚至可以用<nuxt-link
              to="/units/Scout_Cavalry"
              >斥侯</nuxt-link
            >偷敵方家的豬，只是這需要極大的控制力，野豬對斥侯還有<nuxt-link
              to="/units/Eagle_Warrior"
              >鷹勇士</nuxt-link
            >有額外攻擊加成，所以控不好會白白送掉一個單位。野豬如果被村民以外的單位殺掉就無法蒐集牠的肉。
          </p>
          野豬大小事:
          <ul>
            <li>
              野豬平常移動速度是0.8，憤怒時候是1。<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >斥侯移動速度是1.2，<nuxt-link
                to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >移動速度是1.1，村民移動速度是0.8。
            </li>
            <li>
              Javelina是野豬在<nuxt-link to="/maps/Cenotes">岩坑池</nuxt-link
              >的美洲版本，只是名字不一樣而已。
            </li>
            <li>
              <nuxt-link to="/units/animal/Iron_Boar">鐵野豬</nuxt-link
              >是野豬的強化版本，擁有350的血量，出現在<nuxt-link
                to="/batt/Attila_the_Huna"
                >阿提拉戰役</nuxt-link
              >第一關，當時貝里達邀請<nuxt-link to="/units/hero/Attila_the_Hun"
                >阿提拉</nuxt-link
              >一起狩獵鐵野豬。
            </li>
          </ul>
        </div>
        <h3>介紹影片</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <iframe
            width="100%"
            height="315"
            src="https://www.youtube.com/watch?v=N-10piMe8g8"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
          <iframe
            width="100%"
            height="315"
            src="https://www.youtube.com/watch?v=75CueM9-L-I"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Wild_Boar_chasing.png" alt=""
              /></gallery>
              <p><em>憤怒的野豬正追著村民。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Wild_Boar_butchered.png"
                  alt=""
              /></gallery>
              <p><em>村民正蒐集野豬肉。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                野豬
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Iron-boar-icon-aoe2.jpg" width="80" alt="" />
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
            <td class="unit4">340</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由進銘協助編輯</div>
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
