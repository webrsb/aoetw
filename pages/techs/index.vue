<template>
  <div class="container" style="margin-top:50px">
    <!-- Example row of columns -->
    <h1>科技</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          下面將列出遊戲中所有科技，單位的升級不列在此。F=食物 W=木材 G=金
          S=石頭
        </p>
        <p>各國特殊科技銀冠、金冠請見:<a href="untech.php">特殊科技總攬</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3><a href="Barracks.php">軍營</a></h3>
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
              <img class="gg" src="~assets/Tracking.jpg" alt="" /><a
                href="Tracking.php"
                >追縱技術</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">50F</td>
            <td class="tunitc6">步兵+2視野</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Squires.jpg" alt="" /><a
                href="Squires.php"
                >護衛</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">100F</td>
            <td class="tunitc6">步兵速度+10%</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Arson.jpg" alt="" /><a
                href="Arson.php"
                >縱火</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 50G</td>
            <td class="tunitc6">
              步兵+2攻擊vs<a href="Armor_class_standard_building.php"
                >標準建築</a
              >
            </td>
          </tr>
        </table>

        <h3><a href="Archery_Range.php">射箭場</a></h3>
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
              <img class="gg" src="~assets/Thumb_Ring.png" alt="" /><a
                href="Thumb_Ring.php"
                >拇指環</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 250W</td>
            <td class="tunitc6">
              弓兵和馬騎弓兵開火速率更快並擁有100%命中率。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Parthian-Tactics.jpg" alt="" /><a
                href="Parthian_Tactics.php"
                >帕提亞戰術</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">200F 250G</td>
            <td class="tunitc6">
              馬騎弓兵護甲+1/+2，對<a href="Pikeman.php">長槍兵</a>攻擊+4。
            </td>
          </tr>
        </table>

        <h3><a href="Stable.php">馬廄</a></h3>
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
              <img class="gg" src="~assets/Bloodlines.png" alt="" /><a
                href="Bloodlines.php"
                >品種</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F 100G</td>
            <td class="tunitc6">騎兵部隊生命值+20。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Husbandry.jpg" alt="" /><a
                href="Husbandry.php"
                >畜牧培育</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F</td>
            <td class="tunitc6">騎兵移動速度+10%。</td>
          </tr>
        </table>

        <h3><a href="Town_Center.php">城鎮中心</a></h3>
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
              <img class="gg" src="~assets/Loom.jpg" alt="" /><a href="Loom.php"
                >織布技術</a
              >
            </td>
            <td class="tunitc4">黑暗</td>
            <td class="tunitc5">50G</td>
            <td class="tunitc6">村民+15 HP，護甲+1/+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Wheelbarrow.jpg" alt="" /><a
                href="Wheelbarrow.php"
                >獨輪推車</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">175F 50W</td>
            <td class="tunitc6">村民速度快10%，每趟可攜帶資源量+25%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Handcart.jpg" alt="" /><a
                href="Hand_Cart.php"
                >手推車</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">村民速度快10%，每趟可攜帶資源量+50%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Townwatch.jpg" alt="" /><a
                href="Town_Watch.php"
                >城鎮暸望</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">75F</td>
            <td class="tunitc6">建築視野+4。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Townpatrol.jpg" alt="" /><a
                href="Town_Patrol.php"
                >城鎮巡邏</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 100G</td>
            <td class="tunitc6">建築視野+4。</td>
          </tr>
        </table>

        <h3><a href="Monastery.php">修道院</a></h3>
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
              <img class="gg" src="~assets/Redemption.jpg" alt="" /><a
                href="Redemption.php"
                >信仰救贖</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">475G</td>
            <td class="tunitc6">僧侶可招降大部分建築物和攻城單位。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Atonement.jpg" alt="" /><a
                href="Atonement.php"
                >贖罪</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">325G</td>
            <td class="tunitc6">僧侶可招降對方的僧侶。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Herbalmedicine.png" alt="" /><a
                href="Herbal_Medicine.php"
                >草藥學</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">350G</td>
            <td class="tunitc6">駐紮單位自身治療速度變為4倍。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Heresy.png" alt="" /><a
                href="Heresy.php"
                >異端邪說</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">1000G</td>
            <td class="tunitc6">被招降的單位/建築物立即死亡/毀壞。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Sanctity.jpg" alt="" /><a
                href="Sanctity.php"
                >聖潔虔誠</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">120G</td>
            <td class="tunitc6">僧侶+15 HP。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Fervor.jpg" alt="" /><a
                href="Fervor.php"
                >宗教狂熱</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">140G</td>
            <td class="tunitc6">僧侶移動速度+15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Faith.jpg" alt="" /><a
                href="Faith.php"
                >忠誠信仰</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">750F 1000G</td>
            <td class="tunitc6">單位對僧侶(傳教士)的招降更具抵抗力。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Illumination.jpg" alt="" /><a
                href="Illumination.php"
                >啟發教化</a
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
              <img class="gg" src="~assets/Blockprinting.jpg" alt="" /><a
                href="Block_Printing.php"
                >雕版印刷術</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">200G</td>
            <td class="tunitc6">僧侶(傳教士)的招降範圍+3。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Theocracy.png" alt="" /><a
                href="Theocracy.php"
                >神權統治</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">200G</td>
            <td class="tunitc6">
              一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。
            </td>
          </tr>
        </table>

        <h3><a href="Market.php">市集</a></h3>
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
              <img class="gg" src="~assets/Cartography.jpg" alt="" /><a
                href="Cartography.php"
                >製圖法</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">免費</td>
            <td class="tunitc6">可看到所有同盟的視野。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/CaravanII.png" alt="" /><a
                href="Caravan.php"
                >大商隊</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 200G</td>
            <td class="tunitc6">
              <a href="Trade_Cart.php">貿易馬車</a>和<a href="Trade_Cog.php"
                >貿易商旅</a
              >的移動速度快50%。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Coinage.jpg" alt="" /><a
                href="Coinage.php"
                >鑄幣術</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">進貢費用減少至20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Banking.jpg" alt="" /><a
                href="Banking.php"
                >銀行制度</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">進貢費用免費。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Guilds.jpg" alt="" /><a
                href="Guilds.php"
                >行會制度</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">在市場交易課稅減至15%。</td>
          </tr>
        </table>

        <h3><a href="Castle.php">城堡</a></h3>
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
              <img class="gg" src="~assets/Spiestreason.jpg" alt="" /><a
                href="Spies.php"
                >間諜</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">每個敵方村民耗費200G，最高花費30000G。</td>
            <td class="tunitc6">可得到敵方視野。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Spiestreason.jpg" alt="" /><a
                href="Spies.php"
                >叛徒</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">400G</td>
            <td class="tunitc6">
              在弒君模式下可短暫看見敵對國王位置。小地圖上以X顯示。該科技只在弒君模式有。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Hoardings.jpg" alt="" /><a
                href="Hoardings.php"
                >外架式柵樓</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">400F 400W</td>
            <td class="tunitc6">城堡+21% HP。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Sappers.jpg" alt="" /><a
                href="Sappers.php"
                >坑道工兵</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">400F 200G</td>
            <td class="tunitc6">村民對建築物攻擊+15。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Conscription.jpg" alt="" /><a
                href="Conscription.php"
                >徵兵制度</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">150F 150G</td>
            <td class="tunitc6">軍營、靶場、馬廄、城堡訓練部隊速度+33%。</td>
          </tr>
        </table>

        <h3><a href="Dock.php">碼頭</a></h3>
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
              <img class="gg" src="~assets/Careening.jpg" alt="" /><a
                href="Careening.php"
                >傾側維修術</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">250F 150G</td>
            <td class="tunitc6">船隻護甲+1，運輸船可承載單位+5。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Drydock.jpg" alt="" /><a
                href="Dry_Dock.php"
                >旱碼頭</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">600F 400G</td>
            <td class="tunitc6">船隻航行速度+15%，運輸船可承載單位+10。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Shipwright.jpg" alt="" /><a
                href="Shipwright.php"
                >造船匠</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">1000F 300G</td>
            <td class="tunitc6">船隻造價-20%，單位生產速度+35%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Gillnetsicon.jpg" alt="" /><a
                href="Gillnets.php"
                >流刺網</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 200G</td>
            <td class="tunitc6">漁船工作速率+25%。</td>
          </tr>
        </table>

        <h3><a href="University.php">學院</a></h3>
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
              <img class="gg" src="~assets/Masonry.jpg" alt="" /><a
                href="Masonry.php"
                >磚瓦技術</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 175W</td>
            <td class="tunitc6">建築物+10% HP，建築護甲+1/+1，+3建築護甲。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Stonewallicon.png" alt="" /><a
                href="Fortified_Wall.php"
                >垛牆</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100W</td>
            <td class="tunitc6">
              升級為垛牆，使其更難被摧毀，該升級對城門有同樣效果。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Ballistics.jpg" alt="" /><a
                href="Ballistics.php"
                >彈道學</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300W 175G</td>
            <td class="tunitc6">
              弓兵、馬騎弓兵、戰船、城堡和箭塔對移動單位的命中率提升。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                href="Guard_Tower.php"
                >防禦箭塔</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">100F 250W</td>
            <td class="tunitc6">升級為防禦箭塔</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Heatedshot.png" alt="" /><a
                href="Heated_Shot.php"
                >預熱射擊</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">350F 100G</td>
            <td class="tunitc6">箭塔對船隻攻擊+125%，城堡對船隻攻擊+25%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Murderholes.jpg" alt="" /><a
                href="Murder_Holes.php"
                >垛孔</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100S</td>
            <td class="tunitc6">移除建築物的最小射程。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Treadmillcrane.jpg" alt="" /><a
                href="Treadmill_Crane.php"
                >踏輪起重機</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">村民建造建築速度+20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Architecture.jpg" alt="" /><a
                href="Architecture.php"
                >建築學</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">建築物+10% HP，建築護甲+1/+1，+3建築護甲。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Chemistry.jpg" alt="" /><a
                href="Chemistry.php"
                >化學</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">
              開火單位(包括攻城單位)攻擊+1。研發後可生產火藥單位。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Siegeengineers.jpg" alt="" /><a
                href="Siege_Engineers.php"
                >攻城工程師</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">500F 600W</td>
            <td class="tunitc6">
              攻城武器攻擊範圍+1(輕型衝撞車除外)。對建築物攻擊加成+20%(炸藥桶+40%)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                href="Keep.php"
                >大型箭塔</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">500F 350W</td>
            <td class="tunitc6">升級為更強大的大型箭塔。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Arrowlits.jpg" alt="" /><a
                href="Arrowslits.php"
                >箭狹槽</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">250F 250W</td>
            <td class="tunitc6">瞭望箭塔/防禦箭塔/大型箭塔攻擊+1/+2/+3。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img
                class="gg"
                src="~assets/Bombard-tower-research.jpg"
                alt=""
              /><a href="Bombard_Tower.php">火炮塔</a>
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">800F 400W</td>
            <td class="tunitc6">研發後可建造火炮塔，需先研發化學。</td>
          </tr>
        </table>

        <h3><a href="Blacksmith.php">兵工廠</a></h3>
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
              <img class="gg" src="~assets/Paddedarcherarmor.jpg" alt="" /><a
                href="Padded_Archer_Armor.php"
                >弓兵布甲</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F</td>
            <td class="tunitc6">弓兵和馬騎弓兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Leatherarcherarmor.jpg" alt="" /><a
                href="Leather_Archer_Armor.php"
                >弓兵皮甲</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 150G</td>
            <td class="tunitc6">弓兵和馬騎弓兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Ringarcherarmor.jpg" alt="" /><a
                href="Ring_Archer_Armor.php"
                >弓兵環甲</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">250F 250G</td>
            <td class="tunitc6">弓兵和馬騎弓兵護甲+1/+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Fletching.jpg" alt="" /><a
                href="Fletching.php"
                >箭羽</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 50G</td>
            <td class="tunitc6">
              弓兵、馬騎弓兵、戰船、城堡和箭塔的攻擊+1、範圍+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Bodkinarrow.jpg" alt="" /><a
                href="Bodkin_Arrow.php"
                >錐狀箭頭</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">
              弓兵、馬騎弓兵、戰船、城堡和箭塔的攻擊+1、範圍+1。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Bracer.jpg" alt="" /><a
                href="Bracer.php"
                >護腕</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200G</td>
            <td class="tunitc6">
              弓兵、馬騎弓兵、戰船、城堡攻擊+1、範圍+1(箭塔只有攻擊+1)。
            </td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Forging.jpg" alt="" /><a
                href="Forging.php"
                >鍛造</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F</td>
            <td class="tunitc6">步兵騎兵攻擊+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Ironcasting.jpg" alt="" /><a
                href="Iron_Casting.php"
                >鑄造</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">220F 120G</td>
            <td class="tunitc6">步兵騎兵攻擊+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Blastfurnace.jpg" alt="" /><a
                href="Blast_Furnace.php"
                >鼓風爐</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">275F 225G</td>
            <td class="tunitc6">步兵騎兵攻擊+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Scalebardingarmor.jpg" alt="" /><a
                href="Scale_Barding_Armor.php"
                >騎兵鱗甲</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">150F</td>
            <td class="tunitc6">騎兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Chainbardingarmor.jpg" alt="" /><a
                href="Chain_Barding_Armor.php"
                >騎兵鎖甲</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">250F 150G</td>
            <td class="tunitc6">騎兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Platebardingarmor.jpg" alt="" /><a
                href="Plate_Barding_Armor.php"
                >騎兵板甲</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">350F 200G</td>
            <td class="tunitc6">騎兵護甲+1/+2。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Scalemailarmor.jpg" alt="" /><a
                href="Scale_Mail_Armor.php"
                >步兵鱗甲</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F</td>
            <td class="tunitc6">步兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Chainmailarmor.jpg" alt="" /><a
                href="Chain_Mail_Armor.php"
                >步兵鎖甲</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 100G</td>
            <td class="tunitc6">步兵護甲+1/+1。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Platemailarmor.jpg" alt="" /><a
                href="Plate_Mail_Armor.php"
                >步兵板甲</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 150G</td>
            <td class="tunitc6">步兵護甲+1/+2。</td>
          </tr>
        </table>

        <h3><a href="Mining_Camp.php">採礦營地</a></h3>
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
              <img class="gg" src="~assets/Goldmining.jpg" alt="" /><a
                href="Gold_Mining.php"
                >採金技術</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 75W</td>
            <td class="tunitc6">村民採金速度快15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Stonemining.jpg" alt="" /><a
                href="Stone_Mining.php"
                >採石技術</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 75W</td>
            <td class="tunitc6">村民採石速度快15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Goldshaftmining.jpg" alt="" /><a
                href="Gold_Shaft_Mining.php"
                >礦井採金</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 150W</td>
            <td class="tunitc6">村民採金速度快15%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Stone_Shaft_Mining.jpg" alt="" /><a
                href="Stone_Shaft_Mining.php"
                >礦井採石</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">200F 150W</td>
            <td class="tunitc6">村民採石速度快15%。</td>
          </tr>
        </table>

        <h3><a href="Lumber_Camp.php">伐木場</a></h3>
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
              <img class="gg" src="~assets/Doublebitaxe.jpg" alt="" /><a
                href="Double-Bit_Axe.php"
                >雙刃斧</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">100F 50W</td>
            <td class="tunitc6">村民伐木速度快20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Bowsaw.jpg" alt="" /><a
                href="Bow_Saw.php"
                >弓鋸</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">150F 100W</td>
            <td class="tunitc6">村民伐木速度快20%。</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Twomansaw.jpg" alt="" /><a
                href="Two-Man_Saw.php"
                >雙人鋸</a
              >
            </td>
            <td class="tunitc4">帝王</td>
            <td class="tunitc5">300F 200W</td>
            <td class="tunitc6">村民伐木速度快10%。</td>
          </tr>
        </table>

        <h3><a href="Mill.php">磨坊</a></h3>
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
              <img class="gg" src="~assets/Horsecollar.jpg" alt="" /><a
                href="Horse_Collar.php"
                >馬軛</a
              >
            </td>
            <td class="tunitc4">封建</td>
            <td class="tunitc5">75F 75W</td>
            <td class="tunitc6">農田產量+75</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Heavyplow.jpg" alt="" /><a
                href="Heavy_Plow.php"
                >重犁</a
              >
            </td>
            <td class="tunitc4">城堡</td>
            <td class="tunitc5">125F 125W</td>
            <td class="tunitc6">農田產量+125，村民每趟食物攜帶量+1</td>
          </tr>
          <tr>
            <td class="tunitc6">
              <img class="gg" src="~assets/Croprotation.jpg" alt="" /><a
                href="Crop_Rotation.php"
                >輪耕</a
              >
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
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
