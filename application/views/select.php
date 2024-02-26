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
        <div class="v-application v-theme--light v-layout v-layout--full-height v-locale--is-ltr default"
        style="z-index: 1000;">
        <div class="v-application__wrap"><img src="<?php echo base_url(); ?>images/bg_body.19e59cca.png"
            style="position: fixed; top: 0px; width: 100vw; height: 100%;">
            <div style="max-width: 1080px; margin: 0px auto;">
            <div data-v-5f0f3d89="" class="spinner" style="display: flex;">
                <div data-v-5f0f3d89="" class="lds-ellipsis">
                <div data-v-5f0f3d89=""></div>
                <div data-v-5f0f3d89=""></div>
                <div data-v-5f0f3d89=""></div>
                <div data-v-5f0f3d89=""></div>
                </div>
            </div><img src="<?php echo base_url(); ?>images/btn_back.1b886d51.png" alt="btn_back"
                style="vertical-align: middle; object-fit: contain; width: 120px; height: 53.98px; position: absolute; left: 75px; top: 36px; cursor: pointer;" onclick="location.href = '<?php echo base_url(); ?>';">
            <div style="position: relative; display: flex; align-items: center; flex-direction: column;">
                <div
                style="margin-top:30px;letter-spacing:5px;font-size:74px;line-height:74px;font-weight:400;color:#666666;">
                充電樁充電測試管理系統 </div>
                <div style="margin-top:43px;width:75%;margin-bottom:18px;display:flex;justify-content:space-between;">
                <div
                    style="position:relative;left:0;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">
                    首頁 </div>
                <div
                    style="position:relative;left:10px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">
                    選擇充電樁 </div>
                <div
                    style="position:relative;left:6px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">
                    確認充電模式 </div>
                <div
                    style="position:relative;left:6px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">
                    充電中 </div>
                <div
                    style="position:relative;left:18px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">
                    付款 </div>
                <div
                    style="position:relative;left:32px;color:#666666;line-height:24px;font-size:24px;font-weight:600;letter-spacing:3%;">
                    充電完成 </div>
                </div><!----><img src="<?php echo base_url(); ?>images/progress_select.a6131854.png" alt="progress_select"
                style="margin-top: 0px; vertical-align: middle; object-fit: contain; width: 800px; height: auto; margin-left: auto; margin-right: auto;"><!----><!----><!----><!---->
            </div>
            <div class=""
                style="position: relative; width: 1080px; margin-left: auto; margin-right: auto; margin-top: 54px; display: flex; align-items: center; justify-content: center; gap: 40px;">
                <form action="<?php echo base_url(); ?>start" method="POST" style="">
                    <input type="hidden" name="watts" value="200kw">
                    <button type="submit"><img src="<?php echo base_url(); ?>images/select_spot1.80cb8fc4.png" alt="select_spot1"
                style="vertical-align: middle; object-fit: contain; width: 345.59px; cursor: pointer; flex-grow: 1;"></button>
                </form>
                <form action="<?php echo base_url(); ?>start" method="POST" style="">
                    <input type="hidden" name="watts" value="300kw">
                    <button type="submit"><img src="<?php echo base_url(); ?>images/select_spot2.7b1fcc7f.png" alt="select_spot2"
                style="vertical-align: middle; object-fit: contain; width: 345.59px; cursor: pointer; flex-grow: 1;"></button>
                </form>
                <img src="<?php echo base_url(); ?>images/select_spot_grey.507501f7.png" alt="select_spot_grey"
                style="vertical-align: middle; object-fit: contain; width: 32%; cursor: pointer; flex-grow: 1;" onclick="location.href = '<?php echo base_url(); ?>error';"></div>
            <div style="max-width: 1440px; position: relative; z-index: 2; margin-bottom: 54px;">
                <div style="display: flex; align-items: center; gap: 50px;"><img
                    src="<?php echo base_url(); ?>images/footer_cr.0bc75dc9.png" alt="footer_cr"
                    style="margin-top: 48px; margin-left: auto; vertical-align: middle; object-fit: contain; width: 206px; height: 21px;"><img
                    src="<?php echo base_url(); ?>images/footer_vr.55a1a8c4.png" alt="footer_vr"
                    style="margin-top: 48px; vertical-align: middle; object-fit: contain; width: 50px; height: auto;"><img
                    src="<?php echo base_url(); ?>images/footer_company.fb793f59.png" alt="footer_company"
                    style="margin-top: 48px; vertical-align: middle; object-fit: contain; width: 117px; height: auto;">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>js/script.js"></script>
</body>

</html>