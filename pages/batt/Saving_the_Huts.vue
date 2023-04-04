<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>拯救棚屋</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>拯救棚屋</b>是<nuxt-link to="/batt/Kotyan_Khan"
              >可泰安汗戰役</nuxt-link
            >的第三關。西方帶來消息說匈牙利願意接納<nuxt-link to="/civs/Cumans"
              >庫曼人</nuxt-link
            >，但在這之前得先拯救更多的族人同胞。
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
                700<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／900<nuxt-link to="/resource/Food">食物</nuxt-link
                >／600<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／250石頭（標準）<br />
                200木材／400食物／100黃金／0石頭（其他）<br />
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
                <div class="p5"></div>
                玩家2
              </td>
              <td class="tc6">吉艮汗（青色）庫曼人</td>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家3
              </td>
              <td class="tc6">庫曼部落（灰色）庫曼人</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家5
              </td>
              <td class="tc6">
                匈牙利人（藍色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
                >人
              </td>
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
                玩家6
              </td>
              <td colspan="3" class="tc6">
                蒙古人（橙色）<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家7
              </td>
              <td colspan="3" class="tc6">速不台（橙色）蒙古人</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              可泰安汗、<nuxt-link to="/units/Kipchak">欽察</nuxt-link
              >x7、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x1、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>x3
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>可泰安汗必須活著。</li>
              <li>速不台在追殺您。尋求摩爾達維亞當地庫曼人的支持。</li>
              <li>穿過隘口，控制庫曼村莊，並做好戰鬥到最後一刻的準備。</li>
              <li>
                盡可能為您的村莊抵禦<nuxt-link to="/civs/Tatars">韃靼</nuxt-link
                >掠奪者的進攻。
              </li>
              <li>
                解放目前被蒙古人和韃靼人佔領的所有庫曼部落，幫助您的人民逃離至匈牙利。
              </li>
              <li>
                派可泰安前往匈牙利的<nuxt-link to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                庫曼人只能在<nuxt-link to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >發展，人口上限為150。他們還無法修建<nuxt-link
                  to="/building/Stone_Wall"
                  >石牆</nuxt-link
                >。
              </li>
              <li>
                您的資源不足以和<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link
                >及<nuxt-link to="/civs/Tatars">韃靼</nuxt-link
                >正面對抗。因此要仔細考慮戰鬥時機，有時候避開衝突是更好的選擇。
              </li>
              <li>
                初期有可能擊退<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
                >主力，但他們的補給到達本區域後，您的能力就不足以和他們長期對抗了。應當把焦點轉移到保障您手下的生命上。
              </li>
              <li>
                一開始，韃靼<nuxt-link to="/armor/Armor_Class_Cavalry"
                  >騎兵</nuxt-link
                >掠奪者對陣時就會輕鬆許多。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                可泰安(1，綠色)已率領一小隊<nuxt-link to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >抵達摩爾達維亞。這個區域是吉艮汗(2，青色)帶領的庫曼部落的家園。
              </li>
              <li>
                韃靼掠奪者(4，黃色)分佈各處，走到哪裡就搶到哪裡。他們的<nuxt-link
                  to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
                >和可怕的<nuxt-link to="/units/Keshik">怯薛</nuxt-link
                >機動性極強。
              </li>
              <li>
                同時，蒙古人(6，橙色)為了穩固自己在這邊的勢力，正在逐一佔領外圍村莊。為了摧毀所有抵抗的力量，他們會訓練<nuxt-link
                  to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >、輕騎兵和<nuxt-link to="/units/Siege_Weapons"
                  >攻城單位</nuxt-link
                >。這些都是為了迎接速不台帶領的蒙古主力的到來。他將會帶來蒙古最精銳的兵種：<nuxt-link
                  to="/units/Hussar"
                  >匈牙利輕騎兵</nuxt-link
                >、<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                >和進階攻城裝備。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              開場要先到達指定地點，沿途清除掉路上的敵人後，到達時會看到韃靼人正在攻擊青色，合力解決後去見吉艮汗。到北部的村莊發展，並在東北蓋第二個<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >。發展途中盟友會戰敗，隨後會送玩家一些資源。利用這些資源升上<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >。
            </li>
            <li>
              上<nuxt-link to="/building/Castle">城堡</nuxt-link
              >後，匈牙利會要可泰安汗去見他，同時通知速不台再過40分鐘後會來到。在去匈牙利之前必須解放五個營地。由於敵人幾乎都是騎兵系，因此配兵以<nuxt-link
                to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >（或是<nuxt-link to="/units/Kipchak">欽察</nuxt-link
              >）為主，就能輕鬆地陸續掃蕩五個營地的敵人，只要營地內沒有蒙古人或韃靼人（含<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >）就解放成功。
            </li>
            <li>
              最後在到達匈牙利前有個韃靼人的關卡，上方有條小路可以繞過去，解決或拖住防守的敵軍後，讓可泰安抵達匈牙利的<nuxt-link
                to="/building/Wonder"
                >世界奇觀</nuxt-link
              >即過關。
            </li>
            <li>
              高難度之下蒙古人和韃靼人會定期進攻，如果可能則利用<nuxt-link
                to="/building/Market"
                >市集</nuxt-link
              >交易盡快在城鎮中心附近蓋一座城堡，否則敲鐘後用可泰安汗將兵引到初始的城鎮中心迎戰。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">拯救棚屋</div>
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
              可泰安汗第三章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Battle_at_the_Kalka_River"
                >卡爾卡河戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Blood_for_Blood">血債血償</nuxt-link>
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
