import React, {useState, useEffect} from "react";

function MovieList(){
    // 영화 목록을 변경할 내용으로 설정
     const [movies, setMovie] = useState([]);
    
        useEffect(()=>{
            // 영화 데이터 가져오기
            const fetchMovies = ()=>{
                // 가상의 영화 데이터를 설정
                const dummyMovies = [
                    {id: 1, title: "별빛 바다 탐험대", genre:"판타지", price:12000},
                    {id: 2, title: "도시의 그림자", genre:"액션", price:15000},
                    {id: 3, title: "케이탑 데몬 헌터스", genre:"애니메이션", price:13000},
                ];
                setMovie(dummyMovies); // 가져온 영화 데이터를 상태 변수에 저장
            };
            fetchMovies();        
        },[]);
        return(
        <div>
            <h2>상영 중인 영화</h2>
            {movies.map(movie=>{
                <div key={movie.id} style={{margin: '10px', border: '1px solid #ccc', padding: '10px'}}>
                    <h3>제목: {movie.title}</h3>
                    <p>장르:${movie.genre}</p>
                    <p>가격:${movie.price}</p>
                    <button onClick={()=>alert(`{movie.title} 예매하기`)}>예매하기</button>
                 </div>
            })}
        </div>
    )
}
export default MovieList;