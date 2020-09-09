<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div>
                    <canvas id="myChart" width="250" height="250"></canvas>
                </div>
                <div class='mt-3'>
                    <div class='row border font-weight-bold'>
                        <div class='col-5'>
                            Segment
                        </div>
                        <div class='col-3'>
                            Assets
                        </div>
                        <div class='col-4'>
                            Percentage
                        </div>
                    </div>
                    <div class='row border' v-for="(manufacture, index) in this.chart.labels" :class="(index % 2)?'div-striped':''">
                        <div class='col-5' v-bind:style="{ color: chart.color[index]}">
                            {{manufacture}}
                        </div>
                        <div class='col-3'>
                            {{(chart.data[index])?chart.data[index]:0}}
                        </div>
                        <div class='col-4'>
                            {{(chart.data[index])?((chart.data[index]/chart.totalAssets)*100).toFixed(1)+' %':'0.0%'}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['chartdata'],
        data() {
          return {
             chart: {
                 color: [//might right some kind of auto generating color
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(75, 192, 192, 1)',
                     'rgba(153, 102, 255, 1)',
                     'rgba(255, 159, 64, 1)'
                 ],
                 labels: [],
                 data: [],
                 totalAssets: 0,
             }
          }
        },
        mounted() {
            this.processChart();
        },
        methods : {
            clearChartVariables() {
                this.chart.labels   = [];
                this.chart.data     = [];
            },
            processChart() {
                this.clearChartVariables();

                let chartData = JSON.parse(this.chartdata);
                for (var key in chartData)
                {
                    this.chart.labels.push(key);
                    if(chartData[key]) {
                        this.chart.data.push(chartData[key].assets_count);
                        this.chart.totalAssets += chartData[key].assets_count;
                    }
                    else
                        this.chart.data.push(0);
                }
                this.loadChart();
            },
            loadChart() {
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: this.chart.labels,
                        datasets: [{
                            label: '# of Assets per Manufacturer',
                            data: this.chart.data,
                            backgroundColor: this.chart.color,
                            // borderColor: [
                            //     'rgba(255, 99, 132, 1)',
                            //     'rgba(54, 162, 235, 1)',
                            //     'rgba(255, 206, 86, 1)',
                            //     'rgba(75, 192, 192, 1)',
                            //     'rgba(153, 102, 255, 1)',
                            //     'rgba(255, 159, 64, 1)'
                            // ],
                            // borderWidth: 1
                        }]
                    },
        			options: {
                        legend: {
                            display: false
                        },
        				responsive: true,
        			}
                });
            }
        }
    }
</script>
