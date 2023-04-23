<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>空外套</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>空外套</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/Edward_Longshanks"
              >長腿愛德華</nuxt-link
            >的第四關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                1000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >/1000<nuxt-link to="/resource/Food">食物</nuxt-link
                >/700<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >/300<nuxt-link to="/resource/Stone">石料</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">175</td>
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
                <nuxt-link to="/civs/Britons">不列顛人</nuxt-link>（紅色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家2
              </td>
              <td class="tc6">貝里克（灰色）塞爾特人</td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">貝里克駐軍（綠色）塞爾特人</td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家4
              </td>
              <td colspan="3" class="tc6">蘇格蘭軍隊（藍色）塞爾特人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6">
                斯康（黃色）塞爾特人
              </td>
            </tr>
          </table>

          <br />

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>打敗駐軍，占領貝里克。</li>
              <li>準備好應對蘇格蘭軍隊的進攻。</li>
              <li>打敗蘇格蘭軍隊。</li>
              <li>
                奪取命運石（<nuxt-link to="/Relic">聖物</nuxt-link
                >），打擊蘇格蘭軍隊的士氣。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華國王的人口上限為175人，仍無法建造<nuxt-link
                  to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >。由於深陷敵方領地且地形崎嶇，英格蘭人也無法建造<nuxt-link
                  to="/building/Stone_Wall"
                  >石牆</nuxt-link
                >。
              </li>
              <li>
                貝里克的<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
                >十分堅固，需要強大的部隊和<nuxt-link to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >才能攻破。
              </li>
              <li>
                要膽大心細。長遠看來，迅速攻佔貝里克可以讓軍事更容易，但如果做出超出您目前能力的嘗試而失敗的話，您將被蘇格蘭軍隊擊垮。
              </li>
              <li>福斯河上只有一座橋。您可以嘗試控制住橋。</li>
              <li>命運石是蘇格蘭皇室的象徵，奪取它可以大大打擊敵人的士氣。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華國王（1，紅色）已經抵達了蘇格蘭，並在南邊建立了營地。
              </li>
              <li>
                繁榮的貝里克城（2，灰色）位於東邊，它的駐軍（3，綠色）實力強勁，包含<nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >、劍兵和<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>。
              </li>
              <li>
                強大的蘇格蘭軍隊（4，藍色）在福斯灣北部和西北部紮營。他們引以為傲的<nuxt-link
                  to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                >和<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                  >攻城武器</nuxt-link
                >對於任何入侵者來說都頗具威脅。
              </li>
              <li>
                斯康<nuxt-link to="/building/Monastery">修道院</nuxt-link
                >（5，黃色）坐落於北邊，由一支小規模的部隊象徵性地駐防。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始會有30分鐘的時間發展，30分鐘一到後蘇格蘭就會進攻，標準難度貝里克城不會主動出擊，因此可以選擇主動進攻或先集中應對於蘇格蘭的攻勢。但高難度下會主動迎擊故本營的守備亦不能忽視，大約過了15分就會有一大群<nuxt-link
                to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >從東北方攻進來，因此先在淺灘側附近蓋<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >，將兵力配置在該處配合城堡迎擊。等到蘇格蘭進攻的倒數計時剩下十分鐘後，就要準備應對蘇格蘭的進攻，先在蘇格蘭<nuxt-link
                to="/building/Outpost"
                >哨站</nuxt-link
              >那側蓋<nuxt-link to="/building/Castle">城堡</nuxt-link
              >，並在那集結大部份的軍力。本營也要留一些軍隊防守。
            </li>
            <li>
              時間一到後蘇格蘭那側的橋就會修好並且發動進攻，規模不大，配合城堡反擊後就攻入蘇格蘭營地，期間有任務要奪取命運石，在北方黃色的<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >裡，將其收進自己的修道院後就會獲得5000黃金和成就「竊國者」，同時蘇格蘭很快地就會投降。最後把貝里色的駐軍打敗後就結束本關。攻擊兵種以大量的<nuxt-link
                to="/units/Longbowman"
                >精銳長弓兵</nuxt-link
              >配合<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
              >、<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >和<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >為主，攻打蘇格蘭可以考慮配一些<nuxt-link to="/units/Halberdier"
                >戟兵</nuxt-link
              >。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">空外套</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
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
              <nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batts/Edward_Longshanks">長腿愛德華</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
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
              長腿愛德華第四章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Of_Castles_and_Kings">城堡與國王</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Hammer_of_the_Scots">蘇格蘭之錘</nuxt-link>
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
