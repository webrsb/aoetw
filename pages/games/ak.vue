<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世紀帝國II：非洲王國</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>《世紀帝國II：非洲王國》</b>是AOE HD版繼《<nuxt-link
              to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》後的第二張資料片，也是世紀帝國II第三張資料片，此次主題著重於非洲大陸，四個<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >有三個來自於非洲。並且新增了一些遊戲功能。
          </p>
          <p>非洲王國於2015年11月5日發布。</p>
        </div>
        <h2>新增元素</h2>
        <div class="hrn1"></div>
        <h3>文明</h3>
        <div class="n1">
          <ul>
            <li>
              <strong><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>:</strong
              >位於北非的部落，擁有強大的<nuxt-link to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >與<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >，準備來一場史詩般的戰爭征服伊比亞半島，獲取異教徒的財富，抵擋那些逐漸團結的伊比利亞半島上的王國。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Malians">馬利</nuxt-link>:</strong
              >跟隨偉大的<nuxt-link to="/units/hero/Musa_ibn_Nusayr"
                >曼薩·穆薩</nuxt-link
              >，成為西非最偉大的國王，征服周圍的王國，獲取更大的財富，牢牢控制該地區的貿易路線，你能擊敗其他那些曾經與你敵對的人嗎?
            </li>
            <li>
              <strong
                ><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>:</strong
              >讓<a href="http://tinyurl.com/yc45cyps" target="_blank"
                >阿克蘇姆帝國</a
              >再次偉大，由紅海出發，向阿拉伯半島進擊，你是否能平息帝國內部的矛盾，那些篡位者已經虎視眈眈。只有最強大的帝國才能存活下來。
            </li>
            <li>
              <strong
                ><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>:</strong
              >開啟新世界，發現新航路，前往未知的土地，啟航前往非洲王國，獲取更大的財富，建立起偉大的城市，迎接新世代的來臨。
            </li>
          </ul>
        </div>
        <h3>單位</h3>
        <div class="n1">
          <p><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link></p>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
              >:移動快速，素質良好的<nuxt-link to="/units/Camel_Archer"
                >駱駝射手</nuxt-link
              >，對於<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >有額外的攻擊。
            </li>
            <li>
              <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士</nuxt-link
              >:<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >高，移動快速的<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >。
            </li>
            <li>
              <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >:<nuxt-link to="/units/Archer_Units">遠程</nuxt-link
              >步兵，攻擊與移動都非常優秀。
            </li>
            <li>
              <img class="gg" src="~assets/OrganGunIcon.png" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >風琴砲</nuxt-link
              >:少數在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >就可訓練的<nuxt-link to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >，對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車系列</nuxt-link
              >有加成傷害。
            </li>
            <li>
              <img class="gg" src="~assets/CaravelIcon.png" alt="" /><nuxt-link
                to="/units/Caravel"
                >卡拉維爾戰船</nuxt-link
              >:有貫穿效果的<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <p>一般單位</p>
        <ul>
          <li>
            <img class="gg" src="~assets/Siegetowericon.png" alt="" /><nuxt-link
              to="/units/Siege_Tower"
              >攻城塔</nuxt-link
            >:能運輸步兵與<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >穿越<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
            >的<nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link>具。
          </li>
          <li>
            <img class="gg" src="~assets/FireGalleyIcon.png" alt="" /><nuxt-link
              to="/units/Fire_Galley"
              >火艨艟</nuxt-link
            >:<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >就能生產<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>。
          </li>
          <li>
            <img class="gg" src="~assets/DemoRaftIcon.png" alt="" /><nuxt-link
              to="/units/Demolition_Raft"
              >自爆筏</nuxt-link
            >:封建時代就能生產的<nuxt-link to="/units/Demolition_Ship"
              >爆破船</nuxt-link
            >。
          </li>
        </ul>
        <p><nuxt-link to="/building">建築</nuxt-link></p>
        <ul>
          <li>
            <img width="25px" src="~assets/feitoria.png" alt="" /><nuxt-link
              to="/building/Feitoriaicon_Feitoria"
              >港灣大商站</nuxt-link
            >:<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >能建造，葡萄牙特殊建築，能緩慢生產資源。
          </li>
        </ul>
        <h3>科技</h3>
        <div class="n1">
          <ul>
            <li>
              每個文明皆新增城堡時代能研發的<nuxt-link to="/techs/untech"
                >特殊科技</nuxt-link
              >。
            </li>
          </ul>
          <p>
            <em>主要文章:<nuxt-link to="/techs/untech">特殊科技</nuxt-link></em>
          </p>
        </div>
        <p>一般<nuxt-link to="/techs">科技</nuxt-link></p>
        <ul>
          <li>
            <img class="gg" src="~assets/Arson.png" alt="" /><nuxt-link
              to="/techs/Arson"
              >縱火</nuxt-link
            >
          </li>
          <li>
            <img class="gg" src="~assets/arrowslits.png" alt="" /><nuxt-link
              to="/techs/Arrowslits"
              >箭狹槽</nuxt-link
            >
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#8a6d3b">
              <div class="unititle2">世紀帝國II：非洲王國</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img width="100%" src="~assets/9RkmbS.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#8a6d3b">
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
            <td class="unit" colspan="2" style="background-color:#8a6d3b;">
              <div class="unititle2" style="color: #fff;">發行日期</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">steam版本</td>
            <td class="unit4">2015年11月5日</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#8a6d3b;">
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
              ><br /><nuxt-link to="/games/aor">王者崛起</nuxt-link>
              <br /><nuxt-link to="/games/de">決定版</nuxt-link>
              <br /><nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em>主要文章:<nuxt-link to="/batt">戰役</nuxt-link></em>
          </p>
          <p>包含四個主戰役</p>
          <ul>
            <li>
              <nuxt-link to="/batt/Tariq_ibn_Ziyada"
                >塔里克·伊本·齊亞德</nuxt-link
              >
            </li>
            <li><nuxt-link to="/batt/Sundjataa">松迪亞塔</nuxt-link></li>
            <li>
              <nuxt-link to="/batt/Francisco_de_Almeida"
                >法蘭西斯科·德·阿爾梅達</nuxt-link
              >
            </li>
            <li><nuxt-link to="/batt/Yodita">優娣忒</nuxt-link></li>
          </ul>
        </div>
        <h3>平衡更動</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p><strong>種族平衡</strong></p>
          <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Knight">騎士</nuxt-link
              ><nuxt-link to="/elements/Hit_points">血量</nuxt-link>+20%
              可影響<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>
            </li>
            <li>
              <nuxt-link to="/units/Throwing_Axeman">精銳擲斧兵</nuxt-link
              >速度從 0.9改為1.0
            </li>
          </ul>
          <nuxt-link to="/civs/Huns">匈人</nuxt-link>
          <ul>
            <li>
              馬弓騎兵花費減少的程度，<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >與帝王時代從-25%/-30%改為-10%/-20%
            </li>
            <li>
              銀冠（<nuxt-link to="/techs/Marauders">掠奪者</nuxt-link
              >)花費從500F200G改為300W 200G
            </li>
          </ul>
          <nuxt-link to="/civs/Incas">印加</nuxt-link>
          <ul>
            <li>
              金冠（<nuxt-link to="/techs/Fabric_Shields">織物盾</nuxt-link
              >）從+10%移動速度改為+1/+2 防禦
            </li>
            <li>投石者不用先蓋城堡即可生產</li>
            <li>
              獲得<nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >、公會制度、印刷術、姆指環
            </li>
          </ul>
          <nuxt-link to="/civs/Indians">印度</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Villager">村民</nuxt-link>花費，四時代 從
              -5%/-10%/-15%/-20% 改為 -10%/-15%/-20%/-25%
              獲得公會制度、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >三防
            </li>
            <li>
              騎象<nuxt-link to="/units/Archer_Units">射手</nuxt-link
              >血量從250改為280
            </li>
            <li>精銳騎象射手血量從350改為330</li>
            <li>
              （精銳）騎象射手<nuxt-link to="/armor">遠防</nuxt-link>從4改為3
            </li>
            <li>（精銳）騎象射手花費從110F 80G改為100F 80G</li>
          </ul>
          <nuxt-link to="/civs/Italians">義大利</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >不需先蓋城堡即可生產
            </li>
            <li>傭兵攻擊從9改為10</li>
            <li>傭兵速度從1改為1.2</li>
            <li>銀冠（大盾）可影響所有徒步弓兵</li>
            <li>銀冠（大盾）花費從 550F 300G 改為 300F 150G</li>
            <li>時代演進花費從 -10% 改為 -15%</li>
          </ul>
          <nuxt-link to="/civs/Japanese">日本</nuxt-link>
          <ul>
            <li>
              銀冠（<nuxt-link to="/techs/Yasama">射箭孔</nuxt-link>）花費從
              400W 300F 改為 300W 300F
            </li>
          </ul>
          <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link
              >不需先蓋城堡即可生產
            </li>
            <li>
              銀冠（<nuxt-link to="/techs/Panokseon">板屋船</nuxt-link>）花費從
              400W 400F 改為 300W 300F
            </li>
          </ul>
          <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
          <ul>
            <li>
              銀冠（<nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link
              >）對建築攻擊從+4改為+6
            </li>
            <li>資源多20%改為多15%</li>
          </ul>
          <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
          <ul>
            <li>
              種田速率從 1.18倍 改為 1.31倍（實際效率成為 輪軸後
              +15%，<nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link>後 +5%）
            </li>
          </ul>
          <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Missionary">傳教士</nuxt-link
              >不需先蓋城堡即可生產
            </li>
            <li>銀冠（宗教法庭）花費從400F 400G改為100F 300G</li>
          </ul>
          <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
          <ul>
            <li>銀冠（重盔甲）花費從 500W 350G改為400W 350G</li>
          </ul>
          <nuxt-link to="/civs/Vikings">維京</nuxt-link>
          <ul>
            <li>
              <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
              >不需先蓋城堡即可生產
            </li>
            <li>維京大戰船花費從 90W 40G 改為 100W 50G</li>
            <li>
              銀冠（<nuxt-link to="/techs/Chieftains">酋長</nuxt-link>）花費從
              700F 400G 改為 400F 300G
            </li>
            <li>銀冠（酋長）攻擊從 +4 改為 +5</li>
          </ul>
          <p><strong>一般平衡</strong></p>
          <ul>
            <li>
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >、大型箭塔：基礎攻擊力都+1(現在為7、8)
            </li>
            <li>
              <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >：可於<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
              >生產
            </li>
            <li>
              <nuxt-link to="/building/Palisade_Gate">木門</nuxt-link
              >：成為改為20<nuxt-link to="/resource/Wood">木材</nuxt-link
              >(原為30木材)
            </li>
            <li>魚網：建造時間-13秒(現在為40秒)</li>
            <li>
              <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >：-1對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Naval_Vessels">船艦</nuxt-link>攻擊加成
            </li>
            <li>
              <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
              >：基礎攻擊力由11上升至12
            </li>
            <li>
              <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
              >、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >、雙手劍兵、<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
              >：+1對普通建築的攻擊力
            </li>
            <li>
              駱駝騎兵、<nuxt-link to="/units/Heavy_Camel_Rider"
                >重裝駱駝騎兵</nuxt-link
              >：攻擊力+1(變成6、8)
            </li>
            <li>
              <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>、<nuxt-link
                to="/units/Longbowman"
                >精銳長弓兵</nuxt-link
              >：生產時間-1秒(變成17秒)
            </li>
            <li>
              <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>、<nuxt-link
                to="/units/Berserk"
                >精銳狂戰士</nuxt-link
              >：<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
              >變為54/62(原為52/60)，訓練時間-2秒(原為16秒)
            </li>
            <li>
              <nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link
              >(非精銳)：+1基礎攻擊力(變成8)
            </li>
            <li>
              <nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >(非精銳)：+1基礎攻擊力(變成8)
            </li>
            <li>
              <nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link
              >：生產時間減至16秒
            </li>
            <li>
              <nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link>、<nuxt-link
                to="/units/War_Wagon"
                >精銳馬戰車</nuxt-link
              >：成本減至110木材 60<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >
            </li>
            <li>
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>升級費用 從
              300F 200G 改為 200F 200G
            </li>
            <li>鷹勇士速度 從 1.1 改為 1.2（鷹斥侯為 1.1，精銳鷹勇為 1.3）</li>
            <li>封建時代即可生產鷹斥侯</li>
            <li>新增<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link></li>
            <li>
              <nuxt-link to="/techs/Coinage">鑄幣術</nuxt-link>與<nuxt-link
                to="/techs/Banking"
                >銀行制度</nuxt-link
              >研發時間從 50 秒改為 70 秒
            </li>
            <li>銀行制度費用從200F 100G 改為 300F 200G</li>
            <li>鑄幣術費用從 150F 50G 改為 200F 100G</li>
            <li>馬弓花費從 40W 65G 改為 40W 60G</li>
            <li>貿易商船每趟多賺 30%</li>
            <li>火戰船+1 防禦，+1 對船防禦</li>
            <li>重型火戰船 +1 防禦，+2 對船防禦</li>
            <li>弩砲增加砲火尺寸（修正他們缺少穿透傷害的問題</li>
            <li><nuxt-link to="/units/Camel_Rider">駱駝</nuxt-link>不再視為船</li>
            <li>
              <nuxt-link to="/building/Fish_Trap">漁網</nuxt-link
              >建造時間從60秒改為40秒
            </li>
          </ul>
          <p><strong>科技變動</strong></p>
          <ul>
            <li>
              <nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link
              >：成本減至50<nuxt-link to="/resource/Food">食物</nuxt-link>
            </li>
            <li>
              <nuxt-link to="/techs/Squires">護衛技術</nuxt-link
              >：成本減至100食物
            </li>
            <li>
              <nuxt-link to="/units/Plumed_Archer">精銳羽毛箭射手</nuxt-link
              >：成本增加至700食物 1000木材
            </li>
          </ul>
        </div>
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
