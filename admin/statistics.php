<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>系统统计</title>
    <!-- 引入 echarts.js -->
    <script src="https://cdn.bootcss.com/echarts/3.5.4/echarts.js"></script>  
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>   
</head>
<body>
    <?php
    require("../connect.php"); 
    $sql = "SELECT status, COUNT(*) from stuinfo GROUP BY status";
    $result=$conn->query($sql);
    $num=array();
    $i=0;
    while($row=$result->fetch_assoc()){
        $num[$i++]=$row['COUNT(*)'];
    }
    ?>
    <div id="id1" style="width: 600px;height:400px;"></div>
    <div id="id2" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart1 = echarts.init(document.getElementById('id1'));
        var myChart2=echarts.init(document.getElementById('id2'));
        // 指定图表的配置项和数据
        var option1 = {
            title: {
                text: '入党人数'
            },
            tooltip: {},
            legend: {
                data:['人数']
            },
            xAxis: {
                data: ["团员","入党积极分子","预备党员","正式党员"]
            },
            yAxis: {},
            series: [{
                name: '人数',
                type: 'bar',
                data: [33, 50, 21, 17]
            }]
        };
        var pieData=[
           {
               name:'团员',
               value:33
           },
           {
               name:'入党积极分子',
               value:50
           },
           {
               name:'预备党员',
               value:21
           },
           {
               name:'正式党员',
               value:17
           },
       ]
    var option2={
        series:[
            {type: 'pie',
            data:pieData    
        }
        ]
    }
        // 使用刚指定的配置项和数据显示图表。
        myChart1.setOption(option1);
        myChart2.setOption(option2);
    </script>
</body>