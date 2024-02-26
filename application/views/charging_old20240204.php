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
  <script src="<?php echo base_url(); ?>js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>js/ez.countimer.js"></script>
  <script src="<?php echo base_url(); ?>js/chart.js"></script> 
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
            </div><img src="<?php echo base_url(); ?>images/progress_charging.0513b11d.png" alt="progress_index"
              style="margin-top: 0px; vertical-align: middle; object-fit: contain; width: 800px; height: auto;"><!----><!----><!----><!----><!---->
          </div>
          <div style="margin-top: 54px; max-width: 1080px; margin-left: auto; margin-right: auto;">
            <div style="display: grid; gap: 24px; grid-template-columns: 760px 306px;">
              <div style="padding: 0px;">
                <div
                  style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; z-index: 2; padding: 20px 40px 40px; display: flex; align-items: center; justify-content: center;">
                  <div>
                    <div style="position: absolute; bottom: 20px; right: 24px; font-size: 10px;"> 單位: 秒 </div>
                    <canvas data-v-2ab68ba4="" role="img" width="900" height="450"
                        style="display: block; box-sizing: border-box; height: 350px; width: 700px;" id="myChart">
                  </div>
                </div>
                <div
                  style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 0px 0px 20px 20px; position: relative; top: -16px; padding: 56px 40px 45px;">
                  <div style="width: 58%;">
                    <div style="width:110%;display:flex;align-items:center;justify-content:space-between;">
                      <div style="color:#666666;font-size:24px;">原倍速</div>
                      <div style="color:#666666;font-size:24px;">10倍速</div>
                      <div style="color:#666666;font-size:24px;">50倍速</div>
                      <div style="color:#666666;font-size:24px;">100倍速</div>
                    </div>
                    <div style="position: relative; width: 100%; margin-top: 16px;">
                      <div
                        style="background-color: rgb(217, 217, 217); border-radius: 22px; height: 10px; width: 100%;">
                      </div>
                      <div
                        style="position: absolute; top: 0px; left: 0px; background: linear-gradient(90deg, rgb(102, 69, 152) 0%, rgb(134, 179, 224) 103.89%); height: 10px; border-radius: 22px; width: 0%;" id="speedBar">
                      </div>
                      <div
                        style="position: absolute; box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 4px 0px; border-radius: 50%; width: 32px; height: 32px; top: -12px; background-color: rgb(255, 255, 255); left: 0%;" id="speedDot">
                      </div>
                      <div
                        style="position: absolute; top: -10px; left: 0px; width: 32px; height: 32px; background-color: transparent;" onclick="changeSpeed(0);">
                      </div>
                      <div
                        style="position: absolute; top: -10px; left: 32px; width: 140px; height: 32px; background-color: transparent;"onclick="changeSpeed(1);">
                      </div>
                      <div
                        style="position: absolute; top: -10px; left: 204px; width: 140px; height: 32px; background-color: transparent;" onclick="changeSpeed(2);">
                      </div>
                      <div
                        style="position: absolute; top: -10px; left: 344px; width: 140px; height: 32px; background-color: transparent;" onclick="changeSpeed(3);">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div style="padding: 0px;">
                <div
                  style="box-shadow: rgba(0, 0, 0, 0.25) 0px 4px 10px 0px; background-color: rgb(253, 253, 253); border-radius: 20px; position: relative; padding: 20px 40px;">
                  <div
                    style="font-size: 32px; font-weight: 700; line-height: 48px; letter-spacing: 0em; text-align: left; color: rgb(76, 158, 216);">
                    充電中...</div><!---->
                  <div style="margin-top: 14px;">
                    <div style="color: rgb(93, 93, 93); font-size: 24px; font-weight: 700;"> 用電資訊 </div>
                  </div>
                  <div style="margin-top: 38px; padding-bottom: 10px; border-bottom: 1px solid rgb(102, 102, 102);">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <div style="font-size: 18px; font-weight: 400; color: rgb(102, 102, 102);"> 開始時間 </div>
                      <div style="font-size: 18px; font-weight: 400; color: rgb(102, 102, 102);" id="powerStartTime">16:59:16</div>
                    </div>
                  </div><!---->
                  <div style="margin-top: 10px; padding-bottom: 10px; border-bottom: 1px solid rgb(102, 102, 102);">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <div style="font-size: 18px; font-weight: 400; color: rgb(102, 102, 102);"> 用電時間 </div>
                      <div style="font-size: 18px; font-weight: 400; color: rgb(102, 102, 102);" id="powerUsageTime" data-end='0'></div>
                    </div>
                  </div><!----><!----><!---->
                  <div style="margin-top: 118px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <div style="font-size: 24px; font-weight: 700; color: rgb(102, 102, 102);"> 用電總量 </div>
                      <div style="font-size: 24px; font-weight: 400; color: rgb(102, 102, 102);" id="powerTotalConsumption">12.25度 </div>
                    </div>
                  </div>
                  <div style="margin-top: 110px;"><img
                      src="https://green-power-demo.netlify.app/_nuxt/btn_end_charging.5d2c178e.png"
                      style="cursor: pointer; vertical-align: middle; object-fit: contain; width: auto; max-width: 100%;">
                  </div><!---->
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
  <?php echo $charging_time; ?>
  <script src="<?php echo base_url(); ?>js/script.js"></script>
  <script>
    //query_result_power
    <?php         
          $array_sec=array();
          $array_soc=array();
          $array_energy=array();
          if($query_result_power !=''){
            foreach ($query_result_power as $row_power)				  
            {
              array_push($array_sec,$row_power->f_sec);
              array_push($array_soc,$row_power->f_soc);
              array_push($array_energy,$row_power->f_energy);
            }
          }
    ?>
    let totalSetSecs =  <?php if($query_result_power !=''){echo count($query_result_power);}else{ echo 0;} ?>;
    const powerTotalConsumption =   [0,<?php echo implode(",", $array_energy); ?>];     
    const allData = [null, <?php echo implode(",", $array_soc); ?>];
    const labes = [0,<?php echo implode(",", $array_sec); ?>];

    const ctx = document.getElementById('myChart');

    const lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labes,
        datasets: [
          {
            data: [null],
            borderColor: "#664598",
            backgroundColor: "#664598",
            fill: false,
            pointRadius: 15,
          }]
      },
      options: {
        events: [],
        title: {
          display: false,
          text: ''
        },
        plugins: {
          legend: { display: false },
          tooltip: { enabled: false },
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
            min: 0,
            max: <?php echo end($array_soc); ?>,
          },

        }
      },

    });
    function updateBarGraph(chart, data) {
      chart.data.datasets.pop();
      chart.data.datasets.push({
        data: data,
        borderColor: "#664598",
        backgroundColor: "#664598",
        fill: false,
        pointRadius: 15,
      });
      chart.update('none');
    }
   
    
    const updateData = [];
    const numberOfTimes = totalSetSecs;   
    let count = 0;
    let count_keep =0;    
    let delay = 1000;
    let times = 1;
    let timeout = null;
   
    function refreshChart(count) {
      updateData.push(allData[count]);
      updatedDataSet = updateData;
      updateBarGraph(lineChart, updatedDataSet);
      count =count + 1;
      count_keep = count;
      //console.log(count);
   
      if(count>numberOfTimes){
        clearTimeout(timeout);       
      
      }else{
        timeout = setTimeout(refreshChart, delay * count,count);
        $('#powerTotalConsumption').html(powerTotalConsumption[count]+'度');
      }
    }
    

    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    $('#powerStartTime').html(time);      
    timeout = setTimeout(refreshChart, delay * count,count);     
    
    var timerVar = setTimeout(countTimer,delay);
    var totalSeconds = 0;   
    function countTimer() {
           ++totalSeconds;
           var hour = Math.floor(totalSeconds /3600);
           var minute = Math.floor((totalSeconds - hour*3600)/60);
           var seconds = totalSeconds - (hour*3600 + minute*60);
           if(hour < 10)
             hour = "0"+hour;
           if(minute < 10)
             minute = "0"+minute;
           if(seconds < 10)
             seconds = "0"+seconds;
           document.getElementById("powerUsageTime").innerHTML = hour + ":" + minute + ":" + seconds;
           if(totalSetSecs>0){
            timerVar = setTimeout(countTimer,delay);
          }else{
            clearTimeout(timerVar);       
          }
          totalSetSecs = totalSetSecs - times;
          //console.log(totalSetSecs);
    }

    function changeSpeed(speed){
      switch(speed) {
        case 0:
          $('#speedBar').css('width','0%');
          $('#speedDot').css('left','0%');         
          times = 1;
          delay = 1000 / times;          
          clearTimeout(timeout);
          timeout = setTimeout(refreshChart, delay * count_keep,count_keep);
          break;
        case 1:
          $('#speedBar').css('width','40%');
          $('#speedDot').css('left','35%');
          times = 2;
          delay = 1000 / times;   
          clearTimeout(timeout);
          timeout = setTimeout(refreshChart, delay * count_keep,count_keep);
          break; 
        case 2:
          $('#speedBar').css('width','66%');
          $('#speedDot').css('left','63%');
          times = 5;
          delay = 1000 / times;  
          clearTimeout(timeout);
          timeout = setTimeout(refreshChart, delay * count_keep,count_keep);
          break; 
        case 3:
          $('#speedBar').css('width','100%');
          $('#speedDot').css('left','97%');
          times = 10;
          delay = 1000 / times;  
          clearTimeout(timeout);
          timeout = setTimeout(refreshChart, delay * count_keep,count_keep);
         
          break;           
      }

    }
  </script>

</body>

</html>