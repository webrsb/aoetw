<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>條頓</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>條頓</b>是中歐的<nuxt-link to="/units/Infantry_Units"
              >步兵文明</nuxt-link
            >，世紀帝國II的可使用的最初<nuxt-link to="/civs">文明</nuxt-link
            >之一。條頓是從古老文明日耳曼人的分支，在歷史上因為<nuxt-link
              to="/civs/Huns"
              >匈奴</nuxt-link
            >的大遷徙最終定居在現今的德國附近，有些在<nuxt-link
              to="/civs/Italians"
              >義大利</nuxt-link
            >。遊戲裡<nuxt-link to="/civs/Teutons">條頓人</nuxt-link
            >都代表著當時強盛的神聖羅馬帝國(歷史上也是)。條頓的<nuxt-link
              to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            ><nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
            >，是取自歷史上很有名的條頓<nuxt-link to="/units/Knight"
              >騎士</nuxt-link
            >(歷史上是有騎馬的)因改變戰術時是會下馬跟敵人交戰但移動極為笨重(全身裝甲又拿大盾)。十字軍相關歷史裡是可以很常看到這兵種的。條頓後代是現代的德國人
          </p>
        </div>
        <h3>遊戲概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>條頓在防禦/經濟/進攻皆有加成。</li>
            <li>
              在防禦上擁有，塔駐紮量兩倍、<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >駐紮單位+10，在封建時塔爆對方傷害劇增，免費的<nuxt-link
                to="/techs/Murder_Holes"
                >垛孔</nuxt-link
              >，使得在上<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >時封建塔爆下來與城堡的損傷下降。
            </li>
            <li>
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              ><nuxt-link to="/techs/untech">特殊科技</nuxt-link
              ><nuxt-link to="/techs/Crenellations">垛口</nuxt-link
              >(城堡射程+3、且<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >可以射箭)，使得條頓城堡成為遊戲裡殺傷力最大的城堡。
            </li>
            <li>
              在經濟上的<nuxt-link to="/building/Farm">農田</nuxt-link
              >成本減免33%，使在前期木轉肉上可以剩下更多木，封建可也可<nuxt-link
                to="/units/Scout_Cavalry"
                >肉馬</nuxt-link
              >爆，但是因為條頓算是遊戲中除了美洲以外唯一沒<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >的文明，因此在使用肉馬爆時要考慮到雙方上城堡後那批兵基本上直接廢掉。
            </li>
            <li>
              另外<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >擁有兩倍治療距離，使得僧侶可以在更安全的地方治癒士兵。
            </li>
            <li>
              攻擊方面除了塔給的兩倍駐紮(塔攻)，<nuxt-link
                to="/elements/Team_Bonus"
                >團隊加分</nuxt-link
              >上給予的抵抗<nuxt-link to="/elements/Conversion">招降</nuxt-link
              >也十分有效再配合上某些沒有<nuxt-link to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >/<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link
              >文明(例如:<nuxt-link to="/civs/Persians">波斯</nuxt-link
              >/<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>)也十分給力。
            </li>
            <li>
              步兵<nuxt-link to="/techs">科技</nuxt-link
              >全滿，加上塔的兩倍駐紮打<nuxt-link to="/ar/armstower"
                >裝甲塔</nuxt-link
              >/塔攻是上選。
            </li>
            <li>
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >系統也只有<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >，無輕騎兵/<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
              >，但因為有<nuxt-link to="/techs/Bloodlines">品種</nuxt-link
              >遊俠<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >也是滿的<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >後也是可以打馬。
            </li>
            <li>
              條頓<nuxt-link to="/units/Archer_Units">弓兵系</nuxt-link
              >統非常的不完善，沒有<nuxt-link to="/units/Arbalest"
                >強弩兵</nuxt-link
              >/<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>/<nuxt-link
                to="/techs/Parthian_Tactics"
                >帕提亞戰術</nuxt-link
              >/<nuxt-link to="/techs/Bracer">護腕</nuxt-link>。
            </li>
            <li>
              條頓的特殊單位條頓武士，高<nuxt-link to="/elements/Attack"
                >攻擊力</nuxt-link
              >/高<nuxt-link to="/armor">近防</nuxt-link>/打<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >有加成/高生命，卻因為走路緩慢/<nuxt-link to="/armor"
                >遠防</nuxt-link
              >偏低導致實戰上不常出現，得要搭配特定兵種或者搭乘<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >得宜快速接近目標給予傷害。
            </li>
            <li>
              條頓城堡是遊戲中最有傷害力的城堡，又因特殊科技垛口含有城堡本身的條頓武士因此在破壞城堡上非常難的，使條頓適合防守戰略。
            </li>
            <li>
              因為三大垃圾兵中，條頓卻一個半殘（<nuxt-link
                to="/units/Skirmisher"
                >矛兵</nuxt-link
              >沒有三級射），一個全殘（無法升級為輕騎兵），導致條頓在單挑後期的戰爭中非常難以使用。
            </li>
          </ul>
          <h3>特殊單位</h3>
          <ul>
            <li>
              <img class="gg" src="~assets/Crusade_avatar.png" /><nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >：厚重緩慢，但是戰鬥力近乎恐怖的步兵，對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >有加成
            </li>
          </ul>
          <h3>特殊科技</h3>
          <ul>
            <li>
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Ironclad"
                >鋼鐵甲</nuxt-link
              >：給予<nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link
              >+4的近防
            </li>
            <li>
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                alt=""
              /><nuxt-link to="/techs/Crenellations">垛口</nuxt-link
              >：城堡射程+3、且步兵可以射箭
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>僧侶擁有兩倍治療距離</li>
            <li>塔可駐紮兩倍的單位</li>
            <li>免費垛孔(城堡時代才會產生功效)</li>
            <li>農田成本減免33%</li>
            <li>城鎮中心駐紮單位+10</li>
            <li><strong>團隊加分:</strong>單位抵抗僧侶招降能力增強</li>
          </ul>
        </div>
        <h3>科技樹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em><nuxt-link to="/tree/teu">條頓科技樹</nuxt-link></em>
        </div>
        <br />
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>城鎮中心有+2攻擊與+5射程</li>
            <li>條頓武士移動速度0.65</li>
            <li>條頓武士訓練時間為19秒</li>
            <li>
              非<nuxt-link to="/units/Teutonic_Knight">精銳條頓武士</nuxt-link
              >有70hp
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              城鎮中心有+2攻擊與+5<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >
            </li>
            <li>條頓人免費垛口</li>
            <li>條頓武士訓練時間為12秒</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>城鎮中心移除+2攻擊與+5視野，變成可以駐守25個單位</li>
            <li>非精銳條頓武士有80hp</li>
            <li>鋼鐵甲成本為500W/350G</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>鋼鐵甲現在成本為400W/350G</li>
            <li>4.8版本後條頓武士移動速度為0.7</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              真正的條頓武士是有騎馬的重裝騎士，但遊戲卻去除了馬，讓原本在中世紀大殺四方的兵種變的人人都不愛。
            </li>
            <li>
              在遊戲中代表條頓文明的是神聖羅馬帝國，一個極具信仰的國家但卻沒完全的僧侶科技和文明加成卻沒很優異。
            </li>
            <li>
              假如<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >代表伊斯蘭，條頓就代表基督教，斯拉夫代表東正教，<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >代表希臘正教。
            </li>
            <li>
              十字軍東征在歷史上是有條頓騎士團有參與的，除了聖戰(打異教徒)其實是還有打自己人的(波蘭)。
            </li>
            <li>
              除了美洲文明外條頓是唯一沒有輕騎兵的文明(明明騎士團很有名)。
            </li>
            <li>
              以通常強大單位來說塔代表<nuxt-link to="/building/Bombard_Tower"
                >火砲塔</nuxt-link
              >/馬代表遊俠/<nuxt-link to="/units/Siege_Weapons"
                >攻城器</nuxt-link
              >代表重投，條頓卻擁有三種。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">
                條頓
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/steng.png" width="300" alt="" />
                <p><em>神聖羅馬帝國國旗</em></p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築風格</td>
            <td class="unit4">中歐</td>
          </tr>
          <tr>
            <td class="unit3">分類文明</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊單位</td>
            <td class="unit4">
              <img class="gg" src="~assets/Crusade_avatar.png" /><nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">首選戰略</td>
            <td class="unit4">10人塔攻</td>
          </tr>
          <tr>
            <td class="unit3">特殊技術</td>
            <td class="unit4">
              <img class="gg" src="~assets/unique_tech.png" /><nuxt-link
                to="/techs/Ironclad"
                >鋼鐵甲</nuxt-link
              ><br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
              /><nuxt-link to="/techs/Crenellations">垛口</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由熊協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allciv',
  components: {}
}
</script>
<style></style>
