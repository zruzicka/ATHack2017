<?php

echo "<h2><center>Transparent Offers VIE - BKK</center></h2>";
echo "
<!-- Styles -->
<style>
#chartdiv {
	width	: 100%;
	height	: 700px;
}
										
</style>



<!-- Chart code -->
<script>
var chart = AmCharts.makeChart('chartdiv', {
    'type': 'serial',
    'theme': 'light',
    'marginRight': 40,
    'marginLeft': 40,
    'autoMarginOffset': 20,
    'mouseWheelZoomEnabled':true,
    'dataDateFormat': 'YYYY-MM-DD',
    'valueAxes': [{
        'id': 'v1',
        'axisAlpha': 0,
        'position': 'left',
        'ignoreAxisWidth':true
    }],
    'balloon': {
        'borderThickness': 1,
        'shadowAlpha': 0
    },
    'graphs': [{
        'id': 'g1',
        'balloon':{
          'drop':true,
          'adjustBorderColor':false,
          'color':'#ffffff'
        },
        'bullet': 'round',
        'bulletBorderAlpha': 1,
        'bulletColor': '#FFFFFF',
        'bulletSize': 5,
        'hideBulletsCount': 50,
        'lineThickness': 2,
        'title': 'red line',
        'useLineColorForBulletBorder': true,
        'valueField': 'value',
        'balloonText': '<span style=font-size:18px;>[[value]]</span>'
    }],
    'chartScrollbar': {
        'graph': 'g1',
        'oppositeAxis':false,
        'offset':30,
        'scrollbarHeight': 80,
        'backgroundAlpha': 0,
        'selectedBackgroundAlpha': 0.1,
        'selectedBackgroundColor': '#888888',
        'graphFillAlpha': 0,
        'graphLineAlpha': 0.5,
        'selectedGraphFillAlpha': 0,
        'selectedGraphLineAlpha': 1,
        'autoGridCount':true,
        'color':'#AAAAAA'
    },
    'chartCursor': {
        'pan': true,
        'valueLineEnabled': true,
        'valueLineBalloonEnabled': true,
        'cursorAlpha':1,
        'cursorColor':'#258cbb',
        'limitToGraph':'g1',
        'valueLineAlpha':0.2,
        'valueZoomable':true
    },
    'valueScrollbar':{
      'oppositeAxis':false,
      'offset':50,
      'scrollbarHeight':10
    },
    'categoryField': 'date',
    'categoryAxis': {
        'parseDates': true,
        'dashLength': 1,
        'minorGridEnabled': true
    },
    'export': {
        'enabled': true
    },
    'dataProvider': [

{'value':22480,'date':'2017-04-08'},{'value':15006,'date':'2017-04-09'},{'value':13350,'date':'2017-04-10'},{'value':14914,'date':'2017-04-11'},{'value':9694,'date':'2017-04-12'},{'value':14161,'date':'2017-04-13'},{'value':13511,'date':'2017-04-14'},{'value':12728,'date':'2017-04-15'},{'value':5744,'date':'2017-04-16'},{'value':12864,'date':'2017-04-17'},{'value':13235,'date':'2017-04-18'},{'value':6507,'date':'2017-04-19'},{'value':12564,'date':'2017-04-20'},{'value':12874,'date':'2017-04-21'},{'value':13336,'date':'2017-04-22'},{'value':6374,'date':'2017-04-23'},{'value':12346,'date':'2017-04-24'},{'value':12362,'date':'2017-04-25'},{'value':5843,'date':'2017-04-26'},{'value':12362,'date':'2017-04-27'},{'value':12864,'date':'2017-04-28'},{'value':6370,'date':'2017-04-29'},{'value':11987,'date':'2017-04-30'},{'value':12137,'date':'2017-05-01'},{'value':5843,'date':'2017-05-02'},{'value':11736,'date':'2017-05-03'},{'value':12067,'date':'2017-05-04'},{'value':11788,'date':'2017-05-05'},{'value':5843,'date':'2017-05-06'},{'value':12383,'date':'2017-05-07'},{'value':12546,'date':'2017-05-08'},{'value':5744,'date':'2017-05-09'},{'value':11575,'date':'2017-05-10'},{'value':12281,'date':'2017-05-11'},{'value':12066,'date':'2017-05-12'},{'value':5843,'date':'2017-05-13'},{'value':11819,'date':'2017-05-14'},{'value':12374,'date':'2017-05-15'},{'value':5768,'date':'2017-05-16'},{'value':11978,'date':'2017-05-17'},{'value':12535,'date':'2017-05-18'},{'value':12399,'date':'2017-05-19'},{'value':11854,'date':'2017-05-20'},{'value':14033,'date':'2017-05-21'},{'value':12376,'date':'2017-05-22'},{'value':5843,'date':'2017-05-23'},{'value':11848,'date':'2017-05-24'},{'value':12564,'date':'2017-05-25'},{'value':12728,'date':'2017-05-26'},{'value':5744,'date':'2017-05-27'},{'value':11854,'date':'2017-05-28'},{'value':12069,'date':'2017-05-29'},{'value':5744,'date':'2017-05-30'},{'value':11848,'date':'2017-05-31'},{'value':12067,'date':'2017-06-01'},{'value':12067,'date':'2017-06-02'},{'value':6374,'date':'2017-06-03'},{'value':12058,'date':'2017-06-04'},{'value':12538,'date':'2017-06-05'},{'value':5843,'date':'2017-06-06'},{'value':12067,'date':'2017-06-07'},{'value':12111,'date':'2017-06-08'},{'value':12111,'date':'2017-06-09'},{'value':5843,'date':'2017-06-10'},{'value':11627,'date':'2017-06-11'},{'value':12070,'date':'2017-06-12'},{'value':5843,'date':'2017-06-13'},{'value':11970,'date':'2017-06-14'},{'value':12403,'date':'2017-06-15'},{'value':12744,'date':'2017-06-16'},{'value':5843,'date':'2017-06-17'},{'value':12277,'date':'2017-06-18'},{'value':12536,'date':'2017-06-19'},{'value':6374,'date':'2017-06-20'},{'value':10834,'date':'2017-06-21'},{'value':12525,'date':'2017-06-22'},{'value':12839,'date':'2017-06-23'},{'value':7171,'date':'2017-06-24'},{'value':12391,'date':'2017-06-25'},{'value':12464,'date':'2017-06-26'},{'value':7437,'date':'2017-06-27'},{'value':12497,'date':'2017-06-28'},{'value':11509,'date':'2017-06-29'},{'value':15134,'date':'2017-06-30'},{'value':14310,'date':'2017-07-01'},{'value':13492,'date':'2017-07-02'},{'value':14945,'date':'2017-07-03'},{'value':9296,'date':'2017-07-04'},{'value':13400,'date':'2017-07-05'},{'value':13116,'date':'2017-07-06'},{'value':13516,'date':'2017-07-07'},{'value':11819,'date':'2017-07-08'},{'value':14950,'date':'2017-07-09'},{'value':12864,'date':'2017-07-10'},{'value':10756,'date':'2017-07-11'},{'value':13968,'date':'2017-07-12'},{'value':15979,'date':'2017-07-13'},{'value':15342,'date':'2017-07-14'},{'value':13412,'date':'2017-07-15'},{'value':13890,'date':'2017-07-16'},{'value':13538,'date':'2017-07-17'},{'value':14824,'date':'2017-07-18'},{'value':12416,'date':'2017-07-19'},{'value':14875,'date':'2017-07-20'},{'value':15245,'date':'2017-07-21'},{'value':10756,'date':'2017-07-22'},{'value':15969,'date':'2017-07-23'},{'value':15712,'date':'2017-07-24'},{'value':11743,'date':'2017-07-25'},{'value':11763,'date':'2017-07-26'},{'value':14823,'date':'2017-07-27'},{'value':15431,'date':'2017-07-28'},{'value':11819,'date':'2017-07-29'},{'value':15892,'date':'2017-07-30'},{'value':15056,'date':'2017-07-31'},{'value':10756,'date':'2017-08-01'},{'value':11144,'date':'2017-08-02'},{'value':14919,'date':'2017-08-03'},{'value':15585,'date':'2017-08-04'},{'value':9694,'date':'2017-08-05'},{'value':13241,'date':'2017-08-06'},{'value':14824,'date':'2017-08-07'},{'value':9694,'date':'2017-08-08'},{'value':10523,'date':'2017-08-09'},{'value':14813,'date':'2017-08-10'},{'value':15459,'date':'2017-08-11'},{'value':7171,'date':'2017-08-12'},{'value':13262,'date':'2017-08-13'},{'value':14453,'date':'2017-08-14'},{'value':7171,'date':'2017-08-15'},{'value':13230,'date':'2017-08-16'},{'value':12831,'date':'2017-08-17'},{'value':13229,'date':'2017-08-18'},{'value':7214,'date':'2017-08-19'},{'value':12765,'date':'2017-08-20'},{'value':12393,'date':'2017-08-21'},{'value':5843,'date':'2017-08-22'},{'value':12362,'date':'2017-08-23'},{'value':12589,'date':'2017-08-24'},{'value':12589,'date':'2017-08-25'},{'value':5843,'date':'2017-08-26'},{'value':13018,'date':'2017-08-27'},{'value':12568,'date':'2017-08-28'},{'value':6374,'date':'2017-08-29'},{'value':12441,'date':'2017-08-30'},{'value':12754,'date':'2017-08-31'},{'value':12721,'date':'2017-09-01'},{'value':5843,'date':'2017-09-02'},{'value':12831,'date':'2017-09-03'},{'value':12568,'date':'2017-09-04'},{'value':5843,'date':'2017-09-05'},{'value':11659,'date':'2017-09-06'},{'value':12348,'date':'2017-09-07'},{'value':12837,'date':'2017-09-08'},{'value':5843,'date':'2017-09-09'},{'value':12031,'date':'2017-09-10'},{'value':12546,'date':'2017-09-11'},{'value':6109,'date':'2017-09-12'},{'value':12835,'date':'2017-09-13'},{'value':12732,'date':'2017-09-14'},{'value':12831,'date':'2017-09-15'},{'value':6109,'date':'2017-09-16'},{'value':12718,'date':'2017-09-17'},{'value':12632,'date':'2017-09-18'},{'value':5744,'date':'2017-09-19'},{'value':13437,'date':'2017-09-22'},{'value':5843,'date':'2017-09-23'},{'value':16865,'date':'2017-09-24'},{'value':12650,'date':'2017-09-25'},{'value':5781,'date':'2017-09-26'},{'value':12358,'date':'2017-09-27'},{'value':13599,'date':'2017-09-28'},{'value':13843,'date':'2017-09-29'},{'value':5843,'date':'2017-09-30'},{'value':12908,'date':'2017-10-01'},{'value':12361,'date':'2017-10-02'},{'value':6374,'date':'2017-10-03'},{'value':11854,'date':'2017-10-04'},{'value':12847,'date':'2017-10-05'},{'value':13685,'date':'2017-10-06'},{'value':6374,'date':'2017-10-07'},{'value':13711,'date':'2017-10-08'},{'value':12434,'date':'2017-10-09'},{'value':5843,'date':'2017-10-10'},{'value':14964,'date':'2017-10-11'},{'value':12606,'date':'2017-10-12'},{'value':13127,'date':'2017-10-13'},{'value':5843,'date':'2017-10-14'},{'value':11898,'date':'2017-10-15'},{'value':12435,'date':'2017-10-16'},{'value':6109,'date':'2017-10-17'},{'value':11598,'date':'2017-10-18'},{'value':12587,'date':'2017-10-19'},{'value':13164,'date':'2017-10-20'},{'value':9030,'date':'2017-10-21'},{'value':12899,'date':'2017-10-22'},{'value':12195,'date':'2017-10-23'},{'value':7180,'date':'2017-10-24'},{'value':11988,'date':'2017-10-25'},{'value':12387,'date':'2017-10-26'},{'value':13127,'date':'2017-10-27'},{'value':9296,'date':'2017-10-28'},{'value':13837,'date':'2017-10-29'},{'value':7437,'date':'2017-10-30'},{'value':12361,'date':'2017-10-31'},{'value':11526,'date':'2017-11-01'},{'value':12491,'date':'2017-11-02'},{'value':6374,'date':'2017-11-03'},{'value':12589,'date':'2017-11-04'},{'value':12759,'date':'2017-11-05'},{'value':7171,'date':'2017-11-06'},{'value':12376,'date':'2017-11-07'},{'value':12589,'date':'2017-11-08'},{'value':12576,'date':'2017-11-09'},{'value':9694,'date':'2017-11-10'},{'value':13048,'date':'2017-11-11'},{'value':11765,'date':'2017-11-12'},{'value':6374,'date':'2017-11-13'},{'value':12768,'date':'2017-11-14'},{'value':12536,'date':'2017-11-15'},{'value':12368,'date':'2017-11-16'},{'value':6374,'date':'2017-11-17'},{'value':12589,'date':'2017-11-18'},{'value':12751,'date':'2017-11-19'},{'value':9030,'date':'2017-11-20'},{'value':12831,'date':'2017-11-21'},{'value':12403,'date':'2017-11-22'},{'value':12566,'date':'2017-11-23'},{'value':9119,'date':'2017-11-24'},{'value':12718,'date':'2017-11-25'},{'value':13102,'date':'2017-11-26'},{'value':9030,'date':'2017-11-27'},{'value':12562,'date':'2017-11-28'},{'value':12362,'date':'2017-11-29'},{'value':12525,'date':'2017-11-30'},{'value':6507,'date':'2017-12-01'},{'value':13102,'date':'2017-12-02'},{'value':13102,'date':'2017-12-03'},{'value':9019,'date':'2017-12-04'},{'value':14924,'date':'2017-12-05'},{'value':12403,'date':'2017-12-06'},{'value':13226,'date':'2017-12-07'},{'value':6463,'date':'2017-12-08'},{'value':13837,'date':'2017-12-09'},{'value':14962,'date':'2017-12-10'},{'value':6386,'date':'2017-12-11'},{'value':14824,'date':'2017-12-12'},{'value':14797,'date':'2017-12-13'},{'value':14672,'date':'2017-12-14'},{'value':10756,'date':'2017-12-15'},{'value':16954,'date':'2017-12-16'},{'value':20420,'date':'2017-12-17'},{'value':10756,'date':'2017-12-18'},{'value':14908,'date':'2017-12-19'},{'value':17287,'date':'2017-12-20'},{'value':18322,'date':'2017-12-21'},{'value':13678,'date':'2017-12-22'},{'value':17445,'date':'2017-12-23'},{'value':16898,'date':'2017-12-24'},{'value':13412,'date':'2017-12-25'},{'value':17913,'date':'2017-12-26'},{'value':16930,'date':'2017-12-27'},{'value':16361,'date':'2017-12-28'},{'value':12084,'date':'2017-12-29'},{'value':16078,'date':'2017-12-30'},{'value':14508,'date':'2017-12-31'},{'value':9694,'date':'2018-01-01'},{'value':14421,'date':'2018-01-02'},{'value':14161,'date':'2018-01-03'},{'value':14628,'date':'2018-01-04'},{'value':10225,'date':'2018-01-05'},{'value':15272,'date':'2018-01-06'},{'value':14511,'date':'2018-01-07'},{'value':8946,'date':'2018-01-08'},{'value':12831,'date':'2018-01-09'},{'value':13085,'date':'2018-01-10'},{'value':14178,'date':'2018-01-11'},{'value':9030,'date':'2018-01-12'},{'value':12759,'date':'2018-01-13'},{'value':12837,'date':'2018-01-14'},{'value':9030,'date':'2018-01-15'},{'value':12589,'date':'2018-01-16'},{'value':14408,'date':'2018-01-17'},{'value':13230,'date':'2018-01-18'},{'value':9694,'date':'2018-01-19'},{'value':14475,'date':'2018-01-20'},{'value':12831,'date':'2018-01-21'},{'value':9030,'date':'2018-01-22'},{'value':14968,'date':'2018-01-23'},{'value':14962,'date':'2018-01-24'},{'value':12936,'date':'2018-01-25'},{'value':9694,'date':'2018-01-26'},{'value':12717,'date':'2018-01-27'},{'value':14952,'date':'2018-01-28'},{'value':13834,'date':'2018-01-29'},{'value':14156,'date':'2018-01-30'},{'value':12718,'date':'2018-01-31'},{'value':13230,'date':'2018-02-01'},{'value':9694,'date':'2018-02-02'},{'value':13837,'date':'2018-02-03'},{'value':13837,'date':'2018-02-04'},{'value':9163,'date':'2018-02-05'},{'value':14550,'date':'2018-02-06'},{'value':14641,'date':'2018-02-07'},{'value':14303,'date':'2018-02-08'},{'value':9960,'date':'2018-02-09'},{'value':12934,'date':'2018-02-10'},{'value':14960,'date':'2018-02-11'},{'value':12838,'date':'2018-02-12'},{'value':14962,'date':'2018-02-13'},{'value':12877,'date':'2018-02-14'},{'value':15006,'date':'2018-02-15'},{'value':9960,'date':'2018-02-16'},{'value':18724,'date':'2018-02-17'},{'value':9296,'date':'2018-02-19'},{'value':12722,'date':'2018-02-21'},{'value':18083,'date':'2018-02-22'},{'value':13807,'date':'2018-02-23'},{'value':12943,'date':'2018-02-24'},{'value':11806,'date':'2018-02-26'},{'value':14040,'date':'2018-03-01'},{'value':21428,'date':'2018-03-02'},{'value':14900,'date':'2018-03-03'},{'value':25003,'date':'2018-03-04'},{'value':11766,'date':'2018-03-05'},{'value':51825,'date':'2018-03-07'},{'value':15345,'date':'2018-03-09'},{'value':12831,'date':'2018-03-10'},{'value':18883,'date':'2018-03-14'},{'value':19303,'date':'2018-03-15'},{'value':18147,'date':'2018-03-19'}

]


});

chart.addListener('rendered', zoomChart);

zoomChart();

function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
}
</script>

<!-- HTML -->
<div id='chartdiv'></div>
";

