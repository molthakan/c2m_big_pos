
<div class="col-md-10 col-sm-9" ng-app="firstapp" ng-controller="Index">
	
<div class="panel panel-default">
	<div class="panel-body">

<form class="form-inline">
<div class="form-group">
เดือน:
<select ng-model="month" class="form-control">
	<option value="01">
		1
	</option>
	<option value="02">
		2
	</option>
	<option value="03">
		3
	</option>
	<option value="04">
		4
	</option>
	<option value="05">
		5
	</option>
	<option value="06">
		6
	</option>
	<option value="7">
		7
	</option>
	<option value="08">
		8
	</option>
	<option value="09">
		9
	</option>
	<option value="10">
		10
	</option>
	<option value="11">
		11
	</option>
	<option value="12">
		12
	</option>
	
</select>
</div>
<div class="form-group">
ปี:
<select ng-model="year" class="form-control">
	<option value="2017">
		2017
	</option>
	<option value="2018">
		2018
	</option>
	<option value="2019">
		2019
	</option>
	<option value="2020">
		2020
	</option>
	<option value="2021">
		2021
	</option>
	<option value="2022">
		2022
	</option>
</select>
</div>

<div class="form-group">
<button type="submit" ng-click="reportdaylist()" class="btn btn-success" placeholder="" title="<?=$lang_search?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</div>

<!-- <div class="form-group">
<button class="btn btn-info"  ng-click="DownloadExcel()" title="ดาวน์โหลด" ><span class="glyphicon glyphicon-save" aria-hidden="true"></button> 
</div> -->

</form>
<hr />



	<div id="bar"></div>

<hr />
<table id="headerTable" class="table table-hover table-bordered">
	<thead>
		<tr class="trheader">
		<th style="text-align: center;width: 10px;">Day</th>
			
			<th style="text-align: center;">กำไร</th>
			
		</tr>
	</thead>
	<tbody style="font-size: 16px;font-weight: bold;">
		<tr>
		<td>1</td>
		<td align="right">{{daylist[0].d1-c1 | number:2}}</td>
		</tr>

		<tr>
		<td>2</td>
		<td align="right">{{daylist[0].d2-c2 | number:2}}</td>
		</tr>

		<tr>
		<td>3</td>
		<td align="right">{{daylist[0].d3-c3 | number:2}}</td>
		</tr>

		<tr>
		<td>4</td>
		<td align="right">{{daylist[0].d4-c4 | number:2}}</td>
		</tr>

		<tr>
		<td>5</td>
		<td align="right">{{daylist[0].d5-c5 | number:2}}</td>
		</tr>

		<tr>
		<td>6</td>
		<td align="right">{{daylist[0].d6-c6 | number:2}}</td>
		</tr>

		<tr>
		<td>7</td>
		<td align="right">{{daylist[0].d7-c7 | number:2}}</td>
		</tr>

		<tr>
		<td>8</td>
		<td align="right">{{daylist[0].d8-c8 | number:2}}</td>
		</tr>

		<tr>
		<td>9</td>
		<td align="right">{{daylist[0].d9-c9 | number:2}}</td>
		</tr>

		<tr>
		<td>10</td>
		<td align="right">{{daylist[0].d10-c10 | number:2}}</td>
		</tr>

		<tr>
		<td>11</td>
		<td align="right">{{daylist[0].d11-c11 | number:2}}</td>
		</tr>

		<tr>
		<td>12</td>
		<td align="right">{{daylist[0].d12-c12 | number:2}}</td>
		</tr>

		<tr>
		<td>13</td>
		<td align="right">{{daylist[0].d13-c13 | number:2}}</td>
		</tr>

		<tr>
		<td>14</td>
		<td align="right">{{daylist[0].d14-c14 | number:2}}</td>
		</tr>

		<tr>
		<td>15</td>
		<td align="right">{{daylist[0].d15-c15 | number:2}}</td>
		</tr>

		<tr>
		<td>16</td>
		<td align="right">{{daylist[0].d16-c16 | number:2}}</td>
		</tr>

		<tr>
		<td>17</td>
		<td align="right">{{daylist[0].d17-c17 | number:2}}</td>
		</tr>

		<tr>
		<td>18</td>
		<td align="right">{{daylist[0].d18-c18 | number:2}}</td>
		</tr>

		<tr>
		<td>19</td>
		<td align="right">{{daylist[0].d19-c19 | number:2}}</td>
		</tr>

		<tr>
		<td>20</td>
		<td align="right">{{daylist[0].d20-c20 | number:2}}</td>
		</tr>

		<tr>
		<td>21</td>
		<td align="right">{{daylist[0].d21-c21 | number:2}}</td>
		</tr>

		<tr>
		<td>22</td>
		<td align="right">{{daylist[0].d22-c22 | number:2}}</td>
		</tr>

		<tr>
		<td>23</td>
		<td align="right">{{daylist[0].d23-c23 | number:2}}</td>
		</tr>

		<tr>
		<td>24</td>
		<td align="right">{{daylist[0].d24-c24 | number:2}}</td>
		</tr>

		<tr>
		<td>25</td>
		<td align="right">{{daylist[0].d25-c25 | number:2}}</td>
		</tr>

		<tr>
		<td>26</td>
		<td align="right">{{daylist[0].d26-c26 | number:2}}</td>
		</tr>

		<tr>
		<td>27</td>
		<td align="right">{{daylist[0].d27-c27 | number:2}}</td>
		</tr>

		<tr>
		<td>28</td>
		<td align="right">{{daylist[0].d28-c28 | number:2}}</td>
		</tr>

		<tr>
		<td>29</td>
		<td align="right">{{daylist[0].d29-c29 | number:2}}</td>
		</tr>

		<tr>
		<td>30</td>
		<td align="right">{{daylist[0].d30-c30 | number:2}}</td>
		</tr>

		<tr>
		<td>31</td>
		<td align="right">{{daylist[0].d31-c31 | number:2}}</td>
		</tr>

		
	</tbody>
</table>

<hr />
<button id="btnExport" class="btn btn-default" onclick="fnExcelReport();"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span> 
<?=$lang_downloadexcel?>
 </button>


	</div>

	</div>

	</div>




			<script>



var app = angular.module('firstapp', []);
app.controller('Index', function($scope,$http,$location) {



$scope.year = '<?php echo date('Y',time());?>';

$scope.month = '<?php echo date('m',time());?>';


$scope.reportdaylist = function(){
$http.post("Reportsumaryday/daylist",{
	year: $scope.year,
	month: $scope.month
	}).success(function(data){
$scope.daylist = data.data;
$scope.c1 = data.c1;
$scope.c2 = data.c2;
$scope.c3 = data.c3;
$scope.c4 = data.c4;
$scope.c5 = data.c5;
$scope.c6 = data.c6;
$scope.c7 = data.c7;
$scope.c8 = data.c8;
$scope.c9 = data.c9;
$scope.c10 = data.c10;
$scope.c11 = data.c11;
$scope.c12 = data.c12;
$scope.c13 = data.c13;
$scope.c14 = data.c14;
$scope.c15 = data.c15;
$scope.c16 = data.c16;
$scope.c17 = data.c17;
$scope.c18 = data.c18;
$scope.c19 = data.c19;
$scope.c20 = data.c20;
$scope.c21 = data.c21;
$scope.c22 = data.c22;
$scope.c23 = data.c23;
$scope.c24 = data.c24;
$scope.c25 = data.c25;
$scope.c26 = data.c26;
$scope.c27 = data.c27;
$scope.c28 = data.c28;
$scope.c29 = data.c29;
$scope.c30 = data.c30;
$scope.c31 = data.c31;

$scope.datac = [];
angular.forEach($scope.daylist,function(item){
$scope.datac.push(
	{count: item.d1-$scope.c1,name: '1'},
	{count: item.d2-$scope.c2,name: '2'},
	{count: item.d3-$scope.c3,name: '3'},
	{count: item.d4-$scope.c4,name: '4'},
	{count: item.d5-$scope.c5,name: '5'},
	{count: item.d6-$scope.c6,name: '6'},
	{count: item.d7-$scope.c7,name: '7'},
	{count: item.d8-$scope.c8,name: '8'},
	{count: item.d9-$scope.c9,name: '9'},
	{count: item.d10-$scope.c10,name: '10'},
	{count: item.d11-$scope.c11,name: '11'},
	{count: item.d12-$scope.c12,name: '12'},
	{count: item.d13-$scope.c13,name: '13'},
	{count: item.d14-$scope.c14,name: '14'},
	{count: item.d15-$scope.c15,name: '15'},
	{count: item.d16-$scope.c16,name: '16'},
	{count: item.d17-$scope.c17,name: '17'},
	{count: item.d18-$scope.c18,name: '18'},
	{count: item.d19-$scope.c19,name: '19'},
	{count: item.d20-$scope.c20,name: '20'},
	{count: item.d21-$scope.c21,name: '21'},
	{count: item.d22-$scope.c22,name: '22'},
	{count: item.d23-$scope.c23,name: '23'},
	{count: item.d24-$scope.c24,name: '24'},
	{count: item.d25-$scope.c25,name: '25'},
	{count: item.d26-$scope.c26,name: '26'},
	{count: item.d27-$scope.c27,name: '27'},
	{count: item.d28-$scope.c28,name: '28'},
	{count: item.d29-$scope.c29,name: '29'},
	{count: item.d30-$scope.c30,name: '30'},
	{count: item.d31-$scope.c31,name: '31'}
	);
});

$scope.Chart($scope.datac);


        });
};
$scope.reportdaylist();





$scope.datac = [];


$scope.Chart = function(datac){
$('#bar').empty();
Morris.Bar({
  element: 'bar',
  data: datac,
  xkey: 'name',
  ykeys: ['count'],
  labels: ['กำไร'],
  barColors: function (row, series, type) {
    if (type === 'bar') {
     var letters = '0123456789ABCDEF';
    var color = '#f0ad4e';
    /*var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }*/
    return color;
    }
  }

});
};

$scope.Openchart = function(){
$scope.showchart = true;
};

$scope.Opentable = function(){
$scope.showchart = false;
};


});

</script>