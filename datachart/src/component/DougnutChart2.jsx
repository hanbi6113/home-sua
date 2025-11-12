// DougnutChart2.jsx

import "chart.js/auto";
import { Doughnut } from "react-chartjs-2";

export default function DongnutChart2(){
    const data = {
        labels: ["프로젝트 진행률"],
        datasets : [
            {
                label: "1팀",
                data: [15, 85], // 15% 진행하였고 85% 남았다면
                cutout: "70%",
            }
        ]
    };
    const options={
        rotaition: 0, // 시작 각도
        circumference:180, // 시작 각도에서 몇 도까지 그리나?
    }
    return(
        <>
        <Doughnut data={data} options={options}/>
        </>
    );
}