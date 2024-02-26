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
          </div><!---->
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
            </div><!----><!----><!----><!----><!----><img src="<?php echo base_url(); ?>images/progress_done.1074dfa4.png"
              alt="progress_done"
              style="margin-top: 0px; vertical-align: middle; object-fit: contain; width: 800px; height: auto; margin-left: auto; margin-right: auto;">
          </div>
          <div data-v-78f38e9b="" class=""
            style="margin-top: 54px; max-width: 1080px; margin-left: auto; margin-right: auto;">
            <div data-v-78f38e9b="" class="v-row" style="width: 1080px;">
              <div data-v-78f38e9b="" class="v-col v-col-12" style="padding: 0px;">
                <div data-v-78f38e9b=""
                  style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; padding: 40px; position: relative; z-index: 2;">
                  <div data-v-78f38e9b="" style="display: flex;">
                    <div data-v-78f38e9b=""
                      style="font-size: 32px; font-weight: 700; line-height: 32px; letter-spacing: 0em; text-align: left; color: rgb(102, 69, 152); width: 240px;">
                      付款完成</div>
                    <div data-v-78f38e9b="" style="width: 900px; margin-left: 20px; margin-top: 0px;">
                      <div data-v-78f38e9b="">
                        <div data-v-78f38e9b="" style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                          交易明細 </div>
                        <div data-v-78f38e9b=""
                          style="margin-top: 16px; height: 1px; width: 100%; background: linear-gradient(90deg, rgb(102, 69, 152) 0%, rgb(134, 179, 224) 103.89%);">
                        </div>
                        <table data-v-78f38e9b="" style="width: 100%; margin-top: 8px;">
                          <thead data-v-78f38e9b="">
                            <tr data-v-78f38e9b="">
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="text-align: center; font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                                  品項 </div>
                              </td>
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="text-align: center; font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                                  數量 </div>
                              </td>
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="text-align: center; font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                                  單價 </div>
                              </td>
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="text-align: center; font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                                  金額 </div>
                              </td>
                            </tr>
                            <tr data-v-78f38e9b="">
                              <td data-v-78f38e9b="" colspan="4">
                                <div data-v-78f38e9b=""
                                  style="margin-top: 8px; margin-bottom: 8px; height: 1px; width: 100%; background: linear-gradient(90deg, rgb(102, 69, 152) 0%, rgb(134, 179, 224) 103.89%);">
                                </div>
                              </td>
                            </tr>
                          </thead>
                          <tbody data-v-78f38e9b="">
                            <tr data-v-78f38e9b="">
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102); text-align: center;">
                                  充電費 </div>
                              </td>
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102); text-align: center;">
                                  1 </div>
                              </td>
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102); text-align: center;">
                                  $<?php echo $inputTotalPrice; ?></div>
                              </td>
                              <td data-v-78f38e9b="">
                                <div data-v-78f38e9b=""
                                  style="font-size: 24px; line-height: 24px; font-weight: 400; color: rgb(102, 102, 102); text-align: center;">
                                  $<?php echo $inputTotalPrice; ?>&nbsp;NT </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div data-v-78f38e9b=""
                        style="margin-top: 32px; display: flex; justify-content: space-between; width: 300px;">
                        <div data-v-78f38e9b="" style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                          用電總量 </div>
                        <div data-v-78f38e9b="" style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                        <?php echo $inputTotalConsumption; ?>度 </div>
                      </div>
                      <div data-v-78f38e9b=""
                        style="margin-top: 8px; display: flex; justify-content: space-between; width: 300px;">
                        <div data-v-78f38e9b="" style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                          平均充電費率 </div>
                        <div data-v-78f38e9b="" style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                        <?php echo $electricity_price; ?>元 </div>
                      </div>
                      <div data-v-78f38e9b=""
                        style="margin-top: 16px; height: 1px; width: 100%; background: linear-gradient(90deg, rgb(102, 69, 152) 0%, rgb(134, 179, 224) 103.89%);">
                      </div>
                      <div data-v-78f38e9b="" style="margin-top: 62px; display: flex; justify-content: flex-end;">
                        <div data-v-78f38e9b="" style="display: flex; flex-direction: column;">
                          <div data-v-78f38e9b=""
                            style="margin-top: 8px; display: flex; gap: 48px; justify-content: space-between;">
                            <div data-v-78f38e9b=""
                              style="font-size: 24px; font-weight: 800; color: rgb(102, 102, 102);"> 付款時間 </div>
                            <div data-v-78f38e9b=""
                              style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);">
                              <?php echo $pay_date;   ?>                             
                            </div>
                          </div>
                          <div data-v-78f38e9b="" style="margin-top: 4px; text-align: right;">
                            <div data-v-78f38e9b=""
                              style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);"><?php echo $pay_time;?></div>
                          </div>
                          <div data-v-78f38e9b=""
                            style="margin-top: 32px; display: flex; gap: 48px; justify-content: space-between;">
                            <div data-v-78f38e9b=""
                              style="font-size: 24px; font-weight: 800; color: rgb(102, 102, 102);"> 付款金額 </div>
                            <div data-v-78f38e9b=""
                              style="font-size: 24px; font-weight: 800; color: rgb(102, 102, 102);"><?php echo $inputTotalPrice; ?>元 </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-v-78f38e9b=""
                  style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 0px 0px 20px 20px; position: relative; top: -16px; padding: 56px 40px 40px;">
                  <div data-v-78f38e9b="" style="display: flex;"><img data-v-78f38e9b=""
                      src="<?php echo base_url(); ?>images/btn_back_home.255fb8a0.png"
                      style="cursor: pointer; vertical-align: middle; object-fit: contain; width: auto; max-width: 280px; margin-left: auto;" onclick="location.href = '<?php echo base_url(); ?>';">
                  </div>
                </div>
              </div>
            </div>
          </div>
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