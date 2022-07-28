<html>
    <head>
        
    </head>
        <body>
            <?php 
            include_once("config.php");
            include_once("functions.php"); ?>
    <div class="col-md-4">
        <div class="panel panel-default">
    <table class="table-condensed">
        <tr data-bs-toggle="collapse" data-bs-target="#segundafeira" class="accordion-toggle">
            <td><button type="button" name="segundafeira" value="1" class="btn btn-dark mesmo-tamanho">Segunda - Feira</button></td>
        </tr>        
        <td class="tdb">
            <div class="accordian-body collapse" id="segundafeira">
                <form name="reservar" method="POST" action="/teste.php" value="1">
                    <input type="radio" <?php b1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn1" value="1" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn1">1</label>
                    <input type="radio" <?php b2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn2" value="2" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn2">2</label>
                    <input type="radio" <?php b3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn3" value="3" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn3">3</label>
                    <input type="radio" <?php b4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn4" value="4" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn4">4</label>
                    <input type="radio" <?php b5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn5" value="5" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn5">5</label>
                    <input type="radio" <?php b6($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn6" value="6" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn6">6</label>
                    <input type="radio" <?php b7($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn7" value="7" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn7">7</label>
                    <input type="radio" <?php b8($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn8" value="8" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn8">8</label>
                    <input type="radio" <?php b9($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn9" value="9" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn9">9</label>
                    <input type="radio" <?php b10($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn10" value="10" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn10">10</label>
                    <input type="radio" <?php b11($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn11" value="11" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn11">11</label>
                    <input type="radio" <?php b12($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn12" value="12" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn12">12</label>
                    <input type="radio" <?php b13($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn13" value="13" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn13">13</label>
                    <input type="radio" <?php b14($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn14" value="14" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn14">14</label>
                    <input type="radio" <?php b15($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn15" value="15" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn15">15</label>
                    <input type="radio" <?php b16($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn16" value="16" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn16">16</label>
                    <input type="radio" <?php b17($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn17" value="17" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn17">17</label>
                    <input type="radio" <?php b18($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn18" value="18" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn18">18</label>
                    <input type="radio" <?php b19($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn19" value="19" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn19">19</label>
                    <input type="radio" <?php b20($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn20" value="20" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn20">20</label>
                    <input type="radio" <?php b21($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn21" value="21" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn21">21</label>
                    <input type="radio" <?php b22($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn22" value="22" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn22">22</label>
                    <input type="radio" <?php b23($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn23" value="23" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn23">23</label>
                    <input type="radio" <?php b24($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn24" value="24" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn24">24</label>
                    <input type="radio" <?php b25($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn25" value="25" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn25">25</label>
                    <input type="radio" <?php b26($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn26" value="26" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn26">26</label>
                    <input type="radio" <?php b27($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn27" value="27" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn27">27</label>
                    <input type="radio" <?php b28($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn28" value="28" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn28">28</label>
                    <input type="radio" <?php b29($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn29" value="29" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn29">29</label>
                    <input type="radio" <?php b30($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn30" value="30" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn30">30</label>
                    <input type="radio" <?php b31($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn31" value="31" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn31">31</label>
                    <input type="radio" <?php b32($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn32" value="32" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn32">32</label>
                    <input type="radio" <?php b33($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn33" value="33" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn33">33</label>
                    <input type="radio" <?php b34($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn34" value="34" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn34">34</label>
                    <input type="radio" <?php b35($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn35" value="35" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn35">35</label>
                    <input type="radio" <?php b36($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn36" value="36" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn36">36</label>
                    <input type="radio" <?php b37($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn37" value="37" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn37">37</label>
                    <input type="radio" <?php b38($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn38" value="38" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn38">38</label>
                    <input type="radio" <?php b39($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn39" value="39" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn39">39</label>
                    <input type="radio" <?php b40($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn40" value="40" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn40">40</label>
                    <input type="radio" <?php b41($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn41" value="41" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn41">41</label>
                    <input type="radio" <?php b42($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn42" value="42" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn42">42</label>
                    <input type="radio" <?php b43($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn43" value="43" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn43">43</label>
                    <input type="radio" <?php b44($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn44" value="44" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn44">44</label>
                    <input type="radio" <?php b45($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn45" value="45" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn45">45</label>
                    <input type="radio" <?php b46($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn46" value="46" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn46">46</label>
                    <input type="radio" <?php b47($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn47" value="47" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn47">47</label>
                    <input type="radio" <?php b48($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn48" value="48" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn48">48</label>
                    <input type="radio" <?php b49($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn49" value="49" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn49">49</label>
                    <input type="radio" <?php b50($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn50" value="50" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn50">50</label>
                    <input type="radio" <?php b51($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn51" value="51" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn51">51</label>
                    <input type="radio" <?php b52($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn52" value="52" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn52">52</label>
                    <input type="radio" <?php b53($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn53" value="53" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn53">53</label>
                    <input type="radio" <?php b54($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn54" value="54" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn54">54</label>
                    <input type="radio" <?php b55($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn55" value="55" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn55">55</label>
                    <input type="radio" <?php b56($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn56" value="56" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn56">56</label>
                    <input type="radio" <?php b57($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn57" value="57" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn57">57</label>
                    <input type="radio" <?php b58($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn58" value="58" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn58">58</label>
                    <input type="radio" <?php b59($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn59" value="59" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn59">59</label>
                    <input type="radio" <?php b60($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> name="day1" <?php day1($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="segbtn60" value="60" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="segbtn60">60</label>
                      
            </div>
        </td>
        </tr>
    </table>
    
    <table class="table-condensed">
        <tr data-bs-toggle="collapse" data-bs-target="#tercafeira" class="accordion-toggle">
            <td><button type="button" class="btn btn-dark mesmo-tamanho">Terça - Feira</button></td>
        </tr>
        <td class="tdb">
            <div class="accordian-body collapse" id="tercafeira">
                    <input type="radio" <?php b61($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn1" value="1" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn1">1</label>
                    <input type="radio" <?php b62($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn2" value="2" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn2">2</label>
                    <input type="radio" <?php b63($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn3" value="3" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn3">3</label>
                    <input type="radio" <?php b64($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn4" value="4" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn4">4</label>
                    <input type="radio" <?php b65($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn5" value="5" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn5">5</label>
                    <input type="radio" <?php b66($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn6" value="6" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn6">6</label>
                    <input type="radio" <?php b67($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn7" value="7" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn7">7</label>
                    <input type="radio" <?php b68($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn8" value="8" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn8">8</label>
                    <input type="radio" <?php b69($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn9" value="9" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn9">9</label>
                    <input type="radio" <?php b70($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn10" value="10" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn10">10</label>
                    <input type="radio" <?php b71($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn11" value="11" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn11">11</label>
                    <input type="radio" <?php b72($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn12" value="12" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn12">12</label>
                    <input type="radio" <?php b73($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn13" value="13" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn13">13</label>
                    <input type="radio" <?php b74($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn14" value="14" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn14">14</label>
                    <input type="radio" <?php b75($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn15" value="15" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn15">15</label>
                    <input type="radio" <?php b76($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn16" value="16" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn16">16</label>
                    <input type="radio" <?php b77($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn17" value="17" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn17">17</label>
                    <input type="radio" <?php b78($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn18" value="18" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn18">18</label>
                    <input type="radio" <?php b79($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn19" value="19" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn19">19</label>
                    <input type="radio" <?php b80($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn20" value="20" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn20">20</label>
                    <input type="radio" <?php b81($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn21" value="21" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn21">21</label>
                    <input type="radio" <?php b82($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn22" value="22" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn22">22</label>
                    <input type="radio" <?php b83($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn23" value="23" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn23">23</label>
                    <input type="radio" <?php b84($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn24" value="24" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn24">24</label>
                    <input type="radio" <?php b85($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn25" value="25" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn25">25</label>
                    <input type="radio" <?php b86($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn26" value="26" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn26">26</label>
                    <input type="radio" <?php b87($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn27" value="27" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn27">27</label>
                    <input type="radio" <?php b88($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn28" value="28" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn28">28</label>
                    <input type="radio" <?php b89($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn29" value="29" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn29">29</label>
                    <input type="radio" <?php b90($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn30" value="30" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn30">30</label>
                    <input type="radio" <?php b91($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn31" value="31" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn31">31</label>
                    <input type="radio" <?php b92($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn32" value="32" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn32">32</label>
                    <input type="radio" <?php b93($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn33" value="33" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn33">33</label>
                    <input type="radio" <?php b94($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn34" value="34" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn34">34</label>
                    <input type="radio" <?php b95($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn35" value="35" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn35">35</label>
                    <input type="radio" <?php b96($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn36" value="36" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn36">36</label>
                    <input type="radio" <?php b97($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn37" value="37" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn37">37</label>
                    <input type="radio" <?php b98($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn38" value="38" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn38">38</label>
                    <input type="radio" <?php b99($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn39" value="39" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn39">39</label>
                    <input type="radio" <?php b100($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn40" value="40" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn40">40</label>
                    <input type="radio" <?php b101($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn41" value="41" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn41">41</label>
                    <input type="radio" <?php b102($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn42" value="42" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn42">42</label>
                    <input type="radio" <?php b103($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn43" value="43" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn43">43</label>
                    <input type="radio" <?php b104($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn44" value="44" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn44">44</label>
                    <input type="radio" <?php b105($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn45" value="45" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn45">45</label>
                    <input type="radio" <?php b106($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn46" value="46" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn46">46</label>
                    <input type="radio" <?php b107($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn47" value="47" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn47">47</label>
                    <input type="radio" <?php b108($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn48" value="48" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn48">48</label>
                    <input type="radio" <?php b109($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn49" value="49" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn49">49</label>
                    <input type="radio" <?php b110($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn50" value="50" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn50">50</label>
                    <input type="radio" <?php b111($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn51" value="51" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn51">51</label>
                    <input type="radio" <?php b112($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn52" value="52" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn52">52</label>
                    <input type="radio" <?php b113($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn53" value="53" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn53">53</label>
                    <input type="radio" <?php b114($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn54" value="54" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn54">54</label>
                    <input type="radio" <?php b115($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn55" value="55" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn55">55</label>
                    <input type="radio" <?php b116($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn56" value="56" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn56">56</label>
                    <input type="radio" <?php b117($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn57" value="57" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn57">57</label>
                    <input type="radio" <?php b118($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn58" value="58" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn58">58</label>
                    <input type="radio" <?php b119($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn59" value="59" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn59">59</label>
                    <input type="radio" <?php b120($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day2" <?php day2($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="terbtn60" value="60" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="terbtn60">60</label>
            </div>
        </td>
        </tr>
    </table>
    <table class="table-condensed">
        <tr data-bs-toggle="collapse" data-bs-target="#quartafeira" class="accordion-toggle">
            <td><button type="button" class="btn btn-dark mesmo-tamanho">Quarta - Feira</button></td>
        </tr>
        <td class="tdb">
            <div class="accordian-body collapse" id="quartafeira">
                    <input type="radio" <?php b121($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn1" value="1" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn1">1</label>
                    <input type="radio" <?php b122($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn2" value="2" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn2">2</label>
                    <input type="radio" <?php b123($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn3" value="3" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn3">3</label>
                    <input type="radio" <?php b124($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn4" value="4" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn4">4</label>
                    <input type="radio" <?php b125($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn5" value="5" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn5">5</label>
                    <input type="radio" <?php b126($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn6" value="6" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn6">6</label>
                    <input type="radio" <?php b127($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn7" value="7" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn7">7</label>
                    <input type="radio" <?php b128($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn8" value="8" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn8">8</label>
                    <input type="radio" <?php b128($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn9" value="9" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn9">9</label>
                    <input type="radio" <?php b130($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn10" value="10" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn10">10</label>
                    <input type="radio" <?php b131($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn11" value="11" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn11">11</label>
                    <input type="radio" <?php b132($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn12" value="12" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn12">12</label>
                    <input type="radio" <?php b133($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn13" value="13" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn13">13</label>
                    <input type="radio" <?php b134($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn14" value="14" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn14">14</label>
                    <input type="radio" <?php b135($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn15" value="15" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn15">15</label>
                    <input type="radio" <?php b136($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn16" value="16" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn16">16</label>
                    <input type="radio" <?php b137($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn17" value="17" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn17">17</label>
                    <input type="radio" <?php b138($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn18" value="18" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn18">18</label>
                    <input type="radio" <?php b139($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn19" value="19" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn19">19</label>
                    <input type="radio" <?php b140($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn20" value="20" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn20">20</label>
                    <input type="radio" <?php b141($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn21" value="21" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn21">21</label>
                    <input type="radio" <?php b142($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn22" value="22" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn22">22</label>
                    <input type="radio" <?php b143($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn23" value="23" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn23">23</label>
                    <input type="radio" <?php b144($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn24" value="24" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn24">24</label>
                    <input type="radio" <?php b145($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn25" value="25" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn25">25</label>
                    <input type="radio" <?php b146($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn26" value="26" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn26">26</label>
                    <input type="radio" <?php b147($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn27" value="27" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn27">27</label>
                    <input type="radio" <?php b148($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn28" value="28" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn28">28</label>
                    <input type="radio" <?php b149($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn29" value="29" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn29">29</label>
                    <input type="radio" <?php b150($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn30" value="30" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn30">30</label>
                    <input type="radio" <?php b151($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn31" value="31" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn31">31</label>
                    <input type="radio" <?php b152($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn32" value="32" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn32">32</label>
                    <input type="radio" <?php b153($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn33" value="33" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn33">33</label>
                    <input type="radio" <?php b154($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn34" value="34" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn34">34</label>
                    <input type="radio" <?php b155($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn35" value="35" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn35">35</label>
                    <input type="radio" <?php b156($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn36" value="36" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn36">36</label>
                    <input type="radio" <?php b157($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn37" value="37" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn37">37</label>
                    <input type="radio" <?php b158($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn38" value="38" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn38">38</label>
                    <input type="radio" <?php b159($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn39" value="39" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn39">39</label>
                    <input type="radio" <?php b160($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn40" value="40" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn40">40</label>
                    <input type="radio" <?php b161($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn41" value="41" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn41">41</label>
                    <input type="radio" <?php b162($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn42" value="42" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn42">42</label>
                    <input type="radio" <?php b163($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn43" value="43" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn43">43</label>
                    <input type="radio" <?php b164($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn44" value="44" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn44">44</label>
                    <input type="radio" <?php b165($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn45" value="45" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn45">45</label>
                    <input type="radio" <?php b166($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn46" value="46" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn46">46</label>
                    <input type="radio" <?php b167($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn47" value="47" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn47">47</label>
                    <input type="radio" <?php b168($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn48" value="48" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn48">48</label>
                    <input type="radio" <?php b169($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn49" value="49" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn49">49</label>
                    <input type="radio" <?php b170($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn50" value="50" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn50">50</label>
                    <input type="radio" <?php b171($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn51" value="51" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn51">51</label>
                    <input type="radio" <?php b172($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn52" value="52" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn52">52</label>
                    <input type="radio" <?php b173($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn53" value="53" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn53">53</label>
                    <input type="radio" <?php b174($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn54" value="54" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn54">54</label>
                    <input type="radio" <?php b175($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn55" value="55" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn55">55</label>
                    <input type="radio" <?php b176($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn56" value="56" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn56">56</label>
                    <input type="radio" <?php b177($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn57" value="57" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn57">57</label>
                    <input type="radio" <?php b178($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn58" value="58" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn58">58</label>
                    <input type="radio" <?php b179($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn59" value="59" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn59">59</label>
                    <input type="radio" <?php b180($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day3" <?php day3($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quabtn60" value="60" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quabtn60">60</label>
            </div>
        </td>
        </tr>
    </table>
    <table class="table-condensed">
        <tr data-bs-toggle="collapse" data-bs-target="#quintafeira" class="accordion-toggle">
            <td><button type="button" class="btn btn-dark mesmo-tamanho">Quinta - Feira</button></td>
        </tr>
        <td class="tdb">
            <div class="accordian-body collapse" id="quintafeira">
                    <input type="radio" <?php b181($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn1" value="1" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn1">1</label>
                    <input type="radio" <?php b182($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn2" value="2" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn2">2</label>
                    <input type="radio" <?php b183($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn3" value="3" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn3">3</label>
                    <input type="radio" <?php b184($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn4" value="4" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn4">4</label>
                    <input type="radio" <?php b185($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn5" value="5" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn5">5</label>
                    <input type="radio" <?php b186($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn6" value="6" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn6">6</label>
                    <input type="radio" <?php b187($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn7" value="7" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn7">7</label>
                    <input type="radio" <?php b188($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn8" value="8" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn8">8</label>
                    <input type="radio" <?php b189($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn9" value="9" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn9">9</label>
                    <input type="radio" <?php b190($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn10" value="10" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn10">10</label>
                    <input type="radio" <?php b191($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn11" value="11" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn11">11</label>
                    <input type="radio" <?php b192($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn12" value="12" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn12">12</label>
                    <input type="radio" <?php b193($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn13" value="13" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn13">13</label>
                    <input type="radio" <?php b194($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn14" value="14" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn14">14</label>
                    <input type="radio" <?php b195($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn15" value="15" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn15">15</label>
                    <input type="radio" <?php b196($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn16" value="16" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn16">16</label>
                    <input type="radio" <?php b197($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn17" value="17" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn17">17</label>
                    <input type="radio" <?php b198($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn18" value="18" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn18">18</label>
                    <input type="radio" <?php b199($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn19" value="19" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn19">19</label>
                    <input type="radio" <?php b200($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn20" value="20" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn20">20</label>
                    <input type="radio" <?php b201($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn21" value="21" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn21">21</label>
                    <input type="radio" <?php b202($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn22" value="22" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn22">22</label>
                    <input type="radio" <?php b203($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn23" value="23" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn23">23</label>
                    <input type="radio" <?php b204($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn24" value="24" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn24">24</label>
                    <input type="radio" <?php b205($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn25" value="25" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn25">25</label>
                    <input type="radio" <?php b206($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn26" value="26" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn26">26</label>
                    <input type="radio" <?php b207($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn27" value="27" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn27">27</label>
                    <input type="radio" <?php b208($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn28" value="28" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn28">28</label>
                    <input type="radio" <?php b209($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn29" value="29" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn29">29</label>
                    <input type="radio" <?php b210($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn30" value="30" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn30">30</label>
                    <input type="radio" <?php b211($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn31" value="31" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn31">31</label>
                    <input type="radio" <?php b212($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn32" value="32" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn32">32</label>
                    <input type="radio" <?php b213($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn33" value="33" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn33">33</label>
                    <input type="radio" <?php b214($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn34" value="34" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn34">34</label>
                    <input type="radio" <?php b215($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn35" value="35" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn35">35</label>
                    <input type="radio" <?php b216($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn36" value="36" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn36">36</label>
                    <input type="radio" <?php b217($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn37" value="37" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn37">37</label>
                    <input type="radio" <?php b218($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn38" value="38" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn38">38</label>
                    <input type="radio" <?php b219($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn39" value="39" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn39">39</label>
                    <input type="radio" <?php b220($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn40" value="40" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn40">40</label>
                    <input type="radio" <?php b221($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn41" value="41" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn41">41</label>
                    <input type="radio" <?php b222($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn42" value="42" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn42">42</label>
                    <input type="radio" <?php b223($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn43" value="43" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn43">43</label>
                    <input type="radio" <?php b224($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn44" value="44" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn44">44</label>
                    <input type="radio" <?php b225($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn45" value="45" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn45">45</label>
                    <input type="radio" <?php b226($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn46" value="46" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn46">46</label>
                    <input type="radio" <?php b227($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn47" value="47" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn47">47</label>
                    <input type="radio" <?php b228($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn48" value="48" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn48">48</label>
                    <input type="radio" <?php b229($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn49" value="49" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn49">49</label>
                    <input type="radio" <?php b230($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn50" value="50" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn50">50</label>
                    <input type="radio" <?php b231($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn51" value="51" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn51">51</label>
                    <input type="radio" <?php b232($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn52" value="52" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn52">52</label>
                    <input type="radio" <?php b233($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn53" value="53" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn53">53</label>
                    <input type="radio" <?php b234($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn54" value="54" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn54">54</label>
                    <input type="radio" <?php b235($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn55" value="55" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn55">55</label>
                    <input type="radio" <?php b236($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn56" value="56" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn56">56</label>
                    <input type="radio" <?php b237($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn57" value="57" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn57">57</label>
                    <input type="radio" <?php b238($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn58" value="58" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn58">58</label>
                    <input type="radio" <?php b239($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn59" value="59" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn59">59</label>
                    <input type="radio" <?php b240($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day4" <?php day4($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="quibtn60" value="60" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="quibtn60">60</label>
            </div>
        </td>
        </tr>
    </table>
    <table class="table-condensed">
        <tr data-bs-toggle="collapse" data-bs-target="#sextafeira" class="accordion-toggle">
            <td><button type="button" class="btn btn-dark mesmo-tamanho">Sexta - Feira</button></td>
        </tr>
        <td class="tdb">
            <div class="accordian-body collapse" id="sextafeira">
                    <input type="radio" <?php b241($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn1" value="1" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn1">1</label>
                    <input type="radio" <?php b242($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn2" value="2" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn2">2</label>
                    <input type="radio" <?php b243($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn3" value="3" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn3">3</label>
                    <input type="radio" <?php b244($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn4" value="4" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn4">4</label>
                    <input type="radio" <?php b245($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn5" value="5" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn5">5</label>
                    <input type="radio" <?php b246($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn6" value="6" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn6">6</label>
                    <input type="radio" <?php b247($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn7" value="7" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn7">7</label>
                    <input type="radio" <?php b248($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn8" value="8" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn8">8</label>
                    <input type="radio" <?php b249($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn9" value="9" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn9">9</label>
                    <input type="radio" <?php b250($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn10" value="10" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn10">10</label>
                    <input type="radio" <?php b251($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn11" value="11" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn11">11</label>
                    <input type="radio" <?php b252($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn12" value="12" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn12">12</label>
                    <input type="radio" <?php b253($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn13" value="13" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn13">13</label>
                    <input type="radio" <?php b254($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn14" value="14" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn14">14</label>
                    <input type="radio" <?php b255($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn15" value="15" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn15">15</label>
                    <input type="radio" <?php b256($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn16" value="16" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn16">16</label>
                    <input type="radio" <?php b257($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn17" value="17" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn17">17</label>
                    <input type="radio" <?php b258($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn18" value="18" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn18">18</label>
                    <input type="radio" <?php b259($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn19" value="19" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn19">19</label>
                    <input type="radio" <?php b260($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn20" value="20" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn20">20</label>
                    <input type="radio" <?php b261($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn21" value="21" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn21">21</label>
                    <input type="radio" <?php b262($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn22" value="22" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn22">22</label>
                    <input type="radio" <?php b263($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn23" value="23" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn23">23</label>
                    <input type="radio" <?php b264($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn24" value="24" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn24">24</label>
                    <input type="radio" <?php b265($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn25" value="25" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn25">25</label>
                    <input type="radio" <?php b266($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn26" value="26" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn26">26</label>
                    <input type="radio" <?php b267($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn27" value="27" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn27">27</label>
                    <input type="radio" <?php b268($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn28" value="28" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn28">28</label>
                    <input type="radio" <?php b269($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn29" value="29" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn29">29</label>
                    <input type="radio" <?php b270($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn30" value="30" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn30">30</label>
                    <input type="radio" <?php b271($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn31" value="31" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn31">31</label>
                    <input type="radio" <?php b272($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn32" value="32" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn32">32</label>
                    <input type="radio" <?php b273($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn33" value="33" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn33">33</label>
                    <input type="radio" <?php b274($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn34" value="34" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn34">34</label>
                    <input type="radio" <?php b275($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn35" value="35" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn35">35</label>
                    <input type="radio" <?php b276($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn36" value="36" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn36">36</label>
                    <input type="radio" <?php b277($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn37" value="37" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn37">37</label>
                    <input type="radio" <?php b278($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn38" value="38" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn38">38</label>
                    <input type="radio" <?php b279($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn39" value="39" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn39">39</label>
                    <input type="radio" <?php b280($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn40" value="40" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn40">40</label>
                    <input type="radio" <?php b281($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn41" value="41" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn41">41</label>
                    <input type="radio" <?php b282($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn42" value="42" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn42">42</label>
                    <input type="radio" <?php b283($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn43" value="43" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn43">43</label>
                    <input type="radio" <?php b284($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn44" value="44" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn44">44</label>
                    <input type="radio" <?php b285($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn45" value="45" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn45">45</label>
                    <input type="radio" <?php b286($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn46" value="46" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn46">46</label>
                    <input type="radio" <?php b287($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn47" value="47" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn47">47</label>
                    <input type="radio" <?php b288($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn48" value="48" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn48">48</label>
                    <input type="radio" <?php b289($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn49" value="49" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn49">49</label>
                    <input type="radio" <?php b290($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn50" value="50" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn50">50</label>
                    <input type="radio" <?php b291($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn51" value="51" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn51">51</label>
                    <input type="radio" <?php b292($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn52" value="52" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn52">52</label>
                    <input type="radio" <?php b293($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn53" value="53" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn53">53</label>
                    <input type="radio" <?php b294($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn54" value="54" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn54">54</label>
                    <input type="radio" <?php b295($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn55" value="55" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn55">55</label>
                    <input type="radio" <?php b296($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn56" value="56" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn56">56</label>
                    <input type="radio" <?php b297($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn57" value="57" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn57">57</label>
                    <input type="radio" <?php b298($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn58" value="58" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn58">58</label>
                    <input type="radio" <?php b299($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn59" value="59" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn59">59</label>
                    <input type="radio" <?php b300($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?>  name="day5" <?php day5($dbBd, $dbconn, $dbHost, $dbPass, $dbUser) ?> class="btn-check" id="sexbtn60" value="60" autocomplete="off">
                    <label class="btn btn-outline-primary chkbutton-size" for="sexbtn60">60</label>
            </div>
        </td>
        </tr>
        
    </table>
            
        </div>
    </div>
    <div class="form-submit container-fluid">
        <input type="button" name="reservarmesa" value="Enviar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success">
    </div>

<div class="modal fade" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aviso:</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Confirmar reserva?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
        </body>