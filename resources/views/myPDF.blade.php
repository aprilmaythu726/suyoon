<!DOCTYPE html>
<html>
<head>
    
<style>
    body {
                    font-size: 12px;
                    color: #111;
                    font-weight: normal;
                    font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", "ＭＳ ゴシック" , "MS Gothic", "Noto Sans CJK JP", TakaoPGothic, sans-serif;
                    /* font-family: "Lucida Console", "Courier New", monospace;
                    font-family: 'MS PGothic', Arial, sans-serif; */
                    /* font-family: 'Open Sans', sans-serif; */
                    line-height: 20px;
                }


                table {
                    border-right: 0;
                    border-bottom: 0;
                    border-collapse: collapse;
                    padding: 0px;
                    margin: 0px;
                }

                table td,
                table th {
                    padding-top: 5px;
                    padding-bottom: 5px;
                    /* border:1px solid gray;      */
                }

                td {
                    white-space: normal;
                    padding: 8px 0px 8px 0px;
                }

                .page-break {
                    page-break-after: always;
                }

                .tbl,
                .tbl td,td
                .tbl th th{
                    border: solid black;
                    border-width: 1px 1px 0 0;
                }

                .tbl th,th,
                .tbl td,td{
                    border: solid black;
                    border-width: 0 0 1px 1px;
                    padding: 10px 5px;
                }
                td, th, dt, dd {
                    border: 1px solid #000000;
                    text-align: left;
                    padding: 8px;
                }
                dt,dd {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }
                    dl{
                        display: flex;
                        flex-direction: row;

                    }
                    dd {
                        width: 500px;
                        margin-left: 0px;
                        border-left: none;
                    }
                    dt {
                        width: 200px;
                    }
                .sp01 {
                    width: 200px;
                    display: inline-block;
                }

                .sp001 {
                    width: 90px;
                    display: inline-block;
                    vertical-align: bottom;
                    text-align: left;
                }

                .sp003 {
                    width: 130px;
                    display: inline-block;
                    vertical-align: bottom;
                    text-align: left;
                }

                .sp002 {
                    width: 120px;
                    display: inline-block;
                    vertical-align: bottom;
                    text-align: left;
                }

                .col-12 {
                    width: 100%;
                    clear: both;
                }
                section.header {
                    width: 100%;
                    position: relative;
                    margin: 0 auto;
                }
                section.personal-info {
                    margin-bottom: 20px;
                }
                .logo {
                    width: 250px;
                    float: left;
                }
                .application-title {
                    width: 500px;
                    margin: 0 auto;
                    float: left;
                }
                .school-addr {
                    width: 400px;
                    right: 0;
                    position: absolute;
                    text-align: right;
                    float: left;
                }
                img{
                    width: 100%;;
                }
				.applicant_image{
				width: 180px;
				height: 250px;
				display: block;
				border: 1px solid #000000;
				display: block;
				float: right;
				/* text-align: center; */
				padding: 15px;
				margin-right: 40px;
				display: block;
			}
                </style>
</head>
<body>
<section class="header" style="display: flex;height:300px;">
	<div class="logo">
        <img class="span" src="{!! url('assets/admin/img/logo-head1.png') !!}" style="    width: 40px;height: 20px;top: 51.5%;left: 54%;position: absolute;">    
		<img src="{!! url('assets/admin/img/jcli-logo.png') !!}">
	</div>
	<div class="application-title" style="margin: 0 auto;">
		<h3>入 学 願 書</h3>
		<span>Application Form for Admission</span>
	</div>
	<div class="school-addr">
		<h4>JCLI日本語学校	</h4>													
		<h5>JCLI JAPANESE LANGUAGE SCHOOL	</h5>													
		<p>〒114-0003 東京都北区豊島８丁目４番１号</p>
		<p>TEL：03-5902-5151</p>
		<p>FAX：03-5902-5152</p>														
														
														
	</div>
</section>
<section class="personal-info">
    <h5>申請者情報　/　Personal Information</h5>
    <table style="width:75%; float: left;">
        <tr>

			<th style="width: 26.7%;">氏名(ローマ字)
				<br>Name(s) as shown
				<br>on your passport</th>
				<td></td>
        </tr>
		<tr>

			<th>氏名　（漢字)
				<br>Name(s) in
				<br>Chinese characterｓ　</th>
				<td></td>
            </tr>
		<tr>

			<th>
				
				国籍・地域<br>Nationality/Region
            </th>
			<td></td>
		</tr>
		<tr>

			<th style="width: 26.7%;">
				入学希望コース <br> Course of Admission			
			</th>
			<td></td>
            </tr>
        <tr>

			<th style="width: 26.7%;border-bottom: none;">出生地 <br> Place of  birth			
			</th>
			<td style="border-bottom: none;"></td>
        </tr>
		</table>
		<span class="applicant_image">
			写真貼付欄${student_photo}　　
	　<br>Photo
	  （<br> ４ｃｍ×３ｃm ）<br>
	　
	　
	  <br>・最近３ヶ月以内
	　<br>・上半身正面
	　<br>・脱帽のもの（ 2枚 ）<br>
	　
	　<br>・Within ３ months
	　<br>・Full　face
	　<br>・Without hat
	　<br>・2 copies
		</span>
		<table style="width:100%;">
        <tr>
			<th style="width: 20%;">本国の戸籍住所 <br>Home address</th>
			<td></td>
            </tr>
        <tr>
			<th style="width: 20%;">現在の住所 <br> Present address</th>
			<td></td>
            </tr>
		<tr>
			<th style="width: 20%;">電話番号 <br>Phone Number</th>
			<td></td>
            </tr>
		<tr>
			<th style="width: 20%;">旅券番号 <br>Passport No</th>
			<td></td>
            </tr>
		<tr>
			<th style="width: 20%;">職業 <br> Occupation</th>
			<td></td>
            </tr>
        </table>
		
</section>
<section>
    <div class="clearfix mb-5"></div>

                        <table style="width:100%; padding_top:20px" class="tbl">
                            <thead style="background: #f5f5f5; text-align:center;padding:1px;">
                                <tr class="text-center" style="font-size: 12px;">
                                    <th scope="col" style="width:20px; !important">続柄<br>Relationship</th>
                                    <th scope="col" class="align-middle" style="width: 200px;">氏名 <br>Name</th>
                                    <th scope="col">生年月日<br>Date of Birth</th>
                                    <th scope="col">国籍<br> Nationality</th>
                                    <th scope="col" style="width: 300px;">住所／電話<br> Address / Telephond</th>
                                    <th scope="col">勤務先・通学先<br>Place of<br> Employment / School</th>
                                    <th scope="col">在留カード番号<br>（在留資格種類）<br>Residence card number <br>(Type of status)</th>
                                </tr>
                            </thead>
                            <tbody id="stockList">
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 11px; text-align: right;"></td>
                                        <td style="font-size: 12px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                       
                                        <td style="font-size: 11px; text-align: right;">-</td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                        <td style="font-size: 11px; text-align: left;"></td>
                                    </tr>
                               
                            </tbody>
                        </table>
</section>

</body>
</html>

