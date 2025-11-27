// testLineChart.jsx

import "chart.js/auto";
import {Line} from "react-chartjs-2";

export default function TestLineChart2(){
    const fire = [
        {month: "1월", score: 44},
        {month: "2월", score: 82},
        {month: "3월", score: 44},
        {month: "4월", score: 94},
        {month: "5월", score: 20},
        {month: "6월", score: 3},
        {month: "7월", score: 7},
        {month: "8월", score: 6},
        {month: "9월", score: 1},
        {month: "10월", score: 0},
        {month: "11월", score: 24},
        {month: "12월", score: 24},
    ];
    const[labels, score] = [
        fire.map((i)=>i.month),
        fire.map((i)=>i.score),
    ];
    const data = {
        labels,
        datasets: [
            {
                label: "산불 발생 횟수",
                data: score,
                pointHoverRadius: 15,
                pointRadius: 10,
                borderColor:"pink",
            }
        ]
    }
    const options={}
    return(
        <>
        <Line data={data} options={options}/>
        </>
    );
}