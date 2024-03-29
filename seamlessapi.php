<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <style>
                .txtHead {
                    color: #7F0055;
                }
            </style>
            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #19A17A !important;" set-lan="text:4. Seamless API">4. Seamless API</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.1 Introduction Seamless API">4.1
                            Introduction Seamless API</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:4.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในส่วนนี้จะแสดงรายละเอียดของการใช้งานระบบ Seamless เพื่อไปใช้ในระบบคู่ธุรกิจภายนอก</label><br>
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;** รองรับแบบ <b style="color:red"> Single Agent </b></label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.2 Workflow">4.2 Workflow</b>
                    </lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:4.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้อมูลเบื้องต้นแสดงการทำงานในการเรียกใช้ API ของระบบคู่ธุรกิจ เพื่อให้ระบบสามารถเรียกใช้ API ได้ภายใต้เงื่อนไขได้อย่างถูกต้อง</label>
                    </div>
                    <div class="col-12">
                        <img src="./API_files/SeamlessFlow.png" style="width: 80%; margin-left: 10%;">
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThree">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.3 Setting">4.3 Setting</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            *หากคุณมีบัญชีหลัก โปรดสร้างบัญชีตัวแทน API ภายใต้บัญชีหลักของคุณและเข้าสู่ระบบด้วยบัญชีตัวแทน API ที่สร้างขึ้นก่อน แล้วทำตามขั้นตอนการตั้งค่า ดังนี้
                        </label>
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.เข้าสู่ระบบ</label>
                        <div class="col-12">
                            <img src="./API_files/Login001.png" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.คลิกเมนูบัญชีและเลือกเมนูโปรไฟล์</label>
                        <div class="col-12">
                            <img src="./API_files/Account002.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label id="tabZero" set-lan="html:4. Define">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.กำหนดข้อมูล API ต่อไปนี้</label>
                        <div class="col-12">
                            <label set-lan="html:4.1 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.1 คุณสามารถเพิ่มที่อยู่ IP ได้โดยกรอกข้อมูลที่ Callback Url</label>
                        </div>
                        <div class="col-12">
                            <label set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.2 คุณสามารถคลิกปุ่ม “บันทึก” เพื่อบันทึกข้อมูล</label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/3.png" style="width: 80%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFour">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.4 login request">4.4 Login
                            request</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>

                                https://test-api.pirate168.com/apiRoute/member/loginRequest
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable1">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="txtCenter bRight">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">System generate key ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"compseamless"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"3e5ecb1f7d639dff2e3bcc05948726a8e7cafa0a75a07117b9562c4b7bc67c665a409cec17f9dfa02"</span>,
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Type" class="bRight txtCenter">Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">tkUuid</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Can use only 1 time. limit to 24 hours from generate time.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">url</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">AMB Lotto link but don't show web header</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">urlFullPage</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">AMB Lotto link fullpage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>Invalid UserAgent or ApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61003</td>
                                        <td>request error Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61004</td>
                                        <td>request error callback url requst error destination error</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 24 characters long.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71006</td>
                                        <td>username must not contain any special characters and can only contain letters a-z and numbers 0-9.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: { 
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member1@compseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"tkUuid"</span>: <span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg"</span>,
        <span class="hljs-attr">"url"</span>: <span class="hljs-string">"https://test.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off"</span>,
        <span class="hljs-attr">"urlFullPage"</span>: <span class="hljs-string">"https://test.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=on"</span>
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:** Optional">** Optional for direct/re-direct link.</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            คุณสามารถเพิ่มค่าพารามิเตอร์ต่อท้ายในลิงค์ (&lottotype=) เพื่อเปลี่ยนเส้นทางให้ผู้เล่นไปยังหน้าแทง AMB Lotto ประเภทนั้นๆ</label>
                    </div>
                    <div class="col-8">
                        <!-- <a href="https://service-api.prettygaming.asia/img/zip/game_icons.rar" style="float: right;"
                            class="Point" download=""><i class="fa fa-download" aria-hidden="true"></i>
                            <label class="Point">&nbsp;Download Icon</label></a> -->
                    </div>
                    <div class="form-group col-3"></div>
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Name</th>
                                        <th class="bRight txtCenter" style="width: 210px;">Value of parameter</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">หวยไทย</td>
                                        <td class="bRight txtCenter txtMid">thailotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยลาว(แทงแบบไทย)</td>
                                        <td class="bRight txtCenter txtMid">laoslotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย</td>
                                        <td class="bRight txtCenter txtMid">hanoylotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(วีไอพี)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottovip</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวย ธกส.</td>
                                        <td class="bRight txtCenter txtMid">baaclotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวย ออมสิน</td>
                                        <td class="bRight txtCenter txtMid">gsblotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยปิงปอง</td>
                                        <td class="bRight txtCenter txtMid">pingponglotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยลาว(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">laoslotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยยี่กี</td>
                                        <td class="bRight txtCenter txtMid">yeekeelotto</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยมาเลย์</td>
                                        <td class="bRight txtCenter txtMid">malaylotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอยวีไอพี(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottovip_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอยพิเศษ(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottospecial_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยมาเลย์(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">malaylotto_set</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(พิเศษ)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottospecial</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นเกาหลี</td>
                                        <td class="bRight txtCenter txtMid">stockkorea</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นจีน</td>
                                        <td class="bRight txtCenter txtMid">stockchina</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นดาวโจนส์</td>
                                        <td class="bRight txtCenter txtMid">stockdowjones</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นไต้หวัน</td>
                                        <td class="bRight txtCenter txtMid">stocktaiwan</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอังกฤษ</td>
                                        <td class="bRight txtCenter txtMid">stockengland</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอินเดีย</td>
                                        <td class="bRight txtCenter txtMid">stockindia</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นฮั่งเส็ง</td>
                                        <td class="bRight txtCenter txtMid">stockhangseng</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอียิปต์</td>
                                        <td class="bRight txtCenter txtMid">stockegypt</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นนิเคอิ</td>
                                        <td class="bRight txtCenter txtMid">stocknikkei</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นสิงค์โปร</td>
                                        <td class="bRight txtCenter txtMid">stocksingapore</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นไทย</td>
                                        <td class="bRight txtCenter txtMid">stockthai</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นเยอรมัน</td>
                                        <td class="bRight txtCenter txtMid">stockgerman</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นรัสเซีย</td>
                                        <td class="bRight txtCenter txtMid">stockrussia</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หน้าเลือกงวดแทงหวยปิงปอง</td>
                                        <td class="bRight txtCenter txtMid">pingponghome</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หน้าเลือกงวดแทงหวยยี่กี</td>
                                        <td class="bRight txtCenter txtMid">yeekeehome</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-3"></div>
                    <div class="form-group col-2"></div>
                    <div class="form-group col-12">
                        <label set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        คุณสามารถเพิ่มค่าพารามิเตอร์ต่อท้ายในลิงค์ (&betType=) เพื่อเปลี่ยนเส้นทางให้ผู้เล่นไปยังหน้าแทง AMB Lotto ประเภทนั้นๆ</label>
                    </div>
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                    <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Name</th>
                                        <th class="bRight txtCenter" style="width: 210px;">Value of parameter</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">ส่วนของหวยปกติ</td>
                                        <td class="bRight txtCenter txtMid">lotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">ส่วนของหวยออนไลน์</td>
                                        <td class="bRight txtCenter txtMid">online</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">ส่วนของหวยหุ้น</td>
                                        <td class="bRight txtCenter txtMid">stock</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">ส่วนของหวยชุด</td>
                                        <td class="bRight txtCenter txtMid">set</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Game direct link</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.8rem;word-break:break-all">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=thailotto</label></label>
                                </div>                                                  
                            </div>
                            <!-- <label class="txtHead">thailotto
                                :&nbsp;</label><label>https://test-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&amp;</label><label
                                class="txtHead">header=off&amp;lottotype=thailotto</label> -->
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto
                                        :&nbsp;</label><label style="margin-bottom:0px"> https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=laoslotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=hanoylotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=hanoylottovip</label></label>
                                </div>                                                  
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">baaclotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=baaclotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">gsblotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=gsblotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponglotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=pingponglotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=laoslotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeelotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=yeekeelotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=malaylotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=hanoylotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=hanoylottovip_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=hanoylottospecial_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=malaylotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=hanoylottospecial</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockkorea
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockkorea</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockchina
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockchina</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockdowjones
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockdowjones</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocktaiwan
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stocktaiwan</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockengland
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockengland</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockindia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockindia</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockhangseng
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockhangseng</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockegypt
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockegypt</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocknikkei
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stocknikkei</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocksingapore
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stocksingapore</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockthai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockthai</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockgerman
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockgerman</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockrussia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=stockrussia</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponghome
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=pingponghome</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeehome
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=yeekeehome</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">lotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">betType=lotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">online
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">betType=online</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stock
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">betType=stock</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">betType=set</label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Language</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            หมายเหตุ : กรุณาใช้รหัสตรงตามตัวอย่าง</label>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Language</th>
                                        <th class="txtCenter" style="width: 210px;">Value of parameter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">English</td>
                                        <td class="txtCenter txtMid">en</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Thai</td>
                                        <td class="txtCenter txtMid">th</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.87rem;word-break:break-all;">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">English
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=thailotto&lang=en<label class="txtHead" style="margin-bottom:0px">lang=en</label></label>
                                </div>
                            </div>
                            <!-- <label class="txtHead">English
                                :&nbsp;</label><label>English : https://test-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off&amp;</label><label
                                class="txtHead">lottotype=thailotto&lang=EN</label> -->
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">Thai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=laoslotto&lang=th<label class="txtHead" style="margin-bottom:0px">lang=th</label></label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <label class="txtHead">Chinese Mandarin
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=CNM</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Chinese Cantonese
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=CNC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Korean
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=KOR</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Vietnam
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=VT</label>
                        </div> -->
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Signout re-direct optional link:</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.681rem;word-break:break-all;margin-left:0">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=thailotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                            <!-- <label class="txtHead">Baccarat
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label> -->
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=laoslotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=hanoylotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=hanoylottovip&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">baaclotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=baaclotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">gsblotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=gsblotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponglotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=pingponglotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=laoslotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeelotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=yeekeelotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=malaylotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=hanoylotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=hanoylottovip_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=hanoylottospecial_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=malaylotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=hanoylottospecial&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockkorea
                                        :&nbsp;</label><label style="margin-bottom:0px"> https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockkorea&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockchina
                                        :&nbsp;</label><label style="margin-bottom:0px"> https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockchina&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockdowjones
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockdowjones&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocktaiwan
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stocktaiwan&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockengland
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockengland&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockindia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockindia&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockhangseng
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockhangseng&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockegypt
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockegypt&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocknikkei
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stocknikkei&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocksingapore
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stocksingapore&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockthai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockthai&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockgerman
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockgerman&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockrussia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=stockrussia&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponghome
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=pingponghome&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeehome
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=yeekeehome&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">lotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&betType=lotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">online
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&betType=online&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stock
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&betType=stock&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&betType=set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFive">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5 Call Back Service">4.5 Call Back
                            Service</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="col-12">
                    <label set-lan="html:*Please keep">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *โปรดเก็บข้อมูล ”Call Back Service” <b style="color: red;">ทั้งหมดไว้เป็นความลับ</b>.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                </div>
                <lable><b style="color: #19A17A !important;"></b></lable>
                <div class="pb-5"></div>
                <div class="col-12" id="tabSix" style="margin-left: 10px;">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.1 GetUserBalance">4.5.1
                            GetUserDetail</b>
                    </lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นเข้าสู่หน้าแรกหรือหน้าอื่นๆ ของระบบ AMB Lotto ระบบจะส่งคำขอเพื่อรับยอดเงินคงเหลือของผู้เล่นจริง</label><br>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"GetUserDetail"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"GetUserDetail"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agent"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Response Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">username</td>
                                        <td class="bRight">String</td>
                                        <td>Username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">cut_of_time</td>
                                        <td class="bRight">String</td>
                                        <td>Cut of time bet.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">phone</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">email</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">line</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rate</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Code">Response Code</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Type" class="bRight txtCenter">Description
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td class="bRight">Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61003</td>
                                        <td class="bRight">request error  invalid time fomat</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61003</td>
                                        <td class="bRight">request error  maximum value parrent is  (15.25) on thailotto lotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td class="bRight">Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td class="bRight">Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"phone"</span>: <span class="hljs-string">"081111111111"</span>,
        <span class="hljs-attr">"email"</span>: <span class="hljs-string">"google1@gmail.com"</span>,
        <span class="hljs-attr">"line"</span>: <span class="hljs-string">"line1"</span>,
        <span class="hljs-attr">"cut_of_time"</span>: {   
            <span class="hljs-attr">"thailotto"</span>: <span class="hljs-string">"12.00"</span>,
            <span class="hljs-attr">"baaclotto"</span>: <span class="hljs-string">"08.50"</span>,
            <span class="hljs-attr">"laoslotto_set"</span>: <span class="hljs-string">"19.50"</span>,
            <span class="hljs-attr">"laoslotto"</span>: <span class="hljs-string">"19.50"</span>,
            <span class="hljs-attr">"hanoylotto"</span>: <span class="hljs-string">"17.50"</span>,
            <span class="hljs-attr">"hanoylottovip"</span>: <span class="hljs-string">"18.50"</span>,
            <span class="hljs-attr">"gsblotto"</span>: <span class="hljs-string">"12.00"</span>,
            <span class="hljs-attr">"hanoylottospecial"</span>: <span class="hljs-string">"16.30"</span>,
            <span class="hljs-attr">"malaylotto"</span>: <span class="hljs-string">"17.50"</span>,
            <span class="hljs-attr">"hanoylotto_set"</span>: <span class="hljs-string">"17.50"</span>,
            <span class="hljs-attr">"hanoylottovip_set"</span>: <span class="hljs-string">"18.50"</span>,
            <span class="hljs-attr">"hanoylottospecial_set"</span>: <span class="hljs-string">"16.30"</span>,
            <span class="hljs-attr">"malaylotto_set"</span>: <span class="hljs-string">"17.50"</span>
        },
        <span class="hljs-attr">"rate"</span>: {   
            <span class="hljs-attr">"baaclotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">10</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"gsblotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">7000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">220</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4500</span>
                }
            },
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"pingponglotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">125</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">7000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">850</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">5000</span>
                },
                <span class="hljs-attr">"top5"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">2000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25000</span>
                },
                <span class="hljs-attr">"top6"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">50000</span>
                }
            },
            <span class="hljs-attr">"stock"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"bottom3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">7000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">5000</span>
                },
                <span class="hljs-attr">"top5"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">2000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25000</span>
                },
                <span class="hljs-attr">"top6"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">50000</span>
                }
            },
            <span class="hljs-attr">"yeekeelotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabSixs" style="margin-left: 10px;">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.1 GetUserBalance">4.5.2
                            GetUserBalance</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นเข้าสู่หน้าแรกหรือหน้าอื่นๆ ของระบบ AMB Lotto ระบบจะส่งคำขอเพื่อรับยอดเงินคงเหลือของผู้เล่นจริง</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"GetUserBalance"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"GetUserBalance"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember@startapiseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Total balance.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"balance"</span>: <span class="hljs-number">50000</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.2 UserPlaceBet">4.5.3
                            UserPlaceBet</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player places">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นวางเดิมพัน ระบบ AMB Lotto จะส่งคำขอ UserPlaceBet ไปยังระบบของคู่ธุรกิจ คำขอจะหมดเวลาหลังจาก 10 วินาทีและจะส่ง PlaceBetCancel</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlaceBet"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawName</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Label of Lotto concatenate with Round.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawExpire</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Close time of Round of  Lotto. format(YYYY-MM-DD HH:mm:ss).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Identity of bet data.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">Ip</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">IP Address</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">currency</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">DrawOpen</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Open time of Round of  Lotto. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="352A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceBet"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member1@compseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"6622"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"yeekeelotto"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-number">21605</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-100</span>,
        <span class="hljs-attr">"drawName"</span>: <span class="hljs-number">"Yeekee Lotto Round 51"</span>,
        <span class="hljs-attr">"drawExpire"</span>: <span class="hljs-number">"2022-07-07 18:28:00"</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-number">"20"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">"80"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-number">"NjYyMi0xMA=="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"10"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-number">"99"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"Pending"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-number">"Pending"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-number">"2021-07-17 17:20:28"</span>,
        <span class="hljs-attr">"ip"</span>: <span class="hljs-number">"180.183.121.242"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-number">"thb"</span>,
        <span class="hljs-attr">"DrawOpen"</span>: <span class="hljs-number">"2022-07-07 05:00:00"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911002</td>
                                        <td>Account is Suspend.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911004</td>
                                        <td>Session expired.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911005</td>
                                        <td>Bet failed. Please try again.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911006</td>
                                        <td>The game is under maintenance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911007</td>
                                        <td>You are not allowed to play this game.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911010</td>
                                        <td>Account is locked.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="352B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabEight">
                    <lable><b style="color: #19A17A !important;">4.5.4 UserPlaceBetCancel</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:when previous PlaceBet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            1. ใช้ยกเลิกเมื่อ UserPlaceBet เกิดข้อผิดพลาด หรือ Time Out <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ใช้ยกเลิกกรณีที่ผู้เล่นต้องการยกเลิก <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 กรณียกเลิกทั้งตั๋ว Status ของตั๋วจะเป็น "Cancel" ซึ่งรายละเอียดในการเดิมพันแต่ละรายการ ทุกรายการของตั๋วนั้นจะมี "betStatus" เป็น "Cancel"<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 กรณียกเลิกทีละเลข
                            Status ของตั๋วจะเป็นสถานะของตั๋วนั้น ซึ่งรายละเอียดในการเดิมพันของรายการที่ต้องการยกเลิกจะมี "betStatus" เป็น "Cancel"

                        </label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlaceBetCancel"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Identity of bet data.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">currency</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="353A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceBetCancel"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"17305dd0a2769c38d3a589eb9488b9262c59b592432206e184f6687844be57"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"'superbas@agentapi"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"superbas"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"6542"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"thailotto"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-number">20064</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-80</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-number">"20"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-string">"80"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-number">"NjU0Mi0y"</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-string">"2"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-number">"23"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"Cancel"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-string">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>
            },
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-number">"20"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-string">"80"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-number">"NjU0Mi0z"</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-string">"3"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-number">"13"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"Cancel"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-string">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Cancel"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2021-07-09 20:53:31"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"thb"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51102</td>
                                        <td>Transaction not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="353B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabNine">
                    <lable><b style="color: #19A17A !important;">4.5.5 UserPlacePayout</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:This interface will">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ถ้ามีการออกผลรางวัล ระบบ AMB Lotto จะส่งคำขอ UserPlacePayout เมื่อมีการออกผลรางวัล</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlacePayout"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.(*recheck and update for lottoset.)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">resultlink</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Link for show game reslut of this drawId.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">currency</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="354A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlacePayout"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member1@compseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"6579"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"stockgerman"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-string">21330</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-string"> -10</span>,
        <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-string"> 9000</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-string">"20"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-string">"80"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-string">"NjU3OS0x"</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-string">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-string">"top3"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-string">"111"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-string">"True"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-string">10</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-string">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-string">900</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-string">9000</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-string">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Success"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"top3"</span>: [
                <span class="hljs-string">"111"</span>
            ],
            <span class="hljs-attr">"row3"</span>: [
                <span class="hljs-string">"111"</span>
            ],
            <span class="hljs-attr">"top2"</span>: [
                <span class="hljs-string">"11"</span>
            ],
            <span class="hljs-attr">"bottom2"</span>: [
                <span class="hljs-string">"00"</span>
            ],
            <span class="hljs-attr">"top1"</span>: [
                <span class="hljs-string">"1"</span>
            ],
            <span class="hljs-attr">"bottom1"</span>: [
                <span class="hljs-string">"0"</span>
            ],
        },
        <span class="hljs-attr">"resultlink"</span>: <span class="hljs-string">"https://test-ag.pirate168.com/api/reward/21330"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2021-07-14 20:26:39"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"thb"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="354B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab15">
                    <lable><b style="color: #19A17A !important;">4.5.6 UserPlaceReToRunning</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:356">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ถ้ามีการออกผลรางวัลผิดพลาด ระบบ AMB Lotto จะส่งคำขอ UserPlaceReToRunning แล้วระบบจะทำการออกผลใหม่อีกครั้ง</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlaceReToRunning"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="356A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceReToRunning"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member1@compseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"6579"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"stockgerman"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-number">21330</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-10</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-string">"20"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">"80"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-string">"NjU3OS0x"</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top3"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-string">"111"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"True"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">900</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Pending"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2021-07-14 20:26:39"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="356B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab16">
                    <lable><b style="color: #19A17A !important;">4.5.7 UserPayReward</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label
                            set-lan="html:357">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นวางเดิมพันประเภทหวยยี่กีอย่างน้อย 100 บาท/ตั๋ว แล้วยิงเลขยี่กีระบบ AMB Lotto จะส่งคำขอ UserPayReward 
ไปยังระบบของคู่ธุรกิจ เมื่อ user ยิงเลขอยู่ในลำดับที่ 1 หรือ 16 คำขอจะหมดเวลาหลังจาก 10 วินาทีและจะส่ง UserPayRewardCancel</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPayReward"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td>Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rewardId</td>
                                        <td class="bRight">Number</td>
                                        <td>Reward agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Type reward.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td>Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype</td>
                                        <td class="bRight">String</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">round</td>
                                        <td class="bRight">Number</td>
                                        <td>Round of drawagent ex. yeekeelotto round 88 (default = 1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>Success (Payment สำเร็จ), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="357A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPayReward"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember@startapiseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"rewardId"</span>: <span class="hljs-string">"1004718"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Reward"</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-string">12312</span>,
        <span class="hljs-attr">"lottotype"</span>: <span class="hljs-number">"yeekeelotto"</span>,
        <span class="hljs-attr">"round"</span>: <span class="hljs-number">11</span>,
        <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">400</span>,
        <span class="hljs-attr">"status"</span>: <span class="hljs-number">"Success"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>,
        <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="357B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabTen">
                    <lable><b style="color: #19A17A !important;">4.5.8 UserPayRewardCancel</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                <div class="form-group col-12">
                        <label
                            set-lan="html:356">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ใช้ยกเลิกเมื่อ UserPayReward เกิดข้อผิดพลาด หรือ Time Out</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Request Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable355B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"UserPayRewardCancel"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td>Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rewardId</td>
                                        <td class="bRight">Number</td>
                                        <td>Reward agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td>Type reward.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td>Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype</td>
                                        <td class="bRight">String</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">round</td>
                                        <td class="bRight">Number</td>
                                        <td>Round of drawagent ex. yeekeelotto round 88 (default = 1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td>Success (Payment สำเร็จ), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">requestDate</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="357A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPayRewardCancel"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"5eae90e32f7df02c92fde32d"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"startseamlessmember@startapiseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"rewardId"</span>: <span class="hljs-string">"1004718"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Reward"</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-string">12312</span>,
        <span class="hljs-attr">"lottotype"</span>: <span class="hljs-number">"yeekeelotto"</span>,
        <span class="hljs-attr">"round"</span>: <span class="hljs-number">11</span>,
        <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">400</span>,
        <span class="hljs-attr">"status"</span>: <span class="hljs-number">"Cancel"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>,
        <span class="hljs-attr">"requestDate"</span>: <span class="hljs-string">"2020-05-03 20:36:13"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 10%;" set-lan="html:Required" class="bRight txtCenter">
                                            Required</th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight txtCenter">Yes</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable357C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="357B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <lable id="tabEleven"><b style="color: #19A17A !important;">4.6 Optional API</b></lable>
                <div class="pb-4"></div>
                <div class="col-12" id="tabFourteen">
                    <lable><b style="color: #19A17A !important;">4.6.1 memberBetHistories</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Url : </label>
                            <label>https://test-api.pirate168.com/apiRoute/api/memberBetHistories</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable48A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">Number</td>
                                        <td>If you want to showing some ticket. Please send your ticket id. If you want to showing all the ticket don't send ticket id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>
                                        <td>Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>
                                        <td>Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Currency thb, usd, cny, idr, vnd, lak, myr, mmk, khr, php, eur, twd, inr, gbp, krw.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testseamless"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"103bc6d82e645070582a78f5dd4b226bd0383449c243c7cc91459f82d39ce25c95ebd7d9fba8569d"</span>,
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2022-06-08 15:04:05"</span>,
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2022-06-13 18:04:05"</span>,
    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">335434</span>,
    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"limit"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"currency"</span>: <span class="hljs-number">"thb"</span>

}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable38B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                        <!-- <th set-lan="html:Description" class="txtCenter">Description</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight">Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight">Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">docs</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Array of documents.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datetime</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">round</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Round of drawagent ex. yeekeelotto round 88 (default = 1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">goverment</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBalanceAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Net of bet ticket</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet detail max 200 number/tiket .</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betResultKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Bet result key lotto set.(top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawResult</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone bet type(top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalDocs</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Total number of documents in collection that match a query.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPages</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Total number of pages.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasprevPage</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">Has previous page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasnextPage</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">Has next page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">prevPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Previous page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">nextPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Next page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">mgs</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41002</td>
                                        <td>invalid input format 'balance', 'page', 'limit', field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71016</td>
                                        <td>Can request up to 15 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71022</td>
                                        <td>invalid input format 'startDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71023</td>
                                        <td>invalid input format 'endDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71024</td>
                                        <td>page should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71026</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71027</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">90003</td>
                                        <td>limit should be greater than or equal to 1 </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testseamless"</span>,
        <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2022-06-08 15:04:05"</span>,
        <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2022-06-13 18:02:45"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"docs"</span>: [
                {
                    <span class="hljs-attr">"no"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-number">"b9c2d1d8461a195c716a83da08768a3e98a58f2f303156beb3b1b55afc22cd2acc"</span>,
                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-number">"member1@testseamless"</span>,
                    <span class="hljs-attr">"datetime"</span>: <span class="hljs-number">"2022-06-13 18:02:45"</span>,
                    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-number">335434</span>,
                    <span class="hljs-attr">"type"</span>: <span class="hljs-number">"thailotto"</span>,
                    <span class="hljs-attr">"round"</span>: <span class="hljs-literal">1</span>,
                    <span class="hljs-attr">"goverment"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-literal">50</span>,
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"totalBalanceAmt"</span>: <span class="hljs-literal">-50</span>,
                    <span class="hljs-attr">"status"</span>: <span class="hljs-literal">"Pending"</span>,
                    <span class="hljs-attr">"txtList"</span>: [
                        {
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"MzM1NDM0LTE="</span>,
                            <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"1"</span>,
                            <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top3"</span>,
                            <span class="hljs-attr">"betNumber"</span>: <span class="hljs-literal">"111"</span>,
                            <span class="hljs-attr">"betStatus"</span>: <span class="hljs-literal">"Pending"</span>,
                            <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">50</span>,
                            <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">50</span>,
                            <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">900</span>,
                            <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"agentPt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">""</span>
                        }
                    ],
                    <span class="hljs-attr">"drawResult"</span>: {
                        <span class="hljs-attr">"bottom1"</span>: [],
                        <span class="hljs-attr">"bottom2"</span>: [],
                        <span class="hljs-attr">"bottom3"</span>: [],
                        <span class="hljs-attr">"row2"</span>: [],
                        <span class="hljs-attr">"row3"</span>: [],
                        <span class="hljs-attr">"row4"</span>: [],
                        <span class="hljs-attr">"top1"</span>: [],
                        <span class="hljs-attr">"top2"</span>: [],
                        <span class="hljs-attr">"top3"</span>: [],
                        <span class="hljs-attr">"top4"</span>: [],
                        <span class="hljs-attr">"top5"</span>: [],
                        <span class="hljs-attr">"top6"</span>: []
                    }
                }
            ],
            <span class="hljs-attr">"totalDocs"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"limit"</span>: <span class="hljs-string">10</span>,
            <span class="hljs-attr">"totalPages"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"page"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"hasprevPage"</span>: <span class="hljs-string">false</span>,
            <span class="hljs-attr">"hasnextPage"</span>: <span class="hljs-string">false</span>,
            <span class="hljs-attr">"prevPage"</span>: <span class="hljs-string">null</span>,
            <span class="hljs-attr">"nextPage"</span>: <span class="hljs-string">null</span>
        }
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabTwelve">
                    <lable><b style="color: #19A17A !important;">4.6.2 betHistories</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/betHistories
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable49A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">Number</td>
                                        <td>If you want to showing some ticket. Please send your ticket id. If you want to showing all the ticket don't send ticket id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>
                                        <td>Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>
                                        <td>Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">currency</td>
                                        <td class="bRight">String</td>
                                        <td>Currency thb, usd, cny, idr, vnd, lak, myr, mmk, khr, php, eur, twd, inr, gbp, krw.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="49A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testseamless"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"103bc6d82e645070582a78f5dd4b226bd0383449c243c7cc91459f82d39ce25c95ebd7d9fba8569d"</span>,
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2022-06-08 15:04:05"</span>,
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2022-06-15 18:04:05"</span>,
    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-number">335435</span>,
    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"limit"</span>: <span class="hljs-number">10</span>,
    <span class="hljs-attr">"currency"</span>: <span class="hljs-number">"thb"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Bet Position</b></lable>
                    </div> -->
                    <!-- <div class="form-group col-1"></div> -->
                    <!-- <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">BACCARAT</td>
                                        <td>'banker', 'player', 'tie', 'bankerPair', 'playerPair', 'big', 'small',
                                            'bankerNatural', 'playerNatural', 'super6'</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">DRAGON TIGER</td>
                                        <td>'dragon','tiger'</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">TIPS DEALER</td>
                                        <td>'tips'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable49B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight">Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td class="bRight">Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">docs</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Array of documents.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datetime</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">round</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Round of drawagent ex. yeekeelotto round 88 (default = 1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">goverment</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBalanceAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Net of bet ticket</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet detail max 200 number/tiket .</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betResultKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Bet result key lotto set.(top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawResult</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone bet type(top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalDocs</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Total number of documents in collection that match a query.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPages</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Total number of pages.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasprevPage</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">Has previous page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasnextPage</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">Has next page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">prevPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Previous page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">nextPage</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Next page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">mgs</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41002</td>
                                        <td>invalid input format 'balance', 'page', 'limit', field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71016</td>
                                        <td>Can request up to 15 times per minute.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71022</td>
                                        <td>invalid input format 'startDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71023</td>
                                        <td>invalid input format 'endDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71024</td>
                                        <td>page should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71026</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71027</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">90003</td>
                                        <td>limit should be greater than or equal to 1 </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Calculation Description</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47D">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">validAmt</td>
                                        <td>validAmt = betAmt</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td>payOutAmt = (betAmt(absolute) * payOutRate) + payOutCom</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">winLose</td>
                                        <td>winLose = payOutAmt - validAmt</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testseamless"</span>,
        <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2022-06-08 15:04:05"</span>,
        <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2022-06-15 18:04:05"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"docs"</span>: [
                {
                    <span class="hljs-attr">"no"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-number">"b9c2d1d8461a195c716a83da08768a3e98a58f2f303156beb3b1b55afc22cd2acc"</span>,
                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-number">"member1@testseamless"</span>,
                    <span class="hljs-attr">"datetime"</span>: <span class="hljs-number">"2022-06-13 18:04:48"</span>,
                    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-number">335435</span>,
                    <span class="hljs-attr">"type"</span>: <span class="hljs-number">"yeekeelotto"</span>,
                    <span class="hljs-attr">"round"</span>: <span class="hljs-literal">50</span>,
                    <span class="hljs-attr">"goverment"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-literal">0</span>,
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"totalBalanceAmt"</span>: <span class="hljs-literal">0</span>,
                    <span class="hljs-attr">"status"</span>: <span class="hljs-literal">"Cancel"</span>,
                    <span class="hljs-attr">"txtList"</span>: [
                        {
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"MzM1NDM1LTE="</span>,
                            <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"1"</span>,
                            <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top3"</span>,
                            <span class="hljs-attr">"betNumber"</span>: <span class="hljs-literal">"123"</span>,
                            <span class="hljs-attr">"betStatus"</span>: <span class="hljs-literal">"Reject"</span>,
                            <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                            <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">10</span>,
                            <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">900</span>,
                            <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"agentPt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">0</span>
                        },
                        {
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"MzM1NDM1LTI="</span>,
                            <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"2"</span>,
                            <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top3"</span>,
                            <span class="hljs-attr">"betNumber"</span>: <span class="hljs-literal">"232"</span>,
                            <span class="hljs-attr">"betStatus"</span>: <span class="hljs-literal">"Reject"</span>,
                            <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                            <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">10</span>,
                            <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">900</span>,
                            <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"agentPt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">0</span>
                        },
                        {
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"MzM1NDM1LTM="</span>,
                            <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"3"</span>,
                            <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top3"</span>,
                            <span class="hljs-attr">"betNumber"</span>: <span class="hljs-literal">"344"</span>,
                            <span class="hljs-attr">"betStatus"</span>: <span class="hljs-literal">"Reject"</span>,
                            <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10</span>,
                            <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">10</span>,
                            <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">900</span>,
                            <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"agentPt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">0</span>
                        }
                    ]
                },
                <span class="hljs-attr">"drawResult"</span>: {
                    <span class="hljs-attr">"bottom1"</span>: [],
                    <span class="hljs-attr">"bottom2"</span>: [],
                    <span class="hljs-attr">"row3"</span>: [],
                    <span class="hljs-attr">"top1"</span>: [],
                    <span class="hljs-attr">"top2"</span>: [],
                    <span class="hljs-attr">"top3"</span>: []
                }
            ],
            <span class="hljs-attr">"totalDocs"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"limit"</span>: <span class="hljs-string">10</span>,
            <span class="hljs-attr">"totalPages"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"page"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"hasprevPage"</span>: <span class="hljs-string">false</span>,
            <span class="hljs-attr">"hasnextPage"</span>: <span class="hljs-string">false</span>,
            <span class="hljs-attr">"prevPage"</span>: <span class="hljs-string">null</span>,
            <span class="hljs-attr">"nextPage"</span>: <span class="hljs-string">null</span>
        }
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThirteen">
                    <lable><b style="color: #19A17A !important;">4.6.3 GetListBetResult</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/GetListBetResult
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype</td>
                                        <td class="bRight">String</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">startDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">endDate</td>
                                        <td class="bRight">Date</td>
                                        <td>Date type “yyyy-MM-dd HH:mm:ss” (GMT+7)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3"</span>,
    <span class="hljs-attr">"lottotype"</span>: <span class="hljs-string">"stockrussia"</span>,
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2021-07-20 15:04:05"</span>,
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2021-07-20 15:04:05"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">String</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">date</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">name_th</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">name_en</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71011</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71021</td>
                                        <td>please input startDate and endDate</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71022</td>
                                        <td>invalid input format 'startDate' field.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71023</td>
                                        <td>invalid input format 'endDate' field.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: [
        {
            <span class="hljs-attr">"name_th"</span>: <span class="hljs-string">"หวยหุ้นรัสเซีย"</span>,
            <span class="hljs-attr">"name_en"</span>: <span class="hljs-string">"Stock Russia"</span>,
            <span class="hljs-attr">"date"</span>: <span class="hljs-string">"2021-07-20 00:00:00"</span>,
            <span class="hljs-attr">"result"</span>: {
                <span class="hljs-attr">"top3"</span>: [
                    <span class="hljs-string">"123"</span> 
                ],
                <span class="hljs-attr">"row3"</span>: [
                    <span class="hljs-string">"123"</span>,
                    <span class="hljs-string">"132"</span>, 
                    <span class="hljs-string">"213"</span>,
                    <span class="hljs-string">"231"</span>, 
                    <span class="hljs-string">"312"</span>, 
                    <span class="hljs-string">"321"</span>  
                ],
                <span class="hljs-attr">"top2"</span>: [
                    <span class="hljs-string">"23"</span> 
                ],
                <span class="hljs-attr">"bottom2"</span>: [
                    <span class="hljs-string">"22"</span> 
                ],
                <span class="hljs-attr">"top1"</span>: [
                    <span class="hljs-string">"1"</span>,
                    <span class="hljs-string">"2"</span>,
                    <span class="hljs-string">"3"</span>
                ],
                <span class="hljs-attr">"bottom1"</span>: [
                    <span class="hljs-string">"2"</span> 
                ]
            }
        }
    ],
    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>
                <lable id="tab464"><b style="color: #19A17A !important;">4.6.4 Setting Back-Office</b></lable>
                <div class="pb-4"></div>

                <div class="col-12" id="tab4641">
                    <lable><b style="color: #19A17A !important;">4.6.4.1 AddHotnumber</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/settingBO
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"AddHotnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hotnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of add hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of hot number placeout.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash1"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"AddHotnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"hotnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"123"</span>,
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">100</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Add Hotnumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lenght at top3</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>can't set amount > placeout</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lenght at lottoset (หวยชุดทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>yeekeelottocan't set Hotnumber</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>pingponglottocan't set Hotnumber</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>stockkorea can't set Hotnumber (หวยหุ้นทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>amount less than balance, should more than 0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid amount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"Add Hotnumber Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab4642">
                    <lable><b style="color: #19A17A !important;">4.6.4.2 EditHotnumber</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/settingBO
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"EditHotnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hotnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of add hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of hot number placeout.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"EditHotnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"hotnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"123"</span>,
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">1000</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Update HotNumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid hot number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>can't set amount > placeout</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>yeekeelotto doesn't have hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>pingponglotto doesn't have hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>stockkorea doesn't have hotnumber. (หวยหุ้นทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lenght at lottoset (หวยชุดทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>amount less than balance, should more than 0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"Update HotNumber Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab4643">
                    <lable><b style="color: #19A17A !important;">4.6.4.3 DeleteHotnumber</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/settingBO
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"DeleteHotnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hotnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of add hotnumber.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"DeleteHotnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"hotnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"123"</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Delete HotNumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid hot number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>yeekeelotto doesn't have hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>pingponglotto doesn't have hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>stockkorea doesn't have hotnumber. (หวยหุ้นทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"Delete HotNumber Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab4644">
                    <lable><b style="color: #19A17A !important;">4.6.4.4 AddLimitnumber</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/settingBO
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"AddLimitnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limitnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of add limitnumber.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"AddLimitnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"limitnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"999"</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Add LimitNumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>yeekeelotto doesn't have limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>pingponglotto doesn't have limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>stockkorea doesn't have limitnumber.(หวยหุ้นทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lenght at top3(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lenght at lottoset (หวยชุดทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"Add LimitNumber Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab4645">
                    <lable><b style="color: #19A17A !important;">4.6.4.5 DeleteLimitnumber</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/settingBO
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"DeleteLimitnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limitnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of delete limitnumber.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"DeleteLimitnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"limitnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"567"</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Delete LimitNumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>yeekeelotto doesn't have limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>pingponglotto doesn't have limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>stockkorea doesn't have limitnumber.(หวยหุ้นทุกประเภท)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"Delete LimitNumber Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab4646">
                    <lable><b style="color: #19A17A !important;">4.6.4.6 SetPlaceout</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/settingBO
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"SetPlaceOut"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">enable_hotplaceout</td>
                                        <td class="bRight">Object</td>
                                        <td>Enable hotplaceout true and faluse.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">placeout</td>
                                        <td class="bRight">String</td>
                                        <td>Object response placeout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">laoslotto(lotto type)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response lottotype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">laoslotto(lotto type)</td>
                                        <td class="bRight">Object</td>
                                        <td>แทงได้ 2 แบบ(แบบปกติและแบบชุด)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">top4(subtype)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response subtype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount at placeout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hotplaceout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response hotplaceout.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-12 d-flex" style="margin-left:0%">
                                    <pre class="col-6">
                                    <p style="margin:0;font-size: 1rem;color: #19A17A" class="text-center"><b>หวยชุด</b></p>
                                        <code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"SetPlaceOut"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"enable_hotplaceout"</span>: <span class="hljs-string">true</span>,
        <span class="hljs-attr">"placeout"</span>: {
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"laoslotto"</span>: {
                    <span class="hljs-attr">"top4"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">200</span>
                    },
                    <span class="hljs-attr">"row4"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">1</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    },
                    <span class="hljs-attr">"top2"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    },
                    <span class="hljs-attr">"row2"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    },
                    <span class="hljs-attr">"top1"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    },
                    <span class="hljs-attr">"bottom1"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">0</span>
                    }
                },
                <span class="hljs-attr">"laoslotto_set"</span>: {
                    <span class="hljs-attr">"lottoset"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">500</span>
                    }
                }
            }
        },
        <span class="hljs-attr">"hotplaceout"</span>: {
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"laoslotto"</span>: {
                    <span class="hljs-attr">"top4"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"row4"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"top2"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"row2"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"top1"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr">"bottom1"</span>: {
                        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">800</span>
                    }
                },
                <span class="hljs-attr">"laoslotto_set"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">500</span>
                }
            }
        }
    }
}</code></pre>
                                    <pre class="col-6">
                                    <p style="margin:0;font-size: 1rem;color: #19A17A" class="text-center"><b>หวยแทงปกติ</b></p>
                                        <code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"SetPlaceOut"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"enable_hotplaceout"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"placeout"</span>: {
            <span class="hljs-attr">"stock"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10</span>
                },
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">10</span>
                },
            }
        },
        <span class="hljs-attr">"hotplaceout"</span>: {
            <span class="hljs-attr">"stock"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">50</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">20</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">20</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">20</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">20</span>
                },
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-string">20.5</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Set Placeout Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1039</td>
                                        <td>Not have top4(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1039</td>
                                        <td>Create placeout fail</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1039</td>
                                        <td>can't set placeout lower than current system bet on thailotto at top6(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid amount in subtype laoslotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>hotplaceout invalid type amount in subtype top6(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>hotplaceout amount should > 0 in subtype top6(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>hotplaceout invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>placeout invalid type amount in subtype top6(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>placeout amount should > 0 in subtype top6(subtype)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>placeout invalid subtype</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"Set Placeout Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab47">
                    <lable><b style="color: #19A17A !important;">4.6.5 ListPlaceout</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/ListPlaceout
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">dataenable</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response dataenable.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datahotplaceout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response datahotplaceout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datapayout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response datapayout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">dataplaceout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response dataplaceout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">baaclotto(lotto type)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response lottotype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">bottom1(subtype)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response subtype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">enable</td>
                                        <td class="bRight">String</td>
                                        <td>Enable true and false.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of hot placeout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">float</td>
                                        <td>Discount of payout</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payout</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout rate normal.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">levellist</td>
                                        <td class="bRight">Number</td>
                                        <td>levellist of payout</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"dataenable"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"laoslotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"malaylotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"stock"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        },
        <span class="hljs-attr">"thailotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">true</span>
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-string">false</span>
        }
    },
    <span class="hljs-attr">"datahotplaceout"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            }
        },
        <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            }
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"laoslotto"</span>: {
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"malaylotto"</span>: {
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-number">null</span>
            }
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            }
        },
        <span class="hljs-attr">"stock"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            }
        },
        <span class="hljs-attr">"thailotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">25000</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">3000</span>
            },
            <span class="hljs-attr">"bottom3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5000</span>
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">15000</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5000</span>
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">25000</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">3000</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">300</span>
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">500</span>
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">500</span>
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">250</span>
            }
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                }
            }
        }
    },
    <span class="hljs-attr">"datapayout"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            }
        },
        <span class="hljs-attr">"gsblotto"</span>: { 
             <span class="hljs-attr">"bottom1"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
             <span class="hljs-attr">"bottom2"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
             <span class="hljs-attr">"row3"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
             <span class="hljs-attr">"top1"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
             <span class="hljs-attr">"top2"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
             <span class="hljs-attr">"top3"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            }
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"laoslotto"</span>: {
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">220</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4500</span>
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"malaylotto"</span>: {
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-string">null</span>
            }
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">5000</span>
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25000</span>
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">50000</span>
            }
        },
        <span class="hljs-attr">"stock"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            }   
        },
        <span class="hljs-attr">"thailotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"bottom3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">5000</span>
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25000</span>
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">50000</span>
            }
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            }   
    },
    <span class="hljs-attr">"dataplaceout"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>:</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">3.2</span>
                    ]
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">89</span>
                    ]
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">0</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">149</span>
                    ]
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">0</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">2.2</span>
                    ]
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">0</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">89</span>
                    ]
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">899</span>
                    ]
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">300</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">300</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">100</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">4</span>,
                        <span class="hljs-number">3</span>,
                        <span class="hljs-number">2</span>,
                        <span class="hljs-number">1</span>
                    ]
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-attr">-10</span>
                    ]
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-attr">50</span>
                    ]
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-number">3</span>,
                        <span class="hljs-number">2</span>,
                        <span class="hljs-number">1</span>
                    ]
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-attr">-10</span>
                    ]
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                    <span class="hljs-attr">"levellist"</span>: [
                        <span class="hljs-attr">800</span>
                    ]
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">300</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"laoslotto"</span>: {
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">1000</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"amount"</span>:</span>: <span class="hljs-number">500</span>,
                    <span class="hljs-attr">"levellist"</span>: null
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">300</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            } 
        },
        <span class="hljs-attr">"malaylotto"</span>: {
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: {
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">300</span>,
                    <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">20000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">20000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">20000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">1000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"stock"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"thailotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">50000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">4</span>,
                    <span class="hljs-attr">3</span>,
                    <span class="hljs-attr">2</span>,
                    <span class="hljs-attr">1</span>
                ]
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 6000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">70</span>,
                    <span class="hljs-attr">50</span>,
                    <span class="hljs-attr">30</span>,
                    <span class="hljs-attr">20</span>
                ]
            },
            <span class="hljs-attr">"bottom3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 10000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">125</span>,
                    <span class="hljs-attr">100</span>,
                    <span class="hljs-attr">75</span>,
                    <span class="hljs-attr">50</span>
                ]
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">25000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">10</span>,
                    <span class="hljs-attr">8</span>,
                    <span class="hljs-attr">6</span>,
                    <span class="hljs-attr">4</span>
                ]
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">90</span>,
                    <span class="hljs-attr">80</span>,
                    <span class="hljs-attr">70</span>,
                    <span class="hljs-attr">60</span>
                ]
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">200</span>,
                    <span class="hljs-attr">175</span>,
                    <span class="hljs-attr">150</span>,
                    <span class="hljs-attr">125</span>
                ]
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 50000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">3</span>,
                    <span class="hljs-attr">2</span>,
                    <span class="hljs-attr">1</span>
                ]
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">6000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">70</span>,
                    <span class="hljs-attr">50</span>,
                    <span class="hljs-attr">30</span>,
                    <span class="hljs-attr">20</span>
                ]
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">600</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">550</span>,
                    <span class="hljs-attr">450</span>,
                    <span class="hljs-attr">350</span>,
                    <span class="hljs-attr">250</span>
                ]
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">2500</span>,
                    <span class="hljs-attr">2000</span>,
                    <span class="hljs-attr">1500</span>,
                    <span class="hljs-attr">1000</span>
                ]
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 1000</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">15000</span>,
                    <span class="hljs-attr">10000</span>,
                    <span class="hljs-attr">5000</span>
                ]
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 500</span>,
                <span class="hljs-attr">"levellist"</span>: [
                    <span class="hljs-attr">30000</span>,
                    <span class="hljs-attr">25000</span>,
                    <span class="hljs-attr">20000</span>,
                    <span class="hljs-attr">10000</span>
                ]
            }
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">5000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">10000</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">2500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>:<span class="hljs-number">500</span>,
                <span class="hljs-attr">"levellist"</span>: []
            }
        }
    }
}
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab48">
                    <lable><b style="color: #19A17A !important;">4.6.6 ListHotnumber and Limitnumber</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/ListHotnumberandLimitnumber
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>,
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hotnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response hotnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">thailotto</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response lottotype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentid</td>
                                        <td class="bRight">Number</td>
                                        <td>Agent Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of hot number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hotnumid</td>
                                        <td class="bRight">Number</td>
                                        <td>Hotnumber Id set system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">Number</td>
                                        <td>This number of add hotnumber/limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype</td>
                                        <td class="bRight">String</td>
                                        <td>Subtype of lotto</td>
                                    </tr>
                                     <tr>
                                        <td class="bRight">superadmin</td>
                                        <td class="bRight">Number</td>
                                        <td>Agent Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limitnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response limitnumber.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"hotnumber":</span> {
            <span class="hljs-attr">"thailotto":</span> [
                    {
                        <span class="hljs-attr">"agentid"</span>: <span class="hljs-number">19</span>,
                        <span class="hljs-attr">"amount"</span>:<span class="hljs-number">100</span>,
                        <span class="hljs-attr">"hotnumid"</span>: <span class="hljs-number">787</span>,
                        <span class="hljs-attr">"number"</span>: <span class="hljs-number">"000000"</span>,
                        <span class="hljs-attr">"subtype"</span>: <span class="hljs-number">"top6"</span>,
                        <span class="hljs-attr">"superadmin"</span>: <span class="hljs-number">18</span>
                    }
                ]
            },
        <span class="hljs-attr">"limitnumber"</span>: {
                <span class="hljs-attr">"thailotto"</span>: [
                {
                    <span class="hljs-attr">"agentid"</span>: <span class="hljs-number">19</span>,
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">0</span>,
                    <span class="hljs-attr">"hotnumid"</span>: <span class="hljs-number">206</span>,
                    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"123456"</span>,
                    <span class="hljs-attr">"subtype"</span>: <span class="hljs-number">"top6"</span>,
                    <span class="hljs-attr">"superadmin"</span>: <span class="hljs-number">18</span>
                }
            ]
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab49">
                    <lable><b style="color: #19A17A !important;">4.6.7 Detail</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/agent/detail
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rate</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response rate.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">baaclotto(lotto type)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response lottotype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">bottom1(subtype)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response subtype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">float</td>
                                        <td>Discount of payout</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">max</td>
                                        <td class="bRight">float</td>
                                        <td>Max of bet.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">min</td>
                                        <td class="bRight">float</td>
                                        <td>Min of bet.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payout</td>
                                        <td class="bRight">float</td>
                                        <td>Payout rate normal.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"rate"</span>: {
            <span class="hljs-attr">"baaclotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                }
            },
            <span class="hljs-attr">"gsblotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                    },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                    },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                    },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                    },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
                }
            },
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">7000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">220</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4500</span>
                }
            },
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                    },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">3000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
                }
            },
            <span class="hljs-attr">"pingponglotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">7000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">5000</span>
                },
                <span class="hljs-attr">"top5"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">2000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25000</span>
                },
                <span class="hljs-attr">"top6"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">50000</span>
                }
            },
            <span class="hljs-attr">"stock"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            },
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"bottom3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">7000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">5000</span>
                },
                <span class="hljs-attr">"top5"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">2000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25000</span>
                },
                <span class="hljs-attr">"top6"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">50000</span>
                }
            },
            <span class="hljs-attr">"yeekeelotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                    },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
                }
            }
        }
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-number">"success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab491">
                    <lable><b style="color: #19A17A !important;">4.6.8 Reject By Company</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://test-api.pirate168.com/apiRoute/agent/rejectbet
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>
                                        <td>Identity of bet data.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">Number</td>
                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"testcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>,
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"pirate0001"</span>,
    <span class="hljs-attr">"betId"</span>: <span class="hljs-string">""</span>,
    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"1"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">success</td>
                                        <td class="bRight">String</td>
                                        <td>Result status true or false.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2031</td>
                                        <td>Invalid member</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>lost agent agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>invalid data fomat</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2033</td>
                                        <td>lost agent agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2060</td>
                                        <td>create log credit member error</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2060</td>
                                        <td>can't reject this ticket because this ticket is calculate and status is reject</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2060</td>
                                        <td>draw dose not exist</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2060</td>
                                        <td>can't reject after bet of after draw close</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"success"</span>,
    <span class="hljs-attr">"success"</span>: <span class="hljs-number">true</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='lottotype.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='transferwallet.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div>
                </div>
                <!-- </div> -->

            </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#manu4 , #manu4 > a").addClass("active");
        $("#manu4 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function() {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 4;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>