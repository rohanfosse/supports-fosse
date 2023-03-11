<?php include "includes/header.html" ?>

<div class="w3-content">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <h1><b>Slides du cours</b></h1>
    </header>

    </div>
        <div id="adobe-dc-view"></div>

        <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>

        <script type="text/javascript">
            document.addEventListener("adobe_dc_view_sdk.ready", function()

                {

                    var adobeDCView = new AdobeDC.View({
                        clientId: "a6e8a6ba4fb948b7a756e6eb6090a1a8",
                        divId: "adobe-dc-view"
                    });

                    adobeDCView.previewFile(

                        {

                            content: {
                                location: {
                                    url: "http://rfosse.vvv.enseirb-matmeca.fr/IT103/IT103-Slides.pdf"
                                }
                            },

                            metaData: {
                                fileName: "IT103-Slides.pdf"
                            }

                        });

                });
        </script>


<?php include "includes/footer.html" ?>