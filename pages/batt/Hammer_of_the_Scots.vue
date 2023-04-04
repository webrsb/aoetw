<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>蘇格蘭之錘</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>蘇格蘭之錘</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/Edward_Longshanks"
              >長腿愛德華</nuxt-link
            >的第五關，也是最後一關。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
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
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Britons">不列顛人</nuxt-link>（紅色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6">英格蘭工程師（黃色）不列顛人</td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">英格蘭軍隊（橙色）不列顛人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家4
              </td>
              <td class="tc6">羅伯特‧布魯斯（綠色）塞爾特人</td>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">史特靈城堡（灰色）塞爾特人</td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">史特靈駐軍（紫色）塞爾特人</td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家7
              </td>
              <td colspan="3" class="tc6">華勒斯的軍隊（青色）塞爾特人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家8
              </td>
              <td class="tc6">
                威廉‧華勒斯（藍色）塞爾特人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              艾默‧德‧瓦倫斯、<nuxt-link to="/units/Knight">騎士</nuxt-link
              >x10、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >x10、<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>x10
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>在蘇格蘭進攻時保護英格蘭工程師。</li>
              <li>
                在您的城堡研究<nuxt-link to="/techs/Warwolf">戰狼號</nuxt-link
                >。
              </li>
              <li>攻占佔史特靈城堡並消滅其中的駐軍。</li>
              <li>打敗華勒斯的軍隊。</li>
              <li>打敗羅伯特‧布魯斯。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華國王的部隊人口上限為200人，但仍無法建造<nuxt-link
                  to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >。
              </li>
              <li>
                明智地管理您有限的部隊將會是您能否完成前期任務的關鍵。使用<nuxt-link
                  to="/units/Longbowman"
                  >長弓兵</nuxt-link
                >對抗<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
                >、用<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                >對抗<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
                >對抗<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>。
              </li>
              <li>
                華勒斯憑藉其富有魅力的領導氣質使部隊團結一心，殺死他就能讓他的手下化作鳥獸散。
              </li>
              <li>
                羅伯特‧布魯斯覬覦蘇格蘭王冠。他現在發誓效忠於您，但是他不值得信任。
              </li>
              <li>
                蘇格蘭人會發動猛烈的進攻來保衛他們的領土。建立前線基地以控制資源並持續發起進攻。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華國王（1，紅色）在史特靈城堡外紮營，以軍力包圍了城堡。此外還有一支英格蘭軍隊（3，橙色）和英格蘭工程師（2，黃色）支援他們。
              </li>
              <li>
                史特靈城堡（5，灰色）由一隻飢餓絕望的駐軍（6，紫色）防守，駐軍由<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >、<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
                >和<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>構成。
              </li>

              <li>
                威廉‧華勒斯（8，藍色）的營地位於西南方的格拉斯哥附近，他有一隊強力的貼身護衛。他的軍隊（7，青色）由騎兵、劍兵和<nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >組成。
              </li>
              <li>
                愛德華的封臣羅伯特‧布魯斯（4，綠色）是一位自行加冕為蘇格蘭國王的領主，他紮營於東北方的梅斯文附近。他的部隊有<nuxt-link
                  to="/units/Pikeman"
                  >重裝長槍兵</nuxt-link
                >、<nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link
                >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
                >，是蘇格蘭最強的部隊。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始要先保護黃色工程師的<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >免於紫色的攻擊，善用兵種相剋即可輕鬆迎擊。接著要在自己
              的城堡研究<nuxt-link to="/techs">科技</nuxt-link
              ><nuxt-link to="/techs/Warwolf">戰狼號</nuxt-link
              >，研究完後基地會出現戰狼號<nuxt-link to="/units/Trebuchet"
                >投石機</nuxt-link
              >，並有兩位<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >治療受傷的戰士。利用戰狼號指定攻擊敵人或是指定攻擊敵人巡邏的地點讓紫色的士兵出來送死，等解決得差不多再去掃蕩。把紫色的兵解決後英國基地控制權全歸我方，並出現下一個目標，打敗華勒斯。高難度的場合華勒斯的軍隊會攻打下面的營地。
            </li>

            <li>
              建立<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >發展經濟後，下一個目標是殺死華勒斯。高難度狀態下華勒斯會組織一支由劍勇、<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >和<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link
              >的軍隊主動攻擊。在接管基地後穩固經濟的同時，先應對下一階段的防守，在上方基地右側圍一下蓋城堡防禦，東南側在挖礦前先在岸邊蓋幾座<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >，然後馬上就要準備進攻華勒斯。
            </li>

            <li>
              進攻時，將一開始的部隊整隊運過去並研發<nuxt-link
                to="/units/Archer"
                >弓兵</nuxt-link
              >攻擊力和鐵鎧甲的科技再補充一些<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
              >，用戰狼後破壞<nuxt-link to="/building">建築</nuxt-link
              >後軍隊會衝來，迎擊時小心控兵。注意在華勒斯附近的<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >，利用戰狼後預判其行路徑後用指定攻擊地點擊殺。只要把華勒斯的首級取下來後，華勒斯的軍隊就投降了。如果還是覺得很難應付，可以用偷吃步的方式：在把紫色軍隊擊殺之前可以先用戰狼號指定攻擊英國基地通往外側的障礙物後把華勒斯的<nuxt-link
                to="/building"
                >建築</nuxt-link
              >和軍隊毀掉大半，華勒斯的軍隊在紫色被消滅前不會有任何動作。
            </li>

            <li>
              綠色在經過一段時間後或是擊殺華勒斯後就會叛變（高難度狀態在接管基地15分後就會<nuxt-link
                to="/batt/The_Rising"
                >叛變</nuxt-link
              >），使用<nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link
              >、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>和<nuxt-link
                to="/units/Siege_Weapons"
                >攻城器</nuxt-link
              >，在宣告叛變過一段時間後就會用步兵發動第一波攻勢，也會用戰艦騷擾東南方的礦區（所以才說要蓋箭塔）。進攻時使用<nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >、長弓兵和<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >，小心不要被敵方的<nuxt-link to="/units/Siege_Onager"
                >重型投石車</nuxt-link
              >全滅，敵方的配兵阻擋不了戰狼號和長弓兵的淫威。將之打敗後，整個戰役就宣告結束。在綠色叛變前將華勒斯擊殺可獲得成就「蘇格蘭之錘」。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">蘇格蘭之錘</div>
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
              <nuxt-link to="/batts/Edward_Longshanks">長腿愛德華</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
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
              長腿愛德華第五章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Toom_Tabard">空外套</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
