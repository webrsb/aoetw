<template>
  <div class="container">
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-12">
        <h1>語音快捷鍵（嘲諷）</h1>
        <div class="row">
          <div class="col-md-12">
            <p>
              玩家可以在遊戲內利用數字快捷鍵互相發送語音訊息，於對話框中輸入數字後按下Enter即可發送。要正確發出音效，必須確定數字放在最前面，後面可以接其它文字。你也可以在本網站的任意頁面按下Enter模擬遊戲中的交談功能。
            </p>
            <p>
              （在世紀帝國三中，嘲諷通過打字即可送出，不再需要使用聊天框。）
            </p>
          </div>
        </div>
        <div class="row">
          <table>
            <tr>
              <td height="40" style="width:5%;background:#99CCFF">
                <div align="center">數字</div>
              </td>
              <td style="width: 20%;background:#99CCFF">
                <div align="center">中文</div>
              </td>
              <td style="width: 25%;background:#99CCFF">
                <div align="center">中文語音</div>
              </td>
              <td style="width: 20%;background:#99CCFF">
                <div align="center">英文</div>
              </td>
              <td style="width: 25%;background:#99CCFF">
                <div align="center">英文語音</div>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">1</div></td>
              <td bgcolor="#EEEEEE">好。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c1-Yes.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Yes.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/1-Yes.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">2</div></td>
              <td>不。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c2-No.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>No.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/2-No.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">3</div></td>
              <td bgcolor="#EEEEEE">請給我食物。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c3-Food,_please.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Food please.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/3-Food,_please.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">4</div></td>
              <td>請給我木材。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c4-Wood,_please.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Wood please.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/4-Wood,_please.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">5</div></td>
              <td bgcolor="#EEEEEE">請給我黃金。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c5-Gold,_please.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Gold please.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/5-Gold,_please.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">6</div></td>
              <td>請給我石頭。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c6-Stone,_please.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Stone please.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/6-Stone,_please.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">7</div></td>
              <td bgcolor="#EEEEEE">唉~~欸......</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c7-Ahh.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Ahh!</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/7-Ahh.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">8</div></td>
              <td>嗨~肉腳你們好啊</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c8-All_hail.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>All hail, king of the losers!</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/8-All_hail.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">9</div></td>
              <td bgcolor="#EEEEEE">嗚~~耶</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c9-Oooh.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Ooh!</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/9-Oooh.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">10</div></td>
              <td>看我把你打回世紀帝國一代去</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c10-Back_to_age_one.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>I'll beat you back to Age of Empires.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/10-Back_to_age_one.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">11</div></td>
              <td bgcolor="#EEEEEE">（奸笑）</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c11-Herb_laugh.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">(Herb laugh)</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/11-Herb_laugh.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">12</div></td>
              <td>我快招架不住了......</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c12-Being_rushed.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Ah! Being rushed.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/12-Being_rushed.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">13</div></td>
              <td bgcolor="#EEEEEE">去怪你的網路公司吧！</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c13-Blame_your_isp.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Sure, blame it on your ISP.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/13-Blame_your_isp.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">14</div></td>
              <td>欸！遊戲已經開始囉！</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c14-Start_the_game.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Start the game already!</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/14-Start_the_game.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">15</div></td>
              <td bgcolor="#EEEEEE">拜託！不要用那個東西指著我好嗎？</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c15-Don't_point_that_thing.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Don't point that thing at me!</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/15-Don't_point_that_thing.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">16</div></td>
              <td>發現敵人。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c16-Enemy_sighted.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Enemy sighted!</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/16-Enemy_sighted.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">17</div></td>
              <td bgcolor="#EEEEEE">坐上王位的感覺真好。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c17-It_is_good.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">It is good to be the king.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/17-It_is_good.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">18</div></td>
              <td>我還少個僧侶。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c18-I_need_a_monk.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Monk! I need a monk!</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/18-I_need_a_monk.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">19</div></td>
              <td bgcolor="#EEEEEE">有一陣子沒交手囉？</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c19-Long_time_no_siege.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Long time, no siege.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/19-Long_time_no_siege.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">20</div></td>
              <td>欸你也幫幫忙，連我阿嬤都比你行。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c20-My_granny.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>My granny could scrap better than that.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/20-My_granny.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">21</div></td>
              <td bgcolor="#EEEEEE">好地方，我要定了！</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c21-Nice_town_i'll_take_it.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Nice town, I'll take it.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/21-Nice_town_i'll_take_it.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">22</div></td>
              <td>別再打我了啦！</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c22-Quit_touchin.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Quit touching me!</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/22-Quit_touchin.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">23</div></td>
              <td bgcolor="#EEEEEE">大伙進攻囉！</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c23-Raiding_party.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Raiding party!</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/23-Raiding_party.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">24</div></td>
              <td>厚！真雖！</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c24-Dadgum.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Dadgum.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/24-Dadgum.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">25</div></td>
              <td bgcolor="#EEEEEE">你敢就來啊？</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c25-Smite_me.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Eh, smite me.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/25-Smite_me.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">26</div></td>
              <td>糟了！是世界奇觀！</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c26-The_wonder.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>The wonder, the wonder, the... no!</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/26-The_wonder.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">27</div></td>
              <td bgcolor="#EEEEEE">欸，你玩這麼久才玩這樣喔？</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c27-You_play_two_hours.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">You played two hours to die like this?</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/27-You_play_two_hours.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">28</div></td>
              <td>還有人比你更慘勒。</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/c28-You_should_see_the_other_guy.mp3`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Yeah, well, you should see the other guy.</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/28-You_should_see_the_other_guy.oga`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">29</div></td>
              <td bgcolor="#EEEEEE">肉腳。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c29-Roggan.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Roggan.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/29-Roggan.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">30</div></td>
              <td>嗚~~呼~~~</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c30-Wololo.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Wololo.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/30-Wololo.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">31</div></td>
              <td bgcolor="#EEEEEE">攻擊敵人，衝啊！</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c31-Attack_an_enemy_now.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Attack an enemy now.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/31-Attack_an_enemy_now.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">32</div></td>
              <td>停止生產額外的村民。</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/c32-Cease_creating_extra_villagers.mp3`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Cease creating extra villagers.</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/32-Cease_creating_extra_villagers.oga`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">33</div></td>
              <td bgcolor="#EEEEEE">生產額外村民。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c33-Create_extra_villagers.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Create extra villagers.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/33-Create_extra_villagers.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">34</div></td>
              <td>建立海軍。</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c34-Build_a_navy.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Build a navy.</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/34-Build_a_navy.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">35</div></td>
              <td bgcolor="#EEEEEE">停止建立海軍。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c35-Stop_building_a_navy.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Stop building a navy.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/35-Stop_building_a_navy.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">36</div></td>
              <td>等我下令攻擊</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/c36-Wait_for_my_signal_to_attack.mp3`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Wait for my signal to attack.</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/36-Wait_for_my_signal_to_attack.oga`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">37</div></td>
              <td bgcolor="#EEEEEE">建造世界奇觀。</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c37-Build_a_wonder.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">Build a wonder.</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/37-Build_a_wonder.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">38</div></td>
              <td>請你把多的資源給我。</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/c38-Give_me_your_extra_resources.mp3`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>Give me your extra resources.</td>
              <td>
                <audio controls>
                  <source
                    :src="
                      `${STATIC_PATH}voice/38-Give_me_your_extra_resources.oga`
                    "
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">39</div></td>
              <td bgcolor="#EEEEEE">（同盟聲音）</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c39-Ally.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">(Ally sound)</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/39-Ally.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">40</div></td>
              <td>（敵人聲音）</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c40-Enemy.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>(Enemy sound)</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/40-Enemy.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td bgcolor="#EEEEEE"><div align="center">41</div></td>
              <td bgcolor="#EEEEEE">（中立聲音）</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c41-Neutral.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td bgcolor="#EEEEEE">(Neutral sound)</td>
              <td bgcolor="#EEEEEE">
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/41-Neutral.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
            <tr>
              <td><div align="center">42</div></td>
              <td>你在哪一個時代啊？</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/c42-What_age_are_you_in.mp3`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
              <td>What age are you in?</td>
              <td>
                <audio controls>
                  <source
                    :src="`${STATIC_PATH}voice/42-What_age_are_you_in.oga`"
                    type="audio/mpeg"
                  />
                </audio>
              </td>
            </tr>
          </table>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>
              （中文語音來源：網路 英文語音來源：<a
                href="https://ageofempires.fandom.com/wiki/Taunts"
                target="_blank"
                >Aoe英文wiki</a
              >）
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allen',
  computed: {
    STATIC_PATH() {
      let base = this.$router.options.base
      return base.charAt(base.length - 1) === '/' ? base : base + '/'
    }
  },
  components: {}
}
</script>
<style></style>
