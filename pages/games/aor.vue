<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世紀帝國II：王者崛起</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>《世紀帝國II：王者崛起》</b
            >，譯名很多又稱<b>拉惹崛起</b>，是世紀帝國II第四張資料片，也是最新的資料片，發行於2016年12月19日。本資料片新增了四個東南亞<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >且更新了<nuxt-link to="/civs/Indians">印度</nuxt-link
            >種族的建築風格，遊戲中也增加了一些新單位、建築和物件。
          </p>
          <p>拉惹為南亞、東南亞以及印度等地對國王、君主或酋長的稱呼。</p>
        </div>
        <h2>新增元素</h2>
        <div class="hrn1"></div>
        <h3>文明</h3>
        <div class="n1">
          <ul>
            <li>
              <strong><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>:</strong
              >登上權力顛峰，掀起詭譎的叛亂，恢復緬甸君主的輝煌。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Khmer">高棉</nuxt-link>:</strong
              >建造世界上最大的宗教建築，使用那些強大的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Malay">馬來</nuxt-link>:</strong
              >重建東南亞最大的帝國，在這地區留下你的印記，從這個島嶼跳到這個島嶼，統治整個東南亞地區。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Vietnamese">越南</nuxt-link>:</strong
              >率領<nuxt-link to="/civs/Vietnamese">越南人</nuxt-link
              >民脫離明帝國獨立，用強大的<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >部隊進行游擊戰。
            </li>
          </ul>
        </div>
        <h3>單位</h3>
        <div class="n1">
          <p><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link></p>
          <ul>
            <li>
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >飛鏢騎兵</nuxt-link
              >:緬甸的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >的<nuxt-link to="/building/Castle">城堡</nuxt-link
              >中訓練。<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
              >是<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >部隊破壞力極高但命中低，對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車系列</nuxt-link
              >有加成傷害。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
              >:高棉的特殊單位，能夠在城堡時代的城堡中訓練。<nuxt-link
                to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >這是一種混合型單位是由<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >加攻城武器混合型單位，攻擊模式類似弩砲，弩砲象是可以伐木的。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Karambitwarrioricon.png"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
              >:為馬來的特殊單位。是遊戲裡只佔半個人口的單位，便宜/快速的單位，缺點是過於脆弱。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/RattanarcherIcon2.png"
                alt=""
              /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >:越南的特殊單位，是個有非常高<nuxt-link to="/armor"
                >遠程護甲</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >:<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >是越南第二個特殊單位，可以在<nuxt-link
                to="/building/Archery_Range"
                >射箭場</nuxt-link
              >訓練，是<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >的升級，是一個反<nuxt-link to="/armor/Armor_Class_Archer/"
                >弓箭手</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link>。
            </li>
          </ul>
        </div>
        <p>一般單位</p>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/Battleelephanticon.png"
              alt=""
            /><nuxt-link to="/units/Battle_Elephant">茅象伕</nuxt-link
            >:東南亞特殊單位，城堡時代兵種，可訓練於<nuxt-link
              to="/building/Stable"
              >馬廄</nuxt-link
            >，與<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >戰像相似但攻擊範圍較小，他們移動緩慢容易受到範圍傷害的單位攻擊，也容易被<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            ><nuxt-link to="/elements/Conversion">招降</nuxt-link>。
          </li>
        </ul>
        <p>建築</p>
        <ul>
          <li>
            <img width="25px" src="~assets/Dockicon.png" alt="" /><nuxt-link
              to="/building/Harbor"
              >海港</nuxt-link
            >:<nuxt-link to="/civs/Malay">馬來人</nuxt-link
            >進入城堡時代研發完<nuxt-link to="/techs">科技</nuxt-link
            >"海上霸主"可以建造的特殊軍事經濟復合式<nuxt-link to="/building"
              >建築物</nuxt-link
            >。<nuxt-link to="/building/Harbor">海港</nuxt-link>比<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >有更多的<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >和<nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link
            >，而且能以箭矢攻擊來犯的敵方單位。
          </li>
        </ul>
        <h3>戰役</h3>
        <p>
          <em>主要文章:<nuxt-link to="/batt">戰役</nuxt-link></em>
        </p>
        <ul>
          <li><nuxt-link to="/batt/Gajah_Madaa">加查·馬達</nuxt-link></li>
          <li>
            <nuxt-link to="/units/hero/Suryavarman_I">蘇利耶跋摩一世</nuxt-link
            >:西元十一世紀初，高棉王國四分五裂、強敵環伺。只有蘇利耶跋摩王子有能力與魄力一一打敗各路勁敵光復高棉。然而打江山易，守江山難。蘇利耶跋摩能否擴大基業，吞併強鄰。開創屬於自己的千秋霸業呢？
          </li>
          <li>
            <nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link
            >:曾經有一位拉闍想把四分五裂的國家重新統一起來，但由於有內奸背叛，他未竟的使命要由他最忠誠的侍衛來完成。有沒有可能，讓一位將領繼承王位，並建立起東南亞歷史上最大的國家？
          </li>
          <li>
            <nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >:當大越陷於內亂紛爭之際，明朝趁虛而入佔據了整片地區。而今，想要重獲獨立自由，就要依靠一個人
            － 一位名叫<nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >的有志貴族青年。他能否平息內鬥，抵抗明朝大軍並帶領大越再次獨立？
          </li>
        </ul>
        <h3>平衡更動</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p><strong>種族平衡</strong></p>
          <ol>
            <li>阿茲特克</li>
            <ul>
              <li>僧侶不適用軍事單位訓練速度快15%的文明加成。</li>
              <li>獲得自爆筏。</li>
            </ul>
            <li>柏柏</li>
            <ul>
              <li>馬廄單位訓練成本在城堡/帝王時代減少15/20%。</li>
              <li>獲得弓兵環甲。</li>
              <li>非精銳的標槍騎兵攻擊力-1，射程範圍+1。</li>
            </ul>
            <li>拜占庭</li>
            <ul>
              <li>希臘之火造價降低為250肉300金(之前是250肉400金)。</li>
            </ul>
            <li>衣索比亞</li>
            <ul>
              <li>弩炮穿透範圍增加0.3個大小。</li>
              <li>(精銳)彎刀勇士對建築物的攻擊加成降為0/1(之前是2/3)。</li>
            </ul>
            <li>法蘭克</li>
            <ul>
              <li>(精銳)擲斧兵+10HP。</li>
            </ul>
            <li>匈奴</li>
            <ul>
              <li>(精銳)韃靼騎兵+1遠程護甲。</li>
            </ul>
            <li>印加</li>
            <ul>
              <li>槍隊長速度+0.05。</li>
            </ul>
            <li>印度</li>
            <ul>
              <li>新的印度建築風格。</li>
	      <li>印度的世界奇觀果爾。古姆巴斯移至戰役編輯器，並由新的世界奇觀代替。</li>
            </ul>
            <li>義大利</li>
            <ul>
              <li>火藥單位造價便宜20%(之前是15%)。</li>
	      <li>移除漁船的+2視野並以造價減少25木材做代替。</li>
              <li>傭兵的訓練時間由11秒增加為16秒。</li>
              <li>熱那亞弩手的造價由50木50金降為45木45金。</li>
            </ul>
            <li>日本</li>
            <ul>
              <li>獲得滑輪起重機科技。</li>
            </ul>
            <li>馬利</li>
            <ul>
              <li>無法訓練戟兵。</li>
	      <li>建築木材花費-15%不適用在農田上。</li>
              <li>精銳飛刀女獵手攻擊力由14降為13。</li>
            </ul>
            <li>蒙古</li>
            <ul>
              <li>精銳蒙古突騎的開火間隔從0增加到5。</li>
	      <li>(精銳)蒙古突騎重新獲得對攻城武器的攻擊加成。</li>
            </ul>
            <li>波斯</li>
            <ul>
              <li>波斯戰象在城堡時代就有踐踏傷害。</li>
            </ul>
            <li>葡萄牙</li>
            <ul>
              <li>港灣大商站的建築成本改為250金250石(之前是250金250木)。</li>
	      <li>港灣大商站的資源產速率為每秒0.8肉、0.8木、0.4金及0.25石(之前是每秒0.7肉、0.7木、0.4金及0.45石)。</li>
              <li>火繩槍對火藥單位的影響變小(彈道學依然有作用但投射物速度降低到75%)。</li>
              <li>(精銳)風琴炮的最小射程為1。</li>
              <li>移除(精銳)風琴炮對步兵單位的+1攻擊加成。</li>
            </ul>
            <li>薩拉森</li>
            <ul>
	    	<li>精銳薩拉森奴隸兵的開火間隔增加為5(之前是0)。</li>
            </ul>
            <li>斯拉夫</li>
            <ul>
	    	<li>貴族鐵騎移動速度由1.35升為1.4。</li>
            </ul>
            <li>西班牙</li>
            <ul>
	    	<li>因為團隊加成從貿易獲得的黃金量由33%改為25%。</li>
            </ul>
            <li>條頓</li>
            <ul>
	    	<li>條頓武士的移動速度由0.65提升為0.7。</li>
            </ul>
            <li>土耳其</li>
            <ul>
	    	<li>黃金礦工的工作速率由快15%提升為20%。</li>
            </ul>
            <li>維京</li>
            <ul>
	    	<li>酋長現在會影響所有的步兵單位。</li>
            </ul>
          </ol>
          <p><strong>一般平衡</strong></p>
          <ul>
            <li>攻城塔的訓練成本由300木160金降為200木160金。</li>
            <li>金合歡樹提供150木(之前是100木)。</li>
            <li>自爆筏移動速度由1.6降為1.5。</li>
            <li>火蒙衝的遠程護甲由5降為4。</li>
            <li>自爆筏的傷害會根據自爆筏的爆炸半徑而遞減。</li>
            <li>自爆筏的爆炸半徑由1.5增為2.5。</li>
            <li>自爆筏的遠程裝甲由3降為2。</li>
            <li>自爆筏的HP由50降為45。</li>
            <li>修正精銳馬戰車的馬弓騎兵護甲分類。</li>
            <li>修正標槍騎兵的馬弓騎兵護甲分類。</li>
            <li>修正卡拉維爾帆船的特殊單位護甲分類。</li>
            <li>駱駝弓騎兵獲得對矛兵的額外攻擊加成，如此帕提亞戰術才能正確的影響其他文明的駱駝弓騎兵。例如柏柏第一戰役中的薩拉森駱駝弓騎兵。</li>
            <li>修正駱駝騎兵對駱駝護甲的攻擊加成。</li>
            <li>修正鷹勇士對駱駝護甲的攻擊加成。</li>
            <li>修正東方劍士和北歐劍士對標準建築護甲的攻擊加成。</li>
            <li>槍隊長對戰象單位攻擊額外+20。</li>
            <li>貿易商旅回到碼頭後會馬上掉頭。</li>
            <li>貿易馬車現在有較小的碰撞半徑(比較不會卡在路上)。</li>
            <li>阿茲特克人的標槍騎兵現在的訓練速度加快了。</li>
            <li>修正弓兵/弩兵/強弩兵對石造建築護甲的攻擊加成。</li>
            <li>垛牆的建造時間與石牆一樣(都10秒，之前是11秒/10秒)。</li>
            <li>特定方向城門的建築時間不會再比其他方向的快了。</li>
            <li>衣索比亞的矛兵不再有更快的開火速率，只有徒步弓兵有。</li>
            <li>韓國的"防禦工事建造速度加快33%"的文明加成現在只影響垛牆的建造速度。</li>
            <li>印度的駱駝騎兵護甲會加在他們已經不存在的船艦護甲上。現在已經移除船艦護甲了</li>
            <li>傭兵現在可以吃到馬利的護甲文明加成。</li>
            <li>風琴炮現在可以吃到土耳其的團隊加乘效果。</li>
            <li>波斯不會再有時侯使用薩拉森村民的語音。</li>
            <li>馬雅的文明加成會對所有類型和方向的城門有影響。</li>
            <li>防禦箭塔的第二發箭矢的攻擊力不再是1而是2。</li>
            <li>龜甲船現在可以吃到土耳其的團隊加成。</li>
            <li>印加在遊玩"所有科技"的遊戲開局時不再會有一頭羊駝。</li>
            <li>龜甲傳會受到傭兵及日本武士的額外傷害加成。</li>
            <li>傭兵可以得到酋長所給對騎兵單位的額外傷害。</li>
            <li>民兵系列可以得到酋長所給對駱駝單位的額外傷害。</li>
            <li>在黑暗時代修理城鎮中心不再需要花費石頭。</li>
            <li>西班牙、匈奴、馬雅、印加、馬札爾、斯拉夫、衣索比亞還有馬利的僧侶現在恢復信仰的速度與其他文明相同。</li>        
            
          </ul>
          <p><strong>科技變動</strong></p>
          <ul>
            <li>箭狹槽研發成本由150肉150木升為250肉250木。</li>
            <li>箭狹槽從以下文明的科技術移除:衣索比亞、哥德、匈奴、印度、馬札爾、馬利、瑪雅、蒙古、波斯、葡萄牙和斯拉夫。</li>
            <li>箭狹槽現在只能在帝王時代研發。</li>
            <li>箭狹槽現在會影響第二發箭矢。</li>
            <li>箭狹槽給予瞭望箭塔/防禦箭塔/大型箭塔的攻擊力由2/4/6降為1/2/3。</li>
            <li>升極為戰矛兵的成本由250木160金降為200木100金。</li>
            <li>畜牧培育的研發成本由250肉降為150肉，研發時間由50秒降為40秒。</li>
            <li>火戰船現在會受到彈道學的影響。</li>
            <li>射箭孔對箭塔的影響從3支箭降為2支箭。</li>
            <li>聚居堡壘不再對研發他的玩家有加成。</li>
            <li>巨盾的效果(徒步弓兵遠程護甲+1/+1)不再影響矛兵。</li>
            <li>酋長現在會影響狂戰士對駱駝騎兵的攻擊力。</li>
            <li>義勇騎兵現在會影響箭塔射出的第二發箭矢。</li>
            
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98">
              <div class="unititle2">
                世紀帝國II：王者崛起
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img width="100%" src="~assets/001-105.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98">
              <div class="unititle2" style="color: #fff;">遊戲介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">開發商</td>
            <td class="unit4">Skybox Labs <br />Forgotten <br />Empires LLC</td>
          </tr>
          <tr>
            <td class="unit3">發行</td>
            <td class="unit4">微軟</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98;">
              <div class="unititle2" style="color: #fff;">發行日期</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">steam版本</td>
            <td class="unit4">2016年12月19日</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98;">
              <div class="unititle2" style="color: #fff;">前作與擴充</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">擴充</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link><br /><nuxt-link
                to="/games/aoc"
                >征服者入侵</nuxt-link
              ><br /><nuxt-link to="/games/aof">失落的帝國</nuxt-link
              ><br /><nuxt-link to="/games/ak">非洲王國</nuxt-link>
              <br /><nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'foot',
  components: {}
}
</script>
<style></style>
