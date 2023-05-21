<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>卡爾卡河<nuxt-link to="/batt">戰役</nuxt-link></h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>卡爾卡河戰役</b>是<nuxt-link to="/batt/Kotyan_Khan"
              >可泰安汗戰役</nuxt-link
            >的第二關。雖然庫曼汗聯合了羅斯公國對抗<nuxt-link to="/civs/Mongols"
              >蒙古人</nuxt-link
            >，聯軍卻仍然徹底被殲滅，<nuxt-link to="/civs/Cumans"
              >庫曼</nuxt-link
            >必須撤離這片土地才有一線生機。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                600<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／950<nuxt-link to="/resource/Food">食物</nuxt-link
                >／500<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／250<nuxt-link to="/resource/Stone">石料</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">150</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Cumans">庫曼人</nuxt-link>（綠色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">
                基輔（紅色）<nuxt-link to="/civs/Slavs">斯拉夫人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家3
              </td>
              <td class="tc6">庫曼部落（青色）庫曼人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">加利西亞沃里尼亞王國（藍色）斯拉夫人</td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">
                韃靼人（黃色）<nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">
                蒙古人（橙色）<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家6
              </td>
              <td class="tc6">速不台（橙色）蒙古人</td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家7
              </td>
              <td colspan="3" class="tc6">蒙古人（橙色）蒙古人</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>可泰安汗、<nuxt-link to="/units/Kipchak">欽察</nuxt-link>x7</dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>可泰安汗必須活著。</li>
              <li>
                找到河對岸的<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>部落。
              </li>
              <li>
                打敗<nuxt-link to="/civs/Tatars">韃靼人</nuxt-link
                >，讓您的人民安全逃亡南方。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                庫曼人只能發展到<nuxt-link to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >，人口上限為150。
              </li>
              <li>您的人民正處於危險中。您應當盡快找到他們。</li>
              <li>
                您可以嘗試與河對岸的<nuxt-link to="/civs/Mongols"
                  >蒙古人</nuxt-link
                >戰鬥，但是您剛剛遭到挫敗，缺乏打敗他們所需的人力或資源。反之，您應當專心打敗<nuxt-link
                  to="/civs/Tatars"
                  >韃靼人</nuxt-link
                >，保護您人民的安全。
              </li>
              <li>
                庫曼人可以在<nuxt-link to="/techs/age/Feudal_Age"
                  >封建時代</nuxt-link
                >建造<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
                >。他們有可能在韃靼人尚未累積夠實力前盡早打敗他們。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                敗在<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link
                >手下後，可泰安汗(1，綠色)帶著一些部下撤回西邊，試圖挽救餘下的庫曼部落(3，青色)。
              </li>
              <li>
                羅斯公國(2，紅色)位於北方。他們的王子不是死了，就是逃往北方，因此無法提供什麼幫助。
              </li>
              <li>
                蒙古人(5，橙色)占領了聶伯河以東的所有領土，正準備跨河。他們的頭領速不台已經抵達，將會監督<nuxt-link
                  to="/civs/Mongols"
                  >蒙古</nuxt-link
                >軍的推進。他會派出大隊<nuxt-link to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >、<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
                >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>。
              </li>
              <li>
                韃靼人(4，黃色)設法趁夜色渡過了河，已在西南方紮營。他們計劃包圍餘下的庫曼部落，從後方發起進攻。可泰安必須阻止他們，否則他們的人民就毫無未來可言。韃靼人會訓練可怕的<nuxt-link
                  to="/units/Keshik"
                  >怯薛</nuxt-link
                >，還有<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                >和<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始可泰安汗和兩國的聯軍戰敗，可泰安汗必須回去庫曼部落，隨後他會得到兩處營地的控制權。此時被告知<nuxt-link
                to="/civs/Tatars"
                >韃靼人</nuxt-link
              >已經在前方建立基地，必須將之消滅才能尋求活路。正常玩就是蓋<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >、發展，然而在蒙古大軍來襲前攻破<nuxt-link to="/civs/Tatars"
                >韃靼</nuxt-link
              >，但如果在封建時代就擊敗韃靼人則會獲得成就「庫曼傾巢而動」。
            </li>
            <li>
              成就打法如下：快速建立一個<nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >並生產<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >，然後所有的<nuxt-link to="/units/Villager">村民</nuxt-link
              >都去伐木，食物拿來生<nuxt-link to="/units/Militia"
                >民兵</nuxt-link
              >駐紮在<nuxt-link to="/units/Battering_Ram">衝車</nuxt-link
              >內、或是生<nuxt-link to="/units/Scout_Cavalry"
                >斥侯騎兵</nuxt-link
              >提升戰力。在此同時利用可泰安汗盡可能將韃靼的兵引給下方的青色盟友打，尤其是兩個城鎮中心的兵一定都要引開。
            </li>
            <li>
              摧毀第一個城鎮中心後，先火速往第二個城鎮中心的方向發進，馬弓隊在圍牆果樹外設堅守原地射村民不要讓他們採果樹，如果有看到種田的就叫可泰安汗去干擾，等衝車來再一起摧毀城鎮中心。由於敵人在升上城堡時代前不會造兵，因此把這兩座城鎮中心在升<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >前摧毀後就贏一大半了。剩下就是把村民殺一殺，然後把包含兩座<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >的軍事<nuxt-link to="/building">建築</nuxt-link>推掉後就能過關。
            </li>
          </ul>
          <h3>芝麻小事</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關地形和同盟位置上一關幾乎一模一樣，只差在於季節的不同，上一關是雪地兒這一關是草原。
            </li>
            <li>
              本關的內容大致上就是<nuxt-link to="/batt/Genghis_Khana"
                >成吉思汗</nuxt-link
              >「<nuxt-link to="/batt/The_Horde_Rides_West">策馬西征</nuxt-link
              >」中，位於北側的速不台軍隊掃蕩庫曼部落和俄羅斯的詳細場景。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰旗飄揚</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Kotyan_Khan/The_Battle_at_the_Kalka_River_map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Kotyan_Khan">可泰安汗</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              可泰安汗第一章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Raising_the_Banners">戰旗飄揚</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Saving_the_Huts">拯救棚屋</nuxt-link>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
