<?php include 'layouts/header.php';?>

    <div class="wrapper container">
        <?php include 'layouts/nav.php';?>
        <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">            
            <?php include 'layouts/lang.php';?>
            <div class="body-content">
                <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                    <h1><b style="color: #19A17A !important;" set-lan="text:2. Version">2. Version</b></h1>
                    <div class="pb-3"></div>
                    <div class="table-wrapper">
                        <table class="table table-borderless table-striped" id="DataTable">
                            <thead class="rgba-green-slight">
                                <tr>
                                    <th set-lan="text:Version" class="bRight txtCenter">Version</th>
                                    <th set-lan="text:Description" class="bRight txtCenter">Description</th>
                                    <th set-lan="text:Modify date" class="txtCenter">Modify date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bRight">1.0</td>
                                    <td class="bRight txtCenter"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="bRight">1.1</td>
                                    <td class="bRight txtCenter">Update PT Api and Agent</td>
                                    <td></td>
                                </tr>
                                <!-- <tr>
                                    <td class="bRight">3.0</td>
                                    <td class="bRight"></td>
                                    <td></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-toolbar mb-12" style="margin-top: 20px;">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='index.php'">
                                <lan set-lan="html:Back">Back</lan>
                            </button>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='lottotype.php'">
                                <lan set-lan="html:Next">Next</lan>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include 'layouts/footer.php';?>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#manu2 , #manu2 > a").addClass("active");
            $("#manu2 > div").css("display", "block");
        });
    </script>

</body>

</html>