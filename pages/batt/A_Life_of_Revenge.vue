<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>復仇的人生</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>復仇的人生</b>為<nuxt-link to="/batt/Genghis_Khana"
              >成吉思汗(戰役)</nuxt-link
            >的第二關劇情關卡，此關描述<nuxt-link to="/units/hero/Genghis_Khan"
              >成吉思汗</nuxt-link
            >部族於1218年，為了要消除滅人西遼勢力<nuxt-link
              to="/units/hero/Kushluk"
              >屈出律</nuxt-link
            >的故事。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代:</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                400<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >，200<nuxt-link to="/resource/Food">食物</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p8"></div>玩家1</td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>（橘色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2"></div>玩家2</td>
              <td class="tc6">
                加拉凱台（紅色）<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
              </td>
              <td class="tc6"><div class="p3"></div>玩家3</td>
              <td class="tc6">屈出律 （綠色）蒙古</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4"></div>玩家4</td>
              <td class="tc6">泰依齊烏特人（黃色）蒙古 敵對</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位:</dt>
            <dd>
              5位<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、2位<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
              >、4位<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>。
            </dd>
            <dt>大地之母單位:</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                殺掉屈出律這個叛徒。以免成吉思汗的營帳(<nuxt-link
                  to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >)受到破壞。
              </li>
            </ol>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                為「說服」泰依齊烏特<nuxt-link to="/units/Villager"
                  >村民</nuxt-link
                >加入你的陣營，首先，你必須先殺掉他們所有的士兵。既然加拉凱台人對<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >不甚熟悉，那麼建造<nuxt-link to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >將會是一項威力強大的防禦武力。
              </li>
              <li>注意：在此關玩家蒙古人無法建造攻城武器。</li>
            </ul>
            <h2>芝麻小事</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  本頁面保留原版翻譯的部落名稱，HD版目前漢化名稱比較:加拉凱台→西遼，泰依齊烏特→泰赤烏，闊實魯→屈出律。
                </li>
                <li>歷史上，屈出律是西遼最後的統治者。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                復仇的人生
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/A_life_of_revenge.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/Genghis_Khana">成吉思汗</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">蒙古人</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">帝王世紀第四章之二</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Crucible">嚴酷的考驗</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Into_China">進入中國</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由裕暉，竺叡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
