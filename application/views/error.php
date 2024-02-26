<!DOCTYPE html>
<!-- saved from url=(0037)https://green-power-demo.netlify.app/ -->
<html
  class="wf-roboto-n1-active wf-roboto-n3-active wf-roboto-n5-active wf-roboto-n4-active wf-roboto-n7-active wf-active">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>充電樁充電測試管理系統</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/default.e7f0c458.css">
  <link rel="stylesheet"  href="<?php echo base_url(); ?>css/entry.42e4cc88.css">
  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</head>
<body>
<div id="__nuxt" data-v-app="">
    <div class="v-application v-theme--light v-layout v-layout--full-height v-locale--is-ltr default" style="z-index: 1000;">
        <div class="v-application__wrap"><img src="<?php echo base_url(); ?>images/bg_body.19e59cca.png" style="position: fixed; top: 0px; width: 100vw; height: 100%;">
            <div style="max-width: 1080px; margin: 0px auto;">
                <div data-v-5f0f3d89="" class="spinner disappear" style="display: flex;">
                    <div data-v-5f0f3d89="" class="lds-ellipsis">
                        <div data-v-5f0f3d89=""></div>
                        <div data-v-5f0f3d89=""></div>
                        <div data-v-5f0f3d89=""></div>
                        <div data-v-5f0f3d89=""></div>
                    </div>
                </div>
                
                    <div style="position: relative; display: flex; align-items: center; flex-direction: column;">
                        <div style="margin-top:30px;letter-spacing:5px;font-size:74px;line-height:74px;font-weight:400;color:#666666;">充電樁充電測試管理系統 </div>
                        <div style="margin-top:43px;width:75%;margin-bottom:18px;display:flex;justify-content:space-between;">
                            <div style="position:relative;left:0;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">首頁 </div>
                            <div style="position:relative;left:10px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">選擇充電樁 </div>
                            <div style="position:relative;left:6px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">確認充電模式 </div>
                            <div style="position:relative;left:6px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">充電中 </div>
                            <div style="position:relative;left:18px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">付款 </div>
                            <div style="position:relative;left:32px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">充電完成 </div>
                        </div>
                        
                            
                                <img src="<?php echo base_url(); ?>images/progress_charging.0513b11d.png" alt="progress_charging" style="margin-top: 0px; vertical-align: middle; object-fit: contain; width: 800px; height: auto; margin-left: auto; margin-right: auto;">
                                   
                                        
                    </div>
                    <div class="" style="margin-top: 54px; max-width: 1080px; margin-left: auto; margin-right: auto;">
                        <div class="v-row">
                            <div class="v-col v-col-8">
                                <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; z-index: 2; padding: 20px 40px 40px;">
                                    <div style="height: 514px; display: flex; align-items: center; justify-content: center;"><img src="<?php echo base_url(); ?>images/chart_error.99d0c6b1.png" style="aspect-ratio: 16 / 9; height: 400px; padding-left: 24px; padding-right: 24px;"></div><img src="<?php echo base_url(); ?>images/chart_error_car.9795e82e.png"
                                    style="width: 381px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><img src="data:image/png;base64,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"
                                    style="width: 126px; position: absolute; top: 56.5%; left: 43%; transform: translate(-50%, -50%);"></div>
                                <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 0px 0px 20px 20px; position: relative; top: -16px; padding: 56px 40px 40px;">
                                    <div style="width: 58%; opacity: 0.33;">
                                        <div style="width: 110%; display: flex; align-items: center; justify-content: space-between;">
                                            <div style="color: rgb(102, 102, 102); font-size: 24px;">0倍速</div>
                                            <div style="color: rgb(102, 102, 102); font-size: 24px;">10倍速</div>
                                            <div style="color: rgb(102, 102, 102); font-size: 24px;">50倍速</div>
                                            <div style="color: rgb(102, 102, 102); font-size: 24px;">100倍速</div>
                                        </div>
                                        <div style="position: relative; width: 100%; margin-top: 16px;">
                                            <div style="background-color: rgb(217, 217, 217); border-radius: 22px; height: 10px; width: 100%;"></div>
                                            <div style="position: absolute; top: 0px; left: 0px; background: linear-gradient(90deg, rgb(102, 69, 152) 0%, rgb(134, 179, 224) 103.89%); height: 10px; border-radius: 22px; width: 0%;"></div>
                                            <div style="position: absolute; box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 4px 0px; border-radius: 50%; width: 32px; height: 32px; top: -12px; background-color: rgb(255, 255, 255); left: -3%;"></div>
                                            <div style="position: absolute; top: -10px; left: 0px; width: 32px; height: 32px; background-color: transparent;"></div>
                                            <div style="position: absolute; top: -10px; left: 32px; width: 140px; height: 32px; background-color: transparent;"></div>
                                            <div style="position: absolute; top: -10px; left: 204px; width: 140px; height: 32px; background-color: transparent;"></div>
                                            <div style="position: absolute; top: -10px; left: 344px; width: 140px; height: 32px; background-color: transparent;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="v-col v-col-4">
                                <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; padding: 40px; height: 715px; display: flex; flex-direction: column;">
                                    <div>
                                        <div style="font-size: 32px; font-weight: 700; line-height: 48px; letter-spacing: 0em; text-align: left; color: rgb(255, 77, 79);">充電異常</div>
                                        <div style="margin-top: 36px;">
                                            <div style="color: rgb(93, 93, 93); font-size: 24px; font-weight: 700;">請重新選擇充電樁 </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: auto;"><img onclick="location.href = '<?php echo base_url(); ?>select';" src="<?php echo base_url(); ?>images/btn_back_list.efc140d4.png" style="cursor: pointer; vertical-align: middle; object-fit: contain; width: auto; max-width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="max-width: 1440px; position: relative; z-index: 2; margin-bottom: 54px;">
                        <div style="display: flex; align-items: center; gap: 50px;"><img src="<?php echo base_url(); ?>images/footer_cr.0bc75dc9.png" alt="footer_cr" style="margin-top: 48px; margin-left: auto; vertical-align: middle; object-fit: contain; width: 206px; height: 21px;"><img src="<?php echo base_url(); ?>images/footer_vr.55a1a8c4.png"
                            alt="footer_vr" style="margin-top: 48px; vertical-align: middle; object-fit: contain; width: 50px; height: auto;"><img src="<?php echo base_url(); ?>images/footer_company.fb793f59.png" alt="footer_company" style="margin-top: 48px; vertical-align: middle; object-fit: contain; width: 117px; height: auto;"></div>
                    </div>
            </div>
        </div>
    </div>
</div>
  <script src="<?php echo base_url(); ?>js/script.js"></script>
</body>

</html>