// component  폴더 밑에 ChartBasic.jsx

import "chart.js/auto";
import { plugins, scales, Tooltip } from "chart.js/auto";
import { Bar } from "react-chartjs-2";

export default function ChartBasic1(){
    const data ={
        labels: ["1월", "2월", "3월"], // 함수는 고정 값만 정할 수 있음 그냥 기본으로 있는 거니까 그냥 외워     x축 레이블
        datasets : [ // y축 값들
            {
            label : "매출",
            data : [100, 50, 200],
            backgroundColor: "rgba(99, 102, 241, 0.5)", // 색(막대-면)
            borderColor: "rgba(99, 102, 241, 1",// 선 색
            borderWidth:1
            }
        ]  // 함수는 고정 값만 정할 수 있음
    };
    const options ={
        responsive: true,    // 반응형 함수인가 벼 ㅋㅋ 창의 크기에 따라 그래프가 자동으로 크기 조절
        maintainAspectRadio: false, // 그래프의 가로 세로 비율 유지
        plugins :{ // 차트의 제목, 범례, 툴팁 등 설정
            title: {
                display:true,
                text : "월별현황"},
                legend : {display:true, position:"left"}, // 범례 함수가 레전드
                Tooltip : {enabled:true, mode: "index", intersect:false}, //false로 하면 마우스가 근처에 가면 뜸
        },
        scales : {
            x:{
                title :{display:true, text: "월"}
            },
            y:{
                title:{display:true, text:"매출액(만원"}
            }
        }
    };
    return(
        <>
            <Bar data={data} options={options}/>
        </>
    );
}