<header>
    <!-- Header navigation -->

    <nav class="navbar navbar-light p-0 fixed-top" style="box-shadow: none !important; width: 280px;">
        <a href="index.php" class="navbar-brand logo">
            <img src="./API_files/logo.png" alt="logo">
        </a>
        <div class="navbar-panel-box" style="display: none;">
            <div class="navbar-panel d-flex justify-content-between" style="background-color: #043E35;">
            </div>
            <div class="promo-panel d-flex justify-content-between yellow"
                style="background-color: #043E35 !important;"></div>
        </div>
    </nav>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav white fixed wide side-nav-light z-depth-0">
        <ul class="custom-scrollbar_">
            <!-- Side navigation links -->
            <li>
                <ul class="accordion collapsible collapsible-accordion">
                    <li id="manu1">
                        <a href="index.php" class="collapsible-header waves-effect">
                            <i class="sv-slim-icon far fa-report fa-angle-double-left"></i><span
                                set-lan="text:1. Introduction">1. Introduction</span></a>
                    </li>
                    <li id="manu2">
                        <a href="version.php" class="collapsible-header waves-effect">
                            <i class="sv-slim-icon far fa-report fa-angle-double-left"></i><span
                                set-lan="text:2. Version">2. Version</span></a>
                    </li>
                    <li id="manu3">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span
                                set-lan="text:3. Seamless API">3. Lotto Type</span><i
                                class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu31"><a class="waves-effect submenu" href="lottotype.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.1
                                        Key Type</span></a>
                                </li>
                                <li id="manu32"><a class="waves-effect submenu" href="lottotype.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">3.2
                                        Key Sub Type</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li id="manu3">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span
                                set-lan="text:3. Seamless API">3. Lotto Key</span><i
                                class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu31"><a class="waves-effect submenu" href="seamlessapi.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.1
                                            Introduction
                                            Seamless API</span></a>
                                </li>
                                <li id="manu32"><a class="waves-effect submenu" href="seamlessapi.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">3.2
                                            Workflow</span></a>
                                </li>
                                <li id="manu33"><a class="waves-effect submenu" href="seamlessapi.php#tabThree">
                                        <span class="sv-normal" set-lan="text:3.3 Setting">3.3
                                            Setting</span></a>
                                </li>
                                <li id="manu34"><a class="waves-effect submenu" href="seamlessapi.php#tabFour">
                                        <span class="sv-normal" set-lan="text:3.4 login request">3.4 login
                                            request</span></a>
                                </li>
                                <li id="manu35"><a class="waves-effect submenu" href="seamlessapi.php#tabFive">
                                        <span class="sv-normal" set-lan="text:3.5 Call Back Service">3.5
                                            Call Back Service</span></a>
                                </li>
                                <li id="manu351"><a class="waves-effect submenu" href="seamlessapi.php#tabSix">
                                        <span class="sv-normal" set-lan="text:3.5.1 GetUserBalance">3.5.1
                                            GetUserBalance</span></a>
                                </li>
                                <li id="manu352"><a class="waves-effect submenu" href="seamlessapi.php#tabSeven">
                                        <span class="sv-normal" set-lan="text:3.5.2 UserPlaceBet">3.5.2
                                            UserPlaceBet</span></a>
                                </li>
                                <li id="manu353"><a class="waves-effect submenu" href="seamlessapi.php#tabEight">
                                        <span class="sv-normal" set-lan="text:3.5.3">3.5.3
                                            UserPlaceBetCancel</span></a>
                                </li>
                                <li id="manu354"><a class="waves-effect submenu" href="seamlessapi.php#tabNine">
                                        <span class="sv-normal" set-lan="text:3.5.4">3.5.4
                                            UserPlacePayout</span></a>
                                </li>
                                <li id="manu356"><a class="waves-effect submenu" href="seamlessapi.php#tab15">
                                        <span class="sv-normal">3.5.5 UserPayTips</span></a>
                                </li>
                                <li id="manu357"><a class="waves-effect submenu" href="seamlessapi.php#tab16">
                                        <span class="sv-normal">3.5.6 UserPayTipsCancel</span></a>
                                </li>
                                <li id="manu355"><a class="waves-effect submenu" href="seamlessapi.php#tabTen">
                                        <span class="sv-normal">3.5.7 Response Code</span></a>
                                </li>
                                <li id="manu36"><a class="waves-effect submenu" href="seamlessapi.php#tabEleven">
                                        <span class="sv-normal" set-lan="text:3.6">3.6 Optional
                                            API</span></a>
                                </li>
                                <li id="manu361"><a class="waves-effect submenu" href="seamlessapi.php#tabFourteen">
                                        <span class="sv-normal" set-lan="text:3.6.1">3.6.1
                                            memberBetHistories</span></a>
                                </li>
                                <li id="manu362"><a class="waves-effect submenu" href="seamlessapi.php#tabTwelve">
                                        <span class="sv-normal" set-lan="text:3.6.2">3.6.2
                                            betHistories</span></a>
                                </li>
                                <li id="manu363"><a class="waves-effect submenu" href="seamlessapi.php#tabThirteen">
                                        <span class="sv-normal" set-lan="text:3.6.3">3.6.3
                                            getMemberWinLoseTurnOver</span></a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <style>
                            #change-scoll::-webkit-scrollbar {
                                width: 0.25rem;
                                height: 0.25rem;
                            }
                            #change-scoll::-webkit-scrollbar-thumb {
                                background: #043E35;
                            }
                    </style>
                    <li id="manu4">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span
                                set-lan="text:4. Transferwallet Api">4. Seamless API</span><i
                                class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul id="change-scoll" style="height: 600px;overflow-y:auto;">
                                <li id="manu41"><a class="waves-effect submenu" href="seamlessapi.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">4.1
                                            Introduction
                                            Seamless API</span></a>
                                </li>
                                <li id="manu42"><a class="waves-effect submenu" href="seamlessapi.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">4.2
                                            Workflow</span></a>
                                </li>
                                <li id="manu43"><a class="waves-effect submenu" href="seamlessapi.php#tabThree">
                                        <span class="sv-normal" set-lan="text:3.3 Setting">4.3
                                            Setting</span></a>
                                </li>
                                <li id="manu44"><a class="waves-effect submenu" href="seamlessapi.php#tabFour">
                                        <span class="sv-normal" set-lan="text:3.4 login request">4.4 login
                                            request</span></a>
                                </li>
                                <li id="manu45"><a class="waves-effect submenu" href="seamlessapi.php#tabFive">
                                        <span class="sv-normal" set-lan="text:3.5 Call Back Service">4.5
                                            Call Back Service</span></a>
                                </li>
                                <li id="manu451"><a class="waves-effect submenu" href="seamlessapi.php#tabSix">
                                        <span class="sv-normal" set-lan="text:3.5.1 GetUserBalance">4.5.1
                                            GetUserDetail</span></a>
                                </li>
                                <li id="manu452"><a class="waves-effect submenu" href="seamlessapi.php#tabSixs">
                                        <span class="sv-normal" set-lan="text:3.5.1 GetUserBalance">4.5.2
                                            GetUserBalance</span></a>
                                </li>
                                <li id="manu453"><a class="waves-effect submenu" href="seamlessapi.php#tabSeven">
                                        <span class="sv-normal" set-lan="text:3.5.2 UserPlaceBet">4.5.3
                                            UserPlaceBet</span></a>
                                </li>
                                <li id="manu454"><a class="waves-effect submenu" href="seamlessapi.php#tabEight">
                                        <span class="sv-normal" set-lan="text:3.5.3">4.5.4
                                            UserPlaceBetCancel</span></a>
                                </li>
                                <li id="manu455"><a class="waves-effect submenu" href="seamlessapi.php#tabNine">
                                        <span class="sv-normal" set-lan="text:3.5.4">4.5.5
                                            UserPlacePayout</span></a>
                                </li>
                                <li id="manu456"><a class="waves-effect submenu" href="seamlessapi.php#tab15">
                                        <span class="sv-normal">4.5.6 UserPlaceReToRunning</span></a>
                                </li>
                                <li id="manu457"><a class="waves-effect submenu" href="seamlessapi.php#tab16">
                                        <span class="sv-normal">4.5.7 UserPayReward</span></a>
                                </li>
                                <li id="manu458"><a class="waves-effect submenu" href="seamlessapi.php#tabTen">
                                        <span class="sv-normal">4.5.8 UserPayRewardCancel</span></a>
                                </li>
                                <li id="manu46"><a class="waves-effect submenu" href="seamlessapi.php#tabEleven">
                                        <span class="sv-normal" set-lan="text:3.6">4.6 Optional
                                            API</span></a>
                                </li>
                                <li id="manu461"><a class="waves-effect submenu" href="seamlessapi.php#tabFourteen">
                                        <span class="sv-normal" set-lan="text:3.6.1">4.6.1
                                            memberBetHistories</span></a>
                                </li>
                                <li id="manu462"><a class="waves-effect submenu" href="seamlessapi.php#tabTwelve">
                                        <span class="sv-normal" set-lan="text:3.6.2">4.6.2
                                            betHistories</span></a>
                                </li>
                                <li id="manu463"><a class="waves-effect submenu" href="seamlessapi.php#tabThirteen">
                                        <span class="sv-normal" set-lan="text:3.6.3">4.6.3
                                        GetListBetResult</span></a>
                                </li>
                                <li id="manu464"><a class="waves-effect submenu" href="seamlessapi.php#tab464">
                                        <span class="sv-normal" set-lan="text:3.6">4.6.4 Setting Back-Office
                                        </span></a>
                                </li>
                                <li id="manu4641"><a class="waves-effect submenu" href="seamlessapi.php#tab4641">
                                        <span class="sv-normal" set-lan="text:3.6.1">&nbsp;&nbsp;4.6.4.1
                                        AddHotnumber</span></a>
                                </li>
                                <li id="manu4642"><a class="waves-effect submenu" href="seamlessapi.php#tab4642">
                                        <span class="sv-normal" set-lan="text:3.6.1">&nbsp;&nbsp;4.6.4.2
                                        EditHotnumber</span></a>
                                </li>
                                <li id="manu4643"><a class="waves-effect submenu" href="seamlessapi.php#tab4643">
                                        <span class="sv-normal" set-lan="text:3.6.1">&nbsp;&nbsp;4.6.4.3
                                        DeleteHotnumber</span></a>
                                </li>
                                <li id="manu4644"><a class="waves-effect submenu" href="seamlessapi.php#tab4644">
                                        <span class="sv-normal" set-lan="text:3.6.1">&nbsp;&nbsp;4.6.4.4
                                        AddLimitnumber</span></a>
                                </li>
                                <li id="manu4645"><a class="waves-effect submenu" href="seamlessapi.php#tab4645">
                                        <span class="sv-normal" set-lan="text:3.6.1">&nbsp;&nbsp;4.6.4.5
                                        DeleteLimitnumber</span></a>
                                </li>
                                <li id="manu4646"><a class="waves-effect submenu" href="seamlessapi.php#tab4646">
                                        <span class="sv-normal" set-lan="text:3.6.1">&nbsp;&nbsp;4.6.4.6
                                        SetPlaceout</span></a>
                                </li>
                                <li id="manu47"><a class="waves-effect submenu" href="seamlessapi.php#tab47">
                                        <span class="sv-normal" set-lan="text:3.6.1">4.7
                                        ListPlaceout</span></a>
                                </li>
                                <li id="manu48"><a class="waves-effect submenu" href="seamlessapi.php#tab48">
                                        <span class="sv-normal" set-lan="text:3.6.1">4.8
                                        ListHotnumber and Limitnumber</span></a>
                                </li>
                                <li id="manu49"><a class="waves-effect submenu" href="seamlessapi.php#tab49">
                                        <span class="sv-normal" set-lan="text:3.6.1">4.9
                                        Detail</span></a>
                                </li>
                                <li id="manu491"><a class="waves-effect submenu" href="seamlessapi.php#tab491">
                                        <span class="sv-normal" set-lan="text:3.6.1">4.9.1
                                        Rejectbet</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="manu5">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span>5. Transferwallet API</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body"> 
                        <ul>
                                <li id="manu51"><a class="waves-effect submenu" href="transferwallet.php#tab1">
                                        <span class="sv-normal" set-lan="text:4.1 Introduction Transferwallet API">5.1
                                            Introduction Transferwallet API</span></a>
                                </li>
                                <li id="manu52"><a class="waves-effect submenu" href="transferwallet.php#tab2">
                                        <span class="sv-normal" set-lan="text:4.2 Workflow">5.2
                                            Workflow</span></a>
                                </li>
                                <li id="manu53"><a class="waves-effect submenu" href="transferwallet.php#tab3">
                                        <span class="sv-normal" set-lan="text:4.3 Setting">5.3
                                            Setting</span></a>
                                </li>
                                <li id="manu54"><a class="waves-effect submenu" href="transferwallet.php#tab4">
                                        <span class="sv-normal" set-lan="text:4.4 login request">5.4 login
                                            request</span></a>
                                </li>
                                <li id="manu55"><a class="waves-effect submenu" href="transferwallet.php#tab5">
                                        <span class="sv-normal" set-lan="text:4.5 getUserBalance">5.5
                                            getUserBalance</span></a>
                                </li>
                                <li id="manu56"><a class="waves-effect submenu" href="transferwallet.php#tab6">
                                        <span class="sv-normal" set-lan="html:4.6">5.6 deposit</span></a>
                                </li>
                                <li id="manu57"><a class="waves-effect submenu" href="transferwallet.php#tab7">
                                        <span class="sv-normal" set-lan="html:4.7">5.7 withdrawal</span></a>
                                </li>
                                <li id="manu58"><a class="waves-effect submenu" href="transferwallet.php#tab8">
                                        <span class="sv-normal" set-lan="html:4.8">5.8
                                            memberBetHistories</span></a>
                                </li>
                                <li id="manu59"><a class="waves-effect submenu" href="transferwallet.php#tab9">
                                        <span class="sv-normal" set-lan="html:4.9">5.9
                                            betHistories</span></a>
                                </li>
                         
                                <li id="manu510"><a class="waves-effect submenu" href="transferwallet.php#tab10">
                                        <span class="sv-normal" set-lan="html:4.10">5.10
                                            depositWithdrawHistory</span></a>
                                </li>
                                <li id="manu511"><a class="waves-effect submenu" href="transferwallet.php#tab11">
                                        <span class="sv-normal" set-lan="html:4.11">5.11
                                            depositWithdrawHistoryByTransId</span></a>
                                </li>
                                <li id="manu512"><a class="waves-effect submenu" href="transferwallet.php#tab12">
                                        <span class="sv-normal" set-lan="html:4.12">5.12
                                            GetListBetResult</span></a>
                                </li>
                            </ul>

                            <!-- <ul>
                                <li id="manu81"><a class="waves-effect submenu" href="responsecode.php#tabOne">
                                        <span class="sv-normal">5.1 Member Authen</span></a>
                                </li>
                                <li id="manu82"><a class="waves-effect submenu" href="responsecode.php#tabTwo">
                                        <span class="sv-normal">5.2 Token</span></a>
                                </li>
                                <li id="manu83"><a class="waves-effect submenu" href="responsecode.php#tabThree">
                                        <span class="sv-normal">5.3 System</span></a>
                                </li>
                                <li id="manu84"><a class="waves-effect submenu" href="responsecode.php#tabFour">
                                        <span class="sv-normal">5.4 Validator</span></a>
                                </li>
                                <li id="manu85"><a class="waves-effect submenu" href="responsecode.php#tabFive">
                                        <span class="sv-normal">5.5 Caculator</span></a>
                                </li>
                                <li id="manu86"><a class="waves-effect submenu" href="responsecode.php#tabSix">
                                        <span class="sv-normal">5.6 Seamless API</span></a>
                                </li>
                                <li id="manu87"><a class="waves-effect submenu" href="responsecode.php#tabSeven">
                                        <span class="sv-normal">5.7 Service Respone</span></a>
                                </li>
                            </ul> -->
                        </div>
                    </li>

                    <li id="manu6">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report"></i><span set-lan="html:5">6. Service Respond Code</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu61"><a class="waves-effect submenu" href="responsecode.php#tabOne">
                                        <span class="sv-normal">6.1 Member Authen</span></a>
                                </li>
                                <!-- <li id="manu62"><a class="waves-effect submenu" href="responsecode.php#tabTwo">
                                        <span class="sv-normal">6.2 Token</span></a>
                                </li>
                                <li id="manu63"><a class="waves-effect submenu" href="responsecode.php#tabThree">
                                        <span class="sv-normal">6.3 System</span></a>
                                </li>
                                <li id="manu64"><a class="waves-effect submenu" href="responsecode.php#tabFour">
                                        <span class="sv-normal">6.4 Validator</span></a>
                                </li>
                                <li id="manu65"><a class="waves-effect submenu" href="responsecode.php#tabFive">
                                        <span class="sv-normal">6.5 Caculator</span></a>
                                </li>
                                <li id="manu66"><a class="waves-effect submenu" href="responsecode.php#tabSix">
                                        <span class="sv-normal">6.6 Seamless API</span></a>
                                </li> -->
                                <li id="manu62"><a class="waves-effect submenu" href="responsecode.php#tabTwo">
                                        <span class="sv-normal">6.2 Service Respone</span></a>
                                </li>
                            </ul>
                            <!-- <ul id="sub_currency">
                                <li id="manu51"><a class="waves-effect submenu"
                                        href="currency.php#tab1"><span
                                            class="sv-normal" set-lan="html:6.1">6.1 Currency</span></a></li>
                                <li id="manu52"><a class="waves-effect submenu"
                                        href="currency.php#tab2"><span
                                            class="sv-normal" set-lan="html:6.2">6.2 BND - Brunei Dollar</span></a></li>
                                <li id="manu53"><a class="waves-effect submenu"
                                        href="currency.php#tab3"><span
                                            class="sv-normal" set-lan="html:6.3">6.3 KHR - Cambodian Riel</span></a>
                                </li>
                                <li id="manu54"><a class="waves-effect submenu"
                                        href="currency.php#tab4"><span
                                            class="sv-normal" set-lan="html:6.4">6.4 IDR - Indonesian Rupiah</span></a>
                                </li>
                                <li id="manu55"><a class="waves-effect submenu"
                                        href="currency.php#tab5"><span
                                            class="sv-normal" set-lan="html:6.5">6.5 LAK - Lao Kip</span></a></li>
                                <li id="manu56"><a class="waves-effect submenu"
                                        href="currency.php#tab6"><span
                                            class="sv-normal" set-lan="html:6.6">6.6 MYR - Malaysian Ringgit</span></a>
                                </li>
                                <li id="manu57"><a class="waves-effect submenu"
                                        href="currency.php#tab7"><span
                                            class="sv-normal" set-lan="html:6.7">6.7 MMK - Myanmar Kyat</span></a></li>
                                <li id="manu58"><a class="waves-effect submenu"
                                        href="currency.php#tab8"><span
                                            class="sv-normal" set-lan="html:6.8">6.8 PHP - Philippine Peso</span></a>
                                </li>
                                <li id="manu59"><a class="waves-effect submenu"
                                        href="currency.php#tab9"><span
                                            class="sv-normal" set-lan="html:6.9">6.9 SGD - Singapore Dollar</span></a>
                                </li>
                                <li id="manu510"><a class="waves-effect submenu"
                                        href="currency.php#tab10"><span
                                            class="sv-normal" set-lan="html:6.10">6.10 THB - Thai Baht</span></a></li>
                                <li id="manu511"><a class="waves-effect submenu"
                                        href="currency.php#tab11"><span
                                            class="sv-normal" set-lan="html:6.11">6.11 CNY - Chinese Yuan</span></a>
                                </li>
                                <li id="manu512"><a class="waves-effect submenu"
                                        href="currency.php#tab12"><span
                                            class="sv-normal" set-lan="html:6.12">6.12 USD - United States
                                            Dollar</span></a></li>
                                <li id="manu513"><a class="waves-effect submenu"
                                        href="currency.php#tab13"><span
                                            class="sv-normal" set-lan="html:6.13">6.13 JPY - Japanese Yen</span></a>
                                </li>
                                <li id="manu514"><a class="waves-effect submenu"
                                        href="currency.php#tab14"><span
                                            class="sv-normal" set-lan="html:6.14">6.14 HKD - Hong Kong Dollar</span></a>
                                </li>
                                <li id="manu515"><a class="waves-effect submenu"
                                        href="currency.php#tab15"><span
                                            class="sv-normal" set-lan="html:6.15">6.15 VND - Vietnamese Dong</span></a>
                                </li>
                                <li id="manu516"><a class="waves-effect submenu"
                                        href="currency.php#tab16"><span
                                            class="sv-normal" set-lan="html:6.16">6.16 EUR - Euro (European Monetary
                                            Unit)</span></a></li>
                                <li id="manu517"><a class="waves-effect submenu"
                                        href="currency.php#tab17"><span
                                            class="sv-normal" set-lan="html:6.17">6.17 INR - Indian</span></a></li>
                                <li id="manu518"><a class="waves-effect submenu"
                                        href="currency.php#tab18"><span
                                            class="sv-normal" set-lan="html:6.18">6.18 KRW - South Korean won</span></a>
                                </li>
                            </ul> -->
                        </div>
                    </li>
                    <!-- <li id="manu6">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report"></i><span set-lan="html:6">7. Game Detail</span><i
                                class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu61"><a class="waves-effect submenu"
                                        href="detail.php#tabOne">
                                        <span class="sv-normal" set-lan="html:6.1">7.1 Card Detail of
                                            Baccarat</span></a>
                                </li>
                                <li id="manu62"><a class="waves-effect submenu"
                                        href="detail.php#tabTwo">
                                        <span class="sv-normal" set-lan="html:6.2">7.2 Game Type</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="manu7">
                        <a href="material.php"
                            class="collapsible-header waves-effect">
                            <i class="sv-slim-icon far fa-report"></i><span>8. Material</span></a>
                    </li> -->
                    <li><a id="toggle" class="waves-effect"><i class="sv-slim-icon fas fa-angle-double-left"></i></a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg rgba-white-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
</header>