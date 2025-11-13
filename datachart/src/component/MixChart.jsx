// MixChart.jsx

import "chart.js/auto";
import { plugins, scales } from "chart.js/auto";
import { Chart } from "react-chartjs-2";


export default function MixChart(){
    const data= {
        labels: ["1월", "2월", "3월", "4월", "5월", "6월"],
        datasets:[
            { // 막대 그래프
                type: "bar",
                label: "매출액(만원)",
                data: [320, 410, 380, 460, 520, 610],
                yAxisID: "y", //주축 - 왼쪽


            },
            { // 선 그래프
                type: "line",
                label: "성장률(%)",
                data: [5, 8, 6, 9, 11, 13],
                yAxisID: "y1",

            }
        ]
    };
    const options = {
        plugins:{
            title:{
                display:true,
                text:"월별 매출액 및 성장률",
                font: {size: 20, weight: "bold"},
            }
        },
        scales:{
            y:{
                position:"left",
            },
            y1:{
                position:"right",
                grid:{drawOnChartArea:false},// y1에 grid 하래 왜냐하면 주축이 아니라 눈금이 보이면 안 되니까?
            }
        }
    };
    return(
        <>
        <Chart data={data} type="bar" options={options}/> {/* type은 주축을 씀 */}
        </>
    );
}