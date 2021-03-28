<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>西西里的羅傑</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>西西里的羅傑</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/The_Hautevilles"
              >歐特維爾家族</nuxt-link
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
              <td class="tc2" width="28%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                >（標準難度）<br /><nuxt-link to="/techs/age/Feudal_Age"
                  >封建時代</nuxt-link
                >（其他難度）
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
              <td class="tc6">
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                諾曼人［<nuxt-link to="/civs/Sicilians">西西里人</nuxt-link
                >］（藍色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家7
              </td>
              <td class="tc6">
                伊本‧亭拿→強盜［註］（黃色）<nuxt-link to="/civs/Berbers"
                  >柏柏人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p7"></div>
                玩家8
              </td>
              <td class="tc6">西西里人（灰色）西西里人</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家2
              </td>
              <td class="tc6">
                埃米爾‧伊本‧沃德（橙色）<nuxt-link to="/civs/Saracens"
                  >薩拉森人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家3
              </td>
              <td class="tc6">
                埃米爾‧伊本‧曼庫特（紫色）薩拉森人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家4
              </td>
              <td class="tc6">
                埃米爾‧伊本‧哈瓦斯（綠色）薩拉森人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家5
              </td>
              <td class="tc6">
                齊里親王阿尤布（紅色）柏柏人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家6
              </td>
              <td class="tc6">
                齊里親王阿里（青色）柏柏人
              </td>
            </tr>
          </table>

          註：把伊本‧亭拿交出去後，會更改名字和外交關係。<br />

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              羅傑‧博索、伊本‧亭拿、羅塞爾‧德‧拜約勒、<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >x7、<nuxt-link to="/units/Scout_Cavalry">斥侯騎兵</nuxt-link
              >x2、<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >x2、<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link>x5
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>請從以下任務中選擇一項：</li>
              <ol>
                <li>
                  將伊本‧亭拿送上伊本‧哈瓦斯的<nuxt-link
                    to="/units/Transport_Ship"
                    >運輸船</nuxt-link
                  >，交給他的敵人。
                </li>
                <li>忽略伊本‧哈瓦斯的要求。</li>
              </ol>
              <li>殺死5個埃米爾或親王，佔領他的城市。</li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>使用羅傑‧博索戰鬥，藉由戰鬥提升他的能力。</li>
              <li>
                將<nuxt-link to="/Relic">聖物</nuxt-link
                >帶給西西里人（8，灰色），以在<nuxt-link to="/civs/Berbers"
                  >柏柏</nuxt-link
                >控制的城市中煽動叛亂。
              </li>
              <li>收編伊本‧亭拿的追隨者。（選1，佔領敘拉古前）</li>
              <li>為伊本‧亭拿佔領敘拉古（2，橙色）。（選1）</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                羅傑‧博索可以升級至<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >，但您在本戰役的任何劇本都不能訓練<nuxt-link
                  to="/units/Gunpowder_Unit"
                  >火藥單位</nuxt-link
                >。
              </li>
              <li>
                諾曼人的人口很少。遊戲開始時您的人口上限僅為80人且不能建造<nuxt-link
                  to="/building/House"
                  >居住房舍</nuxt-link
                >。
              </li>
              <li>
                您可以藉由佔領各個西西里城市來提高人口上限。每佔領一個城市可以提高人口上限30人。
              </li>
              <li>
                您可以夠過把聖物帶到巴勒莫（5，紅色）和阿格里真托（6，青色）外的西西里<nuxt-link
                  to="/building/Monastery"
                  >修道院</nuxt-link
                >，在兩位柏柏親王的領土上煽動叛亂。不過您將會失去這些聖物。
              </li>
              <li>
                專注於擊殺敵方埃米爾和親王，同時保住他們的城市和軍隊。他們的領袖一旦陣亡，他們就會服從於您。
              </li>
              <li>
                如果您選擇支持伊本‧亭拿，那就積極探索島嶼，找到他的支持者。支持當地派系也能讓您訓練<nuxt-link
                  to="/units/Genitour"
                  >標槍騎兵</nuxt-link
                >。
              </li>
              <li>
                如果您選擇把伊本‧亭拿交給伊本‧哈瓦斯，就可以使用您獲得的資源建立一支強力的入侵部隊。不過伊本‧亭拿的支持者將會變為敵對，而且您將無法訓練標槍騎兵。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                羅傑‧德‧歐特維爾（1，藍色）召集了諾曼人入侵西西里。伊本‧亭拿（7，黃色），一個被流放的穆斯林埃米爾，許諾會幫助他。
              </li>

              <li>
                三個<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
                >埃米爾統治著西西里。伊本‧哈瓦斯（4，綠色）統治西西里中央的切拉米，伊本‧沃德（2，橙色）統治東南方的敘拉古，伊本‧曼庫特（3，紫色）統治著西方的馬札拉德瓦落。每個派系都採用混合的<nuxt-link
                  to="/civs/Saracens"
                  >薩拉森</nuxt-link
                >單位類型作戰。
              </li>

              <li>
                <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
                >齊里王朝的兩位親王妻子在西西里獲得權力和影響力。阿尤布親王（5，紅色）在巴勒莫控制著島嶼的北部，同時他的弟弟阿里親王（6，青色）在阿格里真托控制著島嶼的南部。兩位親王都指揮以<nuxt-link
                  to="/units/Camel_Archer"
                  >駱駝弓騎兵</nuxt-link
                >、<nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
                >為主的機動軍隊作戰。
              </li>

              <li>
                儘管西西里已經被穆斯林埃米爾統治了兩個世紀，但島上仍然存在著一個多元宗教社群（8，灰色），其中包括天主教、東正教和穆斯林。這些西西里團體對兩位柏柏親王沒有任何好感，如果您能把聖物帶到他們的修道院、他們就會在巴垃莫和阿格里真托煽動叛亂。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始就兩個選擇，交出人或是忽略要求。交出人可以得到一筆資源以建立軍隊入侵島嶼，但黃色會改敵對且名字改為強盜；忽略要求可以在島上招募黃色的部隊。選擇忽略要求比較好，不然遇到黃色的還要跟他打。
            </li>

            <li>
              任務目標是殺掉五個領袖以占領各個城市，這關的人口上限要透過占領城市來提升。首先集結軍隊後殺向綠色，再來就是發展、集結軍隊，收割掉剩下四個首領的腦袋。期間紅色和青色兩邊如果將<nuxt-link
                to="/Relic"
                >聖物</nuxt-link
              >放到他們附近的<nuxt-link to="/building/Monastery"
                >修道院</nuxt-link
              >，會有內鬼發動叛亂，城內外有部份軍隊成為我方並攻擊地當敵軍，主力部隊出擊前在再發動以配合軍事行動。只要煽動其中一次叛亂就有成就「曇花一現」；如果沒把亭拿交出去，黃色在我方打下橙色後，<nuxt-link
                to="/building"
                >建築</nuxt-link
              >和單位會變成他的然後幫我們出兵（但之後就不能招募四散各處的駱駝弓騎），同時會有30位東方劍兵加入我方的陣營。
            </li>

            <li>
              隨戰事發展會陸續有<nuxt-link to="/units/Knight">騎士</nuxt-link
              >和<nuxt-link to="/units/Serjeant">薩金特衛兵</nuxt-link
              >的援軍，但是敵人以<nuxt-link to="/units/Camel_Rider"
                >駱駝騎兵</nuxt-link
              >和弓騎兵類型為主，效益不大。出擊兵種以<nuxt-link
                to="/units/Arbalest"
                >強弩兵</nuxt-link
              >為主搭配<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >和<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >，也可投入一些<nuxt-link to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >或標槍騎兵（不能交人）對付馬弓系敵軍，等首領出來就集中火力攻擊。有時敵軍進攻時首領會一起出擊，應把握難得的良機趁勢狙殺首領，否則首領的生命點數低到一定值後會撤退到自己的城市。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                本戰役是首次領導者名稱會隨事件改變的戰役，如果把伊本‧亭拿交出去後，黃色軍隊的名字會改成強盜。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">西西里的羅傑</div>
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
              <nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batts/The_Hautevilles">歐特維爾家族</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link>
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
              歐特維爾家族第二章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Guiscard_Addrives">吉斯卡爾的到來</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Bohemond_and_the_Emperor"
                >博希蒙德與皇帝</nuxt-link
              >
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
