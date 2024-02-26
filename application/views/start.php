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
  <script src="<?php echo base_url(); ?>js/chart.js"></script>
</head>
<body>
    <div id="__nuxt" data-v-app="">
        <div class="v-application v-theme--light v-layout v-layout--full-height v-locale--is-ltr default"
        style="z-index: 1000;">        
        <div class="v-application__wrap"><img src="<?php echo base_url(); ?>images/bg_body.19e59cca.png"
            style="position: fixed; top: 0px; width: 100vw; height: 100%;">
            <form action="<?php echo base_url(); ?>charging" method="POST" style="">
                <div style="max-width: 1080px; margin: 0px auto;">
                    <div data-v-5f0f3d89="" class="spinner" style="display: flex;">
                        <div data-v-5f0f3d89="" class="lds-ellipsis">
                        <div data-v-5f0f3d89=""></div>
                        <div data-v-5f0f3d89=""></div>
                        <div data-v-5f0f3d89=""></div>
                        <div data-v-5f0f3d89=""></div>
                        </div>
                    </div><img src="<?php echo base_url(); ?>images/btn_back.1b886d51.png" alt="btn_back"
                        style="vertical-align: middle; object-fit: contain; width: 120px; height: 53.98px; position: absolute; left: 75px; top: 36px; cursor: pointer;" onclick="location.href = '<?php echo base_url(); ?>select';">
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
                        </div><!----><!----><img src="<?php echo base_url(); ?>images/progress_confirm.a5a2286d.png" alt="progress_confirm"
                        style="margin-top: 0px; vertical-align: middle; object-fit: contain; width: 800px; height: auto; margin-left: auto; margin-right: auto;"><!----><!----><!---->
                    </div>
                    <div data-v-2ab68ba4="" class="" style="max-width: 1080px; margin: 0px auto;">
                        <div data-v-2ab68ba4=""><img data-v-2ab68ba4=""
                            src="data:image/png;base64,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"
                            alt="charging_title_payment"
                            style="vertical-align: middle; object-fit: contain; width: auto; height: auto; cursor: pointer; margin-top: 100px; margin-bottom: 40px; position: relative; z-index: 2;">
                        </div>
                        <div data-v-2ab68ba4="" >
                        <div data-v-2ab68ba4=""
                            style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; padding: 20px 40px 40px;">
                            <label data-v-2ab68ba4="" for="manual_select_time"
                            style="display:none; position: absolute; top: -90px; left: 180px; z-index: 3; border: 1px solid rgb(102, 102, 102); border-radius: 4px; padding: 8px 12px;">
                            <div data-v-2ab68ba4="" style="font-size: 16px; ">手動選擇時間:</div><select data-v-2ab68ba4=""
                                id="manual_select_time" style="font-size: 20px; text-align: center; color: rgb(102, 102, 102);">
                                <option value="0" data-v-2ab68ba4="">當前時間</option>
                                <option value="1" data-v-2ab68ba4="">夏月周末</option>
                                <option value="2" data-v-2ab68ba4="">非夏月周末</option>
                                <option value="3" data-v-2ab68ba4="">夏月巔峰</option>
                                <option value="4" data-v-2ab68ba4="">夏月非巔峰</option>
                                <option value="5" data-v-2ab68ba4="">非夏月巔峰</option>
                                <option value="6" data-v-2ab68ba4="">非夏月非巔峰</option>
                            </select>
                            </label>
                            <div data-v-2ab68ba4=""
                            style="position: absolute; right: 24px; top: 42px; font-size: 20px; font-weight: 700; color: rgb(102, 69, 152); width: 235px;">
                            即時電價 : <?php echo $electricity_price;  ?> 元 / 度</div>
                            <div data-v-2ab68ba4=""
                            style="position: absolute; right: 24px; top: 16px; font-size: 20px; font-weight: 700; color: rgb(102, 69, 152); width: 235px;" id="currentTime">
                            現在時間 : <span></span></div>
                            <div data-v-2ab68ba4="" style="margin-top: 20px; position: relative; height: auto; width: 900px;">
                            <div data-v-2ab68ba4=""
                                style="position: absolute; top: -20px; left: 12px; color: rgb(102, 102, 102); font-size: 16px;"> 電價
                            </div>
                            <div data-v-2ab68ba4=""
                                style="position: absolute; right: -48px; bottom: 4px; color: rgb(102, 102, 102); font-size: 16px;">
                                時間 </div><canvas data-v-2ab68ba4="" role="img" width="900" height="450"
                                style="display: block; box-sizing: border-box; height: 450px; width: 900px;" id="myChart">
                                <p></p>
                            </canvas>
                            </div>
                        </div>
                        </div>
                        <div data-v-2ab68ba4=""><img data-v-2ab68ba4=""
                            src="<?php echo base_url(); ?>images/charging_title_select_car.f9394ca5.png" alt="charging_title_select_car"
                            style="vertical-align: middle; object-fit: contain; width: auto; height: auto; cursor: pointer; margin-top: 100px; margin-bottom: 40px; position: relative; z-index: 2;">
                        <div id="all-car-type" data-v-2ab68ba4=""
                            style="max-width: 100%; display: grid; grid-template-columns: 1fr 1fr 1fr; align-items: center; flex-wrap: wrap; gap: 30px;">
                            <div id="car01" class="car-type" data-table="hyundai_ioniq_5" data-v-2ab68ba4=""
                            style="position: relative; width: 100%; height: 250px; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; padding: 40px 20px;">
                            <img data-v-2ab68ba4=""
                                src="data:image/png;base64,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"
                                alt=""
                                style="position: absolute; left: 36px; top: 20px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                                <img class="car-dot" 
                                data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                                alt=""
                                style="position: absolute; left: 44px; top: 29px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                            <div data-v-2ab68ba4=""
                                style="padding-left: 84px; color: rgb(93, 93, 93); font-size: 24px; line-height: 24px; position: relative; bottom: 18px; font-weight: 400;">
                                款式一：Hyundai Ioniq 5_CCS1</div><img data-v-2ab68ba4=""
                                src="<?php echo base_url(); ?>images/car_IONIQ5.1f60d947.png" alt=""
                                style="position: absolute; right: 0px; bottom: -4px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 160px;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_BZ4.4750e70e.png" alt=""
                                style="position: absolute; right: 24px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 190px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Tesla_Model_3.dee64a3f.png" alt=""
                                style="position: absolute; right: 32px; bottom: 24px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 100px; width: 190px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Taycan.c537cce7.png" alt=""
                                style="position: absolute; right: 48px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 180px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_N7.33b8a3ac.png" alt=""
                                style="position: absolute; right: 0px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 170px; display: none;">
                            </div>
                            <div id="car02" class="car-type" data-table="toyota_bz4x" data-v-2ab68ba4=""
                            style="position: relative; width: 100%; height: 250px; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; padding: 40px 20px;">
                            <img data-v-2ab68ba4=""
                                src="data:image/png;base64,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"
                                alt=""
                                style="position: absolute; left: 36px; top: 20px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                                <img class="car-dot" 
                                data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                                alt=""
                                style="position: absolute; left: 44px; top: 29px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%; display: none;">
                            <div data-v-2ab68ba4=""
                                style="padding-left: 84px; color: rgb(93, 93, 93); font-size: 24px; line-height: 24px; position: relative; bottom: 18px; font-weight: 400;">
                                款式二：Toyota bZ4X_CCS1</div><img data-v-2ab68ba4=""
                                src="<?php echo base_url(); ?>images/car_IONIQ5.1f60d947.png" alt=""
                                style="position: absolute; right: 0px; bottom: -4px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 160px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_BZ4.4750e70e.png" alt=""
                                style="position: absolute; right: 24px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 190px; height: 150px;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Tesla_Model_3.dee64a3f.png" alt=""
                                style="position: absolute; right: 32px; bottom: 24px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 100px; width: 190px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Taycan.c537cce7.png" alt=""
                                style="position: absolute; right: 48px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 180px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_N7.33b8a3ac.png" alt=""
                                style="position: absolute; right: 0px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 170px; display: none;">
                            </div>
                            <div id="car03" class="car-type" data-table="tesla_model_3" data-v-2ab68ba4=""
                            style="position: relative; width: 100%; height: 250px; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; padding: 40px 20px;">
                            <img data-v-2ab68ba4=""
                                src="data:image/png;base64,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"
                                alt=""
                                style="position: absolute; left: 36px; top: 20px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                                <img class="car-dot" 
                                data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                                alt=""
                                style="position: absolute; left: 44px; top: 29px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%; display: none;">
                            <div data-v-2ab68ba4=""
                                style="padding-left: 84px; color: rgb(93, 93, 93); font-size: 24px; line-height: 24px; position: relative; bottom: 18px; font-weight: 400;">
                                款式三：Tesla Model 3_CCS2</div><img data-v-2ab68ba4=""
                                src="<?php echo base_url(); ?>images/car_IONIQ5.1f60d947.png" alt=""
                                style="position: absolute; right: 0px; bottom: -4px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 160px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_BZ4.4750e70e.png" alt=""
                                style="position: absolute; right: 24px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 190px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Tesla_Model_3.dee64a3f.png" alt=""
                                style="position: absolute; right: 32px; bottom: 24px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 100px; width: 190px;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Taycan.c537cce7.png" alt=""
                                style="position: absolute; right: 48px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 180px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_N7.33b8a3ac.png" alt=""
                                style="position: absolute; right: 0px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 170px; display: none;">
                            </div>
                            <div id="car04" class="car-type" data-table="porsche_taycan" data-v-2ab68ba4=""
                            style="position: relative; width: 100%; height: 250px; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; padding: 40px 20px;">
                            <img data-v-2ab68ba4=""
                                src="data:image/png;base64,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"
                                alt=""
                                style="position: absolute; left: 36px; top: 20px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                                <img class="car-dot" 
                                data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                                alt=""
                                style="position: absolute; left: 44px; top: 29px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%; display: none;">
                            <div data-v-2ab68ba4=""
                                style="padding-left: 84px; color: rgb(93, 93, 93); font-size: 24px; line-height: 24px; position: relative; bottom: 18px; font-weight: 400;">
                                款式四：Porsche Taycan_CCS1</div><img data-v-2ab68ba4=""
                                src="<?php echo base_url(); ?>images/car_IONIQ5.1f60d947.png" alt=""
                                style="position: absolute; right: 0px; bottom: -4px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 160px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_BZ4.4750e70e.png" alt=""
                                style="position: absolute; right: 24px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 190px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Tesla_Model_3.dee64a3f.png" alt=""
                                style="position: absolute; right: 32px; bottom: 24px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 100px; width: 190px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Taycan.c537cce7.png" alt=""
                                style="position: absolute; right: 48px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 180px; height: 150px;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_N7.33b8a3ac.png" alt=""
                                style="position: absolute; right: 0px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 170px; display: none;">
                            </div>
                            <div id="car05" class="car-type" data-table="luxgen_n7" data-v-2ab68ba4=""
                            style="position: relative; width: 100%; height: 250px; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; padding: 40px 20px;">
                            <img data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAaHSURBVHgB1ZlbaBxVGMe/M2dmdmazu05bkzbV1ilKq4hlY0UpKNkVkRYVEgQxFGmCLxYvTZ+K+LDZF/vgQ9sHqaiwCWhTCtogUiuC2SDShqJuBa1V247SYtLcZnPZ3bmd8ZyVs91s7knbrH/4mDOzc2Z/8/E/tzkIVqj2w61RV8CNxBeivo+iBLBGiKD7vgC0TEMwfQ9lPIJNwGKaONB3/J13M7ACIViG2o+9rCNXbPVB2C+hGk2T10NQjEBIDIEoSKBgpXRv3rUg79lgex4M5CZguJCDSdcz6IulHRuSPcmkAUvUkqAPUlhCIIWRHKtV7gdNqocaKQIIIRAEoXhkUSnf94tBaGV2nKK0F8dG4EY+D5O210lcd0nwi4JuTzVpak5sF7CcuDuwFeqUB0AWA0XQyqgErwT2aMZZsHMWv5smjQmYtCh44u2OxfAsCJ041qS7AuoNS5v0zerjIEsKYIxBFMXSkcGyMgevFAdkwYBd1y0Gf4EJy4Kfh024bOYMgYjxnuQBY9nQiY+ejwmgnqpVtmt16kNFMEmSSsHBy4Hny3Q5NDs6jlMMds6Ov45m4fzghEl/avsqeaBnydCJD19olcVQalMwBiG5FmRZLoLyIwPm0OWws/m63B6V2Wawtm0Xg5WHpvLw7bUxyNrQeibxRteioRMfP9uk4DWn7qvZDTWBNUXQQCBQAmYxW3Zna4Tl4EyVVimHZmFRq5h5C04bozBecONnkm+mF4Q+lNqle4B/2lLTpIWV9aAoSgmYRXl2uX/ng50PnpV5xjl0oVAogg9M5uHLK6ZpO6ThTHKfUf6Mma0GQW998Aktom4AVVWnRbk15uvi5hOvw9sCtxxLDotgMFiM+nAQHlsf0nwk9MYSKW1O6ENduzq0wDa9LtgwDZZleqWwc70Aex57bjk4C/a/DRsisEVTdRGR/dPq8cLh7l06kJqrevhFCKm1xUqsMrfEcqywWPEehgXvUZhN8nTwyU7loPOXMXDt/BZuk1KmCfES69QGCAbWld6W2+FWZnc28Yyz4A2dM0SCNON1QXCQmuL3F6EPd8f0gBhprVV3lBoet8PthJ0LnoMzDhY76kOgSGKMelsvQSOEEyF5U+mmckvcKeBycBbs/3kjDasBeHRDEEQs7y1BY1GI1QWfnNE7rJYqGyhL5LZ1KtBZZTv7XXz/ZCwqiXfpqrzutvQQy4VmKu8WN0YCoAUlLZb4NMoM1BiSN88Y6VYLuByc9+fcKlvX0smaLDUKGJFYRH5w2khXLaochOrDMr2KowLGgiaLwaqwRaUqs70xzLpfBi1ANCCtrRpbVKq8Dw8GJEAYawLCSAvgtVUJzMSzzfjWKJheEHRaRoueXq6WODRzAxKKjkBV5+XZdDOp/1nF8GC8qoGZGN+4QydXAjIZtklQoeqzzGTadExEKMMynbH9Qfg/qOABewOTggsZmwyUlkHVrEtjlBqJacFzSd+UdxGqWTyhxoRLew/SJ+yJn844fta0yD9QzRqzCFBI4/Tr8QxfQx2Z8C5VrUUYV/oa7SwApdl5EdotQNeocxY8P1914Jzn6ji1hu8lWbkI3RLvMTxSSI8656AadW6gQL84kc6efXGDnZfmoa4vtQ3b/eCSAlSTxiyPQufBs50kv1aCbtl5go6MVsd1+4uqsQjj6LueA9MhHTzLTNNm/KKoHDXd34xh5zxUg/oHc5AZyhkn9z6VLL8+Dbq5odMkDokPWt+ZOW91R8mBnA3f/D1u0g8y8crfZqytmE1sJ9d8Jf85WCQLqyHTcuGzy6NAPwi3nWi7aQuuWReELTs/SdveeNulqROQ84bgTupG3obuP2/QyZHT2v3KM7N+WJ93ane8/9UmD+TUZrVR2xBogNutH4ay8P1A1swR3JR66em+ue5bcD6aOvuaTtdkvXfLD+ub6J5LQAjDrZblEfj62gD8MZY3bILinS27jfnuX/QkOtX/VkL2tY56ZTvcoz4Ct0IW8eDC8Cj8ODwGeQIdhXH3aGdbs7lQvSXN/FO97bon44QkaK0RcSNsqYmCikOwVI3QDdCrk+NwYWQEci6kXQu1fdDSbCy2/rKWK8d6D+oE4wTxcUzBYZ1tgq5X7gURyfQl6Jd8+h2Fa4pObGzPhRFrikYO/prIQtZxTdcXj9DurOtIc4sBS9SK11iHexNRQRAbXYJjvo81ugceJezI9sZ9zMKge+R0mw1nfBAzDoh97z23Z0V74/8CRs4T9Pc89rUAAAAASUVORK5CYII="
                                alt=""
                                style="position: absolute; left: 36px; top: 20px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                                <img class="car-dot" 
                                data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                                alt=""
                                style="position: absolute; left: 44px; top: 29px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%; display: none;">
                            <div data-v-2ab68ba4=""
                                style="padding-left: 84px; color: rgb(93, 93, 93); font-size: 24px; line-height: 24px; position: relative; bottom: 18px; font-weight: 400;">
                                款式五：Luxgen n7_CCS1</div><img data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_IONIQ5.1f60d947.png"
                                alt=""
                                style="position: absolute; right: 0px; bottom: -4px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 160px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_BZ4.4750e70e.png" alt=""
                                style="position: absolute; right: 24px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 190px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Tesla_Model_3.dee64a3f.png" alt=""
                                style="position: absolute; right: 32px; bottom: 24px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 100px; width: 190px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_Taycan.c537cce7.png" alt=""
                                style="position: absolute; right: 48px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; width: 180px; height: 150px; display: none;"><img
                                data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/car_N7.33b8a3ac.png" alt=""
                                style="position: absolute; right: 0px; bottom: 0px; vertical-align: middle; object-fit: contain; min-width: 150px; height: 170px;">
                            </div>
                        </div>
                        </div>
                        <div data-v-2ab68ba4=""><img data-v-2ab68ba4=""
                            src="<?php echo base_url(); ?>images/charging_title_type.a1ccc753.png" alt="charging_title_payment"
                            style="vertical-align: middle; object-fit: contain; width: auto; height: auto; cursor: pointer; margin-top: 100px; margin-bottom: 40px; position: relative; z-index: 2;">
                        </div>
                        <div id="charging-model" data-v-2ab68ba4="" style="display: flex; gap: 40px;">
                        <div class="charging-model" data-v-2ab68ba4=""
                            style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; padding: 40px; flex: 1 0 49%; cursor: pointer; display: flex;">
                            <div data-v-2ab68ba4=""
                            style="padding-left: 68px; color: rgb(93, 93, 93); font-size: 22px; line-height: 22px;"> 充電飽和度 </div>
                            <div  class="controller" data-v-2ab68ba4="" style="display: flex; margin-left: auto;"><label data-v-2ab68ba4=""
                                for="charging_amount" style="position: relative;"><input data-v-2ab68ba4="" id="charging_amount"
                                style="border: 0px; position: absolute; width: 110px;" name="charging_amount"><img data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUIAAAA+CAYAAABeOhKSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAVQSURBVHgB7ZhRluQmDEWl3lu2kjVlt0p328CTgMrkW/fOma4yBiEk8bDL4xsDAGjMlwEANAchBID2IIQA0B6EEADagxACQHsQQgBoD0IIAO1BCAGgPQghALQHIQSA9iCEANAehBAA2oMQAkB7EEIAaA9CCADtQQgBoD0IIQC0ByEEgPYghADQHoQQANqDEAJAexBCAGgPQggA7UEIAaA9CCEAtAchBID2IIQA0B6EEADagxACQHsQQgBoD0IIAO1BCAGgPQghALQHIQSA9iCEANAehBAA2oMQAkB7EEIAaA9CCADtQQgBoD0IIQC0ByEEgPYghADQHoQQANqDEAJAexBCAGgPQggA7UEIAaA9CCEAtAchBID2IIQA0B6EEADagxACQHsQQgBoD0IIAO1BCAGgPf73X/+E+e/X34/4+fZeP+2jp1zoV21/+/00RWg/X8Nd7EkfL/Z/xv+XH/O+5bnSkGOf1T7cyD68kfA8aN7/n3GJ33nWYp85fVua+XktEoy36W13z/c2Pzzf+hBPrz4c7IwVxNG+3+vCyxeXdRS/49NYt1Wj4/q7byzPLOf/slbJ+fB1ZqfEOd6eu095vs2+1u/P369vWyG2PO+RbP+Uz2X7nu/lln8dnnHEzm3fTQHQWF9qfPNVajOV5SnuH+tODMw6OdV5tuu3uKhm2OuDewrHE63Xu+Hkk6/SqKUTj3O+Om9r0EAn/3L317nHvTAVJbPldsy2mocYghXaf40KO61FmmLsy1WotY8N00f2uGxD/TQichG4f/BzJNyXeIStjWXFzzjE9NlBxf6Soi0t1eeQujIp4sidr2GqvP4PoTE/++Dzn60zQWb5jcFbr+rXs+5ItmbkQ5qsfl850PGPr7MS1cFkw23bEo/QzkJ7RDedbX6OWm6Oef2see5Wy8v0x57ef27Ix1rFU0NSd77bTAuS2kl5l5DYZW1xTocdq2YIldT53lUV4wOb+5uav0JYxHgkLFV/EYVVJBJhF6djLeIoMGL7dzuEhDZtrumQheSnbsrq5B9vyCNaPLIZZNX6qUUQScxcbKzTa9qTkyfm6RGnPM0Cnj74OTUaIHeXmO7FVCOs6zzV1yiiH1/9EuG1pIPanK5t6tjmx3AjRNC95ERtppyIr9tE2s9PDh4WP2JZ549sb8w9DvKntrUmqgD7ZS9HSZnn71J066HBD6a8WpXvZhcNTk9vUcZpa50rbf8qYmZZc7001k6u/0uSXRydw/YaPxNWT6svNbLeCvxzlE47b8Zlbfj8eqgHgG+291e4HHwvm3fTvxKYvMylGhF5/vU3pr/bWGlU8Xim9e3wXW6EjcN7FESUWVf/pKbFjp4d66eHSDlaDo4nkFWEJY/jkPLQy/feK3Iu49xyTvxjleX11JqLvU+phK2+/H4ybDazvchx1adi2865S3Gd5hCxnK9neS0R49o/m7KbyBThq/flNVuzmA+SlNlpZxyQc9gr2DPd7napnNJQ6yry4XqqE39rOOwDT3w3EbXz6SyPELnrZRHPW2pu/Fre+dpceWvMwSdu66mnyCxBF+/nvSJARXR+m0pQ4jrx8j2dOFq38mqhTxzpICqbRpydr0leHalibbJB5FHfkiiKj8VO7fOc0u/T8/jJYSniXOfwzuexHsd1rL55kvVEuA65FI0/KFDNf33FW2bC9qDV2ivCNR2v8VpboVqI6XMurEh+2D1WxzXk2qgPniNXOl/tGG/8j0Jv67zeBcHXgf++Jq0fEC4rOOTaxyRmpk+my6ZqyXn/W3na3SbVPpe6tu13yhETOdJqrcRt6GEfHcq17r1/ATpLJIg96A12AAAAAElFTkSuQmCC"
                                style="height: 22px;">
                                <div data-v-2ab68ba4=""
                                style="color: rgb(255, 0, 0); font-size: 14px; line-height: 14px; position: absolute;"> 數值不可超過 100
                                且大於 0 </div>
                            </label>
                            <div data-v-2ab68ba4=""
                                style="padding-left: 20px; color: rgb(93, 93, 93); font-size: 22px; line-height: 22px;"> % </div>
                            </div>
                            <img data-v-2ab68ba4=""
                            src="data:image/png;base64,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"
                            alt=""
                            style="position: absolute; left: 36px; top: 28px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                            <img class="dot" 
                            data-v-2ab68ba4=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                            alt=""
                            style="position: absolute; left: 44px; top: 37px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                        </div>
                        <div class="charging-model" data-v-2ab68ba4=""
                            style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; padding: 40px; flex: 1 0 49%; cursor: pointer; display: flex;">
                            <div data-v-2ab68ba4="" style="padding-left: 68px; color: rgb(93, 93, 93); font-size: 22px; line-height: 22px;">
                            充電時間 </div>
                            <div class="controller" data-v-2ab68ba4="" style="display: none; margin-left: auto;">
                            <label data-v-2ab68ba4="" for="charging_time" style="position: relative;">
                                <input data-v-2ab68ba4="" id="charging_time" name="charging_time"
                                style="border: 0px; position: absolute; width: 110px;">
                                <img data-v-2ab68ba4=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUIAAAA+CAYAAABeOhKSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAVQSURBVHgB7ZhRluQmDEWl3lu2kjVlt0p328CTgMrkW/fOma4yBiEk8bDL4xsDAGjMlwEANAchBID2IIQA0B6EEADagxACQHsQQgBoD0IIAO1BCAGgPQghALQHIQSA9iCEANAehBAA2oMQAkB7EEIAaA9CCADtQQgBoD0IIQC0ByEEgPYghADQHoQQANqDEAJAexBCAGgPQggA7UEIAaA9CCEAtAchBID2IIQA0B6EEADagxACQHsQQgBoD0IIAO1BCAGgPQghALQHIQSA9iCEANAehBAA2oMQAkB7EEIAaA9CCADtQQgBoD0IIQC0ByEEgPYghADQHoQQANqDEAJAexBCAGgPQggA7UEIAaA9CCEAtAchBID2IIQA0B6EEADagxACQHsQQgBoD0IIAO1BCAGgPf73X/+E+e/X34/4+fZeP+2jp1zoV21/+/00RWg/X8Nd7EkfL/Z/xv+XH/O+5bnSkGOf1T7cyD68kfA8aN7/n3GJ33nWYp85fVua+XktEoy36W13z/c2Pzzf+hBPrz4c7IwVxNG+3+vCyxeXdRS/49NYt1Wj4/q7byzPLOf/slbJ+fB1ZqfEOd6eu095vs2+1u/P369vWyG2PO+RbP+Uz2X7nu/lln8dnnHEzm3fTQHQWF9qfPNVajOV5SnuH+tODMw6OdV5tuu3uKhm2OuDewrHE63Xu+Hkk6/SqKUTj3O+Om9r0EAn/3L317nHvTAVJbPldsy2mocYghXaf40KO61FmmLsy1WotY8N00f2uGxD/TQichG4f/BzJNyXeIStjWXFzzjE9NlBxf6Soi0t1eeQujIp4sidr2GqvP4PoTE/++Dzn60zQWb5jcFbr+rXs+5ItmbkQ5qsfl850PGPr7MS1cFkw23bEo/QzkJ7RDedbX6OWm6Oef2see5Wy8v0x57ef27Ix1rFU0NSd77bTAuS2kl5l5DYZW1xTocdq2YIldT53lUV4wOb+5uav0JYxHgkLFV/EYVVJBJhF6djLeIoMGL7dzuEhDZtrumQheSnbsrq5B9vyCNaPLIZZNX6qUUQScxcbKzTa9qTkyfm6RGnPM0Cnj74OTUaIHeXmO7FVCOs6zzV1yiiH1/9EuG1pIPanK5t6tjmx3AjRNC95ERtppyIr9tE2s9PDh4WP2JZ549sb8w9DvKntrUmqgD7ZS9HSZnn71J066HBD6a8WpXvZhcNTk9vUcZpa50rbf8qYmZZc7001k6u/0uSXRydw/YaPxNWT6svNbLeCvxzlE47b8Zlbfj8eqgHgG+291e4HHwvm3fTvxKYvMylGhF5/vU3pr/bWGlU8Xim9e3wXW6EjcN7FESUWVf/pKbFjp4d66eHSDlaDo4nkFWEJY/jkPLQy/feK3Iu49xyTvxjleX11JqLvU+phK2+/H4ybDazvchx1adi2865S3Gd5hCxnK9neS0R49o/m7KbyBThq/flNVuzmA+SlNlpZxyQc9gr2DPd7napnNJQ6yry4XqqE39rOOwDT3w3EbXz6SyPELnrZRHPW2pu/Fre+dpceWvMwSdu66mnyCxBF+/nvSJARXR+m0pQ4jrx8j2dOFq38mqhTxzpICqbRpydr0leHalibbJB5FHfkiiKj8VO7fOc0u/T8/jJYSniXOfwzuexHsd1rL55kvVEuA65FI0/KFDNf33FW2bC9qDV2ivCNR2v8VpboVqI6XMurEh+2D1WxzXk2qgPniNXOl/tGG/8j0Jv67zeBcHXgf++Jq0fEC4rOOTaxyRmpk+my6ZqyXn/W3na3SbVPpe6tu13yhETOdJqrcRt6GEfHcq17r1/ATpLJIg96A12AAAAAElFTkSuQmCC"
                                style="height: 22px;">
                                <div id="remindMin" data-v-2ab68ba4="" style="position: absolute; color: rgb(255, 0, 0); font-size: 14px; line-height: 14px;">
                                數值需大於 0</div>
                            </label>
                            <div data-v-2ab68ba4="" style="padding-left: 20px; color: rgb(93, 93, 93); font-size: 22px; line-height: 22px;">
                                分鐘 </div>
                            </div><img data-v-2ab68ba4=""
                            src="data:image/png;base64,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"
                            alt=""
                            style="position: absolute; left: 36px; top: 28px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                            <img class="dot" data-v-2ab68ba4=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAYAAABvCO8sAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUFSURBVHgBlVZNbxxFEK2q7pm1czK/ID5zwRacQEhrKXdvIi4gIeIIBYIEwRdQDsg2H7KAAx8n32IjLigInH9g3zmYE8fsT1huyOuZ4lVVz+yuhbHSm0mPe2bq1Xv1+oPpmjYa7axkymsiaZNSGnLim5zkBRYhyTJphc8kpzNmffrzwYcn18XjK4GGALpBH1PODwG2AhCKKylnYQCq/U0ApkQcz3iMu92ffnzv6LkA37i1M2wTPwaD1ZQzAiaVlFhyVowZMJM4MDH+kbAaqBKhZ2tjqqcbh18/GF8LeOfWZ7tIfwcyIXDWVFUAqlSqxKnKwRCAhRGSYVJGLwADaaXWo2Jsokxbh99sHV8JOBo+2k2SdxisclUTwHDVlOuaBGAGzEjEwNkYogOgKresULalhowlesYYQDGmze3D/RloDzh6/dEIsv1uAClXDpLrJVwBKg5ekTN39iapAVodwYsN6AIwrbZqfWN3SKKdVJLWD/beHBtODmafriLJ78AO39daVQOQXEJfQ1WA5VpT9hr2gHiRrZ4OaCzFpDWGLTdqvyk37ZSatlkB/GPAbBiWOL3ztCOUV5NUVCUwSwOtco24A5jU/s4wJeookDOhjpBTJCt7grjwPEOVqlqiCqrUg2WuBzc0D5bVS5Py8P4Xv7zjgGZ/5DrKCZIBCABsYClVHtRAfM4JjMKWH8qDBvvDnGYW9J6IJ+MAuUacesBVvUwOaiqJ3HVJ5Xw6QvCVYFeBVR1ZCyTEXLMCOQDEMkMUT3rTYoIYtxyQuiVinmIkoLhpxD+AqYbv7z8ZZta0CblcumQsAeasOGkJxxGc1Sca/kdzjsV3Shzv+YCTZ5fe54pngmSnShciL2WwWHVGbEB2CRXpIhw+NhAD6+I5eIQKmgvzi+Ml/FA7Y6Y+PfDTi3YtY3jNAI2RyeBFicTnwrWWtgY4mSHZn2jBNuJxw/EJZBTxFShRtsUAU6Xitp2u5mTFNjCrWZFjlq86QpjZMBAnFrA5uS391haA8tmsDB4NatmymADdaF5BHjJxB9rs5csrHc+NeXArX3ikBO10dud4ie2KAviLtsjbquSOrycOCDByzL5Ss6YamOGclru6ejIes+vDWfFE+xJ4Rd0X1vHE+J648iZTPO+L7zuBW4x6A7lpepZlmaYCFNXsSslxTxEWTCHtifE6C7V78bSAGDni4gx7qi7pjNDCDZPSgj5W8Y5lTJm21VORJh3h4URVSxncBeU9p62deeJDDiWKl+fqPX+rVKTt0oOg42/vv3YmhyfbE2j3fSkYd5g6W0d62/dcqFsA5jj5ZO1qGTV0zVotF+/ZI1+826XzHzA0WdgdF+VxR80PO9tQS2djxVudS9W2Y6uCjr+6t37UAx4eb09Sbm5HfYqyYc2Y3lH/zjpzPUeZqDh39qRwNV3av6VsTT2gtYPjByd2ANJwWUiv4UAt6XvXCxdzsbzYOWxBFaPWNLq1t7U+7kbT/Ct//PX09OUX79hqvxFrAfvWFJcJiMWh3PuZxtBTnOBsh7D3fGW0VxNPcLp568t31xfONEKX2sGvb+/Bvxume7fMaWchd3m3aGuZYBqTVcsiEcU7oYt/1i+DzQn13+2je09woJK72I1v+lnUj4nGzo4ZUs42Yocq21lNiWfYIfY+f/jK0VUx/xewa9sf/LbJqR5hB1sFyBoAVwrgWJI8wxnkT2ykx/ufvHp6Xax/Ad1KC0F9MiTxAAAAAElFTkSuQmCC"
                            alt=""
                            style="display:none; position: absolute; left: 44px; top: 37px; z-index: 2; vertical-align: middle; object-fit: contain; max-width: 100%;">
                        </div>
                        </div>
                        
                        <div data-v-2ab68ba4="" style="margin-top: 93px; display: flex; position: relative; z-index: 2;">
                        <div data-v-2ab68ba4="" style="margin-left: auto; display: flex; gap: 55px;"><img data-v-2ab68ba4=""
                            src="<?php echo base_url(); ?>images/btn_cancel.bdb1ae40.png" alt="btn_cancel"
                            style="cursor: pointer; vertical-align: middle; object-fit: contain; width: 226px;" onclick="location.href = '<?php echo base_url(); ?>';"><button type="submit"><img
                            data-v-2ab68ba4="" src="<?php echo base_url(); ?>images/btn_start.60ce0232.png" alt="btn_start"
                            style="cursor: pointer; vertical-align: middle; object-fit: contain; width: 226px;" ></button></div>
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
                <input id="hiddenWatts" type="hidden" name="watts" value="<?php echo $watts; ?>">
                <input type="hidden" name="dataTable" id="dataTable" value="hyundai_ioniq_5">
            </form>
        </div>
        
    </div>
    <script src="<?php echo base_url(); ?>js/script.js"></script>
    <script>
        let labels= <?php echo json_encode($labels); ?>;
        let datas= <?php echo json_encode($datas); ?>;
        let pointRadius= <?php echo json_encode($pointRadius); ?>;
        let lineChart;
        const ctx = document.getElementById('myChart');                     
        $(function(){
            if (window.location.href.indexOf("changePriceData") > -1) { 
                document.getElementById('manual_select_time').value=<?php echo $selectOtion; ?>;
            }

            lineChart = new Chart(ctx, {
                type : 'line',
                data : {
                    labels : labels,
                    datasets : [
                            {
                                data : datas,
                                label : "",
                                borderColor : "#664598",
                                backgroundColor: "#664598",
                                fill : false,
                                stepped: true,                           
                                pointRadius: pointRadius,
                            }]
                },
                options : {  
                    events: [],            
                    title : {
                        display : false,
                        text : ''
                    },
                    plugins: {
                        legend: {display: false},
                        tooltip: {enabled: false},                  
                    },
                    scales: {
                        x: {
                            
                            grid: {
                            display: false
                            }
                        },
                        y: {
                            grid: {
                            display: false
                            },
                            max:10,
                            min: 0,
                            ticks: {                           
                            stepSize: 10
                            },
                        },
                    
                    }
                },
                
            });
            setCurrentTime();
            setInterval(setCurrentTime,1000*60);
            $('.car-type').click(function(){
                let dataTable = $(this).attr('data-table');
                $('#dataTable').val(dataTable);           
                $('#all-car-type').find('.car-dot').css('display','none');
                $(this).find('.car-dot').css('display','block');
                getTotalMin('tb_'+ dataTable + '_'+$('#hiddenWatts').val());
            });
            $('.charging-model').click(function(){
                $('#charging-model').find('.dot').css('display','none');
                $('#charging-model').find('.controller').css('display','none');
                $(this).find('.dot').css('display','block');
                $(this).find('.controller').css('display','flex');
            });
            $('#manual_select_time').change(function(){
                $electricity_type = $(this).val();
                if($electricity_type ==0){
                    //get_data_list($electricity_type,0);
                    location.href = '<?php echo base_url(); ?>start/changePriceData/'+$electricity_type+'/1';
                }else{
                    //get_data_list($electricity_type,1);
                    location.href = '<?php echo base_url(); ?>start/changePriceData/'+$electricity_type+'/0';
                }
            });           
            getTotalMin('tb_hyundai_ioniq_5_'+$('#hiddenWatts').val());
        });
        
        
       //更新圖表
        function updateBarGraph(chart,labels,datas,pointRadius) {  
            chart.data = {
                    labels : labels,
                    datasets : [
                            {
                                data : datas,
                                label : "",
                                borderColor : "#664598",
                                backgroundColor: "#664598",
                                fill : false,
                                stepped: true,                           
                                pointRadius: pointRadius,
                            }]
            };
           
            chart.update('none');
        }

       
        function setCurrentTime(){
            let dt = new Date();

            let getHours = dt.getHours(); 
            let getMinutes = dt.getMinutes();
            
            if(String(getHours).length==1){
                getHours = '0'+String(getHours);
            }
            if(String(getMinutes).length==1){
                getMinutes = '0'+String(getMinutes);
            }

            let time = getHours + ":" +getMinutes ;
            
            $('#currentTime span').html(time);
        }
        function getTotalMin(tableName){
            var str = '<?php echo base_url(); ?>';	
            var post_url = str +"start/getTotalMin/"+tableName;
              
            $.ajax({
                type: "POST",
                url: post_url,
                success: function(items) 
                {		
                    
                    if(items==' '){	
                        
                    }else{
                       
                        var remindStr = '數值需大於 0,小於'+items+'分鐘';
                      $('#remindMin').html(remindStr);                               
                    }
                } //end success
            }); //end AJAX	 
              
        }
        function get_data_list(electricity_type,add){	             
            var str = '<?php echo base_url(); ?>';	
            var post_url = str +"start/get_chart_data/"+electricity_type+"/"+add+"/"+1;
              
            $.ajax({
                type: "POST",
                url: post_url,
                success: function(items) 
                {		
                    
                    if(items==' '){	
                        
                    }else{	
                        let stringLabels =   items[0];
                        stringLabels = "'"+String(stringLabels).replaceAll(",", "','")+"'";					
                        //labels = '['+stringLabels+']';  
                        labels = array[items[0]];
                        datas = '['+items[1]+']';
                        pointRadius = '['+items[2]+']';
                        //console.log(datas);  
                        updateBarGraph(lineChart,labels,datas,pointRadius);                                  
                    }
                } //end success
            }); //end AJAX	 
                    
        }
    </script>
</body>

</html>