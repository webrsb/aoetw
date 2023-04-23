<template>
  <div class="container padtop">
    <h1>科技</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          下面將列出遊戲中所有<b>科技</b>，單位的升級不列在此。F=<nuxt-link
            to="/resource/Food"
            >食物</nuxt-link
          >
          W=<nuxt-link to="/resource/Wood">木材</nuxt-link> G=<nuxt-link
            to="/resource/Gold"
            >金</nuxt-link
          >
          S=<nuxt-link to="/resource/Stone">石頭</nuxt-link>
        </p>
        <p>
          各國特殊科技銀冠、金冠請見:<nuxt-link to="/techs/untech"
            >特殊科技總覽</nuxt-link
          >
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3><nuxt-link to="/building/Barracks">軍營</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/TrackingDE.png" alt="" /><nuxt-link
                to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">免費</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>+2<nuxt-link
                to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Suplliesicon.png" alt="" /><nuxt-link
                to="/techs/Supplies"
                >供給</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F 100G</td>
            <td class="tunitc6">
              民兵系食物成本-15
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/squires.png" alt="" /><nuxt-link
                to="/techs/Squires"
                >護衛技術</nuxt-link
              >
            </td>
            <td class="tunitc4">
              <nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link>
            </td>
            <td class="tunitc5">100F</td>
            <td class="tunitc6">步兵速度+10%</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Arson.png" alt="" /><nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 50G</td>
            <td class="tunitc6">
              步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Thumb_Ring.png" alt="" /><nuxt-link
                to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 250W</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>和<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >開火速率更快並擁有100%命中率。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/parthian_tactics.png"
                alt=""
              /><nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">200F 250G</td>
            <td class="tunitc6">
              <nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵護甲</nuxt-link
              >+1/+2，對<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
              >攻擊+4。
            </td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Stable">馬廄</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Bloodlines.png" alt="" /><nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F 100G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >部隊<nuxt-link to="/elements/Hit_points">生命值</nuxt-link>+20。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/husbandry.png" alt="" /><nuxt-link
                to="/techs/Husbandry"
                >耕種技術</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F</td>
            <td class="tunitc6">騎兵移動速度+10%。</td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/loom.png" alt="" /><nuxt-link
                to="/techs/Loom"
                >織布技術</nuxt-link
              >
            </td>
            <td class="tunitc4">黑暗</td>
            <td class="tunitc5">50G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Villager">村民</nuxt-link>+15
              HP，護甲+1/+2。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/wheelbarrow.png" alt="" /><nuxt-link
                to="/techs/Wheelbarrow"
                >輪軸技術</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">175F 50W</td>
            <td class="tunitc6">村民速度快10%，每趟可攜帶資源量+25%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/hand_cart.png" alt="" /><nuxt-link
                to="/techs/Hand_Cart"
                >手推車</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">村民速度快10%，每趟可攜帶資源量+50%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/tower_watch.png" alt="" /><nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">75F</td>
            <td class="tunitc6">
              <nuxt-link to="/building">建築</nuxt-link>視野+4。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/town_patrol.png" alt="" /><nuxt-link
                to="/techs/Town_Patrol"
                >城鎮巡邏</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 100G</td>
            <td class="tunitc6">建築視野+4。</td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Monastery">修道院</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/redemption.png" alt="" /><nuxt-link
                to="/techs/Redemption"
                >神聖思想</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">475G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Monk">僧侶</nuxt-link>可<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >大部分<nuxt-link to="/building">建築物</nuxt-link>和<nuxt-link
                to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/atonement.png" alt="" /><nuxt-link
                to="/techs/Atonement"
                >救贖思想</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">325G</td>
            <td class="tunitc6">僧侶可招降對方的僧侶。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Herbalmedicine.png"
                alt=""
              /><nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">350G</td>
            <td class="tunitc6">駐紮單位自身治療速度變為6倍。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Heresy.png" alt="" /><nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">1000G</td>
            <td class="tunitc6">被招降的單位/建築物立即死亡/毀壞。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/sanctity.png" alt="" /><nuxt-link
                to="/techs/Sanctity"
                >聖潔虔誠</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">120G</td>
            <td class="tunitc6">僧侶+15 HP。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/fervor.png" alt="" /><nuxt-link
                to="/techs/Fervor"
                >宗教狂熱</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">140G</td>
            <td class="tunitc6">僧侶移動速度+15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/faith.png" alt="" /><nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">750F 1000G</td>
            <td class="tunitc6">
              單位對僧侶(<nuxt-link to="/units/Missionary">傳教士</nuxt-link
              >)的招降更具抵抗力。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/illumination.png" alt="" /><nuxt-link
                to="/techs/Illumination"
                >啟示思想</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">120G</td>
            <td class="tunitc6">
              僧侶招降成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/block_printing.png"
                alt=""
              /><nuxt-link to="/techs/Block_Printing">印刷技術</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">200G</td>
            <td class="tunitc6">僧侶(傳教士)的招降範圍+3。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Theocracy.png" alt="" /><nuxt-link
                to="/techs/Theocracy"
                >神權統治</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">200G</td>
            <td class="tunitc6">
              一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。
            </td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Market">市集</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/cartography.png" alt="" /><nuxt-link
                to="/techs/Cartography"
                >製圖學</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">免費</td>
            <td class="tunitc6">可看到所有同盟的視野。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/caravan.png" alt="" /><nuxt-link
                to="/techs/Caravan"
                >商隊</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 200G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>和<nuxt-link
                to="/units/Trade_Cog"
                >貿易商旅</nuxt-link
              >的移動速度快50%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/coinage.png" alt="" /><nuxt-link
                to="/techs/Coinage"
                >鑄幣術</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">
              <nuxt-link to="/Tribute.php">進貢費</nuxt-link>用減少至20%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/banking.png" alt="" /><nuxt-link
                to="/techs/Banking"
                >銀行制度</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">進貢費用免費。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/guilds.png" alt="" /><nuxt-link
                to="/techs/Guilds"
                >公會制度</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">在市場交易課稅減至15%。</td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Castle">城堡</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/spies_treason.png"
                alt=""
              /><nuxt-link to="/techs/Spies">間諜</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">每個敵方村民耗費200G，最高花費30000G。</td>
            <td class="tunitc6">可得到敵方視野。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/spies_treason.png"
                alt=""
              /><nuxt-link to="/techs/Spies">叛徒</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">400G</td>
            <td class="tunitc6">
              在弒君模式下可短暫看見敵對<nuxt-link to="/units/edmap/King"
                >國王</nuxt-link
              >位置。小地圖上以X顯示。該科技只在弒君模式有。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/hoardings.png" alt="" /><nuxt-link
                to="/techs/Hoardings"
                >圍牆</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">400F 400W</td>
            <td class="tunitc6">城堡+21% HP。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/sappers.png" alt="" /><nuxt-link
                to="/techs/Sappers"
                >兵工學</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">400F 200G</td>
            <td class="tunitc6">
              村民對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+15。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/conscription.png" alt="" /><nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">150F 150G</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Barracks">軍營</nuxt-link
              >、靶場、<nuxt-link to="/building/Stable">馬廄</nuxt-link
              >、城堡訓練部隊速度+33%。
            </td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Dock">碼頭</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/careening.png" alt="" /><nuxt-link
                to="/techs/Careening"
                >航海技術</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">250F 150G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
              >護甲+1，<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >可承載單位+5。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/dry_dock.png" alt="" /><nuxt-link
                to="/techs/Dry_Dock"
                >船塢</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">600F 400G</td>
            <td class="tunitc6">船隻航行速度+15%，運輸船可承載單位+10。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/shipwright.png" alt="" /><nuxt-link
                to="/techs/Shipwright"
                >造船員</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">1000F 300G</td>
            <td class="tunitc6">船隻造價-20%，單位生產速度+35%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/gillnets.png" alt="" /><nuxt-link
                to="/techs/Gillnets"
                >流刺網</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 200G</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>工作速率+25%。
            </td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/University">學院</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/masonry.png" alt="" /><nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 175W</td>
            <td class="tunitc6">建築物+10% HP，建築護甲+1/+1，+3建築護甲。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/fortified_wall.png"
                alt=""
              /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100W</td>
            <td class="tunitc6">
              升級為<nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
              >，使其更難被摧毀，該升級對<nuxt-link to="/building/Gate"
                >城門</nuxt-link
              >有同樣效果。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/ballistics.png" alt="" /><nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300W 175G</td>
            <td class="tunitc6">
              弓兵、馬弓騎兵、<nuxt-link to="/units/Naval_Vessels"
                >戰船</nuxt-link
              >、城堡和<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >對移動單位的命中率提升。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                to="/building/Guard_Tower"
                >防禦箭塔</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">100F 250W</td>
            <td class="tunitc6">
              升級為<nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/heated_shot.png" alt="" /><nuxt-link
                to="/techs/Heated_Shot"
                >火箭</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">350F 100G</td>
            <td class="tunitc6">箭塔對船隻攻擊+125%，城堡對船隻攻擊+25%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/murder_holes.png" alt="" /><nuxt-link
                to="/techs/Murder_Holes"
                >近射孔</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100S</td>
            <td class="tunitc6">移除建築物的最小射程。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/treadmill_crane.png"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">村民建造建築速度+20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/architecture.png" alt="" /><nuxt-link
                to="/techs/Architecture"
                >建築學</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">建築物+10% HP，建築護甲+1/+1，+3建築護甲。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/chemistry.png" alt="" /><nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">
              開火單位(包括攻城單位)攻擊+1。研發後可生產<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/siege_engineers.png"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">500F 600W</td>
            <td class="tunitc6">
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >攻擊範圍+1(<nuxt-link to="/units/Battering_Ram"
                >輕型衝撞車</nuxt-link
              >除外)。對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊加成+20%(<nuxt-link to="/units/Petard">炸藥桶</nuxt-link
              >+40%)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                to="/building/Keep"
                >大型箭塔</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">500F 350W</td>
            <td class="tunitc6">
              升級為更強大的<nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/arrowslits.png" alt="" /><nuxt-link
                to="/techs/Arrowslits"
                >箭狹槽</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">250F 250W</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >/防禦箭塔/大型箭塔攻擊+1/+2/+3。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/bombard_tower_tech.png"
                alt=""
              /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">800F 400W</td>
            <td class="tunitc6">
              研發後可建造<nuxt-link to="/building/Bombard_Tower"
                >火砲塔</nuxt-link
              >，需先研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link>。
            </td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/padded_archer_armor.png"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link>
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F</td>
            <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/leather_archer_armor.png"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 150G</td>
            <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/ring_archer_armor.png"
                alt=""
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">250F 250G</td>
            <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/fletching.png" alt="" /><nuxt-link
                to="/techs/Fletching"
                >絕世好箭</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 50G</td>
            <td class="tunitc6">
              弓兵、城堡、箭塔、戰船維京大戰船、卡拉維爾戰船、海港、營壘、戰矛兵、標槍騎兵和火炮塔+1攻擊和+1射程。
              城鎮中心攻擊和視野各+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/bodkin_arrow.png" alt="" /><nuxt-link
                to="/techs/Bodkin_Arrow"
                >羽箭</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">
              弓兵、城堡、箭塔、戰船維京大戰船、卡拉維爾戰船、海港、營壘、戰矛兵、標槍騎兵和火炮塔+1攻擊和+1射程。
              城鎮中心攻擊和視野各+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Bracer.png" alt="" /><nuxt-link
                to="/techs/Bracer"
                >強力護腕</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">
              弓兵、城堡、箭塔、戰船維京大戰船、卡拉維爾戰船、海港、營壘、戰矛兵、標槍騎兵和火炮塔+1攻擊和+1射程。
              城鎮中心攻擊和視野各+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/forging.png" alt="" /><nuxt-link
                to="/techs/Forging"
                >鍛造技術</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F</td>
            <td class="tunitc6">步兵騎兵攻擊+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/iron_casting.png" alt="" /><nuxt-link
                to="/techs/Iron_Casting"
                >鑄造技術</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">220F 120G</td>
            <td class="tunitc6">步兵騎兵攻擊+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/blast_furnace.png"
                alt=""
              /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">275F 225G</td>
            <td class="tunitc6">步兵騎兵攻擊+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/scale_barding_armor.png"
                alt=""
              /><nuxt-link to="/techs/Scale_Barding_Armor">鱗鎧甲</nuxt-link>
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F</td>
            <td class="tunitc6">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵護甲</nuxt-link
              >+1/+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/chain_barding_armor.png"
                alt=""
              /><nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">250F 150G</td>
            <td class="tunitc6">騎兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/plate_barding_armor.png"
                alt=""
              /><nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">350F 200G</td>
            <td class="tunitc6">騎兵護甲+1/+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/scale_mail_armor.png"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link>
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F</td>
            <td class="tunitc6">步兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/chain_mail_armor.png"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">步兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/plate_mail_armor.png"
                alt=""
              /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 150G</td>
            <td class="tunitc6">步兵護甲+1/+2。</td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/gold_mining.png" alt="" /><nuxt-link
                to="/techs/Gold_Mining"
                >採金技術</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 75W</td>
            <td class="tunitc6">村民採金速度快15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/stone_mining.png" alt="" /><nuxt-link
                to="/techs/Stone_Mining"
                >採石技術</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 75W</td>
            <td class="tunitc6">村民採石速度快15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/gold_shaft_mining.png"
                alt=""
              /><nuxt-link to="/techs/Gold_Shaft_Mining">採金裝置</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 150W</td>
            <td class="tunitc6">村民採金速度快15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/stone_shaft_mining.png"
                alt=""
              /><nuxt-link to="/techs/Stone_Shaft_Mining">採石裝置</nuxt-link>
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 150W</td>
            <td class="tunitc6">村民採石速度快15%。</td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/double-bit_axe.png"
                alt=""
              /><nuxt-link to="/techs/Double-Bit_Axe">雙面斧</nuxt-link>
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 50W</td>
            <td class="tunitc6">村民伐木速度快20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/bow_saw.png" alt="" /><nuxt-link
                to="/techs/Bow_Saw"
                >弓形鋸</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 100W</td>
            <td class="tunitc6">村民伐木速度快20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/two-man_saw.png" alt="" /><nuxt-link
                to="/techs/Two-Man_Saw"
                >雙人鋸</nuxt-link
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">村民伐木速度快10%。</td>
          </tr>
        </table>

        <h3><nuxt-link to="/building/Mill">磨坊</nuxt-link></h3>
        <div class="hrn1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tunitcc" style="width: 15%;">科技</td>
            <td class="tunitcc" style="width: 10%;">時代</td>
            <td class="tunitcc" style="width: 15%;">成本</td>
            <td class="tunitcc">影響</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/horse_collar.png" alt="" /><nuxt-link
                to="/techs/Horse_Collar"
                >獸耕技術</nuxt-link
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">75F 75W</td>
            <td class="tunitc6">
              <nuxt-link to="/building/Farm">農田</nuxt-link>產量+75
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/heavy_plow.png" alt="" /><nuxt-link
                to="/techs/Heavy_Plow"
                >重型耕犁</nuxt-link
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">125F 125W</td>
            <td class="tunitc6">農田產量+125，村民每趟食物攜帶量+1</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/crop_rotation.png"
                alt=""
              /><nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">250F 250W</td>
            <td class="tunitc6">農田產量+175</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: '科技 - Aoetw'
    }
  },
  components: {}
}
</script>
<style></style>
