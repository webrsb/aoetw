<template>
  <div class="container">
    <div class="row" style=" margin-top:20px">
      <div class="col-md-12">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#274a7d;">
              <div class="unititle" style="color: #fff;">
                <nuxt-link to="/units">世紀帝國II的單位</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3" colspan="2" style="text-align: center;">
              <nuxt-link to="/units/Monk">僧侶</nuxt-link>•
              <nuxt-link to="/units/Villager">村民</nuxt-link>•
              <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>•
              <nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>•
              <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>•
              <nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/units/Militia">民兵</nuxt-link>•
              <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>•
              <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>•
              <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>•
              <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
              <br />
              <nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>•
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>•
              <nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link>
              <br />
              <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>•
              <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>•
              <nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/units/Archer">弓兵</nuxt-link>•
              <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>•
              <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link><br />
              <nuxt-link to="/units/Skirmisher">戰矛兵</nuxt-link>•
              <nuxt-link to="/units/Elite_Skirmisher">精銳戰矛兵</nuxt-link>•
              <nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link>
              <br />
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>•
              <nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >
              <br />
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>•
              <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>•
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>•
              <nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>
              <br />
              <nuxt-link to="/units/Knight">騎士</nuxt-link>•
              <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>•
              <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
              <br />
              <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>•
              <nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>•
              <nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link>
              <br />
              <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>•
              <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/units/Siege_Weapons">攻城武器單位</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>•
              <nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>•
              <nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
              <br />
              <nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>•
              <nuxt-link to="/units/Onager">中型投石車</nuxt-link>•
              <nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
              <br />
              <nuxt-link to="/units/Scorpion">弩砲</nuxt-link>•
              <nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
              <br />
              <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>•
              <nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>
              <br />
              <nuxt-link to="/units/Petard">爆炸桶</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/units/Naval_Vessels">船艦單位</nuxt-link>
            </td>
            <td class="unit3">
              <nuxt-link to="/units/Galley">戰船</nuxt-link>•
              <nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>•
              <nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link><br />
              <nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>•
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>•
              <nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>
              <br />
              <nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>•
              <nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>•
              <nuxt-link to="/units/Heavy_Demolition_Ship"
                >重型神風船</nuxt-link
              >
              <br />
              <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>•
              <nuxt-link to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >
              <br />
              <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>•
              <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>•
              <nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3" style="width: 5%;">
              <nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link>
            </td>
            <td class="unit3">
              <div class="row">
                <div class="col-md-4">
                  <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link><br />
                  <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link><br />
                  <nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link><br />
                  <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link><br />
                  <nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link>
                  <br />
                  <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link><br />
                  <nuxt-link to="/units/Samurai">日本武士</nuxt-link><br />
                  <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link><br />
                  <nuxt-link to="/units/War_Elephant">波斯戰象</nuxt-link>
                  <br />
                  <nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link><br />
                  <nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>
                  <br />
                  <nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>
                  <br />
                  <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>
                </div>
                <div class="col-md-4">
                  <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link><br />
                  <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link><br />
                  <nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link><br />
                  <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link><br />
                  <nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Conquistador">征服者</nuxt-link><br />
                  <nuxt-link to="/units/Missionary">傳教士</nuxt-link><br />
                  <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link><br />
                  <nuxt-link to="/units/Slinger">投石手</nuxt-link><br />
                  <nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Genoese_Crossbowman"
                    >熱那亞弩手</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
                </div>
                <div class="col-md-4">
                  <nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link><br />
                  <nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link><br />
                  <nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link><br />
                  <nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link><br />
                  <nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link><br />
                  <nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
                  ><br />
                  <nuxt-link to="/units/Imperial_Skirmisher"
                    >帝王戰矛兵</nuxt-link
                  >
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
