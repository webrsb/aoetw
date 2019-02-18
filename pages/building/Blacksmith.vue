<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>兵工廠</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            是一個在世紀帝國II到達<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >後能建造的建築。兵工廠可研發科技強化軍事單位和部分防禦建築的攻擊和防禦。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            雖然做為無法開火和生產單位的建築，兵工廠在戰略考量上卻常常是優先的選擇，不只可研發進攻需要的科技，也是城堡時代建造攻城器製造所的先決建築物。
          </p>
          <p>
            升級兵工廠的科技在遊戲的任何階段都是至關重要的。一般來說，在發動攻擊前提高近戰部隊的裝甲效果會更有意義，這樣可以提高遠距離部隊的作戰能力，因為它們壽命更長，可以更容易地縮小差距。
            對於遠程單位，反過來說，他們應該有最高的傷害輸出，以防止近戰單位到達他們。
          </p>
          <h3>可訓練的單位與技術</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Paddedarcherarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Padded_Archer_Armor"
                      >弓兵布甲</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Fletching.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Forging.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Scalebardingarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Scale_Barding_Armor"
                      >騎兵鱗甲</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Scalemailarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Scale_Mail_Armor"
                      >步兵鱗甲</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Leatherarcherarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Leather_Archer_Armor"
                      >弓兵皮甲</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Bodkinarrow.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ironcasting.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Chainbardingarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Chain_Barding_Armor"
                      >騎兵鎖甲</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Chainmailarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Chain_Mail_Armor"
                      >步兵鎖甲</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ringarcherarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Ring_Archer_Armor"
                      >弓兵環甲</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/Bracer.jpg" alt="" /><nuxt-link
                      to="/techs/Bracer"
                      >護腕</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Blastfurnace.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Platebardingarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Plate_Barding_Armor"
                      >騎兵板甲</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Platemailarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Plate_Mail_Armor"
                      >步兵板甲</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4">無</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">全部。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">生命值</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Masonry.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%)
                <br />
                <img
                  class="gg"
                  src="~assets/Architecture.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">護甲</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Masonry.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                >(護甲+1/+1，+3建築護甲) <br />
                <img
                  class="gg"
                  src="~assets/Architecture.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >(護甲+1/+1，+3建築護甲)
              </td>
            </tr>
            <tr>
              <td class="tta1">視野</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Townwatch.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
                <br />
                <img
                  class="gg"
                  src="~assets/Townpatrol.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
              </td>
            </tr>
            <tr>
              <td class="tta1">招降抵抗</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Faith.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link> <br />
                <img
                  class="gg"
                  src="~assets/Heresy.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">建造速率</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Treadmillcrane.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >(+20%建造效率)
              </td>
            </tr>
          </table>

          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研發<nuxt-link
                  to="/techs/Faith"
                  >忠誠信仰</nuxt-link
                >便宜50%。
              </li>
              <li>
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >：在封建/城堡/帝王時代，兵工廠增加20%/30%40%的血量。<nuxt-link
                  to="/techs/Town_Watch"
                  >城鎮瞭望</nuxt-link
                >免費。
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：兵工廠的技術在封建/城堡/帝王時代分別便宜10%/15%/20%
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link
                >：兵工廠建築花費便宜15%
              </li>
              <li>
                <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研發<nuxt-link
                  to="/techs/Town_Watch"
                  >城鎮瞭望</nuxt-link
                >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
                >的速度在封建/城堡/帝王快10%/15%/20%。
              </li>
              <li>
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >：兵工廠建造速度快30%
              </li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                  to="/techs/Masonry"
                  >磚瓦技術</nuxt-link
                >，<nuxt-link to="/techs/Architecture">建築學</nuxt-link>和
                <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >的速度快80％。
              </li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
            </h3>
            <ul>
              <li>兵工廠在每個時代都是2100HP。</li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
            </h3>
            <ul>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
            </h3>
            <ul>
              <li>兵工廠在封建/城堡/帝王的HP分別是1800/2100/2100。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              在羅馬淪陷之前，歐洲的蠻族部落就已經學會了鍛鐵技術，並被帶到了黑暗時代。
              鑄鐵工作是在兵工廠那裡完成的，兵工廠的命名有部分是因為在那里工作的鑄鐵師傅和每天覆蓋著工人的黑煙。在兵工廠可以鍛造鐵鎚、工具，武器盾牌和盔甲。製造出色的武器和盔甲的能力是一個非常優秀而且珍貴技能。兵工廠師傅，武器商和武器製造商在之後新時代成為了新興的中產階級。
            </p>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img
                    class="hg"
                    width="200"
                    src="~assets/BlacksmithFeudalAgeHD.png"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p>
                    <em
                      >所有文明封建時代的兵工廠(帝王世紀和征服者入侵資料片)。</em
                    >
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img
                    class="hg"
                    width="200"
                    src="~assets/Blacksmithaokaoc.png"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p>
                    <em
                      >所有文明城堡時代的兵工廠(帝王世紀和征服者入侵資料片)。</em
                    >
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img
                    class="hg"
                    width="200"
                    src="~assets/BlacksmithFeudalAgeDLC.png"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p><em>所有文明封建時代的兵工廠(HD擴充資料片)。</em></p>
                </div>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img
                    class="hg"
                    width="200"
                    src="~assets/Blacksmith_hd.png"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p><em>所有文明城堡時代的兵工廠(HD擴充資料片)。</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                兵工廠
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Blacksmithicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">研究</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">強化所有軍事單位</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">3x3</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />1800 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2100 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />2100
            </td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />1 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />8 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />9 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />10
            </td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡和熊協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
