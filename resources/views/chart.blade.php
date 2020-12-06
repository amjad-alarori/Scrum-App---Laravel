@extends('layouts.layout')

@section('title')
    chart
@endsection

@section('content')
    <div id="container"
         class="h-100 flex flex-col md:justify-center items-center pt-6 md:pt-0 bg-gray-100"></div>
@endsection

@section('Script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
    </script>

    <script language="JavaScript">
        function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
                ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General',
                    'Western', 'Literature', { role: 'annotation' } ],
                ['2010', 10, 24, 20, 32, 18, 5, ''],
                ['2020', 16, 22, 23, 30, 16, 9, ''],
                ['2030', 28, 19, 29, 30, 12, 13, '']
            ]);

            /**
             * can set the data also as below
             */
        /
            // data.addColumn('string', 'Name');
            // data.addColumn('number', 'Salary');
            // data.addColumn('boolean', 'Full Time');
            // data.addRows(5);
            // data.setCell(0, 0, 'John');
            // data.setCell(0, 1, 10000, '$10,000');
            // data.setCell(0, 2, true);
            // data.setCell(1, 0, 'Mary');
            // data.setCell(1, 1, 25000, '$25,000');
            // data.setCell(1, 2, true);
            // data.setCell(2, 0, 'Steve');
            // data.setCell(2, 1, 8000, '$8,000');
            // data.setCell(2, 2, false);

            var options = {
                title: 'Population (in millions)',
                width: 600,
                height: 400,
                isStacked:true,
                legend: { position: 'right', maxLines: 3 }
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawChart);
    </script>
@endsection
