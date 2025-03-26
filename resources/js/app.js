import "./bootstrap";
import ApexCharts from "apexcharts";

const chartData = document.getElementById("chartData");

const labels = JSON.parse(chartData.getAttribute("data-labels"));
const prices = JSON.parse(chartData.getAttribute("data-prices"));

const options = {
    chart: {
        height: 280,
        type: "area",
    },
    dataLabels: {
        enabled: false,
    },
    series: [
        {
            name: "Total Penjualan",
            data: prices,
        },
    ],
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100],
        },
    },
    xaxis: {
        categories: labels,
    },
};

const chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();
