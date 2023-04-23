<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>上帝的子民</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>上帝的子民</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/Edward_Longshanks"
              >長腿愛德華</nuxt-link
            >的第二關。
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
                1000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >/1000<nuxt-link to="/resource/Food">食物</nuxt-link
                >/1000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >/100<nuxt-link to="/resource/Stone">石料</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
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
                <nuxt-link to="/civs/Britons">不列顛人</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6">
                的黎波里（藍色）<nuxt-link to="/civs/Sicilians"
                  >西西里人</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">
                十字軍騎士團（黃色）<nuxt-link to="/civs/Teutons"
                  >條頓人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">中立</td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家4
              </td>
              <td class="tc6">
                伊兒汗國（橙色）<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>
              </td>
            </tr>

            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">
                阿勒波（青色）<nuxt-link to="/civs/Saracens"
                  >薩拉森人</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家6
              </td>
              <td colspan="3" class="tc6">馬木路克人（綠色）薩拉森人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家7
              </td>
              <td class="tc6">
                夸昆（綠色）<nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家8
              </td>
              <td colspan="3" class="tc6">拿撒勒（灰色）薩拉森人</td>
            </tr>
          </table>

          <br />

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                堅守阿卡（1，紅色）和的黎波里（2.藍色）直至馬木路克的部隊撤退，且每座城市至少守住一座<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>
                摧毀夸昆（7，紫色）和拿撒勒（8，灰色）以削弱敵方戰爭補給。
              </li>
              <li>
                劫掠敵方軍事營地中的<nuxt-link to="/building/Blacksmith"
                  >兵工廠</nuxt-link
                >和補給倉庫（貿易工坊）以取得<nuxt-link to="/techs"
                  >科技</nuxt-link
                >和資源。
              </li>
              <li>派使者拜訪伊兒汗國以建立聯盟關係。</li>
              <li>
                向伊兒汗國（4，橙色）支付500黃金，讓他們向馬木路克和阿勒波宣戰。
              </li>
              <li>
                使用嘲弄指令指揮十字軍騎士團的軍隊。<br />
                –輸入210要他們防守阿卡。<br />
                –輸入220要他們防守的黎波里。<br />
                –輸入230要他們自我防衛。<br />
                –輸入240要他們發起進攻。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華勛爵只能發展到<nuxt-link to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >。人口上限為125人。此外，他的防守型策略和有限的資源使他無法訓練<nuxt-link
                  to="/units/Villager"
                  >村民</nuxt-link
                >及建造多數<nuxt-link to="/building">建築物</nuxt-link
                >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>。
              </li>
              <li>
                <nuxt-link to="/units/Longbowman">不列顛長弓兵</nuxt-link
                >是極其強大的單位，非常擅長陣地防守。
              </li>
              <li>
                利用海洋資源捕魚，並與西邊的利馬索爾港進行貿易，但要小心馬木路克的艦隊。
              </li>
              <li>
                戰場上最強大的戰士，也就是十字軍騎士團的騎士將會聽從您的指揮。將這些精銳部隊部署在戰事最激烈的地帶，讓他們與您的部隊協同作戰。
              </li>
              <li>
                <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
                >伊兒汗國憎恨馬木路克，需要時他們可以是您的強力盟友人選。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華勛爵（1，紅色）已經帶著一支十字軍部隊抵達阿卡，並接管了城市的防守。
              </li>
              <li>
                十字軍城市的黎波里（2，藍色）位於愛德華於阿卡所在位置的北部不遠處。的黎波里會以<nuxt-link
                  to="/units/Serjeant"
                  >薩金特衛兵</nuxt-link
                >、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
                >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                >進行自衛。
              </li>

              <li>
                十字軍騎士團（3，黃色）控制著幾處邊遠要塞和營地，以及一些位於阿卡和的黎波里境內的飛地。他們擁有一隻由重裝<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >和<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
                >組成的強力軍隊。
              </li>
              <li>
                受馬木路克控制的城市阿勒波（5，青色）準備從北方襲擊的黎波里。阿勒波的進攻部隊由<nuxt-link
                  to="/units/Long_Swordsman"
                  >長劍兵</nuxt-link
                >、<nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
                >和<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                  >攻城武器</nuxt-link
                >組成。
              </li>
              <li>
                馬木路克蘇丹國（6，綠色）控制著地圖的南部和東部區域。他們的蘇丹拜巴爾會帶著<nuxt-link
                  to="/units/Mameluke"
                  >阿拉伯奴隸兵</nuxt-link
                >、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
                >和攻城武器毫不留情地向十字軍進攻。馬木路克還會組建艦隊從海上向十字軍發動進攻。
              </li>
              <li>
                夸昆（7，紫色）和拿撒勒（8，灰色）城鎮位於地圖的南邊和東南方向。這些城鎮替馬木路克軍隊提供補給和人手，但本身防備鬆散，一次迅猛進攻將能擊潰他們。
              </li>
              <li>
                蒙古伊兒汗國（4，橙色）佔據著地圖東北方向的領土。他們的<nuxt-link
                  to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >和騎乘<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
                >暫時毫無動靜，但只要一聲令下就會傾巢而出。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關要守住自己跟藍色兩座城市60分鐘，我方<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >僅能建造少數<nuxt-link to="/building">建築</nuxt-link
              >。提升國力的方式只有捕魚、砍樹、採石頭、海上貿易、<nuxt-link
                to="/Relic"
                >遺跡</nuxt-link
              >而已，除此之外就是要摧毀敵人的貿易工坊。
            </li>
            <li>
              一開始就會面臨敵人的進攻，先將之擊退後，生產<nuxt-link
                to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >捕魚以及<nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >貿易（捕魚等<nuxt-link to="/resource/Wood">木材</nuxt-link
              >夠就在港灣內用<nuxt-link to="/building/Fish_Trap">漁網</nuxt-link
              >較安全）。海灣那側石頭足夠就建造<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >，愈多愈好，並研發<nuxt-link to="/techs/Rocketry">火箭</nuxt-link
              >科技強化<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >對船的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >，海上就能輕鬆地防守住。基地內龜騎士和<nuxt-link
                to="/units/Longbowman"
                >長弓兵</nuxt-link
              >伺機反擊，以騎士為主，因為不趕快往外打出去會愈來愈難打。基地內只需要少量的<nuxt-link
                to="/units/Longbowman"
                >長弓兵</nuxt-link
              >再配合<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >由牆內往外攻擊即可。盟友被打就輸入指令叫騎士團去守，真的不行再去救，可以把大部份的<nuxt-link
                to="/units/Longbowman"
                >長弓兵</nuxt-link
              >調去支援。若敵人暫無動靜可以叫騎士團主動攻擊，甚至有機會破壞敵人的建築還能取得資源和科技。
            </li>
            <li>
              至於我方造出足夠的騎士大約25隻以上就可以去掃蕩城外的敵人陣地，如果敵兵來救就進駐到黃色的城堡讓城堡殺敵兼<nuxt-link
                to="/Regeneration"
                >回血</nuxt-link
              >。破壞兵工廠可以獲得<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >的兵工廠科技還有<nuxt-link to="/techs/Chemistry">化學</nuxt-link
              >，破壞貿易工廠可以獲得資源各500，打敗紫色和灰色可以各獲得資源各1000（以上均不包含石頭）且會減少敵人出擊的人手。愈早做愈好，因為除了我方以外藍色和黃色也同樣會獲得科技和資源，比較不需要為他們的守備費心。過了20分鐘以後，蒙古會要求我們派使者去見他，見了以後要求500金就會出兵，給的同時我方也會自動研發徵兵。
            </li>
            <li>
              如果選擇困難難度，綠色會在40分鐘自動升到帝王，並會以後帝王時代的軍隊出擊。這時基地就要大量使用長弓兵防守，騎士隊龜在右方的黃色城堡內準備偷襲後方的攻城武器包含重衝、重投和巨投等。只要守住兩個城市60分後就過關。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">上帝的子民</div>
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
              西方霸主
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              長腿愛德華
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
              長腿愛德華第二章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Vain_Ambition">自負的野心</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Of_Castles_and_Kings">城堡與國王</nuxt-link>
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
