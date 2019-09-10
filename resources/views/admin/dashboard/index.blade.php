@extends('admin.master')


@section('page-header','Dashboard')

@section('col','col-md-12')

@section('display-detail','display:none')

@section('display-main','style=display:none')

@section('additional-info')
<div class="dashboard" style="padding:20px">

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$project}}</h3>

                    <p>Projects</p>
                </div>
                <div class="icon">
                    <i class="fas fa-project-diagram"></i>

                </div>
                <a href="{{route('project')}}" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$propertyCount}}</h3>
                    <p>
                        <?php
                            if($propertyCount>1){
                                echo('Properties');
                            }else{
                                echo('Property');
                            }
                        ?>

                    </p>

                </div>
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>
                <a href="{{route('property')}}" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$bookCount}}</h3>

                    <p>
                        <?php
                            if($bookCount>1){
                                echo('Books');
                            }else{
                                echo('Books');
                            }
                        ?>
                    </p>

                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>

                </div>
                <a href="{{route('book')}}" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$contractCount}}</h3>
                    <p>
                        <?php
                            if($contractCount>1){
                                echo('Contracts');
                            }else{
                                echo('Contract');
                            }
                        ?>
                    </p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-signature"></i>

                </div>
                <a href="{{route('contract')}}" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>




    <div class="row" style="margin:2px">

        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fas fa-chart-pie"></i>

                <h3 class="box-title">Income</h3>

                <div id="chartContainer" style="height: 370px; width: 100%;"></div>


            </div>
            <div class="box-body">

            </div>
            <!-- /.box-body-->
        </div>

    </div>

</div>



@endsection

@section('script')


<script type="text/javascript" src="{{url('admin/js/jquery.canvasjs.min.js')}}"></script>
<script>
    function explodePie (e) {
        if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();

    }

    var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
	
		horizontalAlign: "left"
	},
        data: [{
            type: "doughnut",
            startAngle: 60,
            //innerRadius: 60,
            indexLabelFontSize: 17,
            indexLabel: "{label} - #percent%",
            showInLegend: true,
            legend:{
                cursor: "pointer",
                itemclick: explodePie
            },
            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
            dataPoints: [
                { y: {{$book}}, label:"Book", name: "Book: {{$book}} $"},
                { y: {{$contract}}, label: "Contract", name: "Contract: {{$contract}} $", exploded: true },
                { y: {{$installment}}, label: "Installment",  name: "Installment: {{$installment}} $" },
            ]
        }]
    });
    chart.render();

</script>





@endsection