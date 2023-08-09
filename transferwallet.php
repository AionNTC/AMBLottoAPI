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
                <h1><b style="color: #19A17A  !important;" data-translate="4" set-lan="text:5. Transferwallet Api">5.
                        Transferwallet API</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tab1">
                    <lable><b style="color: #19A17A  !important;" set-lan="text:5.1 Introduction Transferwallet API">5.1
                            Introduction Transferwallet API</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:5.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในส่วนนี้จะแสดงรายละเอียดของการใช้งานระบบ Transferwallet เพื่อไปใช้ในระบบคู่ธุรกิจภายนอก
                        </label>
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;** รองรับแบบ <b style="color:red"> Multi Agent </b></label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tab2">
                    <lable><b style="color: #19A17A  !important;" set-lan="text:5.2 Workflow">5.2 Workflow</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:5.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้อมูลเบื้องต้นแสดงการทำงานในการเรียกใช้ API ของระบบคู่ธุรกิจ เพื่อให้ระบบสามารถเรียกใช้ API ได้ภายใต้เงื่อนไขได้อย่างถูกต้อง
                        </label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tab3">
                    <lable><b style="color: #19A17A  !important;" set-lan="text:5.3 Setting">5.3 Setting</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            *หากคุณมีบัญชีหลัก โปรดสร้างบัญชีตัวแทน API
                            ภายใต้บัญชีหลักของคุณและเข้าสู่ระบบด้วยบัญชีตัวแทน API ที่สร้างขึ้นก่อน
                            แล้วทำตามขั้นตอนการตั้งค่า ดังนี้
                        </label>
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.เข้าสู่ระบบ</label>
                        <div class="col-12">
                            <img src="./API_files/Login001.png" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.คลิกเมนูบัญชีและเลือกเมนูโปรไฟล์</label>
                        <div class="col-12">
                            <img src="./API_files/2.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label id="tabZero" set-lan="html:4. Define">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.กำหนดข้อมูล API ต่อไปนี้</label>
                        <div class="col-12">
                            <label set-lan="html:4.1 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.1 Key ใช้สำหรับ auten login</label>
                        </div>
                        <div class="col-12">
                            <label set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.2 คุณสามารถคลิกปุ่ม “บันทึก” เพื่อบันทึกข้อมูล</label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/4.png" style="width: 80%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab4">
                    <lable><b style="color: #19A17A  !important;" set-lan="text:5.4 login request">5.4 login request</b>
                    </lable>
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
                                https://test-api.pirate168.com/apiRoute/member/tranferwallet/loginRequest
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="txtCenter bRight">Type</th>

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
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>

                                        <td>Object respone.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001",</span>
    <span class="hljs-attr">"data"</span>:  {
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"baszzz",</span>
        <span class="hljs-attr">"phone"</span>: <span class="hljs-string">"081111111111",</span>
        <span class="hljs-attr">"email"</span>: <span class="hljs-string">"google1@gmail.com",</span>
        <span class="hljs-attr">"line"</span>: <span class="hljs-string">"line1",</span>
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB",</span>
        <span class="hljs-attr">"rate"</span>: {
            <span class="hljs-attr">"baaclotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000,</span>
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr">"top1"</span>: {
                        <span class="hljs-attr">"discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">"top2"</span>: {
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>:<span class="hljs-string"> 90</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr"> "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                    }
                },
                <span class="hljs-attr">"gsblotto"</span>: {
                    <span class="hljs-attr">"bottom1"</span>: {
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>: {
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">  "row3"</span>:{
                        <span class="hljs-attr">    "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr"> "top1"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">   "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">   "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr">   "payout"</span>:<span class="hljs-string"> 3.2</span>
                    },
                    <span class="hljs-attr"> "top2"</span>: {
                        <span class="hljs-attr">  "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "top3"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>:<span class="hljs-string"> 900</span>
                    }
                },
                <span class="hljs-attr">"hanoylotto"</span>: {
                    <span class="hljs-attr">"bottom1"</span>: {
                        <span class="hljs-attr">  "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>: {
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr">"top1"</span>: {
                        <span class="hljs-attr">  "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">"top2"</span>: {
                        <span class="hljs-attr">  "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr">"discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr">"max"</span>:<span class="hljs-string"> 5000,</span>
                        <span class="hljs-attr">"min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr">"payout"</span>:<span class="hljs-string"> 900</span>
                    }
                },
                <span class="hljs-attr">"hanoylotto_set"</span>: {
                    <span class="hljs-attr">"back2"</span>: {
                        <span class="hljs-attr">    "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">   "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">   "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">"front2"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">25</span>
                    },
                    <span class="hljs-attr">"row4"</span>: {
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">40</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr">   "discount"</span>:  <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string"> 600,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>:  <span class="hljs-string">350</span>
                    },
                    <span class="hljs-attr">"top4"</span>: {
                        <span class="hljs-attr">"discount"</span>:  <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>:  <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>:  <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>:  <span class="hljs-string">1000</span>
                    }
                },
                <span class="hljs-attr">"hanoylottospecial"</span>: {
                    <span class="hljs-attr">  "bottom1"</span>: {
                        <span class="hljs-attr">      "discount"</span>:  <span class="hljs-string">0,</span>
                        <span class="hljs-attr">      "max"</span>:  <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">      "min"</span>: <span class="hljs-string"> 1,</span>
                        <span class="hljs-attr">      "payout"</span>:  <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>: {
                        <span class="hljs-attr">  "discount"</span>:  <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>:  <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>:  <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">  "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr"> "max"</span>:<span class="hljs-string"> 20000,</span>
                        <span class="hljs-attr">  "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>:<span class="hljs-string"> 150</span>
                    },
                    <span class="hljs-attr">"top1"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">"top2"</span>: {
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>:<span class="hljs-string"> 20000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">900</span>
                    }
                },
                <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                    <span class="hljs-attr">"back2"</span>: {
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>:<span class="hljs-string"> 15</span>
                    },
                    <span class="hljs-attr">"front2"</span>: {
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>:<span class="hljs-string"> 25</span>
                    },
                    <span class="hljs-attr">"row4"</span>: {
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>:<span class="hljs-string"> 1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">40</span>
                    },
                    <span class="hljs-attr">"top3"</span>: {
                        <span class="hljs-attr">  "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">350</span>
                    },
                    <span class="hljs-attr">"top4"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>:<span class="hljs-string"> 600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                    }
                },
                <span class="hljs-attr">"hanoylottovip"</span>: {
                    <span class="hljs-attr">"bottom1"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>:<span class="hljs-string"> 200000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>: {
                        <span class="hljs-attr"> "discount"</span>:<span class="hljs-string"> 0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"row3"</span>: {
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string"> 20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string"> 150</span>
                    },
                    <span class="hljs-attr">"top1"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">"top2"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"top3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                    }
                },
                <span class="hljs-attr"> "hanoylottovip_set"</span>:{
                    <span class="hljs-attr">"back2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">"front2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr"> "row3"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">25</span>
                    },
                    <span class="hljs-attr">  "row4"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">40</span>
                    },
                    <span class="hljs-attr">"top3"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">350</span>
                    },
                    <span class="hljs-attr">"top4"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">1000</span>
                    }
                },
                <span class="hljs-attr">"laoslotto_set"</span>:{
                    <span class="hljs-attr"> "back2"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">   "front2"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">   "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">   "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">     "payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr"> "row3"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">25</span>
                    },
                    <span class="hljs-attr"> "row4"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">40</span>
                    },
                    <span class="hljs-attr"> "top3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">350</span>
                    },
                    <span class="hljs-attr">  "top4"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">1000</span>
                    }
                },
                <span class="hljs-attr"> "laoslotto"</span>:{
                    <span class="hljs-attr">"bottom1"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">  "bottom2"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">   "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">    "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">  "row2"</span>:{
                        <span class="hljs-attr">    "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">12</span>
                    },
                    <span class="hljs-attr">  "row3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr"> "row4"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">7000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">220</span>
                    },
                    <span class="hljs-attr">"top1"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">"top2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"top3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">900</span>
                    },
                    <span class="hljs-attr">  "top4"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">4500</span>
                    }
                },
                <span class="hljs-attr"> "malaylotto"</span>:{
                    <span class="hljs-attr"> "bottom1"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr"> "bottom2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "row3"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr"> "top1"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">  "top2"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">  "top3"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                    }
                },
                <span class="hljs-attr"> "malaylotto_set"</span>:{
                    <span class="hljs-attr">"back2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">"front2"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                    },
                    <span class="hljs-attr">"row3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                    },
                    <span class="hljs-attr"> "row4"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                    },
                    <span class="hljs-attr">"top3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                    },
                    <span class="hljs-attr">  "top4"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">600,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">1000</span>
                    }
                },
                <span class="hljs-attr">"pingponglotto"</span>:{
                    <span class="hljs-attr">"bottom1"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                    },
                    <span class="hljs-attr"> "bottom2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">  "row2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                    },
                    <span class="hljs-attr">  "row3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">130</span>
                    },
                    <span class="hljs-attr"> "row4"</span>:{
                        <span class="hljs-attr">      "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">    "max"</span>: <span class="hljs-string">7000,</span>
                        <span class="hljs-attr">   "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">   "payout"</span>: <span class="hljs-string">225</span>
                    },
                    <span class="hljs-attr">"top1"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3</span>
                    },
                    <span class="hljs-attr"> "top2"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "top3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">800</span>
                    },
                    <span class="hljs-attr"> "top4"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">5000</span>
                    },
                    <span class="hljs-attr"> "top5"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">2000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">25000</span>
                    },
                    <span class="hljs-attr"> "top6"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">1000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">50000</span>
                    }
                },
                <span class="hljs-attr">   "stock"</span>:{
                    <span class="hljs-attr"> "bottom1"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">"bottom2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">"row3"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr"> "top1"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr"> "top2"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "top3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                    }
                },
                <span class="hljs-attr"> "thailotto"</span>:{
                    <span class="hljs-attr"> "bottom1"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">  "bottom2"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "bottom3"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">    "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                    },
                    <span class="hljs-attr"> "row2"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                    },
                    <span class="hljs-attr"> "row3"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">"min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr">  "row4"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">   "max"</span>: <span class="hljs-string">7000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">225</span>
                    },
                    <span class="hljs-attr">  "top1"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">     "top2"</span>:{
                        <span class="hljs-attr">        "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">       "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">   "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr">   "top3"</span>:{
                        <span class="hljs-attr">    "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">900</span>
                    },
                    <span class="hljs-attr"> "top4"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">5000</span>
                    },
                    <span class="hljs-attr">  "top5"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">2000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25000</span>
                    },
                    <span class="hljs-attr">  "top6"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">   "max"</span>: <span class="hljs-string">1000,</span>
                        <span class="hljs-attr">   "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">50000</span>
                    }
                },
                <span class="hljs-attr">"yeekeelotto"</span>:{
                    <span class="hljs-attr">  "bottom1"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">4.2</span>
                    },
                    <span class="hljs-attr">  "bottom2"</span>:{
                        <span class="hljs-attr">  "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">  "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">  "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "row3"</span>:{
                        <span class="hljs-attr"> "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr"> "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">  "payout"</span>: <span class="hljs-string">150</span>
                    },
                    <span class="hljs-attr">"top1"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">3.2</span>
                    },
                    <span class="hljs-attr">  "top2"</span>:{
                        <span class="hljs-attr">   "discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">   "max"</span>: <span class="hljs-string">20000,</span>
                        <span class="hljs-attr">    "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr">     "payout"</span>: <span class="hljs-string">90</span>
                    },
                    <span class="hljs-attr"> "top3"</span>:{
                        <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0,</span>
                        <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000,</span>
                        <span class="hljs-attr"> "min"</span>: <span class="hljs-string">1,</span>
                        <span class="hljs-attr"> "payout"</span>: <span class="hljs-string">900</span>
                    }
                }
            }
        }
}</code></pre>
                                    <script src="./API_files/ex_3-1.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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
                                        <td>Player username from AMB Lotto system</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">tkUuid</td>
                                        <td class="bRight">String</td>
                                        <td>Token for send to home page.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">uriDesktop</td>
                                        <td class="bRight">String</td>
                                        <td>AMB Lotto link but don't show web header</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">urlFullPage</td>
                                        <td class="bRight">String</td>
                                        <td>AMB Lotto link fullpage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Code</b></lable>
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
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61002</td>
                                        <td>IP address is not allowed.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'playerUsername'. </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 36 characters long.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71006</td>
                                        <td>username must not contain any special characters and can only contain letters a-z and numbers 0-9.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71012</td>
                                        <td>login fail</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="44B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"ff4003404239450abb86dd313cb138cabea9ded4f26993a72933d318b16e86",</span>
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testuserapi001@agentapi",</span>
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001",</span>
        <span class="hljs-attr">"tkUuid"</span>: <span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxOCwiZXhwIjoxNjI3MjE0NzIzLCJpYXQiOjE2MjYzNTA3MjMsInJvbGUiOiJ0ZXN0dXNlcmFwaTAwMUBhZ2VudGFwaSIsInN1YiI6ZmFsc2V9.X7bkBS0nT8RBGHf7Y8abW4owQ_8pdtxMsDFMSMT3ndk",</span>
        <span class="hljs-attr">"url"</span>: <span class="hljs-string">"https://test.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxOCwiZXhwIjoxNjI3MjE0NzIzLCJpYXQiOjE2MjYzNTA3MjMsInJvbGUiOiJ0ZXN0dXNlcmFwaTAwMUBhZ2VudGFwaSIsInN1YiI6ZmFsc2V9.X7bkBS0nT8RBGHf7Y8abW4owQ_8pdtxMsDFMSMT3ndk&header=off",</span>
        <span class="hljs-attr">"urlFullPage"</span>: <span class="hljs-string">"https://test.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxOCwiZXhwIjoxNjI3MjE0NzIzLCJpYXQiOjE2MjYzNTA3MjMsInJvbGUiOiJ0ZXN0dXNlcmFwaTAwMUBhZ2VudGFwaSIsInN1YiI6ZmFsc2V9.X7bkBS0nT8RBGHf7Y8abW4owQ_8pdtxMsDFMSMT3ndk&header=on"</span>
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"success",</span>
}</code></pre>
                                    <script src="./API_files/ex4_4B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;" set-lan="text:** Optional">** Optional for direct/re-direct link.</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; คุณสามารถเพิ่มค่าพารามิเตอร์ต่อท้ายในลิงค์ (&lottotype=) เพื่อเปลี่ยนเส้นทางให้ผู้เล่นไปยังหน้าแทง AMB Lotto ประเภทนั้นๆ</label>
                    </div>
                    <!-- <div class="col-8">
                <a href="../img/zip/game_icons.rar" style="float: right;" class="Point" download=""><i class="fa fa-download" aria-hidden="true"></i>
                    <label class="Point">&nbsp;Download Icon</label></a>
            </div>
            <div class="form-group col-3"></div> -->
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Name</th>
                                        <th class="bRight txtCenter" style="width: 210px;">Value of parameter</th>
                                        <!-- <th class="txtCenter" style="width: 210px;">Image icon</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">หวยไทย</td>
                                        <td class="bRight txtCenter txtMid">thailotto</td>
                                        <!-- <td class="bRight txtCenter bBottom" style="background-color: gray;">
                                    <img src="/img/game_icon/baccarat.png" class="IconSize"></td> -->
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">AMB Lotto direct link</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.8rem;">
                        <!-- <div class="col-12">
                            <label class="txtHead">Baccarat :</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;</label><label class="txtHead">game=BAC</label>
                        </div> -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&<label class="txtHead" style="margin-bottom:0px">lottotype=thailotto</label></label>
                                </div>                                                  
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslottoฃ
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


                    </div>
                </div>

                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Language</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ : กรุณาใช้รหัสตรงตามตัวอย่าง</label>
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
                                        <td class="txtCenter txtMid">EN</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Thai</td>
                                        <td class="txtCenter txtMid">TH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.87rem;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">English
                                    :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=thailotto&lang=en<label class="txtHead" style="margin-bottom:0px">lang=en</label></label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">Thai
                                    :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=laoslotto&lang=th<label class="txtHead" style="margin-bottom:0px">lang=th</label></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #cfa137 !important;">Signout re-direct optional link:</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.681rem;margin:0">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lottotype=thailotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
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
                    </div>
                </div>






                <div class="col-12" id="tab5">
                    <lable><b style="color: #19A17A  !important;" set-lan="text:5.5 getUserBalance">5.5
                            getUserBalance</b></lable>
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
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/getUserBalance
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>

                                        <td>Total balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>

                                        <td>Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from Pretty Gaming system.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71014</td>
                                        <td>invalid UserMember.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="45B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"balance"</span>: <span class="hljs-number">50,</span>
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"ff4003404239450abb86dd313cb138cabea9ded4f26993a72933d318b16e86",</span>
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testuserapi001@agentapi",</span>
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001",</span>

    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_5B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab6">
                    <lable><b style="color: #19A17A  !important;">5.6 deposit</b></lable>
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
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/deposit
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable46A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td>Deposit balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="46A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001",</span>
    <span class="hljs-attr">"balance"</span>: <span class="hljs-number">100,</span>
    <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"25f0c27dbea3f32s61f2cd6612676125127126761216541276512"</span>
}</code></pre>
                                    <script src="./API_files/ex4_6.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">addBalance</td>
                                        <td class="bRight">Number</td>

                                        <td>Deposit balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterAgentBalance</td>
                                        <td class="bRight">Number</td>

                                        <td>Balance after Deposit of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterMemberBalance</td>
                                        <td class="bRight">Number</td>

                                        <td>Balance after Deposit of member.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">beforeAgentBalance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance before Deposit of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">beforeMemberBalance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance before Deposit of member.</td>
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
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>

                                        <td>Reference id Unique from AMB Lotto system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable45C">
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
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71007</td>
                                        <td>missing filed 'transId'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71014</td>
                                        <td>invalid UserMember.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71017</td>
                                        <td>transId has already existed</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71025</td>
                                        <td>balance should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="46B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"addBalance"</span>: <span class="hljs-number">100,</span>
        <span class="hljs-attr">"afterAgentBalance"</span>:<span class="hljs-number">43813417.23,</span>
        <span class="hljs-attr">"afterMemberBalance"</span>:<span class="hljs-number">100,</span>
        <span class="hljs-attr">"beforeAgentBalance"</span>:<span class="hljs-number">43812886.55,</span>
        <span class="hljs-attr">"beforeMemberBalance"</span>:<span class="hljs-number">369,</span>
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"ff4003404239450abb86dd313cb138cabea9ded4f26993a72933d318b16e86",</span>
        <span class="hljs-attr">"playerApiUsername"</span>:<span class="hljs-string">"testuserapi001@agentapi",</span>
        <span class="hljs-attr">"playerUsername"</span>:<span class="hljs-string">"testuserapi001",</span>
        <span class="hljs-attr">"ref"</span>:<span class="hljs-string">"1e77a9cfc9a8b05e613cc0a4f87c2226575c5e77f095d3411b0094b0e730d4",</span>
    },
    <span class="hljs-attr">"msg"</span>:<span class="hljs-string">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_6B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab7">
                    <lable><b style="color: #19A17A  !important;">5.7 withdrawal</b></lable>
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
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/withdraw
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <!-- <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td> -->
                                        <td>System generate key ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td>Withdraw balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td>transId Unique from your system type Deposit / Withdrawal</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001",</span>
    <span class="hljs-attr">"balance"</span>: <span class="hljs-number">100,</span>
    <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"25f0c27dbea3f3261f2cd66126761251s2712676121657"</span>
}</code></pre>
                                    <script src="./API_files/ex4_7.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable47B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">addBalance</td>
                                        <td class="bRight">Number</td>

                                        <td>Withdraw balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterAgentBalance</td>
                                        <td class="bRight">Number</td>

                                        <td>Balance after Withdraw of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">afterMemberBalance</td>
                                        <td class="bRight">Number</td>

                                        <td>Balance after Withdraw of member.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">beforeAgentBalance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance before Withdraw of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">beforeMemberBalance</td>
                                        <td class="bRight">Number</td>
                                        <td>Balance before Withdraw of member.</td>
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
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>

                                        <td>Reference id Unique from AMB Lotto system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
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
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71007</td>
                                        <td>missing filed 'transId'.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71014</td>
                                        <td>invalid UserMember.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71017</td>
                                        <td>transId has already existed</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71025</td>
                                        <td>balance should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="47B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"addBalance"</span>: <span class="hljs-number">100,</span>
        <span class="hljs-attr">"afterAgentBalance"</span>: <span class="hljs-number">43813417.23,</span>
        <span class="hljs-attr">"afterMemberBalance"</span>: <span class="hljs-number">0,</span>
        <span class="hljs-attr">"beforeAgentBalance"</span>:<span class="hljs-number">43812886.55,</span>
        <span class="hljs-attr">"beforeMemberBalance"</span>:<span class="hljs-number">369,</span>
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"ff4003404239450abb86dd313cb138cabea9ded4f26993a72933d318b16e86",</span>
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testuserapi001@agentapi",</span>
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testuserapi001",</span>
        <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"1e77a9cfc9a8b05e613cc0a4f87c2226575c5e77f095d3411b0094b0e730d4",</span>
    },
    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_7B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab8">
                    <lable><b style="color: #19A17A  !important;">5.8 memberBetHistories</b></lable>
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
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/memberBetHistories
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <!-- <td>System generate <a href="https://service-api.prettygaming.asia/Page_API_Document/Seamless_API.aspx?Action=0" class="aLink">key</a> ID after crate Agent</td> -->
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
                                        <td>Currency thb, usd, cny, idr, vnd, lak, myr, mmk, khr, php, eur, twd, inr, gbp, krw..</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"company",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"e5ecb1f7d639dff2e3bcc05948726a8e7cafa0a75a07117b9562c4b7bc67c665a409cec17f9dfa02",</span>
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1",</span>
    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">91565</span>,
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2021-07-14 15:04:05",</span>
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2021-07-14 15:04:05",</span>
    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1,</span>,
    <span class="hljs-attr">"limit"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"currency"</span>: <span class="hljs-number">"thb"</span>
}</code></pre>
                                    <script src="./API_files/ex4_8.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable38B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
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
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>

                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">docs</td>
                                        <td class="bRight">arrayobject</td>

                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>

                                        <td>Player Id from partner system..</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from partner system.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">datetime</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>

                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>

                                        <td>Type of lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">round</td>
                                        <td class="bRight">Number</td>

                                        <td>Round of drawagent ex. yeekeelotto round 88 (default = 1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">goverment</td>
                                        <td class="bRight">Boolean</td>

                                        <td>If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>

                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">Number</td>

                                        <td>Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>

                                        <td>totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBalanceAmt</td>
                                        <td class="bRight">Number</td>

                                        <td>Net of bet ticket</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>

                                        <td>False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>

                                        <td>Bet detail max 200 number/tiket .
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>

                                        <td>Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>

                                        <td>User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>

                                        <td>Status of bet data(Pending).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">Number</td>

                                        <td>betKey = endcode64("ticketId" - "betId") </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>

                                        <td>Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>

                                        <td>User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>

                                        <td>Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>

                                        <td>User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>

                                        <td>Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td>If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betResultKey</td>
                                        <td class="bRight">String</td>
                                        <td>Bet result key lotto set.(top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td>Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td>Position tracking (%) of api(amblotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawResult</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone bet type(top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalDocs</td>
                                        <td class="bRight">Number</td>

                                        <td>Total number of documents in collection that match a query.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>

                                        <td>Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPages</td>
                                        <td class="bRight">Number</td>

                                        <td>Total number of pages.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>

                                        <td>Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasprevPage</td>
                                        <td class="bRight">Boolean</td>

                                        <td>Has previous page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasnextPage</td>
                                        <td class="bRight">Boolean</td>

                                        <td>Has next page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">prevPage</td>
                                        <td class="bRight">Number</td>

                                        <td>Previous page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">nextPage</td>
                                        <td class="bRight">Number</td>

                                        <td>Next page number</td>
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
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
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
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>Invalid agentUsername or apiKey.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">71010</td>
                                        <td>invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71014</td>
                                        <td>invalid UserMember.</td>
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
                                        <td class="bRight">71025</td>
                                        <td>balance should be greater than 0</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71026</td>
                                        <td>missing filed 'startDate'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71027</td>
                                        <td>missing filed 'endDate'.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"compseamless"</span>,
        <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2021-07-10 15:04:05"</span>,
        <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2021-07-20 15:04:05"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"docs"</span>: [
                {
                    <span class="hljs-attr">"no"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-number">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-number">"member1@compseamless"</span>,
                    <span class="hljs-attr">"datetime"</span>: <span class="hljs-number">"2021-07-14 14:31:30"</span>,
                    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-number">6546</span>,
                    <span class="hljs-attr">"type"</span>: <span class="hljs-number">"hanoylottospecial"</span>,
                    <span class="hljs-attr">"round"</span>: <span class="hljs-literal">1</span>,
                    <span class="hljs-attr">"goverment"</span>: <span class="hljs-literal">false</span>,
                    <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-literal">100</span>,
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"totalBalanceAmt"</span>: <span class="hljs-literal">-100</span>,
                    <span class="hljs-attr">"status"</span>: <span class="hljs-literal">"False"</span>,
                    <span class="hljs-attr">"txtList"</span>: [
                        {
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"NjU0Ni0x"</span>,
                            <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"1"</span>,
                            <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top3"</span>,
                            <span class="hljs-attr">"betNumber"</span>: <span class="hljs-literal">"123"</span>,
                            <span class="hljs-attr">"betStatus"</span>: <span class="hljs-literal">"False"</span>,
                            <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">100</span>,
                            <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">100</span>,
                            <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">900</span>,
                            <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">0</span>,
                            <span class="hljs-attr">"agentPt"</span>: <span class="hljs-literal">0</span>,
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">""</span>,
                        }
                    ],
                    <span class="hljs-attr">"drawResult"</span>: {
                        <span class="hljs-attr">"bottom1"</span>: [
                            <span class="hljs-literal">"5"</span>,
                            <span class="hljs-literal">"4"</span>
                        ],
                        <span class="hljs-attr">"bottom2"</span>: [
                            <span class="hljs-literal">"54"</span>
                        ],
                        <span class="hljs-attr">"row3"</span>: [
                            <span class="hljs-literal">"034"</span>,
                            <span class="hljs-literal">"043"</span>,
                            <span class="hljs-literal">"304"</span>,
                            <span class="hljs-literal">"340"</span>,
                            <span class="hljs-literal">"403"</span>,
                            <span class="hljs-literal">"430"</span>
                        ],
                        <span class="hljs-attr">"top1"</span>: [
                            <span class="hljs-literal">"0"</span>,
                            <span class="hljs-literal">"3"</span>,
                            <span class="hljs-literal">"4"</span>
                        ],
                        <span class="hljs-attr">"top2"</span>: [
                            <span class="hljs-literal">"34"</span>
                        ],
                        <span class="hljs-attr">"top3"</span>: [
                            <span class="hljs-literal">"034"</span>
                        ]
                    }
                }
            ],
            <span class="hljs-attr">"totalDocs"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"limit"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"totalPages"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"page"</span>: <span class="hljs-string">1</span>,
            <span class="hljs-attr">"hasprevPage"</span>: <span class="hljs-string">false</span>,
            <span class="hljs-attr">"hasnextPage"</span>: <span class="hljs-string">false</span>,
            <span class="hljs-attr">"prevPage"</span>: <span class="hljs-string">null</span>,
            <span class="hljs-attr">"nextPage"</span>: <span class="hljs-string">null</span>
        }
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"Success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_8B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab9">
                    <lable><b style="color: #19A17A  !important;">5.9 betHistories</b></lable>
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
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
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="49A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"company",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2021-07-14 15:04:05",</span>
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2021-07-14 15:04:05",</span>
    <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">91565</span>,
    <span class="hljs-attr">"page"</span>: <span class="hljs-number">1,</span>,
    <span class="hljs-attr">"limit"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"currency"</span>: <span class="hljs-number">"thb"</span>
}</code></pre>
                                    <script src="./API_files/ex4_9.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable49B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
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
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>

                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">docs</td>
                                        <td class="bRight">arrayobject</td>

                                        <td>Array of documents.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>

                                        <td>Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datetime</td>
                                        <td class="bRight">String</td>
                                        <td>The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>

                                        <td>User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>

                                        <td>Type of lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">round</td>
                                        <td class="bRight">Number</td>

                                        <td>Round of drawagent ex. yeekeelotto round 88</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">goverment</td>
                                        <td class="bRight">Boolean</td>

                                        <td>If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>

                                        <td>User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">Number</td>

                                        <td>Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>

                                        <td>totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBalanceAmt</td>
                                        <td class="bRight">Number</td>

                                        <td>Net of bet ticket</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>

                                        <td>False(ไม่ถูกรางวัล), True(ถูกรางวัล), Pending (รอผล), Cancel(ยกเลิก).
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>

                                        <td>Bet detail max 200 number/tiket .</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">String</td>

                                        <td>Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>

                                        <td>User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>

                                        <td>Status of bet data(Pending).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">Number</td>

                                        <td>betKey = endcode64("ticketId" - "betId") </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>

                                        <td>Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>

                                        <td>User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>

                                        <td>Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>

                                        <td>User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td>Rate payout when member win.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td>If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betResultKey</td>
                                        <td class="bRight">String</td>
                                        <td>Bet result key lotto set.(top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td>Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td>Position tracking (%) of api(amblotto).</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">drawResult</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone bet type(top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalDocs</td>
                                        <td class="bRight">Number</td>

                                        <td>Total number of documents in collection that match a query.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limit</td>
                                        <td class="bRight">Number</td>

                                        <td>Limit that was used.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPages</td>
                                        <td class="bRight">Number</td>

                                        <td>Total number of pages.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">page</td>
                                        <td class="bRight">Number</td>

                                        <td>Current page number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasprevPage</td>
                                        <td class="bRight">Boolean</td>

                                        <td>Has previous page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">hasnextPage</td>
                                        <td class="bRight">Boolean</td>

                                        <td>Has next page (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">prevPage</td>
                                        <td class="bRight">Number</td>

                                        <td>Previous page number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">nextPage</td>
                                        <td class="bRight">Number</td>

                                        <td>Next page number</td>
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
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
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
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
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
                                        <td class="bRight">71025</td>
                                        <td>balance should be greater than 0</td>
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
                                        <td>limit should be greater than 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="48B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"company"</span>,
        <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2022-06-08 15:04:05"</span>,
        <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2022-06-15 18:04:05"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"docs"</span>: [
                {
                    <span class="hljs-attr">"no"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-number">"b9c2d1d8461a195c716a83da08768a3e98a58f2f303156beb3b1b55afc22cd2acc"</span>,
                    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-number">"member1"</span>,
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
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"MzM1NDM1LTE"</span>,
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
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">""</span>
                        },
                        {
                            <span class="hljs-attr">"betKey"</span>: <span class="hljs-literal">"MzM1NDM1LTE"</span>,
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
                            <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-literal">""</span>
                        }
                    ],
                    <span class="hljs-attr">"drawResult"</span>: {
                        <span class="hljs-attr">"bottom1"</span>: 
                            <span class="hljs-literal">[],</span>
                        <span class="hljs-attr">"bottom2"</span>: 
                            <span class="hljs-literal">[],</span>
                        <span class="hljs-attr">"row3"</span>: [],
                        <span class="hljs-attr">"top1"</span>: [],
                        <span class="hljs-attr">"top2"</span>: [],
                        <span class="hljs-attr">"top3"</span>: []
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
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"Success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_8B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>




                <div class="col-12" id="tab10">
                    <lable><b style="color: #19A17A  !important;">5.10 depositWithdrawHistory</b></lable>
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
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/depositWithdrawHistory
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable411A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>
                                        <td>Deposit/Withdraw transaction reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="411A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"78ff3b4f248e58bfb5de6545b471684f27f5ce959565d2c78df44dc74abc"</span>
}</code></pre>
                                    <script src="./API_files/ex4_11A.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable411B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from AMBLotto system.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">ref</td>
                                        <td class="bRight">String</td>

                                        <td>Deposit/Withdraw transaction reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transferAmount</td>
                                        <td class="bRight">Number</td>

                                        <td>Transaction amount.</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">transferDate</td>
                                        <td class="bRight">Date</td>

                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>

                                        <td>Transaction type (DEPOSIT/WITHDRAW).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
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
                                        <td class="bRight">71020</td>
                                        <td>invalid referenceid</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71028</td>
                                        <td>missing filed 'ref'.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="411B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: 
    {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"ff4003404239450abb86dd313cb138cabea9ded4f26993a72933d318b16e86",</span>
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testuserapi001@agentapi",</span>
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"agentapi",</span>
        <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"ed7f691047408bf04b49e1479731a55e1e732ed9d1e8e17bda729f030d685b",</span>
        <span class="hljs-attr">"transferAmount"</span>: <span class="hljs-number">100,</span>
        <span class="hljs-attr">"transferDate"</span>: <span class="hljs-string">"2020-07-13 16:22:35",</span>
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"DEPOSIT",</span>
    },
    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"success",</span>
}</code></pre>
                                    <script src="./API_files/ex4_11B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab11">
                    <lable><b style="color: #19A17A  !important;">5.11 depositWithdrawHistoryByTransId</b></lable>
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
                            <label>
                                https://test-api.pirate168.com/apiRoute/api/depositWithdrawHistoryByTransId
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable412A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>
                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="412A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"transId"</span>: <span class="hljs-string">"15f0c27dbea3f3261f2cd6612676125127126761216541276512"</span>
}
</code></pre>
                                    <script src="./API_files/ex4_12A.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable412B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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

                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>

                                        <td>Player username from AMBLotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transId</td>
                                        <td class="bRight">String</td>

                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transferAmount</td>
                                        <td class="bRight">Number</td>

                                        <td>Transaction amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">transferDate</td>
                                        <td class="bRight">Date</td>

                                        <td>transId Unique from your system type Deposit / Withdrawal</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>

                                        <td>Transaction type (DEPOSIT/WITHDRAW).</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
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
                                        <td class="bRight">71020</td>
                                        <td>invalid referenceid</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71028</td>
                                        <td>missing filed 'ref'.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="412B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"ff4003404239450abb86dd313cb138cabea9ded4f26993a72933d318b16e86",</span>
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testuserapi001@agentapi",</span>
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"agentapi",</span>
        <span class="hljs-attr">"ref"</span>: <span class="hljs-string">"ed7f691047408bf04b49e1479731a55e1e732ed9d1e8e17bda729f030d685b",</span>
        <span class="hljs-attr">"transferAmount"</span>: <span class="hljs-number">100,</span>
        <span class="hljs-attr">"transferDate"</span>: <span class="hljs-string">"2021-07-15 15:05:08",</span>
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"DEPOSIT"</span>
        
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"success"</span>
}</code></pre>
                                    <script src="./API_files/ex4_12B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-5"></div>




                <div class="col-12" id="tab12">
                    <lable><b style="color: #19A17A  !important;">5.12 GetListBetResult</b></lable>
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
                        <lable><b style="color: #19A17A  !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable412A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>
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
                                    <lable class="Point"><b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="412A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"agentapi",</span>
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",</span>
    <span class="hljs-attr">"lottotype"</span>: <span class="hljs-string">"stockrussia",</span>
    <span class="hljs-attr">"startDate"</span>: <span class="hljs-string">"2021-07-20 15:04:05",</span>
    <span class="hljs-attr">"endDate"</span>: <span class="hljs-string">"2021-07-20 15:04:05"</span>
}
</code></pre>
                                    <script src="./API_files/ex4_12A.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A  !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable412B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type</th>

                                        <th set-lan="html:Description" class="txtCenter">Description</th>
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
                        <lable><b style="color: #19A17A  !important;">Service Response Code</b></lable>
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
                                    <lable class="Point"><b style="color: #19A17A  !important;">Example Service Respond
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="412B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0,</span>
    <span class="hljs-attr">"data"</span>: [
        {
            <span class="hljs-attr">"name_th"</span>: <span class="hljs-string">"หวยหุ้นรัสเซีย",</span>
            <span class="hljs-attr">"name_en"</span>: <span class="hljs-string">"Stock Russia",</span>
            <span class="hljs-attr">"date"</span>: <span class="hljs-string">"2021-07-20 00:00:00",</span>
            <span class="hljs-attr">"result"</span>: {
                <span class="hljs-attr">"top3"</span>: [
                    <span class="hljs-attr">"123"</span>
                ],
                <span class="hljs-attr">"row3"</span>: [
                    <span class="hljs-attr">"123",</span>
                    <span class="hljs-attr">"132",</span>
                    <span class="hljs-attr">"213",</span>
                    <span class="hljs-attr">"231",</span>
                    <span class="hljs-attr">"312",</span>
                    <span class="hljs-attr">"321"</span>
                ],
                <span class="hljs-attr">"top2"</span>: [
                    <span class="hljs-attr">"23"</span>
                ],
                <span class="hljs-attr">"bottom2"</span>: [
                    "22"
                ],
                <span class="hljs-attr">"top1"</span>: [
                    <span class="hljs-attr">"1",</span>
                    <span class="hljs-attr">"2",</span>
                    <span class="hljs-attr">"3"</span>
                ],
                <span class="hljs-attr">"bottom1"</span>: [
                    <span class="hljs-attr">"2"</span>
                ]
            }
        }
    ],
    <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"success"</span>
}</code></pre>

                                    <script src="./API_files/ex4_12B.js.download"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>
                <div class="col-12" id="tab13">
                    <lable><b style="color: #19A17A  !important;">5.13 Detail</b></lable>
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
    <span class="hljs-attr"><span class="hljs-attr">"agentUsername"</span></span>: <span class="hljs-string"><span class="hljs-string">"testcompany"</span></span>,
    <span class="hljs-attr"><span class="hljs-attr">"agentApiKey"</span></span>: <span class="hljs-string"><span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span></span>
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
    <span class="hljs-attr"><span class="hljs-attr">"code"</span></span>: <span class="hljs-number"><span class="hljs-string">"0"</span></span>,
    <span class="hljs-attr"><span class="hljs-attr">"data"</span></span>: {
        <span class="hljs-attr"><span class="hljs-attr">"rate"</span></span>: {
            <span class="hljs-attr"><span class="hljs-attr">"baaclotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"gsblotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"hanoylotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"hanoylotto_set"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"back2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"front2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">40</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">350</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"hanoylottospecial"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"hanoylottospecial_set"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"back2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"front2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">40</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">350</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"hanoylottovip"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"hanoylottovip_set"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"back2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"front2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">40</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">350</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"laoslotto_set"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"back2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"front2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">40</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">350</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"laoslotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">12</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">7000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">220</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4500</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"malaylotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"malaylotto_set"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"back2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"front2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">15</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">40</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">3000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">350</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">600</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"pingponglotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">12</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">7000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">225</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top5"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">2000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25000</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top6"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">50000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"stock"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"thailotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"bottom3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">225</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">12</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">7000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">225</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top4"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top5"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">2000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">25000</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top6"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">1000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">50000</span></span>
                }
            },
            <span class="hljs-attr"><span class="hljs-attr">"yeekeelotto"</span></span>: {
                <span class="hljs-attr"><span class="hljs-attr">"bottom1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">4.2</span></span>
                    },
                <span class="hljs-attr"><span class="hljs-attr">"bottom2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"row3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">150</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top1"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">200000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">3.2</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top2"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">20000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">90</span></span>
                },
                <span class="hljs-attr"><span class="hljs-attr">"top3"</span></span>: {
                    <span class="hljs-attr"><span class="hljs-attr">"discount"</span></span>: <span class="hljs-number"><span class="hljs-number">0</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"max"</span></span>: <span class="hljs-number"><span class="hljs-number">5000</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"min"</span></span>: <span class="hljs-number"><span class="hljs-number">1</span></span>,
                    <span class="hljs-attr"><span class="hljs-attr">"payout"</span></span>: <span class="hljs-number"><span class="hljs-number">900</span></span>
                }
            }
        }
    },
    <span class="hljs-attr"><span class="hljs-attr">"mgs"</span></span>: <span class="hljs-number"><span class="hljs-string">"success"</span></span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-toolbar mb-12">
                <div class="col-md-6">
                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='seamlessapi.php'">
                        <lan set-lan="html:Back">Back</lan>
                    </button>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='responsecode.php'">
                        <lan set-lan="html:Next">Next</lan>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#manu5 , #manu5 > a").addClass("active");
        $("#manu5 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function() {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 5;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>