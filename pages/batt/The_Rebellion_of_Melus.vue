<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>邁勒斯叛變</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>邁勒斯叛變</b>，是<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >；<nuxt-link to="/batt/Baria">巴里戰役</nuxt-link
            >的第二關。主角是邁克爾(Michael Nautikos)正在<nuxt-link
              to="/batt/Baria"
              >巴里</nuxt-link
            >領主梅勒斯的領導下工作。梅勒斯派邁克爾去附近的倫巴第村莊招募更多士兵來抵抗反叛軍，而倫巴第酋長拒絕了他們的請求。然後，梅勒斯派邁克爾前往布林迪西，向她們的首領施壓要求貢品。回到巴里後，邁克爾知道梅洛斯正在反抗<nuxt-link
              to="/civs/Byzantines"
              >拜占庭</nuxt-link
            >帝國，因此邁克爾帶著他的軍隊逃離巴里，從諾曼城國王手中獲得了更多的士兵，並為他們帶來一件<nuxt-link
              to="/elements/Relic"
              >遺跡</nuxt-link
            >後接管諾曼城鎮卡，之後抵抗並擊退梅勒斯的軍隊。
          </p>
          <p>
            玩家只能發展到<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >，而對手會晉級到帝王時代。雖然玩家沒有<nuxt-link
              to="/building/Palisade_Wall"
              >木牆</nuxt-link
            >和<nuxt-link to="/building/Gate">城門</nuxt-link>，<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >，<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
            >，爆破船，<nuxt-link to="/units/Camel">駱駝</nuxt-link>和<nuxt-link
              to="/building/Stone_Wall"
              >城牆</nuxt-link
            >升級，但少數帝王時代的技術幫玩家升級好了，例如精英<nuxt-link
              to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >，<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
            >，<nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
            >等。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">城堡時代</td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Gold">黃金</nuxt-link>100
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p1">玩家1</div></td>
              <td class="tc6" colspan="3">拜占庭（藍色）</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%"><div class="p6">玩家2</div></td>
              <td class="tc6" width="35%">
                巴里（紫色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
              <td class="tc6"><div class="p4">玩家3</div></td>
              <td class="tc6">拜占庭帝國（黃色）拜占庭</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p3">玩家4</div></td>
              <td class="tc6">
                友好的倫巴第人（綠色）<nuxt-link to="/civs/Goths"
                  >哥德</nuxt-link
                >
              </td>
              <td class="tc6"><div class="p5">玩家5</div></td>
              <td class="tc6">
                當地的<nuxt-link to="/civs/Italians">義大利人</nuxt-link
                >（水藍）義大利
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p7">玩家6</div></td>
              <td class="tc6">
                諾曼人（灰色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p2">玩家7</div></td>
              <td class="tc6">梅勒斯（紅色）拜占庭</td>
              <td class="tc6"><div class="p8">玩家8</div></td>
              <td class="tc6">反叛軍（橘色）哥德</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>邁克爾‧諾蒂卡斯</dd>
            <dt>大地之母單位：</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>邁克爾一定要活著。</li>
              <li>帶邁克爾去見北方倫巴第鎮的酋長（披著斗篷的人）</li>
              <li>帶邁克爾回去見梅勒斯。</li>
              <li>
                帶邁克爾去布林迪西的教堂會見城主:一位<nuxt-link to="/units/Monk"
                  >僧侶</nuxt-link
                >長老。
              </li>
              <li>帶邁克爾和他的兵馬回去見巴里的梅勒斯。</li>
              <li>邁克爾和他的兵馬必須西逃尋求避難所。</li>
              <li>帶邁克爾到諾曼城卡布亞會見那裡的國王並尋求幫助。</li>
              <li>把沼澤地的聖物帶回來卡布亞教堂。</li>
              <li>
                摧毀所有軍事和經濟<nuxt-link to="/building">建築</nuxt-link
                >，士兵和<nuxt-link to="/units/Naval_Vessels">船艦</nuxt-link
                >來打敗叛軍。不要擔心巴里被摧毀，當叛亂被鎮壓後可以重建。
                一旦巴里被重奪，叛軍被打敗，帶邁克爾去梅勒斯城堡的庭院。
              </li>
            </ol>
          </div>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>帶邁克爾去波坦察並找他們的首領需求幫助。</li>
              <li>
                摧毀叛軍的營地（所有的塔，<nuxt-link to="/building/Barracks"
                  >軍營</nuxt-link
                >和<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
                >）並殺死巴里的達特斯（紅色<nuxt-link to="/units/Knight"
                  >騎士</nuxt-link
                >）。然後帶邁克爾回去見波坦察國王。
              </li>
              <li>在有旗子標誌的地點建造一座塔來保衛倫巴第城不受叛軍攻擊。</li>
            </ol>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                戰鬥的時候運用好的戰術，克制兵種以及上坡優勢。通常，你需要利用你所有的優勢！
              </li>
              <li>
                請按照任務視窗以及遊戲進行中出現任務指示操作，它們有非常有用的資訊！
              </li>
              <li>
                地圖裡有很多秘密，獎勵以及要求，甚至重曆已經去過的地方也會有幫助的，但一定要隨身帶上邁克爾。他是你的嚮導，任何你看到的人都會想與他說話。
              </li>
              <li>
                你需要當地人的支援來對抗叛亂軍。一座城堡和一個好的港口至關重要。波坦察城兼有兩者。
              </li>
              <li>
                反抗軍將會控制一個比你的小鎮更先進繁榮的城邦，這意味著他們會有比你更高級的<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                >和更先進的兵種。然而，他們在包圍下不能重建軍事建築。
              </li>
              <li>邁克爾‧諾蒂卡斯只能到達城堡時代並且不能建造很多防禦工事。</li>
            </ol>
          </div>
          <h2>斥候</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                邁克爾的家鄉巴里城（紫色）位於義大利南部的亞得里亞海岸上的阿普利亞。
                它有重兵把守，戒備森嚴，而且還有很多塔和城堡。
              </li>
              <li>在東北方，梅勒斯城堡鎮守著一個大港口。</li>
              <li>
                巴里由拜占庭皇家禁衛軍（黃色），梅勒斯的士兵——如倫巴第，<nuxt-link
                  to="/civs/Goths"
                  >哥德人</nuxt-link
                >和諾曼人（紅色）等守衛著。
              </li>
              <li>
                巴里向東的路通向友邦的<nuxt-link to="/building/Harbor"
                  >海港</nuxt-link
                >城布林迪西（青綠色），它是巴里主要的貿易對象也是拜占庭帝國的一部分。
              </li>
            </ol>
          </div>
        </div>
        <h2>故事情節攻略</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              邁克爾和他的領主梅勒斯正在巴里的城堡對話。梅勒斯命令邁克爾去北邊附近的倫巴第村莊找一些士兵。此時，玩家將擁有邁克爾和兩個擲斧手。
            </li>
            <li>
              途中，邁克爾遇到了一些“反抗軍”，在進入倫巴第村莊之前不得不將他們殺死。倫巴第酋長拒絕了邁克爾的要求，表示倫巴第也受到叛軍的威脅，他們沒有足夠的士兵支援梅勒斯。然後邁克爾回去見梅勒斯。然後，梅勒斯會派邁克爾前往巴里以東的布林迪西，要求表示敬意。玩家會得翻皇家禁衛軍與<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >。
            </li>
            <li>
              當邁克爾與一個布林迪西的領導人(僧侶)見面時，這位僧侶一開始拒絕納貢，因為他早已預料到梅勒斯實際上正在策劃對拜占庭帝國的叛亂，指出梅勒斯的部隊由倫巴第和諾曼人組成，即使邁克爾也有同樣的疑問。但最後，在邁克爾的壓力下，僧侶領導不情願地交出黃金。
            </li>
            <li>
              隨著邁克爾回到巴里，梅勒斯開始叛亂，邁克爾必須帶著<nuxt-link
                to="/techs/Squires"
                >護衛</nuxt-link
              >軍逃離巴里。在玩家離開巴里一段距離後，梅勒斯和反抗軍都會與玩家發生衝突。之後遇到塞恩酋長，塞恩酋長表示可以卡布亞城與波坦察城得到援助，並從他身上獲得幾名士兵。
            </li>
            <li>
              在前往卡布亞城的路途中，玩家沿路都會遇到梅勒斯的部隊，玩家須沿著沼澤移動避免與他們戰鬥。到達卡布亞城後，諾曼領主請求邁克爾，把遺跡帶回<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >。
            </li>
            <li>
              玩家在沼澤找到遺跡，盡量避開狼群與梅勒斯的軍隊，拿到遺跡回到修道院，遺跡放進修道院後，玩家將接管整個卡布亞城。卡布亞城是玩家的主要基地。邁克爾警告說，叛軍一旦發現卡布亞城就會開始攻擊。
            </li>
            <li>
              反叛軍必須摧毀他們的<nuxt-link to="/building">建築物</nuxt-link
              >和單位來擊敗。玩家將停留在城堡時代，敵人卻是<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >，盡量以防守與經濟為主，可以在小路或橋梁通道蓋城牆來防禦，可以派僧侶隔牆<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >敵方的騎士，這樣也能透過招降的騎士來打<nuxt-link
                to="/units/Siege_Weapons$"
                >攻城武器</nuxt-link
              >
            </li>
            <li>
              一旦叛軍被擊敗，玩家將邁克爾帶回到一開始的巴里城堡外庭院。邁克爾知道梅勒斯已經不在，遊戲勝利。
            </li>
          </ul>
        </div>
        <h2>收集資源</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              布亞城裡的<nuxt-link to="/resource/Wood">木材</nuxt-link
              >，黃金和<nuxt-link to="/resource/Stone">石頭</nuxt-link
              >三種資源都可以無限挖，資源採完會反覆生出來。
            </li>
            <li>
              設法清除道路上的梅勒軍隊，盡可能建<nuxt-link to="/building/Farm"
                >農田</nuxt-link
              >來採<nuxt-link to="/resource/Food">食物</nuxt-link>。
            </li>
            <li>
              由於地形問題，村莊附近無法蓋<nuxt-link to="/building/Dock"
                >碼頭</nuxt-link
              >，必須要跑到上面的外海才能蓋碼頭。
            </li>
            <li>
              地圖南端有倫巴第的金礦，靠近後，就能直接接收<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >，並幫玩家挖礦。
            </li>
          </ul>
          <div class="hrn1"></div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                邁勒斯叛變
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Bari.2.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/batt/Baria">巴里</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Byzantines">拜占庭人</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第三章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Arrival_at_Bari">抵達巴里</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Great_Siege">四面楚歌</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、阿湖協助編輯</div>
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
