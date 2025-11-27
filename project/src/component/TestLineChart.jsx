// testLineChart.jsx

import "chart.js/auto";
import {Line} from "react-chartjs-2";

export default function TestLineChart(){
    const fire = [
        {month: "1월", score: 29},
        {month: "2월", score: 42},
        {month: "3월", score: 171},
        {month: "4월", score: 184},
        {month: "5월", score: 26},
        {month: "6월", score: 38},
        {month: "7월", score: 0},
        {month: "8월", score: 1},
        {month: "9월", score: 2},
        {month: "10월", score: 35},
        {month: "11월", score: 46},
        {month: "12월", score: 46},
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