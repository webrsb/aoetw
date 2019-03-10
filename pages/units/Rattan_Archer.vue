<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>藤甲弓兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>藤甲弓兵</b>是<nuxt-link to="/games/aor">王者崛起</nuxt-link
            >資料片中<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。是個有非常高<nuxt-link to="/armor">遠程護甲</nuxt-link
            >的<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>。
          </p>
          <p>
            藤甲弓兵可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為<nuxt-link to="/units/Rattan_Archer">精銳藤甲弓兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              藤甲弓兵有能與<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >相提並論的高遠程護甲，對<nuxt-link to="/units/Archer_Units"
                >遠程單位</nuxt-link
              >的炮火幾乎免疫。即便是<nuxt-link to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >、<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
              >也難以殺死他們，弩砲和防禦建築的傷害對他們也猶如抓癢。
            </li>
            <li>
              藤甲弓兵在<nuxt-link to="/units/Archer_Units"
                >弓箭手單位</nuxt-link
              >中有不錯的速度和<nuxt-link to="/elements/Attack"
                >攻擊力</nuxt-link
              >，僅次於排名第一的<nuxt-link to="/units/Plumed_Archer"
                >羽毛箭射手</nuxt-link
              >。這讓他們能追擊敗退的敵方<nuxt-link to="/units/Archer_Units"
                >弓箭手</nuxt-link
              >，也能從大群的戰矛兵和<nuxt-link to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >的攻擊下逃跑。他們也能藉速度優勢襲擊敵方<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >，靠著高遠程護甲即便是<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >的砲火也處之泰然。
            </li>
            <li>
              由於缺乏近戰護甲，藤甲弓兵非常懼怕近戰單位。哥德衛隊、速度快的<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >(特別是<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >)、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >都能把他們撕成碎片。他們的造價不斐，如果沒有在戰場上發揮效果連帶會拖累整個經濟。藤甲弓兵與<nuxt-link
                to="/units/Battle_Elephant"
                >茅象伕</nuxt-link
              >、步兵單位配合是不錯的組合，能互相彌補缺點同時有很好的進攻效果。
            </li>
            <li>
              與<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >不同，藤甲弓兵可以善用速度躲避<nuxt-link to="/units/Mangonel"
                >投石車</nuxt-link
              >的攻擊，意味著玩家如果有精細的操作那麼投石車在藤甲弓兵面前就猶如砧板上的一塊肉。反過來說對上藤甲弓兵玩家不應該只用一台投石車應戰，數台的投石車仍舊可以對複數的藤甲弓兵造成巨量傷害的。
            </li>
          </ul>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">步兵、弓兵。</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">騎兵、哥德衛隊、鷹勇士、攻城武器。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle2">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img src="~assets/Fletching.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Fletching"
                >箭羽</nuxt-link
              >(+1) <br />
              <img src="~assets/Bodkinarrow.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Bodkin_Arrow"
                >錐狀箭頭</nuxt-link
              >(+1) <br />
              <img src="~assets/Bracer.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Bracer"
                >護腕</nuxt-link
              >(+1) <br />
              <img src="~assets/Chemistry.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊範圍</td>
            <td class="tta4">
              <img src="~assets/Fletching.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Fletching"
                >箭羽</nuxt-link
              >(+1) <br />
              <img src="~assets/Bodkinarrow.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Bodkin_Arrow"
                >錐狀箭頭</nuxt-link
              >(+1) <br />
              <img src="~assets/Bracer.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Bracer"
                >護腕</nuxt-link
              >(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">開火速度</td>
            <td class="tta4">
              <img src="~assets/Thumb_Ring.png" class="gg" alt="" /><nuxt-link
                to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >(+18%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img src="~assets/Ballistics.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >(對移動目標命中率上升) <br />
              <img src="~assets/Thumb_Ring.png" class="gg" alt="" /><nuxt-link
                to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >(命中率提升到100%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                src="~assets/Paddedarcherarmor.jpg"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link
              >(+1/+1) <br />
              <img
                src="~assets/Leatherarcherarmor.jpg"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >(+1/+1) <br />
              <img
                src="~assets/Ringarcherarmor.jpg"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link
              >(+1/+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img src="~assets/Faith.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生產速度</td>
            <td class="tta4">
              <img src="~assets/Conscription.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >(+33%)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >免費。
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
              >能夠提高藤甲弓兵的生產速度還有加速徵兵制度的研究時間(快25%)
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：<nuxt-link
                to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >研發速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >：藤甲弓兵<nuxt-link to="/los.php">視野</nuxt-link>+2。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：藤甲弓兵對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：藤甲弓兵更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              5.3版後，藤甲弓兵對<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >+1的加成被取消了。
            </li>
            <li>
              <nuxt-link to="/news/ver5-8">5.8版</nuxt-link>後，藤甲弓兵/精銳
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link> 35/40 →
              40/45。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              藤甲弓兵讓人聯想到三國演義中的身穿藤製鎧甲的南蠻藤甲兵，最後被諸葛亮火攻所破。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          藤原產於熱帶地區，在非洲、亞洲及大洋洲皆有分布，印尼為世界最大產地，在東南亞，人們習慣把藤應用於日常生活上各種地方。於藤的重量很輕，而且很耐用，可塑性高，所以拿來當士兵的防禦很不錯。。
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Rattan_vs_Cavalry_Archers.jpg"
                  alt=""
              /></gallery>
              <p><em>一群正在作戰的藤甲弓兵。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle" style="color: #fff">藤甲弓兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/RattanarcherIcon2.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">弓兵</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">越南</td>
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
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">16秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">40，45(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              6/7(精銳)(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link
              >攻擊+2
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4/5(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">80%/90%(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4/6(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">防禦類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.1</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/RattanarcherIcon2.png"
                alt=""
              />精銳藤甲弓兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              1000<nuxt-link to="/resource/Food">食物</nuxt-link>750黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
